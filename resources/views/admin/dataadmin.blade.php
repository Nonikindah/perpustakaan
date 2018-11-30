@extends('layouts.admin')

@section('content')
    <script>
        function myFunction() {
            if(!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="row form-inline">
                                <h4 class="col-md-6 card-title "><b>Data Admin</b></h4>
                                <div class="col-md-6">
                                    @if(Auth::user()->hak_akses == 1)
                                    <a href="{{route('admin.admin.register')}}"
                                       class="btn btn-primary btn-fill pull-right" style=" margin-left: 5px"><i
                                                class="fa fa-plus"></i> Tambah Admin</a>
                                    @endif
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <?php
                                        $no = 1;
                                ?>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                </thead>
                                <tbody>
                                @foreach($admin as $key=>$data)
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td> {{$data->getKelurahan(false)->nama}},
                                            {{ $data->getKelurahan(false)->getKecamatan(false)->nama }}
                                        </td>
                                        @if(Auth::user()->hak_akses == 1 && Auth::user()->id != $data->id )
                                        <td>
                                            <div class="btn-group">
                                                <a href="" onclick="hapus('{{ $data->id }}')"
                                                        class="btn btn-info btn-sm btn-fill btn-danger pull-right"><i class="fa fa-trash"></i></a>
                                                <form id="hapus" action="{{ route('admin.deleteadmin', ['id'=> $data->id])}}" method="post" >
                                                    {{csrf_field()}}
                                                    {{ method_field('DELETE') }}
                                                    <input type="hidden" name="id" id="id-delete">
                                                </form>
                                            </div>
                                        </td>
                                            @else
                                            <td></td>
                                        @endif

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

@endsection
