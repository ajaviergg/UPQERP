@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Productos 
      </h1>
      <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/producto/addproducto') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==7)
                    <a href="{{ url('/producto/addproducto') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
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
              <h3 class="box-title">Buscar Producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Plabra clave</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Selecciona</option>
                        @foreach($productoTipo as $productoTipos)
                            <option value="{{ $productoTipos['id'] }}">{{ $productoTipos['descripcion'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Categoria 1</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Selecciona</option>
                        @foreach($cat1 as $cat11)
                            <option value="{{ $cat11['id'] }}">{{ $cat11['nombre'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Categoria 2</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Selecciona</option>
                        @foreach($cat2 as $cat22)
                            <option value="{{ $cat22['id'] }}">{{ $cat22['nombre'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Categoria 3</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Selecciona</option>
                        @foreach($cat3 as $cat33)
                            <option value="{{ $cat33['id'] }}">{{ $cat33['nombre'] }}</option>
                        @endforeach
                    </select>
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
                    <th class="text-center">#</th>
                    <th class="col-md-2 text-center">Codigo</th>
                    <th class="col-md-5 text-center">Nombre</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Inventario</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody>
                       @foreach($producto as $productos)
                        <tr>
                          <td class="text-center">{{ $productos['id'] }}}</td>
                          <td class="col-md-2 text-center">{{ $productos['codigo'] }}</td>
                          <td class="col-md-5 text-center">{{ $productos['titulo'] }}</td>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                          <td class="td-actions text-right">             
                            <form action="" method="POST">
                              
                                   <a href="" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
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
          </div>
        </div>
        <!-- /.col -->
      </div> 

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
    	@endsection