@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <form enctype="multipart/form-data" class="form-horizontal" method="POST"
                  action="{{route('admin.buku.store')}}">
                @csrf
                {{ method_field('put') }}
                <div class="row ">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>Data Judul</b>
                                    <hr>
                                </h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <div class="card-title" style="margin-bottom: 5px">Judul</div>
                                            <input type="text" class="form-control" style="border-radius: 0px"
                                                   name="judul">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Judul Asli</div>
                                            <input type="text" style="border-radius: 0px" name="judul_asli" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Judul Seri</div>
                                            <input type="text" style="border-radius: 0px" name="judul_seri" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>Data Pengarang</b>
                                    <hr>
                                </h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <div class="card-title" style="margin-bottom: 5px">Pengarang 1</div>
                                            <input type="text" style="border-radius: 0px" name="pengarang1" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Pengarang 2</div>
                                            <input type="text" style="border-radius: 0px" name="pengarang2" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Pengarang 3</div>
                                            <input type="text" style="border-radius: 0px" name="pengarang3" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>Data Master</b>
                                    <hr>
                                </h4>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Klasifikasi</div>
                                                <select class="form-control" style="border-radius: 0px" name="kategori_id">
                                                    @foreach(\App\Kategori::all() as $kategori)
                                                        <option value="{{ $kategori->id_kategori }}">{{ $kategori->prefix }} {{$kategori->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title"  style="margin-bottom: 5px">Rak Buku</div>
                                                <select class="form-control " style="border-radius: 0px" name="rak_id">
                                                    @foreach(\App\Rak::all() as $rak)
                                                        <option value="{{ $rak->id_rak }}">{{ $rak->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Penerbit</div>
                                                <select class="form-control " style="border-radius: 0px" name="penerbit_id">
                                                    @foreach(\App\Penerbit::all() as $penerbit)
                                                        <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Jenis</div>
                                                <select class="form-control" style="border-radius: 0px" name="atribut_id">
                                                    @foreach(\App\Atribut::all() as $atribut)
                                                        <option value="{{ $atribut->id}}">{{ $atribut->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Asal Buku</div>
                                                <select class="form-control" style="border-radius: 0px" name="asalbuku_id">
                                                    @foreach(\App\AsalBuku::all() as $asalbuku)
                                                        <option value="{{ $asalbuku->id }}">{{ $asalbuku->nama }} ({{$asalbuku->keterangan}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Subyek</div>
                                                <select class=" form-control" style="border-radius: 0px" name="subyek_id">
                                                    @foreach(\App\Subyek::all() as $subyek)
                                                        <option value="{{ $subyek->id_subyek }}">{{ $subyek->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Fiksi-Non</div>
                                                <select class=" form-control"  style="border-radius: 0px" name="jenisbuku_id">
                                                    @foreach(\App\JenisBuku::all() as $jenisbuku)
                                                        <option value="{{ $jenisbuku->id }}">{{ $jenisbuku->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>Data Pelengkap</b>
                                    <hr>
                                </h4>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title"  style="margin-bottom: 5px">ISBN</div>
                                                <input name="isbn" style="border-radius: 0px" type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title"  style="margin-bottom: 5px">Edisi</div>
                                                <input name="edisi" style="border-radius: 0px" type="number" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Cetakan</div>
                                                <input name="cetakan" style="border-radius: 0px" type="number" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Volume</div>
                                                <input name="volume" style="border-radius: 0px" type="number" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Penerjemah</div>
                                                <input name="penerjemah" style="border-radius: 0px" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Ilustrator</div>
                                                <input type="text" style="border-radius: 0px" name="ilustrator" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Kolasi</div>
                                                <input type="text" style="border-radius: 0px" name="kolasi" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>Deskripsi Buku</b>
                                    <hr>
                                </h4>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Bahasa</div>
                                                <select class="form-control" style="border-radius: 0px" name="bahasa">
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
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Kategori</div>
                                                <select class="form-control" style="border-radius: 0px" name="jenis_bacaan">
                                                    <option value="Anak-anak">Anak-anak</option>
                                                    <option value="Remaja">Remaja</option>
                                                    <option value="Dewasa">Dewasa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title" style="margin-bottom: 5px">Kata Kunci</div>
                                                <input type="text" style="border-radius: 0px" name="kata_kunci" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Abstrak</div>
                                                <textarea type="text" style="border-radius: 0px; height: 192px"  name="abstrak" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>Data Lain</b>
                                    <hr>
                                </h4>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Jumlah Halaman</div>
                                                <input name="halaman" style="border-radius: 0px" type="number" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Jumlah Buku</div>
                                                <input type="number" style="border-radius: 0px" name="jumlah_buku" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Harga Beli (Rp.)</div>
                                                <input type="text" style="border-radius: 0px" name="harga_beli" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Tahun Terbit</div>
                                                <input type="number" style="border-radius: 0px" name="tahun_terbit" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Tahun Entry</div>
                                                <input type="date" style="border-radius: 0px" class="form-control" name="tahun_entry" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">File Gambar</div>
                                                <input type="file" style="border-radius: 0px" name="gambar" class="form-control-file"  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-fill ">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('.js-example-basic-single').select2();
    </script>
@endpush
