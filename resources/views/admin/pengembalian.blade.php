@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title"><b>Transaksi Pengembalian Buku</b></h4>
                            </div>
                        </div>
                        <div class="row form-inline center-block ">
                            <div class="col-md-12">
                                <div class="card-body">

                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <th width="50%">No Peminjaman</th>
                                            <td width="100%">{{$pengembalian->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Peminjam</th>
                                            <td width="100%">{{$pengembalian->getAnggota(false)->id_anggota}}</td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td width="100%">{{$pengembalian->getAnggota(false)->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Buku yang dipinjam</th>
                                            <td width="100%">{{$pengembalian->getItem(false)->getBuku(false)->judul}} </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pinjam</th>
                                            <td width="100%">{{$pengembalian->tgl_pinjam}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Harus Kembali</th>
                                            <td id="tgl1" width="100%">{{$pengembalian->tgl_haruskembali}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Kembali</th>
                                            <td id="tgl2" width="100%">{{$pengembalian->tgl_kembali}}</td>
                                        </tr>
                                        <tr>
                                            <th>Terlambat</th>
                                            <?php
                                            $telat = $pengembalian->tgl_haruskembali->diffinDays($pengembalian->tgl_kembali, false);
                                            var_dump($telat);
                                            ?>
                                            <td width="100%">
                                                @if($telat > 0)
                                                    {{$hariTelat = $pengembalian->tgl_haruskembali->diffinDays($pengembalian->tgl_kembali, false)}} hari {{ $pengembalian->tgl_haruskembali->diffinHours($pengembalian->tgl_kembali) % ($hariTelat * 24) }} jam
                                                @else
                                                    Tidak Terlambat
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Denda</th>
                                            <td width="100%">
                                                @if($telat > 0)
                                                    @php
                                                        $denda = ($pengembalian->tgl_haruskembali->diffinDays($pengembalian->tgl_kembali, false)*1000) + (($pengembalian->tgl_haruskembali->diffinHours($pengembalian->tgl_kembali) % ($hariTelat * 24)) * (1000/24) );
                                                        $denda = ceil($denda/100) * 100;
                                                    @endphp
                                                  Rp {{ $denda  }}
                                                @else
                                                    Rp 0
                                                @endif
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{--<div class="card-body">--}}
                        {{--<div class="card-body">--}}
                        {{--<table class="table table-hover table-striped">--}}
                        {{--<thead>--}}
                        {{--<th>ID Pinjam</th>--}}
                        {{--<th>Nama Peminjam</th>--}}
                        {{--<th>Tanggal Pinjam</th>--}}
                        {{--<th>Tanggal Kembali</th>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}

                        {{--<tr>--}}
                        {{--<td>{{$histori->id}}</td>--}}
                        {{--<td>{{$histori->getAnggota(false)->nama}}</td>--}}
                        {{--<td>{{$histori->tgl_pinjam}}</td>--}}
                        {{--<td>{{$histori->tgl_kembali}}</td>--}}
                        {{--</tr>--}}

                        {{--</table>--}}
                        {{--<a href="{{route('admin.pinjam')}}" class="btn btn-primary btn-fill pull-right">Kembali</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection