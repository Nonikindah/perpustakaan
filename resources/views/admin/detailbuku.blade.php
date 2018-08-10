@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group">
                        <div class=" form-inline">
                            <a class="btn btn-primary btn-fill" style="border-radius: 0px"
                               href="{{route('admin.buku.detailbuku',['id'=> encrypt( $buku->kode_buku)])}}">Detail</a>
                            <a class="btn btn-danger btn-fill" style="border-radius: 0px"
                               href="{{route('admin.buku.itembuku',['id'=> encrypt( $buku->kode_buku)])}}">Item Buku</a>
                            <a class="btn btn-warning btn-fill" style="border-radius: 0px" data-toggle="collapse"
                               href="#collapseExample" role="button" aria-expanded="false"
                               aria-controls="collapseExample"
                               href="{{route('admin.buku.tambahitem',['id'=> encrypt( $buku->kode_buku)])}}">Tambah
                                Item</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collapse" id="collapseExample">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST"
                                              action="{{route('admin.buku.item')}}">
                                            @csrf
                                            {{ method_field('put') }}
                                            <input type="hidden" name="buku_id" value="{{$buku->kode_buku}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-title" style="border-radius: 0px">Jumlah Item</div>
                                                    <input type="number" style="border-radius: 0px" name="jumlah_buku"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-fill"
                                                    style="border-radius: 0px">Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="col-md-12 card-title"><b>Detail Buku</b></h4>
                            <hr>
                            <div class="row form-inline">
                                <div class="card-body table-full-width table-responsive">
                                    <div class="row" style="margin-left: 10px">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p class="card-title"
                                                           style="font-size: 20px">{{$buku->judul}}
                                                            - {{$buku->pengarang1}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <img src="{{ asset('storage'.$buku->gambar) }}" width="30%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row" style="margin-left: 1px">
                                        <div class="col-md-6">
                                            <p class="card-title" style="font-size: 20px">
                                                Informasi Detail Buku</p>
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <th width="200px">Judul</th>
                                                    <td width="100%">{{$buku->judul}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Judul Asli</th>
                                                    <td width="100%">@if($buku->judul_asli==NULL)
                                                            -@endif{{$buku->judul_asli}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Judul Seri</th>
                                                    <td width="100%">@if($buku->judul_seri==NULL)
                                                            -@endif{{$buku->judul_seri}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pengarang 1</th>
                                                    <td width="100%">{{$buku->pengarang1}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pengarang 2</th>
                                                    <td width="100%">@if($buku->pengarang2==NULL)
                                                            -@endif{{$buku->pengarang2}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pengarang 3</th>
                                                    <td width="100%">@if($buku->pengarang3==NULL)
                                                            -@endif{{$buku->pengarang3}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Penerjemah</th>
                                                    <td width="100%">@if($buku->penerjemah==NULL)
                                                            -@endif{{$buku->penerjemah}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Klasifikasi</th>
                                                    <td width="100%">{{App\Kategori::find($buku->kategori_id)->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Rak Buku</th>
                                                    <td width="100%">{{App\Rak::find($buku->rak_id)->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Kolasi</th>
                                                    <td width="100%">@if($buku->kolasi==NULL)
                                                            -@endif{{$buku->kolasi}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Penerbit</th>
                                                    <td width="100%">{{App\Penerbit::find($buku->penerbit_id)->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jumlah Halaman</th>
                                                    <td width="100%">{{$buku->halaman}}</td>
                                                </tr>
                                                <tr>
                                                    <th>ISBN</th>
                                                    <td width="100%">{{$buku->isbn}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Edisi</th>
                                                    <td width="100%">@if($buku->edisi==NULL)-@endif{{$buku->edisi}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Abstrak</th>
                                                    <td width="100%">{{$buku->abstrak}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 30px;margin-right: 0px">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <th width="200px">Kata Kunci</th>
                                                        <td width="100%">{{$buku->kata_kunci}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Asal Buku</th>
                                                        <td width="100%">{{App\AsalBuku::find($buku->asalbuku_id)->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Subyek</th>
                                                        <td width="100%">{{App\Subyek::find($buku->subyek_id)->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jumlah Buku</th>
                                                        <td width="100%">{{\App\ItemBuku::where('buku_id',$buku->kode_buku)->get()->count()}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ilustrator</th>
                                                        <td width="100%">@if($buku->ilustrator==NULL)
                                                                -@endif{{$buku->ilustrator}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kota Terbit</th>
                                                        <td width="100%">@if(App\Penerbit::find($buku->penerbit_id)->kota==NULL)
                                                                -@endif{{App\Penerbit::find($buku->penerbit_id)->kota}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fiksi-Non</th>
                                                        <td width="100%">{{App\JenisBuku::find($buku->jenisbuku_id)->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tahun Terbit</th>
                                                        <td width="100%">{{$buku->tahun_terbit}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis</th>
                                                        <td width="100%">{{App\Atribut::find($buku->atribut_id)->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Bahasa</th>
                                                        <td width="100%">{{$buku->bahasa}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Harga Beli (Rp)</th>
                                                        <td width="100%">{{$buku->harga_beli}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cetakan</th>
                                                        <td width="100%">{{$buku->cetakan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Volume</th>
                                                        <td width="100%">{{$buku->volume}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kategori</th>
                                                        <td width="100%">{{App\Subyek::find($buku->subyek_id)->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tahun Entry</th>
                                                        <td width="100%">{{$buku->tahun_entry}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection