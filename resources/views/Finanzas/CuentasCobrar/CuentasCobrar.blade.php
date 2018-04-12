@extends('layouts.app')
@section('content')

<section class="content-header">
      <h1>
        Cuentas Por Cobrar
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Finanzas</a></li>
        <li class="active">Cuentas Por Cobrar</li>
      </ol>
    </section>
    <div align="right">
    
     <button type="button" class="btn btn-info">+<br> Nueva</button>

      <br>
    
   </div>
   <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Vencidas</a></li>
              <li><a href="#tab_2" data-toggle="tab">Al Corriente</a></li>
              <li><a href="#tab_3" data-toggle="tab">Historico</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                
                    <button type="button" class="btn btn-block btn-success btn-lg">1 - 30 Dias <br>$0.00 </button>
                  
                
                    <button type="button" class="btn btn-block btn-success btn-lg">31 - 60 Dias <br>$0.00</button>
                  
                
                    <button type="button" class="btn btn-block btn-success btn-lg">61 - 90 Dias <br>$0.00</button>
                  
                
                    <button type="button" class="btn btn-block btn-success btn-lg">91 + Dias <br>$0.00</button>
                  
                 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
                    <button type="button" class="btn btn-block btn-success btn-lg">1 - 30 Dias <br>$0.00 </button>
                  
                
                    <button type="button" class="btn btn-block btn-success btn-lg">31 - 60 Dias <br>$0.00</button>
                  
                
                    <button type="button" class="btn btn-block btn-success btn-lg">61 - 90 Dias <br>$0.00</button>
                  
                
                    <button type="button" class="btn btn-block btn-success btn-lg">91 + Dias <br>$0.00</button>
                  
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_3">

                <div class="form-group">
                  <label>Numero</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Cliente</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Palabra clave</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

               <br>
                <div class="btn-group">
                  <button type="button" class="btn btn-default">Almacen</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Matriz</a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li class="divider"></li>
                    <li><a href="#"> </a></li>
                  </ul>
                  </div>


                  <div class="btn-group">
                  <button type="button" class="btn btn-default">Sucursal</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Todas</a></li>
                    <li><a href="#">Matriz</a></li>
                    <li><a href="#"> </a></li>
                    <li class="divider"></li>
                    <li><a href="#"> </a></li>
                  </ul>
                  </div>

                  <div class="btn-group">
                  <button type="button" class="btn btn-default">Tipo de Documento</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Factura</a></li>
                    <li><a href="#">Remision</a></li>
                    <li><a href="#"> </a></li>
                    <li class="divider"></li>
                    <li><a href="#"> </a></li>
                  </ul>
                  </div>

                  <div class="btn-group">
                  <button type="button" class="btn btn-default">Estatus</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Activa</a></li>
                    <li><a href="#">Pagada</a></li>
                    <li><a href="#">Cancelada</a></li>
                    <li class="divider"></li>
                    <li><a href="#"> </a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <button type="button" class="btn btn-default">Vendedor</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Jose Ramirez</a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li class="divider"></li>
                    <li><a href="#"> </a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <button type="button" class="btn btn-default">Fecha de Emision</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Hoy</a></li>
                    <li><a href="#">Ayer</a></li>
                    <li><a href="#">Esta Semana (Dom - Hoy)</a></li>
                    <li><a href="#">Últimos 7 Días</a></li>
                    <li><a href="#">Últimos 14 Días/a&gt;</a></li><a href="#">
                    </a><li><a href="#"></a><a href="#">Este Mes</a></li>
                    <li><a href="#">Últimos 30 Días</a></li>
                    <li><a href="#">Mes Pasado</a></li>
                    <li><a href="#">Este Año</a></li>
                    <li><a href="#">Rango Personalizado</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <button type="button" class="btn btn-default">Fecha de Vencimiento</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Hoy</a></li>
                    <li><a href="#">Ayer</a></li>
                    <li><a href="#">Esta Semana (Dom - Hoy)</a></li>
                    <li><a href="#">Últimos 7 Días</a></li>
                    <li><a href="#">Últimos 14 Días/a&gt;</a></li><a href="#">
                    </a><li><a href="#"></a><a href="#">Este Mes</a></li>
                    <li><a href="#">Últimos 30 Días</a></li>
                    <li><a href="#">Mes Pasado</a></li>
                    <li><a href="#">Este Año</a></li>
                    <li><a href="#">Rango Personalizado</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
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
            <div class="box-header">
              <h3 class="box-title">Conciliaciones</h3>
            </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Movimientos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 17.2px;">#</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tipo documento: activate to sort column ascending" style="width: 150.8px;">Tipo documento</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 58.8px;">Fecha</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Cliente: activate to sort column ascending" style="width: 69.2px;">Cliente</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Sucursal: activate to sort column ascending" style="width: 82.8px;">Sucursal</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Almacen: activate to sort column ascending" style="width: 83.6px;">Almacen</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Vencimiento: activate to sort column ascending" style="width: 118px;">Vencimiento</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Impuestos: activate to sort column ascending" style="width: 99.6px;">Impuestos</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Subtotal: activate to sort column ascending" style="width: 82px;">Subtotal</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 50.8px;">Total</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Pendiente: activate to sort column ascending" style="width: 98px;">Pendiente</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Estatus: activate to sort column ascending" style="width: 73.2px;">Estatus</th></tr>
                </thead>
                <tbody>
               
                
                
                <tr role="row" class="odd">
                  <td class="sorting_1"> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td>$0.00</td>
                  <td>$0.00</td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">#</th><th rowspan="1" colspan="1">Tipo documento</th><th rowspan="1" colspan="1">Fecha</th><th rowspan="1" colspan="1">Cliente</th><th rowspan="1" colspan="1">Sucursal</th><th rowspan="1" colspan="1">Almacen</th><th rowspan="1" colspan="1">Vencimiento</th><th rowspan="1" colspan="1">Impuestos</th><th rowspan="1" colspan="1">Subtotal</th><th rowspan="1" colspan="1">Total</th><th rowspan="1" colspan="1">Pendiente</th><th rowspan="1" colspan="1">Estatus</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
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