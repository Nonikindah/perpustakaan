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
                                <u>Laporan Histori Peminjaman Buku</u>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Buku</th>
                                    <th scope="col">Nama Anggota</th>
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                    <th scope="col">Tanggal Kembali</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pinjam as $key=>$data)
                                    <tr>
                                        <th>{{$data->id}}</th>
                                        <th>{{$data->getItem(false)->no_induk or ''}}</th>
                                        <td>{{$data->getAnggota(false)->nama}}</td>
                                        <td>{{$data->getItem(false)->getBuku(false)->judul or ''}}</td>
                                        <td>{{$data->tgl_pinjam}}</td>
                                        <td>{{$data->tgl_kembali}}</td>>
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