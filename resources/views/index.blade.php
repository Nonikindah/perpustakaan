<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPUT | Sistem Informasi Perpustakaan Daerah</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="loader"></div>
<div id="myDiv">
    <div class="header">
        <div class="bg-color">
            <header id="main-header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header" style="width:100%">
                            <a class="navbar-brand" href="#">SIPUT<span style="color: #67696c"> | </span><span class="logo-dec">Sistem Informasi Perpustakaan Daerah</span></a>
                            <a class="btn btn-download" href="#" style="float: right;">Registrasi</a>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="banner-info text-center wow fadeIn delay-05s">
                            <h2 class="bnr-sub-title">Cari</h2>
                            <h4 class="bnr-para">Masukkan kata kunci dari judul, pengarang atau subyek buku</h4><br>
                            <div class="input-group col-md-6 col-md-offset-3">
                                <input type="text" class="form-control" id="text" placeholder="Masukkan pencarian Anda">
                                <a class="btn btn-download" href="#">Cari</a>
                            </div>
                            <div class="overlay-detail">
                                <a href="#feature"><i class="fa fa-angle-down"></i></a>
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
                            <img style="width: 80px; height: 80px" src="{{asset('img/icon/search.png')}}">
                        </div>
                        <h3 class="pad-bt15">Pencarian</h3>
                        <p>Cari buku yang kamu inginkan dengan referensi yang tersedia di katalog perpustakaan kami.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img style="width: 80px; height: 80px"  src="{{asset('img/icon/id-card.png')}}">
                        </div>
                        <h3 class="pad-bt15">Kartu Anggota</h3>
                        <p>Daftarkan diri Anda untuk mendapatkan fasilitas yang ada di perpustakaan kami.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img style="width: 80px; height: 80px"  src="{{asset('img/icon/bussiness.png')}}">
                        </div>
                        <h3 class="pad-bt15">Peminjaman Buku</h3>
                        <p>Pastikan buku tersedia diperpustakaan sebelum Anda meminjamnya.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="item-img">
                            <img style="width: 80px; height: 80px" src="{{asset('img/icon/return.png')}}">
                        </div>
                        <h3 class="pad-bt15">Pengembalian Buku</h3>
                        <p>Ingatlah tanggal pengembalian buku agar terhindar dari denda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial" class="wow fadeInUp delay-05s">
        <div class="bg-testicolor">
            <div class="container section-padding">
                <div class="row">
                    <div class="testimonial-item" >
                        <ul class="bxslider">
                            <li>
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
                                    <p>Jangan bergabung dengan para pebakar buku. Jangan takut untuk pergi ke perpustakaan dan membaca buku apa pun.</p>
                                </blockquote>
                                <small>Dwight D. Eisenhower</small>
                            </li>
                            <li>
                                <blockquote>
                                    <p>Ada banyak cara kecil untuk meluaskan dunia anak-anak. Cinta buku adalah yang terbaik dari segalanya.</p>
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
                    <p class="sub-title pad-bt15">Tingkatkan Pengetahuanmu dengan Membaca Koleksi Terbaru di Perpustakaan Kami.</p>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/book4.jpg')}}" class="img-responsive; -align-center" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/book2.jpg')}}" class="img-responsive" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/book1.jpg')}}" class="img-responsive" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/book3.jpg')}}" class="img-responsive" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="row text-center">
                <p>Sistem Informasi Perpustakaan Daerah</p>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">SIPUT.com</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}js/jquery.easing.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>
</body>
</html>