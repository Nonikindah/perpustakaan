<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemBuku extends Model
{
    protected $fillable = [
        'no_induk','buku_id','barcode'
    ];

    protected $primaryKey = 'no_induk';

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'item_buku';

    /**
     * mendapatkan data buku
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getBuku($queryReturn = true)
    {
        $data = $this->belongsTo('App\Buku', 'buku_id');
        return ($queryReturn ? $data : $data->first());
    }
}
