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
                   <a href="{{ url('admin/create') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==3)
                    <a href="{{ url('create') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
      <div class="filterBox row">
        <div style="max-width: 1400px; padding-left: 15px;" ng-show="!element.isCollapsed">
          <div class="row" ng-transclude="">
            <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Palabra clave" model="filter.SearchTerm">
              <div class="box-header">
                <h3 class="box-title">Palabra Clave</h3>
              </div>
      <span class="input-group " model="model">
    
        <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty" style="position: inherit;left: 5%;">
      </span>
            </div>
      <div class="col-xs-3 col-sm-2 col-lg-1 ng-scope ng-isolate-scope" title="Buscar" search="search">
        <br>
          <button class="btn btn-primary  btn-sm pull-right" style="margin-left: 5px; top: 198%;position: absolute;" ng-click="click()">Buscar <i class="fa fa-search" style=""></i></button>
      </div>
          </div>
        </div>
          <div ng-show="element.isCollapsed" ng-click="element.isCollapsed = false" class="ng-hide"></div>
      </div>
              <br>
           <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">#</th>
                    <th class="col-md-2 text-center">Cantidad</th>
                    <th class="col-md-5 text-center">prodcuto</th>
                    <th class="text-center">formulas</th>
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