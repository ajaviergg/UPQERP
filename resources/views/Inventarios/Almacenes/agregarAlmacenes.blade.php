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
            <form  action="{{ url('admin/Inventarios') }}" action="POST" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="box-body">

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Almacen:</label>
                  <input type="text" class="form-control" name="almacen" id="almacen" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo:</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Plantillas de minimos y maximos:</label>
                    <select class="form-control" id="minimosMaximos" name="minimosMaximos">
                      <option value="Buscar almacenes">Seleccione Plantillas de minimos y maximos</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sucursal:</label>
                    <select class="form-control" id="sucursal" name="sucursal">
                      <option value="Buscar sucursal">Seleccione Sucursal.....</option>
                      @foreach($sucursal as $value)
                        <option value="{{$value->id}}">{{$value->nombre}}</option>
                      @endforeach
                    </select>
                </div>

              </div>

              <!-- /.box-body -->





              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>

          <!-- /.box -->


          <!-- Form Element sizes -->

      <!-- /.row -->
    </div></div></section>
      @endsection
