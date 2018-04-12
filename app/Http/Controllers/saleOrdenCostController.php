<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saleOrdenCostController extends Controller
{
    public function BuscarOrdenes()
    {
    	return view('Compras.Ordenes.ListaOredenes');
    }
    public function AgregarOrden()
    {
    	return view('Compras.Ordenes.agregarOrdenes');
    }
}
