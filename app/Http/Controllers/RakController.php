<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rak;

class RakController extends Controller
{
    public function daftarrak(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'kode' => 'required'
        ]);

        Rak::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('rak')->with('success', 'Berhasil menambahkan rak ' . $request->nama);
    }

    public function editrak(Request $request)
    {
        $request = Rak::find($request->id);
        return view('datamaster.editrak')->with('rak',$request);

    }

    public function updaterak(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'kode' => 'required'
        ]);
        $rak = Rak::find($request->id_rak)->update($request->all());

        return redirect()->route('rak')->with('success', 'Berhasil mengubah data rak');
    }

    public function deleterak($request){
        $rak = Rak::findOrFail($request)->delete();
        return redirect()->route('rak')->with('confirmation', 'Rak berhasil dihapus!');
    }
}
