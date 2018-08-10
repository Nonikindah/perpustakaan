@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-12 card-title"><b>Histori Peminjaman Buku</b><hr></h4>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-10" style="padding-right: 0">
                                            <form action="{{url()->current()}}" method="GET">
                                                <button type="submit" class="btn btn-out btn-fill btn-success pull-right" style="margin-right: 7px"><i class="fa fa-search"></i> Cari</button>
                                                <input type="text" name="id" placeholder="Cari berdasarkan judul" class="form-control pull-right" style="width: 90%">
                                            </form>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 0">
                                            <a href="{{route('admin.pinjam.tambahpinjam')}}" class="btn btn-primary btn-fill " style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Pinjam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
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
                                    <td>{{$data->getItem(false)->no_induk or ''}}</td>
                                    <td>{{$data->getAnggota(false)->nama}}</td>
                                    <td>{{$data->getItem(false)->getBuku(false)->judul or ''}}</td>
                                    <td>{{$data->tgl_pinjam}}</td>
                                    <td>{{$data->tgl_haruskembali}}</td>
                                    <td>{{$data->tgl_kembali}}</td>
                                    @if($data->dipinjam == true)
                                        <td>Dipinjam</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.pinjam.perpanjangan', ['id' => encrypt($data->id)])}}" class="btn btn-info btn-sm btn-fill pull-right">Perpanjang</a>
                                            <a href="{{route('admin.pinjam.pengembalian', ['id' => encrypt($data->id)])}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right">Pengembalian</a>
                                        </div>
                                    </td>
                                    @else
                                        <td>Dikembalikan</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('admin.pinjam.historipinjaman',['id' => encrypt($data->id)])}}" class="btn btn-warning btn-sm btn-fill pull-right">Lihat Histori</a>
                                            </div>
                                        </td>
                                    @endif


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

@endsection
