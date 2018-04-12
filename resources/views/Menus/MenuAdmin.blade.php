<!-- Sidebar Menu -->
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="menu-icon fa fa-shopping-cart"></i> 
            <span>Compras</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/producto') }}">Productos</a></li>
            <li><a href="{{ url('admin/Compra/ListaPrecio') }}">Lista de Precio</a></li>
            <li><a href="{{ url('admin/Compra/Proveedores') }}">Proveedores</a></li>
            <li><a href="{{ url('admin/Compra/ListaOrdenes') }}">Ordenes de Compra(Costos)</a></li>
            <li><a href="{{ url('admin/Compra/Gastos') }}">Gastos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><img id="menu_Image_Producción" src="/img/IconoDeProduccion_blanco.png" style="height:14px"> 
            <span>Producción</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/Busqueda/Ordenes') }}">Ordenes de Producción</a></li>
            <li><a href="{{ url('/admin/formulas') }}">Formulas</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#"><img id="menu_Image_Inventarios" src="/img/AlmacenWhite.png" style="height:14px">
            <span>Inventarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/Inventarios/Lista') }}">Almacenes</a></li>
            <li><a href="{{ url('admin/Inventarios/Recepcion') }}">Recepcion de Mercancia</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><img id="menu_Image_Ventas" src="/img/ventaWhite.png" style="height:14px"> 
            <span>Ventas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Conceptos de Venta</a></li>
            <li><a href="{{ url('admin/prospecto') }}">Prospectos</a></li>
            <li><a href="{{ url('admin/Cliente') }}">Clientes</a></li>
            <li><a href="{{ url('admin/Cotizacion') }}">Cotizaciones</a></li>
            <li><a href="{{ url('admin/perdidos') }}">Pedidos</a></li>
            {{--<li><a href="{{ url('') }}">Captura Venta</a></li>--}}
            <li><a href="{{ url('admin/PuntoVenta') }}">Puntos de Venta</a></li>
            {{--<li><a href="{{ url('') }}">Proyectos</a></li>--}}
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="menu-icon fa fa-dollar"></i> 
            <span>Finazas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/BancosCajas') }}">Banco y Cajas</a></li>
            <li><a href="{{ url('admin/Conciliaciones') }}">Concilaciones</a></li>
            <li><a href="{{ url('admin/CuentasCobrar') }}">Cuentas Por Cobrar</a></li>
            {{--<li><a href="{{ url('') }}">Cuentas Por Pagar</a></li>
            <li><a href="{{ url('') }}">Ingresos</a></li>
            <li><a href="{{ url('') }}">Egresos</a></li>--}}
          </ul>
        </li>

        {{--<li class="treeview">
          <a href="#"><img id="menu_Image_Contabilidad" src="/img/contabilidad_blanco.png" style="height:14px">
            <span>Contabilidad</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Reportes Financieros</a></li>
            <li><a href="#">Configuracion</a></li>
            <li><a href="#">Polizas de Diario</a></li>
            <li><a href="#">Activos</a></li>
            <li><a href="#">DIOT</a></li>
          </ul>
        </li>--}}

        {{--<li class="treeview">
          <a href="#"><i class="menu-icon fa fa-credit-card"></i> 
            <span>Creditos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Estados de Cuenta de Clientes</a></li>
            <li><a href="#">Facturar Remisiones</a></li>
            <li><a href="#">Notas de Credito</a></li>
          </ul>
        </li>--}}


        {{--<li class="treeview">
          <a href="#"><i class="menu-icon fa fa-signal"></i> 
            <span>Reportes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Compras</a></li>
            <li><a href="#">Inventarios</a></li>
            <li><a href="#">Cobranzas</a></li>
            <li><a href="#">Ventas</a></li>
          </ul>
        </li>--}}
        <li class="treeview">
          <a href="#"><i class="menu-icon fa fa-gears"></i> 
            <span>Configuración</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            {{--<li><a href="#">Catalogos del Sistema</a></li>
            <li><a href="#">Documentacion</a></li>
            <li><a href="#">General</a></li>
            <li><a href="#">Catalogos de Permisos</a></li>--}}
            <li><a href="{{ url('admin/Registro/Usuarios') }}">Registro Usuarios</a></li>
            {{--<li><a href="#">Suscripciones</a></li>--}}
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="menu-icon fa fa-group"></i> 
            <span>Nomina</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/lista/Empleado') }}">Empleados</a></li>
            <li><a href="#">Nominas</a></li>>
          </ul>
        </li>
               

      