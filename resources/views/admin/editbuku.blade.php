@extends('layouts.admin')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Edit Data Buku</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control pull-right" disabled=""
                                               placeholder="Kode Buku disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.updatebuku')}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$buku->kode_buku}}" name="kode_buku">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul" value="{{$buku->judul}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kata Kunci</label>
                                            <input type="text" name="kata_kunci" class="form-control" value="{{$buku->kata_kunci}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Asli</label>
                                            <input type="text" name="judul_asli" class="form-control" value="{{$buku->judul_asli}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Asal Buku</label>
                                            <select class="form-control js-example-basic-single" name="asalbuku_id">
                                                @foreach(\App\AsalBuku::all() as $asalbuku)
                                                    <option value="{{ $asalbuku->id }}" @if($buku->asalbuku_id==$asalbuku->id)selected @endif>{{ $asalbuku->nama }} ({{$asalbuku->keterangan}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Seri</label>
                                            <input type="text" name="judul_seri" class="form-control" value="{{$buku->judul_seri}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subyek</label>
                                            <select class="js-example-basic-single form-control" name="subyek_id">
                                                @foreach(\App\Subyek::all() as $subyek)
                                                    <option value="{{ $subyek->id_subyek }}" @if($buku->subyek_id == $subyek->id_subyek)selected @endif>{{ $subyek->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 1</label>
                                            <input type="text" name="pengarang1" class="form-control" value="{{$buku->pengarang1}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input type="text" disabled value="{{\App\ItemBuku::where('buku_id',$buku->kode_buku)->get()->count()}}" name="jumlah_buku" class="form-control"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 2</label>
                                            <input name="pengarang2" class="form-control" value="{{$buku->pengarang2}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="jenis_bacaan">
                                                <option @if($buku->jenis_bacaan =="Anak-anak")selected @endif>Anak-anak</option>
                                                <option @if($buku->jenis_bacaan =="Remaja")selected @endif>Remaja</option>
                                                <option @if($buku->jenis_bacaan =="Dewasa")selected @endif>Dewasa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pengarang 3</label>
                                            <input name="pengarang3" class="form-control" value="{{$buku->pengarang3}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fiksi-Non</label>
                                            <select class="form-control" name="jenisbuku_id">
                                                @foreach(\App\JenisBuku::all() as $jenisbuku)
                                                    <option value="{{ $jenisbuku->id }}" @if($buku->jenisbuku_id == $jenisbuku->id)selected @endif >{{ $jenisbuku->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerjemah</label>
                                            <input name="penerjemah" value="{{$buku->penerjemah}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="text"  value="{{$buku->tahun_terbit}}" name="tahun_terbit" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select class="form-control js-example-basic-single" name="kategori_id">
                                                @foreach(\App\Kategori::all() as $kategori)
                                                    <option value="{{ $kategori->id_kategori }}" @if($buku->kategori_id == $kategori->id_kategori)selected @endif>{{ $kategori->prefix }} {{$kategori->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select class="form-control js-example-basic-single" name="atribut_id">
                                                @foreach(\App\Atribut::all() as $atribut)
                                                    <option value="{{ $atribut->id}}" @if($buku->atribut_id == $atribut->id)selected @endif>{{ $atribut->nama }}</option>
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
                                                    <option value="{{ $rak->id_rak }}" @if($buku->rak_id == $rak->id_rak)selected @endif>{{ $rak->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bahasa</label>
                                            <select class="form-control" name="bahasa">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kolasi</label>
                                            <input type="text" value="{{$buku->kolasi}}" name="kolasi" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Harga Beli (Rp.)</label>
                                            <input type="text" value="{{$buku->harga_beli}}" name="harga_beli" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select class="form-control js-example-basic-single" name="penerbit_id">
                                                @foreach(\App\Penerbit::all() as $penerbit)
                                                    <option value="{{ $penerbit->id }}" @if($buku->penerbit_id == $penerbit->id)selected @endif>{{ $penerbit->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cetakan</label>
                                            <input name="cetakan" value="{{$buku->cetakan}}" type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Halaman</label>
                                            <input name="halaman" value="{{$buku->halaman}}" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Volume</label>
                                            <input name="volume" type="text" value="{{$buku->volume}}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input name="isbn" value="{{$buku->isbn}}" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Entry</label>
                                            <input type="date" value="{{$buku->tahun_entry}}" class="form-control" name="tahun_entry"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ilustrator</label>
                                            <input name="ilustrator" value="{{$buku->ilustrator}}" type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Edisi</label>
                                            <input name="edisi" value="{{$buku->edisi}}" type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Abstrak</label>
                                            <textarea type="text" style="height: 75px" name="abstrak" class="form-control">{{$buku->abstrak}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <img src="{{ asset('storage/'.$buku->gambar) }}">
                                            <input type="file" name="gambar" class="form-control-file"  >
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Update</button>
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