@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
       Agregar Cuenta Nueva
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ action('FinanzasController@agregarCuenta') }}">
              <div class="box-body">
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Tipo:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Sucursal:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Banco:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"># Cuenta:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                
                
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">CLABE:</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Balance Inicial:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Fecha de Balance Inicial:</label>
                   <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
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
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Descripcion:</label>
                    <textarea name=""></textarea>
              </div>
             
              <!-- /.box-body -->

             

            


              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Guarda</button>
              </div>
            </form>
          </div>

          <!-- /.box -->
           

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
     @endsection