@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <h1>
        ERP
        <small>Panaderia UPQ</small>
      </h1>
      
    </section>


    <section class="content container-fluid" >

      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      
    </section>
 

@endsection
