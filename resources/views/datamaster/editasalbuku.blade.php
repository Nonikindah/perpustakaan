@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Edit Asal Buku</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.updateasalbuku')}}">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$asalbuku->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Nama</div>
                                            <input type="text" name="nama" class="form-control" style="border-radius: 0px" value="{{$asalbuku->nama}}" required autofocus>
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" {{ $errors->has('keterangan') ? 'has-error' : '' }}>
                                            <div class="card-title" style="margin-bottom: 5px">Keterangan</div>
                                            <textarea type="text" style="border-radius: 0px" class="form-control" name="keterangan" required autofocus>{{$asalbuku->keterangan}}</textarea>
                                            @if ($errors->has('keterangan'))
                                                <span class="help-block">{{ $errors->first('keterangan') }}</span>
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