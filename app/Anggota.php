<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
       'id_anggota', 'nama', 'identitas', 'alamat','alamat_lengkap','jenkel','pekerjaan','telp'
    ];
    protected $primaryKey = 'id_anggota';
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'anggota';
}
