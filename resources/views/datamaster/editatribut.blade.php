@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Atribut</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.updateatribut')}}">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$atribut->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="{{$atribut->nama}}" required autofocus>
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('batas_sewa') ? 'has-error' : '' }}>
                                            <label>Batas Sewa</label>
                                            <input type="text" class="form-control" name="batas_sewa" value="{{$atribut->batas_sewa}}" required autofocus>
                                            @if ($errors->has('batas_sewa'))
                                                <span class="help-block">{{ $errors->first('batas_sewa') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('harga_sewa') ? 'has-error' : '' }}>
                                            <label>Harga sewa</label>
                                            <input type="text" class="form-control" name="harga_sewa" value="{{$atribut->harga_sewa}}" required>
                                            @if ($errors->has('harga_sewa'))
                                                <span class="help-block">{{ $errors->first('harga_sewa') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('denda') ? 'has-error' : '' }}>
                                            <label>Denda</label>
                                            <input type="text" class="form-control" name="denda" value="{{$atribut->denda}}" required>
                                            @if ($errors->has('denda'))
                                                <span class="help-block">{{ $errors->first('denda') }}</span>
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