<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Models\mengurus;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    public $timestamps = false;

    protected $fillable = [
        'id', 'kabupaten_id', 'nama'
    ];

    /**
     * mendapatkan data kabupaten
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getKabupaten($queryReturn = true)
    {
        $data = $this->belongsTo('App\Models\Kabupaten', 'kabupaten_id');
        return $queryReturn ? $data : $data->first();
    }

    /**
     * mendapatkan data provinsi
     * @param bool $queryReturn
     * @return mixed
     */
    public function getProvinsi($queryReturn = true)
    {
        return $this->getKabupaten(false)->getProvinsi($queryReturn);
    }

    public function getProvinsiByNo()
    {
        return Provinsi::where('no_prov', $this->no_prov)->first();
    }

    /**
     * mendapatkan data kelurahan
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getKelurahan($queryReturn = true)
    {
        $data = $this->hasMany('App\Models\Kelurahan', 'kecamatan_id');
        return $queryReturn ? $data : $data->get();
    }

    /**
     * mendapatkan data user
     * @param bool $queryReturn
     * @return mixed
     */
    public function getUser($queryReturn = true)
    {
        $kelurahan_id = $this->getKelurahan(true)->select('id')->get()->toArray();
        $kelurahan_id = array_flatten($kelurahan_id);
        $data = User::whereIn('kelurahan_id', $kelurahan_id);
        return $queryReturn ? $data : $data->get();
    }

    /**
     * mendapatkan data kepengurusan per kecamatan
     * @param bool $queryReturn
     * @return mixed
     */
    public function getMengurus($layanan)
    {
        if ($layanan instanceof Collection) {
            return Mengurus::where('konfirmasi', true)->whereIn('layanan_id', $layanan->pluck('id')->toArray())->whereHas('getDataPersyaratan', function ($query) use ($layanan) {
                $query->where('nama', strtolower($layanan->nama) . '.kelurahan')->whereIn('value', $this->getKelurahan(false)->pluck('id')->toArray());        
            });
        }
        else {
            return Mengurus::where('konfirmasi', true)->where('layanan_id', $layanan->id)->whereHas('getDataPersyaratan', function ($query) use ($layanan) {
                $query->where('nama', strtolower($layanan->nama) . '.kelurahan')->whereIn('value', $this->getKelurahan(false)->pluck('id')->toArray());        
            });
        }
    }

    public static function findByNo($no, $no_kab, $no_prov)
    {
        $data = Kecamatan::where('no_kec', $no)->where('no_kab', $no_kab)->where('no_prov', $no_prov)->get();
        if ($data->count() > 0)
            return $data->first();
        return null;
    }
}
