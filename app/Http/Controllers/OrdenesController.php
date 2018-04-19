<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro_orden;
use App\inv_almacen;
use App\com_producto;
use App\pro_formula;
use DB;

class OrdenesController extends Controller
{
    public function indexOrdenes()
    {
      $orden=DB::table('Pro_orden')
      ->join('inv_almacen','inv_almacen.id','=','Pro_orden.id_almacen_fuente')
      ->join('com_producto','com_producto.id','=','Pro_orden.id_producto')
      ->join('pro_formula','pro_formula.id','=','Pro_orden.id_formula')
      ->select('Pro_orden.id','Pro_orden.cantidad','inv_almacen.nombre','com_producto.titulo','pro_formula.titulo as formula')
      ->get();

      $producto = com_producto::all();
      //dd($orden);
    	return view('Produccion.ordenes.Ordenes')->with('orden', $orden)->with('producto', $producto);
    }

    public function destroy(Request $request)
    {
      $id = $request->input('key');
       //delete
      $orden = Pro_orden::find($id);
      $orden->delete();

        //redirect
        //Session::flash('message', 'Successfully deleted!');
        $orden=DB::table('Pro_orden')
        ->join('inv_almacen','inv_almacen.id','=','Pro_orden.id_almacen_fuente')
        ->join('com_producto','com_producto.id','=','Pro_orden.id_producto')
        ->join('pro_formula','pro_formula.id','=','Pro_orden.id_formula')
        ->select('Pro_orden.id','Pro_orden.cantidad','inv_almacen.nombre','com_producto.titulo','pro_formula.titulo as formula')
        ->get();
        $producto = com_producto::all();
        return view('Produccion.ordenes.Ordenes')->with('orden', $orden)->with('producto', $producto);
    }

    public function create()
    {
      $almacen = inv_almacen::all();
      $producto = com_producto::all();
      $formula = pro_formula::all();
      //return View::make('views\Produccion\ordenes\createordenes.blade.php')
        //    ->with('almacen', $almacen);
      return view('Produccion.ordenes.createordenes')->with('almacen', $almacen)->with('producto', $producto)->with('formula', $formula);
    }

    public function store(Request $request)
    {
      $empleado = new Pro_orden;
      $empleado->id_almacen_fuente = $request->input('exampleFormControlSelect1');
      $empleado->id_almacen_destino = $request->input('exampleFormControlSelect2');
      $empleado->cantidad = $request->input('exampleInputEmail1');
      $empleado->id_producto = $request->input('exampleFormControlSelect3');
      $empleado->id_formula = $request->input('exampleFormControlSelect4');
      $empleado->id_orden_info = 1;
      $empleado->save();
      $orden=DB::table('Pro_orden')
      ->join('inv_almacen','inv_almacen.id','=','Pro_orden.id_almacen_fuente')
      ->join('com_producto','com_producto.id','=','Pro_orden.id_producto')
      ->join('pro_formula','pro_formula.id','=','Pro_orden.id_formula')
      ->select('Pro_orden.id','Pro_orden.cantidad','inv_almacen.nombre','com_producto.titulo','pro_formula.titulo as formula')
      ->get();
      //dd($orden);
      $producto = com_producto::all();
      return view('Produccion.ordenes.Ordenes')->with('orden', $orden)->with('producto', $producto);
    }

    public function show(Request $request)
    {
      $id = $request->input('exampleFormControlSelect1');
      $orden=DB::table('Pro_orden')
      ->join('inv_almacen','inv_almacen.id','=','Pro_orden.id_almacen_fuente')
      ->join('com_producto','com_producto.id','=','Pro_orden.id_producto')
      ->join('pro_formula','pro_formula.id','=','Pro_orden.id_formula')
      ->select('Pro_orden.id','Pro_orden.cantidad','inv_almacen.nombre','com_producto.titulo','pro_formula.titulo as formula')
      ->where('com_producto.id', '=', $id)
      ->get();
      $producto = com_producto::all();
      return view('Produccion.ordenes.Ordenes')->with('orden', $orden)->with('producto', $producto);
    }
}
