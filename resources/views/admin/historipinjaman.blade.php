@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                            <h4>HISTORI BUKU</h4>
                        <div style="font-size: 16px" class="card-body table-full-width table-responsive">
                            <p>Kode Buku : 300.596.343</p>
                            <p>Judul Buku : Adil Tanpa Pandang Bulu</p>
                            <p>Pengarang : Ava</p>
                            <p>Penerbit : Aca</p>
                            </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div style="font-size: 16px" class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID Pinjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Nama Peminjam</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>06/07/2018</td>
                                    <td>Putri</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="{{route('admin/pinjam')}}" class="btn btn-primary btn-fill pull-right" style="margin-right: 10px">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
