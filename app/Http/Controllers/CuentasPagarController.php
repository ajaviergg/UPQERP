<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentasPagarController extends Controller
{
    public function indexCuentaPagar()
    {
    	return view('Finanzas.CuentasPagar.CuentasPagar');
    }
}
