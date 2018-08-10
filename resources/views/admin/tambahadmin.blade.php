@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Tambah Admin</b>
                                <hr>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.tambah')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Nama Lengkap</div>
                                            <input type="text" name="name" style="border-radius: 0px"
                                                   class="form-control" value="{{ old('name') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Email</div>
                                            <input type="text" class="form-control" style="border-radius: 0px"
                                                   name="email" value="{{ old('email') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Alamat Lengkap</div>
                                            <input type="text" class="form-control" style="border-radius: 0px"
                                                   name="alamat_lengkap" value="{{ old('alamat_lengkap') }}" required
                                                   autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Pilih Kelurahan</div>
                                            <select class=" form-control" style="border-radius: 0px"
                                                    name="kelurahan_id">
                                                @foreach(\App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get() as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}
                                                        , {{ $kelurahan->getKecamatan(false)->nama }}
                                                        , {{ $kelurahan->getKabupaten(false)->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Jenis Kelamin</div>
                                            <select class="form-control" style="border-radius: 0px" name="jenkel">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                                            <div class="card-title" style="margin-bottom: 5px">No. Telp/HP</div>
                                            <input type="text" style="border-radius: 0px" class="form-control"
                                                   name="telp" value="{{ old('telp') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Password</div>
                                            <input type="password" class="form-control" style="border-radius: 0px"
                                                   name="password" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">Ulangi Password</div>
                                            <input type="password" class="form-control" style="border-radius: 0px"
                                                   name="password_confirmation" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill" style="border-radius: 0px">
                                    Simpan
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
        $('.js-example-basic-single').select2();
    </script>
@endpush