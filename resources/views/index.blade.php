@extends('layouts.app')

@section('content')
    <div class="loader"></div>
    <div id="myDiv">
        {{--HEADER--}}
        <div class="header">
            <div class="bg-color">
                <header id="main-header">
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header" style="width:100%">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <a class="navbar-brand" href="#">SIPUT</a>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <a class="btn btn-download" href="{{route('daftar')}}" style="float: right;">Registrasi</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="banner-info text-center wow fadeIn delay-05s justify-content-center">
                                <h2 class="bnr-sub-title">Cari</h2>
                                <h4 class="bnr-para">Masukkan kata kunci dari judul, pengarang atau subyek buku</h4><br>
                                <br>
                                <form action="{{route('buku.carikatalog')}}" method="get" role="form" class="contactForm">
                                    <div class="col-md-6 padding-right-zero col-md-offset-3">
                                        <div class="form-group">
                                            <input type="text" name="cari" class="form-control" id="name"
                                                   placeholder="Masukkan pencarian Anda" data-rule="minlen:4"
                                                   data-msg=""/>
                                        </div>
                                        <button type="submit" style="background: #be9e21"
                                                class="btn btn-primary btn-submit"><span
                                                    style="color: white">CARI</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="feature" class="section-padding wow fadeIn delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img src="{{asset('img/icon/search1.png')}}">
                        </div>
                        <h3 class="pad-bt15">Pencarian</h3>
                        <p>Cari buku yang kamu inginkan dengan referensi yang tersedia di katalog perpustakaan kami.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img src="{{asset('img/icon/id-card1.png')}}">
                        </div>
                        <h3 class="pad-bt15">Kartu Anggota</h3>
                        <p>Daftarkan diri Anda untuk mendapatkan fasilitas yang ada di perpustakaan kami.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img src="{{asset('img/icon/bussiness1.png')}}">
                        </div>
                        <h3 class="pad-bt15">Peminjaman Buku</h3>
                        <p>Pastikan buku tersedia diperpustakaan sebelum Anda meminjamnya.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img src="{{asset('img/icon/return1.png')}}">
                        </div>
                        <h3 class="pad-bt15">Pengembalian Buku</h3>
                        <p>Ingatlah tanggal pengembalian buku agar terhindar dari denda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="quotes" class="wow fadeInUp delay-05s">
        <div class="bg-testicolor">
            <div class="container section-padding">
                <div class="row">
                    <div class="testimonial-item">
                        <ul class="bxslider">
                            <li class="center-block">
                                <blockquote>
                                    <p>Aku rela di penjara asalkan bersama buku, karena dengan buku aku bebas.</p>
                                </blockquote>
                                <small>Mohammad Hatta</small>
                            </li>
                            <li>
                                <blockquote>
                                    <p>Perpustakaan adalah tempat untuk memenuhi dahaga ilmu pengetahuan.</p>
                                </blockquote>
                                <small>Abdurrahman Wahid</small>
                            </li>
                            <li>
                                <blockquote>
                                    <p>Jangan bergabung dengan para pebakar buku. Jangan takut untuk pergi ke
                                        perpustakaan dan membaca buku apa pun.</p>
                                </blockquote>
                                <small>Dwight D. Eisenhower</small>
                            </li>
                            <li>
                                <blockquote>
                                    <p>Ada banyak cara kecil untuk meluaskan dunia anak-anak. Cinta buku adalah yang
                                        terbaik dari segalanya.</p>
                                </blockquote>
                                <small>Jacqueline Kennedy</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Koleksi Terbaru</h2>
                    <p class="sub-title pad-bt15">Tingkatkan Pengetahuanmu dengan Membaca Koleksi Terbaru di
                        Perpustakaan Kami.</p>
                    <hr class="bottom-line">
                </div>

                @foreach($katalog as $data)
                    <div class="col-md-3">
                        <div class="blog-sec">
                            <div class="blog-img">
                                <a href="">
                                    <img src="{{ asset('storage/'.$data->gambar) }}" class="img-responsive"
                                         style="width: 60%; height: 60%">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h2>{{$data->judul}}</h2>
                                <a href="{{route('buku.detail',['id'=> encrypt( $data->kode_buku)])}}"  class="read-more">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    </div>
@endsection
@push('js')
@endpush