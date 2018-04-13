<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
//Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//Route::group(['middleware' => 'auth'], function () {
    
      /*
      | 
      |Rutas con sesión
      |
      */    
    
//});
// Rutas de administrador
Route::middleware(['auth','admin'])->prefix('admin')->group(function (){
	//REGISTRO USUARIOS
	Route::get('/Registro/Usuarios','RegistroUsuariosController@indexRegistro');
	Route::post('/Registro','RegistroUsuariosController@create');
	Route::get('/Registro/{id}/edit','RegistroUsuariosController@edit');//formulario de edicion
	Route::post('/Registro/{id}/edit','RegistroUsuariosController@update');//actualizar
	Route::delete('/Registro/{id}','RegistroUsuariosController@destroy');
//Termina Registro Usuarios

	//Compra
	Route::get('/producto', 'SalesController@Busquedaindex');
	Route::get('/producto/addproducto', 'SalesController@agregarproducto');
	Route::get('/Compra/ListaPrecio', 'salePriceController@buscarPrecio');
	Route::get('/Compra/Proveedores', 'saleProveedorController@buscarProvedores');
	Route::get('/Compra/Proveedores/Agregar', 'saleProveedorController@agregarProvedores');
	Route::get('/Compra/ListaOrdenes', 'saleOrdenCostController@BuscarOrdenes');
	Route::get('/Compra/ListaOrdenes/Agregar', 'saleOrdenCostController@AgregarOrden');
	Route::get('/Compra/Gastos', 'saleExpensesController@buscarGastos');
	Route::get('/Compra/Gastos/Agregar', 'saleExpensesController@agregarGastos');
	//editar si es necesario
	


	//INICIA Produccion
	//formulas
	Route::get('/formulas', 'FormulasController@index');
	Route::get('/create', 'FormulasController@create');
	
	Route::get('/Busqueda/Ordenes', 'OrdenesController@indexOrdenes');
	Route::get('/Nueva/Ordenes', 'OrdenesController@create');
	//termina produccion

	//INICIA Ventas
	//Concepto ventas
	Route::get('/ConceptoVentas', 'ConceptoVentaController@MostrarVenta');
	Route::get('/ConceptoVentas/agregar', 'ConceptoVentaController@agregarVenta');
	//prospecto
	Route::get('/prospecto', 'prospectoController@index');
	Route::get('/prospecto/agregar', 'prospectoController@agregarprospecto');
	//Cliente
	Route::get('/Cliente', 'ClienteController@index');
	//cotizacion
	Route::get('/Cotizacion', 'CotizacionController@index');

	Route::get('/perdidos', 'PedidosController@index');
	
	
	//termina ventas
	
	//INICIA finanzas
	Route::get('/BancosCajas', 'FinanzasController@index');
	Route::get('/BancosCajas/agregar', 'FinanzasController@agregarBancos');
	Route::get('/Conciliaciones', 'ConciliacionesController@index');
	Route::get('/Conciliaciones/agregar', 'ConciliacionesController@index');
	Route::get('/CuentasCobrar', 'CuentasCobrarController@index');
	Route::get('/CuentasPorPagar', 'CuentasPagarController@indexCuentaPagar');
	Route::get('/Ingresos', 'IngresosController@indexIngresos');
	Route::get('/Ingresos/agregar', 'IngresosController@agregarIngresos');
	Route::get('/Egresos', 'EgresosController@MostrarEgresos');
	Route::get('/Egresos/PagosGastos', 'EgresosController@agregarPagos');
	Route::get('/Egresos/PagosCostos', 'EgresosController@agregarGastos');
	//INICIA INVENTARIOS
	Route::get('/Inventarios/Lista', 'stockStoreController@BuscarAlmacen');
	Route::get('/Inventarios/Lista/agregar', 'stockStoreController@agregarAlmacen');
	Route::get('/Inventarios/Recepcion', 'stockReceptionController@buscarRecepcion');
	Route::get('/Inventarios/Recepcion/agregar', 'stockReceptionController@agregarRecepcion');
	//Trermina aprovisionamiento
	
	//INICIA Nomina
	Route::get('/lista/Empleado', 'EmpleadosController@indexEmpleado');
	Route::get('/agregar/Empleado', 'EmpleadosController@crearEmpleado');
	Route::post('/agregar/Empleado', 'EmpleadosController@create');
	//Termina Nomina
});
//Termina rutas de administador

//Rutas de Compras
Route::middleware(['auth','Purchases'])->group(function (){
	Route::get('/producto', 'SalesController@Busquedaindex');
	Route::get('/producto/addproducto', 'SalesController@agregarproducto');
	Route::get('/Compra/ListaPrecio', 'salePriceController@buscarPrecio');
	Route::get('/Compra/Proveedores', 'saleProveedorController@buscarProvedores');
	Route::get('/Compra/Proveedores/Agregar', 'saleProveedorController@agregarProvedores');
	Route::get('/Compra/ListaOrdenes', 'saleOrdenCostController@BuscarOrdenes');
	Route::get('/Compra/ListaOrdenes/Agregar', 'saleOrdenCostController@AgregarOrden');
	Route::get('/Compra/Gastos', 'saleExpensesController@buscarGastos');
	Route::get('/Compra/Gastos/Agregar', 'saleExpensesController@agregarGastos');
});
//Termina Rutas de Compras

//Rutas de Produccion
Route::middleware(['auth','production'])->group(function (){
	Route::get('/formulas', 'FormulasController@index');
	Route::get('/create', 'FormulasController@create');
	Route::get('/Busqueda/Ordenes', 'OrdenesController@indexOrdenes');
	Route::get('/Nueva/Ordenes', 'OrdenesController@create');

});
//Termina Rutas de Produccion

//Rutas de INVENTARIOS
Route::middleware(['auth','Provisioning'])->group(function (){
	Route::get('/Inventarios/Lista', 'stockStoreController@BuscarAlmacen');
	Route::get('/Inventarios/Lista/agregar', 'stockStoreController@agregarAlmacen');
	Route::get('/Inventarios/Recepcion', 'stockReceptionController@buscarRecepcion');
	Route::get('/Inventarios/Recepcion/agregar', 'stockReceptionController@agregarRecepcion');
});
//Termina Rutas de INVENTARIOS


//Rutas de ventas
Route::middleware(['auth','sale'])->group(function (){
	//Route::get('/venta', 'SalesController@index');
	Route::get('/prospecto', 'prospectoController@index');

	Route::get('/Cliente', 'ClienteController@index');

	Route::get('/Cotizacion', 'CotizacionController@index');

	Route::get('/perdidos', 'PedidosController@index');
	
	Route::get('/PuntoVenta', 'PuntoVentaController@index');
});
//Termina Rutas de Ventas



//Rutas de Finanzas
Route::middleware(['auth','finance'])->group(function (){
	Route::get('/BancosCajas', 'FinanzasController@index');
	Route::get('/Conciliaciones', 'ConciliacionesController@index');
	Route::get('/CuentasCobrar', 'CuentasCobrarController@index');
});
//Termina Rutas de Finanzas



//Rutas de Nomina 
Route::middleware(['auth','RH'])->group(function (){
	Route::get('/lista/Empleado', 'EmpleadosController@indexEmpleado');
	Route::get('/agregar/Empleado', 'EmpleadosController@crearEmpleado');
});