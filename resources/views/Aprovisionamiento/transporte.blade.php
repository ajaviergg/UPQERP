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
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-6">
    <span class="Maintitle">
      <table>
        <tbody><tr>
          <td>
            <!-- ngIf: imgage != null || image !=udefined --><img ng-if="imgage != null || image !=udefined" ng-src="/Assets/img/Almacen.png" height="28" class="ng-scope" src="logot.png"><!-- end ngIf: imgage != null || image !=udefined -->
            <i class="fa fa-1x "></i>
          </td>
          <td class="ng-binding">
            <h2>Transporte</h2>
          </td>
        </tr>
        <tr>
          <td></td>
          <td style="font-size:48px;" class="ng-binding">
            
          </td>
        </tr>
      </tbody></table>
    </span>
  </div>
        <div class="col-lg-6" ng-transclude="">
     
      <div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Nuevo" action="add" color-class="btn-primary" icon="fa-plus" ng-if="model.AllowedAddWarehouse &amp;&amp; !editMode">


  <a class="btn btn-primary">
    <i class="fa fa-2x fa-plus"></i>
    <span class="nav-label ng-binding"><br>Nuevo Transporte</span>
  </a>


  
    </div>
   <div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Nuevo" action="add" color-class="btn-primary" icon="fa-plus" ng-if="model.AllowedAddWarehouse &amp;&amp; !editMode">

  

  

  
    </div>
       </div>
       
     
          </div>
           <br>
            <grid-filter class="collapse in" aria-expanded="true" style=""><div class="filterBox row">

  <div style="max-width: 1400px; padding-left: 15px;" ng-show="!element.isCollapsed">
    <div class="row" ng-transclude="">
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Numero" model="filter.Number">
    <label>ID</label>

     <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
    </div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Nombre" model="filter.Name">        
    
     <label>Persona</label>

     <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
    </div>
    
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <label>Transaccion</label>
       <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
        
        
    </div>
     <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <label>Origen</label>
       <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
        
        
    </div>
    
    <br>
        <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">

        <button type="submit" class="btn btn-primary">Enviar</button>
       
        
        
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
              <h3 class="box-title">Transporte</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Persona</th>
                  <th>Transaccion</th>
                  <th>Origen</th>
                 
                </tr>
                </thead>
                <tbody>
            
               
                <tr>
                
                   <td>1</td>
                  <td>Misc</td>
                  <td>NetFront 3.1</td>
                  <td>Embedded devices</td>
                  
               </tr>
                <tr>
                     <td>2</td>
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                
                </tr>
                <tr>
                     <td>3</td>
                  <td>Misc</td>
                  <td>Dillo 0.8</td>
                  <td>Embedded devices</td>
                 
                </tr>
             
                
                </tbody>
               
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