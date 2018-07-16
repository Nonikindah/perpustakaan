@extends('layouts.admin')

@section('content')
    @include('sweet::alert')
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <div class="row form-inline">
                                <h4 class="col-md-6 card-title ">Data Admin</h4>
                                <div class="col-md-6">
                                    <a href="{{route('admin/admin/tambahadmin')}}" class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i class="fa fa-plus"></i> Tambah Admin</a>
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
                                    <tr>
                                        <td>1</td>
                                        <td>dakota1</td>
                                        <td>Dakota Rice</td>
                                        <td>Mojokerto</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('alert','hapusadmin')}}" class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>minerva2</td>
                                        <td>Minerva Hooper</td>
                                        <td>Mojokerto</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>sage3</td>
                                        <td>Sage Rodriguez</td>
                                        <td>Mojokerto</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
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

    @endsection
