<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_empleado;
use App\emp_contrato;
use App\emp_domilicio;
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
use App\gen_pago;
use DB;

class EmpleadosController extends Controller
{
    public function buscar(Request $request)
    {
        $puesto = emp_puesto::all();
        $departamento = gen_departamento::all();
        $query = $request->input('query');
        $info = DB::table('emp_empleado')
            ->join('emp_contrato', 'emp_contrato.id_empleado', '=', 'emp_empleado.id')
            ->join('gen_departamento', 'emp_contrato.id_departamento', '=', 'gen_departamento.id')
            ->join('emp_puesto', 'emp_contrato.id_puesto', '=', 'emp_puesto.id')
            ->select('emp_empleado.id', 'emp_empleado.nombre','emp_empleado.apellido_paterno','emp_empleado.correo','emp_empleado.nss','emp_puesto.descripcions','gen_departamento.descripcion')
             ->where('nombre', 'like', "%$query%")
            ->get();
        return view('Nomina.Empleados.listaEmpreados',compact('puesto','departamento','info'));
    }
    public function indexEmpleado(Request $request)
    {
        $puesto = emp_puesto::all();
        $departamento = gen_departamento::all();
        $query = $request->input('query');
        $info = DB::table('emp_empleado')
            ->join('emp_contrato', 'emp_contrato.id_empleado', '=', 'emp_empleado.id')
            ->join('gen_departamento', 'emp_contrato.id_departamento', '=', 'gen_departamento.id')
            ->join('emp_puesto', 'emp_contrato.id_puesto', '=', 'emp_puesto.id')
            ->select('emp_empleado.id', 'emp_empleado.nombre','emp_empleado.apellido_paterno','emp_empleado.correo','emp_empleado.nss','emp_puesto.descripcions','gen_departamento.descripcion')
             ->where('nombre', 'like', "%$query%")
            ->get();
    	return view('Nomina.Empleados.listaEmpreados',compact('puesto','departamento','info'));
    }
    public function crearEmpleado(Request $request)
    {
    	return view('Nomina.Empleados.crearEmpleado');
    }
    public function create(Request $request)
    {
        $pais = gen_domicilio_pais::all();
        $estado = gen_domicilio_estado::all();
        $Municipio = gen_domicilio_municipio::all();

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
    	
    	return view('Nomina.Empleados.direccionEmpleados', compact('pais','estado','Municipio'));
    }
    
    public function agregarDireccion(Request $request)
    {
        $jornada = emp_jornada_tipo::all();
        $regimen = emp_contrato_regimen::all();
        $puesto = emp_puesto::all();
        $riesgo = emp_puesto_riesgo::all();
        $periodo = emp_pago_periodo::all();
        $contrato = emp_contrato_tipo::all();
        $banco = gen_banco::all();
        $departamento = gen_departamento::all();
        $pago = gen_pago_metodo::all();
        
        $direccion = new emp_domilicio;
        $direccion->id_pais = $request->input('id_pais');
        $direccion->id_estado = $request->input('id_estado');
        $direccion->id_municipio = $request->input('id_municipio');
        $direccion->localidad = $request->input('localidad');
        $direccion->colonia = $request->input('colonia');
        $direccion->calle = $request->input('calle');
        $direccion->cod_postal = $request->input('cod_postal');
        $direccion->num_exterior = $request->input('num_exterior');
        $direccion->num_interior = $request->input('num_interior');
         //return $direccion;
         $direccion->save();
         return view('Nomina.Empleados.ContratoEmpleados', compact('jornada','regimen','puesto','riesgo','periodo','contrato','banco','departamento','pago'));
    }
    
    public function agregarContrato(Request $request)
    {
        $ultimo = emp_empleado::all()->last();
        $ultimodir = emp_domilicio::all()->last();

        $pago = new gen_pago;
        $pago->id_banco = $request->input('id_banco');
        $pago->num_cuenta = $request->input('num_cuenta');
        $pago->num_cuenta = $request->input('id_pago_metodo');
        $pago->save();

        $ultimopago = gen_pago::all()->last();
        $contrac = new emp_contrato;
        $contrac->id_empleado = $ultimo->id;
        $contrac->id_puesto_riesgo = $request->input('id_puesto_riesgo');
        $contrac->id_pago = $ultimopago->id;
        $contrac->id_pago_periodo = $request->input('id_pago_periodo');
        $contrac->id_contrato_regimen = $request->input('id_contrato_regimen');
        $contrac->id_puesto = $request->input('id_puesto');
        $contrac->id_departamento = $request->input('id_departamento');
        $contrac->salario_base_integrado = $request->input('salario_base_integrado');
        $contrac->salario_base = $request->input('salario_base');
        $contrac->id_contrato_tipo = $request->input('id_contrato_tipo');
        $contrac->id_domicilio = $ultimodir->id;
        $contrac->save();
        //return $contrac;
        return view('Nomina.Empleados.crearEmpleado');
    }
    public function editEmpleados($id)
    {
        $empleados = emp_empleado::find($id);
        return view('Nomina.Empleados.editar.crearEmpleado', compact('empleados'));
    }
    public function updateEmpleados($id)
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

        $pais = gen_domicilio_pais::all();
        $estado = gen_domicilio_estado::all();
        $Municipio = gen_domicilio_municipio::all();

        $direccion = emp_domilicio::find($id);
        return view('Nomina.Empleados.editar.direccionEmpleados', compact('direccion','pais','estado','Municipio'));
    }
}
