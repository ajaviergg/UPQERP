 @extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
  // Refresca Producto: Refresco la Lista de Productos dentro de la Tabla
  // Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un producto al usuario
  // Sino habilito el boton Guardar para que pueda Guardar
    function RefrescaProducto(){
        var ip = [];
        var i = 0;
        $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar
        $('.iProduct').each(function(index, element) {
            i++;
            ip.push({ id_pro : $(this).val() });
        });
        // Si la lista de Productos no es vacia Habilito el Boton Guardar
        if (i > 0) {
            $('#guardar').removeAttr('disabled','disabled');
        }
        var ipt=JSON.stringify(ip); //Convierto la Lista de Productos a un JSON para procesarlo en tu controlador
        $('#ListaPro').val(encodeURIComponent(ipt));
    }
       function agregarProducto() {

            var sel = $('#pro_id').find(':selected').val(); //Capturo el Value del Producto
            var text = $('#pro_id').find(':selected').text();//Capturo el Nombre del Producto- Texto dentro del Select
           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iProduct" >' + sel + '</td>';
            newtr = newtr + '<td> <input  class="form-control" id="1" name="precio" value="23" required /></td>';
            newtr = newtr + '<td><input  class="form-control" id="2" name="cantidad" value="2" required /></td>';
            newtr = newtr + '<td><input  class="form-control"  id="3" name="total" value="46" required /></td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="fa fa-times"></i></button></td></tr>';
            
            $('#ProSelected').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=ProSelected
            
            RefrescaProducto();//Refresco Productos
                
            $('.remove-item').off().click(function(e) {
                $(this).parent('td').parent('tr').remove(); //En accion elimino el Producto de la Tabla
                if ($('#ProSelected tr.item').length == 0)
                    $('#ProSelected .no-item').slideDown(300); 
                RefrescaProducto();
            });        
           $('.iProduct').off().change(function(e) {
                RefrescaProducto();
           });
    }
</script>
  <section class="content-header">
      <h1>
        Pagar Facturas
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Cliente</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
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
                  <label for="exampleInputEmail1">Fecha</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
               <div class="form-group col-md-4">
                   <label for="exampleFormControlSelect1">Forma</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
        
            
       

              </div>
              <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Referencia</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Comentarios</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
              <!-- /.box-body -->




<br>
<br>
    <div class="container">
    
        <h2>Facturas</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Agregar</button>
          <input type="hidden" id="ListaPro" name="ListaPro" value="" required />
        <table id="TablaPro" class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Vencimiento</th>
                    <th>Pendiente</th>
                    <th>Pago</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody id="ProSelected"><!--Ingreso un id al tbody-->
                <tr>
             
                </tr>
            </tbody>
        </table>
<!--Agregue un boton en caso de desear enviar los productos para ser procesados-->
                <div class="form-group">
                    <button type="submit" id="guardar" name= "guardar" class="btn btn-lg btn-default pull-right">Guardar</button>
                </div>
    </from>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar producto a la lista</h4>
                    </div>
                    <div class="modal-body">
                         <div class="form-group">
                                    <label>Producto</label>
                                <select class="selectpicker form-control" id="pro_id" name="pro_id" data-width='100%' >
                                        <option value="Lentes">Lentes</option>
                                        <option value="Casco">Casco</option>
                                        <option value="Gorra">Gorra</option>
                                </select>
                </div>
                    </div>
                    <div class="modal-footer">
                        <!--Uso la funcion onclick para llamar a la funcion en javascript-->
                        <button type="button" onclick="agregarProducto()" class="btn btn-default" data-dismiss="modal">Agregar</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
              
            
          </div>
          <!-- /.box -->
          

          <!-- Form Element sizes -->
          
      <!-- /.row -->
    </div></div></section>
    
@endsection