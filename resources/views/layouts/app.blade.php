<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPUT') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="height: 100%">
<div class="loader"></div>
<div id="myDiv" style="height: 100%">
    <div class="header"  style="height: 100%">
        <div class="bg-color">
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
    </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
