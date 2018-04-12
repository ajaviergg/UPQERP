<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciliacionesController extends Controller
{
    public function index()
    {
    	return view('Finanzas.Conciliaciones.conciliaciones');
    }
}
