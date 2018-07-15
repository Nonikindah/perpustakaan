@extends('layouts.admin')

@section('content')
    @include('sweet::alert')
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
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>ID (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="ID user" value="ID user">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="email" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="Alamat Lengkap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <a href="{{route('alert','tambahadmin')}}" class="btn btn-primary btn-fill pull-right">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
@endsection