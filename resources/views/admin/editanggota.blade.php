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
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-8 card-title">Edit Data Anggota</h4>
                                <div class="col-md-4 pl-1 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control pull-right" disabled="" placeholder="ID Anggota disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.updateanggota')}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('put') }}
                                <input type="hidden" value="{{$anggota->id_anggota}}" name="id_anggota">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$anggota->nama}}">
                                            @if ($errors->has('nama'))
                                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('telp') ? 'has-error' : '' }}">
                                            <label>No. Telp/HP</label>
                                            <input type="text" class="form-control" placeholder="No. Telp/HP" name="telp" value="{{$anggota->telp}}">
                                            @if ($errors->has('telp'))
                                                <span class="help-block">{{ $errors->first('telp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('identitas') ? 'has-error' : '' }}">
                                            <label>No. Identitas (KTP/SIM/KTM)</label>
                                            <input type="text" class="form-control" placeholder="No. Identitas" name="identitas" value="{{$anggota->identitas}}">
                                            @if ($errors->has('identitas'))
                                                <span class="help-block">{{ $errors->first('identitas') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                            <label for="alamat">Alamat</label>
                                            <select class="form-control searchSel" name="kelurahan_id" >
                                                @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}"  @if($anggota->kelurahan_id==$kelurahan->id)selected @endif>{{ $kelurahan->nama }}, {{ $kelurahan->getKecamatan(false)->nama }}, {{ $kelurahan->getKabupaten(false)->nama }} @if($anggota->kelurahan_id=="Laki-laki")selected @endif</option>
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
                                            <label >Alamat</label>
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
                                            <label>Jenis Kelamin</label>
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
                                            <label>Pekerjaan</label>
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