@extends('layouts.app')
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Formulas de Producción
        <small></small>
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>--}}
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           <br>
            
      <div class="box-body">
        <form action="conciliaciones_submit" method="get" accept-charset="utf-8">
          
        
         <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Plabra clave</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
               
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Sucursal</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buscar</button>
              </div>
                </form>
              </div>
              <br>
           <div class="row">
            <div class="col-md-7">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">Banco</th>
                    <th class="col-md-2 text-center">Creacion</th>
                    <th class="col-md-4 text-center">Usuario</th>
                    <th class="text-center">Inicio Periodo</th>
                    <th class="text-center">Fin Periodo</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody>        
                      {{-- expr --}} 
                        <tr>
                          <td class="text-center"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-right"></td>
                          <td class="td-actions text-right">             
                            <form action="" method="POST" >
                              
                                   <a href="" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
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
        <div class="col-md-5">
              <div class="box box-primary">
                <div class="row ng-scope">
        <div class="col-md-6 ">
          <h4>
            <strong class="ng-binding">
              
              Agregar conciliación bancaria
            </strong>
          </h4>
          
          
          <br>
        </div>
        <form action="conciliaciones_submit" method="get" accept-charset="utf-8">
          
       
        <div class="form-group col-md-7">
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>

                 </form>
      </div>
                
                 
            <!-- /.box -->
          </div>
        <!-- /.col -->
      </div> 
            <!-- /.box-header -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>  
    @endsection

