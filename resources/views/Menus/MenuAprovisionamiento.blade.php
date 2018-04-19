<li class="treeview">
          <a href="#"><img id="menu_Image_Inventarios" src="/img/AlmacenWhite.png" style="height:14px">
            <span>Inventarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="{{ url('proveedores') }}">Proveedor</a></li>
            <li><a href="{{ url('almacen') }}">Almacenes</a></li>
            <li><a href="{{ url('/proveedores/contacto') }}">Contacto</a></li>
            <li><a href="{{ url('peticion') }}">Petición</a></li>
            <li><a href="{{ url('transacion') }}">Transacion</a></li>
            <li><a href="{{ url('transporte') }}">Trasporte</a></li>
          </ul>
        </li>