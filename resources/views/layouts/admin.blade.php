<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>SIPUT | Sistem Informasi Perpustakaan Daerah</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrapAdmin.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=2.0.1')}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

    <style>
        .fontsmall{
            font-size: 10px;
            font-weight: 100;
            text-transform: capitalize;
            color: #FFFFFF;

        }
    </style>
</head>

<body>
<div class="wrapper form-control">
    <div class="sidebar" data-image="{{asset('img/sidebar-52.jpg')}}">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{route('admin.dashboard')}}" class="simple-text">
                    SIPUT
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item {{Route::currentRouteName() === 'admin.dashboard' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('admin.dashboard')}}">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{strpos(Route::currentRouteName(), 'dmin.buku') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('admin.buku')}}">
                        <i class="nc-icon nc-notes"></i>
                        <p>Daftar Buku</p>
                    </a>
                </li>
                <li class="{{strpos(Route::currentRouteName(),'dmin.anggota') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('admin.anggota')}}">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>Data Anggota</p>
                    </a>
                </li>
                <li class="{{strpos(Route::currentRouteName(),'dmin.admin') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('admin.admin')}}">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Data Admin</p>
                    </a>
                </li>
                <li class="{{strpos(Route::currentRouteName(), 'dmin.pinjam') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('admin.pinjam')}}">
                        <i class="nc-icon nc-atom"></i>
                        <p>Histori Peminjaman</p>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link" href="{{route('admin.pinjam')}}">
                        <i class="nc-icon nc-bullet-list-67"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li class="">
                    <a class="nav nav-link" data-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Data Master</p>
                    </a>
                    <ul class="collapse" id="collapseExample">
                        <a class="fontsmall" href="{{route('datamaster.klasifikasi')}}">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Klasifikasi</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Penerbit</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Atribut</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Rak</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Subyek</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Asal Buku</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Jenis Buku</p>
                        </a>
                        <a class="fontsmall" href="">
                            {{--<i class="nc-icon nc-paper-2"></i>--}}
                            <p>Pekerjaan</p>
                        </a>
                    </ul>
                    {{--<a class="nav-link" href="{{route('admin.pinjam')}}">--}}
                    {{--<i class="nc-icon nc-paper-2"></i>--}}
                    {{--<p>Data Master</p>--}}
                    {{--</a>--}}
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#pablo"> Dashboard </a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        {{--<li class="nav-item">--}}
                        {{--<a href="#" class="nav-link" data-toggle="dropdown">--}}
                        {{--<i class="nc-icon nc-palette"></i>--}}
                        {{--<span class="d-lg-none">Dashboard</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown nav-item">--}}
                        {{--<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">--}}
                        {{--<i class="nc-icon nc-planet"></i>--}}
                        {{--<span class="notification">5</span>--}}
                        {{--<span class="d-lg-none">Notification</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                        {{--<a class="dropdown-item" href="#">Notification 1</a>--}}
                        {{--<a class="dropdown-item" href="#">Notification 2</a>--}}
                        {{--<a class="dropdown-item" href="#">Notification 3</a>--}}
                        {{--<a class="dropdown-item" href="#">Notification 4</a>--}}
                        {{--<a class="dropdown-item" href="#">Another notification</a>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                        {{--<a href="#" class="nav-link">--}}
                        {{--<i class="nc-icon nc-zoom-split"></i>--}}
                        {{--<span class="d-lg-block">&nbsp;Search</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="no-icon">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('admin.editadmin')}}">Edit Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <nav>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">SIPUT.com</a>
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>

<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('js/light-bootstrap-dashboard.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('js/demo.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        demo.initDashboardPageCharts();

        //demo.showNotification();

    });
</script>
@if(session()->has('success'))
    <script>
        swal({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
@endif
@stack('js')

<style>
    .form-control {
        background-color: #FFFFFF;
        border: 1px solid #E3E3E3;
        border-radius: 4px;
        color: #565656;
        padding: 8px 12px;
        height: 40px;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>
</body>

</html>