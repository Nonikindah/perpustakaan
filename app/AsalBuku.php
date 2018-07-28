<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsalBuku extends Model
{
    protected $fillable = [
        'id','nama', 'keterangan'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'asal_buku';
}
