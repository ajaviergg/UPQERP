@extends('layouts.app')
@section('content')
<script>
$(document).ready(function(){
    $(".btn-primary").click(function(){
        $(".collapse").collapse('toggle');
    });
    $(".btn-success").click(function(){
        $(".collapse").collapse('show');
    });
    $(".btn-warning").click(function(){
        $(".collapse").collapse('hide');
    });
});
</script>
<section class="content-header">
      <h1>
        Proveedores
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-6">
    <span class="Maintitle">
     
    </span>
  </div>
        <div class="col-lg-6" ng-transclude="">
     
      <div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Nuevo" action="add" color-class="btn-primary" icon="fa-plus" ng-if="model.AllowedAddWarehouse &amp;&amp; !editMode">


  <a class="btn btn-primary">
    <i class="fa fa-2x fa-plus"></i>
    <span class="nav-label ng-binding"><br>Nuevo Proveedor</span>
  </a>

  

  
    </div>
       </div>
       
     
          </div>
           <br>
            <grid-filter class="collapse" aria-expanded="false" style="height: 0px;"><div class="filterBox row">

  <div style="max-width: 1400px; padding-left: 15px;" ng-show="!element.isCollapsed">
    <div class="row" ng-transclude="">
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Numero" model="filter.Number">
    <label>ID</label>

     <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
    </div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Nombre" model="filter.Name">         <label>Nombre</label>

     <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
    </div>
    
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <label>Dirección</label>
       <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
        
        
    </div>
     <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <label>Contacto</label>
       <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
        
        
    </div>
     <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <label>Giro</label>
       <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
        
        
    </div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <label>Observaciones/Notas</label>
       <textarea class="form-control" rows="1"></textarea> 
        
        
    </div>
    
    <br>
        <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <button type="submit" class="btn btn-primary">Guardar</button>
       
        
        
    </div>
   

  </div>
  </div>


</div>
</grid-filter>
         <br>
          <div class="row">
              <div class="col-md-7">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Proveedores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Capacidad</th>
                  <th>Encargado</th>
                  <th>Stock Total</th>
                  <th>Observaciones</th>
                </tr>
                </thead>
                <tbody>
            
               
                <tr>
                  <td>Misc</td>
                  <td>NetFront 3.1</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Dillo 0.8</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
             
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Capacidad</th>
                  <th>Encargado</th>
                  <th>Stock Total</th>
                  <th>Observaciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <div class="col-md-5">
                 
              </div>
              
          </div>
    </section>
    @endsection