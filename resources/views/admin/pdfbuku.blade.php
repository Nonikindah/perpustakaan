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
                                <hr style="border-top: 1px solid #333333">
                                <p>Laporan Data Buku</p>
                            </div>
                            <table class="table table-bordered" style="border-color:black;">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Pengarang</th>
                                    <th scope="col">Klasifikasi</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Jumlah Buku</th>
                                    <th scope="col">ISBN</th>
                                    {{--<th scope="col">Asal Buku</th>--}}
                                    {{--<th scope="col">Subyek</th>--}}
                                    {{--<th scope="col">Jumlah Halaman</th>--}}
                                    {{--<th scope="col">Fiksi-Non</th>--}}
                                    <th scope="col">Tahun Terbit</th>
                                    {{--<th scope="col">Jenis</th>--}}
                                    {{--<th scope="col">Bahasa</th>--}}
                                    {{--<th scope="col">Harga Beli (Rp.)</th>--}}
                                    {{--<th scope="col">Cetakan</th>--}}
                                    {{--<th scope="col">Volume</th>--}}
                                    {{--<th scope="col">Kategori</th>--}}
                                    <th scope="col">Tahun Entry</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buku as $key=>$data)
                                    <tr>
                                        <td>{{$data->kode_buku}}</td>
                                        <td>{{$data->judul}}</td>
                                        <td>{{$data->pengarang1}}</td>
                                        <td>{{App\Kategori::find($data->kategori_id)->nama}}</td>
                                        <td>{{App\Penerbit::find($data->penerbit_id)->nama}}</td>
                                        <td>{{\App\ItemBuku::where('buku_id',$data->kode_buku)->get()->count()}}</td>
                                        <td>{{$data->isbn}}</td>
                                        {{--<td>{{App\AsalBuku::find($data->asalbuku_id)->nama}}</td>--}}
                                        {{--<td>{{App\Subyek::find($data->subyek_id)->nama}}</td>--}}
                                        {{--<td>{{$data->halaman}}</td>--}}
                                        {{--<td>{{App\JenisBuku::find($data->jenisbuku_id)->nama}}</td>--}}
                                        <td>{{$data->tahun_terbit}}</td>
                                        {{--<td>{{App\Atribut::find($data->atribut_id)->nama}}</td>--}}
                                        {{--<td>{{$data->bahasa}}</td>--}}
                                        {{--<td>{{$data->harga_beli}}</td>--}}
                                        {{--<td>{{$data->cetakan}}</td>--}}
                                        {{--<td>{{$data->volume}}</td>--}}
                                        {{--<td>{{App\Subyek::find($data->subyek_id)->nama}}</td>--}}
                                        <td>{{$data->tahun_entry}}</td>
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