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
                                        <th>Tempat Terbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>No Klasifikasi</th>
                                        <th>Subyek</th>
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
                                                        dan {{$data->pengarang3}}
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
                                                <td>{{App\Penerbit::find($data->penerbit_id)->kota}}</td>
                                                <td>{{$data->tahun_terbit}}</td>
                                                <td>{{App\Kategori::find($data->kategori_id)->prefix}}</td>
                                                <td>{{App\Subyek::find($data->subyek_id)->nama}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{route('admin.buku.detailbuku',['id'=> encrypt( $data->kode_buku)])}}"
                                                           class="btn btn-info btn-sm btn-fill pull-right"><i
                                                                    class="fa fa-info"></i></a>
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