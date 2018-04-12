@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
         Agregar Recepcion de Mercancia 
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detalles
</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-12">
                   <label for="exampleFormControlSelect1">Proveedor:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Nombre:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre del Proveedor">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">RFC:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Tipo de documento:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">No. de Documento:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Dias de Credito:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Fecha de Recepcion:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Fecha de Documento:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
               
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Moneda:</label>
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
                <br>
                <button type="submit" class="btn btn-primary">Siguiente</button>
              </div>
            </form>
          </div>

          <!-- /.box -->
           

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
      @endsection