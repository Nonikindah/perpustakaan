@extends('layouts.admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Data Koleksi Buku</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>No</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Eksemplar</th>
                                    <th>Keterangan</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12 Juni 2010</td>
                                        <td>Ava</td>
                                        <td>Acap</td>
                                        <td>2009</td>
                                        <td>3</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>12 Juni 2010</td>
                                        <td>Ava</td>
                                        <td>Acap</td>
                                        <td>2009</td>
                                        <td>3</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>12 Juni 2010</td>
                                        <td>Ava</td>
                                        <td>Acap</td>
                                        <td>2009</td>
                                        <td>3</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>12 Juni 2010</td>
                                        <td>Ava</td>
                                        <td>Acap</td>
                                        <td>2009</td>
                                        <td>3</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>12 Juni 2010</td>
                                        <td>Ava</td>
                                        <td>Acap</td>
                                        <td>2009</td>
                                        <td>3</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>12 Juni 2010</td>
                                        <td>Ava</td>
                                        <td>Acap</td>
                                        <td>2009</td>
                                        <td>3</td>
                                        <td>Baik</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="{{route('admin/daftarbuku')}}" class="btn btn-info btn-fill pull-right">Tambah Buku</a>
                    </div>
                </div>
            </div>
        </div>
@endsection