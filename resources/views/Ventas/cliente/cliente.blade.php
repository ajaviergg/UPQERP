@extends('layouts.app')
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small></small>
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>--}}
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           <br>
            <div class="input-group input-group-sm col-md-6" style="position: absolute;right: 9%;top: 12%;">
                @if (Auth()->user()->rol_id==1)
                   <a href="{{ url('admin/Cliente/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                @endif
                 @if (Auth()->user()->rol_id==2)
                    <a href="{{ url('/Cliente/agregar') }}" class="btn btn-primary btn-round col-md-2" style="left: 570px;" target0><i class="fa fa-2x fa-plus"></i><span class="nav-label ng-binding"><br>Nueva</span> </a>
                    @endif
              </div>
              <br>
      <div class="box-body">
        <form action="finanzas_submit" method="get" accept-charset="utf-8">
          
         <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Numero</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
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
                <div class="form-group col-md-2">
                   <label for="exampleFormControlSelect1">Vendedor</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buscar</button>
              </div>
              
                </form>
              </div>
              <br>
           <div class="row">
            <div class="col-md-6">
              <div class="box box-primary">
                <table class="table">
                 <thead>
                   <tr>
                    <th class="text-center">No.</th>
                    <th class="col-md-2 text-center">Cliente</th>
                    <th class="col-md-5 text-center">Telefono</th>
                    <th class="text-center">Seguimiento</th>
                    <th class="text-right" style="right: 2%;position: absolute;">Opciones</th>
                     </tr>
                      </thead>
                       <tbody>        
                      {{-- expr --}} 
                        <tr>
                          <td class="text-center"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="td-actions text-right">             
                            <form action="" method="POST" >
                              
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
        <div class="col-md-6">
              <div class="box box-primary">
                <div class="row ng-scope">
        <div class="col-sm-6 top">
          <h4>
            <strong class="ng-binding">
              Público en General
            </strong>
          </h4>
          <div  class="ng-binding ng-scope">
            <i class="fa fa-map-marker"></i> Matriz
          </div>
          <div class="ng-binding ng-scope"> Mexico
          </div>
          <br>
        </div>
        <div class="col-sm-6 top">
          <div class="pull-right ng-scope" ">

            <h4 class="no-margins text-success ng-binding">$500.00 MXN</h4>
            <small class="text-muted text-success">
              ventas 12 meses
            </small>

            <h4 class="no-margins text-danger ng-binding">$0.00 MXN</h4>
            <small class="text-muted text-danger">
              por cobrar
            </small>
          </div><!-- end ngIf: accountDetails -->
        </div>
      </div>
      <div class="tab-content row" style="padding:15px;" ng-transclude="">
          <tab icon="fa-comment" name="Actividades" class="ng-scope ng-isolate-scope"><div id="tab-Actividades" ng-show="active" class="tab-pane" style="padding-left: 15px; padding-right: 15px;">
  <div ng-transclude="">
            <comments id="6c13deb4-a264-48f5-ab27-0b5aca446fcb" activity-title="selectedClient.ClientName" pop-up="true" external-id-type="model.ExternalIDType" class="ng-scope ng-isolate-scope"><div>
  <div id="CommentScroll" class="Comments" style="max-height: 360px; overflow-y: auto;">
    <div>
      <!-- ngRepeat: m in model --><div ng-repeat="m in model" class="ng-scope">
        <div>
          <div id="commentHeader" style="margin-top:5px;" class="col-md-12 col-xs-12">
            <div class="col-md-10 col-xs-9 commentUserInfo no-padding">
              <span class="col-md-12 col-xs-12 commentUserName ng-binding"> 13/04/2018 3:29 PM - Bind ERP</span>
              <span class="col-md-12 col-xs-12 commentUserDate ng-binding ng-hide" ng-show="m.IsActivity"><i class="fa fa-calendar"></i> 13/04/2018 3:29 PM</span>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 pull-right commentDeleteIcon"><i class="fa fa-trash-o" ng-click="DeleteComment(m.ID, m.IsActivity)"></i></div>
          </div>
          <div id="commentText" class="col-md-12 col-xs-12">
            <p style="text-align: justify" class="ng-binding">Alta de Actividad recurrente: Cada 3 días a partir de 03-04-2018. 3 repeticiones. Comentarios: asd</p>
          </div>
        </div>
        <div class="col-md-12 col-xs-12"><div style="border-bottom: 1px solid #e7eaec;"></div></div>
      </div><!-- end ngRepeat: m in model -->
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
          <select ng-change="onChange()" ng-model="model" class="no-padding form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-options="item.Value as item.Text for item in items" model="repeatType" items="repeatDays" style="width: 100%;"><option label="Días" value="number:1" selected="selected">Días</option><option label="Semanas" value="number:2">Semanas</option><option label="Meses" value="number:3">Meses</option><option label="Años" value="number:4">Años</option><option label="Segundo Viernes de cada mes " value="number:5">Segundo Viernes de cada mes </option></select>
        </div>
        <label class="col-md-3 col-xs-3 no-padding" style="margin-top: 8px !important;"># Repeticiones: </label>
        <div class="col-md-2 col-xs-2" style="padding-left:0;">
          <input id="repetitionTxt" type="text" ng-class="repetitions ?  'form-control': 'form-control input-error'" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" ng-model="repetitions" class="ng-pristine ng-untouched ng-valid ng-empty form-control">
        </div>
      </div>
    </div>
  </div>
  
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
<div class="modal fade" id="modalAddEvent" tabindex="-1" role="dialog" style="display: none;">
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
      <textarea ng-class="comment ?  'textAreaComment form-group col-md-12': 'textAreaComment form-group col-md-12 input-error'" id="commentTextArea" rows="4" ng-model="comment" placeholder="Escribe un comentario..." class="ng-valid textAreaComment form-group col-md-12 ng-dirty ng-touched ng-empty input-error"></textarea>
    </div>
    <div class="col-md-6 borderEvent form-group" style="min-height: 104px;">
      <div class="col-md-12 no-padding form-group">
        <span>Fecha de Seguimiento: </span>
        <form-date-range class="datePickerComment ng-isolate-scope" ranges="false" time-picker="true" start="startDate" end="endDate">


