@extends('layouts.app')
@section('content')

<section class="content-header">
      <h1>
        Cuentas Por Pagar
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
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Vencidas</a></li>
              <li><a href="#tab_2" data-toggle="tab">Al Corriente</a></li>
              <li><a href="#tab_3" data-toggle="tab">Historico</a></li>
              
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="row">
                  <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">1 - 30 Dias <br>$0.00 </button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">31 - 60 Dias <br>$0.00</button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">61 - 90 Dias <br>$0.00</button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">91 + Dias <br>$0.00</button>
                </div>
                </div>
                 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                                <div class="row">
                  <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">1 - 30 Dias <br>$0.00 </button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">31 - 60 Dias <br>$0.00</button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">61 - 90 Dias <br>$0.00</button>
                </div>
                <div class="form-group col-md-2">
                   <button type="button" class="btn btn-block btn-success ">91 + Dias <br>$0.00</button>
                </div>
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_3">
<div class="row">
  <form action="CuentasCobrar_submit" method="get" accept-charset="utf-8">
                
                <div class="form-group col-md-4">
                  <label>Numero</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group col-md-4">
                  <label>Proveedor</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

               

                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Almacen</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div><div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Tipo documento</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div><div class="form-group col-md-4">
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
                  <label for="exampleFormControlSelect1">Fecha de Emision</label>
                  <input type="date" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1"></label>
                    <input type="date" class="form-control" placeholder="">
                </div> 
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Fecha de Emision</label>
                  <input type="date" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1"></label>
                    <input type="date" class="form-control" placeholder="">
                </div> 
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Sucursal</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Palabra clave</label>
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
        






@endsection