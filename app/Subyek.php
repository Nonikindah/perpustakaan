<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subyek extends Model
{
    protected $fillable=[
        'id_subyek', 'nama', 'keterangan'
    ];

    protected $primaryKey = 'id_subyek';

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'subyek';
}
