<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    public function index()
    {
    	return view('Ventas.Cotizaciones.cotizacion');
    }
    public function AgregarCotizacion()
    {
    	return view('Ventas.Cotizaciones.agregarCotizacion');
    }
}
