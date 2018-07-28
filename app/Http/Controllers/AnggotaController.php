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
            'kelurahan_id' => 'required',
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'required'
        ]);

//        dd($request->nama);

        Anggota::create([
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat_lengkap' => $request->alamat_lengkap,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
        ]);

        return redirect('')->with('success', 'Berhasil menambahkan anggota yang bernama '.$request->nama);
    }

    public function daftaranggota(Request $request)
    {

//        dd($request->all());

        $this->validate(request(), [
            'nama' => 'required',
            'identitas' => 'required',
            'kelurahan_id' => 'required',
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'required'
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat_lengkap' => $request->alamat_lengkap,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
        ]);

        return redirect()->route('admin.anggota')->with('success', 'Berhasil menambahkan anggota yang bernama '.$request->nama);
    }

    public function editanggota(Request $request){
        $request = Anggota::find($request->id);
        return view('admin.editanggota')->with('anggota',$request);
    }

    public function updateanggota(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'identitas' => 'required',
            'kelurahan_id' => 'required',
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'required'
        ]);
        $anggota = Anggota::find($request->id_anggota)->update($request->all());
        
        return redirect()->route('admin.anggota')->with('success', 'Berhasil mengubah data anggota');
    }

    public function deleteanggota($request){
        $anggota = Anggota::findOrFail($request)->delete();
        return redirect()->route('admin.anggota')->with('confirmation', 'Anggota berhasil dihapus!');
    }
}
