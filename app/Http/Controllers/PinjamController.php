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
            'item_id' => 'required',
            'anggota_id' => 'required',
            'admin_id' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        Pinjam::create([
            'item_id' => $request->item_id,
            'anggota_id' => $request->anggota_id,
            'admin_id' =>$request->admin_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
        ]);
        return redirect()->route('admin.pinjam')->with('success', 'Berhasil menambahkan data peminjaman');
    }

    public function searchpinjam(Request $request){
        $pinjam = Pinjam::whereHas('getItem', function ($query) use ($request) {
            $query->where('judul', 'ILIKE', '%' . $request->id  . '%');
        })->paginate(10);
        dd($pinjam);
        //dd($anggota);
        //$anggota = Anggota::search($request->id)->paginate(15);
        return view('admin.datapinjam', ['pinjam'=> $pinjam]);

    }

}

