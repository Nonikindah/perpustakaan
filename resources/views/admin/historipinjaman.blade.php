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
                                    <p>Kode Buku : {{$histori->getItem(false)->no_induk}}</p>
                                    <p>Judul Buku : {{$histori->getItem(false)->getBuku(false)->judul}}</p>
                                    <p>Pengarang :
                                        @if($histori->getItem(false)->getBuku(false)->pengarang2 != null)
                                            {{$histori->getItem(false)->getBuku(false)->pengarang1}} dan  {{$histori->getItem(false)->getBuku(false)->pengarang2}}
                                        @elseif($histori->getItem(false)->getBuku(false)->pengarang3 != null)
                                            {{$histori->getItem(false)->getBuku(false)->pengarang1}},{{$histori->getItem(false)->getBuku(false)->pengarang2}} dan
                                            {{$histori->getItem(false)->getBuku(false)->pengarang3}}
                                        @else
                                            {{$histori->getItem(false)->getBuku(false)->pengarang1}}
                                        @endif
                                    </p>
                                        <p>Penerbit : {{App\Penerbit::find($histori->getItem(false)->getBuku(false)->penerbit_id)->nama}}</p>
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
                                    <td>{{$histori->id}}</td>
                                    <td>{{$histori->getAnggota(false)->nama}}</td>
                                    <td>{{$histori->tgl_pinjam}}</td>
                                    <td>{{$histori->tgl_kembali}}</td>
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
