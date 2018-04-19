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
            <form role="form" action="{{ url('admin/agregar/Empleado/Contrato') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body"><div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Tipo de Jornada:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_jornada_tipo">
                  	<option value="">-- Seleccione --</option>
                      @foreach ($jornada as $jornadas)
				  	<option value="{{ $jornadas['id'] }}">{{ $jornadas['descripcion'] }}</option>
				  @endforeach
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
                  <select class="form-control" id="exampleFormControlSelect1" name="id_banco">
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
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="num_cuenta">
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
                   <select class="form-control" id="exampleFormControlSelect1" name="id_pago_metodo">
                     @foreach ($pago as $pagos)
				  		<option value="{{ $pagos['id'] }}">{{ $pagos['descripcion'] }}</option>
				  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">No. de Cuenta::</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
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