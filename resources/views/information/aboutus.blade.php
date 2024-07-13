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

@section('content')
    <div class="container">
        <h1>Tenemos todo lo que necesitas</h1>
        <p>Tinyfis es una tienda en linea que te permite obtener los productos que necesites
            de la forma más segura, todo desde la comodidad de tu hogar contamos con entregas
            en todo el pais. <br>

            Ademas contamos con distintos proveedores los cuales muestran sus productos en tu tienda
            en linea garantizando proveedores certificados por nosotros para evitar cobros y productos
            no seleccionados.
        </p>

        <h2>Nuestros Valores</h2>
        <h3>Honestidad</h3>
        <h3>Seuridad</h3>
        <h3>Confianza</h3>

        <h2>Misión</h2>
        <h2>Visión</h2>

        <h2>Vende a traves de Tinyfis</h2>
        <p>Quieres formar parte de nuestra vendedores dentro de nuestra tienda. Registrate para pdo_drivers
            vender tus productos y poder llegar a tu publico y hacer crecer tu negocio, comienza a vender en linea 
            con nostros y llega a todo el pais.
        </p>
    </div>
@stop