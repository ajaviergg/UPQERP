@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        Ordenes de Produccion 
      </h1>
      <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/Nueva/Ordenes') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==3)
                    <a href="{{ url('Nueva/Ordenes') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
              <br>
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
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Numero</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Producto</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Almacen</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Estatus</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label for="exampleFormControlSelect1">Fecha de Creacion</label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control" placeholder="Desde">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        
            <div class="col-md-2">
                  <label for="exampleFormControlSelect1"></label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control" placeholder="Desde">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
       

              </div>
              <div class="col-md-2">
                  <label for="exampleFormControlSelect1">Fecha de Produccion</label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control" placeholder="Desde">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        
        <div class="col-md-2">
                  <label for="exampleFormControlSelect1"></label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control" placeholder="Desde">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
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
                    <th class="col-md-2 text-center">Nombre</th>
                    <th class="col-md-5 text-center">Correo Electronico</th>
                    <th class="text-center">Tipo de Usuario</th>
                    <th class="text-center">foto</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody>       
                        <tr>
                          <td class="text-center"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-right"></td>
                          <td class="td-actions text-right">             
                            <form action="" method="POST">
                              <a type="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-info"></i>
                                  </a>
                                   <a href="" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <a href="" rel="tooltip" title="Imagen del producto" class="btn btn-warning btn-simple btn-xs">
                                    <i class="fa fa-image"></i>
                                  </a>
                                  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                  </button>    
                            </form>            
                            </td>
                          </tr>      
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