<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atribut;

class AtributController extends Controller
{
    public function daftaratribut(Request $request)
    {
        $this->validate(request(), [
            'nama' => 'required'
        ]);

        Atribut::create([
            'nama' => $request->nama,
            'batas_sewa' => $request->batas_sewa,
            'harga_sewa' => $request->harga_sewa,
            'denda' => $request->denda
        ]);

        return redirect()->route('atribut')->with('success', 'Berhasil menambahkan atribut ' . $request->nama);
    }

    public function editatribut(Request $request)
    {
        $request = Atribut::find($request->id);
        return view('datamaster.editatribut')->with('atribut',$request);

    }

    public function updateatribut(Request $request){
        $this->validate($request, [
            'nama' => 'required',
        ]);
        $atribut = Atribut::find($request->id)->update($request->all());

        return redirect()->route('atribut')->with('success', 'Berhasil mengubah data atribut');
    }

    public function deleteatribut($request){
        $atribut = Atribut::findOrFail($request)->delete();
        return redirect()->route('atribut')->with('confirmation', 'Penerbit berhasil dihapus!');
    }
}
