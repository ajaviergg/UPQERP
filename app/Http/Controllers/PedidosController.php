<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
    	return view('Ventas.Pedidos.pedidos');
    }
    public function agregarPedidos()
    {
    	return view('Ventas.Pedidos.agregarPedidos');
    }
}
