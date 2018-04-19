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
            <form role="form" action="{{ url('admin/agregar/Empleado/Direccion') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Dirección:</label>
                 
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">País:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="id_pais">
                     <option selected="selected" value="">---Seleccione---</option>
							  	@foreach ($pais as $paises)
							  		<option selected="selected" value="{{ $paises['id'] }}">{{ $paises['nombre'] }}</option>
							  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Estado:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="id_estado">
                    @foreach ($estado as $estados)
							  		<option  value="{{ $estados['id'] }}">{{ $estados['nombre'] }}</option>
							  	@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Municipio:</label>
                   <select class="form-control" id="exampleFormControlSelect1" name="id_municipio">
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