@extends('layouts.app')
@section('content')
 <section class="content-header">
      <h1>
        Clientes
      </h1>
      
    </section>
<div ng-controller="ClientsListCtrl" ng-init="model = {&quot;Locations&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;Todas&quot;},{&quot;Value&quot;:&quot;7fdbd265-242d-4ecf-ad2c-21eb8441bb73&quot;,&quot;Text&quot;:&quot;Matriz&quot;}],&quot;Employees&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;3f8a7905-f08b-4a80-9539-9bbdda4d2a09&quot;,&quot;Text&quot;:&quot;pablo Briones Almaguer&quot;}],&quot;AllowedAddClient&quot;:true,&quot;AddClientMessageVm&quot;:{&quot;Hours&quot;:[{&quot;Value&quot;:&quot;00:00&quot;,&quot;Text&quot;:&quot;Hora&quot;},{&quot;Value&quot;:&quot;23:30&quot;,&quot;Text&quot;:&quot;23:30&quot;},{&quot;Value&quot;:&quot;23:00&quot;,&quot;Text&quot;:&quot;23:00&quot;},{&quot;Value&quot;:&quot;22:30&quot;,&quot;Text&quot;:&quot;22:30&quot;},{&quot;Value&quot;:&quot;22:00&quot;,&quot;Text&quot;:&quot;22:00&quot;},{&quot;Value&quot;:&quot;21:30&quot;,&quot;Text&quot;:&quot;21:30&quot;},{&quot;Value&quot;:&quot;21:00&quot;,&quot;Text&quot;:&quot;21:00&quot;},{&quot;Value&quot;:&quot;20:30&quot;,&quot;Text&quot;:&quot;20:30&quot;},{&quot;Value&quot;:&quot;20:00&quot;,&quot;Text&quot;:&quot;20:00&quot;},{&quot;Value&quot;:&quot;19:30&quot;,&quot;Text&quot;:&quot;19:30&quot;},{&quot;Value&quot;:&quot;19:00&quot;,&quot;Text&quot;:&quot;19:00&quot;},{&quot;Value&quot;:&quot;18:30&quot;,&quot;Text&quot;:&quot;18:30&quot;},{&quot;Value&quot;:&quot;18:00&quot;,&quot;Text&quot;:&quot;18:00&quot;},{&quot;Value&quot;:&quot;17:30&quot;,&quot;Text&quot;:&quot;17:30&quot;},{&quot;Value&quot;:&quot;17:00&quot;,&quot;Text&quot;:&quot;17:00&quot;},{&quot;Value&quot;:&quot;16:30&quot;,&quot;Text&quot;:&quot;16:30&quot;},{&quot;Value&quot;:&quot;16:00&quot;,&quot;Text&quot;:&quot;16:00&quot;},{&quot;Value&quot;:&quot;15:30&quot;,&quot;Text&quot;:&quot;15:30&quot;},{&quot;Value&quot;:&quot;15:00&quot;,&quot;Text&quot;:&quot;15:00&quot;},{&quot;Value&quot;:&quot;14:30&quot;,&quot;Text&quot;:&quot;14:30&quot;},{&quot;Value&quot;:&quot;14:00&quot;,&quot;Text&quot;:&quot;14:00&quot;},{&quot;Value&quot;:&quot;13:30&quot;,&quot;Text&quot;:&quot;13:30&quot;},{&quot;Value&quot;:&quot;13:00&quot;,&quot;Text&quot;:&quot;13:00&quot;},{&quot;Value&quot;:&quot;12:30&quot;,&quot;Text&quot;:&quot;12:30&quot;},{&quot;Value&quot;:&quot;12:00&quot;,&quot;Text&quot;:&quot;12:00&quot;},{&quot;Value&quot;:&quot;11:30&quot;,&quot;Text&quot;:&quot;11:30&quot;},{&quot;Value&quot;:&quot;11:00&quot;,&quot;Text&quot;:&quot;11:00&quot;},{&quot;Value&quot;:&quot;10:30&quot;,&quot;Text&quot;:&quot;10:30&quot;},{&quot;Value&quot;:&quot;10:00&quot;,&quot;Text&quot;:&quot;10:00&quot;},{&quot;Value&quot;:&quot;09:30&quot;,&quot;Text&quot;:&quot;09:30&quot;},{&quot;Value&quot;:&quot;09:00&quot;,&quot;Text&quot;:&quot;09:00&quot;},{&quot;Value&quot;:&quot;08:30&quot;,&quot;Text&quot;:&quot;08:30&quot;},{&quot;Value&quot;:&quot;08:00&quot;,&quot;Text&quot;:&quot;08:00&quot;},{&quot;Value&quot;:&quot;07:30&quot;,&quot;Text&quot;:&quot;07:30&quot;},{&quot;Value&quot;:&quot;07:00&quot;,&quot;Text&quot;:&quot;07:00&quot;},{&quot;Value&quot;:&quot;06:30&quot;,&quot;Text&quot;:&quot;06:30&quot;},{&quot;Value&quot;:&quot;06:00&quot;,&quot;Text&quot;:&quot;06:00&quot;},{&quot;Value&quot;:&quot;05:30&quot;,&quot;Text&quot;:&quot;05:30&quot;},{&quot;Value&quot;:&quot;05:00&quot;,&quot;Text&quot;:&quot;05:00&quot;},{&quot;Value&quot;:&quot;04:30&quot;,&quot;Text&quot;:&quot;04:30&quot;},{&quot;Value&quot;:&quot;04:00&quot;,&quot;Text&quot;:&quot;04:00&quot;},{&quot;Value&quot;:&quot;03:30&quot;,&quot;Text&quot;:&quot;03:30&quot;},{&quot;Value&quot;:&quot;03:00&quot;,&quot;Text&quot;:&quot;03:00&quot;},{&quot;Value&quot;:&quot;02:30&quot;,&quot;Text&quot;:&quot;02:30&quot;},{&quot;Value&quot;:&quot;02:00&quot;,&quot;Text&quot;:&quot;02:00&quot;},{&quot;Value&quot;:&quot;01:30&quot;,&quot;Text&quot;:&quot;01:30&quot;},{&quot;Value&quot;:&quot;01:00&quot;,&quot;Text&quot;:&quot;01:00&quot;},{&quot;Value&quot;:&quot;00:30&quot;,&quot;Text&quot;:&quot;00:30&quot;}],&quot;ClientMessageRepeatCodes&quot;:[{&quot;Value&quot;:&quot;1&quot;,&quot;Text&quot;:&quot;Dias&quot;},{&quot;Value&quot;:&quot;2&quot;,&quot;Text&quot;:&quot;Semanas&quot;},{&quot;Value&quot;:&quot;3&quot;,&quot;Text&quot;:&quot;Meses&quot;},{&quot;Value&quot;:&quot;6&quot;,&quot;Text&quot;:&quot;Años&quot;}]},&quot;AllowedDeleteClient&quot;:true,&quot;AllowedEditClient&quot;:true,&quot;ExternalIDType&quot;:5}" class="ng-scope">
  <page-header title="Clientes" image="/Assets/img/clientes.png" class="ng-isolate-scope"><div class="row">
  <div class="col-lg-5">
    <span class="Maintitle">
      <table>
        <tbody><tr>
          <td>
            
            
          </td>
          <td class="ng-binding">
           
          </td>
        </tr>
        <tr>
          <td></td>
          <td style="font-size:12px;" class="ng-binding">
            
          </td>
        </tr>
      </tbody></table>
    </span>
  </div>

  <div class="col-lg-7" ng-transclude="">
    
      
   
    <!-- ngIf: model.AllowedAddClient --><div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Agregar" ng-if="model.AllowedAddClient" color-class="btn-primary" icon="fa-plus" url="https://erp.bind.com.mx//Clients/AddClient.aspx">

  <a class="btn btnActions btn-primary" ng-click="action()" href="https://erp.bind.com.mx//Clients/AddClient.aspx" target="">
    <i class="fa fa-2x fa-plus"></i>
    <span class="nav-label ng-binding"><br>Agregar</span>
  </a>

  

  
