<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Anggota;
use Laravel\Scout;


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
            'telp' => 'required',
            'foto' => 'required'
        ]);

        $fillnames = $request->foto->getClientOriginalName() . '' . str_random(4);
        $filename = '/anggota/'
            . str_slug($fillnames, '-') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->storeAs('public', $filename);

        Anggota::create([
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat_lengkap' => $request->alamat_lengkap,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
            'admin_id' => $request->admin_id,
            'foto'=>$request->foto = $filename
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
            'telp' => 'required',
            'foto' => 'required'
        ]);

        $fillnames = $request->foto->getClientOriginalName() . '' . str_random(4);
        $filename = '/anggota/'
            . str_slug($fillnames, '-') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->storeAs('public', $filename);

        Anggota::create([
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat_lengkap' => $request->alamat_lengkap,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
            'foto'=>$request->foto = $filename
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

    public function searchanggota(Request $request){
        $anggota = Anggota::where('nama', 'ILIKE', '%'.$request->id.'%')->paginate(10);
        //dd($anggota);
        //$anggota = Anggota::search($request->id)->paginate(15);
        return view('admin.dataanggota', ['anggota'=> $anggota]);
    }

    public function printBarcode(){
        $anggota = Anggota::limit(12)->get();
    }

    public function cetakdataanggota(Request $request){
        $anggota = Anggota::all();
        $pdf = PDF::loadView('admin.pdfanggota', ['anggota'=>$anggota]);
        $pdf->setPaper('A4');
        set_time_limit(300);
        return $pdf->stream('LaporanAnggota.pdf');
    }
}
