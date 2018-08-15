@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Edit Penerbit</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.updatepenerbit')}}">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$penerbit->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Nama</div>
                                            <input type="text" name="nama" class="form-control" value="{{$penerbit->nama}}" required autofocus style="border-radius: 0px" >
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('alamat') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Alamat</div>
                                            <input type="text" class="form-control" name="alamat" value="{{$penerbit->alamat}}" required autofocus style="border-radius: 0px" >
                                            @if ($errors->has('alamat'))
                                                <span class="help-block">{{ $errors->first('alamat') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('telepon') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Telepon</div>
                                            <input type="text" class="form-control" name="telepon" value="{{$penerbit->telepon}}" required style="border-radius: 0px" >
                                            @if ($errors->has('telepon'))
                                                <span class="help-block">{{ $errors->first('telepon') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('kontak_person') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Kontak Person</div>
                                            <input type="text" class="form-control" name="kontak_person" value="{{$penerbit->kontak_person}}" required style="border-radius: 0px">
                                            @if ($errors->has('kontak_person'))
                                                <span class="help-block">{{ $errors->first('kontak_person') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('keterangan') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Keterangan</div>
                                            <input type="text" class="form-control" name="keterangan" value="{{$penerbit->keterangan}}" style="border-radius: 0px" required>
                                            @if ($errors->has('keterangan'))
                                                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('kota') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Kota</div>
                                            <input type="text" class="form-control" name="kota" value="{{$penerbit->kota}}" required style="border-radius: 0px">
                                            @if ($errors->has('kota'))
                                                <span class="help-block">{{ $errors->first('kota') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill" style="border-radius: 0px">Update</button>
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