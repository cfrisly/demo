@extends('layouts.apprue')

@section('title', 'Inicio')

@section('categories-menu')
    <ul class="navbar-nav">
        @foreach($taxonomies as $taxonomy)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $taxonomy->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @include('product.index._category_level', ['taxons' => $taxonomy->rootLevelTaxons()])
                </div>
            </li>
        @endforeach
    </ul>
@stop

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Todos los productos</a></li>
    @if ($taxon)
        @include('product._breadcrumbs')
    @endif
@stop

@section('content')

    <div class="slider">
        <div id="carouselMain" class="container carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
                <li data-target="#carouselMain" data-slide-to="1"></li>
                <li data-target="#carouselMain" data-slide-to="2"></li>
            </ol>
    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid img-thumbnail" src="images/home/Audifono4Pro.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid img-thumbnail" src="images/home/Audifono4Pro(1).png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid img-thumbnail" src="images/home/Audifono4Pro.png" alt="Third slide">
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <span><i class="fas fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <span><i class="fas fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="offers">
        <div class="section-title-category">
            <button type="button" class="btn btn-warning section-title"></button>
        </div>
    </div>

    <div class="offers">
        <div class="section-title-category">
            <button type="button" class="btn btn-warning section-title">
                <span class="title">Oferta</span>
            </button>
        </div>
        
        <div class="row">
            <div class="card col-sm-8">
                <img class="card-img-top" src="images/home/dose-media.jpg" alt="oferta del día">
                <div class="card-body">
                    <h5 class="card-title">Photograpy</h5>
                    <p class="card-text">TExto en un minuto</p>
                    <p class="card-text"><small class="text-muted">ultima actualizacion 3 minutos antes</small></p>
                </div> 
            </div>
            <div class="card col-sm-4">
                <div class="card-body">
                    <h5 class="card-title text-center">Mini Camara</h5>
                    <p class="text-center">Puedes utilizarla en cualquier lugar y en cualquier momento pasando desapercibida</p>
                    <div class="card-price">
                        {{-- <div class="">
                            <h2 class="card-body">Q 149</h2>
                            <div><button type="button" class="btn btn-success">Ver</button></div>
                        </div> --}}
                        <div class="row">
                            <h2 class="card-body">Q 149.99</h2>
                            <div><button type="button" class="btn btn-success">Ver</button></div>
                        </div>
                        <div class="card-discount">
                            <div>
                                <div class="one">Price</div>
                                <div class="two">discount</div>
                                <div class="three">Home</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection