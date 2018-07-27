@extends('layouts.admin')

@section('content')
    <script>
        function cari() {
            swal({
                text: 'Masukkan kata kunci dari judul, pengarang atau subyek buku',
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
                });v
        }
        function hapusbuku() {
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
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-4 card-title">Data Koleksi Buku</h4>
                                <div class="col-md-8 ">
                                    <a href="{{route('admin.buku.daftarbuku')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Buku</a>
                                    <button type="button" href="{{route('admin.buku')}}" onclick="cari()" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-search"></i> Cari</button>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Tempat Terbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>No Klasifikasi</th>
                                        <th>Subyek</th>
                                        <th>Kolasi</th>
                                        <th>Jumlah Item</th>
                                        </thead>
                                        <tbody>
                                        @foreach($buku as $key=>$data)
                                        <tr>
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->pengarang}}</td>
                                            <td>{{$data->penerbit}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{$data->cetakan}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin.buku.detailbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-info"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection