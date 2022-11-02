<?php
namespace App\Models;

use CodeIgniter\Model;

class Carrito_model extends Model {	
    protected $table = 'ventas_cabecera';
    protected $primaryKey = 'id_ventas';
    protected $allowedFields = ['fecha', 'usuario_id', 'total_venta'];

	public function ver_compra(){
		$db = \Config\Database::connect();
		$builder = $db->table('ventas_cabecera');
		$builder->select('*');
		$builder->join('usuarios', 'ventas_cabecera.usuario_id = usuarios.id_usuario');
		$query = $builder->get();
		return $query->getResult(); 
	}
	public function ver_compraUsuario($id){
		$db = \Config\Database::connect();
		$builder = $db->table('ventas_cabecera');
		$builder->select('*');
		$builder->where('usuario_id', $id);
		$builder->join('usuarios', 'ventas_cabecera.usuario_id = usuarios.id_usuario');
		$query = $builder->get();
		return $query->getResult();             
    }
	public function cantidad_compra2($id){
		$db = \Config\Database::connect();
		$builder = $db->table('ventas_cabecera');
		$builder->select('*');
		$builder->where('venta_id',$id);
		$query = $db->table('ventas_cabecera')->countAll();
        return intval($query);
	}
}