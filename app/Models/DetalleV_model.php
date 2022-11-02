<?php
namespace App\Models;

use CodeIgniter\Model;

class DetalleV_model extends Model {	
    protected $table = 'ventas_detalle';
    protected $primaryKey = 'id_detalle';
    protected $allowedFields = ['venta_id', 'producto_id', 'cantidad', 'precio_venta', 'total'];
    
    public function ver_detalle($id){
        $db = \Config\Database::connect();
		$builder = $db->table('ventas_detalle');
		$builder->select('*');
		$builder->where('venta_id', $id);
        $builder->join('productos', 'ventas_detalle.producto_id = productos.id_producto');
        $builder->join('ventas_cabecera', 'ventas_cabecera.id_ventas = ventas_detalle.venta_id');
        $builder->join('usuarios', 'ventas_cabecera.usuario_id = usuarios.id_usuario');
        $query = $builder->get();
		return $query->getResult();       
    }
}