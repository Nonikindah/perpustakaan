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
            background: url("https://wallpaperbrowse.com/media/images/546779.jpg");
            margin: -40px;
            padding: 20px;
            color: #000000;;
        }

        table.table-bordered {
            border: 1px solid black;
            margin-top: 20px;
        }

        table.table-bordered > thead > tr > th {
            border: 1px solid black;
        }

        table.table-bordered > tbody > tr > td {
            border: 1px solid black;
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
                        <div class="col-xs-2">
                            <img src="img/icon/logo.png" width="65%">
                        </div>
                            <div class="row card-title" align="center"
                                 style="font-family:'Arial Rounded MT Bold'; font-size: 22px">
                                <div>KARTU TANDA ANGGOTA</div>
                                <div>PERPUSTAKAAN WAKATOBI</div>
                                <div>JL. Merdeka No. 8 Wakatobi, Sulawesi Tenggara, 93791</div>
                                <hr>
                                <br>
                                <div class="row" align="left">
                                    <div class="col-xs-3">
                                        @if($anggota->foto==NULL)
                                            <img src="img/icon/defaultuser.png" width="100%">
                                        @else
                                            <img src="{{ asset('storage/'.$anggota->foto) }}">
                                        @endif
                                    </div>
<br>
                                    <div class="col-xs-8">
                                        <p class="card-title">ID Anggota : {{$anggota->id_anggota}}</p>
                                        <p class="card-title">Nama Lengkap : {{$anggota->nama}}</p>
                                        <p class="card-title">Alamat Lengkap : {{$anggota->alamat_lengkap}},
                                            {{$anggota->getKelurahan(false)->nama}},
                                            {{$anggota->getKelurahan(false)->getKecamatan(false)->nama }},
                                            {{$anggota->getKelurahan(false)->getKecamatan(false)->getKabupaten(false)->nama }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</body>
</html>