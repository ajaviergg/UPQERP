@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
       Agregar Cuenta Nueva
      </h1>
      
    </section>
    <section class="content">
      <div class="row">        
        <div class="col-md-12">
          <div class="box box-primary">
            <form role="form" action="{{ action('FinanzasController@agregarCuenta') }}">
              <div class="box-body">
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Tipo:</label>
                    <select class="form-control" id="tipo" name="tipo">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Sucursal:</label>
                    <select class="form-control" id="sucursal" name="sucursal">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Banco:</label>
                    <select class="form-control" id="banco" name="banco">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo:</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"># Cuenta:</label>
                  <input type="text" class="form-control" id="cuenta" name="cuenta" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">CLABE:</label>
                  <input type="number" class="form-control" id="clabe" name="clabe" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Balance Inicial:</label>
                    <select class="form-control" id="balance_inicial" name="balance_inicial">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Fecha de Balance Inicial:</label>
                   <input type="date" class="form-control" id="fechabalance_inicial" name="fechabalance_inicial" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Moneda:</label>
                    <select class="form-control" id="moneda" name="moneda">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Descripcion:</label>
                    <textarea name="descripcion" id="descripcion" class="descripcion"></textarea>
              </div>
              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Guarda</button>
              </div>
            </form>
          </div>
    </div>
  </div>
</section>
     @endsection