<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function Busquedaindex()
    {
    	return view('Compras.Productos.producto');
    }
    public function agregarproducto()
    {
    	return view('Compras.Productos.agregarproducto');
    }
}
