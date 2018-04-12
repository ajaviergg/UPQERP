@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Agregar Fórmula de Producción 
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
                
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Almacen:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Plantillas de minimos y maximos:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option value="Buscar almacenes"></option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sucursal:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option value="Buscar sucursal"></option>
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