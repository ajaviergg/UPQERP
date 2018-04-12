@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
         Recepciones de Mercancia
      </h1>
      <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/Inventarios/Recepcion/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==2)
                    <a href="{{ url('/Inventarios/Recepcion/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
              <br>
    </section>
    <section class="content">
    	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-1">
                  <label for="exampleInputEmail1">creacion</label>
                </div>
                <div class="form-group col-md-2">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                 <div class="form-group col-md-2">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-3">
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
                   <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-1">
                  <label for="exampleInputEmail1">Recepcion</label>
                </div>
                <div class="form-group col-md-2">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                 <div class="form-group col-md-2">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-3">
                   <label for="exampleFormControlSelect1">Estatus</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Numero</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                 <div class="form-group col-md-1">
                  <label for="exampleInputEmail1">Fecha Doc</label>
                </div>
                <div class="form-group col-md-2">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                 <div class="form-group col-md-2">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">No. de Documento</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>

              </div>
              
        
        
        
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          
          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
    	@endsection