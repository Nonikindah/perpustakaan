@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group">
                        <div class=" form-inline">
                            <a class="btn btn-primary btn-fill pull-right"
                               href="{{route('admin.view.peminjaman')}}" >Tambah Pinjam</a>
                        </div>
                    </div>

                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-12 card-title"><b>Peminjaman Buku</b>
                                    <hr>
                                </h4>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{route('admin.pinjam')}}" method="GET">
                                                <button type="submit"
                                                        class="btn btn-out btn-fill btn-success pull-right"
                                                        style="margin-right: 7px"><i class="fa fa-search"></i> Cari
                                                </button>
                                                <input type="text" name="keyword" placeholder="Cari berdasarkan Nama Peminjam atau Judul Buku"
                                                       class="form-control pull-right" style="width: 90%">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <?php $no= 1;?>
                                <th>No</th>
                                <th>Item Buku</th>
                                <th>Nama Anggota</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Harus Kembali</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                </thead>
                                <tbody>
                                @foreach($pinjam as $data)
                                    <tr>
                                        <td>  <?php echo $no++;?></td>
                                        <td>{{$data->getItem(false)->no_induk or ''}}</td>
                                        @if(empty($data->getAnggota(false)))
                                            <td>-</td>
                                        @else
                                            <td>{{$data->getAnggota(false)->nama}}</td>
                                        @endif
                                        <td>{{$data->getItem(false)->getBuku(false)->judul or ''}}</td>
                                        <td>{{$data->tgl_pinjam}}</td>
                                        <td>{{$data->tgl_haruskembali}}</td>
                                        <td>{{$data->tgl_kembali}}</td>
                                        @if($data->dipinjam == true)
                                            <td>Dipinjam</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{--button perpanjangan--}}
                                                    <a href="" onclick="perpanjangan('{{ encrypt($data->id) }}','{{$data->getItem(false)->getBuku(false)->judul}}')"  class="btn btn-info btn-sm btn-fill pull-right">Perpanjangan</a>
                                                    <form id="perpanjangan" action="{{route('admin.pinjam.perpanjangan', ['id' => encrypt($data->id)])}}" method="post">
                                                        {{csrf_field()}}
                                                        {{ method_field('get') }}
                                                        <input type="hidden" name="id" id="id-perpanjangan">
                                                    </form>

                                                    {{--button pengembalian--}}
                                                    <a href="" onclick="pengembalian('{{encrypt($data->id)}}','{{$data->getItem(false)->getBuku(false)->judul}}')" class="btn btn-info btn-sm btn-fill btn-danger pull-right">Pengembalian</a>
                                                    <form id="pengembalian" action="{{route('admin.pinjam.pengembalian', ['id' => encrypt($data->id)])}}" method="post">
                                                        {{csrf_field()}}
                                                        {{ method_field('get') }}
                                                        <input type="hidden" name="id" id="id-pengembalian">
                                                    </form>
                                                </div>
                                            </td>
                                        @else
                                            <td>Dikembalikan</td>
                                            <td>
                                                {{--<div class="btn-group">--}}
                                                    {{--<a href="{{route('admin.pinjam.historipinjaman',['id' => encrypt($data->id)])}}"--}}
                                                       {{--class="btn btn-warning btn-sm btn-fill pull-right">Lihat--}}
                                                        {{--Histori</a>--}}
                                                {{--</div>--}}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$pinjam->links(0)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    function perpanjangan(id, judul) {
        event.preventDefault(id)
        swal({
            title: "Apakah Anda yakin memperpanjang peminjaman buku " + judul + "?",
            icon: "info",
            buttons: true,
            confirm: true,
        }).then((choice) => {
            if (choice) {
                swal('Sedang memuat. . .', {
                    buttons: false,
                    closeOnClickOutside: false
                })
                $('#id-perpanjangan').val(id)
                $('#perpanjangan').submit()
            }
        })
    }

    function pengembalian(id, judul) {
        event.preventDefault(id)
        swal({
            title: "Apakah Anda yakin mengembalikan buku " + judul + "?",
            icon: "info",
            buttons: true,
            dangerMode: true,
        }).then((choice) => {
            if (choice) {
                swal('Sedang memuat. . .', {
                    buttons: false,
                    closeOnClickOutside: false
                })
                $('#id-pengembalian').val(id)
                $('#pengembalian').submit()
            }
        })
    }
</script>