</div><!-- end ngIf: model.AllowedAddClient -->
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
    
    <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-valid ng-empty ng-touched">
  </span>
</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Nombre" model="filter.Name">
  Nombre
  <span class="input-group " model="model">
    
    <input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
  </span>
</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Sucursal" model="filter.LocationId" items="model.Locations">
  Sucursal
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option label="Todas" value="string:" selected="selected">Todas</option><option label="Matriz" value="string:7fdbd265-242d-4ecf-ad2c-21eb8441bb73">Matriz</option></select>

</div>
    <div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Vendedor" model="filter.SalesEmployeeID" items="model.Employees">
  Vendedor
 
  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="pablo Briones Almaguer" value="string:3f8a7905-f08b-4a80-9539-9bbdda4d2a09">pablo Briones Almaguer</option></select>

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
  <div id="wrapper" main-cols="7" side-cols="5" class="ng-isolate-scope">
 
  <div id="main-wrapper" class="col-md-7 col-xs-12">

   
    <div ng-transclude="gvpMain"><div class="ng-scope ng-isolate-scope">
  <div ng-transclude="">
      <div class="row ng-scope ng-isolate-scope" grid-view-factory="gridViewFactory">
  <table ng-show="!processing" class="table table-striped bind-table-hover">
    <thead>
      <tr ng-transclude="gvHeaderColumn"><th ng-style="{ width: width }" field-name="Number" width="60" class="ng-scope ng-isolate-scope" style="width: 60px;">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">No</span></span>
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
</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Teléfono</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" field-name="NextContactDate" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope"> Seguimiento</span></span>
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
    <tbody ng-transclude="gvRow"><!-- ngRepeat: i in gridViewFactory.items track by $index --><tr ng-transclude="gvRowColumn" ng-click="selectItem()" ng-class="active? (cssClass + ' activeRow'): cssClass" ng-repeat="i in gridViewFactory.items track by $index" select-action="selectClient" select-argument="i" active="i == selectedClient" class="ng-scope ng-isolate-scope activeRow"><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"><span class="ng-binding ng-scope">1000</span></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"><span class="ng-binding ng-scope"> Público en General</span></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"><span class="ng-binding ng-scope"> </span></td><td ng-transclude="" ng-click="columnClick()" class="ng-scope ng-isolate-scope"> <span ng-show="i.NextContactDate" class="ng-binding ng-scope ng-hide"></span>&nbsp;&nbsp;&nbsp;<span ng-show="i.NextContactDate" class="ng-binding ng-scope ng-hide"><i class="fa fa-clock-o"></i>&nbsp;</span></td><td ng-transclude="" ng-click="columnClick()" toggle-disabled="true" class="ng-scope ng-isolate-scope">
            <!-- ngIf: model.AllowedDeleteClient --><a class="btn btn-xs btn-outline btn-danger btn-grid ng-scope" ng-click="selectClient(i)" data-toggle="modal" data-target="#deleteClientModal" ng-if="model.AllowedDeleteClient">
              <i class="fa fa-remove"></i>
            </a><!-- end ngIf: model.AllowedDeleteClient -->
            <!-- ngIf: model.AllowedEditClient --><a class="btn btn-xs btn-outline btn-success btn-grid ng-scope" href="https://erp.bind.com.mx//Clients/EditClient.aspx?ID=50863f4b-9345-4fe3-b3ac-338ec1cabf98" ng-if="model.AllowedEditClient">
              <i class="fa fa-edit"></i>
            </a><!-- end ngIf: model.AllowedEditClient -->
          </td></tr><!-- end ngRepeat: i in gridViewFactory.items track by $index --></tbody>
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
  <div id="sidebar-wrapper" class="col-md-5 col-xs-12 pull-right">
    <div id="sidebar">
      <div ng-transclude="gvpSidePanel"><gvp-side-panel processing="processing" class="ng-scope ng-isolate-scope">

