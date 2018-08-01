@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                {{--<h4 class="col-md-4 card-title">Detail Koleksi Buku</h4>--}}
                                <div class="col-md-8 ">
                                    {{--<a href="{{route('admin.buku.tambahitem',['id'=> encrypt( $buku->kode_buku)])}}"--}}
                                       {{--class="btn btn-primary btn-fill pull-right" style="margin-left: 5px"><i--}}
                                                {{--class="fa fa-plus"></i> Tambah Item</a>--}}
                                    <nav class="nav nav-pills nav-justified">
                                        <a class="nav-link " href="#">Detail</a>
                                        <a class="nav-link active" href="#">Item Buku</a>
                                        <a class="nav-link" href="{{route('admin.buku.tambahitem',['id'=> encrypt( $buku->kode_buku)])}}"></i>Tambah Item</a>
                                    </nav>
                                </div>
                                <div class="card-body table-full-width table-responsive">

                                    <br>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Nomer Induk</th>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Barcode</th>
                                        <th>Status</th>
                                        <th>Klasifikasi</th>
                                        </thead>
                                        <tbody>
                                        @foreach($buku->getItemBuku(false) as $data)
                                            <tr>
                                                <td>{{$data->no_induk}}</td>
                                                <td>{{$buku->judul}}</td>
                                                <td>
                                                    @if($buku->pengarang2 != null)
                                                        {{$buku->pengarang1}} dan {{$buku->pengarang2}}
                                                    @elseif($buku->pengarang3 != null)
                                                        {{$buku->pengarang1}},{{$buku->pengarang2}},
                                                        dan {{$buku->pengarang3}}
                                                    @else
                                                        {{$buku->pengarang1}}
                                                    @endif
                                                </td>
                                                <td></td>
                                                <td>
                                                    @if($data->isAvailable() )
                                                        Tersedia
                                                    @else
                                                        Sedang Dipinjam
                                                    @endif
                                                </td>
                                                <td>{{$buku->getKategori(false)->first()->nama}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" href="#"
                                                                class="btn btn-info btn-sm btn-fill btn-danger pull-right">
                                                            <i class="fa fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection