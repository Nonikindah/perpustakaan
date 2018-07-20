@extends('layouts.admin')

@section('content')
    <script>
        function hapusanggota() {
            swal({
                title:"Apakah Anda yakin?",
                text: "Data akan dihapus",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Hapus data dibatalkan");
                    }
                });
        }
        function cari() {
            swal({
                text: 'Masukkan kata kunci dari Nama atau No. Identitas',
                content: "input",
                button: {
                    text: "Cari",
                    closeModal: false,
                },
            })
                .then(name => {
                    if (!name) throw null;

                    return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
                })
                .then(results => {
                    return results.json();
                })
                .then(function (json) {
                    const movie = json.results[0];

                    if (!movie) {
                        return swal("No movie was found!");
                    }

                    const name = movie.trackName;
                    const imageURL = movie.artworkUrl100;

                    swal({
                        title: "Top result:",
                        text: name,
                        icon: imageURL,
                    });
                })
                .catch(function (err) {
                    if (err) {
                        swal("Oh noes!", "The AJAX request failed!", "error");
                    } else {
                        swal.stopLoading();
                        swal.close();
                    }
                });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-4 card-title">Data Anggota</h4>
                                <div class="col-md-8 ">
                                    <a href="{{route('admin/anggota/daftaranggota')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Anggota</a>
                                    <a href="/danggota" onclick="cari()" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-search"></i> Cari</a>
                                    {{--<input type="text" class="form-control pull-right" style="width: 60%">--}}
                                </div>
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
                                                <a href="{{route('admin/anggota/editanggota')}}"
                                                   class="btn btn-info btn-sm btn-fill pull-right"><i
                                                            class="fa fa-pencil"></i></a>
                                                <button type="button" onclick="hapusanggota()" href="{{route('admin/anggota')}}"
                                                   class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i
                                                            class="fa fa-trash"></i></button>
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
                                                <a href="{{route('admin/anggota/editanggota')}}"
                                                   class="btn btn-info btn-sm btn-fill pull-right"><i
                                                            class="fa fa-pencil"></i></a>
                                                <button type="button" onclick="hapusanggota()" href="{{route('admin/anggota')}}"
                                                   class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i
                                                            class="fa fa-trash"></i></button>
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
                                                <a href="{{route('admin/anggota/editanggota')}}"
                                                   class="btn btn-info btn-sm btn-fill pull-right"><i
                                                            class="fa fa-pencil"></i></a>
                                                <button type="button" onclick="hapusanggota()" href="{{route('admin/anggota')}}"
                                                   class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i
                                                            class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection