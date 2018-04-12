<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormulasController extends Controller
{
    public function index()
    {
    	return view('Produccion.formulas');
    }
    public function create()
    {
        return view('Produccion.create.create');
    }
}
