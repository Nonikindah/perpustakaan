<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable=[
        'kode_buku', 'judul', 'judul_asli', 'judul_seri', 'pengarang1', 'pengarang2', 'pengarang3',  'penerjemah', 'ilustrator', 'kolasi', 'edisi', 'kata_kunci','tahun_terbit','isbn','halaman','cetakan','kondisi','abstrak', 'gambar','tahun_entry','jenis_bacaan','bahasa','harga_beli','volume','atribut_id','rak_id','penerbit_id','kategori_id','subyek_id','jenisbuku_id','asalbuku_id',
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
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * mendapatkan data kategori
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getKategori($queryReturn = true)
    {
        $data = $this->belongsTo('App\Kategori', 'kategori_id');
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * mendapatkan data subyek
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getSubyek($queryReturn = true)
    {
        $data = $this->belongsTo('App\Subyek', 'subyek_id');
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * mendapatkan data jenis buku
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getJenisBuku($queryReturn = true)
    {
        $data = $this->belongsTo('App\JenisBuku', 'jenisbuku_id');
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
 * mendapatkan data jenis buku
 * @param bool $queryReturn
 * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
 */
    public function getAtribut($queryReturn = true)
    {
        $data = $this->belongsTo('App\Atribut', 'atribut_id');
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * mendapatkan data asal buku
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object
     */
    public function getAsalBuku($queryReturn = true)
    {
        $data = $this->belongsTo('App\AsalBuku', 'asalbuku_id');
        if ($queryReturn)
            return $data;
        return $data->first();
    }

    /**
     * data penerbit
     * @param bool $queryReturn
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getPenerbit($queryReturn = true){
        $data = $this->belongsToMany('App\penerbit','penerbit_buku','buku_id','penerbit_id');
        if($queryReturn)
            return $data;
        return $data->get();

    }
}
