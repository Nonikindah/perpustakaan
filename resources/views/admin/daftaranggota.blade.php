@extends('layouts.admin')

@section('content')
    <script>
        function konfirmasi() {
            swal({
                title: "Berhasil!",
                text: "Anda menambahkan Anggota.",
                type: "success",
                confirmButtonText: "OK",
                closeOnConfirm: false
            }, function(){
                window.location.href = '{{route('admin.anggota')}}';
            });
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Anggota</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.anggota')}}">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input id="name" type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No. Identitas (KTP/SIM/KTM)</label>
                                            <input id="identitas" type="text" name="identitas" class="form-control"
                                                   placeholder="No. Identitas (KTP/SIM/KTM)" value="{{ old('identitas') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                            <label for="alamat">Alamat</label>
                                                <select class="form-control searchSel" name="kelurahan_id">
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
                                            <label>Alamat Lengkap</label>
                                            <input id="alamat_lengkap" type="text" name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap"
                                                   value="{{ old('alamat_lengkap') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenkel" id="jenkel">
                                            <option>--Pilih Jenis Kelamin Anda--</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select class="form-control" name="pekerjaan" id="pekerjaan">
                                            <option>--Pilih Pekerjaan Anda--</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                                            <label>No. HP/Telp</label>
                                            <input id="telepon" type="text" name="telp" class="form-control" placeholder="No. HP/Telp" value="{{ old('telepon') }}"required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" onclick="konfirmasi()" href="{{route('admin/anggota')}}"
                                        class="btn btn-primary btn-fill pull-right">Simpan
                                </button>
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
    $('.searchSel').select2();
</script>
@endpush
