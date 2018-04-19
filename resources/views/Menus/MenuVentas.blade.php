<!-- Sidebar Menu -->
      
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview">
          <a href="#"><img id="menu_Image_Ventas" src="/img/ventaWhite.png" style="height:14px"> 
            <span>Ventas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('ConceptoVentas') }}">Conceptos de Venta</a></li>
            <li><a href="{{ url('prospecto') }}">Prospectos</a></li>
            <li><a href="{{ url('Cliente') }}">Clientes</a></li>
            <li><a href="{{ url('Cotizacion') }}">Cotizaciones</a></li>
            <li><a href="{{ url('perdidos') }}">Pedidos</a></li>
            {{-- <li><a href="{{ url('') }}">Captura Venta</a></li> --}}
          </ul>
        </li>
      