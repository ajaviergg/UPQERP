<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresosController extends Controller
{
    public function indexIngresos()
    {
    	return view('Finanzas.Ingresos.ingresos');
    }
    public function agregarIngresos()
    {
    	return view('Finanzas.Ingresos.agregarIngresos');
    }
}
