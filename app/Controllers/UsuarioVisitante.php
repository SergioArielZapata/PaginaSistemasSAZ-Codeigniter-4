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

class UsuarioVisitante extends BaseController{
	public function __construct()
    {
        helper(['url', 'form']);
    }
	public function index()
	{
		$titulo = array('titulo' => 'Sistemas SAZ InforPOWER');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('index');	
		echo view('partes/footer_view');
	}
	public function qSomos()
	{
		$titulo = array('titulo' => 'Quienes Somos');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/quienesSomos');
		echo view('partes/footer_view');
	}
	public function contacto()
	{
		$titulo = array('titulo' => 'Contacto');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/contacto');
		echo view('partes/footer_view');
	}
	public function comercializacion()
	{
		$titulo = array('titulo' => 'Comercialización');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/comercializacion');
		echo view('partes/footer_view');
	}
	public function terminos()
	{
		$titulo = array('titulo' => 'Terminos y Uso');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/terminos');
		echo view('partes/footer_view');
	}
	public function catalogoVisi()
	{
		$titulo = array('titulo' => 'Productos');
		$dato = new Productos_model();
		$data ['productos'] = $dato->ver_productos();
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/catalogoVisi',$data);
		echo view('partes/footer_view');
	}
	public function comoComprar()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/comoComprar');
		echo view('partes/footer_view');
	}
	public function envios()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/envios');
		echo view('partes/footer_view');
	}
	public function formaPago()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/formaPago');
		echo view('partes/footer_view');
	}
	public function detalleProducto($id_producto)
	{
		$titulo = array('titulo' => 'Productos');
		$dato = new Productos_model();
		$data ['productos'] = $dato->ver_productosID($id_producto);
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/detalleProducto',$data);
		echo view('partes/footer_view');
	}
	public function actualizacion()
	{
		$titulo = array('titulo' => 'En Construcción');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/paginaError');
		echo view('partes/footer_view');
	}
	
	public function agregausuario_view(){	
		$titulo = array('titulo' => 'Login y Registro');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/agregausuario_view');
		echo view('partes/footer_view');
	}
	public function agregausuario_view2(){	
		$titulo = array('titulo' => 'Login y Registro');
		echo view('partes/header_view',$titulo);
		echo view('partes/menu_view');
		echo view('UsuarioVisitante/agregausuario_view2');
		echo view('partes/footer_view');
	}
/*Inicio funcion de registro */
//+++++++++++++++++++++++++++++++Registra nuevo usuario+++++++++++++++++++++++++++++++++
public function registrar_usuario(){
	$userModel = new Usuarios_Model();
	$request= \Config\Services::request();
	$validation = service('validation');
		$validation->setRules([
			'nombre' => 'required',
        	'apellido' => 'required',
			'correo' => 'required|is_unique[usuarios.correo]',
        	'usuario' => 'required|max_length[25]|is_unique[usuarios.usuario]',
        	'pass' => 'required|min_length[8]',
		]);
		if (!$validation->withRequest($this->request)->run()){
			return redirect()->back()->withInput()->with('errors', $validation->getErrors());
		}else{
		$data=array(
			'nombre' => $request->getPost('nombre'),
			'apellido' => $request->getPost('apellido'),
			'correo' => trim($request->getPost('correo')),
			'direccion' => 'Ingrese dirección',
			'telefono' => 'Ingrese Teléfono',
			'codigo_postal' => 0,
			'ciudad' => 'Ingrese Ciudad',
			'usuario' => trim($request->getPost('usuario')),
			'pass' => trim(base64_encode($request->getPost('pass'))),
			'idPerfil' => 2,
			'estado' => 1,
		);
		$userModel->insert($data);
		return redirect('agregausuario_view2');
		}
}
//++++++++++++++++++++++++++++++++++Login del usuario++++++++++++++++++++++++++++++++++++
public function iniciar_sesion(){
		$session = session();
        $userModel = new Usuarios_model();
		$request= \Config\Services::request();
		$validation = service('validation');
		$passLog = trim(base64_encode($request->getPost('passLogin')));
		$email = trim($request->getPost('correoLogin'));

		$validation->setRules([
			'correoLogin' => 'required|min_length[8]|max_length[50]|is_not_unique[usuarios.correo]',
        	'passLogin' => 'required|min_length[4]|max_length[50]',
		]);
		if (!$validation->withRequest($this->request)->run()){
			return redirect()->back()->withInput()->with('errors', $validation->getErrors());
		}
		$datas = $userModel->where('correo', $email)->first();
		$pass = $datas['pass'];
            if ($passLog == $pass) {
                $data_pass = [
                    'id_usuario' => $datas['id_usuario'],
                    'nombre' => $datas['nombre'],
                    'apellido' => $datas['apellido'],
                    'email' => $datas['correo'],
                    'usuario' => $datas['usuario'],
                    'perfil_id' => $datas['idPerfil'],
                    'isLoggedIn' => true
                ];
                $session->set($data_pass);
                switch($data_pass['perfil_id']){
					case '1':
						return redirect()->to('indexAdmin');
						break;
					case '2':
						return redirect()->to('indexU');
						break;
				}
            }else{
                return redirect()->back()->withInput()->with('msg', ['body' => 'Password Incorrecto.']);
            }
}
//+++++++++++++++++++++++++++++++Inserta consulta del usuario+++++++++++++++++++++++++++++++++
public function insertar_consulta2(){
		$session = session();
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
			$this->contacto();
			return true;
	}
}
//+++++++++++++++++++++++++++++++Cierra sesion usuario longueado+++++++++++++++++++++++++++++++++
public function cerrar_sesion(){
	session()->destroy();
    return redirect()->to('/');
}
}