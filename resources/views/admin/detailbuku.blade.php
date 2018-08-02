@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <div class="col-md-12 ">

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{route('admin.buku.detailbuku',['id'=> encrypt( $buku->kode_buku)])}}">Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{route('admin.buku.itembuku',['id'=> encrypt( $buku->kode_buku)])}}">Item Buku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{route('admin.buku.tambahitem',['id'=> encrypt( $buku->kode_buku)])}}">Tambah Buku</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body table-full-width table-responsive">

                                    <br>
                                    <div class="row" style="margin-left: 100px">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p style="font-family:'Arial Rounded MT Bold'; font-size: 35px">{{$buku->judul}}</p>

                                            </div>
                                            <p style="font-family: 'Baskerville Old Face'; font-size: 20px">{{$buku->pengarang1}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="{{ asset('storage/'.$buku->gambar) }}" width="30%">
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
    </div>
@endsection