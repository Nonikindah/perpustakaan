@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-12 card-title"><b>Data Koleksi Buku</b><hr></h4>

                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-10" style="padding-right: 0">
                                            <form action="{{route('admin.searchbuku')}}" method="GET">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-out btn-fill btn-success pull-right" style="margin-right: 7px"><i class="fa fa-search"></i> Cari</button>
                                                <input type="text" name="id" placeholder="Cari berdasarkan judul" class="form-control" style="width: 90%">
                                            </form>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 0">
                                            <a href="{{route('admin.buku.daftarbuku')}}" class="btn btn-primary btn-fill pull-right" ><i class="fa fa-plus"></i> Tambah Buku</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>
                                <div class=" table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th><b>Judul</b></th>
                                        <th><b>Pengarang</b></th>
                                        <th><b>Penerbit</b></th>
                                        <th><b>Klasifikasi</b></th>
                                        <th><b>Jumlah Buku</b></th>
                                        <th><b>Aksi</b></th>
                                        </thead>
                                        <tbody>
                                        @foreach($buku as $data)
                                            <tr>
                                                <td>{{$data->judul}}</td>
                                                <td>
                                                    @if($data->pengarang2 != null)
                                                        {{$data->pengarang1}} dan {{$data->pengarang2}}
                                                    @elseif($data->pengarang3 != null)
                                                        {{$data->pengarang1}},{{$data->pengarang2}},
                                                        {{$data->pengarang3}}
                                                    @else
                                                        {{$data->pengarang1}}
                                                    @endif
                                                </td>
                                                <td>
                                                    {{App\Penerbit::find($data->penerbit_id)->nama}}

                                                </td>
                                                <td>{{App\Kategori::find($data->kategori_id)->nama}}</td>
                                                <td>{{\App\ItemBuku::where('buku_id',$data->kode_buku)->get()->count()}}</td>

                                                <td>
                                                    <div class="nav-link btn-group dropdown nav-item">
                                                                <a href="#" class="nav-link btn btn-info btn-sm btn-fill pull-right" data-toggle="dropdown"><i class="fa fa-bars"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <a class="dropdown-item" href="{{route('admin.buku.detailbuku',['id'=> encrypt( $data->kode_buku)])}}">Detail</a>
                                                                    <a class="dropdown-item" href="{{route('admin.buku.editbuku',['id'=>  encrypt($data->kode_buku)])}}">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                    <a class="dropdown-item" href="{{route('admin.cetaklabel', ['id' =>encrypt($data->kode_buku)])}}">Cetak Label</a>
                                                                </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection