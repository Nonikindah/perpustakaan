@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Tambah Anggota</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.tambahanggota')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Nama Lengkap</div>
                                            <input id="name" type="text" style="border-radius: 0px" name="nama" class="form-control" value="{{ old('nama') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">No.Identitas (KTP/SIM/KTM)</div>
                                            <input id="identitas" style="border-radius: 0px"  type="text" name="identitas" class="form-control" value="{{ old('identitas') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">Pilih Kelurahan</div>
                                                <select class="form-control " style="border-radius: 0px"  name="kelurahan_id">
                                                    @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                                        <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}, {{ $kelurahan->getKecamatan(false)->nama }}, {{ $kelurahan->getKabupaten(false)->nama }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Alamat Lengkap</div>
                                            <input id="alamat_lengkap" style="border-radius: 0px"  type="text" name="alamat_lengkap" class="form-control"
                                                   value="{{ old('alamat_lengkap') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Jenis Kelamin</div>
                                            <select class="form-control" style="border-radius: 0px"  name="jenkel" id="jenkel">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Pekerjaan</div>
                                            <select class="form-control" style="border-radius: 0px"  name="pekerjaan" id="pekerjaan">
                                                <option value="PNS">PNS</option>
                                                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">No. Telp/HP</div>
                                            <input type="text" style="border-radius: 0px"  name="telp" class="form-control" value="{{ old('telp') }}"required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">File Foto</div>
                                            <input type="file" style="border-radius: 0px"  name="foto" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}" required autofocus>
                                <button type="submit" class="btn btn-primary btn-fill" style="border-radius: 0px">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@push('js')--}}
{{--<script>--}}
    {{--$('.searchSel').select2();--}}
    {{--//$('.js-example-basic-single').select2();--}}
{{--</script>--}}
{{--@endpush--}}
