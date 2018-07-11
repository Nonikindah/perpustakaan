@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">HISTORI PEMINJAMAN BUKU</h4>
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
                                    <td>Dipinjam</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin/perpanjang')}}" class="btn btn-info btn-sm btn-fill pull-right">Perpanjang</a>
                                            <a href="{{route('admin/pengembalian')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right">Pengembalian</a>
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
                                    <td>Tersedia</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-info btn-sm btn-warning btn-fill pull-right">Lihat Histori</button>
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
                                    <td>Tersedia</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-info btn-sm btn-warning btn-fill pull-right">Lihat Histori</button>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <a href="{{route('admin/tambahpinjam')}}" type="submit" class="btn btn-info btn-fill pull-right" style="margin-right: 10px">Tambah</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
