@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        Cotizacion
      </h1>
      
    </section>
<div style="padding: 15px;">
        
<span ng-init="model = {&quot;Employees&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;3f8a7905-f08b-4a80-9539-9bbdda4d2a09&quot;,&quot;Text&quot;:&quot;pablo Briones Almaguer&quot;}],&quot;FirstDayOfMonth&quot;:&quot;2018-03-01T00:00:00&quot;,&quot;SalesMen&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;3f8a7905-f08b-4a80-9539-9bbdda4d2a09&quot;,&quot;Text&quot;:&quot;pablo Briones Almaguer&quot;}],&quot;Statuses&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;0&quot;,&quot;Text&quot;:&quot;Activo&quot;},{&quot;Value&quot;:&quot;1&quot;,&quot;Text&quot;:&quot;Surtido&quot;},{&quot;Value&quot;:&quot;2&quot;,&quot;Text&quot;:&quot;Cancelado&quot;}],&quot;Warehouses&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;77b0bf58-5a7a-4c71-9cb2-f073e3d72bd8&quot;,&quot;Text&quot;:&quot;Matriz&quot;}]}; filter.CreationDate1 = model.FirstDayOfMonth; filter.DateFilterType = 1"></span>
<div ng-controller="OrderListListCtrl" class="ng-scope">
  <page-header title="Pedidos" image="/Assets/img/AgregarOrdenesCompra.png" class="ng-isolate-scope"><div class="row">
  <div class="col-lg-5">
    <span class="Maintitle">
      
    </span>
  </div>

  <div class="col-lg-7" ng-transclude="">
   
    <div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Agregar" action="search" color-class="btn-primary" icon="fa-plus" url="https://erp.bind.com.mx//Sales/Orders/AddOrderV2.aspx">

  <a class="btn btnActions btn-primary" ng-click="action()" href="https://erp.bind.com.mx//Sales/Orders/AddOrderV2.aspx" target="">
    <i class="fa fa-2x fa-plus"></i>
    <span class="nav-label ng-binding"><br>Agregar</span>
  </a>

  

  
</div>
   
    
  </div>
</div>

</page-header>
  <div class="panel-heading">
    <div class="panel-options">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1" data-toggle="tab" aria-expanded="true" ng-click="TodayButtomClick()">Surtimiento vencido</a></li>
        <li class=""><a href="#tab-2" data-toggle="tab" ng-click="TomorrowButtonClick()" aria-expanded="false">Surtimiento Futuro</a></li>
        <li class=""><a href="#tab-3" data-toggle="tab" ng-click="NormalizeDate()" aria-expanded="false">Histórico</a></li>
      </ul>
    </div>
  </div>
  <div class="panel-body">
    <div class="tab-content">
      <div class="tab-pane active" id="tab-1">
        <a href="#" ng-show="filter.DateFilterType === 1" class="btn btn-sm btn-success"><h3>Hoy</h3></a>
        <a href="#" ng-click="TodayButtomClick()" ng-show="filter.DateFilterType !== 1" class="btn btn-sm btn-gray ng-hide"><h3>Hoy</h3></a>
        <a href="#" ng-show="filter.DateFilterType === 2" class="btn btn-sm btn-success ng-hide"><h3>Anterior</h3></a>
        <a href="#" ng-click="BeforeButtomClick()" ng-show="filter.DateFilterType !== 2" class="btn btn-sm btn-gray"><h3>Anterior</h3></a>
      </div>
      <div class="tab-pane" id="tab-2">
        <a href="#" ng-show="filter.DateFilterType === 3" class="btn btn-sm btn-success ng-hide"><h3>Mañana</h3></a>
        <a href="#" ng-click="TomorrowButtonClick()" ng-show="filter.DateFilterType !== 3" class="btn btn-sm btn-gray"><h3>Mañana</h3></a>
        <a href="#" ng-show="filter.DateFilterType === 4" class="btn btn-sm btn-success ng-hide"><h3>Todos</h3></a>
        <a href="#" ng-click="AllFutureButtomClick()" ng-show="filter.DateFilterType !== 4" class="btn btn-sm btn-gray"><h3>Todos</h3></a>
      </div>
      <div class="tab-pane" id="tab-3">
        <grid-filter class="ng-isolate-scope"><div class="filterBox row">
  <span class="pull-right">

    <a class="collapse-link" ng-show="!element.isCollapsed" ng-click="element.isCollapsed = !element.isCollapsed">
      <i class="fa fa-chevron-up"></i>
    </a>
    <a class="collapse-link ng-hide" ng-show="element.isCollapsed" ng-click="element.isCollapsed = !element.isCollapsed">
      <i class="fa fa-chevron-down"></i>
    </a>
  </span>
  <div style="max-width: 1400px; padding-left: 15px;" ng-show="!element.isCollapsed">
    <div class="row" ng-transclude="">
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Numero" model="filter.Number">
  Numero
  <span class="input-group " model="model">
    
    <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
  </span>
</div>
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Almacen" model="filter.WarehouseID" items="model.Warehouses">
  Almacen
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="Matriz" value="string:77b0bf58-5a7a-4c71-9cb2-f073e3d72bd8">Matriz</option></select>

</div>
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Estatus" model="filter.Status" items="model.Statuses">
  Estatus
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="Activo" value="string:0">Activo</option><option label="Surtido" value="string:1">Surtido</option><option label="Cancelado" value="string:2">Cancelado</option></select>

</div>
          <gf-date-range title="Fecha de pedido" start="filter.OrderDate1" end="filter.OrderDate2" class="ng-scope ng-isolate-scope">

<div class="col-xs-6 col-sm-4 col-lg-2 ng-binding">
  Fecha de pedido
 
  <form-date-range title="Fecha de pedido" start="start" end="end" placeholder="" class="ng-isolate-scope">


<input clearable="true" date-range-picker="" class="form-control input-sm m-b-xs date-picker ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="" type="text" options="opts" ng-model="datePicker.date" readonly="readonly"></form-date-range>
</div>
</gf-date-range>
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Vendedor" model="filter.SalesMenID" items="model.SalesMen">
  Vendedor
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="pablo Briones Almaguer" value="string:3f8a7905-f08b-4a80-9539-9bbdda4d2a09">pablo Briones Almaguer</option></select>

</div>
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Capturó" model="filter.EmployeeID" items="model.Employees">
  Capturó
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="pablo Briones Almaguer" value="string:3f8a7905-f08b-4a80-9539-9bbdda4d2a09">pablo Briones Almaguer</option></select>

</div>
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Palabra clave" model="filter.SearchTerm">
  Palabra clave
  <span class="input-group " model="model">
    
    <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
  </span>
</div>
          <div class="col-xs-6 col-sm-4 col-lg-2 ng-scope ng-isolate-scope" title="Actualizar cada minuto" model="liveActionCheckbox" ng-click="turnLiveAction()">
  <div class="form-group ng-binding">
    Actualizar cada minuto<br>
    <input type="checkbox" ng-model="model" class="ng-pristine ng-untouched ng-valid ng-empty">
  </div>
</div>
          <div class="col-xs-3 col-sm-2 col-lg-1 pull-right ng-scope ng-isolate-scope" title="Buscar" search="search">
  <br>
  <button class="btn btn-primary  btn-sm pull-right" style="margin-left: 5px;" ng-click="click()">Buscar <i class="fa fa-search"></i></button>
</div>
        </div>
  </div>
  <div ng-show="element.isCollapsed" ng-click="element.isCollapsed = false" class="ng-hide">
    <span style="color:#438eb9; font-size:16px;">
      <i class="fa fa-filter"></i> Filtros
    </span>
  </div>

</div>
</grid-filter>
      </div>
    </div>
  </div>
  <div id="wrapper" main-cols="12" side-cols="0" class="ng-isolate-scope">
 
  <div id="main-wrapper" class="col-md-12 col-xs-12">

   
    <div ng-transclude="gvpMain"><div class="ng-scope ng-isolate-scope">
  <div ng-transclude="">
      <div class="row ng-scope ng-isolate-scope" grid-view-factory="gridViewFactory">
  <table ng-show="!processing" class="table table-striped bind-table-hover">
    <thead>
      <tr ng-transclude="gvHeaderColumn"><th ng-style="{ width: width }" field-name="Number" width="80px" class="ng-scope ng-isolate-scope" style="width: 80px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">#</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="OrderDate" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Fecha Pedido</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="ClientName" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Cliente</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="Warehouse" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Almacén</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Destino</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Comentarios</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="Status" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Estatus</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th></tr>

    </thead>
    <tbody ng-transclude="gvRow"><!-- ngRepeat: i in gridViewFactory.items track by $index --></tbody>
  </table>
  <div style="position: relative; width: 100px; height: 100px; left: 50%; top: 50%;" ng-show="processing" class="ng-hide">
    <svg class="circular">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
    </div>
  <div ng-show="processing" style="margin: 0 auto; width:100px;" class="ng-hide">
    <svg class="circular">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div></div>
  </div>
  <div id="sidebar-wrapper" class="col-md-0 col-xs-12 pull-right">
    <div id="sidebar">
      <div ng-transclude="gvpSidePanel"><gvp-side-panel processing="processing" class="ng-scope ng-isolate-scope">

<div>
  <div ng-transclude="">
    </div>
  <div class="loader ng-hide" ng-show="processing" style="margin-top: 30px;">
    <svg class="circular">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
</gvp-side-panel></div>
    </div>
  </div>
</div>
  <div class="row ng-isolate-scope" grid-view-factory="gridViewFactory">
  <div class="pull-right">
    <ul class="pagination" style="margin:0;">
      <li style="float:left; ">
        <span style="margin-right:10px;" class="ng-binding"> 0 Resultados</span>
      </li>
      <li ng-class="gridViewFactory.prevPageDisabled() ? 'disabled': ''" class="disabled">
        <a ng-click="gridViewFactory.setPage(0)">Primero</a>
      </li>
      <li ng-class="gridViewFactory.prevPageDisabled() ? 'disabled': ''" class="disabled">
        <a ng-click="gridViewFactory.prevPage()">&lt;&lt;</a>
      </li>
      <!-- ngRepeat: n in gridViewFactory.rangePages() -->
      <li ng-class="gridViewFactory.nextPageDisabled() ?  'disabled': ''">
        <a ng-click="gridViewFactory.nextPage()">&gt;&gt;</a>
      </li>
      <li ng-class="gridViewFactory.nextPageDisabled() ?  'disabled': ''">
        <a ng-click="gridViewFactory.setPage(gridViewFactory.pagination.TotalServerPages - 1)">Último</a>
      </li>
     
      <li style="width: 100px;">
        <select style="width: 65px; position: relative; float: left;  margin-left: 15px;" ng-change="gridViewFactory.changePageSize()" ng-model="gridViewFactory.pagination.ItemsPerPage" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-not-empty" ng-options="item for item in gridViewFactory.paginationOptions"><option label="8" value="number:8">8</option><option label="10" value="number:10">10</option><option label="12" value="number:12" selected="selected">12</option><option label="20" value="number:20">20</option><option label="50" value="number:50">50</option></select>
      </li>
    </ul>
  </div>
</div>
  <modal title="Cancelar pedido - " error="cancelError" name="deleteOrderModal" close-on-succes="true" action="deleteOrders" argument="selectedOrder.ID" class="ng-isolate-scope">
<div class="modal fade" id="deleteOrderModal" tabindex="-1" role="dialog">
  <div class="modal-dialog " style="">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ng-binding">Cancelar pedido - </h4>
      </div>
      <div class="modal-body">
        <div ng-transclude=""><span class="ng-scope">
    ¿Estás seguro que deseas cancelar el pedido?
  </span></div>
        <br>
        <div class="alert alert-danger no-margins no-top-bottom-padding text-center ng-hide" ng-show="error">
          <h5 class="no-margins"><i class="fa fa-2x fa-times-circle"></i> <label style="vertical-align: super" class="ng-binding"></label></h5>
        </div>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-show="!hideCancel" ng-click="onCancel()">No</button>
        <button type="button" class="btn btn-danger ng-binding" ng-show="!hideOk" ng-click="onClose()">Sí</button>
       
      </div>
    </div>
  </div>
</div>
</modal>
</div>

      </div>
      @endsection