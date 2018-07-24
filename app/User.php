<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','alamat_lengkap','hak_akses','kelurahan_id','jenkel','hak_akses','telp'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getKelurahan($queryReturn = true)
    {
        $data = $this->belongsTo('App\Kelurahan', 'kelurahan_id');
        return ($queryReturn ? $data : $data->first());
    }
}
