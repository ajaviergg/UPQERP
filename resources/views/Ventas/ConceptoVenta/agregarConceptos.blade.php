@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Agregar Concepto de Venta 
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
            <form role="form">
              <div class="box-body">
                
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Codigo:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Unidad de Medida:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Unidad CFDI:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Clave de CFDI:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                
               <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Moneda:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Unidad de Medida</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <<div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Categoria 1</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                
               
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Categoria 2</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Categoria 3</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Cuenta contable:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
              </div>
             
              <!-- /.box-body -->
<br>

               <div class="box-header with-border">
              <h3 class="box-title">Precios
</h3>
            </div>
            <div class="tab-pane active" id="navbar-fixed-docs">
        <table style="width: 100%; max-width: 1000px;">
          <tbody><tr>
            <td class="tdTitle" colspan="4">Estrategia de precios:
        <select name="ctl00$ContentPlaceHolder1$PriceDDL" onchange="Page_BlockSubmit = false;setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$PriceDDL\',\'\')', 0)" id="ContentPlaceHolder1_PriceDDL" style="width:150px;">
  <option selected="selected" value="0">Listas</option>
  <option value="1">Volumen</option>
  <option value="2">Variable</option>

</select>
              &nbsp;
        &nbsp;
        Tipo:
        <select name="ctl00$ContentPlaceHolder1$PriceTypeDDL" onchange="Page_BlockSubmit = false;setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$PriceTypeDDL\',\'\')', 0)" id="ContentPlaceHolder1_PriceTypeDDL" style="width:150px;">
  <option selected="selected" value="0">Monto</option>

</select>

            </td>
          </tr>
          <tr>
            <td colspan="2" valign="top">
              <table width="300" class="table table-striped">
                
                    <tbody><tr style="background-color: #EBEBEB; color: #000000">
                      <td>Nombre</td>
                      <td>Valor</td>
                    </tr>
                  
                    <tr>
                      <td>
                        <input type="hidden" name="ctl00$ContentPlaceHolder1$PriceListRP$ctl01$IDField" id="ContentPlaceHolder1_PriceListRP_IDField_0" value="5abf49b8-c0a2-4637-bbb9-b02e07734eb7">
                        B</td>
                      <td>
                        <input name="ctl00$ContentPlaceHolder1$PriceListRP$ctl01$ValueField" type="text" id="ContentPlaceHolder1_PriceListRP_ValueField_0" style="width:100px;">
                        <span id="ContentPlaceHolder1_PriceListRP_RequiredFieldValidator8_0" style="color:Red;visibility:hidden;">*</span>
                        <span id="ContentPlaceHolder1_PriceListRP_CompareValidator1_0" style="color:Red;visibility:hidden;">&gt; 0</span>

                      </td>
                    </tr>
                  
              </tbody></table>


              



            </td>
            <td align="right">&nbsp;
            </td>
            
          </tr>
        </tbody></table>
      </div>
             

            
              
            


              <div class="box-footer">
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>

          <!-- /.box -->
           

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
      @endsection