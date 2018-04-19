@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
       Agregar Prospecto

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
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Compania:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                
                
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Telefono:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Extencion:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Comentarios:</label>
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