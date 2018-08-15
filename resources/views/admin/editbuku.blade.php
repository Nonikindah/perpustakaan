@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <form enctype="multipart/form-data" class="form-horizontal" method="POST"
                  action="{{route('admin.updatebuku')}}">
                @csrf
                {{ method_field('put') }}
                <input type="hidden" value="{{$buku->kode_buku}}" name="kode_buku">
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
                                                   name="judul" value="{{$buku->judul}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Judul Asli</div>
                                            <input type="text" style="border-radius: 0px" name="judul_asli" class="form-control" value="{{$buku->judul_asli}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Judul Seri</div>
                                            <input type="text" style="border-radius: 0px" name="judul_seri" class="form-control" value="{{$buku->judul_seri}}">
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
                                            <input type="text" style="border-radius: 0px" name="pengarang1" class="form-control" value="{{$buku->pengarang1}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Pengarang 2</div>
                                            <input type="text" style="border-radius: 0px" name="pengarang2" class="form-control" value="{{$buku->pengarang2}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <div class="card-title" style="margin-bottom: 5px">Pengarang 3</div>
                                            <input type="text" style="border-radius: 0px" name="pengarang3" class="form-control" value="{{$buku->pengarang3}}" >
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
                                                        <option value="{{ $kategori->id_kategori }}" @if($buku->kategori_id == $kategori->id_kategori)selected @endif>{{ $kategori->prefix }} {{$kategori->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title"  style="margin-bottom: 5px">Rak Buku</div>
                                                <select class="form-control " style="border-radius: 0px" name="rak_id">
                                                    @foreach(\App\Rak::all() as $rak)
                                                        <option value="{{ $rak->id_rak }}" @if($buku->rak_id == $rak->id_rak)selected @endif>{{ $rak->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Penerbit</div>
                                                <select class="form-control " style="border-radius: 0px" name="penerbit_id">
                                                    @foreach(\App\Penerbit::all() as $penerbit)
                                                        <option value="{{ $penerbit->id }}" @if($buku->penerbit_id == $penerbit->id)selected @endif>{{ $penerbit->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Jenis</div>
                                                <select class="form-control" style="border-radius: 0px" name="atribut_id">
                                                    @foreach(\App\JenisBuku::all() as $jenisbuku)
                                                        <option value="{{ $jenisbuku->id }}" @if($buku->jenisbuku_id == $jenisbuku->id)selected @endif >{{ $jenisbuku->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Asal Buku</div>
                                                <select class="form-control" style="border-radius: 0px" name="asalbuku_id">
                                                    @foreach(\App\AsalBuku::all() as $asalbuku)
                                                        <option value="{{ $asalbuku->id }}" @if($buku->asalbuku_id==$asalbuku->id)selected @endif>{{ $asalbuku->nama }} ({{$asalbuku->keterangan}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Subyek</div>
                                                <select class=" form-control" style="border-radius: 0px" name="subyek_id">
                                                    @foreach(\App\Subyek::all() as $subyek)
                                                        <option value="{{ $subyek->id_subyek }}" @if($buku->subyek_id == $subyek->id_subyek)selected @endif>{{ $subyek->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Fiksi-Non</div>
                                                <select class=" form-control"  style="border-radius: 0px" name="jenisbuku_id">
                                                    @foreach(\App\JenisBuku::all() as $jenisbuku)
                                                        <option value="{{ $jenisbuku->id }}" @if($buku->jenisbuku_id == $jenisbuku->id)selected @endif >{{ $jenisbuku->nama }}</option>
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
                                                <input name="isbn" style="border-radius: 0px" type="text" class="form-control" value="{{$buku->isbn}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title"  style="margin-bottom: 5px">Edisi</div>
                                                <input name="edisi" style="border-radius: 0px" type="number" class="form-control" value="{{$buku->edisi}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Cetakan</div>
                                                <input name="cetakan" style="border-radius: 0px" type="number" class="form-control" value="{{$buku->cetakan}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Volume</div>
                                                <input name="volume" style="border-radius: 0px" type="number" class="form-control" value="{{$buku->volume}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Penerjemah</div>
                                                <input name="penerjemah" style="border-radius: 0px" type="text" class="form-control" value="{{$buku->penerjemah}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Ilustrator</div>
                                                <input type="text" style="border-radius: 0px" name="ilustrator" class="form-control" value="{{$buku->ilustrator}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Kolasi</div>
                                                <input type="text" style="border-radius: 0px" name="kolasi" class="form-control" value="{{$buku->kolasi}}">
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
                                                    <option @if($buku->bahasa =="Arabic")selected @endif>Arabic</option>
                                                    <option @if($buku->bahasa =="Bengali")selected @endif>Bengali</option>
                                                    <option @if($buku->bahasa =="Brazilian Portuguese")selected @endif>Brazilian Portuguese</option>
                                                    <option @if($buku->bahasa =="English")selected @endif>English</option>
                                                    <option @if($buku->bahasa =="Espanol")selected @endif>Espanol</option>
                                                    <option @if($buku->bahasa =="German")selected @endif>German</option>
                                                    <option @if($buku->bahasa =="Indonesia")selected @endif>Indonesia</option>
                                                    <option @if($buku->bahasa =="Japanish")selected @endif>Japanish</option>
                                                    <option @if($buku->bahasa =="Thai")selected @endif>Thai</option>
                                                    <option @if($buku->bahasa =="Melayu")selected @endif>Melayu</option>
                                                    <option @if($buku->bahasa =="Persia")selected @endif>Persia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Kategori</div>
                                                <select class="form-control" style="border-radius: 0px" name="jenis_bacaan">
                                                    <option @if($buku->jenis_bacaan =="Anak-anak")selected @endif>Anak-anak</option>
                                                    <option @if($buku->jenis_bacaan =="Remaja")selected @endif>Remaja</option>
                                                    <option @if($buku->jenis_bacaan =="Dewasa")selected @endif>Dewasa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="card-title" style="margin-bottom: 5px">Kata Kunci</div>
                                                <input type="text" style="border-radius: 0px" name="kata_kunci" class="form-control" value="{{$buku->kata_kunci}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Abstrak</div>
                                                <textarea type="text" style="border-radius: 0px; height: 278px"  name="abstrak" class="form-control">{{$buku->abstrak}}</textarea>
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
                                                <input name="halaman" style="border-radius: 0px" type="number" class="form-control" value="{{$buku->halaman}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Jumlah Buku</div>
                                                <input type="number" style="border-radius: 0px" name="jumlah_buku" class="form-control" value="{{\App\ItemBuku::where('buku_id',$buku->kode_buku)->get()->count()}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Harga Beli (Rp.)</div>
                                                <input type="text" style="border-radius: 0px" name="harga_beli" class="form-control" value="{{$buku->harga_beli}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Tahun Terbit</div>
                                                <input type="number" style="border-radius: 0px" name="tahun_terbit" class="form-control" value="{{$buku->tahun_terbit}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">Tahun Entry</div>
                                                <input type="date" style="border-radius: 0px" class="form-control" name="tahun_entry" value="{{$buku->tahun_entry}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                <div class="card-title" style="margin-bottom: 5px">File Gambar</div>
                                                <img src="{{ asset('storage/'.$buku->gambar) }}" style="width: 60px">
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
