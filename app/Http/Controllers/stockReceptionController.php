<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stockReceptionController extends Controller
{
    public function buscarRecepcion()
    {
    	return view('Inventarios.Recepcion.listaRecepcion');
    }
    public function agregarRecepcion()
    {
      return "hola";
    	//return view('Inventarios.Recepcion.agregarRecepcion');
    }

}
