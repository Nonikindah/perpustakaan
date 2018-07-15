@extends('layouts.admin')

@section('content')
    @include('sweet::alert' )
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Data Anggota</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>No. Identitas (KTP/SIM/KTM)</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>No. HP/Telp</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ayu</td>
                                        <td>Surabaya</td>
                                        <td>1945038497747283</td>
                                        <td>Perempuan</td>
                                        <td>Pelajar/Mahasiswa</td>
                                        <td>098765423244</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('admin/anggota/editanggota')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ayu</td>
                                        <td>Surabaya</td>
                                        <td>1945038497747283</td>
                                        <td>Perempuan</td>
                                        <td>Pelajar/Mahasiswa</td>
                                        <td>098765423244</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('admin/anggota/editanggota')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                <a href="{{ route('alert','info')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ayu</td>
                                        <td>Surabaya</td>
                                        <td>1945038497747283</td>
                                        <td>Perempuan</td>
                                        <td>Pelajar/Mahasiswa</td>
                                        <td>098765423244</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('admin/anggota/editanggota')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="{{route('admin/anggota/daftaranggota')}}" class="btn btn-primary btn-fill pull-right">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
        @endsection