<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'id_kategori','nama','parent_id','prefix','keterangan'
    ];

    protected $primaryKey = 'id_kategori';

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'kategori';
}
