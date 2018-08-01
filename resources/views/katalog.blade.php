@extends('layouts.app')

@section('content')
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Koleksi</h2>
                    <p class="sub-title pad-bt15">Tingkatkan Pengetahuanmu dengan Membaca Koleksi di Perpustakaan
                        Kami.</p>
                    <hr class="bottom-line">
                </div>
                @foreach($buku as $key=> $data)
                <div class="col-md-3">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{asset('storage/'.$data->gambar)}}" class="img-responsive; -align-center" style="width: 50%; height: 50%">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>{{$data->judul}}</h2>
                            <a href="{{route('buku.detail', ['id'=>encrypt($data->kode_buku)])}}" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection