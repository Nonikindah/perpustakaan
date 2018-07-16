@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-4 card-title">Histori Peminjaman Buku</h4>
                                <div class="col-md-8 ">
                                    <a href="{{route('admin/pinjam/tambahpinjam')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                                    <a href="#" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-search"></i> Cari</a>
                                    <input type="text" class="form-control pull-right" style="width: 60%">
                                </div>
                            </div>
                        </div>
                        <div style="font-size: 16px" class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID Pinjam</th>
                                <th>No. Anggota</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12</td>
                                    <td>300.596.343</td>
                                    <td>Adil Tanpa Pandang Bulu</td>
                                    <td>06/07/2018</td>
                                    <td>09/07/2018</td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin/pinjam/formperpanjang')}}" class="btn btn-info btn-sm btn-fill pull-right">Perpanjang</a>
                                            <a href="{{route('admin/pinjam/pengembalian')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right">Pengembalian</a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12</td>
                                    <td>300.596.343</td>
                                    <td>Adil Tanpa Pandang Bulu</td>
                                    <td>06/07/2018</td>
                                    <td>09/07/2018</td>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin/pinjam/historipinjaman')}}" class="btn btn-info btn-sm btn-warning btn-fill pull-right">Lihat Histori</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12</td>
                                    <td>300.596.343</td>
                                    <td>Adil Tanpa Pandang Bulu</td>
                                    <td>06/07/2018</td>
                                    <td>09/07/2018</td>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin/pinjam/historipinjaman')}}" class="btn btn-info btn-sm btn-warning btn-fill pull-right">Lihat Histori</a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
