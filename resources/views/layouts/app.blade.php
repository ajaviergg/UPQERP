<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@section('head')
    @include('layouts.Partials.Head.head')
@show

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">

    @include('layouts.Partials.Head.header')
    @include('layouts.Partials.Sidebar.sidebar')   
     
    <div class="content-wrapper">
        @yield('content')
    </div>       
       
    @include('layouts.Partials.Footer.footer')
    @include('layouts.Partials.Sidebar.sidebarL')
  

  @section('script')
      @include('layouts.Partials.Scripts.script')
  @show
  </div>
</body>
</html>
