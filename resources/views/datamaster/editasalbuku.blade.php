@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Asal Buku</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.updateasalbuku')}}">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$asalbuku->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="{{$asalbuku->nama}}" required autofocus>
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('keterangan') ? 'has-error' : '' }}>
                                            <label>Keterangan</label>
                                            <textarea type="text" class="form-control" name="keterangan" required autofocus>{{$asalbuku->keterangan}}</textarea>
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