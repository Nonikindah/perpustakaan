<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;


class AnggotaController extends Controller
{
    public function store(Request $request)
    {

//        dd($request->all());

        $this->validate(request(), [
            'nama' => 'required',
            'identitas' => 'required',
            'alamat' => 'required',
            'jenkel' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'required'
        ]);

//        dd($request->nama);

        Anggota::create([
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'alamat' => $request->alamat,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
        ]);

//        $anggota = new Anggota();
//        $anggota->nama = Input::get('nama');
//        $anggota->identitas = t::get('alamat');
//        $anggota->jenkel = Input::get('jenkel');
//        $anggota->pekerjaan = Input::get('pekerjaan');
//        $anggota->telepon = Input::get('telepon');
//        $Input::get('identitas');
//        $anggota->alamat = Inpuanggota->save();

        return redirect('')->with('message', 'data anggota berhasil ditambahkan');
    }
}
