@extends('layouts.app')

@section('categories-menu')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Este boton solo se muestra version telefono -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="categoriesMenu">
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
        </div>
    </nav>
@stop

@section('categories-carousel')
    <!-- Este codigo es de prueba mostrando menu y carrousel -->
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Sidebar Categories -->
            <div class="col-md-3 category-menu">
                <h3>Categorías</h3>
                <ul class="list-group">
                    @foreach ($taxonomies as $taxonomy)
                        <li class="list-group-item">{{ $taxonomy->name }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- Carousel -->
            <div class="col-md-9 carousel-container">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@stop

<!-- Carrusel de productos como para ofertas -->
@section('carousel-new')
    <div class="container">
        <div id="productCarousel" class="carousel slide" data-bs-interval="false"> <!-- data-bs-ride="carousel" -->
            <div class="carousel-inner">
                @foreach($products->chunk(6) as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach($chunk as $product)
                        <div class="col-md-2">
                            <div class="card">
                                @include('product.index._product')
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <style>
        .custom-carousel-control {
        height: 50px; /* Ajusta la altura del botón según sea necesario */
        width: 50px; /* Ajusta el ancho del botón según sea necesario */
        background-color: rgba(0, 0, 0, 0.5); /* Color de fondo de los botones */
        top: 50%; /* Centra verticalmente los botones */
        transform: translateY(-50%); /* Centra verticalmente los botones */
        }
    </style>
@stop

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Todo</a></li>
    @if($taxon)
        @include('product._breadcrumbs')
    @endif
@stop

@section('content')
    <div class="container">
        @if($taxon && $taxon->hasImage())
            <div style="background-image: url('{{ $taxon->getImageUrl('header') }}'); height: 150px;"
                 class="mb-2">
                <h1 class="p-3 text-light" style="text-shadow: #333 0 0 11px">{{ $taxon->name }}</h1>
            </div>
        @endif
        <div class="row">
            <!-- Esto es el filtro -->
            <div class="col-md-3">
                @include('product.index._filters', ['properties' => $properties, 'filters' => $filters])
            </div>

            <div class="col-md-9">
                @if($taxon && $products->isEmpty() && $taxon->children->count())
                    <div class="card card-default mb-4">
                        <div class="card-header">{{ $taxon->name }} Subcategories</div>

                        <div class="card-body">
                            <div class="row">
                            @foreach($taxon->children as $child)
                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                    @include('product.index._category', ['taxon' => $child])
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                @if(!$products->isEmpty())
                <div class="card card-default">
                    <div class="card-header">{{ $taxon ?  'Productos en ' . $taxon->name : 'Todo los productos' }}</div>

                    <div class="card-body">
                        <div class="row">

                            @foreach($products as $product)
                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                    @include('product.index._product')
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('mas')
@endsection