@extends('layouts.admin')

@section('content')
    <script>
        function perpanjangan(){
            swal({
                title: "Berhasil!",
                text: "Anda memperpanjang masa peminjaman buku",
                icon: "success"
            });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Perpanjang Peminjaman Buku</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control pull-right" disabled="" placeholder="ID Pinjam disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$pinjam->id}}" name="id">
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group" {{ $errors->has('anggota_id') ? 'has-error' : '' }}>
                                            <label>No. Anggota</label>
                                            <input type="text" class="form-control" placeholder="" value="{{$pinjam->anggota_id}}">
                                            @if ($errors->has('anggota_id'))
                                                <span class="help-block">{{ $errors->first('anggota_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input type="date" class="form-control" name="tgl_pinjam" value="{{$pinjam->tgl_pinjam}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                            <label>Nama Peminjam</label>
                                            <input type="text" class="form-control" placeholder="" name="nama" value="{{$pinjam->getAnggota(false)->nama}}">
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input type="date" value="{{$pinjam->tgl_kembali}}" class="form-control" name="tgl_kembali"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group" {{ $errors->has('kode_buku') ? 'has-error' : '' }}>
                                            <label>Kode Buku</label>
                                            <input type="text" class="form-control" placeholder="" value="{{$pinjam->item_id}}">
                                            @if ($errors->has('item_id'))
                                                <span class="help-block">{{ $errors->first('item_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" {{ $errors->has('tgl_perpanjang') ? 'has-error' : '' }}>
                                            <label>Tanggal Perpanjang</label>
                                            <input type="date" class="form-control"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" href="{{route('admin.pinjam')}}" class="btn btn-primary btn-fill pull-right">Perpanjang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection