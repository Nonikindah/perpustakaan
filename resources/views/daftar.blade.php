@extends('layouts.app')

@section('content')
    <script>
        function konfirmasi(){
            swal({
                title: "Berhasil!",
                text: "Anda telah terdaftar sebagai Anggota",
                type: "success",
                confirmButtonText: "OK",
            });
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 100px">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #67696c;color: #fff">Pendaftaran Anggota
                        Perpustakaan
                    </div>

                    <div class="panel-body">
                        {{--<form class="form-horizontal" method="POST" action="/daftar/{{$daftar->id}}/daftar">--}}
                        <form class="form-horizontal" method="POST" action="{{route('daftaranggota')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nama Lengkap</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="nama"
                                           value="{{ old('nama') }}" required autofocus>

                                    {{--@if ($errors->has('nama'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('nama') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="identitas" class="col-md-4 control-label">No. Identitas (KTP/
                                    SIM/KTM)</label>

                                <div class="col-md-6">
                                    <input id="identitas" type="text" class="form-control" name="identitas"
                                           value="{{ old('identitas') }}" required>

                                    {{--@if ($errors->has('identitas'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('identitas') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                <div class="col-md-6">
                                    <select class="js-example-basic-single form-control" name="kelurahan_id">
                                        @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                            <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}, {{ $kelurahan->getKecamatan(false)->nama }}, {{ $kelurahan->getKabupaten(false)->nama }}</option>
                                        @endforeach
                                    </select>

                                    {{--@if ($errors->has('alamat'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('alamat') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat_lengkap" class="col-md-4 control-label">Alamat Lengkap</label>

                                <div class="col-md-6">
                                    <input id="alamat_lengkap" type="text" class="form-control" name="alamat_lengkap"
                                           value="{{ old('alamat_lengkap') }}" placeholder="Contoh : Jalan Kita Bersama" required>

                                    {{--@if ($errors->has('identitas'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('identitas') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="jenkel" id="jenkel">
                                        <option>--Pilih Jenis Kelamin Anda--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    {{--@if ($errors->has('jenkel'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('jenkel') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Pekerjaan</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="pekerjaan" id="pekerjaan">
                                        <option>--Pilih Pekerjaan Anda--</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    </select>
                                    {{--@if ($errors->has('pekerjaan'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('pekerjaan') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                                <label for="telepon" class="col-md-4 control-label">No. HP/Telp</label>

                                <div class="col-md-6">
                                    <input id="telepon" type="text" class="form-control" name="telp"
                                           value="{{ old('telepon') }}" required autofocus>
                                    {{--@if ($errors->has('telepon'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('telepon') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" onclick="konfirmasi()" style="background-color: #be9e21" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
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