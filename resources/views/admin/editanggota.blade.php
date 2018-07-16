@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Edit Data Anggota</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control pull-right" disabled="" placeholder="ID Anggota disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Telp/HP</label>
                                            <input type="text" class="form-control" placeholder="No. Telp/HP">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Identitas (KTP/SIM/KTM)</label>
                                            <input type="text" class="form-control" placeholder="No. Identitas">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" id="pekerjaan">
                                                <option>--Pilih Jenis Kelamin--</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select class="form-control" id="pekerjaan">
                                                <option>--Pilih Pekerjaan--</option>
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
                    <a href="{{ route('alert','updateanggota')}}" class="btn btn-primary btn-fill pull-right">Update</a>
                </div>
            </div>
        </div>
    </div>
@endsection