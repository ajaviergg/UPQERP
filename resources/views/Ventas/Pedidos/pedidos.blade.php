@extends('layouts.app')
@section('content')

<section class="content-header">
      <h1>
        Pedidos
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Finanzas</a></li>
        <li class="active">Cuentas Por Cobrar</li>
      </ol>
    </section>

    
   <div class="col-md-12">
          <!-- Custom Tabs -->

          <div class="nav-tabs-custom">
            <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/perdidos/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==2)
                    <a href="{{ url('/perdidos/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
              <br>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Surtimiento vencido</a></li>
              <li><a href="#tab_2" data-toggle="tab">Surtimiento Futuro</a></li>
              <li><a href="#tab_3" data-toggle="tab">Histórico</a></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="row">
                  <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">Hoy </button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">Anterior</button>
                </div>
                
                
                </div>
                 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                                <div class="row">
                  <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">Mañana </button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">Todos</button>
                </div>
                
                
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_3">
<div class="row">
  <form action="CuentasCobrar_submit" method="get" accept-charset="utf-8">
                
                <div class="form-group col-md-2">
                  <label>Numero</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group col-md-2">
                  <label>Almacen</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

               <br>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Estatus</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label>Fecha Pedido</label>
                  <input type="date" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label></label>
                  <input type="date" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Vendedor</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Capturo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Palabra Clave</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
               
                
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buscar</button>
              </div>

              </form>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
             <div class="col-md-12">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="">#</th>
                    <th class="">Fecha Pedido</th>
                    <th class="">Cliente</th>
                    <th class="">Almacen</th>
                    <th class="">Destino</th>
                    <th class="">Comentarios</th>
                    <th class="">Estatus</th>

                    
                     </tr>
                      </thead>
                       <tbody>        
                      {{-- expr --}} 
                        <tr>
                          <td class=""></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr>      
                        </tbody>
                      </table>
            <!-- /.box -->
          </div>
          
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
 

              
     


 
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


</div></section>






@endsection