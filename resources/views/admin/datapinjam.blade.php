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
                                <h4 class="col-md-3 card-title">Histori Peminjaman Buku</h4>
                                <div class="col-md-9 ">
                                    <div class="row">
                                        <div class="col-md-9" style="padding-right: 0">
                                            <form action="{{route('admin.searchpinjam')}}" method="GET">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-search"></i></button>
                                                <input type="text" name="id" placeholder="Cari berdasarkan judul" class="form-control pull-right" style="width: 60%">
                                            </form>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0">
                                            <a href="{{route('admin.pinjam.tambahpinjam')}}" class="btn btn-primary btn-fill " style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Buku</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="font-size: 16px" class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID Pinjam</th>
                                <th>No. Anggota</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                @foreach($pinjam as $key=>$data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->getAnggota(false)->nama}}</td>
                                    <td>{{$data->getBuku(false)->kode_buku}}</td>
                                    <td>{{$data->getBuku(false)->judul}}</td>
                                    <td>{{$data->tgl_pinjam}}</td>
                                    <td>{{$data->tgl_kembali}}</td>
                                    @if($data->status == false)
                                        <td>Dipinjam</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.pinjam.formperpanjang')}}" class="btn btn-info btn-sm btn-fill pull-right">Perpanjang</a>
                                            <a href="{{route('admin.pinjam.pengembalian')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right">Pengembalian</a>
                                        </div>
                                    </td>
                                    @else
                                        <td>Dikembalikan</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('admin.pinjam.historipinjaman')}}" class="btn btn-warning btn-sm btn-fill pull-right">Lihat Histori</a>
                                            </div>
                                        </td>
                                    @endif


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

@endsection
