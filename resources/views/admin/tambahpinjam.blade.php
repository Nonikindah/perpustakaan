@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Tambah Peminjaman</b><hr></h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST"
                                  action="{{route('admin.tambah.peminjaman')}}">
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">No. Anggota
                                            </div>
                                            <input type="text" class="form-control" name="anggota_id"
                                                   value="{{ old('anggota_id') }}"
                                                   style="border-radius: 0px" required
                                                   autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-title" style="margin-bottom: 5px">No Induk Buku
                                                1
                                            </div>
                                            <input type="text" class="form-control" name="item_id"
                                                   value="{{old('item_id')}}" style="border-radius: 0px"
                                                   required autofocus>

                                            @if($errors->has('item_id'))
                                                <span class="alert-danger"></span>
                                                {{$errors->first('item_id')}}
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}" required
                                       autofocus>
                                <button type="submit" class="btn btn-primary btn-fill"
                                        style="border-radius: 0px">Tambah
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
