<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>TinyFis - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"><!--
    include('layouts._favicons')-->
</head>
<body>

    <!-- Menu Social Icons -->
    <header class="header-social">
        <ul class="social">
            <li class="nav-item"><a class="" href="#"><i>Como comprar</i></a></li>
            <li class="nav-item"><a class="" href="https://wa.link/jmkqp0"><i class="fab fa-whatsapp"></i></a></li>
            <li class="nav-item"><a class="" href="#"><i class="fa fa-envelope"></i></a></li>
            <li class="nav-item"><a class="" href="https://t.me/TaChilerobot"><i class="fab fa-telegram-plane"></i></a></li>
            <li class="nav-item"><a class="" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="nav-item"><a class="" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="nav-item"><a class="" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="nav-item"><a class="" href="#"><i class="fab fa-tiktok"></i></a></li>
        </ul>
    </header>

    <!--<header class="social-icons">
        <ul class="social">
            <li class="nav-items"><a class="" href=""><i>Como comprar</i></a></li>
        </ul>
    </header>-->

    <!-- Menu dos 
    <div>
        <b class="screen-overlay"></b>

        <button data-trigger="#navbar_main" class="d-lg-none btn btn-warning" type="button">  Show navbar </button>

        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="offcanvas-header">
                <button class="btn btn-danger btn-close float-right"> &times Close</button>
                <h5 class="py-2 text-white">Main navbar</h5>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
            </ul>
        </nav>
    </div>-->

    <div class="navbar-logo">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    TinyFis
                </a>
                <a class="icons-register float-right" href="#"><i class="fas fa-heart"></i></a>
                @guest
                    <a class="icons'register float-right" href="{{ route('login') }}"><i class="fas fa-user"></i></a>
                @endguest
                <button class="navbar-toggler" type="button" data-trigger="#navbar_main">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar_main">
                    <!-- Left side of navbar -->
                    <ul class="navbar-nav mr-auto"><li></li></ul>

                    <!-- Right side of navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('product.index') }}">Todo </a>
                        </li>-->
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
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
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
            </div>
        </nav>
    </div>

    <div class="menu-category">
        <div class="container">
            @yield('categories-menu')
        </div>
    </div>

    <!-- Menu Logo 
    <div class="navbar-logo">
        <div class="container contenedor-menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/home/tachi.png') }}" width="130" alt=""></a>
                <div class="nav-search">
                    <form class="headSearch custom-file" id="form-search" action="">
                        <div class="input-group">
                            <input type="search" class="form-control" id="validationToolTipUsername" placeholder="Buscar..." aria-describedby="validationTooltipUsernamePrepend" required>
                            <button class="searchButton" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <a class="icons-register float-right" href="#"><i class="fas fa-heart"></i></a>
                @guest
                    <a class="icons-register float-right" href="{{ route('login') }}"><i class="fas fa-user"></i>
                        {{ __('Login')}}
                    </a>
                    @if (Route::has('register'))
                        <a class="icons-register float-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    @role('admin')
                        <a class="icons-register float-right" href="{{ config('konekt.app_shell.ui.url') }}">Admin</a>
                    @endrole
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <a class="icons-register float-right" href="{{ route('cart.show') }}"><i class="fas fa-shopping-cart"></i>
                    @if (Cart::isNotEmpty())
                        <span class="badge badge-pill badge-secondary">{{ Cart::itemCount() }}</span>
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-trigger="#main_nav"> 
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="navbar-collapse" id="main_nav">
                    <div class="offcanvas-header mt-3">
                        <button class="btn btn-outline-danger btn-close float-right"> &times Cerrar</button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img class="img-logo" src="{{ asset('images/home/tachi.png') }}" width="130" alt=""></a>
                    </div>
                    <div class="d-block d-sm-block d-md-none">
                        @yield('categories-menu')
                    </div>
                </div>
            </nav>
        </div>
    </div>-->

    <div id="app">

        <main class="py-4">

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
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('https://kit.fontawesome.com/265f6e2015.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!--
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')--><!--
    <script>
        $("[data-trigger]").on("click", function(){
            var trigger_id =  $(this).attr('data-trigger');
            $(trigger_id).toggleClass("show");
            $('body').toggleClass("offcanvas-active");
        });

        // close button 
        $(".btn-close").click(function(e){
            $(".navbar-collapse").removeClass("show");
            $("body").removeClass("offcanvas-active");
        });
    </script>-->

    <script>
        $("[data-trigger]").on("click", function(e){
            e.preventDefault();
            e.stopPropagation();
            var offcanvas_id =  $(this).attr('data-trigger');
            $(offcanvas_id).toggleClass("show");
            $('body').toggleClass("offcanvas-active");
            $(".screen-overlay").toggleClass("show");
        }); 

        $(".btn-close, .screen-overlay").click(function(e){
            $(".screen-overlay").removeClass("show");
            $(".mobile-offcanvas").removeClass("show");
            $("body").removeClass("offcanvas-active");
        }); 
    </script>
</body>
</html>