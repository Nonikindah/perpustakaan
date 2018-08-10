<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function daftarkategori(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'prefix' => 'required',
            'keterangan' => 'required'
        ]);

        Kategori::create([
            'nama' => $request->nama,
            'prefix' => $request->prefix,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('klasifikasi')->with('success', 'Berhasil menambahkan klasifikasi ' . $request->nama);
    }

    public function editkategori(Request $request)
    {
        $request = Kategori::find($request->id);
        return view('datamaster.editklasifikasi')->with('klasifikasi',$request);

    }

    public function updatekategori(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'prefix' => 'required',
            'keterangan' => 'required'
        ]);
        $klasifikasi = Kategori::find($request->id_kategori)->update($request->all());

        return redirect()->route('klasifikasi')->with('success', 'Berhasil mengubah data kategori');
    }

    public function deletekategori($request){
        $klasifikasi = Kategori::findOrFail($request)->delete();
        return redirect()->route('klasifikasi')->with('confirmation', 'Kategori berhasil dihapus!');
    }

    public function searchkategori(Request $request){
        $klasifikasi = Kategori::where('nama', 'ILIKE', '%'.$request->id.'%')->paginate(10);
        return view('datamaster.dataklasifikasi', ['klasifikasi'=> $klasifikasi]);
    }
}
