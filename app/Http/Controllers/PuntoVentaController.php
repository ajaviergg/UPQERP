<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuntoVentaController extends Controller
{
    public function index()
    {
    	return view('Ventas.PuntoVenta.puntoventa');
    }
}
