@extends('layouts.admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Buku</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>No. Buku</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Tanggal Masuk</label>
                                                <input type="date" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Pengarang</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Tahun Terbit</label>
                                                <input type="text" class="form-control" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Eksemplar</label>
                                                <select class="form-control" id="pekerjaan">
                                                    <option>--Pilih Jumlah Eksemplar--</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Kondisi Buku</label>
                                                <select class="form-control" id="pekerjaan">
                                                    <option>--Pilih Kondisi Buku--</option>
                                                    <option>Baik</option>
                                                    <option>Kurang Baik</option>
                                                    <option>Rusak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('admin/buku')}}" class="btn btn-info btn-fill pull-right">Simpan</a>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection