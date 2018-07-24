@extends('layouts.admin')

@section('content')
    <script>
        function konfirmasi() {
            swal({
                title: "Apakah Anda yakin ?",
                text: "Data akan dihapus",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Berhasil menghapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Proses hapus dibatalkan");
                    }
                });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-6 card-title ">Data Admin</h4>
                                <div class="col-md-6">
                                    <a href="{{route('admin.admin.register')}}"
                                       class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i
                                                class="fa fa-plus"></i> Tambah Admin</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                </thead>
                                <tbody>
                                @foreach($admin as $key=>$data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td> {{$data->getKelurahan(false)->nama}},
                                            {{ $data->getKelurahan(false)->getKecamatan(false)->nama }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" onclick="konfirmasi()"
                                                        href="{{route('admin.admin')}}"
                                                        class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i
                                                            class="fa fa-trash"></i></button>
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

@endsection
