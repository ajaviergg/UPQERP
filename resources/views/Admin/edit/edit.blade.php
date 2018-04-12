@extends('layouts.app')
@section('content')
	<section class="content-header">
      <h1>
        Configuraciones 
        <small>Usuarios</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/Registro') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
             
                {{-- expr --}}
              
              <div class="box-body">
              	<div class="form-group col-md-6">
                  <label for="exampleInputEmail1" >Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $Usuario->name}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Correo Electronico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{ $Usuario->email }}">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group col-md-6">
                  <input type="file" name="photo" required>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleInputPassword1">Tiopo de usuario</label>
                   <br>
                  <select class="select2-selection__arrow" name="tipo">
                    <option value="volvo">Tipo de usuario</option>
                    @foreach ($role as $roles)
                    	 <option value="{{ $roles['id'] }}">{{ $roles['descripcion'] }}</option>
                    @endforeach
                   
                  </select>
                </div>
            
              </div>
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div>
</div>
</section>
@endsection