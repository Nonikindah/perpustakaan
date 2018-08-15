@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Edit Atribut</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.updateatribut')}}">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$atribut->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Nama</div>
                                            <input type="text" style="border-radius: 0px"  name="nama" class="form-control" value="{{$atribut->nama}}" required autofocus>
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('batas_sewa') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Batas Sewa</div>
                                            <input type="text" class="form-control" name="batas_sewa" value="{{$atribut->batas_sewa}}" required autofocus style="border-radius: 0px" >
                                            @if ($errors->has('batas_sewa'))
                                                <span class="help-block">{{ $errors->first('batas_sewa') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('harga_sewa') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Harga sewa</div>
                                            <input type="text" class="form-control" name="harga_sewa" value="{{$atribut->harga_sewa}}" style="border-radius: 0px"  required>
                                            @if ($errors->has('harga_sewa'))
                                                <span class="help-block">{{ $errors->first('harga_sewa') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('denda') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Denda</div>
                                            <input type="text" class="form-control" name="denda" value="{{$atribut->denda}}" required style="border-radius: 0px" >
                                            @if ($errors->has('denda'))
                                                <span class="help-block">{{ $errors->first('denda') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill " style="border-radius: 0px" >Update</button>
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