<?php

namespace App\Http\Controllers;

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
    	return var_dump($request);
    	DB::table('fin_cuenta')->insert(
    		['id_tipo'=>'',
    		'id_banco'=>'',
    		'balance_inicial'=>'',
    		'id_moneda'=>'',
    		'id_sucursal'=>'',
    		'titulo'=>'',
    		'clave'=>'',
    		'fecha_balance_inicial'=>'',
    		'descripcion'=>'']
    	);
    }
}