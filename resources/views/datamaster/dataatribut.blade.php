@extends('layouts.admin')

@section('content')
    <script>
        function hapusanggota() {
            swal({
                title: "Apakah Anda yakin?",
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
                                <h4 class="col-md-4 card-title">ATRIBUT BUKU</h4>
                                <div class="col-md-8 ">
                                    <a href=""
                                       class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i
                                                class="fa fa-plus"></i> Tambah Atribut</a>
                                    <button type="submit" href="" onclick="cari()"
                                            class="btn btn-out btn-fill btn-success pull-right"><i
                                                class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Batas Sewa</th>
                                    <th>Harga Sewa</th>
                                    <th>Denda</th>
                                    </thead>
                                    <tbody>
                                    @foreach($atribut as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->batas_sewa}}</td>
                                            <td>{{$data->harga_sewa}}</td>
                                            <td>{{$data->denda}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href=""
                                                       class="btn btn-info btn-sm btn-fill pull-right"><i
                                                                class="fa fa-pencil"></i></a>
                                                </div>
                                                <form action="" method="post">
                                                    <button type="submit"
                                                            class="btn btn-info btn-sm btn-fill btn-danger pull-right">
                                                        <i
                                                                class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $atribut->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection