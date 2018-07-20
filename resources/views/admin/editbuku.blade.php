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
                            <h4 class="card-title">Edit Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No. Buku</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Eksemplar</label>
                                            <select class="form-control" id="pekerjaan">
                                                <option>--Pilih Jumlah Eksemplar--</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input type="date" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" href="{{route('admin/buku')}}" onclick="editbuku()" class="btn btn-primary btn-fill pull-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection