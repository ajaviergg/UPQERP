<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenesController extends Controller
{
    public function indexOrdenes()
    {
    	return view('Produccion.ordenes.Ordenes');
    }
    public function create()
    {
    	return view('Produccion.ordenes.createordenes');
    }
}
