<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    protected $fillable = [
        'id','nama', 'keterangan'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'jenis_buku';
}
