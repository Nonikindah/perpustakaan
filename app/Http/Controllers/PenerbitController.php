<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;

class PenerbitController extends Controller
{
    public function daftarpenerbit(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required',
        ]);

        Penerbit::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'kontak_person' => $request->kontak_person,
            'keterangan' => $request->keterangan,
            'kota' => $request->kota
        ]);

        return redirect()->route('penerbit')->with('success', 'Berhasil menambahkan penerbit ' . $request->nama);
    }

    public function editpenerbit(Request $request)
    {
        $request = Penerbit::find($request->id);
        return view('datamaster.editpenerbit')->with('penerbit',$request);

    }

    public function updatepenerbit(Request $request){
        $this->validate($request, [
            'nama' => 'required',
        ]);
        $penerbit = Penerbit::find($request->id)->update($request->all());

        return redirect()->route('penerbit')->with('success', 'Berhasil mengubah data penerbit');
    }

    public function deletepenerbit($request){
        $penerbit = Penerbit::findOrFail($request)->delete();
        return redirect()->route('penerbit')->with('confirmation', 'Penerbit berhasil dihapus!');
    }

    public function searchpenerbit(Request $request){
        $penerbit = Penerbit::where('nama', 'ILIKE', '%'.$request->id.'%')->paginate(10);
        return view('datamaster.datapenerbit', ['penerbit'=> $penerbit]);
    }

}
