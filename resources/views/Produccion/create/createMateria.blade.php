@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Agregar Fórmula de Producción 
      </h1>
      
    </section>
    <section class="content">
<div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Detalles</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Materia Prima</a></li>
              
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
             
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">No</th>
                    <th class="col-md-2 text-center">Codigo</th>
                    <th class="col-md-5 text-center">Unidad</th>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Cantidad</th>
                    
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
                                   
                            </td>
                          </tr>      
                        </tbody>
                      </table>
            <!-- /.box -->
          </div>
           <form role="form">
               <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Cantidad::</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Producto:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2" >
                   <label for="exampleFormControlSelect1">Estatus</label>
                    <textarea name=""></textarea>
                </div>
              </div>
              <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">
Costos Adicionales:</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" placeholder="0">
                </div>
               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
                </form>

        </div>
        <!-- /.col -->

      </div>


              </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

        
        <!-- /.col -->
      </div>
      </section>
      @endsection