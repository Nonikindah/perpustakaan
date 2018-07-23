@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Buku</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.buku.store')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input type="text" class="form-control" placeholder="" name="judul">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>DDC / Klasifikasi</label>
                                            <select class="form-control" name="ddc">
                                                <option>--Pilih DDC / Klasifikasi--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" name="pengarang" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Halaman</label>
                                            <input type="text" name="halaman" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" name="penerbit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Cetakan</label>
                                            <input type="text" name="cetakan" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="text" name="tahun_terbit" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kondisi Buku</label>
                                            <select class="form-control" name="kondisi">
                                                <option>--Pilih Kondisi Buku--</option>
                                                <option>Baik</option>
                                                <option>Kurang Baik</option>
                                                <option>Rusak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input name="isbn" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
