@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group">
                        <div class="dropdown form-inline">
                            <a class="btn btn-primary btn-fill" style="border-radius: 0px"
                               href="{{route('admin.buku.detailbuku',['id'=> encrypt( $buku->kode_buku)])}}">Detail</a>
                            <a class="btn btn-danger btn-fill" style="border-radius: 0px"
                               href="{{route('admin.buku.itembuku',['id'=> encrypt( $buku->kode_buku)])}}">Item Buku</a>
                            <a class="btn btn-warning btn-fill" style="border-radius: 0px" data-toggle="collapse"
                               href="#collapseExample" role="button" aria-expanded="false"
                               aria-controls="collapseExample"
                               href="{{route('admin.buku.tambahitem',['id'=> encrypt( $buku->kode_buku)])}}">Tambah
                                Item</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collapse" id="collapseExample">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST"
                                              action="{{route('admin.buku.item')}}">
                                            @csrf
                                            {{ method_field('put') }}
                                            <input type="hidden" name="buku_id" value="{{$buku->kode_buku}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-title" style="border-radius: 0px">Jumlah Item</div>
                                                    <input type="number" style="border-radius: 0px" name="jumlah_buku"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-fill"
                                                    style="border-radius: 0px">Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="col-md-12 card-title"><b>Item Buku</b>
                                <hr>
                            </h4>
                            <div class="row form-inline">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Nomer Induk</th>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Barcode</th>
                                        <th>Status</th>
                                        <th>Klasifikasi</th>
                                        <th>Aksi</th>
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
                                                <td>
                                                    @if($data->barcode == null)-
                                                    @else
                                                        {{--<img src="data:image/png;base64,{{DNS2D::getBarcodePNG(--}}
                                                        {{--$data->no_induk, 'EAN')}}" height="40" width="100">--}}
                                                </td>
                                                @endif
                                                <td>
                                                    @if($data->isAvailable() )
                                                        Tersedia
                                                    @else
                                                        Sedang Dipinjam
                                                    @endif
                                                </td>
                                                <td>{{$buku->getKategori(false)->first()->nama}}</td>
                                                <td>
                                                    <form action="{{ route('admin.hapusitem', ['id'=> $data->no_induk])}}"
                                                          method="post">
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
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection