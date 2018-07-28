@extends('layouts.admin')

@section('content')
    <script>
        function editadmin(){
            swal({
                title: "Berhasil!",
                text: "Anda memperbarui data Admin",
                icon: "success"
            });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Edit Profile</h4>
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
                                <input type="hidden" value="{{Auth::user()->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" value="{{Auth::user()->password}}" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat_lengkap') ? 'has-error' : '' }}">
                                            <label >Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat_lengkap" value="{{Auth::user()->alamat_lengkap}}">
                                            @if ($errors->has('alamat_lengkap'))
                                                <span class="help-block">{{ $errors->first('alamat_lengkap') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                            <label for="alamat">Alamat</label>
                                            <select class="form-control searchSel" name="kelurahan_id" >
                                                @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}"  @if(Auth::user()->kelurahan_id==$kelurahan->id)selected @endif>{{ $kelurahan->nama }}, {{ $kelurahan->getKecamatan(false)->nama }}, {{ $kelurahan->getKabupaten(false)->nama }} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('alamat'))
                                                <span class="help-block">{{ $errors->first('alamat') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('jenkel') ? 'has-error' : '' }}">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenkel">
                                                <option value="Laki-laki" @if(Auth::user()->jenkel=="Laki-laki")selected @endif>Laki-laki</option>
                                                <option value="Perempuan" @if(Auth::user()->jenkel=="Perempuan")selected @endif>Perempuan</option>
                                            </select>
                                            @if ($errors->has('jenkel'))
                                                <span class="help-block">{{ $errors->first('jenkel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('telp') ? 'has-error' : '' }}">
                                            <label>No. Telp/HP</label>
                                            <input type="text" class="form-control" placeholder="No. Telp/HP" name="telp" value="{{Auth::user()->telp}}">
                                            @if ($errors->has('telp'))
                                                <span class="help-block">{{ $errors->first('telp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{Auth::user()->hak_akses}}" name="hak_akses">
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Update Profile</button>
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