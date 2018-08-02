@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-12 ">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('admin.buku.detailbuku',['id'=> encrypt( $buku->kode_buku)])}}">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('admin.buku.itembuku',['id'=> encrypt( $buku->kode_buku)])}}">Item Buku</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('admin.buku.tambahitem',['id'=> encrypt( $buku->kode_buku)])}}">Tambah Buku</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.buku.store')}}">
                                @csrf
                                {{ method_field('put') }}
                                <input type="hidden" name="judul" value="{{$buku->judul}}">
                                <input type="hidden" name="judul_asli" value="{{$buku->judul_asli}}">
                                <input type="hidden" name="judul_seri" value="{{$buku->judul_seri}}">
                                <input type="hidden" name="pengarang1" value="{{$buku->pengarang1}}">
                                <input type="hidden" name="pengarang2" value="{{$buku->pengarang2}}">
                                <input type="hidden" name="pengarang3" value="{{$buku->pengarang3}}">
                                <input type="hidden" name="penerjemah" value="{{$buku->penerjemah}}">
                                <input type="hidden" name="ilustrator" value="{{$buku->ilustrator}}">
                                <input type="hidden" name="kolasi" value="{{$buku->kolasi}}">
                                <input type="hidden" name="edisi" value="{{$buku->edisi}}">
                                <input type="hidden" name="kata_kunci" value="{{$buku->kata_kunci}}">
                                <input type="hidden" name="tahun_terbit" value="{{$buku->tahun_terbit}}">
                                <input type="hidden" name="jenis_bacaan" value="{{$buku->jenis_bacaan}}">
                                <input type="hidden" name="bahasa" value="{{$buku->bahasa}}">
                                <input type="hidden" name="harga_beli" value="{{$buku->harga_beli}}">
                                <input type="hidden" name="volume" value="{{$buku->volume}}">
                                <input type="hidden" name="isbn" value="{{$buku->isbn}}">
                                <input type="hidden" name="halaman" value="{{$buku->halaman}}">
                                <input type="hidden" name="cetakan" value="{{$buku->cetakan}}">
                                <input type="hidden" name="rak_id" value="{{App\Rak::find($buku->rak_id)}}">
                                <input type="hidden" name="penerbit_id" value="{{App\Penerbit::find($buku->penerbit_id)}}">
                                <input type="hidden" name="subyek_id" value="{{App\Subyek::find($buku->subyek_id)}}">
                                <input type="hidden" name="jenisbuku_id" value="{{App\JenisBuku::find($buku->jenisbuku_id)}}">
                                <input type="hidden" name="atribut_id" value="{{App\Atribut::find($buku->atribut_id)}}">
                                <input type="hidden" name="asalbuku_id" value="{{App\AsalBuku::find($buku->asalbuku_id)}}">
                                <input type="hidden" name="kategori_id" value="{{App\Kategori::find($buku->kategori_id)}}">

                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input type="date" class="form-control" name="tahun_entry">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Jumlah Item</label>
                                            <input type="text" name="jumlah_buku" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea type="text" name="abstrak" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
