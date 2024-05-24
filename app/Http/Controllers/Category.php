<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Category extends Controller
{
    /* Este controlador fue creado para hacer pruebas*/
    public function index(ProductIndexRequest $request, string $taxonomyName = null, Taxon $taxon = null){
        
        $taxonomies = TaxonomyProxy::get();

        return view('welcome', [
            'taxonomies' => $taxonomies,
        ]);
    }
}
