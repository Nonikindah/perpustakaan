@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Tambah Klasifikasi</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('datamaster.tambah')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Nama Klasifikasi</div>
                                            <input type="text" style="border-radius: 0px"  name="nama" class="form-control" value="{{ old('nama') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Prefix</div>
                                            <input type="text" style="border-radius: 0px"  class="form-control" name="prefix" value="{{ old('prefix') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Keterangan</div>
                                            <textarea type="text" style="border-radius: 0px" class="form-control" name="keterangan" value="{{ old('keterangan') }}" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" style="border-radius: 0px"  class="btn btn-primary btn-fill ">Simpan</button>
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