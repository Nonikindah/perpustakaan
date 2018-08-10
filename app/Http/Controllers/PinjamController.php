<?php

namespace App\Http\Controllers;
use Carbon;

use Illuminate\Http\Request;
use PDF;
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
        ]);

        Pinjam::create([
            'item_id' => $request->item_id,
            'anggota_id' => $request->anggota_id,
            'admin_id' =>$request->admin_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_haruskembali' => Carbon\Carbon::parse($request->tgl_pinjam)->addDays(7)
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

    public function perpanjangan(Request $request){
        $pinjam = Pinjam::find(decrypt($request->id));
        $pinjam->tgl_haruskembali = $pinjam->tgl_haruskembali->addDays(7);
        $pinjam->save();
        return back()->with('success','Berhasil memperpanjang peminjaman buku '.$pinjam->getItem(false)->getBuku(false)->judul);
    }

    public function pengembalian(Request $request){
        $pengembalian = Pinjam::find(decrypt($request->id));
        $pengembalian->tgl_kembali = Carbon\Carbon::now();
        $pengembalian->dipinjam = false;
        $pengembalian->save();

        return redirect()->with('success','Berhasil mengembalikan buku '.$pengembalian->getItem(false)->getBuku(false)->judul);
//        return back()->with('success','Berhasil mengembalikan buku '.$pengembalian->getItem(false)->getBuku(false)->judul);
    }

    public function cetakdatahistori(Request $request){
        $pinjam = Pinjam::all();
        $pdf = PDF::loadView('admin.pdfhistori', ['pinjam'=>$pinjam]);
        $pdf->setPaper('A4');
        return $pdf->stream('LaporanHistori.pdf');
    }

}

