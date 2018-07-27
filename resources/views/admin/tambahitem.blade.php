@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Item Buku</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.buku.store')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input type="date" class="form-control" placeholder="" name="judul">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Jumlah Item</label>
                                            <input type="text" name="pengarang" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea type="text" name="penerbit" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
