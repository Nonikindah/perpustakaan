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
                                <img src="{{asset('img/book4.jpg')}}" class="img-responsive; -align-center"
                                     style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>Judul Buku</h2>
                            <p>Pengarang</p>
                            <a href="/" class="read-more">Sebelumnya</a>
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
                            <td>1123455</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>1 Juli 2018</td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td>2012</td>
                        </tr>
                        <tr>
                            <th>Eksemplar</th>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>Tidak Rusak</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection

