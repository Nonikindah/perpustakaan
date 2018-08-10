@extends('layouts.admin')

@section('content')
    <script>
        function editanggota(){
            swal({
                title:"Berhasil!",
                text: "Anda memperbarui data Anggota",
                icon: "success"
            });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-12 card-title"><b>Edit Data Anggota</b><hr></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('admin.updateanggota')}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">ID. Anggota</div>
                                            <input type="text" class="form-control pull-right" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$anggota->id_anggota}}" name="id_anggota">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">Nama Lengkap</div>
                                            <input type="text" class="form-control" name="nama" value="{{$anggota->nama}}">
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('telp') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">No. Telp/HP</div>
                                            <input type="text" class="form-control"  name="telp" value="{{$anggota->telp}}">
                                            @if ($errors->has('telp'))
                                                <span class="help-block">{{ $errors->first('telp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('identitas') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">No. Identitas (KTP/SIM/KTM)</div>
                                            <input type="text" class="form-control" name="identitas" value="{{$anggota->identitas}}">
                                            @if ($errors->has('identitas'))
                                                <span class="help-block">{{ $errors->first('identitas') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">Pilih Kelurahan</div>
                                            <select class="form-control" name="kelurahan_id" >
                                                @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}"  @if($anggota->kelurahan_id==$kelurahan->id)selected @endif>{{ $kelurahan->nama }}, {{ $kelurahan->getKecamatan(false)->nama }}, {{ $kelurahan->getKabupaten(false)->nama }} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('alamat'))
                                                <span class="help-block">{{ $errors->first('alamat') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat_lengkap') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">Alamat Lengkap</div>
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat_lengkap" value="{{$anggota->alamat_lengkap}}">
                                            @if ($errors->has('alamat_lengkap'))
                                                <span class="help-block">{{ $errors->first('alamat_lengkap') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('jenkel') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">Jenis Kelamin</div>
                                            <select class="form-control" name="jenkel">
                                                <option value="Laki-laki" @if($anggota->jenkel=="Laki-laki")selected @endif>Laki-laki</option>
                                                <option value="Perempuan" @if($anggota->jenkel=="Perempuan")selected @endif>Perempuan</option>
                                            </select>
                                            @if ($errors->has('jenkel'))
                                                <span class="help-block">{{ $errors->first('jenkel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">Pekerjaan</div>
                                            <select class="form-control" name="pekerjaan" id="pekerjaan" value="{{$anggota->pekerjaan}}">
                                                <option value="PNS" @if($anggota->pekerjaan=="PNS")selected @endif>PNS</option>
                                                <option value="Pelajar/Mahasiswa" @if($anggota->pekerjaan=="Pelajar/Mahasiswa")selected @endif>Pelajar/Mahasiswa</option>
                                                <option value="Karyawan Swasta" @if($anggota->pekerjaan=="Karyawan Swasta")selected @endif>Karyawan Swasta</option>
                                            </select>
                                            @if ($errors->has('pekerjaan'))
                                                <span class="help-block">{{ $errors->first('pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">File Foto</div>
                                            @if($anggota->gambar != NULL)
                                            <img src="{{ asset('storage/'.$anggota->foto) }}">
                                            @else
                                                <img src="{{asset('img/icon/defaultuser.png')}}" width="10%" height="10%">
                                            <input type="file" name="gambar" class="form-control-file"  >
                                          @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right" style="border-radius: 0px">Update</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection