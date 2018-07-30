<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable = [
        'id','nama', 'alamat','telepon','kontak_person','keterangan','kota'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'penerbit';

    /**
     * mendapatkan data buku
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getBuku($queryReturn = true){
        $data = $this->hasMany('App\Buku','penerbit_id');
        return ($queryReturn ? $data : $data->get());
    }
}
