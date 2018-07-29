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
}
