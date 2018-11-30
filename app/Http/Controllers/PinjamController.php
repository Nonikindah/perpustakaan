<?php

namespace App\Http\Controllers;

//use Carbon;

use Illuminate\Http\Request;
use PDF;
use App\Pinjam;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Carbon;

class PinjamController extends Controller
{
    public function index(Request $request){
        $data = Pinjam::when($request->keyword, function ($query) use ($request) {
            $query->WhereHas('getAnggota', function ($query) use ($request){
                    $query->where('nama', 'ILIKE', "%{$request->keyword}%");
            })->orWhereHas('getItem.getBuku', function ($query) use ($request){
                $query->where('judul', 'ILIKE', "%{$request->keyword}%");
            });
        })->paginate(10)->appends($request->all());
        return view('admin.datapinjam', ['pinjam'=> $data]);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'item_id' => 'required',
            'anggota_id' => 'required',
            'admin_id' => 'required',

        ]);

        Pinjam::create([
            'item_id' => $request->item_id,
            'anggota_id' => $request->anggota_id,
            'admin_id' => $request->admin_id,
            'tgl_pinjam' => Carbon::now(),
            'tgl_haruskembali' => Carbon::parse(Carbon::now())->addDays(3)
        ]);

        return redirect()->route('admin.pinjam')->with('success', 'Berhasil menambahkan data peminjaman');
    }

    public function perpanjangan(Request $request)
    {
        $pinjam = Pinjam::find(decrypt($request->id));
        $pinjam->tgl_haruskembali = $pinjam->tgl_haruskembali->addDays(3);
        $pinjam->save();
        return back()->with('success', 'Berhasil memperpanjang peminjaman buku ' . $pinjam->getItem(false)->getBuku(false)->judul);
    }

    public function pengembalian(Request $request)
    {
        $pengembalian = Pinjam::find(decrypt($request->id));
        $pengembalian->tgl_kembali = Carbon::now();
        $pengembalian->dipinjam = false;
        $pengembalian->save();

        return view('admin.pengembalian', ['pengembalian' => $pengembalian])->with('success', 'Berhasil mengembalikan buku ' . $pengembalian->getItem(false)->getBuku(false)->judul);
//        return back()->with('success','Berhasil mengembalikan buku '.$pengembalian->getItem(false)->getBuku(false)->judul);
    }

    public function cetakdatahistori(Request $request)
    {
        $pinjam = Pinjam::all();
        $pdf = PDF::loadView('admin.pdfhistori', ['pinjam'=>$pinjam]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LaporanHistori.pdf');
    }

    public function cetakpertangggal(Request $request){
        $dari = Carbon::parse($request->dari_tgl);
        $sampai = Carbon::parse($request->sampai_tgl)->addHours(23)->addMinutes(59)->addSeconds(59);
        $pinjam = Pinjam::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('admin.pdfhistori', ['pinjam'=>$pinjam]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LaporanHistori.pdf');
    }

    //    public function searchpinjam(Request $request)
//    {
//        $pinjam = Pinjam::whereHas('getItem', function ($query) use ($request) {
//            $query->where('judul', 'ILIKE', '%' . $request->id . '%');
//        })->paginate(10);
//        dd($pinjam);
//        //dd($anggota);
//        //$anggota = Anggota::search($request->id)->paginate(15);
//        return view('admin.datapinjam', ['pinjam' => $pinjam]);
//
//    }

}