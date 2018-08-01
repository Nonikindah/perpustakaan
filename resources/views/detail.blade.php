@extends('layouts.app')

@section('content')
    <section id="blog" class="section-padding wow">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Detail Pencarian</h2>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-4">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{ asset('storage/'.$buku->gambar) }}" class="img-responsive; -align-center"
                                     style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>{{$buku->judul}}</h2>
                            <p>
                                @if($buku->pengarang2 != null)
                                    {{$buku->pengarang1}} dan {{$buku->pengarang2}}
                                @elseif($buku->pengarang3 != null)
                                    {{$buku->pengarang1}},{{$buku->pengarang2}},
                                    dan {{$buku->pengarang3}}
                                @else
                                    {{$buku->pengarang1}}
                                @endif
                            </p>
                            <a href="{{route('index')}}" class="read-more">Sebelumnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-info">
                        <h2>Ketersediaan</h2>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>0979744</td>
                            <td>0979744</td>
                            <td>My Library</td>
                            <td>Tersedia</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="blog-info">
                        <h2>Informasi Detail</h2>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>No. Buku</th>
                            <td>{{$buku->kode_buku}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>{{$buku->tahun_entry}}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>{{App\Penerbit::find($buku->penerbit_id)->nama}}</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td>{{$buku->tahun_terbit}}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Buku</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Abstrak</th>
                            <td>{{$buku->abstrak}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection

