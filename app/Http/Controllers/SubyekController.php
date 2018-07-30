<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subyek;

class SubyekController extends Controller
{
    public function daftarsubyek(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        Subyek::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('subyek')->with('success', 'Berhasil menambahkan subyek ' . $request->nama);
    }

    public function editsubyek(Request $request)
    {
        $request = Subyek::find($request->id);
        return view('datamaster.editsubyek')->with('subyek',$request);

    }

    public function updatesubyek(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        $subyek = Subyek::find($request->id_subyek)->update($request->all());

        return redirect()->route('subyek')->with('success', 'Berhasil mengubah data subyek');
    }

    public function deletesubyek($request){
        $subyek = Subyek::findOrFail($request)->delete();
        return redirect()->route('subyek')->with('confirmation', 'Subyek berhasil dihapus!');
    }
}
