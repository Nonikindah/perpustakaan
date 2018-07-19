<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Persyaratan;
use App\Models\Mengurus;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'kecamatan_id',
        'nama',
        'no_kel',
        'no_kec',
        'no_kab',
        'no_prov'
    ];

    /**
     * mendapatkan data kecamatan
     * 
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getKecamatan($queryReturn = true)
    {
        $data = $this->belongsTo('App\Models\Kecamatan', 'kecamatan_id');
        return $queryReturn ? $data : $data->first();
    }

    /**
     * mendapatkan data kabupaten
     * 
     * @param bool $queryReturn
     * @return mixed
     */
    public function getKabupaten($queryReturn = true)
    {
        return $this->getKecamatan(false)->getKabupaten($queryReturn);
    }

    public function getKabupatenByNo()
    {
        return Kabupaten::where('no_kab', $this->no_kab)->where('no_prov', $this->no_prov)->first();
    }

    /**
     * mendapatkan data provinsi
     * 
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
     * mendapatkan data user
     * 
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getUser($queryReturn = true)
    {
        $data = $this->hasMany('App\Models\User', 'kelurahan_id');
        return $queryReturn ? $data : $data->get();
    }

    /**
     * mendapatkan kepengurusan
     * 
     * @param bool $queryReturn
     * @return mixed
     */
    public function getMengurus($layanan)
    {
//        dd($layanan->nama);
        if ($layanan instanceof Collection) {
            return Mengurus::where('konfirmasi', true)->whereIn('layanan_id', $layanan->pluck('id')->toArray())
            ->whereHas('getDataPersyaratan', function ($query) use ($layanan) {
                $query->where('nama', str_replace(' ', '_', strtolower($layanan->nama)) . '.kelurahan')->where('value', $this->id);
            });
        }
        else {
            return Mengurus::where('konfirmasi', true)->where('layanan_id', $layanan->id)
            ->whereHas('getDataPersyaratan', function ($query) use ($layanan) {
                $query->where('nama', str_replace(' ', '_', strtolower($layanan->nama)) . '.kelurahan')->where('value', $this->id);
            });
        }
    }

    public static function findByNo($no, $no_kec, $no_kab, $no_prov)
    {
        $data = Kelurahan::where('no_kel', $no)->where('no_kec', $no_kec)->where('no_kab', $no_kab)->where('no_prov', $no_prov)->get();
        if ($data->count() > 0)
            return $data->first();
        return null;
    }

}
