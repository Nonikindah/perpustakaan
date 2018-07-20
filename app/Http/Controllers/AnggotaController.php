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
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'required'
        ]);

//        dd($request->nama);

        Anggota::create([
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'alamat' => $request->alamat,
            'alamat_lengkap' => $request->alamat_lengkap,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
        ]);

        return redirect('')->with('message');
    }
}
