@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        Productos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">productos</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
       <div class="col-md-5">
                 
              
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
               </div>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" id="idproducto" placeholder="Ingresa ID">
                </div>
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="nombreproducto">
                  </div>
                <div class="form-group">
                  <label>Descripción</label>
                  <textarea class="form-control" rows="3" placeholder="Descripción"></textarea>    
                </div>
                <div class="form-group">
                   <label>ID Proveedor</label>
                   <input type="text" class="form-control" id="idproveedor" placeholder="Ingresa ID">
                </div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Precio de producto">
                <span class="input-group-addon">.00</span>
              </div>
                <div class="form-group">
                <label>Fecha caducidad:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="fechacad">
                </div>
              </div>
               
               <div class="form-group">
                <label>Fecha Ingreso:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="fechaingreso">
                </div>
              </div>
              <div class="form-group">
                   <label>Stock en Almacen:</label>
                   <input type="text" class="form-control" id="stock">
              </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Subir imagen</label>
                  <input type="file" id="exampleInputFile">

            
                </div>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
          </div>
          
        <!-- left column -->
        <div class="col-md-6">
         <span class="Maintitle">
      <table>
        <tbody><tr>
          <td>
            <!-- ngIf: imgage != null || image !=udefined --><img ng-if="imgage != null || image !=udefined" ng-="" height="28" class="ng-scope"><!-- end ngIf: imgage != null || image !=udefined -->
            <i class="fa fa-1x "></i>
          </td>
          <td class="ng-binding">
            
         
         <div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Transferencias" color:red="" ng-if="model.AllowedTransferMerchandise">

  <button type="submit" class="btn btn-primary">Eliminar</button>

  

  
</div>
         
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
 
              <div class="col-md-6">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Productos</h3>
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
             
              
          </div> 
          
    </section>
    @endsection