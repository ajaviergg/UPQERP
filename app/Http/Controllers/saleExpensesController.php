<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saleExpensesController extends Controller
{
    public function buscarGastos()
    {
    	return view('Compras.Gastos.ListaGastos');
    }
    public function agregarGastos()
    {
    	return view('Compras.Gastos.agregarGastos');
    }
}
