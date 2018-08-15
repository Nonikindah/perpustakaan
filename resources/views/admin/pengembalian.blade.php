@extends('layouts.admin')

@section('content')
    <script>
        $(function() {
            $('#tgl1').datetimepicker({
                locale:'id',
                format:'DD/MMMM/YYYY'
            });

            $('#tgl2').datetimepicker({
                useCurrent: false,
                locale:'id',
                format:'DD/MMMM/YYYY'
            });

            $('#tgl1').on("dp.change", function(e) {
                $('#tgl2').data("DateTimePicker").minDate(e.date);
            });

            $('#tgl2').on("dp.change", function(e) {
                $('#tgl1').data("DateTimePicker").maxDate(e.date);
                CalcDiff()
            });

        });

        function CalcDiff(){
            var a=$('#tgl1').data("DateTimePicker").date();
            var b=$('#tgl2').data("DateTimePicker").date();
            var timeDiff=0
            if (b) {
                timeDiff = (b - a) / 1000;
            }

            $('#selisih').val(Math.floor(timeDiff/(86400))+' Hari')
        }
    </script>
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
                                            <th >Tanggal Pinjam</th>
                                            <td width="100%">{{$pengembalian->tgl_pinjam}}</td>
                                        </tr>
                                        <tr>
                                            <th >Tanggal Harus Kembali</th>
                                            <td id="tgl1" width="100%">{{$pengembalian->tgl_haruskembali}}</td>
                                        </tr>
                                        <tr>
                                            <th >Tanggal Kembali</th>
                                            <td id="tgl2" width="100%">{{$pengembalian->tgl_kembali}}</td>
                                        </tr>
                                        <tr>
                                            <th>Terlambat</th>
                                            <td width="100%">{{$pengembalian->tgl_haruskembali->diffInDays($pengembalian->tgl_kembali)}} hari</td>
                                        </tr>
                                        <tr>
                                            <th>Denda</th>
                                            <td width="100%">Rp {{$pengembalian->tgl_haruskembali->diffInDays($pengembalian->tgl_kembali)*1000}}</td>
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