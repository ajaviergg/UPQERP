<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EgresosController extends Controller
{
    public function MostrarEgresos()
    {
    	return view('Finanzas.Egresos.egresos');
    }
    public function agregarPagos()
    {
    	return view('Finanzas.Egresos.PagosGastos');
    }
    public function agregarGastos()
    {
    	return view('Finanzas.Egresos.PagosCostos');
    }
}
