@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Almacenes
      </h1>
      <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/Inventarios/Lista/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==2)
                    <a href="{{ url('/Inventarios/Lista/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
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
              <h3 class="box-title">Buscar Almacenes</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="get" action="{{ url('admin/Inventarios/show') }}" enctype="multipart/form-data">
              <div class="box-body">


                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Sucursal</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect1">
                      @foreach($sucursal as $value)
                        <option value="{{$value->id}}">{{$value->nombre}}</option>
                      @endforeach
                    </select>
                </div>

              </div>




              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th >#</th>
                    <th>Nombre</th>
                    <th >Sucursal</th>
                    <th>Multi-Sucursal</th>
                    <th >Existencia publica</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody>
                 @foreach($orden as $value)
                        <tr>
                          <td >{{ $value->id }}</td>
                          <td>{{ $value->nombre }}</td>
                          <td>{{ $value->sucu }}</td>
                          <td>{{ $value->multisucursal }}</td>
                          <td>{{ $value->existencia_publica }}</td>
                          <td class="text-right"></td>
                          <td class="td-actions text-right">
                            <form action="{{ url('admin/Inventarios/delete') }}" method="get" enctype="multipart/form-data" >
                              <input type="hidden" name="key" value="{{ $value->id }}">
                                  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                  </button>
                            </form>
                            </td>
                          </tr>
                      @endforeach
                        </tbody>
                      </table>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div>

          <!-- Form Element sizes -->

      <!-- /.row -->
    </div></div></section>
    	@endsection
