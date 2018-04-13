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
            <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/BancosCajas/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==5)
                    <a href="{{ url('/BancosCajas/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
      <div class="box-body">
        <form action="finanzas_submit" method="get" accept-charset="utf-8">
          
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
            <div class="col-md-6">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">tipo</th>
                    <th class="col-md-2 text-center">Banco</th>
                    <th class="col-md-5 text-center">Nombre</th>
                    <th class="text-center">Saldo</th>
                    <th class="text-center">Moneda</th>
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
        <div class="col-md-6">
              <div class="box box-primary">
                <div class="row ng-scope">
        <div class="col-sm-6 top">
          <h4>
            <strong class="ng-binding">
              <i class="fa fa-university"></i>
              asd
            </strong>
          </h4>
          <div  class="ng-binding ng-scope">
            <i class="fa fa-map-marker"></i> Matriz
          </div>
          <div class="ng-binding ng-scope">
            <i class="fa fa-credit-card"></i> 01156151
          </div>
          <br>
        </div>
        <div class="col-sm-6 top">
          <div class="pull-right ng-scope" ">

            <h4 class="no-margins text-success ng-binding">$500.00 MXN</h4>
            <small class="text-muted text-success">
              Ingresos del mes
            </small>

            <h4 class="no-margins text-danger ng-binding">$0.00 MXN</h4>
            <small class="text-muted text-danger">
              Egresos del mes
            </small>
          </div><!-- end ngIf: accountDetails -->
        </div>
      </div>
                
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">Fecha</th>
                    <th class="col-md-2 text-center">Concepto</th>
                    <th class="col-md-5 text-center">Nombre</th>
                    <th class="text-center">Monto</th>
                    <th class="text-center">Balance</th>
                   
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
                                
                            </td>
                          </tr>      
                        </tbody>
                      </table>
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