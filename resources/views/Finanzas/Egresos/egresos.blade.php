@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Ordenes de Compra de Costo 
      </h1>
      <div class="input-group input-group-sm col-md-9" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/Egresos/PagosGastos') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Registrar Pagos Gastos</span> </a>
                   <a href="{{ url('admin/Egresos/PagosCostos') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Registrar Pagos Costos</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==5)
                    <a href="{{ url('/Egresos/PagosGastos') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    <a href="{{ url('/Egresos/PagosCostos') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Registrar Pagos Costos</span> </a>
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
              <h3 class="box-title">Buscar Ordenes</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Numero</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
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
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Proveedor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
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
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Referencia</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Fecha</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
               <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Sucursal</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
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
                    
                    <th class="">Fecha</th>
                    <th class="">Documento</th>
                    <th class="text-center">RFC</th>
                    <th class="text-center">Proveedor</th>
                    <th class="text-center">Documentos</th>
                    <th class="text-center">Cuenta</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Referencia</th>
                    <th class="text-center">Ret I.V.A</th>
                    <th class="text-center">Ret I.S.R</th>
                    <th class="text-center">I.V.A</th>
                    <th class="text-center">IEPS</th>
                    <th class="text-center">Total</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody>       
                        <tr>
                          <td class="text-center"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-right"></td>
                          <td class="td-actions text-right">             
                            <form action="" method="POST">
                              
                                   <a href="" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                  </a>

                                  <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                  </button>    
                            </form>            
                            </td>
                          </tr>      
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