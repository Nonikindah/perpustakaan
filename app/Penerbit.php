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
     * data Buku
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getBuku($queryReturn = true){
        $data = $this->belongsToMany('App\Buku','penerbit_buku','penerbit_id','buku_id');
        if($queryReturn)
            return $data;
        return $data->get();
    }
}
