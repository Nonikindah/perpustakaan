<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable=[
        'kode_buku', 'judul', 'pengarang', 'penerbit','tahun_terbit','isbn','halaman','ddc','cetakan','kondisi','deskripsi'
    ];
    protected $primaryKey = 'kode_buku';
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'buku';
}
