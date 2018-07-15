@extends('layouts.admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" >
                            <div class="card-header" style="background: #28d186">
                                <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img src="{{asset('/img/icon/user.png')}}" style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Anggota</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-header "  style="background: #3ec5e1">
                                <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img src="{{asset('/img/icon/library.png')}}" style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Buku</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-header " style="background: #f86b59">
                                <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img src="{{asset('/img/icon/refresh.png')}}" style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Peminjaman</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-header " style="background: #e9ad59">
                                <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img src="{{asset('/img/icon/refresh.png')}}" style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Admin</h5>
                            </div>
                        </div>
                    </div>

                <div class="row">
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header " >
                                    <h4 class="card-title">Histori Peminjaman</h4>
                                    <p class="card-category">24 Hours performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartHours" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="card  card-tasks">
                            <div class="card-header ">
                                <h4 class="card-title">Tasks</h4>
                                <p class="card-category">Backend development</p>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection