@extends('layouts.admin')

@section('content')

    <div class="content">
        <div class="container-fluid">
            {{--<button class="btn btn-lg btn-danger" onclick="konfirmasi()">Halo</button>--}}

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Data Perpustakaan</h4>
                        </div>
                        <div class="row" style="padding: 20px">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header" style="background: #28d186">
                                        <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/user.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Anggota::all()->count()}} Total Anggota</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header " style="background: #3ec5e1">
                                        <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/library.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Buku::all()->count()}} Total Buku</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header " style="background: #f86b59">
                                        <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/refresh.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Pinjam::all()->count()}} Total Peminjaman</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header " style="background: #e9ad59">
                                        <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/refresh.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\User::all()->count()}} Total Admin</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding:20px; padding-top: 0px">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header" style="background: #b0dedb">
                                        <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/user.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Penerbit::all()->count()}} Total Penerbit</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header " style="background: #ff847c">
                                        <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/library.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Kategori::all()->count()}} Total Klasifikasi</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header " style="background: #50c19a">
                                        <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/refresh.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Subyek::all()->count()}} Total Subyek</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header " style="background: #df760b">
                                        <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                    src="{{asset('/img/icon/refresh.png')}}"
                                                    style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Rak::all()->count()}} Total Rak</h5>
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