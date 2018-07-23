@extends('layouts.admin')

@section('content')
    <script>
        function editadmin(){
            swal({
                title: "Berhasil!",
                text: "Anda memperbarui data Admin",
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
                                <h4 class="col-md-8 card-title">Edit Data Buku</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control pull-right" disabled=""
                                               placeholder="Kode Buku disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>DDC / Klasifikasi</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tempat Terbit</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Cetakan</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kondisi Buku</label>
                                            <select class="form-control" id="pekerjaan">
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
                                            <label>Jumlah Halaman</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input type="date" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" value=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" href="{{route('admin.buku')}}" onclick="editbuku()" class="btn btn-primary btn-fill pull-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection