<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
    public function agregarCuenta(Request $request){
    	$tipo = $request->input('tipo');
    	$sucursal = $request->input('sucursal');
    	$banco = $request->input('banco');
    	$descripcion = $request->input('descripcion');
    	$titulo = $request->input('titulo');
    	$cuenta = $request->input('cuenta');
    	$clabe = $request->input('clabe');
    	$balance_inicial = $request->input('balance_inicial');
    	$fechabalance_inicial = $request->input('fechabalance_inicial');
    	$moneda = $request->input('moneda');
    	$descripcion = $request->input('descripcion');
    	DB::table('fin_cuenta')->insert(
    		['id_tipo'=>$tipo,
    		'id_banco'=>$banco,
    		'balance_inicial'=>$balance_inicial,
    		'id_moneda'=>$moneda,
    		'id_sucursal'=>$sucursal,
    		'titulo'=>$titulo,
    		'clave'=>$clabe,
    		'fecha_balance_inical'=>$fechabalance_inicial,
    		'descripcion'=>$descripcion]
    	);
    }
}