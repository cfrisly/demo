<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Tienda en linea de Guatemala, donde compras rapido, facil y seguro.  Entrega a todo el pais de 1 a 6 días, aprobecha nuestras ofertas de locura ahora comprar en linea es tan facil atravez de Tinyfis tu mejor opcion">
    <!--<meta name="robots" content="">-->
    <meta property="og:title" content="TinyFis - A un clic de tu hogar - Guatemala - www.tinyfis.gt">
    <!--<meta property="og:title" content="Kemik - Tu tienda en línea - Guatemala - www.kemik.com">-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TinyFis - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('css/menu.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
    <!-- Menu Social Icons --><!--
    <div class="social-icons">
        <div class="container-fluid full-image">
        </div>
        <div class="container-fluid nav-color">
            <div class="row social-bar">
                <ul class="social-icons-list">
                    <li class="nav-item"><a class="" href="#"><i>Como comprar</i></a></li>
                    <li><a class="" href="https://wa.link/jmkqp0"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a class="" href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="" href="https://t.me/TaChilerobot"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a class="" href=""><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </div>-->

    <div class="social-networks">
        <div class="cont">
            <div class="social-bar">
                <ul class="icons">
                    <li><a href="#"><i>Como comprar</i></a></li>
                    <li><a class="" href="https://wa.link/jmkqp0"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a class="" href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="" href="https://t.me/TaChilerobot"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a class="" href=""><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="logo-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navegation">
            <a class="navbar-brand" href="{{ url("/") }}">Tinyfis</a>

           <!--<form id="content-search" action="">
                <input type="text" name="input" class="input" id="search-input">
                <button class="search" type="reset" id="search-btn"></button>
            </form>-->

            <div class="search-box">
                <input type="text" placeholder=" ">
                <span></span>
            </div>

            <!--<a class="navbar-nav" href="#"><i class="fa fa-heart"></i></a>--> 
            <a class="navbar-nav" href="{{ route('cart.show') }}"><i class="fa fa-shopping-cart"></i></a>

            @guest
                <a class="navbar-nav" href="{{ route('login') }}"><i class="fa fa-user"></i></a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else 
                @role('admin')
                    <a href="{{ config('konekt.app_shell.ui.url') }}">Admin</a>
                @endrole
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-user"></i>{{  __(' Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endguest

            <a type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation" href=""><i class="fas fa-bars"></i></a>

            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->

            <div class="collapse navbar-collapse" id="navbar_main">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link icons-register" href="#"><i class="fa fa-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icons-register" href="{{ route('cart.show') }}"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>                                @endif
                        </li>
                    @else
                        @role('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ config('konekt.app_shell.ui.url') }}">Admin</a>
                        </li>
                        @endrole
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-user"></i>{{ __(' Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>

    <div>
        <div class="container">
            @yield('categories-menu')
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    @yield('breadcrumbs')
                </ol>
            </nav>
            @include('flash::message')
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('https://kit.fontawesome.com/265f6e2015.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>