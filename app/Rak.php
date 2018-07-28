<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $fillable = [
        'id_rak', 'nama', 'keterangan','kode','rak_parent_id'
    ];

    protected $primaryKey = 'id_rak';

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'rak';
}
