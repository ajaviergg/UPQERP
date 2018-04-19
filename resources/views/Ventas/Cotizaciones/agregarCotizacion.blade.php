@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Cotización Nueva 
      </h1>
      
    </section>
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Tipo Cliente</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1"></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Empresa...">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1"></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefono...">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1"></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contacto...">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1"></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email...">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Lista de precio</label>
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
                   <label for="exampleFormControlSelect1">Moneda</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                 <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Serie</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
             
              <!-- /.box-body -->

              
            
          </div>
          <!-- /.box -->
          

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
    <section class="content">
<div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Producto</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Conceptos de Venta</a></li>
              
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
              <div class="box-body">
                <div class="form-group col-md-5">
                  <label for="exampleInputEmail1">concepto:</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Cantidad:</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                </div>
                <div class="form-group col-md-5">
                   <label for="exampleFormControlSelect1">Precio:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
            <div class="col-md-12">
              
          
               <div class="form-group col-md-5">
                  <label for="exampleInputEmail1">concepto:</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Cantidad:</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                </div>
                <div class="form-group col-md-5">
                   <label for="exampleFormControlSelect1">Precio:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
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