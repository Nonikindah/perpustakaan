@extends('layouts.admin')

@section('content')
    <script>
        function tambahadmin(){
            swal({
                title: "Berhasil!",
                text: "Anda menambah Admin",
                icon: "success"
            });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Admin</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ID (disabled)</label>
                                            <input type="text" class="form-control" disabled="" value="ID Admin">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Fullname</label>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="email" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat Lengkap">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" href="{{route('admin/admin')}}" onclick="tambahadmin()" class="btn btn-primary btn-fill pull-right">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('.js-example-basic-single').select2();
    </script>
@endpush