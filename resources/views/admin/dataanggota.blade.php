@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-12 card-title"><b>Data Anggota</b><hr></h4>

                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-10" style="padding-right: 0">
                                            <form action="{{route('admin.anggota')}}" method="GET">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-out btn-fill btn-success pull-right" style="margin-right: 7px"><i class="fa fa-search"></i> Cari</button>
                                                <input type="text" name="keyword" placeholder="Cari berdasarkan Nama, No.Identitas atau Alamat" class="form-control" style="width: 90%">
                                            </form>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 0">
                                            <a href="{{route('admin.anggota.daftaranggota')}}" class="btn btn-primary btn-fill pull-right" ><i class="fa fa-plus"></i> Tambah Anggota</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class=" table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <?php
                                            $no=1;
                                    ?>
                                    <th><b>No.</b></th>
                                    <th><b>Identitas (KTP/SIM/KTM)</b></th>
                                    <th><b>Nama Lengkap</b></th>
                                    <th><b>Alamat Lengkap</b></th>
                                    <th><b>No. HP/Telp</b></th>
                                    </thead>
                                    <tbody>
                                    @foreach($anggota as $key=>$data)
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td>{{$data->identitas}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->alamat_lengkap}},
                                                {{$data->getKelurahan(false)->nama}},
                                                {{$data->getKelurahan(false)->getKecamatan(false)->nama }},
                                                {{$data->getKelurahan(false)->getKecamatan(false)->getKabupaten(false)->nama }}
                                            </td>

                                            <td width="15%">{{$data->telp}}</td>

                                            <td>
                                                <div class="nav-link btn-group dropdown nav-item">
                                                    <a href="#" class="nav-link btn btn-info btn-sm btn-fill pull-right" data-toggle="dropdown"><i class="fa fa-bars"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{route('admin.detailanggota',['id'=> encrypt( $data->id_anggota)])}}">Detail</a>
                                                        <a class="dropdown-item" href="{{route('admin.anggota.editanggota',['id'=> encrypt($data->id_anggota)])}}">Edit</a>
                                                        <a href="" class="dropdown-item" onclick="hapus('{{ $data->id_anggota }}')">Hapus</a>
                                                        <form id="hapus" action="{{ route('admin.deleteanggota',['id' => $data->id_anggota ])}}" method="post">
                                                            {{csrf_field()}}
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="id" id="id-delete">
                                                        </form>
                                                        <a class="dropdown-item" href="{{route('admin.cetakkartu', ['id' =>encrypt($data->id_anggota)])}}">Cetak KTA</a>
                                                    </ul>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $anggota->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection