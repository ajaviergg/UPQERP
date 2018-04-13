<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_empleado;
use App\emp_contrato;
use App\gen_direccion;
use App\emp_jornada_tipo;
use App\emp_contrato_regimen;
use App\emp_puesto;
use App\emp_puesto_riesgo;
use App\emp_pago_periodo;
use App\emp_contrato_tipo;
use App\gen_domicilio_pais;
use App\gen_domicilio_estado;
use App\gen_domicilio_municipio;
use App\gen_banco;
use App\gen_departamento;
use App\gen_pago_metodo;
use DB;

class EmpleadosController extends Controller
{
    public function indexEmpleado()
    {

    	return view('Nomina.Empleados.listaEmpreados');
    }
    public function crearEmpleado(Request $request)
    {
    	$jornada = emp_jornada_tipo::all();
    	$regimen = emp_contrato_regimen::all();
    	$puesto = emp_puesto::all();
    	$riesgo = emp_puesto_riesgo::all();
    	$periodo = emp_pago_periodo::all();
    	$contrato = emp_contrato_tipo::all();
    	$pais = gen_domicilio_pais::all();
    	$estado = gen_domicilio_estado::all();
    	$Municipio = gen_domicilio_municipio::all();
    	$banco = gen_banco::all();
    	$departamento = gen_departamento::all();
    	$pago = gen_pago_metodo::all();
    	//$idestado = $request->input('Estados_id');
    	
    	//$Municipio = DB::table('gen_domicilio_municipio')->where('id_estado', $idestado)->exists();
    	//return  $idestado;
    	return view('Nomina.Empleados.crearEmpleado', compact('jornada','regimen','puesto','riesgo','periodo','contrato','pais','estado','Municipio', 'banco','departamento','pago'));
    }
    public function create(Request $request)
    {

    	$empleado = new emp_empleado;
    	$empleado->numero = $request->input('numero');
    	$empleado->nombre = $request->input('nombre');
    	$empleado->apellido_paterno = $request->input('apellido_paterno');
    	$empleado->apellido_materno = $request->input('apellido_materno');
    	$empleado->correo = $request->input('correo');
    	$empleado->rfc = $request->input('rfc');
    	$empleado->curp = $request->input('curp');
    	$empleado->nss = $request->input('nss');
    	$empleado->fecha_inicio = $request->input('fecha_inicio');
    	$empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
    	$empleado->sexo = $request->input('sexo');
    	$empleado->save();

    	$ultimo = emp_empleado::all()->last();


    	$direccion = gen_direccion::all();
    	$direccion->localidad = $request->input('localidad');
    	$direccion->calle = $request->input('calle');
    	$direccion->colonia = $request->input('colonia');
    	$direccion->cod_postal = $request->input('cod_postal');
    	$direccion->num_exterior = $request->input('num_exterior');
    	$direccion->num_interior = $request->input('num_interior');
    	$direccion->referencia_1 = 'null';
    	$direccion->referencia = 'null';
    	$empleado->save();
    	$direccion->save();
/*
    	$ultimodir = gen_direccion::all()->last();

    	$contrac = new emp_contrato;
    	$contrac->id_empleado = $request->$ultimo;
    	$contrac->id_puesto_riesgo = $request->input('id_puesto_riesgo');
    	$contrac->id_pago = $request->input('id_pago');
    	$contrac->id_pago_periodo = $request->input('id_pago_periodo');
    	$contrac->id_contrato_regimen = $request->input('id_contrato_regimen');
    	$contrac->id_puesto = $request->input('id_puesto');
    	$contrac->id_departamento = $request->input('id_departamento');
    	$contrac->salario_base_integrado = $request->input('salario_base_integrado');
    	$contrac->salario_base = $request->input('salario_base');
    	$contrac->id_contrato_tipo = $request->input('id_contrato_tipo');
    	$contrac->id_domicilio =$request->$ultimodir;
    	$contrac->save();*/
    	

    	
    	return back();
    }
}