<input clearable="true" date-range-picker="" class="form-control input-sm m-b-xs date-picker ng-pristine ng-valid ng-isolate-scope ng-touched ng-not-empty" ng-class="{'redBorder' : req &amp;&amp; !model}" placeholder="" type="text" options="opts" ng-model="datePicker.date" readonly="readonly"></form-date-range>
      </div>
      <div class="col-md-12 no-padding form-group" ng-show="startDate.length > 0">
        <div class="col-md-4 no-padding" style="margin-top: 6px;">
          <label>Tipo de Actividad:</label>
        </div>
        <div class="col-md-8 no-padding">
          <div class="no-padding row selector ng-isolate-scope" id="eventTypeDDL" model="eventTypeSelected" select-options="eventTypesSelectOptions">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.css">

  <div class="col-lg-12">
    <div class="col-lg-12 col-selector">
      <div class="select2-container ng-untouched ng-valid ng-not-empty ng-dirty select2-container-active" id="s2id_autogen3" style="width: 100%"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen">Buscar tipo de evento</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen4"></div><input type="hidden" ui-select2="selectOptions" ng-model="model" id="" ng-change="onChange()" style="width: 100%" class="ng-untouched ng-valid select2-offscreen ng-not-empty ng-dirty" tabindex="-1" value="">
    </div>
  </div>


</div>

        </div>
      </div>
      <div class="col-md-12 no-padding form-group" ng-show="startDate.length > 0">
        <label class="col-md-2 no-padding">Repetir: </label>
        <div class="col-md-3 no-padding">
          <label class="switch">
            <input type="checkbox" ng-model="repeat" ng-change="clearRepeat()" class="ng-untouched ng-valid ng-dirty ng-empty">
            <span class="slider round"></span>
          </label>
        </div>
        <label class="col-md-3 no-padding">¿Es Público? </label>
        <div class="col-md-4 no-padding">
          <label class="switch">
            <input type="checkbox" ng-model="isPublic" class="ng-untouched ng-valid ng-dirty ng-empty">
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
          <select ng-change="onChange()" ng-model="model" class="no-padding form-control input-sm m-b-xs ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-options="item.Value as item.Text for item in items" model="repeatType" items="repeatDays" style="width: 100%;"><option label="Días" value="number:1" selected="selected">Días</option><option label="Semanas" value="number:2">Semanas</option><option label="Meses" value="number:3">Meses</option><option label="Años" value="number:4">Años</option><option label="Segundo Miércoles de cada mes " value="number:5">Segundo Miércoles de cada mes </option></select>
        </div>
        <label class="col-md-3 col-xs-3 no-padding" style="margin-top: 8px !important;"># Repeticiones: </label>
        <div class="col-md-2 col-xs-2" style="padding-left:0;">
          <input id="repetitionTxt" type="text" ng-class="repetitions ?  'form-control': 'form-control input-error'" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" ng-model="repetitions" class="ng-pristine ng-untouched ng-valid ng-empty form-control input-error">
        </div>
      </div>
    </div>
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
          <tab icon="fa-feed" name="Operaciones" class="ng-scope ng-isolate-scope"><div id="tab-Operaciones" ng-show="active" class="tab-pane ng-hide" style="padding-left: 15px; padding-right: 15px;">
  
</div></tab>
        </div>
                
                
            <!-- /.box -->
          </div>
        <!-- /.col -->
      </div> 
            <!-- /.box-header -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>  
    @endsection