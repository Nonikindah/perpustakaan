<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
<body style="height: 100%">
<div class="loader"></div>
<div>
    <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header" style="width:100%">
                    <a class="navbar-brand" href="#">SIPUT<span style="color: #67696c"> | </span><span class="logo-dec">Sistem Informasi Perpustakaan Daerah</span></a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div>

@yield('content')
<footer id="footer">
    <div class="container">
        <div class="row text-center">
            <p>Sistem Informasi Perpustakaan Daerah</p>
            <div class="credits">
                Designed by <a href="#">SIPUT.com</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}js/jquery.easing.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>
</body>
</html>
