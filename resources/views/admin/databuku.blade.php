@extends('layouts.admin')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-3 card-title">Data Koleksi Buku</h4>
                                <div class="col-md-9 ">
                                    <div class="row">
                                        <div class="col-md-9" style="padding-right: 0">
                                            <form action="{{route('admin.searchbuku')}}" method="GET">
                                                {{csrf_field()}}
                                                <button type="submit"
                                                        class="btn btn-out btn-fill btn-success pull-right"><i
                                                            class="fa fa-search"></i></button>
                                                <input type="text" name="id" placeholder="Cari berdasarkan judul"
                                                       class="form-control pull-right" style="width: 60%">
                                            </form>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0">
                                            <a href="{{route('admin.buku.daftarbuku')}}"
                                               class="btn btn-primary btn-fill " style="margin-left: 5px"><i
                                                        class="fa fa-plus"></i> Tambah Buku</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Klasifikasi</th>
                                        {{--<th>Subyek</th>--}}
                                        </thead>
                                        <tbody>
                                        @foreach($buku as $data)
                                            <tr>
                                                <td>{{$data->judul}}</td>
                                                <td>
                                                    @if($data->pengarang2 != null)
                                                        {{$data->pengarang1}},{{$data->pengarang2}}
                                                    @elseif($data->pengarang3 != null)
                                                        {{$data->pengarang1}},{{$data->pengarang2}},
                                                        {{$data->pengarang3}}
                                                    @else
                                                        {{$data->pengarang1}}
                                                    @endif
                                                </td>
                                                <td>
                                                    {{App\Penerbit::find($data->penerbit_id)->nama}}
                                                    {{--<ul>--}}
                                                    {{--@foreach($data->getPenerbit(false) as $penerbit)--}}
                                                    {{--<li>{{ $penerbit->nama }}</li>--}}
                                                    {{--@endforeach--}}
                                                    {{--</ul>--}}
                                                </td>
                                                <td>{{App\Kategori::find($data->kategori_id)->nama}}</td>
                                                {{--<td>{{App\Subyek::find($data->subyek_id)->nama}}</td>--}}
                                                <td>
                                                    <div class="nav-link btn-group dropdown nav-item">
                                                                <a href="#" class="nav-link btn btn-info btn-sm btn-fill pull-right" data-toggle="dropdown"><i class="fa fa-bars"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <a class="dropdown-item" href="{{route('admin.buku.detailbuku',['id'=> encrypt( $data->kode_buku)])}}">Detail</a>
                                                                    <a class="dropdown-item" href="{{route('admin.buku.editbuku',['id'=>  $data->kode_buku])}}">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
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
    </div>
@endsection