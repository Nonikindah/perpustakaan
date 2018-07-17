@extends('layouts.admin')

@section('content')
    <script>
        function konfirmasi() {
            swal({
                text: 'Masukkan kata kunci dari judul, pengarang atau subyek buku',
                content: "input",
                button: {
                    text: "Search!",
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
                .then(json => {
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
                .catch(err => {
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
                                <h4 class="col-md-4 card-title">Data Koleksi Buku</h4>
                                <div class="col-md-8 ">
                                    <a href="{{route('admin/buku/daftarbuku')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Buku</a>
                                    <a href="#" onclick="konfirmasi()" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-search"></i> Cari</a>
                                    {{--<input type="text" class="form-control pull-right" style="width: 60%">--}}
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
                                            <td>
                                                <button class="btn btn-info btn-fill" style="width: 120px">Baik</button>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin/buku/editbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                    <a href="{{ route('alert','hapusbuku')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>12 Juni 2010</td>
                                            <td>Ava</td>
                                            <td>Acap</td>
                                            <td>2009</td>
                                            <td>3</td>
                                            <td>
                                                <button class="btn btn-info btn-fill" style="width: 120px">Baik</button>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin/buku/editbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                    <a href="{{ route('alert','hapusbuku')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>12 Juni 2010</td>
                                            <td>Ava</td>
                                            <td>Acap</td>
                                            <td>2009</td>
                                            <td>3</td>
                                            <td>
                                                <button class="btn btn-info btn-fill" style="width: 120px">Baik</button>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin/buku/editbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                    <a href="{{ route('alert','hapusbuku')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>12 Juni 2010</td>
                                            <td>Ava</td>
                                            <td>Acap</td>
                                            <td>2009</td>
                                            <td>3</td>
                                            <td>
                                                <button class="btn btn-warning btn-fill" style="width: 120px">Kurang
                                                    Baik
                                                </button>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin/buku/editbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                    <a href="{{ route('alert','hapusbuku')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>12 Juni 2010</td>
                                            <td>Ava</td>
                                            <td>Acap</td>
                                            <td>2009</td>
                                            <td>3</td>
                                            <td>
                                                <button class="btn btn-danger btn-fill" style="width: 120px">Rusak
                                                </button>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin/buku/editbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                    <a href="{{ route('alert','hapusbuku')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>12 Juni 2010</td>
                                            <td>Ava</td>
                                            <td>Acap</td>
                                            <td>2009</td>
                                            <td>3</td>
                                            <td>
                                                <button class="btn btn-info btn-fill" style="width: 120px">Baik</button>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin/buku/editbuku')}}" class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></a>

                                                    <a href="{{ route('alert','hapusbuku')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
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
    </div>
@endsection