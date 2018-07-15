@extends('layouts.admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Anggota</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. Identitas (KTP/SIM/KTM)</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No. HP/Telp</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                    <select class="form-control" id="jenkel">
                                                        <option>--Pilih Jenis Kelamin Anda--</option>
                                                        <option>Laki-laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                    <select class="form-control" id="pekerjaan">
                                                        <option>--Pilih Pekerjaan Anda--</option>
                                                        <option>PNS</option>
                                                        <option>Pelajar/Mahasiswa</option>
                                                        <option>Karyawan Swasta</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <a href="{{route('admin/anggota')}}" class="btn btn-primary btn-fill pull-right">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
@endsection