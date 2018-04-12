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
                  <label for="exampleInputEmail1">Razon Social:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre Comercial:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">RFC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Requiere Orden de Compra:</label>
                   <input id="ContentPlaceHolder1_chkTimbrable" type="checkbox" name="#" checked="checked">
                </div>
                
               <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Disas de Credito:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Monto de Credito:</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Correo Electronico:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Sucursal:</label>
                   <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Proveedor para Gastos:</label>
                   <input id="ContentPlaceHolder1_chkTimbrable" type="checkbox" name="#" checked="checked">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Proveedor para Compras:</label>
                   <input id="ContentPlaceHolder1_chkTimbrable" type="checkbox" name="#" checked="checked">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Telefonos:</label>
                   <textarea name=""></textarea>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Comentarios:</label>
                   <textarea name=""></textarea>
                </div>

              </div>
             
              <!-- /.box-body -->

              <div class="box-header with-border">
              <h3 class="box-title">Datos Opcionales
</h3>
            </div>

            <div class="box-body">
                
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Pais:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
               <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Estado:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Municipio:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Localidad:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Calle:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Colonia:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Codigo Postal:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">No. Exteriro:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">No. Interior:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Referencia Calle:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Referencia Calle:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
              </div>
             


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