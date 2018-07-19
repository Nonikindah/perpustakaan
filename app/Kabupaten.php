<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    public $timestamps = false;

    protected $fillable = [
        'id', 'provinsi_id', 'nama', 'no_kab', 'no_prov'
    ];


    /**
     * mendapatkan data provinsi
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getProvinsi($queryReturn = true)
    {
        $data = $this->belongsTo('App\Models\Provinsi', 'provinsi_id');
        return $queryReturn ? $data : $data->first();
    }

    /**
     * mendapatkan data kecamatan
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getKecamatan($queryReturn = true)
    {
        $data = $this->hasMany('App\Models\Kecamatan', 'kabupaten_id');
        return $queryReturn ? $data : $data->get();
    }

    /**
     * mendapatkan data kelurahan
     * @param bool $queryReturn
     * @return mixed
     */
    public function getKelurahan($queryReturn = true)
    {
        $data = $this->getKecamatan(true)->select('id')->get()->toArray();
        $data = array_flatten($data);
        $data = Kelurahan::whereIn('kecamatan_id', $data);
        return $queryReturn ? $data : $data->get();
    }

    /**
     * mendapatkan kota madiun
     * @return mixed
     */
    public static function getKotaMadiun()
    {
        return Kabupaten::whereRaw("nama ILIKE '%kota madiun%'")->first();
    }

    public static function findByNo($no, $no_prov)
    {
        $data = Kabupaten::where('no_kab', $no)->where('no_prov', $no_prov)->get();
        if ($data->count() > 0)
            return $data->first();
        return null;
    }
}
