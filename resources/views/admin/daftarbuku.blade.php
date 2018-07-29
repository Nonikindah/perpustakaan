@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Buku</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.buku.store')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" placeholder="" name="judul">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kata Kunci</label>
                                            <input type="text" name="halaman" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Asli</label>
                                            <input type="text" name="pengarang" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Abstrak</label>
                                            <textarea type="text" name="cetakan" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Seri</label>
                                            <input type="text" name="penerbit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subyek</label>
                                            <select class="form-control" name="">
                                                <option>--Pilih Subyek--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 1</label>
                                            <input type="text" name="" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input type="text" name="" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 2</label>
                                            <input name="isbn" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kota Terbit</label>
                                            <input type="text" name="" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 3</label>
                                            <input name="isbn" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fiksi-Non</label>
                                            <select class="form-control" name="">
                                                <option>--Pilih Fiksi/Nonfiksi--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penterjemah</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="date" name="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select class="form-control" name="">
                                                <option>--Klasifikasi--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select class="form-control" name="jenis">
                                                <option>--Pilih Jenis--</option>
                                                <option value="Anak-anak">Anak-anak</option>
                                                <option value="Remaja">Remaja</option>
                                                <option value="Dewasa">Dewasa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Rak Buku</label>
                                            <select class="form-control" name="">
                                                <option>--Pilih Rak--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bahasa</label>
                                            <select class="form-control" name="">
                                                <option>--Pilih Bahasa--</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Bengali">Bengali</option>
                                                <option value="Brazilian Portuguese">Brazilian Portuguese</option>
                                                <option value="English">English</option>
                                                <option value="Espanol">Espanol</option>
                                                <option value="German">German</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Japanish">Japanish</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Melayu">Melayu</option>
                                                <option value="Persia">Persia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kolasi</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Harga Beli (Rp.)</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select class="form-control" name="">
                                                <option>--Pilih Penerbit--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cetakan</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Halaman</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Volume</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="">
                                                <option>--Pilih Kategori--</option>
                                                <option value="Filsafat">Filsafat</option>
                                                <option value="Karya Umum">Karya Umum</option>
                                                <option value="Metafisika">Metafisika</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Edisi</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Asal Buku</label>
                                            <input name="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>File Gambar</label>
                                            <input type="file" name="" class="form-control-file"  >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Entri</label>
                                            <input type="date" class="form-control" name="" >
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
