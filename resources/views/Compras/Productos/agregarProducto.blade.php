@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Agregar Producto
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
                    <form role="form" action="{{ url('admin/producto') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Codigo:</label>
                                <input type="text" class="form-control" name="codigo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Costo Inicial:</label>
                                <input type="number" class="form-control" name="costoInicial">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Costeo:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="costeo">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">Moneda:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="moneda">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Unidad de Medida</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="unidadMedida">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">Tipo:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">Descripcion:</label>
                                <textarea name="descripcion"></textarea>
                            </div>
                        </div>

                        <!-- /.box-body -->

                        <div class="box-header with-border">
                            <h3 class="box-title">Datos Opcionales
                            </h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">SKU:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="sku">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tiempo de surtido (dias):</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="surtido">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Volumen:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="volumen">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Peso:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="peso">
                            </div>

                            {{--<div class="form-group col-md-3">--}}
                                {{--<label for="exampleFormControlSelect1">I.V.A:</label>--}}
                                {{--<select class="form-control" id="exampleFormControlSelect1" name="iva">--}}
                                    {{--<option>1</option>--}}
                                    {{--<option>2</option>--}}
                                    {{--<option>3</option>--}}
                                    {{--<option>4</option>--}}
                                    {{--<option>5</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}

                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Tipo de Compras:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="tipo_compra">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">Categorias 1:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="categoria_n1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">Categorias 2:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="categoria_n2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">Categorias 3:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="categoria_n3">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Precios
                            </h3>
                        </div>

                        <div class="box-body">
                            <div class="tab-pane active" id="navbar-fixed-docs">
                                <table style="width: 100%;">
                                    <tbody><tr>
                                        <td colspan="4">
                                            <div class="alert alert-info">
                                                <span id="ContentPlaceHolder1_PricingInfo">Especifica el precio del producto para cada una de las listas de precios de la empresa. El precio se puede definir como un monto fijo o un margen en base al costo del producto.</span>
                                            </div>
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
                                                    <td>A</td>
                                                    <td>
                                                        <input name="valor" class="form-control" type="text" id="PriceListRP_ValueField_0" name="valor_lista">
                                                    </td>
                                                </tr>

                                                </tbody></table>

                                        </td>
                                        <td></td>
                                        <td>&nbsp;
                                        </td>
                                    </tr>


                                    </tbody></table>
                            </div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Almacenes
                            </h3>
                        </div>
                        <div class="box-body">

                            <table style="width: 100%;">
                                <tbody><tr>
                                    <td colspan="4">
                                        <div class="alert alert-info">
                                            Especifica cantidades mínimas, máximos, inventario inicial y la ubicación del producto para cada uno de los almacenes.
                                        </div>
                                        <div>
                                            <table class="table table-striped" cellspacing="0" id="ContentPlaceHolder1_GVWarehouses" style="width:100%;border-collapse:collapse;">
                                                <tbody><tr style="color:Black;font-weight:bold;">
                                                    <th scope="col">Almacén</th><th scope="col">Minimo</th><th scope="col">Máximo</th><th scope="col">Inventario Inicial</th><th scope="col">Ubicación</th><th scope="col">Visible</th>
                                                </tr><tr class="DataRow">
                                                    <td>
                                                        <span id="ContentPlaceHolder1_GVWarehouses_lblName_0">Matriz</span>
                                                    </td><td>
                                                        <input name="txtMin" type="text" value="0" id="GVWarehouses_txtMin_0">
                                                        <span id="Validator81_0" style="color:Red;visibility:hidden;">*</span>
                                                        <span id="CompareValidator1b_0" style="color:Red;visibility:hidden;">&gt;= 0</span>
                                                    </td><td>
                                                        <input name="txtMax" type="text" value="0" id="GVWarehouses_txtMax_0">
                                                        <span id="RequiredFieldValidator82_0" style="color:Red;visibility:hidden;">*</span>
                                                        <span id="CompareValidator1a_0" style="color:Red;visibility:hidden;">&gt;= 0</span>
                                                    </td><td>
                                                        <input name="txtInitQty" type="text" value="0" id="GVWarehouses_txtInitQty_0">
                                                        <span id="RequiredFieldValidator8_0" style="color:Red;visibility:hidden;">*</span>
                                                        <span id="CompareValidator1_0" style="color:Red;visibility:hidden;">&gt;= 0</span>
                                                    </td><td>
                                                        <input name="txtLoc" type="text" value="0" id="GVWarehouses_txtLoc_0">
                                                    </td><td>
                                                        <input id="VisibleCB_0" type="checkbox" name="cVisibleCB" checked="checked">
                                                    </td>
                                                </tr><tr>
                                                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                    </td>
                                </tr>

                                </tbody></table>
                        </div>


                        <div class="box-footer">
                            <br>
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                        </div>
                    </form>
                </div>

                <!-- /.box -->


                <!-- Form Element sizes -->

                <!-- /.row -->
            </div></div></section>
@endsection