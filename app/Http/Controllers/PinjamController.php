<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'buku_id' => 'required',
            'anggota_id' => 'required',
            'admin_id' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        Pinjam::create([
            'buku_id' => $request->buku_id,
            'anggota_id' => $request->anggota_id,
            'admin_id' =>$request->admin_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
        ]);
        return redirect()->route('admin.pinjam')->with('success', 'Berhasil menambahkan data peminjaman');
    }

}

