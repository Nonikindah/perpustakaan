@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Tambah Data Peminjaman</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.pinjam.store')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No. Anggota</label>
                                            <input type="text" class="form-control" name="anggota_id"
                                                   placeholder="No.Anggota" value="{{ old('anggota_id') }}" required
                                                   autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input type="text" class="form-control" name="item_id" placeholder="Penerbit" value="{{ old('item_id') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input type="date" class="form-control" name="tgl_pinjam"
                                                   value="{{ old('tgl_pinjam') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input type="date" class="form-control" name="tgl_kembali"
                                                   value="{{ old('tgl_kembali') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}" required autofocus>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection