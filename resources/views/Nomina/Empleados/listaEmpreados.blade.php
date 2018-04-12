@extends('layouts.app')
@section('content')
<section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
    <section class="content">
		<!-- ####################################### -->
			<div style="padding: 5px; background-color: #ffffff;">
        


				<div ng-controller="PayRollEmployeeListCtrl" ng-init="model = {&quot;AllowedAddEmployeeToPayRoll&quot;:false,&quot;Positions&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;56a859c8-413c-47da-be2a-6b8ec6bc1955&quot;,&quot;Text&quot;:&quot;Almacenista&quot;},{&quot;Value&quot;:&quot;751e04bd-42d7-4226-b623-9df3c5bf5f04&quot;,&quot;Text&quot;:&quot;Analista   de   Nóminas&quot;},{&quot;Value&quot;:&quot;4cfa4982-7a3c-4265-8e83-4f0f75e1544c&quot;,&quot;Text&quot;:&quot;Analista   de   Recurso s   Humanos&quot;},{&quot;Value&quot;:&quot;e41ecabd-3340-4b26-b00d-dfc07b8a55af&quot;,&quot;Text&quot;:&quot;Analista   de   Sistemas&quot;},{&quot;Value&quot;:&quot;ce8c63c0-5c39-4a23-bce5-b9c3d09320cd&quot;,&quot;Text&quot;:&quot;Analista de Créditos y Cobranza&quot;},{&quot;Value&quot;:&quot;fe3760c6-f699-4def-ab15-0222c9c6e402&quot;,&quot;Text&quot;:&quot;Analista de Tesorería&quot;},{&quot;Value&quot;:&quot;feb9d711-2d7c-46b2-803a-bef106edbbef&quot;,&quot;Text&quot;:&quot;Asistente Administrativa&quot;},{&quot;Value&quot;:&quot;6ab6ab61-c5ae-4954-a3a0-7f9dc3ab9f5f&quot;,&quot;Text&quot;:&quot;Contador&quot;},{&quot;Value&quot;:&quot;7eab0589-e6d1-4c0f-8938-0df3e29c2a58&quot;,&quot;Text&quot;:&quot;Gerente de Almacén&quot;},{&quot;Value&quot;:&quot;787465ed-6814-4b14-9317-41367da2a909&quot;,&quot;Text&quot;:&quot;Gerente de Compras&quot;},{&quot;Value&quot;:&quot;8844fc3d-5bcc-47d7-b7d0-cfebafd86a08&quot;,&quot;Text&quot;:&quot;Gerente de Ventas&quot;},{&quot;Value&quot;:&quot;0f443d8a-db78-42e6-a9e0-1550502e4ab6&quot;,&quot;Text&quot;:&quot;Gestor de Cobranza&quot;},{&quot;Value&quot;:&quot;e2905578-487a-435f-b5f2-bfa25cabab22&quot;,&quot;Text&quot;:&quot;Jefe de Créditos y Cobranza&quot;},{&quot;Value&quot;:&quot;28e1223b-cecb-44e1-a244-7808082998f4&quot;,&quot;Text&quot;:&quot;Servicio al Cliente&quot;},{&quot;Value&quot;:&quot;7c4b53ad-e152-4472-bfa9-4361de66ea9e&quot;,&quot;Text&quot;:&quot;Vendedor&quot;}],&quot;Departaments&quot;:[{&quot;Value&quot;:&quot;&quot;,&quot;Text&quot;:&quot;&quot;},{&quot;Value&quot;:&quot;cfc96b0f-8537-467f-a7b5-d928ee592654&quot;,&quot;Text&quot;:&quot;Administración&quot;},{&quot;Value&quot;:&quot;e4483ac5-6ea0-4f45-8fb0-96e978fea821&quot;,&quot;Text&quot;:&quot;Comercial&quot;},{&quot;Value&quot;:&quot;ad6a559a-e310-4423-88a9-c447accada80&quot;,&quot;Text&quot;:&quot;Compras&quot;},{&quot;Value&quot;:&quot;55b60797-249c-4e1a-8751-8bed32957951&quot;,&quot;Text&quot;:&quot;Dirección&quot;},{&quot;Value&quot;:&quot;74c0f788-99f0-4c86-8d3d-f984ade60046&quot;,&quot;Text&quot;:&quot;Distribución&quot;},{&quot;Value&quot;:&quot;1f4d54e8-d3c8-4062-8765-1931c040b9c5&quot;,&quot;Text&quot;:&quot;General&quot;},{&quot;Value&quot;:&quot;5c8cac82-825f-4bb3-9831-0f5c3165e8bc&quot;,&quot;Text&quot;:&quot;RH&quot;},{&quot;Value&quot;:&quot;ea626bce-bbe4-4a42-9c48-630925aa22d2&quot;,&quot;Text&quot;:&quot;Sistemas&quot;}],&quot;AllowedAddPayRollEmployee&quot;:true}" class="ng-scope">
					<page-header title="Lista de Empleados" icon="fa fa-users" class="ng-isolate-scope">
					<div class="row">
						<div class="col-lg-5">
							<span class="Maintitle">
							<table>
								<tbody>
									<tr>
										<td>
										<i class="fa fa-1x fa fa-users"></i>
										</td>
										<td class="ng-binding">
										&nbsp;Lista de Empleados
										</td>
									</tr>
									<tr>
										<td></td>
										<td style="font-size:12px;" class="ng-binding">
            
										</td>
									</tr>
								</tbody>
							</table>
							</span>
						</div>
						@if (Auth()->user()->rol_id==1)
							<div class="col-lg-7" ng-transclude="">
							<div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Agregar" ng-if="model.AllowedAddPayRollEmployee" color-class="btn-primary" icon="fa-plus" url="#">
								<a class="btn btnActions btn-primary" ng-click="action()" href="{{ url('admin/agregar/Empleado') }}" target="">
								<i class="fa fa-2x fa-plus"></i>
								<span class="nav-label ng-binding"><br>Agregar</span>
								</a>
							</div>
						</div>
						@endif
						@if (Auth()->user()->rol_id==6)
							<div class="col-lg-7" ng-transclude="">
							<div class="pull-right ng-scope ng-isolate-scope" style="margin-left: 8px;" title="Agregar" ng-if="model.AllowedAddPayRollEmployee" color-class="btn-primary" icon="fa-plus" url="#">
								<a class="btn btnActions btn-primary" ng-click="action()" href="{{ url('agregar/Empleado') }}" target="">
								<i class="fa fa-2x fa-plus"></i>
								<span class="nav-label ng-binding"><br>Agregar</span>
								</a>
							</div>
						</div>
						@endif
						

					</div>

					</page-header>

						<grid-filter class="ng-isolate-scope">
						<div class="callout callout">
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
							<div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Palabra clave" model="filter.SearchTerm">
						  Palabra clave
						  <span class="input-group " model="model">
							
							<input type="text" placeholder="" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-empty">
						  </span>
						</div>
							<div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Puesto" model="filter.JobPositionID" items="model.Positions">
						  Puesto
						 
						  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="Almacenista" value="string:56a859c8-413c-47da-be2a-6b8ec6bc1955">Almacenista</option><option label="Analista   de   Nóminas" value="string:751e04bd-42d7-4226-b623-9df3c5bf5f04">Analista   de   Nóminas</option><option label="Analista   de   Recurso s   Humanos" value="string:4cfa4982-7a3c-4265-8e83-4f0f75e1544c">Analista   de   Recurso s   Humanos</option><option label="Analista   de   Sistemas" value="string:e41ecabd-3340-4b26-b00d-dfc07b8a55af">Analista   de   Sistemas</option><option label="Analista de Créditos y Cobranza" value="string:ce8c63c0-5c39-4a23-bce5-b9c3d09320cd">Analista de Créditos y Cobranza</option><option label="Analista de Tesorería" value="string:fe3760c6-f699-4def-ab15-0222c9c6e402">Analista de Tesorería</option><option label="Asistente Administrativa" value="string:feb9d711-2d7c-46b2-803a-bef106edbbef">Asistente Administrativa</option><option label="Contador" value="string:6ab6ab61-c5ae-4954-a3a0-7f9dc3ab9f5f">Contador</option><option label="Gerente de Almacén" value="string:7eab0589-e6d1-4c0f-8938-0df3e29c2a58">Gerente de Almacén</option><option label="Gerente de Compras" value="string:787465ed-6814-4b14-9317-41367da2a909">Gerente de Compras</option><option label="Gerente de Ventas" value="string:8844fc3d-5bcc-47d7-b7d0-cfebafd86a08">Gerente de Ventas</option><option label="Gestor de Cobranza" value="string:0f443d8a-db78-42e6-a9e0-1550502e4ab6">Gestor de Cobranza</option><option label="Jefe de Créditos y Cobranza" value="string:e2905578-487a-435f-b5f2-bfa25cabab22">Jefe de Créditos y Cobranza</option><option label="Servicio al Cliente" value="string:28e1223b-cecb-44e1-a244-7808082998f4">Servicio al Cliente</option><option label="Vendedor" value="string:7c4b53ad-e152-4472-bfa9-4361de66ea9e">Vendedor</option></select>

						</div>
							<div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Departamento" model="filter.DepartamentID" items="model.Departaments">
						  Departamento
						 
						  <select ng-change="onChange()" ng-model="model" class="form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-options="item.Value as item.Text for item in items" on-change="onChange()" model="model" items="items" include-empty-item="includeEmptyItem"><option value="string:" selected="selected"></option><option label="Administración" value="string:cfc96b0f-8537-467f-a7b5-d928ee592654">Administración</option><option label="Comercial" value="string:e4483ac5-6ea0-4f45-8fb0-96e978fea821">Comercial</option><option label="Compras" value="string:ad6a559a-e310-4423-88a9-c447accada80">Compras</option><option label="Dirección" value="string:55b60797-249c-4e1a-8751-8bed32957951">Dirección</option><option label="Distribución" value="string:74c0f788-99f0-4c86-8d3d-f984ade60046">Distribución</option><option label="General" value="string:1f4d54e8-d3c8-4062-8765-1931c040b9c5">General</option><option label="RH" value="string:5c8cac82-825f-4bb3-9831-0f5c3165e8bc">RH</option><option label="Sistemas" value="string:ea626bce-bbe4-4a42-9c48-630925aa22d2">Sistemas</option></select>

						</div>
							<div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="Fecha contratación" model="filter.StartDate" ph="Desde...">
						  Fecha contratación
						  <input custom-date-picker="" class="form-control input-sm m-b-xs ng-untouched ng-valid ng-isolate-scope ng-empty ng-dirty ng-valid-parse" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="Desde..." ng-model="model" model="model" style="background-color: rgb(255, 255, 255); cursor: pointer;">
						</div>
							<div class="col-xs-6 col-sm-4 col-lg-2 ng-binding ng-scope ng-isolate-scope" title="." model="filter.EndDate" ph="Hasta...">
						  .
						  <input custom-date-picker="" class="form-control input-sm m-b-xs ng-untouched ng-valid ng-isolate-scope ng-empty ng-dirty ng-valid-parse" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="Hasta..." ng-model="model" model="model" style="background-color: rgb(255, 255, 255); cursor: pointer;">
						</div>
							<div class="col-xs-3 col-sm-2 col-lg-1 pull-right ng-scope ng-isolate-scope" title="Buscar" search="search">
						  <br>
						  <button class="btn btn-primary  btn-sm pull-right" style="margin-left: 5px;" ng-click="click()">Buscar <i class="fa fa-search"></i></button>
						</div>
						  </div>
						  </div>
						  <div ng-show="element.isCollapsed" ng-click="element.isCollapsed = false" class="ng-hide">
							<span style="color:#438eb9; font-size:16px; padding: 20px;">
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
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">#</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" field-name="Name" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">Nombre</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" field-name="RFC" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">Departamento</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" field-name="CURP" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">Puesto</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort"></i>
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
						  <div id="sidebar-wrapper" class="col-md-5 col-xs-12 pull-right">
							<div id="sidebar">
							  <div ng-transclude="gvpSidePanel"><gvp-side-panel processing="processing" class="ng-scope ng-isolate-scope">

						<div>
						  <div ng-transclude="">
							  <div class="row ng-scope">
								<div class="col-sm-12">
								  <h4>
									<strong class="ng-binding">
									  <i class="fa fa-user"></i>
									  
									</strong>
								  </h4>
								</div>
								<div class="col-sm-6 top">

								  <h5 class="no-margins ng-binding"><i class="fa fa-envelope-o"></i> </h5>
								  <strong><i class="fa fa-map-marker"></i> Dirección: </strong>
								  <h5 class="no-margins ng-binding"></h5>
								</div>
								<div class="col-sm-6 top">
								  <div class="pull-right">
									<h5 class="no-margins ng-binding"><strong>Antiguedad:</strong></h5>
								   
									<h5 class="no-margins ng-binding"><strong>NSS:</strong></h5>
								  </div>
								</div>
							  </div>
							  <br class="ng-scope">
							  <div class="row ng-scope">
								<div class="tabs-container">
								  <ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#" aria-expanded="true"><i class="fa fa-feed"></i>Nóminas</a></li>
								  </ul>
								  <div class="tab-content">
									<div id="tab-2" class="tab-pane active">
									  <div class="panel-body activities" style="max-height: 300px; overflow-y: auto;">
										<div class="feed-activity-list ng-isolate-scope" infinite-scroll="getActivities()" infinite-scroll-container="&quot;.activities&quot;" infinite-scroll-disabled="employeeActivityInfMesOpt.allLoaded" infinite-scroll-distance="1">
										  <div class="row ng-isolate-scope">
						  <table ng-show="!processing" class="table table-striped bind-table-hover">
							<thead>
							  <tr ng-transclude="gvHeaderColumn"><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">#</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">Periodo</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""><span class="ng-scope">Monto</span></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th><th ng-style="{ width: width }" class="ng-scope ng-isolate-scope">
						  
						  
						  <a href="#" ng-click="click()">
							<span ng-transclude=""></span>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn != fieldName" class="fa fa-sort ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; gridViewFactory.sort.SortAscending" class="fa fa-sort-asc ng-hide"></i>
							<i ng-show="fieldName &amp;&amp; gridViewFactory.sort.SortColumn == fieldName &amp;&amp; !gridViewFactory.sort.SortAscending" class="fa fa-sort-desc ng-hide"></i>
						  </a>
						</th></tr>

							</thead>
							<tbody ng-transclude="gvRow"><!-- ngRepeat: a in employeeActivityInfMesOpt.items track by $index --></tbody>
						  </table>
						  <div style="position: relative; width: 100px; height: 100px; left: 50%; top: 50%;" ng-show="processing" class="ng-hide">
							<svg class="circular">
							  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
							</svg>
						  </div>
						</div>
										  <div ng-show="employeeActivityInfMesOpt.processing" class="">Cargando...</div>
										  <div style="clear: both;"></div>
										</div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
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
						  <modal title="Borrar Empleado -  " error="deleteError" name="deleteEmployeeModal" close-on-succes="true" action="deleteEmployee" argument="selectedEmployee.ID" class="ng-isolate-scope">
						<div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog">
						  <div class="modal-dialog " style="">
							<div class="modal-content">
							  <div class="modal-header">
								<h4 class="modal-title ng-binding">Borrar Empleado -  </h4>
							  </div>
							  <div class="modal-body">
								<div ng-transclude=""><span class="ng-scope">
							¿Estas seguro que deseas borrar el empleado?
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
	  <!--##########################-->
		
    </section>
  @endsection