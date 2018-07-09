@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 100px">
            <div class="panel panel-default">
                <div class="panel-heading"style="background: #67696c">Pendaftaran Anggota Perpustakaan</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="#" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required>

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group">
                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            <label for="identitas" class="col-md-4 control-label">No. Identitas (KTP/SIM/KTM)</label>

                            <div class="col-md-6">
                                <input id="identitas" type="text" class="form-control" name="identitas" required>

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select class="form-control" id="jenkel">
                                    <option>--Pilih Jenis Kelamin Anda--</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Pekerjaan</label>
                            <div class="col-md-6">
                                    <select class="form-control" id="pekerjaan">
                                        <option>--Pilih Pekerjaan Anda--</option>
                                        <option>PNS</option>
                                        <option>Pelajar/Mahasiswa</option>
                                        <option>Karyawan Swasta</option>
                                    </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <label for="telepon" class="col-md-4 control-label">No. HP/Telp</label>

                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control" name="telepon" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/" type="submit" style="background-color: #be9e21" class="btn btn-primary">
                                    Register
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
