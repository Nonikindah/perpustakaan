@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover" style="padding-right: 20px">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-12 card-title "><b>Detail Anggota</b><hr></h4>
                                <div class="card-body table-full-width table-responsive">

                                    <br>
                                    <div class="row" style="margin-left: 20px">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="card-title" style="font-size: 20px"><b>{{$anggota->nama}}</b></p>
                                            </div>
                                            <p class="card-title"><b>{{$anggota->identitas}}</b></p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                @if($anggota->foto==NULL)
                                                    <img src="{{ asset('img/icon/defaultuser.png') }}" width="30%">
                                                @else
                                                    <img src="{{ asset('storage/'.$anggota->foto) }}" width="30%">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="margin-left: 20px">
                                        <div class="col-md-12 ">
                                            <p class="card-title" style="font-size: 20px; margin-bottom: 10px">
                                                Informasi Detail Anggota</p>
                                            <table class="table table-bordered ">
                                                <tbody>
                                                <tr>
                                                    <th width="50%">ID Anggota</th>
                                                    <td width="100%">{{$anggota->id_anggota}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <td width="100%">{{$anggota->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <th>No. Identitas</th>
                                                    <td width="100%">{{$anggota->identitas}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Lengkap</th>
                                                    <td width="100%">{{$anggota->alamat_lengkap}},
                                                        {{$anggota->getKelurahan(false)->nama}},{{$anggota->getKelurahan(false)->getKecamatan(false)->nama }},{{$anggota->getKelurahan(false)->getKecamatan(false)->getKabupaten(false)->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td width="100%">{{$anggota->jenkel}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pekerjaan</th>
                                                    <td width="100%">{{$anggota->pekerjaan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telepon</th>
                                                    <td width="100%">{{$anggota->telp}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection