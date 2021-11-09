<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/show.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/show.css?v='.time()) }}">

</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="container-fluid">
            <ul>
                <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>¿Como comprar?</li>
                <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Pedidos</li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- //header -->
    <!-- header-bot -->
    <div class="header-bot">
        <div class="container-fluid">
            <div class="col-md-3 header-left">
                <h1><a href="#"><img src="images/logo3.jpg" alt=""></a></h1>
            </div>
            <div class="col-md-6 header-middle">
                <form class="search-form" action="">
                    <div class="search">
                        <input type="search" value="Buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required>
                    </div>
                    <div class="section_room">
                        <select name="" id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">Categorías</option>
                            <option value="null">Electronics</option>
                            <option value="Ax">Kids</option>
                        </select>
                    </div>
                    <div class="sear-sub">
                        <input type="submit" value=" ">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 header-right footer-bottom">
                <ul>
                    <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal14"><span>Login</span></a></li>
                    <li><a href="#" class="fb">Cart</a></li>
                    <li><a href="#" class="">Like</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Header-bot -->
    <!-- banner -->
    <div class="ban-top">
        <div class="container">
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-exammple-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav link, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                                <li class="active menu__item menu_item--current"><a class="menu__link" href="#">Home <span class="sr-only">(current)</span></a></li>
                                <li class="dropdown menu__item">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-6 multi-gd-img1 multi-gd-text">
                                                <a href="mens.html"><img src="images/woo1.jpg" alt=""></a>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="mens.html">Clothing</a></li>
                                                    <li><a href="mens.html">Wallets</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="mens.html">Jeweller</a></li>
                                                    <li><a href="mens.html">Sunglasses</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown menu__item">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="womens.html">Clothing</a></li>
                                                    <li><a href="womens.html">Wallets</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="womens.html">Jeweller</a></li>
                                                    <li><a href="womens.html">Sunglasses</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 multi-gd-img multi-gd-text">
                                                <a href="womens.html"><img src="images/woo.jpg" alt=""></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="menu__item"><a class="menu__link" href="electronics.html"></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="top_nav_right">
                <div class="cart box-1">
                    <a href="checkout.html">
                        <h3><div class="total">
                                <i class="">carrito</i>
                            </div>
                        </h3>
                    </a>
                    <p><a href="" class="simpleCart_empty">Empty cart</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Banner-top -->
    <!-- Banner -->
    <div class="baner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Scripts --->
    <script src="{{ asset('https://kit.fontawesome.com/265f6e2015.js') }}"></script>
</body>
</html>