<div>
  <div ng-transclude="">
      <div class="row ng-scope">
        <div class="col-sm-6 top">
          <h4>
            <strong class="ng-binding">
              Público en General
            </strong>
          </h4>
          <!-- ngIf: selectedClient.ClientName !== clientDetails.LegalName -->
          <!-- ngIf: clientDetails.Address --><div ng-if="clientDetails.Address" class="ng-binding ng-scope">
            <i class="fa fa-map-marker"></i>  No.   Col. ,  Monterrey, Nuevo León  C.P  México
          </div><!-- end ngIf: clientDetails.Address -->

          <!-- ngIf: clientDetails.FiscalAddress !== clientDetails.Address -->

          <!-- ngIf: clientDetails.Email -->
          <br>
        </div>
        <div class="col-sm-6 top">
          <!-- ngIf: clientDetails --><div class="pull-right ng-scope" ng-if="clientDetails">

            <h4 class="no-margins text-success ng-binding">$0.00</h4>
            <small class="text-muted text-success">
              Ventas 12 meses
            </small>

            <h4 class="no-margins text-danger ng-binding">$0.00</h4>
            <small class="text-muted text-danger">
              Por Cobrar
            </small>
          </div><!-- end ngIf: clientDetails -->
        </div>
      </div>
      <!-- ngIf: clientDetails --><div class="row ng-scope" ng-if="clientDetails">
        <tab-panel class="ng-isolate-scope"><div class="tabs-container" style="border: .5px solid #dcdcdc; ">
  <ul class="nav nav-tabs">
    <!-- ngRepeat: i in childCtrl --><li id="ID-Actividades" class="ng-scope active" ng-repeat="i in childCtrl"><a data-toggle="tab" ng-click="setActive(i.name); i.click()" href="#tab-Actividades" aria-expanded="true" class="ng-binding"><span class="fa fa-comment"></span> Actividades&nbsp;<span ng-show="i.collection != undefined" class="badge badge-warning ng-binding ng-hide"></span></a></li><!-- end ngRepeat: i in childCtrl --><li id="ID-Operaciones" class="ng-scope" ng-repeat="i in childCtrl"><a data-toggle="tab" ng-click="setActive(i.name); i.click()" href="#tab-Operaciones" aria-expanded="false" class="ng-binding"><span class="fa fa-feed"></span> Operaciones&nbsp;<span ng-show="i.collection != undefined" class="badge badge-warning ng-binding ng-hide"></span></a></li><!-- end ngRepeat: i in childCtrl -->
  </ul>
  <div class="tab-content row" style="padding:15px;" ng-transclude="">
          <tab icon="fa-comment" name="Actividades" class="ng-scope ng-isolate-scope"><div id="tab-Actividades" ng-show="active" class="tab-pane active" style="padding-left: 15px; padding-right: 15px;">
  <div ng-transclude="">
            <comments id="50863f4b-9345-4fe3-b3ac-338ec1cabf98" activity-title="selectedClient.ClientName" pop-up="true" external-id-type="model.ExternalIDType" class="ng-scope ng-isolate-scope"><div>
  <div id="CommentScroll" class="Comments" style="max-height: 360px; overflow-y: auto;">
    <div>
      <!-- ngRepeat: m in model -->
    </div>
  </div>
  <div ng-show="!popUp" class="ng-hide">
    <br>
    <comments-text activity-title="activityTitle" ng-show="commentText" external-id-type="externalIdType" id="id" type="type" refresh-comments="getComments(commentFlag)" class="ng-isolate-scope"><div>
  <div class="col-md-12 no-padding">
    <div class="col-md-6">
      <span class="col-md-12 no-padding">Comentario: </span>
      <textarea ng-class="comment ?  'textAreaComment form-group col-md-12': 'textAreaComment form-group col-md-12 input-error'" id="commentTextArea" rows="4" ng-model="comment" placeholder="Escribe un comentario..." class="ng-pristine ng-untouched ng-valid ng-empty textAreaComment form-group col-md-12 input-error"></textarea>
    </div>
    <div class="col-md-6 borderEvent form-group" style="min-height: 104px;">
      <div class="col-md-12 no-padding form-group">
        <span>Fecha de Seguimiento: </span>
        <form-date-range class="datePickerComment ng-isolate-scope" ranges="false" time-picker="true" start="startDate" end="endDate">


