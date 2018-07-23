@extends('layouts.app')

@section('content')
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Koleksi</h2>
                    <p class="sub-title pad-bt15">Tingkatkan Pengetahuanmu dengan Membaca Koleksi di Perpustakaan Kami.</p>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/icon/book-icon.png')}}" class="img-responsive; -align-center" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/icon/book-icon.png')}}" class="img-responsive" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/icon/book-icon.png')}}" class="img-responsive" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('img/icon/book-icon.png')}}" class="img-responsive" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>This is Lorem ipsum heading.</h2>
                            <a href="" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="/">Sebelumnya</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="{{route('detail')}}">Selanjutnya</a></li>
            </ul>
        </nav>
        </div>
    </section>
@endsection