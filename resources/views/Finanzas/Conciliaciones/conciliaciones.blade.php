@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        Conciliaciones
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Finanzas</a></li>
        <li class="active">Conciliaciones</li>
      </ol>
    </section>
    <div align="right">
   
   <button type="button" class="btn btn-info">+<br> Nueva</button>

   <br>
   
   </div>
   <div class="col-md-3">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Filtros</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->


            <div class="box-body">
              <div class="btn-group">
                  <button type="button" class="btn btn-info">Cuenta</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Caja Chica</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Buscar</a></li>
                  </ul>
                </div>

              <div class="btn-group">
             <button type="button" class="btn btn-info">Periodo</button>
             <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
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
              </ul>
            </div>

            
             <button type="button" class="btn btn-block btn-primary">
             <div class="col-md-3 col-sm-4">
               <i class="fa fa-fw fa-search">
               </i> Buscar</div></button>
            


          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="row">
        <div class="col-xs-12" align="left">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Conciliaciones</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Banco</th>
                  <th>Creacion</th>
                  <th>Usuario</th>
                  <th>Inicio de periodo</th>
                  <th>Fin de periodo</th>
                </tr>
                <tr>
                  <td></td>
                  <td>  </td>
                  <td></td>
                  <td><span class="label label-success"></span></td>
                  <td></td>
                </tr>
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="content-wrapper" style="min-height: 945.8px;">

    <!-- Main content -->
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
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Fecha: activate to sort column descending" style="width: 220.4px;">Fecha</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Concepto: activate to sort column ascending" style="width: 354px;">Concepto</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Monto: activate to sort column ascending" style="width: 148.4px;">Monto</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Balance: activate to sort column ascending" style="width: 174.8px;">Balance</th></tr>
                </thead>
                <tbody>
               
                
                
                
                <tr role="row" class="odd">
                  <td class="sorting_1"> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">19-03-2018</td>
                  <td>Ajuste Saldo Inicial</td>
                  <td>  </td>
                  <td>$0.00</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Fecha </th><th rowspan="1" colspan="1">Concepto</th><th rowspan="1" colspan="1">Monto</th><th rowspan="1" colspan="1">Balance</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>






  

  <!-- Control Sidebar -->
  

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


</div></section></div>

 @endsection