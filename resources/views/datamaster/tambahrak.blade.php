@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Tambah Rak</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.daftarrak')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Nama Rak</div>
                                            <input type="text" style="border-radius: 0px" name="nama" class="form-control" value="{{ old('nama') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Kode</div>
                                            <input type="text" style="border-radius: 0px"class="form-control" name="kode" value="{{ old('kode') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Keterangan</div>
                                            <textarea type="text" class="form-control" name="keterangan" required style="border-radius: 0px">{{ old('keterangan') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill " style="border-radius: 0px">Simpan</button>
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