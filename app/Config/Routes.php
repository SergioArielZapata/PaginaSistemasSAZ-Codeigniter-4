<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/*Rutas para el usuario común */
$routes->get('/', 'UsuarioVisitante::index');
$routes->get('quienesSomos', 'UsuarioVisitante::qSomos');
$routes->get('contacto', 'UsuarioVisitante::contacto');
$routes->get('comercializacion', 'UsuarioVisitante::comercializacion');
$routes->get('terminos', 'UsuarioVisitante::terminos');
$routes->get('catalogoVisi', 'UsuarioVisitante::catalogoVisi');
$routes->get('comoComprar', 'UsuarioVisitante::comoComprar');
$routes->get('formaPago', 'UsuarioVisitante::formaPago');
$routes->get('agregausuario_view', 'UsuarioVisitante::agregausuario_view');
$routes->get('agregausuario_view2', 'UsuarioVisitante::agregausuario_view2');
$routes->post('registro', 'UsuarioVisitante::registrar_usuario');
$routes->post('login', 'UsuarioVisitante::iniciar_sesion');
$routes->get('cerrarSesion', 'UsuarioVisitante::cerrar_sesion');
$routes->post('consulta2', 'UsuarioVisitante::insertar_consulta2');
$routes->get('envios', 'UsuarioVisitante::envios');
$routes->get('detalleProducto(:num)', 'UsuarioVisitante::detalleProducto/$1');

/*Rutas para el usuario Registrado*/
$routes->get('indexU', 'UsuarioRegistrado::indexU');
$routes->get('comercializacionU', 'UsuarioRegistrado::comercializacion');
$routes->get('quienesSomosU', 'UsuarioRegistrado::qSomos');
$routes->get('terminosU', 'UsuarioRegistrado::terminos');
$routes->get('contactoU', 'UsuarioRegistrado::contacto');
$routes->get('consultaU', 'UsuarioRegistrado::consulta');
$routes->get('comoComprarU', 'UsuarioRegistrado::comoComprarU');
$routes->get('enviosU', 'UsuarioRegistrado::envios');
$routes->get('formaPagoU', 'UsuarioRegistrado::formaPago');
$routes->get('carrito', 'UsuarioRegistrado::carrito');
$routes->get('catalogoRegi', 'UsuarioRegistrado::catalogoRegi');
$routes->get('misCompras', 'UsuarioRegistrado::misCompras');
$routes->get('miCuenta', 'UsuarioRegistrado::miCuenta');
$routes->post('actualizarUs', 'UsuarioRegistrado::actualizarUsuario');
$routes->get('factura(:num)', 'UsuarioRegistrado::factura/$1');
$routes->get('factu(:num)', 'UsuarioRegistrado::factu/$1');
$routes->post('consulta', 'UsuarioRegistrado::insertar_consulta');

/*Rutas para el Administrador*/
$routes->get('indexAdmin', 'Administrador::indexAdmin');
$routes->get('listaProductos', 'Administrador::listaProductos');
$routes->get('altaProductos', 'Administrador::altaProductos');
$routes->get('bajaProductos', 'Administrador::bajaProductos');
$routes->get('modiProductos', 'Administrador::modiProductos');
$routes->get('modificacionProductos(:num)', 'Administrador::modificacionProductos/$1');
$routes->get('modificacionImagen(:num)', 'Administrador::modificacionImagen/$1');
$routes->get('productosBaja', 'Administrador::productosBaja');
$routes->get('controlVentas', 'Administrador::controlVentas');
$routes->get('consultas', 'Administrador::consultas');
$routes->get('consultas2', 'Administrador::consultas2');
$routes->get('usuarios', 'Administrador::usuarios');
$routes->get('usuarios2', 'Administrador::usuarios2');
$routes->get('facturaAd(:num)', 'Administrador::facturaAd/$1');
$routes->get('bajaCon(:num)', 'Administrador::bajaConsulta/$1');
$routes->post('alta', 'Administrador::registrar_producto');
$routes->post('modificar(:num)', 'Administrador::modificar/$1');
$routes->post('modificarIma(:num)', 'Administrador::modificarIma/$1');
$routes->get('baja(:num)', 'Administrador::bajaLogica/$1');
$routes->get('activar(:num)', 'Administrador::activacionLogica/$1');
$routes->get('bajaUsu(:num)', 'Administrador::bajaUsuario/$1');
$routes->get('altaUsu(:num)', 'Administrador::altaUsuario/$1');
$routes->get('listadoVentas', 'Administrador::listadoVentas');
$routes->get('ventasFechas', 'Administrador::ventasFechas');
$routes->post('listadoFecha', 'Administrador::listadoFecha');
$routes->get('altaCategoria', 'Administrador::altaCategoria');
$routes->post('alta_Categoria', 'Administrador::alta_Categoria');
$routes->get('bajaCategoria', 'Administrador::bajaCategoria');
$routes->post('baja_Categoria', 'Administrador::baja_Categoria');
$routes->get('modiCategoria', 'Administrador::modiCategoria');
$routes->post('modi_Categoria', 'Administrador::modi_Categoria');

//Rutas para el Carrito
$routes->post('agregarCarrito', 'carrito_controller::agregarCarrito');
$routes->post('actualizarCarrito', 'carrito_controller::actualizar_carrito');
$routes->get('eliminarUnidad/(:any)', 'carrito_controller::remove/$1');
$routes->get('vaciarCarrito', 'carrito_controller::eliminarCarrito');
$routes->get('comprarCarrito(:num)', 'carrito_controller::comprarCarrito/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
