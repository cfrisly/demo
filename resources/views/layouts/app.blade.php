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
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Tinyfis</a>
            <div class="collapse navbar-collapse" id="categoriesMenu">
                @yield('categories-menu')
            </div>
            <form class="navbar" action="">
                <input class="cuadro-texto" type="text" placeholder="Buscar...">
                <a class="search-button input-group-append" href="#"><i class="fa fa-search"></i></a>
            </form>

            @guest
                <a class="icon-menu" href="{{ route('login') }}"><i class="nav-link fa fa-user"></i></a>
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
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-user">
                                    {{ __('Salir') }}
                                </i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endguest

            <a class="icon-menu" href="{{ route('cart.show') }}"><i class="nav-link fa fa-shopping-cart"></i></a>
            <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categoriesMenu" aria-controls="categoriesMenu" aria-expanded="false" aria-label="Toggle navigation" href="">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </nav>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                @yield('breadcrumbs')
            </ol>
            @include('flash::message')
        </nav>

        @yield('content')
    </div>

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-6 col-md-6 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Dirección</h4>
                                {{-- <span>0 calle 0-44 Zona 1, Sumpango Sacatepequez, Guatemala</span> --}}
                                <span>Centro comercial Vista Bella, local 10 Segundo Nivel, Sumpango Sacatepequez</span>
                                <span>Horario de atención: Lunes a Viernes 10:00 - 18:00 Hrs Sabado: 10:00 - 14:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Contactanos</h4>
                                {{-- <span>54695664</span> --}}
                                <span>1800900</span>
                            </div>
                        </div>

                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Escribenos</h4>
                                <span>grupochiquitosa@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Escribenos</h4>
                                <span>grupochiquitosa@gmail.com</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a class="navbar-brand" href="{{ url('/') }}">Tinyfis</a>
                            </div>
                            <div class="footer-text">
                                <p>Tecnología a tu alcance.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Siguenos</span>
                                <a href=""></a>
                                <a href=""></a>
                                <a class="" href="https://wa.link/jmkqp0"><i class="fab fa-whatsapp"></i></a>
                                <a class="" href="#"><i class="fa fa-envelope"></i></a>
                                <a class="" href="https://t.me/TaChilerobot"><i class="fab fa-telegram-plane"></i></a>
                                <a class="" href=""><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Estado de tu pedido</h3>
                            </div>
                            <ul class="ul-footer">
                                <li><a href="">Preguntas frecuentes</a></li>
                                <li><a href="{{ url('/garanty') }}">Políticas de Garantía</a></li>
                                <li><a href="{{ url('/privacy') }}">Política de privacidad</a></li>
                                <li><a href="">Tiempo de envío</a></li>
                                <li><a href="">Política de cambio</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Suscribete</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Para recibir nuestras ofertas y nuevos productos Suscribete completando el siguiente formulario.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Escribe tu correo">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, GrupoChiquito SA Derechos recerbados</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <span>Tinyfis</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('https://kit.fontawesome.com/265f6e2015.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>