<?php

namespace App\Controllers;

use App\Models\Productos_model;
use App\Models\Usuarios_model;
use App\Models\Carrito_model;
use App\Models\Administrador_model;
use App\Models\DetalleV_model;
use App\Models\Consultas_model;
use App\Models\Categorias_model;
use App\Services\Config;

class UsuarioRegistrado extends BaseController{
	public function __construct()
    {
        helper(['url', 'form']);
    }
	public function indexU()
	{
		$titulo = array('titulo' => 'Sistemas SAZ');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/index');	
		echo view('partes/footer_view');
	}
	public function comoComprarU()
	{
		$titulo = array('titulo' => 'Como Comprar');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/comoComprarU');
		echo view('partes/footer_view');
	}
	public function envios()
	{
		$titulo = array('titulo' => 'Envios');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/envios');
		echo view('partes/footer_view');
	}
	public function formaPago()
	{
		$titulo = array('titulo' => 'Comercialización - Forma de pago');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/formaPago');
		echo view('partes/footer_view');
	}
	public function comercializacion()
	{
		$titulo = array('titulo' => 'Comercialización');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/comercializacion');
		echo view('partes/footer_view');
	}
	public function qSomos()
	{
		$titulo = array('titulo' => 'Quienes Somos');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/quienesSomos');
		echo view('partes/footer_view');
	}
	public function terminos()
	{
		$titulo = array('titulo' => 'Terminos y Uso');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/terminos');
		echo view('partes/footer_view');
	}
	public function contacto()
	{
		$titulo = array('titulo' => 'Contacto');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/contactoU');
		echo view('partes/footer_view');
	}
	public function consulta()
	{
		$titulo = array('titulo' => 'Consulta');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/consultaU',);
		echo view('partes/footer_view');
	}
	public function catalogoRegi()
	{
		$titulo = array('titulo' => 'Productos');
		$dato = new Productos_model();
		$data ['productos'] = $dato->ver_productos();
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/catalogoRegi',$data);
		echo view('partes/footer_view');
	}
	public function misCompras()
	{
		$titulo = array('titulo' => 'Mis Compras');
		$id_usu = (session('id_usuario'));
		$ventas = new Carrito_model();
		$compra['compra'] = $ventas->ver_compraUsuario($id_usu);
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/comprasRealizadas',$compra);
		echo view('partes/footer_view');
	}
	public function miCuenta()
	{
		$titulo = array('titulo' => 'Modificación');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/cuenta');
		echo view('partes/footer_view');
	}
		public function factura($id_venta)
	{
		$venta = new DetalleV_model();
		$compra['compra']= $venta->ver_detalle($id_venta);
		$titulo = array('titulo' => 'Factura');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/factura',$compra);
		echo view('partes/footer_view');
	}
		public function factu($id_venta)
	{
		$venta = new DetalleV_model();
		$compra['compra']= $venta->ver_detalle($id_venta);
		echo view('UsuarioRegistrado/factura2',$compra);
	}
	public function carrito()
	{
		$titulo = array('titulo' => 'Carrito');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuUser_view');
		echo view('UsuarioRegistrado/carrito');
		echo view('partes/footer_view');
	}
/*Funciones Varias*/
//+++++++++++++++++++++++++++Actualiza Datos del Usuario+++++++++++++++++++++++++++++
	public function actualizarUsuario(){
		$userModel = new Usuarios_model();
		$request= \Config\Services::request();
		$validation = service('validation');
		$validation->setRules([
			'nombre' => 'required',
        	'apellido' => 'required',
			'correo' => 'required',
        	'usuario' => 'required|max_length[25]',
        	'pass' => 'required|min_length[4]',
			'direccion' => 'required',
        	'telefono' => 'required|min_length[10]',
        	'ciudad' => 'required|min_length[4]',
        	'codPostal' => 'required|min_length[4]',
		]);
		if (!$validation->withRequest($this->request)->run()){
			return redirect()->back()->withInput()->with('errors', $validation->getErrors());
		}else{
		$data=array(
			'id_usuario' => $request->getPost('id'),
			'nombre' => $request->getPost('nombre'),
			'apellido' => $request->getPost('apellido'),
			'correo' => trim($request->getPost('correo')),
			'direccion' => $request->getPost('direccion'),
			'telefono' => $request->getPost('telefono'),
			'codigo_postal' => $request->getPost('codPostal'),
			'ciudad' => $request->getPost('ciudad'),
			'usuario' => trim($request->getPost('usuario')),
			'pass' => trim(base64_encode($request->getPost('pass'))),
			'idPerfil' => $request->getPost('idPerfil'),
			'estado' => $request->getPost('estado'),
		);
		$id_us = $data['id_usuario'];
		$userModel->update($id_us, $data);
		echo  "<script>alert('La cuenta se actualizo correctamente.')</script>";
		$this->miCuenta();
		}
	}
	//+++++++++++++++++++++++++++Inserta Consulta del usuario+++++++++++++++++++++++++++++
    public function insertar_consulta(){
        $consulModel = new Consultas_model();
		$request= \Config\Services::request();
		$validation = service('validation');
		$validation->setRules([
			'nombre' => 'required|min_length[1]|max_length[50]',
        	'correo' => 'required|min_length[8]|max_length[50]',
			'mensaje' => 'required|min_length[1]|max_length[200]',
		]);
		if (!$validation->withRequest($this->request)->run()){
			return redirect()->back()->withInput()->with('errors', $validation->getErrors());
		}else{
			$data=array(
			'usuario' => $request->getPost('nombre'),
			'correo' => $request->getPost('correo'),
			'perfil_id' => $request->getPost('perfil_id'),
			'mensaje' => $request->getPost('mensaje'),
			'fecha' => $request->getPost('fecha'),
			'estado'=> 1,
		);
		$consulModel->insert($data);
			echo  "<script>alert('Consulta enviada exitosamente, le contestaremos a la brevedad.')</script>";			
			$this->consulta();
			return true;
		}
	}
}