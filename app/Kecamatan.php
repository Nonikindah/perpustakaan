<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

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
        $data = $this->belongsTo('App\Kabupaten', 'kabupaten_id');
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
        $data = $this->hasMany('App\Kelurahan', 'kecamatan_id');
        return $queryReturn ? $data : $data->get();
    }


    public static function findByNo($no, $no_kab, $no_prov)
    {
        $data = Kecamatan::where('no_kec', $no)->where('no_kab', $no_kab)->where('no_prov', $no_prov)->get();
        if ($data->count() > 0)
            return $data->first();
        return null;
    }
}
