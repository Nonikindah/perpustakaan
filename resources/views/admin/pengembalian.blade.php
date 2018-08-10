@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Pengembalian Buku</h4>
                            </div>
                        </div>
                        <div class="card-body">
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
                                        {{--<td>{{$histori->id}}</td>--}}
                                        {{--<td>{{$histori->getAnggota(false)->nama}}</td>--}}
                                        {{--<td>{{$histori->tgl_pinjam}}</td>--}}
                                        {{--<td>{{$histori->tgl_kembali}}</td>--}}
                                    </tr>

                                </table>
                                <a href="{{route('admin.pinjam')}}" class="btn btn-primary btn-fill pull-right">Kembali</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection