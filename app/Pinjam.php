<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $fillable = [
        'id', 'item_id', 'anggota_id', 'tgl_pinjam', 'tgl_kembali', 'status', 'admin_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'pinjam';

    /**
     * mendapatkan data Buku
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getItem($queryReturn = true)
    {
        $data = $this->belongsTo('App\ItemBuku', 'item_id');
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * mendapatkan data Anggota
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getAnggota($queryReturn = false)
    {
        $data = $this->belongsTo('App\Anggota','anggota_id');
        if($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * mendapatkan data Admin
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */

    public function getAdmin($queryReturn = false){
        $data = $this->belongsTo('App\User','admin_id');
        if($queryReturn)
            return $data;
        return $data->first();
    }
}
