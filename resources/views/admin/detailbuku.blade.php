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
                                <h4 class="col-md-4 card-title">Detail Koleksi Buku</h4>
                                <div class="col-md-8 ">
                                    <a href="{{route('admin.buku.tambahitem')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Item</a>
                                    <a href="{{route('admin.buku.editbuku',['id'=> $buku->kode_buku])}}" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-pencil"></i> Edit Buku</a>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Nomer Induk</th>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Barcode</th>
                                        <th>No Klasifikasi</th>
                                        </thead>
                                        <tbody>
                                        @foreach($buku->getItemBuku(false) as $data)
                                            <tr>
                                                <td>{{$data->no_induk}}</td>
                                                <td>{{$buku->judul}}</td>
                                                <td>
                                                    @if($buku->pengarang2 != null)
                                                        {{$buku->pengarang1}} dan {{$buku->pengarang2}},
                                                    @elseif($buku->pengarang3 != null)
                                                        {{$buku->pengarang1}},{{$buku->pengarang2}},
                                                        dan {{$buku->pengarang3}}
                                                    @else
                                                        {{$buku->pengarang1}}
                                                    @endif
                                                </td>
                                                <td></td>
{{--                                                {{ dd($buku->getKategori(false)) }}--}}
                                                <td>{{$buku->getKategori(false)->first()->prefix}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" href="#"  class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
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