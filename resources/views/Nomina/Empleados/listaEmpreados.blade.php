@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Lista Empleado 
      </h1>
      <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/agregar/Empleado') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==6)
                    <a href="{{ url('agregar/Empleado') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
              <br>
    </section>
    <section class="content">
    	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Empleado</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/buscar/Empleado') }}" method="get">
              <div class="box-body">
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Plabra clave</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="query">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Puesto:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_puesto">
                      <option value="">-- Seleccione --</option>
				  @foreach ($puesto as $puestos)
				  	<option value="{{ $puestos['id'] }}">{{ $puestos['descripcions'] }}</option>
				  @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Departamento:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="departamento">
                     <option value="">-- Seleccione --</option>
					@foreach ($departamento as $departamentos)
						<option value="{{ $departamentos{'id'} }}">{{ $departamentos['descripcion'] }}</option>
					@endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Fecha de Contratacion</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Desde">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1"></label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Hasta">
                </div>
        
            
       

              </div>
              
        
        
        
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buscar</button>
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
                    <th class="">#</th>
                    <th class="col-md-3">Info</th>
                    <th class="">Departamento</th>
                    <th class="">Puesto</th>
                    <th class="">Correo	</th>
                    <th class="">NSS	</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody> 
                       @foreach ($info as $infos)
                             	 <tr>
                             	 	<td>{{ $infos->id }}</td>
                          <td class="">{{ $infos->nombre }} {{ $infos->apellido_paterno }}</td>
                          <td>{{ $infos->descripcion }}</td>
                          <td>{{ $infos->descripcions }}</td>
                          <td>{{ $infos->correo }}</td>
                          <td>{{ $infos->nss }}</td>
                          <td class="text-right"></td>
                          <td class="td-actions text-right">             
                            <form action="{{ url('/editar/'.$infos->id) }}" method="POST" >
                              {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                   <a href="{{ url('admin/editar/'.$infos->id.'/Empleado') }}" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                  </a>

                                  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                  </button>    
                            </form>            
                            </td>
                          </tr> 
                             @endforeach      
                           
                        </tbody>
                      </table>
            <!-- /.box -->
            <div class="text-center">
                            
                        </div>
        </div>
          </div>
          
        <!-- /.col -->
      </div> 

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
    	@endsection