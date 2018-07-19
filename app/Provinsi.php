<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    public $timestamps = false;

    protected $fillable = [
        'id', 'nama', 'no_prov'
    ];

    /**
     * mendapatkan datakabupaten
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getKabupaten($queryReturn = true)
    {
        $data = $this->hasMany('App\Models\Kabupaten', 'provinsi_id');
        return $queryReturn ? $data : $data->get();
    }

    /**
     * mendapatkan data kecamatan
     * @param bool $queryReturn
     * @return mixed
     */
    public function getKecamatan($queryReturn = true)
    {
        $data = $this->getKabupaten(true)->select('id')->get()->toArray();
        $data = array_flatten($data);
        $data = Kecamatan::whereIn('kabupaten_id', $data);
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
        $data = Kelurahan::whereIn('kecamatan_id', array_flatten($data));
        return $queryReturn ? $data : $data->get();
    }

    /**
     * @param $no
     * @return mixed
     */
    public static function findByNo($no)
    {
        return Provinsi::where('no_prov', $no)->first();
    }
}
