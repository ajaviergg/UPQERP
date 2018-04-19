<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inv_almacen;
use App\gen_sucursal;

use DB;

class stockStoreController extends Controller
{
    public function BuscarAlmacen()
    {
      $orden=DB::table('inv_almacen')
      ->join('gen_sucursal','gen_sucursal.id','=','inv_almacen.id_sucursal')
      ->select('inv_almacen.id','inv_almacen.nombre','inv_almacen.multisucursal','inv_almacen.existencia_publica','gen_sucursal.nombre as sucu')
      ->get();
      $sucursal = gen_sucursal::all();
    	return view('Inventarios.Almacenes.listaAlmacenes')->with('orden', $orden)->with('sucursal', $sucursal);
    }
    public function agregarAlmacen()
    {
      $sucursal = gen_sucursal::all();
    	return view('Inventarios.Almacenes.agregarAlmacenes')->with('sucursal', $sucursal);
    }
    public function store(Request $request)
    {
      $almacen = new inv_almacen;
      $almacen->nombre = $request->input('almacen');
      $almacen->id_minimos_maximos = $request->input('minimosMaximos');
      $almacen->id_sucursal = $request->input('sucursal');
      $almacen->multisucursal = 1;
      $almacen->existencia_publica = 1;
      $almacen->save();
      $orden=DB::table('inv_almacen')
      ->join('gen_sucursal','gen_sucursal.id','=','inv_almacen.id_sucursal')
      ->select('inv_almacen.id','inv_almacen.nombre','inv_almacen.multisucursal','inv_almacen.existencia_publica','gen_sucursal.nombre as sucu')
      ->get();
      $sucursal = gen_sucursal::all();
    	return view('Inventarios.Almacenes.listaAlmacenes')->with('orden', $orden)->with('sucursal', $sucursal);
    }

    public function destroy(Request $request)
    {
      $id = $request->input('key');
       //delete
      $orden = inv_almacen::find($id);
      $orden->delete();

        //redirect
        //Session::flash('message', 'Successfully deleted!');
        $orden=DB::table('inv_almacen')
        ->join('gen_sucursal','gen_sucursal.id','=','inv_almacen.id_sucursal')
        ->select('inv_almacen.id','inv_almacen.nombre','inv_almacen.multisucursal','inv_almacen.existencia_publica','gen_sucursal.nombre as sucu')
        ->get();
        $sucursal = gen_sucursal::all();
      	return view('Inventarios.Almacenes.listaAlmacenes')->with('orden', $orden)->with('sucursal', $sucursal);
    }




    public function show(Request $request)
    {
      $id = $request->input('exampleFormControlSelect1');
      $orden=DB::table('inv_almacen')
      ->join('gen_sucursal','gen_sucursal.id','=','inv_almacen.id_sucursal')
      ->select('inv_almacen.id','inv_almacen.nombre','inv_almacen.multisucursal','inv_almacen.existencia_publica','gen_sucursal.nombre as sucu')
      ->where('inv_almacen.id_sucursal', '=', $id)
      ->get();


      $sucursal = gen_sucursal::all();
    	return view('Inventarios.Almacenes.listaAlmacenes')->with('orden', $orden)->with('sucursal', $sucursal);
    }
}
