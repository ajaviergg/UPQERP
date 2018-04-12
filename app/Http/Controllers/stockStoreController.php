<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stockStoreController extends Controller
{
    public function BuscarAlmacen()
    {
    	return view('Inventarios.Almacenes.listaAlmacenes');
    }
    public function agregarAlmacen()
    {
    	return view('Inventarios.Almacenes.agregarAlmacenes');
    }
}
