@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-6 card-title "><b>Data Perpustakaan</b><hr></h4>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background: #28d186">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/users-group.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Anggota::all()->count() }} Total Anggota</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card ">
                                        <div class="card-header " style="background: #3ec5e1">
                                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/library.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Buku::all()->count() }} Total Buku</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background: #f86b59">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/refresh.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Pinjam::all()->count() }} Total Peminjaman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background: #e9ad59">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/user.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\User::all()->count() }} Total Admin</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card ">
                                        <div class="card-header " style="background:#b0dedb">
                                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/pen-filled-writing-tool.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Penerbit::all()->count() }} Total Penerbit</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background: #ff847c">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/sort.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Kategori::all()->count() }} Total Klasifikasi</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background: #50c19a">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/subject.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Subyek::all()->count() }} Total Subyek</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card ">
                                        <div class="card-header " style="background: #df760b">
                                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/rack.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\Rak::all()->count() }} Total Rak</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background: #b0757c">
                                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                                        src="{{asset('/img/icon/open-book.png')}}"
                                                        style="margin-bottom: 13px;width: 15%;height: 15%">{{\App\JenisBuku::all()->count() }} Total Jenis Bacaan</h5>
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