<input clearable="true" date-range-picker="" class="form-control input-sm m-b-xs date-picker ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="" type="text" options="opts" ng-model="datePicker.date" readonly="readonly"></form-date-range>
      </div>
      <div class="col-md-12 no-padding form-group ng-hide" ng-show="startDate.length > 0">
        <div class="col-md-4 no-padding" style="margin-top: 6px;">
          <label>Tipo de Actividad:</label>
        </div>
        <div class="col-md-8 no-padding">
          <div class="no-padding row selector ng-isolate-scope" id="eventTypeDDL" model="eventTypeSelected" select-options="eventTypesSelectOptions">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.css">

  <div class="col-lg-12">
    <div class="col-lg-12 col-selector">
      <div class="select2-container ng-pristine ng-untouched ng-valid ng-empty ng-valid-parse" id="s2id_autogen1" style="width: 100%"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen">Buscar tipo de evento</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" ui-select2="selectOptions" ng-model="model" id="" ng-change="onChange()" style="width: 100%" class="ng-pristine ng-untouched ng-valid select2-offscreen ng-empty ng-valid-parse" tabindex="-1">
    </div>
  </div>


</div>

        </div>
      </div>
      <div class="col-md-12 no-padding form-group ng-hide" ng-show="startDate.length > 0">
        <label class="col-md-2 no-padding">Repetir: </label>
        <div class="col-md-3 no-padding">
          <label class="switch">
            <input type="checkbox" ng-model="repeat" ng-change="clearRepeat()" class="ng-pristine ng-untouched ng-valid ng-empty">
            <span class="slider round"></span>
          </label>
        </div>
        <label class="col-md-3 no-padding">¿Es Público? </label>
        <div class="col-md-4 no-padding">
          <label class="switch">
            <input type="checkbox" ng-model="isPublic" class="ng-pristine ng-untouched ng-valid ng-empty">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div class="col-md-12 col-xs-12 no-padding form-group ng-hide" style="" ng-show="repeat">
        <label class="col-md-2 col-xs-2 no-padding" style="margin-top: 8px !important;">Repetir Cada: </label>
        <div class="col-md-2 col-xs-2">
          <input ng-class="repeatInterval ?  'form-control': 'form-control input-error'" id="repeatIntervalTxt" type="text" ng-model="repeatInterval" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" class="ng-pristine ng-untouched ng-valid ng-empty form-control">
        </div>
        <div class="col-md-3 col-xs-3" style="padding-left: 0;">
          <select ng-change="onChange()" ng-model="model" class="no-padding form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-options="item.Value as item.Text for item in items" model="repeatType" items="repeatDays" style="width: 100%;"><option label="Días" value="number:1" selected="selected">Días</option><option label="Semanas" value="number:2">Semanas</option><option label="Meses" value="number:3">Meses</option><option label="Años" value="number:4">Años</option><option label="Último Lunes de cada mes " value="number:5">Último Lunes de cada mes </option></select>
        </div>
        <label class="col-md-3 col-xs-3 no-padding" style="margin-top: 8px !important;"># Repeticiones: </label>
        <div class="col-md-2 col-xs-2" style="padding-left:0;">
          <input id="repetitionTxt" type="text" ng-class="repetitions ?  'form-control': 'form-control input-error'" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" ng-model="repetitions" class="ng-pristine ng-untouched ng-valid ng-empty form-control">
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-success pull-right" ng-disabled="processing" ng-click="SaveComment()">Agregar</button>
  <div class="col-md-12">
    <p style="color:red;" ng-show="errorMsg.length>0" class="ng-binding ng-hide"></p>
  </div>
