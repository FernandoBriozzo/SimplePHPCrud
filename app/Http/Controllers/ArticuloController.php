<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index() {
        $articulos = Articulo::all();
        return view('articulos.index')->with(['articulos' => $articulos]);
    }
}
