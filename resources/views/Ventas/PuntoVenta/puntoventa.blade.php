@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Punto de Venta
        <small></small>
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>--}}
    </section>
<div ng-controller="menusPOSCtrl" class="ng-scope">
  <page-header title="Punto de Venta" icon="fa-shopping-cart" class="ng-isolate-scope"><div class="row">
  <div class="col-lg-5">
    <span class="Maintitle">
    </span>
  </div>

  <div class="col-lg-7" ng-transclude="">
  </div>
</div>

</page-header>

  <div style="margin-top: 23px;
    position: relative;
    left: 14%;">
    <table style="text-align: center">
      <tbody><tr>
        <td style="width: 220px;">
          <div class="WizardBox borderOrange" style="height:100px">
            <a href="/Sales/RegisterCashOutsReport">
              <i class="fa fa-list fa-4x" data-original-title="" title=""></i>
              <div class="subTitle">Cierres de Caja</div>
            </a>
          </div>
        </td>
        <td style="width: 220px;">

          <div class="WizardBox" style="height:100px">
            <a href="https://erp.bind.com.mx//Sales/Invoice/SetupPOS.aspx">
              <i class="fa fa fa-shopping-cart fa-4x" data-original-title="" title=""></i>
              <div class="subTitle">Punto de Venta</div>
            </a>
          </div>

        </td>
      </tr>
    </tbody></table>
  </div>


</div>