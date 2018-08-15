@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group">
                        <div class=" form-inline">
                            <a class="btn btn-primary btn-fill" style="border-radius: 0px" data-toggle="collapse"
                               href="#collapseExample" role="button" aria-expanded="false"
                               aria-controls="collapseExample">Tambah Pinjam</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collapse" id="collapseExample">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST"
                                              action="{{route('admin.pinjam.store')}}">
                                            @csrf
                                            {{ method_field('put') }}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="card-title" style="margin-bottom: 5px">No. Anggota
                                                        </div>
                                                        <input type="text" class="form-control" name="anggota_id"
                                                               value="{{ old('anggota_id') }}"
                                                               style="border-radius: 0px" required
                                                               autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="card-title" style="margin-bottom: 5px">No Induk Buku
                                                            1
                                                        </div>
                                                        <input type="text" class="form-control" name="item_id"
                                                               value="{{old('item_id')}}" style="border-radius: 0px"
                                                               required autofocus>

                                                        @if($errors->has('item_id'))
                                                            <span class="alert-danger"></span>
                                                            {{$errors->first('item_id')}}
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="card-title" style="margin-bottom: 5px">No Induk Buku
                                                            2
                                                        </div>
                                                        <input type="text" class="form-control" name="item_id2"
                                                               value="{{old('item_id')}}" style="border-radius: 0px"
                                                               autofocus>

                                                        @if($errors->has('item_id'))
                                                            <span class="alert-danger"></span>
                                                            {{$errors->first('item_id')}}
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="card-title" style="margin-bottom: 5px">No Induk Buku
                                                            3
                                                        </div>
                                                        <input type="text" class="form-control" name="item_id3"
                                                               value="{{old('item_id')}}" style="border-radius: 0px"
                                                               autofocus>

                                                        @if($errors->has('item_id'))
                                                            <span class="alert-danger"></span>
                                                            {{$errors->first('item_id')}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    NB.  Peminjaman buku min 1 & maks 3 item buku
                                                </div>
                                            </div>
                                            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}" required
                                                   autofocus>
                                            <button type="submit" class="btn btn-primary btn-fill"
                                                    style="border-radius: 0px">Tambah
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-12 card-title"><b>Peminjaman Buku</b>
                                    <hr>
                                </h4>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{url()->current()}}" method="GET">
                                                <button type="submit"
                                                        class="btn btn-out btn-fill btn-success pull-right"
                                                        style="margin-right: 7px"><i class="fa fa-search"></i> Cari
                                                </button>
                                                <input type="text" name="id" placeholder="Cari berdasarkan judul"
                                                       class="form-control pull-right" style="width: 90%">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Nama Anggota</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Harus Kembali</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                @foreach($pinjam as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->getItem(false)->no_induk or ''}}</td>
                                        @if(empty($data->getAnggota(false)))
                                            <td>-</td>
                                        @else
                                            <td>{{$data->getAnggota(false)->nama}}</td>
                                        @endif
                                        <td>{{$data->getItem(false)->getBuku(false)->judul or ''}}</td>
                                        <td>{{$data->tgl_pinjam}}</td>
                                        <td>{{$data->tgl_haruskembali}}</td>
                                        <td>{{$data->tgl_kembali}}</td>
                                        @if($data->dipinjam == true)
                                            <td>Dipinjam</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin.pinjam.perpanjangan', ['id' => encrypt($data->id)])}}"
                                                       class="btn btn-info btn-sm btn-fill pull-right">Perpanjang</a>
                                                    <a href="{{route('admin.pinjam.pengembalian', ['id' => encrypt($data->id)])}}"
                                                       class="btn btn-info btn-sm btn-fill btn-danger pull-right">Pengembalian</a>
                                                </div>
                                            </td>
                                        @else
                                            <td>Dikembalikan</td>
                                            <td>
                                                {{--<div class="btn-group">--}}
                                                    {{--<a href="{{route('admin.pinjam.historipinjaman',['id' => encrypt($data->id)])}}"--}}
                                                       {{--class="btn btn-warning btn-sm btn-fill pull-right">Lihat--}}
                                                        {{--Histori</a>--}}
                                                {{--</div>--}}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$pinjam->links(0)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
