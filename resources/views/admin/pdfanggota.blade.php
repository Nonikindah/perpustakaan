<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background: white;
            color: #000000;;
        }
        table.table-bordered{
            border:1px solid black;
            margin-top:20px;
        }
        table.table-bordered > thead > tr > th{
            border:1px solid black;
        }
        table.table-bordered > tbody > tr > td{
            border:1px solid black;
        }
    </style>
</head>
<body>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row form-inline">
                    <div class="row" style="margin-left: 10px">
                        <div class="col-md-12">
                            <div class="row" align="center"
                                 style="font-family:'Arial Rounded MT Bold'; font-size: 24px">
                                <p>Perpustakaan Daerah Wakatobi</p>
                                <p style="font-family:'Arial Rounded MT Bold'; font-size: 18px">JL. Merdeka, No. 8, Wakatobi, Wangi-wangi, Wanci, Wangi-Wangi Sel., Kabupaten
                                    Wakatobi, Sulawesi Tenggara 93791</p>
                                <p style="font-family:'Arial Rounded MT Bold'; font-size: 18px">No.Telp: (0404) 21228</p>
                                <p>Laporan Data Anggota</p>
                                <hr>
                                <br>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Alamat Lengkap</th>
                                    <th scope="col"> No. Identitas (KTP/SIM/KTM)</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">No. HP/Telp</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($anggota as $key=>$data)
                                    <tr>
                                        <th>{{$data->id_anggota}}</th>
                                        <td>{{$data->nama}}</td>
                                        <td> {{$data->getKelurahan(false)->nama}},
                                            {{ $data->getKelurahan(false)->getKecamatan(false)->nama }}
                                        </td>
                                        <td>{{$data->alamat_lengkap}}</td>
                                        <td>{{$data->identitas}}</td>
                                        <td>{{$data->jenkel}}</td>
                                        <td>{{$data->pekerjaan}}</td>
                                        <td>{{$data->telp}}</td>
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

</body>
</html>