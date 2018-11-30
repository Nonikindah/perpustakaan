<?php

namespace App\Http\Controllers;

use App\ItemBuku;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use PDF;
use Illuminate\Http\Request;
use App\Buku;
use Illuminate\Support\Carbon;

class BukuController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'judul' => 'required',
            'pengarang1' => 'required',
            'kata_kunci' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'halaman' => 'required',
            'cetakan' => 'required',
            'abstrak' => 'required',
            'tahun_entry' => 'required',
            'jenis_bacaan' => 'required',
            'bahasa' => 'required',
            'harga_beli' => 'required',
            'volume' => 'required',
            'atribut_id' => 'required',
            'rak_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'subyek_id' => 'required',
            'jenisbuku_id' => 'required',
            'asalbuku_id' => 'required',
        ]);

//        dd($request->nama);


        $fillnames = $request->gambar->getClientOriginalName() . '' . str_random(4);
        $filename = '/buku/'
            . str_slug($fillnames, '-') . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->storeAs('public', $filename);

        $buku = Buku::create([
            'judul' => $request->judul,
            'judul_asli' => $request->judul_asli,
            'judul_seri' => $request->judul_seri,
            'pengarang1' => $request->pengarang1,
            'pengarang2' => $request->pengarang2,
            'pengarang3' => $request->pengarang3,
            'penerjemah' => $request->penerjemah,
            'ilustrator' => $request->ilustrator,
            'kolasi' => $request->kolasi,
            'edisi' => $request->edisi,
            'kata_kunci' => $request->kata_kunci,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'halaman' => $request->halaman,
            'cetakan' => $request->cetakan,
            'abstrak' => $request->abstrak,
            'tahun_entry' => $request->tahun_entry,
            'jenis_bacaan' => $request->jenis_bacaan,
            'bahasa' => $request->bahasa,
            'harga_beli' => $request->harga_beli,
            'volume' => $request->volume,
            'atribut_id' => $request->atribut_id,
            'rak_id' => $request->rak_id,
            'penerbit_id' => $request->penerbit_id,
            'kategori_id' => $request->kategori_id,
            'subyek_id' => $request->subyek_id,
            'jenisbuku_id' => $request->jenisbuku_id,
            'asalbuku_id' => $request->asalbuku_id,
            'gambar' => $request->gambar = $filename,
        ]);

        for ($c = 0; $c <= $request->jumlah_buku; $c++) {
            ItemBuku::create([
                'buku_id' => $buku->kode_buku
            ]);
        }

        return redirect()->route('admin.buku')->with('success', 'Berhasil menambahkan buku yang berjudul ' . $request->judul);
    }

    public function edit(Request $request)
    {
        $request = Buku::find(decrypt($request->id));
        return view('admin.editbuku')->with('buku', $request);
    }

    public function update(Request $request)
    {

        $buku = Buku::findOrFail($request->kode_buku);

//        dd($request->gambar);

        $buku->update([
            'judul' => $request->judul,
            'judul_asli' => $request->judul_asli,
            'judul_seri' => $request->judul_seri,
            'pengarang1' => $request->pengarang1,
            'pengarang2' => $request->pengarang2,
            'pengarang3' => $request->pengarang3,
            'penerjemah' => $request->penerjemah,
            'ilustrator' => $request->ilustrator,
            'kolasi' => $request->kolasi,
            'edisi' => $request->edisi,
            'kata_kunci' => $request->kata_kunci,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'halaman' => $request->halaman,
            'cetakan' => $request->cetakan,
            'abstrak' => $request->abstrak,
            'tahun_entry' => $request->tahun_entry,
            'jenis_bacaan' => $request->jenis_bacaan,
            'bahasa' => $request->bahasa,
            'harga_beli' => $request->harga_beli,
            'volume' => $request->volume,
            'atribut_id' => $request->atribut_id,
            'rak_id' => $request->rak_id,
            'penerbit_id' => $request->penerbit_id,
            'kategori_id' => $request->kategori_id,
            'subyek_id' => $request->subyek_id,
            'jenisbuku_id' => $request->jenisbuku_id,
            'asalbuku_id' => $request->asalbuku_id,
            'gambar' => $request->temp_gambar
        ]);

        if (Input::has('gambar')) {
            $file = $buku->gambar;
            File::delete($file);

            $fillnames = $request->gambar->getClientOriginalName() . '' . str_random(4);
            $filename = '/buku/'
                . str_slug($fillnames, '-') . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public', $filename);
            $buku->update([
                'gambar' =>  $filename
            ]);
        }
//
//
//        $buku->judul = $request->judul;
//
//
//
//        $fillnames = $request->gambar->getClientOriginalName() . '' . str_random(4);
//        $filename = '/buku/'
//            . str_slug($fillnames, '-') . '.' . $request->gambar->getClientOriginalExtension();
//        $request->gambar->storeAs('public', $filename);
//
//
//        $buku = Buku::find($request->kode_buku)->update($request->all());


        return redirect()->route('admin.buku')->with('success', 'Berhasil mengubah data buku');

    }


    public function imageExistStatus1($request)
    {
        $fimage1 = $request->file('gambar');
        $thisName1 = $fimage1->getClientOriginalName() . '' . str_random(4);
        $uplodePath1 = 'public/buku/' . str_slug($thisName1, '-') . '.' . $request->gambar->getClientOriginalExtension();
        $fimage1->move($uplodePath1, $thisName1);
        $url1 = $uplodePath1 . $thisName1;

        return $url1;
    }

    public function searchbuku(Request $request)
    {
        $buku = Buku::where('judul', 'LIKE', '%' . $request->id . '%')->paginate(10);
        return view('admin.databuku', ['buku' => $buku]);
    }

    public function usersearch(Request $request)
    {
        $buku = Buku::where('judul', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        return view('katalog', ['buku' => $buku]);
    }

    public function tambahitem(Request $request)
    {
        $this->validate(request(), [
            'buku_id' => 'required'
        ]);

//        $buku = ItemBuku::create([
//            'buku_id' => $request->buku_id
//        ]);

        $buku = ItemBuku::find($request->buku_id);

        for ($c = 1; $c <= $request->jumlah_buku; $c++) {
            $buku = ItemBuku::create([
                'buku_id' => $buku->buku_id
            ]);
        }
        return redirect()->route('admin.buku.itembuku', ['id' => encrypt($buku->buku_id)])->with('success', 'Berhasil menambahkan item buku ');
    }

    public function printBarcode(Request $request)
    {
        $barcode = new BarcodeGenerator();
        $buku = ItemBuku::find(decrypt($request->no_induk));
        $barcode->setText()->$buku;
        $barcode->setType(BarcodeGenerator::Code128);
        $barcode->setScale(2);
        $barcode->setThickness(25);
        $barcode->setFontSize(10);
        $code = $barcode->generate();

        return redirect()->route('admin.buku.itembuku', ['id' => encrypt($buku->buku_id)])->with('success', 'Berhasil menambahkan item buku ');
//        echo '<img src="data:image/png;base64,'.$code.'" />';
    }

    public function cetakdatabuku(Request $request)
    {
        $buku = Buku::all();
        $pdf = PDF::loadView('admin.pdfbuku', ['buku' => $buku]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LaporanBuku.pdf');
    }

    public function cetakbukupertangggal(Request $request)
    {
        $dari = Carbon::parse($request->dari_tgl);
        $sampai = Carbon::parse($request->sampai_tgl)->addHours(23)->addMinutes(59)->addSeconds(59);
        $buku = Buku::whereBetween('created_at', [$dari, $sampai])->get();
        $pdf = PDF::loadView('admin.pdfbuku', ['buku' => $buku]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LaporanBuku.pdf');
    }

    public function hapusitem($request)
    {
        $hapusitem = ItemBuku::findOrFail($request)->delete();
        return redirect()->route('admin.buku')->with('confirmation', 'Berhasil menghapus item buku ');
    }

    public function cetaklabel(Request $request)
    {
        $buku = Buku::find(decrypt($request->id));
        $pdf = PDF::loadView('admin.labelbuku', ['buku' => $buku]);
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('LabelBuku.pdf');
    }
}
