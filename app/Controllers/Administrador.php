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

class Administrador extends BaseController{
	public function __construct()
    {
        helper(['url', 'form']);
    }
  public function indexAdmin()
  {            
    $titulo = array('titulo' => 'Inicio');
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/indexAdmin');
    echo view('partes/footerAdmin_view');
  }
  public function controlVentas(){  
    $ventas = new Carrito_model();
    $data['ventas']= $ventas->ver_compra();           
    $titulo = array('titulo' => 'Control de Ventas');
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/controlVentas',$data);
    echo view('partes/footerAdmin_view');
  }
  public function listadoVentas(){  
    $ventas = new Carrito_model();
    $data['ventas']= $ventas->ver_compra();
    echo view('Administrador/listadoVentas',$data);
  }
  public function listadoFecha(){
    $ventas = new Carrito_model();
    $data['ventas']= $ventas->ver_compra();
    echo view('Administrador/listadoFecha',$data);
  }
  public function ventasFechas(){
    $titulo = array('titulo' => 'Listado por fechas');  
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/ventasFechas');
    echo view('partes/footerAdmin_view');
  }
  public function altaCategoria(){
    $titulo = array('titulo' => 'Alta de Categoría');  
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/altaCategoria');
    echo view('partes/footerAdmin_view');
  }
  public function bajaCategoria(){
    $titulo = array('titulo' => 'Baja de Categoría');  
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/bajaCategoria');
    echo view('partes/footerAdmin_view');
  }
  public function modiCategoria(){
    $titulo = array('titulo' => 'Modificación de Categoría');  
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/modiCategoria');
    echo view('partes/footerAdmin_view');
  }
  public function consultas(){            
    $titulo = array('titulo' => 'Consultas de Usuarios');
    $consulta = new Consultas_model();
    $data['consultas'] = $consulta->ver_consultas();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/consultas',$data);
    echo view('partes/footerAdmin_view');
  }
  public function consultas2(){            
    $titulo = array('titulo' => 'Consultas de Usuarios');
    $consulta = new Consultas_model();
    $data['consultas'] = $consulta->ver_consultas2();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/consultas2',$data);
    echo view('partes/footerAdmin_view');
  }
  public function usuarios(){            
    $titulo = array('titulo' => 'Consultas de Usuarios');
    $usu = new Usuarios_model();
    $data['usuarios'] = $usu->ver_usuarios();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/usuarios',$data);
    echo view('partes/footerAdmin_view');
  }
  public function usuarios2()
  {            
    $titulo = array('titulo' => 'Consultas de Usuarios');
    $usu = new Usuarios_model();
    $data['usuarios'] = $usu->ver_usuarios2();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/usuarios2',$data);
    echo view('partes/footerAdmin_view');
  }
  public function facturaAd($id_venta)
	{
		$venta = new DetalleV_model();
		$compra['compra']= $venta->ver_detalle($id_venta);
		$titulo = array('titulo' => 'Factura');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuAdmin_view');
		echo view('Administrador/facturaAd',$compra);
		echo view('partes/footerAdmin_view');
  }
  public function listaProductos()
  {            
    $titulo = array('titulo' => 'Productos');
    $dato = new Productos_model();
		$data ['productos'] = $dato->ver_productosA();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/productos',$data);
    echo view('partes/footerAdmin_view');
  }
  public function altaProductos()
	{
		$titulo = array('titulo' => 'Altas de Productos');
		echo view('partes/header_view',$titulo);
		echo view('partes/menuAdmin_view');
		echo view('Administrador/altas');
		echo view('partes/footerAdmin_view');
	}
  public function bajaProductos()
  {            
    $titulo = array('titulo' => 'Baja de Productos');
    $dato = new Productos_model();
		$data ['productos'] = $dato->ver_productosA();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/bajaProductos',$data);
    echo view('partes/footerAdmin_view');
  }
  public function modiProductos()
  {      
    $titulo = array('titulo' => ' Modificación de Productos');      
    $dato = new Productos_model();
		$data ['productos'] = $dato->ver_productosA();
    echo view('partes/header_view',$titulo);
    echo view('partes/menuAdmin_view');
    echo view('Administrador/modiProductos',$data);
    echo view('partes/footerAdmin_view');
  }
  public function modificacionProductos($id_producto)
	{    
		$titulo = array('titulo' => 'Modificaciones');
    $id = array('id_producto' => $id_producto);
		echo view('partes/header_view',$titulo);
		echo view('partes/menuAdmin_view');    
		echo view('Administrador/modificacionesProd',$id);
		echo view('partes/footerAdmin_view');
	}
  public function modificacionImagen($id_producto)
	{    
		$titulo = array('titulo' => 'Modificaciones');
    $id = array('id_producto' => $id_producto);
		echo view('partes/header_view',$titulo);
		echo view('partes/menuAdmin_view');    
		echo view('Administrador/modificacionesImagen',$id);
		echo view('partes/footerAdmin_view');
	}
  public function productosBaja()
 {
   $titulo = array('titulo' => 'baja de Productos');
   $dato = new Productos_model();
	 $data ['productos'] = $dato->ver_bajaProductos();
   echo view('partes/header_view',$titulo);
   echo view('partes/menuAdmin_view');
   echo view('Administrador/productoBaja',$data);
   echo view('partes/footerAdmin_view');
 }
/*Funciones Varias*/
//+++++++++++++++++++++++++++++++Baja Logica de Consulta+++++++++++++++++++++++++++++++++
  public function bajaConsulta($id_consulta){
    $conModel = new Consultas_model;
    $consulta = array(
      'estado' => 0
    );
    $conModel->update($id_consulta,$consulta);  
    return redirect()->back();
	}
//++++++++++++++++++++++++++++++++++Alta de Productos++++++++++++++++++++++++++++++++++++
  public function registrar_producto(){
      $prodModel = new Productos_model;
      $cateModel = new Categorias_model;
      $request = \Config\Services::request();
      $validation = service('validation');
        $validation->setRules([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'precio' => 'required|numeric',
            'cantidad' =>'required|numeric',
            'imagen' => 'uploaded[imagen]|max_size[imagen,2048]',
        ]);
        if (!$validation->withRequest($this->request)->run()){
          return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }else{
        $data=array(
              'nombre' => $request->getPost('nombre'),
              'descripcion' => $request->getPost('descripcion'),
              'categoria_id' => $request->getPost('categoria'),
              'precio' => $request->getPost('precio'),
              'stock' => $request->getPost('cantidad'),
              'Imagendb' => file_get_contents($_FILES['imagen']['tmp_name']),
              'estado' => 1,
        );
        $prodModel->insert($data);
        echo  "<script>alert('El producto ha sido dado de ALTA exitosamente!!!')</script>";
        $id = $request->getPost('categoria');
        $asociada = array(
          'asociada' => 1
        );
        $cateModel->update($id, $asociada);
        return redirect()->back();
        }
    }
//++++++++++++++++++++++++++++++++++Alta de Categoria++++++++++++++++++++++++++++++++++++
  public function alta_Categoria(){
    $cateModel = new Categorias_model;
    $request = \Config\Services::request();
    $validation = service('validation');
      $validation->setRules([
          'cate' => 'required',
      ]);
      if (!$validation->withRequest($this->request)->run()){
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
      }else{
      $data=array(
            'nombreCate' => $request->getPost('cate'),
            'asociada' => 0,
            
      );
      $cateModel->insert($data);
      echo  "<script>alert('El producto ha sido dado de ALTA exitosamente!!!')</script>";
      $this->altaCategoria();
      }
  }
//++++++++++++++++++++++++++++++++++Baja de Categoria++++++++++++++++++++++++++++++++++++
  public function baja_Categoria(){
    $cateModel = new Categorias_model;
    $request = \Config\Services::request();
    $id = array(
      'id'    => $request->getPost('id_categoria'),
    );
    if($_POST["asociada"] == 1){
      echo  "<script>alert('Seleccionó una categoría Asociada a un producto, no puede ser removida intentelo nuevamente.')</script>";
      $this->bajaCategoria();
    }else{
      $cateModel->delete($id);
      echo  "<script>alert('La Categoría fue dada de BAJA exitosamente!!!')</script>";
      $this->bajaCategoria();
    return true;
        }
    }
//++++++++++++++++++++++++++++++Modificacion de Categoria++++++++++++++++++++++++++++++++
  public function modi_Categoria(){
    $cateModel = new Categorias_model;
    $request = \Config\Services::request();
    $validation = service('validation');
      $validation->setRules([
          'cate' => 'required',
      ]);
      if (!$validation->withRequest($this->request)->run()){
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
      }else{
      $data=array(
            'id' => $request->getPost('id'),
            'nombreCate' => $request->getPost('cate'),
      );
      $id_cate = $request->getPost('id');
      $cateModel->update($id_cate,$data);
      echo  "<script>alert('La Categoría fue MODIFICADA exitosamente!!!')</script>";
      $this->modiCategoria();
    }
  }
//++++++++++++++++++++++++++++++Modificacion de Producto+++++++++++++++++++++++++++++++++
  public function modificar($id_producto=null){
      $prodModel = new Productos_model;
      $request = \Config\Services::request();
      $validation = service('validation');
        $validation->setRules([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'precio' => 'required|numeric',
            'cantidad' =>'required|numeric',
        ]);
        if (!$validation->withRequest($this->request)->run()){
          return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }else{
        $data=array(
              'nombre' => $request->getPost('nombre'),
              'descripcion' => $request->getPost('descripcion'),
              'categoria_id' => $request->getPost('categoria'),
              'precio' => $request->getPost('precio'),
              'stock' => $request->getPost('cantidad'),
              'estado' => $request->getPost('estado'),
        );
        $id_prod = $request->getPost('id');
        $prodModel->update($id_prod, $data);
        $this->modiProductos();
        }
    }
//++++++++++++++++++++++++++++Cambia imagen de producto++++++++++++++++++++++++++++++++++
    public function modificarIma($id_producto=null){
      $prodModel = new Productos_model;
      $request = \Config\Services::request();
      $validation = service('validation');
        $validation->setRules([
          'imagen' => 'uploaded[imagen]|max_size[imagen,2048]',
        ]);
        if (!$validation->withRequest($this->request)->run()){
          return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }else{
        $data=array(
          'Imagendb' => file_get_contents($_FILES['imagen']['tmp_name']),
        );
        $id_prod = $request->getPost('id');
        $prodModel->update($id_prod, $data);
        $this->modiProductos();
        }
    }
//++++++++++++++++++++++++++++++++++Baja de Producto+++++++++++++++++++++++++++++++++++++
  public function bajaLogica($id_producto){
    $prodModel = new Productos_model;
    $producto = array(
      'estado' => 0
    );
    $prodModel->update($id_producto,$producto);  
    return redirect()->back();
  }
//+++++++++++++++++++++++++++++++Activacion de Producto++++++++++++++++++++++++++++++++++
  public function activacionLogica($id_producto){
    $prodModel = new Productos_model;
    $producto = array(
      'estado' => 1
    );
    $prodModel->update($id_producto,$producto);  
    return redirect()->back();
  }
//+++++++++++++++++++++++++++++++Baja Logica de Usuario++++++++++++++++++++++++++++++++++
  public function bajaUsuario($id_usuario){
    $usuModel = new Usuarios_model;
    $usuario = array(
      'estado' => 0
    );
    $usuModel->update($id_usuario,$usuario);  
    return redirect()->back();
  }
//+++++++++++++++++++++++++++++++Alta Logica de Usuario++++++++++++++++++++++++++++++++++
  public function altaUsuario($id_usuario){
    $usuModel = new Usuarios_model;
    $usuario = array(
      'estado' => 1
    );
    $usuModel->update($id_usuario,$usuario);  
    return redirect()->back();
  }
}