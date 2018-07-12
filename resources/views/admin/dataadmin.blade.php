@extends('layouts.admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">DATA ADMIN PERPUSTAKAAN</h4>
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
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
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
                                <a href="{{route('admin/admin/tambahadmin')}}" type="submit" class="btn btn-info btn-fill pull-right" style="margin-right: 10px">Tambah</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection
