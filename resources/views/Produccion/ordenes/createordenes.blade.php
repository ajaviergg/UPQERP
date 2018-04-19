 @extends('layouts.app')
@section('content')
  <section class="content-header">
      <h1>
        Agregar Orden de Producción
      </h1>

    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">¿ Que vas a producir ?
</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('registrarOrden.uno')}}" method="post" >
              {!! csrf_field() !!}
              <div class="box-body">

                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Matriz</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect1">
                      @foreach($almacen as $value)
                        <option value="{{$value->id}}">{{$value->nombre}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Matriz</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="exampleFormControlSelect2">
                      @foreach($almacen as $value)
                        <option value="{{$value->id}}">{{$value->nombre}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Cantidad</label>
                  <input type="number" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" placeholder="Numero">
                </div>
               <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Producto</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect3">
                      @foreach($producto as $value)
                        <option value="{{$value->id}}">{{$value->titulo}}</option>
                      @endforeach
                    </select>
                </div>




              </div>
              <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Formula</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect4">
                      @foreach($formula as $value)
                        <option value="{{$value->id}}">{{$value->titulo}}</option>
                      @endforeach
                    </select>
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
