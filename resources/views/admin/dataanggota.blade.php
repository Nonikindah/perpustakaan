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
                text: 'Masukkan Nama atau No. Identitas',
                content: "input",
                url:"{{route('admin.anggota')}}",
                method:get,
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
                                <h4 class="col-md-3 card-title">Data Anggota</h4>
                                <div class="col-md-9 ">
                                    <div class="row">
                                        <div class="col-md-9" style="padding-right: 0">
                                            <form action="{{route('admin.searchanggota')}}" method="GET">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-out btn-fill btn-success pull-right"><i class="fa fa-search"></i></button>
                                                <input type="text" name="id" placeholder="Cari berdasarkan nama" class="form-control pull-right" style="width: 60%">
                                            </form>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0">
                                            <a href="{{route('admin.anggota.daftaranggota')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Anggota</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Alamat Lengkap</th>
                                    <th>No. Identitas (KTP/SIM/KTM)</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>No. HP/Telp</th>
                                    </thead>
                                    <tbody>
                                    @foreach($anggota as $key=>$data)
                                        <tr>
                                            <td>{{$data->id_anggota}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>
                                                {{$data->getKelurahan(false)->nama}},
                                                {{$data->getKelurahan(false)->getKecamatan(false)->nama }}
                                            </td>
                                            <td>{{$data->alamat_lengkap}}</td>
                                            <td>{{$data->identitas}}</td>
                                            <td>{{$data->jenkel}}</td>
                                            <td>{{$data->pekerjaan}}</td>
                                            <td width="15%">{{$data->telp}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin.anggota.editanggota',['id'=> $data->id_anggota])}}"
                                                       class="btn btn-info btn-sm btn-fill pull-right"><i
                                                                class="fa fa-pencil"></i></a>
                                                </div>
                                                <form action="{{ route('admin.deleteanggota', ['id'=> $data->id_anggota])}}" method="post">
                                                    {{csrf_field()}}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i
                                                                class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $anggota->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection