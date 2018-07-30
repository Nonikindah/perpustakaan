@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Klasifikasi</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('datamaster.updatekategori')}}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$klasifikasi->id_kategori}}" name="id_kategori">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="{{$klasifikasi->nama}}" required autofocus>
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('prefix') ? 'has-error' : '' }}>
                                            <label>Prefix</label>
                                            <input type="text" class="form-control" name="prefix" value="{{$klasifikasi->prefix}}" required autofocus>
                                            @if ($errors->has('prefix'))
                                                <span class="help-block">{{ $errors->first('prefix') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('keterangan') ? 'has-error' : '' }}>
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan" value="{{$klasifikasi->keterangan}}" required>
                                            @if ($errors->has('keterangan'))
                                                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Update</button>
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