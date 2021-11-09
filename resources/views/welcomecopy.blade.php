<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TinyFis - Home</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
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

        <!-- Slider -->
        <section>
            <div id="carouselExampleIndicators" class="container carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid img-thumbnail" src="images/home/20201215_184845_0000.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid img-thumbnail" src="images/home/anio.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid img-thumbnail" src="images/home/anio2.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                    <span><i class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- Offers-->
        <section class="offers">
            <div class="container">
                <div class="section-title-category">
                    <button type="button" class="btn btn-warning">
                        <h5 class="section-title">
                            <span class="title">Mira hoy</span>
                        </h5>
                    </button>
                    <div class="line"></div>
                </div> 
            </div>

            <div class="container card-group">
                <div class="card col-sm-8">
                    <img class="card-img-top" src="images/dose-media.jpg" alt="oferta del día">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>                            
                        <p class="card-text">Texto en un minuto</p>
                        <p class="card-text"><small class="text-muted">ultima actualizacion 3 minutos antes</small></p>
                    </div>
                </div>
                <div class="card col-sm-4">
                    <div class="card-body">
                        <h5 class="card-title text-center">Mini Cámara</h5>
                        <p class="text-center">Puedes utilizarla en cualquier lugar y en cualuier momento pasando desapercibida</p>
                        <div class="card-price ">
                            <div class="row">
                                <h2 class="card-body">Q 149.99</h2>
                                <div><button type="button" class="btn btn-success btn-sm">Ver</button></div>
                            </div>
                        </div>
                        <div class="card-discount">
                            <div class="row">
                                <div class="one">price</div>
                                <div class="two">discount</div>
                                <div class="three">Home</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section> <!-- Section categories -->
            <div class="container">
                <div class="section-title-category">
                    <button type="button" class="btn btn-warning">
                        <h5 class="section-title">
                            <span class="title">Categorías Destacadas</span>
                        </h5>
                    </button>
                </div>
                <div class="line"></div>

                <div class="category-dest">
                    <div class="row">
                    <!--Product category-->
                        <div class="col-6 col-md-3 col-xl-3">
                            <a href="">
                                <div class="card bg-dark text-white">
                                    <img class="card-img" src="images/home/iphone.jpg" alt="telefonos inteligentes">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title">Smartphons</h5>
                                        <p class="card-text">Telefonos inteligentes</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-3 col-xl-3">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="images/home/tablets.jpg" alt="tabletas inteligentes">
                                <div class="card-img-overlay text-center">
                                    <h5 class="card-title">Tablets</h5>
                                    <p class="card-text">Tabletas inteligentes</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-xl-3">
                            <a href="shop/c/tecnologia/1">
                               <div class="card bg-dark text-white">
                                    <img class="card-img" src="images/home/smartwatch.jpg" alt="reloj y bandas inteligentes">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title">Smartwatchs</h5>
                                        <p class="card-text">Relojes y bandas inteligentes</p>
                                    </div>
                                </div> 
                            </a>
                        </div>

                        <div class="col-6 col-md-3 col-xl-3">
                            <a href="">
                                <div class="card bg-dark text-white">
                                    <img class="card-img" src="images/home/headphones.jpg" alt="Audifonos inalambricos e inalambricos">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title">Headphones</h5>
                                        <p class="card-text">Audifonos alambricos e inalambricos</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section-title-category">
                    <button type="button" class="btn btn-warning">
                        <h5 class="section-title">
                            <span class="title">Recien Ingresados</span>
                        </h5>
                    </button>
                </div>
                <div class="line"></div>

                <div class="row product-dest">
                    <div class=""></div>
                </div>
            </div>
        </section>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Vanilo Demo
                </div>

                <div class="links">
                    <a href="{{ config('konekt.app_shell.ui.url') }}">Admin</a>
                    <a href="{{ route('product.index') }}">Shop Frontend</a>
                </div>
            </div>
        </div>
        <script src="{{ asset('https://kit.fontawesome.com/265f6e2015.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
