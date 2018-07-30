<?php

namespace App\Http\Controllers;

use App\ItemBuku;
use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'judul' => 'required',
            'pengarang1' => 'required',
            'kata_kunci' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'halaman' => 'required',
            'cetakan' => 'required',
            'abstrak' => 'required',
            'tahun_entry' => 'required',
            'jenis_bacaan' => 'required',
            'bahasa' => 'required',
            'harga_beli' => 'required',
            'volume' => 'required',
            'atribut_id' => 'required',
            'rak_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'subyek_id' => 'required',
            'jenisbuku_id' => 'required',
            'asalbuku_id' => 'required',
            'jumlah_buku' => 'required',
        ]);

//        dd($request->nama);


            $fillnames = $request->gambar->getClientOriginalName() . '' . str_random(4);
            $filename = '/buku/'
                . str_slug($fillnames, '-') . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public', $filename);



        $buku = Buku::create([
            'judul' => $request->judul,
            'judul_asli' => $request->judul_asli,
            'judul_seri' => $request->judul_seri,
            'pengarang1' => $request->pengarang1,
            'pengarang2' => $request->pengarang2,
            'pengarang3' => $request->pengarang3,
            'penerjemah' => $request->penerjemah,
            'ilustrator' => $request->ilustrator,
            'kolasi' => $request->kolasi,
            'edisi' => $request->edisi,
            'kata_kunci' => $request->kata_kunci,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'halaman' => $request->halaman,
            'cetakan' => $request->cetakan,
            'abstrak' => $request->abstrak,
            'tahun_entry' => $request->tahun_entry,
            'jenis_bacaan' => $request->jenis_bacaan,
            'bahasa' => $request->bahasa,
            'harga_beli' => $request->harga_beli,
            'volume' => $request->volume,
            'atribut_id' => $request->atribut_id,
            'rak_id' => $request->rak_id,
            'penerbit_id' => $request->penerbit_id,
            'kategori_id' => $request->kategori_id,
            'subyek_id' => $request->subyek_id,
            'jenisbuku_id' => $request->jenisbuku_id,
            'asalbuku_id' => $request->asalbuku_id,
            'gambar'=>$request->gambar = $filename,
        ]);
//        $c = ItemBuku::orderBy('no_induk', 'desc')->first()->no_induk +1;
//        dd($c);
        for ($c = 1; $c <= $request->jumlah_buku; $c++){
            ItemBuku::create([
                'no_induk' => $c,
                'buku_id' => $buku->kode_buku,
            ]);
        }

        return redirect()->route('admin.buku')->with('success', 'Berhasil menambahkan buku yang berjudul '.$request->judul);
    }

    public function edit(Request $request){
        $request = Buku::find($request->id);
        return view('admin.editbuku')->with('buku',$request);
    }

    public function update(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'pengarang1' => 'required',
            'kata_kunci' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'halaman' => 'required',
            'cetakan' => 'required',
            'abstrak' => 'required',
            'tahun_entry' => 'required',
            'jenis_bacaan' => 'required',
            'bahasa' => 'required',
            'harga_beli' => 'required',
            'volume' => 'required',
            'atribut_id' => 'required',
            'rak_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'subyek_id' => 'required',
            'jenisbuku_id' => 'required',
            'asalbuku_id' => 'required',
        ]);
        $buku = Buku::find($request->kode_buku)->update($request->all());

        return redirect()->route('admin.buku')->with('success', 'Berhasil mengubah data buku');
    }


}