</div>


<style>
  .input-error {
    border-color: red;
  }

  .datePickerComment div {
    width: 100%;
  }

  .borderEvent {
    border-left: 2px solid #e7eaec;
  }

  @media screen and (max-width: 991px) {
    .borderEvent {
      border-left: none;
    }
  }

  /* The switch - the box around the slider */
  .switch {
    position: relative;
    display: inline-block;
    width: 44px;
    height: 18px;
  }

    /* Hide default HTML checkbox */
    .switch input {
      display: none;
    }

  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }

    .slider:before {
      position: absolute;
      content: "";
      height: 10px;
      width: 10px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

  input:checked + .slider {
    background-color: #0399cc;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #0399cc;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

    .slider.round:before {
      border-radius: 50%;
    }
</style></comments-text>
  </div>
  <div ng-show="popUp" style="margin-top:15px;">
    <button class="btn btn-success pull-right" ng-click="openAddModal()">Agregar</button>
  </div>
  <modal cancel-text="Cancelar" style="width: 790px;" title="Agregar Actividad" name="modalAddEvent" hide-ok="true" class="ng-isolate-scope">
<div class="modal fade" id="modalAddEvent" tabindex="-1" role="dialog">
  <div class="modal-dialog " style="width: 790px;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ng-binding">Agregar Actividad</h4>
      </div>
      <div class="modal-body">
        <div ng-transclude="">
    <div class="row ng-scope" style="padding-right: 15px;">
      <comments-text activity-title="activityTitle" refresh-comments="closeAddModal()" external-id-type="externalIdType" id="id" type="type" clear="clear" class="ng-isolate-scope"><div>
  <div class="col-md-12 no-padding">
    <div class="col-md-6">
      <span class="col-md-12 no-padding">Comentario: </span>
      <textarea ng-class="comment ?  'textAreaComment form-group col-md-12': 'textAreaComment form-group col-md-12 input-error'" id="commentTextArea" rows="4" ng-model="comment" placeholder="Escribe un comentario..." class="ng-pristine ng-untouched ng-valid ng-empty textAreaComment form-group col-md-12 input-error"></textarea>
    </div>
    <div class="col-md-6 borderEvent form-group" style="min-height: 104px;">
      <div class="col-md-12 no-padding form-group">
        <span>Fecha de Seguimiento: </span>
        <form-date-range class="datePickerComment ng-isolate-scope" ranges="false" time-picker="true" start="startDate" end="endDate">


<input clearable="true" date-range-picker="" class="form-control input-sm m-b-xs date-picker ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="" type="text" options="opts" ng-model="datePicker.date" readonly="readonly"></form-date-range>
      </div>
      <div class="col-md-12 no-padding form-group ng-hide" ng-show="startDate.length > 0">
        <div class="col-md-4 no-padding" style="margin-top: 6px;">
          <label>Tipo de Actividad:</label>
        </div>
        <div class="col-md-8 no-padding">
          <div class="no-padding row selector ng-isolate-scope" id="eventTypeDDL" model="eventTypeSelected" select-options="eventTypesSelectOptions">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.css">

  <div class="col-lg-12">
    <div class="col-lg-12 col-selector">
      <div class="select2-container ng-pristine ng-untouched ng-valid ng-empty ng-valid-parse" id="s2id_autogen3" style="width: 100%"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen">Buscar tipo de evento</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen4"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" ui-select2="selectOptions" ng-model="model" id="" ng-change="onChange()" style="width: 100%" class="ng-pristine ng-untouched ng-valid select2-offscreen ng-empty ng-valid-parse" tabindex="-1">
    </div>
  </div>


</div>

        </div>
      </div>
      <div class="col-md-12 no-padding form-group ng-hide" ng-show="startDate.length > 0">
        <label class="col-md-2 no-padding">Repetir: </label>
        <div class="col-md-3 no-padding">
          <label class="switch">
            <input type="checkbox" ng-model="repeat" ng-change="clearRepeat()" class="ng-pristine ng-untouched ng-valid ng-empty">
            <span class="slider round"></span>
          </label>
        </div>
        <label class="col-md-3 no-padding">¿Es Público? </label>
        <div class="col-md-4 no-padding">
          <label class="switch">
            <input type="checkbox" ng-model="isPublic" class="ng-pristine ng-untouched ng-valid ng-empty">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div class="col-md-12 col-xs-12 no-padding form-group ng-hide" style="" ng-show="repeat">
        <label class="col-md-2 col-xs-2 no-padding" style="margin-top: 8px !important;">Repetir Cada: </label>
        <div class="col-md-2 col-xs-2">
          <input ng-class="repeatInterval ?  'form-control': 'form-control input-error'" id="repeatIntervalTxt" type="text" ng-model="repeatInterval" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" class="ng-pristine ng-untouched ng-valid ng-empty form-control input-error">
        </div>
        <div class="col-md-3 col-xs-3" style="padding-left: 0;">
          <select ng-change="onChange()" ng-model="model" class="no-padding form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-options="item.Value as item.Text for item in items" model="repeatType" items="repeatDays" style="width: 100%;"><option label="Días" value="number:1" selected="selected">Días</option><option label="Semanas" value="number:2">Semanas</option><option label="Meses" value="number:3">Meses</option><option label="Años" value="number:4">Años</option><option label="Último Lunes de cada mes " value="number:5">Último Lunes de cada mes </option></select>
        </div>
        <label class="col-md-3 col-xs-3 no-padding" style="margin-top: 8px !important;"># Repeticiones: </label>
        <div class="col-md-2 col-xs-2" style="padding-left:0;">
          <input id="repetitionTxt" type="text" ng-class="repetitions ?  'form-control': 'form-control input-error'" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" ng-model="repetitions" class="ng-pristine ng-untouched ng-valid ng-empty form-control input-error">
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-success pull-right" ng-disabled="processing" ng-click="SaveComment()">Agregar</button>
  <div class="col-md-12">
    <p style="color:red;" ng-show="errorMsg.length>0" class="ng-binding ng-hide"></p>
  </div>
</div>


<style>
  .input-error {
    border-color: red;
  }

  .datePickerComment div {
    width: 100%;
  }

  .borderEvent {
    border-left: 2px solid #e7eaec;
  }

  @media screen and (max-width: 991px) {
    .borderEvent {
      border-left: none;
    }
  }

  /* The switch - the box around the slider */
  .switch {
    position: relative;
    display: inline-block;
    width: 44px;
    height: 18px;
  }

    /* Hide default HTML checkbox */
    .switch input {
      display: none;
    }

  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }

    .slider:before {
      position: absolute;
      content: "";
      height: 10px;
      width: 10px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

  input:checked + .slider {
    background-color: #0399cc;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #0399cc;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

    .slider.round:before {
      border-radius: 50%;
    }
</style></comments-text>
    </div>
  </div>
        <br>
        <div class="alert alert-danger no-margins no-top-bottom-padding text-center ng-hide" ng-show="error">
          <h5 class="no-margins"><i class="fa fa-2x fa-times-circle"></i> <label style="vertical-align: super" class="ng-binding"></label></h5>
        </div>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-default ng-binding" data-dismiss="modal" ng-show="!hideCancel" ng-click="onCancel()">Cancelar</button>
        <button type="button" class="btn btn-danger ng-binding ng-hide" ng-show="!hideOk" ng-click="onClose()">Sí</button>
       
      </div>
    </div>
  </div>
</div>
</modal>
</div>
<style>

  .textAreaComment {
    max-width: 100%;
    width: 100%;
    min-height: 22px;
    border-radius: 7px;
  }

  .commentDeleteIcon {
    text-align: right;
    position: absolute;
    top: 0px;
    right: 18px;
  }

    .commentDeleteIcon i {
      color: red;
      font-size: 20px;
      cursor: pointer;
    }

  .commentImage img {
    height: 50px;
    width: 50px;
    border-radius: 25px;
  }

  .commentUserInfo span {
    font-weight: bold;
    font-size: 14px;
    padding: 0px;
  }

  .commentUserName {
    color: #193048;
  }

  .commentUserDate {
    color: #0399cc;
  }
</style>
</comments>
          </div>
</div></tab>
          <tab icon="fa-feed" name="Operaciones" style="max-height: 360px; overflow-y: auto;" class="ng-scope ng-isolate-scope"><div id="tab-Operaciones" ng-show="active" class="tab-pane ng-hide active" style="padding-left: 15px; padding-right: 15px;">
  <div ng-transclude="">
            <div class="activities ng-scope">
              <div class="feed-activity-list ng-isolate-scope" infinite-scroll="getActivities()" infinite-scroll-container="&quot;.activities&quot;" infinite-scroll-disabled="clientActivityInfMesOpt.allLoaded" infinite-scroll-distance="1">
                <div class="row ng-isolate-scope">
  <table ng-show="!processing" class="table table-striped bind-table-hover">
    <thead>
      <tr ng-transclude="gvHeaderColumn"><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Documento</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
  
  
  <a href="" ng-click="click()">
    <span ng-transclude=""><span class="ng-scope">Monto</span></span>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
    <i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
  </a>
</th></tr>

    </thead>
    <tbody ng-transclude="gvRow"><!-- ngRepeat: a in clientActivityInfMesOpt.items track by $index --></tbody>
  </table>
  <div style="position: relative; width: 100px; height: 100px; left: 50%; top: 50%;" ng-show="processing" class="ng-hide">
    <svg class="circular">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
                <div ng-show="clientActivityInfMesOpt.processing" class="ng-hide">Cargando...</div>
                <div style="clear: both;"></div>
              </div>
            </div>
          </div>
</div></tab>
        </div>  
</div></tab-panel>
      </div><!-- end ngIf: clientDetails -->
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
        <span style="margin-right:10px;" class="ng-binding"> 1 Resultados</span>
      </li>
      <li ng-class="gridViewFactory.prevPageDisabled() ? 'disabled': ''" class="disabled">
        <a ng-click="gridViewFactory.setPage(0)">Primero</a>
      </li>
      <li ng-class="gridViewFactory.prevPageDisabled() ? 'disabled': ''" class="disabled">
        <a ng-click="gridViewFactory.prevPage()">&lt;&lt;</a>
      </li>
      <!-- ngRepeat: n in gridViewFactory.rangePages() --><li ng-repeat="n in gridViewFactory.rangePages()" ng-click="gridViewFactory.setPage(n)" ng-class="gridViewFactory.activePage(n) ? 'active': ''" class="ng-scope active">
        <a class="ng-binding">
          1
        </a>
      </li><!-- end ngRepeat: n in gridViewFactory.rangePages() -->
      <li ng-class="gridViewFactory.nextPageDisabled() ?  'disabled': ''" class="disabled">
        <a ng-click="gridViewFactory.nextPage()">&gt;&gt;</a>
      </li>
      <li ng-class="gridViewFactory.nextPageDisabled() ?  'disabled': ''" class="disabled">
        <a ng-click="gridViewFactory.setPage(gridViewFactory.pagination.TotalServerPages - 1)">Último</a>
      </li>
     
      <li style="width: 100px;">
        <select style="width: 65px; position: relative; float: left;  margin-left: 15px;" ng-change="gridViewFactory.changePageSize()" ng-model="gridViewFactory.pagination.ItemsPerPage" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-not-empty" ng-options="item for item in gridViewFactory.paginationOptions"><option label="8" value="number:8">8</option><option label="10" value="number:10">10</option><option label="12" value="number:12" selected="selected">12</option><option label="20" value="number:20">20</option><option label="50" value="number:50">50</option></select>
      </li>
    </ul>
  </div>
</div>
  <modal title="Borrar Cliente -  Público en General" error="deleteError" name="deleteClientModal" close-on-succes="true" action="deleteClient" argument="selectedClient.ID" class="ng-isolate-scope">
<div class="modal fade" id="deleteClientModal" tabindex="-1" role="dialog">
  <div class="modal-dialog " style="">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ng-binding">Borrar Cliente -  Público en General</h4>
      </div>
      <div class="modal-body">
        <div ng-transclude=""><span class="ng-scope">
    ¿Estas seguro que deseas borrar el cliente?
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