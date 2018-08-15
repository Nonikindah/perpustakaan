<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisBuku;

class JenisBukuController extends Controller
{
    public function daftarjenisbuku(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        JenisBuku::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('jenisbuku')->with('success', 'Berhasil menambahkan jenis buku ' . $request->nama);
    }

    public function editjenisbuku(Request $request)
    {
        $request = JenisBuku::find(decrypt($request->id));
        return view('datamaster.editjenisbuku')->with('jenisbuku',$request);

    }

    public function updatejenisbuku(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        $jenisbuku = JenisBuku::find($request->id)->update($request->all());

        return redirect()->route('jenisbuku')->with('success', 'Berhasil mengubah data jenis buku');
    }

    public function deletejenisbuku($request){
        $jenisbuku = JenisBuku::findOrFail($request)->delete();
        return redirect()->route('jenisbuku')->with('confirmation', 'Jenis buku berhasil dihapus!');
    }
}
