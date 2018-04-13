<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConceptoVentaController extends Controller
{
    public function MostrarVenta()
    {
    	return view('Ventas.ConceptoVenta.ConceptosVenta');
    }
    public function agregarVenta()
    {
    	return view('Ventas.ConceptoVenta.agregarConceptos');
    }
}
