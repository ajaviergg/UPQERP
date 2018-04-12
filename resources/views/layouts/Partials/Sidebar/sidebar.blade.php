<?php
function current_page($url = '/'){
  return request()->path() == $url;
}
?>
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        @if (Auth::user()->avatar == null)
          <img src="../../images/{{Auth::user()->image}}" class="img-circle" alt="User Image">
        @else  
          <img src="{{Auth::user()->image}}" class="img-circle" alt="User Image">
        @endif
        </div>
        <div class="pull-left info">
          <p>
          @if (Auth::user()->social_name == null)
            {{ Auth::user()->name}}
          @else
            {{ Auth::user()->social_name}}
          @endif
          </p>
          <!-- Status -->
          
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li <?php echo current_page('home') ? "class='active'" : "";?>>
          <a href="{{ url('home')}}"><i class="menu-icon fa fa-home"></i> <span>Inicio</span></a>
        </li>
        
      
     @if (Auth()->user()->rol_id==1)
       @include('Menus.MenuAdmin')
     @endif
     @if (Auth()->user()->rol_id==2)
       @include('Menus.MenuVentas')
     @endif
     @if (Auth()->user()->rol_id==3)
       @include('Menus.MenuProduccion')
     @endif
      @if (Auth()->user()->rol_id==4)
       @include('Menus.MenuAprovisionamiento')
     @endif
     @if (Auth()->user()->rol_id==5)
       @include('Menus.MenuFinanzas')
     @endif
     @if (Auth()->user()->rol_id==6)
       @include('Menus.MenuRH')
     @endif
     @if (Auth()->user()->rol_id==7)
       @include('Menus.MenuCompras')
     @endif
     </ul>

      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>