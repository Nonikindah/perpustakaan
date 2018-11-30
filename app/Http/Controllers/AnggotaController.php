<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Anggota;
use Laravel\Scout;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


class AnggotaController extends Controller
{
    public function index(Request $request){
        $data = Anggota::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'ILIKE', "%{$request->keyword}%")
                ->orWhere('identitas', 'ILIKE', "%{$request->keyword}%")
                ->orWhere('alamat_lengkap', 'ILIKE', "%{$request->keyword}%");
        })->paginate(10)->appends($request->all());
        return view('admin.dataanggota', ['anggota'=> $data]);
    }
    public function store(Request $request)
    {
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
        $request = Anggota::find(decrypt($request->id));
        return view('admin.editanggota')->with('anggota',$request);
    }

    public function updateanggota(Request $request){

        $anggota = Anggota::findOrFail($request->id_anggota);

       $anggota->update( [
            'nama' => $request->nama,
            'identitas' => $request->identitas,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat_lengkap' => $request->alamat_lengkap,
            'jenkel' => $request->jenkel,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
           'foto' => $request->temp_gambar
        ]);

        if (Input::has('foto')) {
            $file = $anggota->foto;
            File::delete($file);

            $fillnames = $request->foto->getClientOriginalName() . '' . str_random(4);
            $filename = '/anggota/'
                . str_slug($fillnames, '-') . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->storeAs('public', $filename);
            $anggota->update([
                'foto' =>  $filename
            ]);
        }
        return redirect()->route('admin.anggota')->with('success', 'Berhasil mengubah data anggota');
    }

    public function deleteanggota($request){
        $anggota = Anggota::findOrFail($request)->delete();
        return redirect()->route('admin.anggota')->with('confirmation', 'Anggota berhasil dihapus!');
    }

    public function searchanggota(Request $request){
        $anggota = Anggota::where('nama', 'LIKE', '%'.$request->id.'%')->paginate(10);
        //dd($anggota);
        //$anggota = Anggota::search($request->id)->paginate(15);
        return view('admin.dataanggota', ['anggota'=> $anggota]);
    }

    public function printBarcode(){
        $anggota = Anggota::limit(12)->get();
    }

    public function cetakdataanggota(Request $request){
        $skip = ($request->page-1)*100;

        $anggota = Anggota::all();
        $data = Anggota::skip($skip)->take(100)->get();

        $pdf = PDF::loadView('admin.pdfanggota', ['anggota'=>$data]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LaporanAnggota.pdf');
    }

    public function cetakanggotapertangggal(Request $request){
        $dari = Carbon::parse($request->dari_tgl);
        $sampai = Carbon::parse($request->sampai_tgl)->addHours(23)->addMinutes(59)->addSeconds(59);
        $anggota = Anggota::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('admin.pdfanggota', ['anggota'=>$anggota]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LaporanAnggota.pdf');
    }

    public function cetakkartu(Request $request){
        $anggota = Anggota::find(decrypt($request->id));
        $pdf = PDF::loadView('admin.cetakkta', ['anggota'=>$anggota]);
        $pdf->setPaper([0, 0, 685.98, 396.85]);
        set_time_limit(300);
        return $pdf->stream('Kartu Tanda Anggota.pdf');
    }
}
