@extends('layouts.admin')

@section('content')
    <script>
        function perpanjangan(){
            swal({
                title: "Berhasil!",
                text: "Anda memperpanjang masa peminjaman buku",
                icon: "success"
            });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Perpanjang Peminjaman Buku</h4>
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
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>No. Anggota</label>
                                            <input type="text" class="form-control" placeholder="Nama Peminjam">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input type="date" class="form-control"  placeholder="Kode Buku">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Nama Peminjam</label>
                                            <input type="text" class="form-control" placeholder="Nama Peminjam">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input type="date" class="form-control"  placeholder="Kode Buku">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input type="text" class="form-control" placeholder="Nama Peminjam">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Perpanjang</label>
                                            <input type="date" class="form-control"  placeholder="Kode Buku">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="perpanjangan()" href="{{route('admin.pinjam')}}" class="btn btn-primary btn-fill pull-right">Perpanjang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection