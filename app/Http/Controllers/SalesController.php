<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\com_producto;
use App\com_producto_detalle;
use App\com_producto_lista_precio;
use App\com_producto_almacen;
use App\gen_moneda;
use App\com_tipo_compras;
use App\com_costeo;
use App\gen_categoria_n1;
use App\gen_categoria_n2;
use App\gen_categoria_n3;
use App\com_producto_tipo;

class SalesController extends Controller
{
    public function Busquedaindex()
    {
        $cat1 = gen_categoria_n1::all();
        $cat2 = gen_categoria_n2::all();
        $cat3 = gen_categoria_n3::all();
        $productoTipo = com_producto_tipo::all();
        $producto = com_producto::all();
    	return view('Compras.Productos.producto', compact( 'cat1', 'cat2', 'cat3', 'productoTipo', 'producto'));
    }
    public function agregarproducto()
    {
        $moneda = gen_moneda::all();
        $tipoCompra = com_tipo_compras::all();
        $costeo = com_costeo::all();
        $cat1 = gen_categoria_n1::all();
        $cat2 = gen_categoria_n2::all();
        $cat3 = gen_categoria_n3::all();
        $productoTipo = com_producto_tipo::all();
    	return view('Compras.Productos.agregarproducto', compact('moneda','tipoCompra', 'costeo', 'cat1', 'cat2', 'cat3', 'productoTipo'));
    }

    public function store(Request $request){


        $producto_detalle = new com_producto_detalle();
        $producto_detalle->sku = $request->input('sku');
        $producto_detalle->tiempo_surtido = $request->input('surtido');
        $producto_detalle->volumen = $request->input('volumen');
        $producto_detalle->peso = $request->input('peso');
        $producto_detalle->id_tipo_compras = $request->input('tipo_compra');
        $producto_detalle->id_categoria_n1 = $request->input('categoria_n1');
        $producto_detalle->id_categoria_n2 = $request->input('categoria_n2');
        $producto_detalle->id_categoria_n3 = $request->input('categoria_n3');
        $producto_detalle->save();

        $ultimo_detalle = com_producto_detalle::all()->last();

        $producto = new com_producto;
        $producto->codigo = $request->input('codigo');
        $producto->titulo = $request->input('titulo');
        $producto->costo_inicial = $request->input('costoInicial');
        $producto->id_costeo = $request->input('costeo');
        $producto->id_moneda = $request->input('moneda');
        $producto->id_tipo = $request->input('tipo');
        $producto->unidad_medida = $request->input('unidadMedida');
        $producto->comentarios = $request->input('descripcion');
        $producto->id_producto_detalle = $ultimo_detalle->id;
        $producto->save();

        $ultimo_producto = com_producto::all()->last();

        $producto_lista_precio = new com_producto_lista_precio;
        $producto_lista_precio->id_producto = $ultimo_producto->id;
        $producto_lista_precio->id_lista_precio = 1;
        $producto_lista_precio->valor = $request->input('valor_lista');
        $producto_lista_precio->save();

        $producto_almacen = new com_producto_almacen;
        $producto_almacen->id_producto = 1;
        $producto_almacen->id_almacen = 1;
        $producto_almacen->minimo = $request->input('txtMin');
        $producto_almacen->maximo = $request->input('txtMax');
        $producto_almacen->inicial = $request->input('txtInitQty');
        $producto_almacen->ubicacion = $request->input('txtLoc');
        $producto_almacen->visible = true;
        $producto_almacen->save();

        return back();
    }
}
