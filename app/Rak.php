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

    public function getBuku($queryReturn = true){

        $data = $this->hasMany('App\Buku','rak_id');
        if($queryReturn)
            return $data;
        return $data->get();
    }
}
