@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-12 card-title"><b>Cetak Data Admin</b><hr></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.cetakadminpertanggal')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Dari Tanggal</div>
                                            <input type="date" class="form-control" name="dari_tgl"  value="{{ old('dari_tgl') }}" style="border-radius: 0px" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Sampai Tanggal</div>
                                            <input type="date" class="form-control" name="sampai_tgl" style="border-radius: 0px"
                                                   value="{{ old('sampai_tgl') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill" style="border-radius: 0px">Cetak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection