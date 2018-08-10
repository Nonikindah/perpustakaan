@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-6 card-title ">Laporan Peminjaman</h4>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="row  justify-content-center">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-header" style="background: #28d186">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/user.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Anggota</h5>
                                        </div>
                                        <div class="card-body" style="background:#4fb783">
                                            <a href="{{route('admin.cetakdataanggota')}}" style="color: #ffffff">Cetak Anggota</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card ">
                                        <div class="card-header " style="background: #3ec5e1">
                                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/library.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Buku</h5>
                                        </div>
                                        <div class="card-body" style="background:#51adcf">
                                            <a href="{{route('admin.cetakdatabuku')}}" style="color: #ffffff">Cetak Buku</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  justify-content-center">
                                <div class="col-md-5">
                                    <div class="card ">
                                        <div class="card-header " style="background: #f86b59">
                                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/refresh.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Peminjaman</h5>
                                        </div>
                                        <div class="card-body" style="background:#ea5455">
                                            <a href="{{route('admin.cetakdatahistori')}}" style="color: #ffffff">Cetak Histori Peminjaman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card ">
                                        <div class="card-header " style="background: #e9ad59">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/refresh.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Admin</h5>
                                        </div>
                                        <div class="card-body" style="background:#df8931">
                                            <a href="{{route('admin.cetakdataadmin')}}" style="color: #ffffff">Cetak Admin</a>
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
