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
            },location.reload.bind("{{ route('admin/anggota') }}"));
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
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. HP/Telp</label>
                                            <input type="text" class="form-control" placeholder="No. HP/Telp" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Identitas (KTP/SIM/KTM)</label>
                                            <input type="text" class="form-control"
                                                   placeholder="No. Identitas (KTP/SIM/KTM)" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat Lengkap"
                                                   value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" id="jenkel">
                                            <option>--Pilih Jenis Kelamin Anda--</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select class="form-control" id="pekerjaan">
                                            <option>--Pilih Pekerjaan Anda--</option>
                                            <option>PNS</option>
                                            <option>Pelajar/Mahasiswa</option>
                                            <option>Karyawan Swasta</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" onclick="konfirmasi()" href="{{route('admin/anggota')}}"
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
