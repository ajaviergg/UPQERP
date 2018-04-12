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
              <div class="box-body">
              	<div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" name="name">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Correo Electronico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
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
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">#</th>
                    <th class="col-md-2 text-center">Nombre</th>
                    <th class="col-md-7 text-center">Correo Electronico</th>
                    <th class="text-center">Tipo de Usuario</th>
                    <th class="text-center">foto</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody> 
                       @foreach ($Usuario as $Usuarios)
                       	{{-- expr --}}
                           
                        <tr>
                          <td class="text-center">{{ $Usuarios->id }}</td>
                          <td class="col-md-2 text-center">{{ $Usuarios->name}}</td>
                          <td class="col-md-2 text-center">{{ $Usuarios->email }}</td>
                          <td class="text-center">{{ $Usuarios->descripcion }}</td>
                          <td class="text-center">
                            <img src="../../images/{{ $Usuarios->image}}" class="img-circle" alt="User Image" style="width: 100%"></td>
                          <td class="td-actions text-right col-md-2">             
                           
                                        <form action="{{ url('/admin/Registro/'.$Usuarios->id) }}" method="POST" >
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                             
                                            <a href=" {{ url('admin/Registro/'.$Usuarios->id.'/edit') }} " rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            
                                            <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                             <i class="fa fa-times"></i>
                                            </button>         
                            </td>
                          </tr>
                           @endforeach       
                        </tbody>
                      </table>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div> 

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div>
</div>
</section>
@endsection