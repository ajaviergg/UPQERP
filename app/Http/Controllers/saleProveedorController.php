<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saleProveedorController extends Controller
{
    public function buscarProvedores()
    {
    	return view('Compras.Proveedores.ListaProveedores');
    }
    public function agregarProvedores()
    {
    	return view('Compras.Proveedores.agregarProveedor');
    }
}
