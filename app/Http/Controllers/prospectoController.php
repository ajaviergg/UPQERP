<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class prospectoController extends Controller
{
    public function index()
    {
    	return view('Ventas.Prospectos.prospectos');
    }
    public function agregarprospecto()
    {
    	return view('Ventas.Prospectos.agregarProspecto');
    }
}
