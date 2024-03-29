@extends('layouts.app')

@section('title', 'Productos')

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
    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Productos</a></li>
    @if ($taxon)
        @include('product._breadcrumbs')
    @endif
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($taxon && $products->isEmpty() && $taxon->children->count())
                    <div class="card card-default mb-4">
                        <div class="card-header">{{ $taxon->name }} Subcategorías</div>

                        <div class="card-body">
                            <div class="row">
                                @foreach ($taxon->children as $child)
                                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                                        @include('product.index._category', ['taxon' => $child])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                @if (!$products->isEmpty())
                    <div class="card card-default">
                        <div class="card-header">{{ $taxon ? 'Productos en ' . $taxon->name : 'Productos' }}</div>

                        <div class="card-body">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-12 col-sm-6 col-md-3 mb-3">
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

