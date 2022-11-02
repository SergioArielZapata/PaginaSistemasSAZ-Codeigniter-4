<?php
namespace App\Models;

use CodeIgniter\Model;

class Productos_model extends Model {	
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['categoria_id', 'nombre', 'descripcion', 'precio', 'stock', 'Imagendb', 'estado'];  
    
    public function ver_productos(){
        $db = \Config\Database::connect();
        $builder = $db->table('productos');
        $builder->select('*');
        $builder->join('categorias', 'categorias.id = productos.categoria_id');
        $builder->where('estado', '1');
        $builder->where('stock >=', '1');
        $query = $builder->get();
        return $query->getResult();           
    }
    public function ver_productosA(){
        $db = \Config\Database::connect();
        $builder = $db->table('productos');
        $builder->select('*');
        $builder->join('categorias', 'categorias.id = productos.categoria_id');
        $builder->where('estado', '1');
        $query = $builder->get();
        return $query->getResult();       
    }
    public function ver_bajaProductos(){
        $db = \Config\Database::connect();
        $builder = $db->table('productos');
        $builder->select('*');
        $builder->join('categorias', 'categorias.id = productos.categoria_id');
        $builder->where('estado', '0');
        $query = $builder->get();
        return $query->getResult(); 
    }
    public function ver_productosId($id_producto){
        $db = \Config\Database::connect();
        $builder = $db->table('productos');
        $builder->select('*');
        $builder->join('categorias', 'categorias.id = productos.categoria_id');
        $builder->where('id_producto',$id_producto);
        $query = $builder->get();
        return $query->getRow(); 
    }
    public function seleccionar_categoria(){
        $db = \Config\Database::connect();
        $builder = $db->table('categorias');
        $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }    
	 public function seleccionar_categoria_sin_0(){
        $db = \Config\Database::connect();
        $builder = $db->table('categorias');
        $builder->select('*');
        $builder->where('id >', '0');
        $query = $builder->get();
        return $query->getResult();
    }
    public function actualizar_stock($id_producto, $cantidad){
        $this->where('id_producto', $id_producto);
        $this->set('stock', "stock - $cantidad", FALSE);
        $this->update();
    }
}