<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\BaseBuilder;

use App\Models\Productos_model;
use App\Models\Usuarios_model;
use App\Models\Carrito_model;
use App\Models\Administrador_model;
use App\Models\DetalleV_model;
use App\Models\Consultas_model;
use App\Models\Categorias_model;
use App\Services\Config;

class Carrito_controller extends BaseController {
public function __construct()
{
	helper(['form', 'url', 'cart']);
	$session = session();
	$cart = \Config\Services::cart();
	$cart->contents();

	if ($cart == null) {
		$cart = ['cart_total' => 0, 'total_items' => 0];
	}
	log_message('info', 'Cart Class Initialized');
}
//+++++++++++++++++++++++++++Agrega productos al carrito+++++++++++++++++++++++++++++
    public function agregarCarrito(){
		$cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $data = array(
            'id'      => $request->getPost('id_producto'),
            'qty'     => 1,
            'price'   => $request->getPost('precio'),
            'name'    => $request->getPost('nombre'),
            'imagen'  => $request->getPost('imagen')
        );
        $cart->insert($data);
        return redirect()->back()->withInput();
	}
//++++++++++++++++++++++++++Remueve producto del carrito++++++++++++++++++++++++++++
	public function remove($rowid){
		$cart = \Config\Services::cart();
        $cart->remove($rowid);
        return $this->response->redirect(site_url('carrito'));
	}
//++++++++++++++++++++++++++Realiza compra del producto+++++++++++++++++++++++++++++
	public function comprarCarrito(){
        helper(['form', 'uri']);
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        $cart->contents();
    
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'usuario_id' 	=> session()->get('id_usuario'),
			'total_venta'	=>  $cart->total(),
		);
		$ModelCabecera = new Carrito_model();
        $venta_id = $ModelCabecera->insert($venta);

		if ($cart = $cart->contents()):
			foreach ($cart as $item):
				$detalle_venta = array(
					'venta_id'  	=> $venta_id,
					'producto_id' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio_venta' 	=> $item['price'],
					'total' 		=> $item['subtotal']
					);
            	$ModelDetalle = new DetalleV_model();
                $ventaTotal = $ModelDetalle->insert($detalle_venta);

            	$productModel = new Productos_model();
                $productModel->actualizar_stock($item['id'],$item['qty']);
			endforeach;
		endif;
		$cart = \Config\Services::cart();
		$cart->destroy();
        return $this->response->redirect(site_url('carrito'));
	}
	//+++++++++++++++++Actualiza carrito cuando cambia la cantidad++++++++++++++++++
    public function actualizar_carrito(){
		$cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $data = $request->getPost();
		$cart->update($data); 
		return redirect('carrito');
	}
	//+++++++++++++++++++++++++Elimina datos del carrito++++++++++++++++++++++++++++
	public function eliminarCarrito() {
		$cart = \Config\Services::cart();
        $cart->destroy();
        return $this->response->redirect(site_url('carrito'));
	}
}