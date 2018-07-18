@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Form Pengembalian Buku</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control pull-right" disabled="" placeholder="ID Pinjam disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Anggota</label>
                                            <input type="text" class="form-control" placeholder="No.Anggota">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Tempo</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Peminjam</label>
                                            <input type="text" class="form-control" placeholder="Nama Peminjam">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input type="date" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input type="text" class="form-control" placeholder="Kode Buku">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Lama Hari</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Pinjam</label>
                                                <input type="date" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Denda</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                <div class="clearfix"></div>
                            </form>
                            <a href="{{route('alert','pengembalian')}}" class="btn btn-primary btn-fill pull-right">Proses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection