@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Tambah Subyek</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.daftarsubyek')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Nama Subyek</div>
                                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required autofocus style="border-radius: 0px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Keterangan</div>
                                            <textarea type="text" class="form-control" name="keterangan" required autofocus style="border-radius: 0px">{{ old('keterangan') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill" style="border-radius: 0px">Simpan</button>
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