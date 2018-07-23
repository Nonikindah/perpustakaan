<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'halaman' => 'required',
            'ddc' => 'required',
            'cetakan' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required'
        ]);

//        dd($request->nama);

        Buku::create([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'halaman' => $request->halaman,
            'ddc' => $request->ddc,
            'cetakan' => $request->cetakan,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.buku')->with('success', 'Berhasil menambahkan buku yang berjudul '.$request->judul);
    }
}
