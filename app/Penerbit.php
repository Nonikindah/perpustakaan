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
}
