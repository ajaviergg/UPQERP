<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salePriceController extends Controller
{
    public function buscarPrecio()
    {
    	return view('Compras.ListaPrecio.TablaPrecio');
    }
}
