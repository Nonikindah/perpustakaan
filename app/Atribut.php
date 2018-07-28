<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atribut extends Model
{
    protected $fillable = [
        'id', 'nama', 'batas_sewa','harga_sewa','denda'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'atribut';
}
