<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentasCobrarController extends Controller
{
    public function index()
    {
    	return view('Finanzas.CuentasCobrar.CuentasCobrar');
    }
}
