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
            <form role="form" action="{{ url('admin/editar/Direccion') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Num. Empleado	:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="numero" required value="{{ $empleados->numero }}">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Email:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="correo" value="{{ $empleados->correo }}">
                </div>
                <div class="form-group col-md-3">
                   <label for="exampleFormControlSelect1"> Nombre:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="nombre" required value="{{ $empleados->nombre }}">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="apellido_paterno" required value="{{ $empleados->apellido_paterno }}">
                </div>
                
               <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Apellido Materno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="apellido_materno" required value="{{ $empleados->apellido_materno }}">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Fecha inicio relacion laboral:</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="" name="fecha_inicio" required value="{{ $empleados->fecha_inicio }}">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">RFC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="rfc" required value="{{ $empleados->rfc }}">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">CURP:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="curp" required value="{{ $empleados->curp }}">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Numero de seguro social:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="nss" required value="{{ $empleados->nss }}">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Fecha de Nacimiento:</label>
                 <input type="date" class="form-control" id="exampleInputEmail1" placeholder="" name="fecha_nacimiento" required value="{{ $empleados->fecha_nacimiento }}">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Sexo:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="sexo" required value="{{ $empleados->sexo }}">
                       <option value="M">Masculino</option>
				  <option value="F">Femenino</option>
                    </select>
                </div>
                
                
              </div>
             
              <!-- /.box-body -->

              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Siguiente</button>
              </div>
            </form>
          </div>

          <!-- /.box -->
           

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
@endsection