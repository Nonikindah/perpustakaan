<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
       'id_anggota', 'nama', 'identitas','alamat_lengkap','jenkel','pekerjaan','telp', 'kelurahan_id'
    ];
    
    protected $primaryKey = 'id_anggota';
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $table = 'anggota';

    /**
     * data kelurahan
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getKelurahan($queryReturn = true)
    {
        $data = $this->belongsTo('App\Kelurahan', 'kelurahan_id');
        return ($queryReturn ? $data : $data->first());
    }

    public function getBuku($queryreturn = true){
        $data = $this->belongsToMany('App\Buku','pinjam','anggota_id','buku_id');
        if ($queryreturn)
            return $data;
        return $data->get();
    }
}
