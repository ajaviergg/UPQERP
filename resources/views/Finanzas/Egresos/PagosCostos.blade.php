 @extends('layouts.app')
@section('content')
  <section class="content-header">
      <h1>
        Pagar Compras 
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
                
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Proveedor</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Fecha</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Cuenta</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
               <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Referencia</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Coemntarios</label>
                    <textarea name=""></textarea>
                </div>
       

              </div>
              
              <!-- /.box-body -->

              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
@endsection