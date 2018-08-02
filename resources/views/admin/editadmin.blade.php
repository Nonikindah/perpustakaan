@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-6 card-title">Pengaturan Akun</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control pull-right" disabled=""
                                               placeholder="ID Admin disabled">
                                        @if ($errors->has('id'))
                                            <span class="help-block">{{ $errors->first('id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update')}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control"
                                                   value="{{Auth::user()->name}}" required autofocus>
                                            @if ($errors->has('name'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email"
                                                   value="{{Auth::user()->email}}" required autofocus>
                                            @if ($errors->has('email'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat_lengkap') ? 'has-error' : '' }}">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat"
                                                   name="alamat_lengkap" value="{{Auth::user()->alamat_lengkap}}">
                                            @if ($errors->has('alamat_lengkap'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('alamat_lengkap') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                            <label for="alamat">Alamat</label>
                                            <select class="form-control searchSel" name="kelurahan_id">
                                                @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}"
                                                            @if(Auth::user()->kelurahan_id==$kelurahan->id)selected @endif>
                                                        {{ $kelurahan->nama }}
                                                        , {{ $kelurahan->getKecamatan(false)->nama }},
                                                        {{ $kelurahan->getKabupaten(false)->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('alamat'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('alamat') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('jenkel') ? 'has-error' : '' }}">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenkel">
                                                <option value="Laki-laki"
                                                        @if(Auth::user()->jenkel=="Laki-laki")selected @endif>Laki-laki
                                                </option>
                                                <option value="Perempuan"
                                                        @if(Auth::user()->jenkel=="Perempuan")selected @endif>Perempuan
                                                </option>
                                            </select>
                                            @if ($errors->has('jenkel'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('jenkel') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('telp') ? 'has-error' : '' }}">
                                            <label>No. Telp/HP</label>
                                            <input type="text" class="form-control" placeholder="No. Telp/HP"
                                                   name="telp" value="{{Auth::user()->telp}}">
                                            @if ($errors->has('telp'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('telp') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{Auth::user()->hak_akses}}" name="hak_akses">
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-6 card-title">Ubah Password</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.ubah')}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password Lama</label>
                                            <input type="password" class="form-control" name="password_lama" required>
                                            @if ($errors->has('password_lama'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('password_lama') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <input type="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" name="password_confirmation" required>
                                            @if ($errors->has('password_confirmation'))
                                                <div class="alert alert-danger" role="alert">{{ $errors->first('password_confirmation') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Ubah Password</button>
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