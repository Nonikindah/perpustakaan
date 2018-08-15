<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsalBuku;

class AsalBukuController extends Controller
{
    public function daftarasalbuku(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        AsalBuku::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('asalbuku')->with('success', 'Berhasil menambahkan asal buku ' . $request->nama);
    }

    public function editasalbuku(Request $request)
    {
        $request = AsalBuku::find(decrypt($request->id));
        return view('datamaster.editasalbuku')->with('asalbuku',$request);

    }

    public function updateasalbuku(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        $asalbuku = AsalBuku::find($request->id)->update($request->all());

        return redirect()->route('asalbuku')->with('success', 'Berhasil mengubah data asal buku');
    }

    public function deleteasalbuku($request){
        $asalbuku = AsalBuku::findOrFail($request)->delete();
        return redirect()->route('asalbuku')->with('confirmation', 'Asal buku berhasil dihapus!');
    }
}
