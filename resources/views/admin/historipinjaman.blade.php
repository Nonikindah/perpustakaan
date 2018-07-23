@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Histori Transaksi Buku</h4>
                                <div style="font-size: 16px">
                                    <p>Kode Buku : 300.596.343</p>
                                    <p>Judul Buku : Adil Tanpa Pandang Bulu</p>
                                    <p>Pengarang : Ava</p>
                                    <p>Penerbit : Aca</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID Pinjam</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Putri</td>
                                    <td>06/07/2018</td>
                                    <td>09/07/2018</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Putri</td>
                                    <td>06/07/2018</td>
                                    <td>09/07/2018</td>
                                </tr>
                            </table>
                            <a href="{{route('admin.pinjam')}}" class="btn btn-primary btn-fill pull-right">Kembali</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
