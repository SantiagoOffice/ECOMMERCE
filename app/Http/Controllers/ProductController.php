<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function detail($id, $category = null)
    {
        // CORREGIDO:
        // Se elimina el if/else y el error de sintaxis.
        // Se pasan 'id' y 'category' directamente a la vista.
        // 'category' será null si no está en la URL, lo cual es correcto.
        return view('products.detail', compact('id', 'category'));
    }

    function create()
    {
        // CORREGIDO:
        // Ahora devuelve la vista del formulario de creación que hicimos.
        return view('products.create');
    }
}
