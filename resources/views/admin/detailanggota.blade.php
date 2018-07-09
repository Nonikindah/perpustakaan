@extends('layouts.admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Detail Data Anggota</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    <tr>
                                        <th>No</th>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>Ayu</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>Surabaya</td>
                                    </tr>
                                    <tr>
                                        <th>No. Identitas (KTP/SIM/KTM)</th>
                                        <td>1945038497747283</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>Perempuan</td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td>Pelajar/Mahasiswa</td>
                                    </tr>
                                    <tr>
                                        <th>No. HP/Telp</th>
                                        <td>098765423244</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Sebelumnya</button>
                    </div>
                </div>
            </div>
        </div>
@endsection