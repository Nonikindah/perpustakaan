<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable=[
        'kode_buku', 'judul', 'judul_asli', 'judul_seri', 'pengarang1', 'pengarang2', 'pengarang3',  'penerjemah', 'ilustrator', 'kolasi', 'edisi', 'kata_kunci','tahun_terbit','isbn','halaman','cetakan','abstrak', 'gambar','tahun_entry','jenis_bacaan','bahasa','harga_beli','volume','atribut_id','rak_id','penerbit_id','kategori_id','subyek_id','jenisbuku_id','asalbuku_id'
    ];
    protected $primaryKey = 'kode_buku';

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'buku';

    /**
     * mendapatkan data rak buku
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getRak($queryReturn = true)
    {
        $data = $this->belongsTo('App\Rak', 'rak_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
     * mendapatkan data kategori
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getKategori($queryReturn = true)
    {
        $data = $this->belongsTo('App\Kategori', 'kategori_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
     * mendapatkan data subyek
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getSubyek($queryReturn = true)
    {
        $data = $this->belongsTo('App\Subyek', 'subyek_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
     * mendapatkan data jenis buku
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getJenisBuku($queryReturn = true)
    {
        $data = $this->belongsTo('App\JenisBuku', 'jenisbuku_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
 * mendapatkan data jenis buku
 * @param bool $queryReturn
 * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
 */
    public function getAtribut($queryReturn = true)
    {
        $data = $this->belongsTo('App\Atribut', 'atribut_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
     * mendapatkan data asal buku
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getAsalBuku($queryReturn = true)
    {
        $data = $this->belongsTo('App\AsalBuku', 'asalbuku_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
     * data penerbit
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getPenerbit($queryReturn = true){
        $data = $this->belongsTo('App\Penerbit','penerbit_id');
        return ($queryReturn ? $data : $data->get());
    }

    /**
     *mendapatkan data itembuku
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getItemBuku($queryReturn = true){
        $data = $this->hasMany('App\ItemBuku','buku_id');
        return ($queryReturn ? $data : $data->get());
    }
}
