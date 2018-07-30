@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Rak</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.updaterak')}}">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$rak->id_rak}}" name="id_rak">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="{{$rak->nama}}" required autofocus>
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('kode') ? 'has-error' : '' }}>
                                            <label>Kode</label>
                                            <input type="text" class="form-control" name="kode" value="{{$rak->kode}}" required autofocus>
                                            @if ($errors->has('kode'))
                                                <span class="help-block">{{ $errors->first('kode') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('keterangan') ? 'has-error' : '' }}>
                                            <label>Keterangan</label>
                                            <textarea type="text" class="form-control" name="keterangan"  required>{{$rak->keterangan}}</textarea>
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