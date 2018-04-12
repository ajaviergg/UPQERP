<li class="treeview">
          <a href="#"><i class="menu-icon fa fa-shopping-cart"></i> 
            <span>Compras</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/producto') }}">Productos</a></li>
            <li><a href="{{ url('/Compra/ListaPrecio') }}">Lista de Precio</a></li>
            <li><a href="{{ url('/Compra/Proveedores') }}">Proveedores</a></li>
            <li><a href="{{ url('/Compra/ListaOrdenes') }}">Ordenes de Compra(Costos)</a></li>
            <li><a href="{{ url('/Compra/Gastos') }}">Gastos</a></li>
          </ul>
        </li>