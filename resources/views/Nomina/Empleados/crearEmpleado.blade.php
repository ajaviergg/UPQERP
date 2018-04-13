@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        Agregar Empleado      </h1>
      
    </section>
<section class="content-header">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Empleado
</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start 	-->
            <form role="form" action="{{ url('admin/agregar/Empleado') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Num. Empleado	:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="numero">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Email:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="correo">
                </div>
                <div class="form-group col-md-3">
                   <label for="exampleFormControlSelect1"> Nombre:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="nombre">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="apellido_paterno">
                </div>
                
               <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Apellido Materno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="apellido_materno">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Fecha inicio relacion laboral:</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="" name="fecha_inicio">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">RFC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="rfc">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">CURP:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="curp">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Numero de seguro social:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="nss">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Tipo de Jornada:</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                  	<option value="">-- Seleccione --</option>
                      @foreach ($jornada as $jornadas)
				  	<option value="{{ $jornadas['id'] }}">{{ $jornadas['descripcion'] }}</option>
				  @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Fecha de Nacimiento:</label>
                 <input type="date" class="form-control" id="exampleInputEmail1" placeholder="" name="fecha_nacimiento">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Sexo:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                       <option value="M">Masculino</option>
				  <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Régimen de contratación:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_contrato_regimen">
                  	<option value="">-- Seleccione --</option>
                     @foreach ($regimen as $regime)
				  	<option value="{{ $regime['id'] }}">{{ $regime['descripcion'] }}</option>
				  @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Riesgo Puesto:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_puesto_riesgo">
                      <option value="">-- Seleccione --</option>
				  @foreach ($riesgo as $riesgos)
				  	<option value="{{ $riesgos['id'] }}">{{ $riesgos['descripcion'] }}</option>
				  @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Puesto:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_puesto">
                      <option value="">-- Seleccione --</option>
				  @foreach ($puesto as $puestos)
				  	<option value="{{ $puestos['id'] }}">{{ $puestos['descripcion'] }}</option>
				  @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Banco:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="">
                      <option value="">-- Seleccione --</option>
					@foreach ($banco as $bancos)
						<option value="{{ $bancos['id'] }}">{{ $bancos{'descripcion'} }}</option>
					@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Departamento:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_departamento">
                     <option value="">-- Seleccione --</option>
					@foreach ($departamento as $departamentos)
						<option value="{{ $departamentos{'id'} }}">{{ $departamentos['descripcion'] }}</option>
					@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Periodicidad de Pago:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_pago_periodo">
                     <option value="">-- Seleccione --</option>
					@foreach ($periodo as $periodos)
						<option value="{{ $periodos['id'] }}">{{ $periodos['descripcion'] }}</option>
					@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">No. de Cuenta:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Salario Base	:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="salario_base">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Salario Diario integrado:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="salario_base_integrado">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Tipo Contrato:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="id_contrato_tipo">
                     <option value="">---Seleccione-----</option>
					@foreach ($contrato as $contratos)
						<option value="{{ $contratos['id'] }}">{{ $contratos['descripcion'] }}</option>
					@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Método de Pago::</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="id_pago">
                     @foreach ($pago as $pagos)
				  		<option value="{{ $pagos['id'] }}">{{ $pagos['descripcion'] }}</option>
				  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">No. de Cuenta::</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Dirección:</label>
                 
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">País:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="">
                     <option selected="selected" value="">---Seleccione---</option>
							  	@foreach ($pais as $paises)
							  		<option selected="selected" value="{{ $paises['id'] }}">{{ $paises['nombre'] }}</option>
							  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Estado:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="Estados_id">
                    @foreach ($estado as $estados)
							  		<option  value="{{ $estados['id'] }}">{{ $estados['nombre'] }}</option>
							  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Municipio:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="id_pago">
                     @foreach ($Municipio as $Municipios)
							  		<option  value="{{ $Municipios['id'] }}">{{ $Municipios['nombre'] }}</option>
							  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Localidad:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="localidad">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Calle::</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="calle">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Colonia:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="colonia">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Código Postal:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="cod_postal">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">No. Exterior:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="num_exterior">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">>No. Interior:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="num_interior">
                </div>
              </div>
             
              <!-- /.box-body -->

              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>

          <!-- /.box -->
           

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
@endsection