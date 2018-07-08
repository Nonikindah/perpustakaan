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
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Fullname</th>
                                    <th>Detail</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>dakota1</td>
                                        <td>admin1</td>
                                        <td>Dakota Rice</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>minerva2</td>
                                        <td>admin2</td>
                                        <td>Minerva Hooper</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>sage3</td>
                                        <td>admin3</td>
                                        <td>Sage Rodriguez</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm btn-fill pull-right"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-info btn-fill btn-warning pull-right" style="margin-right: 10px">Refresh</button>
                                <button type="submit" class="btn btn-info btn-fill pull-right" style="margin-right: 10px">Tambah</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
