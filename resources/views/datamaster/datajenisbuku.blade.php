@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group">
                        <div class="dropdown form-inline">
                            <a class="btn btn-primary btn-fill" style="border-radius: 0px"
                               href="{{route('klasifikasi')}}">Klasifikasi</a>
                            <a class="btn btn-danger btn-fill" style="border-radius: 0px"
                               href="{{route('penerbit')}}">Penerbit</a>
                            <a class="btn btn-warning btn-fill" style="border-radius: 0px"
                               href="{{route('atribut')}}">Atribut</a>
                            <a class="btn btn-fill" style="border-radius: 0px"
                               href="{{route('rak')}}">Rak</a>
                            <a class="btn btn-info btn-fill" style="border-radius: 0px"
                               href="{{route('subyek')}}">Subyek</a>
                            <a class="btn btn-success btn-fill" style="border-radius: 0px"
                               href="{{route('asalbuku')}}">Asal</a>
                            <a class="btn btn-fill" style="border-radius: 0px;background-color: #943bea;border-color: #943bea"
                               href="{{route('jenisbuku')}}">Jenis</a>

                        </div>
                    </div>
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-4 card-title"><b>Jenis Buku</b></h4>
                                <div class="col-md-8 ">
                                    <a href="{{route('datamaster.tambahjenisbuku')}}"
                                       class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i
                                                class="fa fa-plus"></i> Tambah Jenis</a>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                    @foreach($jenisbuku as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->keterangan}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('datamaster.editjenisbuku', ['id'=> encrypt($data->id)])}}"
                                                       class="btn btn-info btn-sm btn-fill pull-right"><i
                                                                class="fa fa-pencil"></i></a>
                                                </div>
                                                <form action="{{ route('datamaster.deletejenisbuku', ['id'=>$data->id])}}" method="post">
                                                    {{csrf_field()}}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit"
                                                            class="btn btn-info btn-sm btn-fill btn-danger pull-right">
                                                        <i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $jenisbuku->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection