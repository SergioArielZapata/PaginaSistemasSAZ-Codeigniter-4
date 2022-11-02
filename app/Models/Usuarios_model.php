<?php
namespace App\Models;

use CodeIgniter\Model;

class Usuarios_model extends Model {
	protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'correo', 'direccion', 'telefono', 'codigo_postal', 'ciudad', 'usuario', 'pass', 'idPerfil', 'estado'];

	public function ver_usuarios(){
		$db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        $builder->select('*');
		$builder->where('idPerfil','2');
        $builder->where('estado','1');
		$builder->join('perfil', 'perfil.id = usuarios.idPerfil');
		$query = $builder->get();
        return $query->getResult();    
	}
	public function ver_usuarios2(){
		$db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        $builder->select('*');
		$builder->where('idPerfil','2');
        $builder->where('estado','0');
		$builder->join('perfil', 'perfil.id = usuarios.idPerfil');
		$query = $builder->get();
        return $query->getResult();    
	}
}