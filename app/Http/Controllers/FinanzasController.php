<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanzasController extends Controller
{
    public function index()
    {
    	return view ('Finanzas.BancosCajas.finanzas');
    }
    public function agregarBancos()
    {
    	return view ('Finanzas.BancosCajas.crearfinanzas');
    }
}