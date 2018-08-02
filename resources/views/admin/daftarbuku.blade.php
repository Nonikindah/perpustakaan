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
                            <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{route('admin.buku.store')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kata Kunci</label>
                                            <input type="text" name="kata_kunci" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Asli</label>
                                            <input type="text" name="judul_asli" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Asal Buku</label>
                                            <select class="form-control js-example-basic-single" name="asalbuku_id">
                                                @foreach(\App\AsalBuku::all() as $asalbuku)
                                                    <option value="{{ $asalbuku->id }}">{{ $asalbuku->nama }} ({{$asalbuku->keterangan}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Seri</label>
                                            <input type="text" name="judul_seri" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subyek</label>
                                            <select class="js-example-basic-single form-control" name="subyek_id">
                                                @foreach(\App\Subyek::all() as $subyek)
                                                    <option value="{{ $subyek->id_subyek }}">{{ $subyek->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 1</label>
                                            <input type="text" name="pengarang1" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input type="text" name="jumlah_buku" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 2</label>
                                            <input name="pengarang2" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ilustrator</label>
                                            <input type="text" name="ilustrator" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 3</label>
                                            <input name="pengarang3" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fiksi-Non</label>
                                            <select class=" form-control" name="jenisbuku_id">
                                                @foreach(\App\JenisBuku::all() as $jenisbuku)
                                                    <option value="{{ $jenisbuku->id }}">{{ $jenisbuku->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerjemah</label>
                                            <input name="penerjemah" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="text" name="tahun_terbit" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select class="form-control js-example-basic-single" name="kategori_id">
                                                @foreach(\App\Kategori::all() as $kategori)
                                                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->prefix }} {{$kategori->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select class="form-control" name="atribut_id">
                                                @foreach(\App\Atribut::all() as $atribut)
                                                    <option value="{{ $atribut->id}}">{{ $atribut->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Rak Buku</label>
                                            <select class="form-control js-example-basic-single" name="rak_id">
                                                @foreach(\App\Rak::all() as $rak)
                                                    <option value="{{ $rak->id_rak }}">{{ $rak->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bahasa</label>
                                            <select class="form-control" name="bahasa">
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
                                            <input type="text" name="kolasi" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Harga Beli (Rp.)</label>
                                            <input type="text" name="harga_beli" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select class="form-control js-example-basic-single" name="penerbit_id">
                                                @foreach(\App\Penerbit::all() as $penerbit)
                                                    <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cetakan</label>
                                            <input name="cetakan" type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Halaman</label>
                                            <input name="halaman" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Volume</label>
                                            <input name="volume" type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input name="isbn" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="jenis_bacaan">
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
                                            <label>Edisi</label>
                                            <input name="edisi" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Entry</label>
                                            <input type="date" class="form-control" name="tahun_entry" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Abstrak</label>
                                            <textarea type="text" style="height: 100px" name="abstrak" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>File Gambar</label>
                                            <input type="file" name="gambar" class="form-control-file"  >
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
    <script>
        $('.js-example-basic-single').select2();
    </script>
@endpush
