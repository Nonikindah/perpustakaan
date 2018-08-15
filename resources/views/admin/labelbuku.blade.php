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
                        <div class="row card-title"
                             style="font-family:'Arial Rounded MT Bold'; font-size: 22px">
                            <div>LABEL BUKU</div>
                            <div>Judul : {{$buku->judul}}</div>

                            <div class="row">
                                <div class="col-xs-2">
                                    @foreach($buku->getItemBuku(false) as $data)
                                    <table class="table table-bordered text-center">
                                        <tbody style="font-family: 'Calibri'; font-size: 10px">
                                        <tr>
                                            <th width="150px" style="text-align: center; vertical-align: middle;">Kantor
                                                Perpustakaan dan Arsip Kabupaten Wakatobi
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">BARCODE</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">{{$data->no_induk}}</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    @endforeach
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