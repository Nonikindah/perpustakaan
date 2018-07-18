@extends('layouts.admin')

@section('content')

    <script>
        function konfirmasi() {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) = > {
                if (result.value
        )
            {
                swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                )
            }
        })
        }
    </script>

    <div class="content">
        <div class="container-fluid">
            {{--<button class="btn btn-lg btn-danger" onclick="konfirmasi()">Halo</button>--}}

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="background: #28d186">
                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                        src="{{asset('/img/icon/user.png')}}"
                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Anggota</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header " style="background: #3ec5e1">
                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                        src="{{asset('/img/icon/library.png')}}"
                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Buku</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header " style="background: #f86b59">
                            <h5 class="card-title" style="font-size: 20px ;color: #FFFFFF"><img
                                        src="{{asset('/img/icon/refresh.png')}}"
                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Peminjaman</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header " style="background: #e9ad59">
                            <h5 class="card-title" style="font-size: 20px;color: #FFFFFF"><img
                                        src="{{asset('/img/icon/refresh.png')}}"
                                        style="margin-bottom: 13px;width: 15%;height: 15%"> 20 Total Admin</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Histori Peminjaman</h4>
                            <p>Perkembangan peminjaman buku tiga tahun terakhir</p>
                        </div>
                        <div class="card-body ">
                            <div id="chartHours" class="ct-chart"></div>
                        </div>
                        <div class="card-footer ">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> 2016
                                <i class="fa fa-circle text-danger"></i> 2017
                                <i class="fa fa-circle text-warning"></i> 2018
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection