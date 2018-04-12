@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        Cotizacion
      </h1>
      
    </section>
<div ng-controller="QuotesListCtrl" ng-init="model = {&quot;Locations&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;Todas&quot;},{&quot;Value&quot;:&quot;7fdbd265-242d-4ecf-ad2c-21eb8441bb73&quot;,&quot;Text&quot;:&quot;Matriz&quot;}],&quot;Status&quot;:[{&quot;Value&quot;:&quot;-1&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;0&quot;,&quot;Text&quot;:&quot;Activa&quot;},{&quot;Value&quot;:&quot;1&quot;,&quot;Text&quot;:&quot;Cancelada&quot;}],&quot;Employees&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;3f8a7905-f08b-4a80-9539-9bbdda4d2a09&quot;,&quot;Text&quot;:&quot;pablo Briones Almaguer&quot;}],&quot;AllowAddQuote&quot;:true}; legacyUrl=ViewBag.LayoutVM.LegacyURL" class="ng-scope">

  <page-header title="Cotizaciones" image="/Assets/img/ListadoOrdenesCompra.png" class="ng-isolate-scope"><div class="row">
  <div class="col-lg-5">
    <span class="Maintitle">
     
    </span>
  </div>

  <div class="col-lg-7" ng-transclude="">
    
    <!-- ngIf: model.AllowAddQuote --><div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Nuevo" action="search" color-class="btn-primary" icon="fa-plus" url="https://erp.bind.com.mx//Sales/Quotes/AddQuoteV2.aspx" ng-if="model.AllowAddQuote">

  <a class="btn btnActions btn-primary" ng-click="action()" href="https://erp.bind.com.mx//Sales/Quotes/AddQuoteV2.aspx" target="">
    <i class="fa fa-2x fa-plus"></i>
    <span class="nav-label ng-binding"><br>Nuevo</span>
  </a>

  

  
</div><!-- end ngIf: model.AllowAddQuote -->

  </div>
</div>

</page-header>

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
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Cliente" model="filter.ClientName">
  Cliente
  <span class="input-group " model="model">
    
    <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
  </span>
</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Capturó" model="filter.EmployeeID" items="model.Employees">
  Capturó
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="pablo Briones Almaguer" value="string:3f8a7905-f08b-4a80-9539-9bbdda4d2a09">pablo Briones Almaguer</option></select>

</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">
  Sucursal
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option label="Todas" value="string:" selected="selected">Todas</option><option label="Matriz" value="string:7fdbd265-242d-4ecf-ad2c-21eb8441bb73">Matriz</option></select>

</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Fecha (Inicio)" model="filter.StartDate" ph="Desde...">
  Fecha (Inicio)
  <input custom-date-picker="" class="form-control input-sm m-b-xs ng-untouched ng-valid ng-isolate-scope ng-empty ng-dirty ng-valid-parse" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="Desde..." ng-model="model" model="model" style="background-color: rgb(255, 255, 255); cursor: pointer;">
</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Fecha (Final)" model="filter.EndDate" ph="Hasta...">
  Fecha (Final)
  <input custom-date-picker="" class="form-control input-sm m-b-xs ng-untouched ng-valid ng-isolate-scope ng-empty ng-dirty ng-valid-parse" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="Hasta..." ng-model="model" model="model" style="background-color: rgb(255, 255, 255); cursor: pointer;">
</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Estatus" model="filter.Status" items="model.Status">
  Estatus
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:-1" selected="selected"></option><option label="Activa" value="string:0">Activa</option><option label="Cancelada" value="string:1">Cancelada</option></select>

</div>
    <div class="col-md-3 ng-scope">
      Producto
      <div class="no-padding row selector ng-isolate-scope" model="filter.Product" select-options="productSelectOptions">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.css">

  <div class="col-lg-12">
    <div class="col-lg-12 col-selector">
      <div class="select2-container ng-pristine ng-untouched ng-valid ng-empty ng-valid-parse" id="s2id_autogen1" style="width: 100%"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen">Productos</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" ui-select2="selectOptions" ng-model="model" id="" ng-change="onChange()" style="width: 100%" class="ng-pristine ng-untouched ng-valid ng-empty select2-offscreen ng-valid-parse" tabindex="-1">
    </div>
  </div>


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
</th><th ng-style="{ width: width }" field-name="CreationDate" width="150px" class="ng-scope ng-isolate-scope" style="width: 150px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Fecha </span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="ClientName" width="200px" class="ng-scope ng-isolate-scope" style="width: 200px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Cliente</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="Locations" width="150px" class="ng-scope ng-isolate-scope" style="width: 150px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Sucursal</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="TotalAmount" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Total</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="Currency" width="80px" class="ng-scope ng-isolate-scope" style="width: 80px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Moneda</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
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
</th><th ng-style="{ width: width }" field-name="Comments" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Comentarios</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="" width="120px" class="ng-scope ng-isolate-scope" style="width: 120px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th></tr>

    </thead>
    <tbody ng-transclude="gvRow"><!-- ngRepeat: i in gridViewFactory.items track by $index --><tr ng-transclude="gvRowColumn" ng-click="selectItem()" ng-class="active? (cssClass + ' activeRow'): cssClass" ng-show="gridViewFactory.items.length > 0 &amp;&amp; !processing" class="ng-scope ng-isolate-scope ng-hide"><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"><span class="ng-binding ng-scope">$0.00</span></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"><span class="ng-scope">MXN</span></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"></td></tr></tbody>
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

  <div class="loader ng-hide" ng-show="processing" style="margin-top: 30px;">
    <svg class="circular">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>

  <div class="col-lg-12">
    <div class="alert alert-warning text-center" ng-show="gridViewFactory.items.length == 0 &amp;&amp; !processing">
      <h4>No se encontraron registros, por favor, ajuste sus filtros y vuelva a intentarlo.</h4>
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

  <modal title="Cancelar Cotización - " error="cancelError" name="cancelQuoteModal" close-on-succes="true" action="cancelQuote" argument="selectedQuote.ID" class="ng-isolate-scope">
<div class="modal fade" id="cancelQuoteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog " style="">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ng-binding">Cancelar Cotización - </h4>
      </div>
      <div class="modal-body">
        <div ng-transclude=""><span class="ng-scope">
    ¿Estás seguro que deseas cancelar la cotización?
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
@endsection