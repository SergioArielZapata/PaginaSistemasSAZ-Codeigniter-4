<?php
namespace App\Models;

use CodeIgniter\Model;

class Consultas_model extends Model {
	protected $table      = 'consultas';
    protected $primaryKey = 'id_consulta';
    protected $allowedFields = ['usuario', 'correo', 'perfil_id', 'mensaje', 'fecha', 'estado'];

    public function ver_consultas(){
        $db = \Config\Database::connect();
        $builder = $db->table('consultas');
        $builder->select('*');
        $builder->join('perfil', 'perfil.id = consultas.perfil_id');
        $builder->where('estado','1');
        $query = $builder->get();
        return $query->getResult();
    }
    public function ver_consultas2(){
        $db = \Config\Database::connect();
        $builder = $db->table('consultas');
        $builder->select('*');
        $builder->join('perfil', 'perfil.id = consultas.perfil_id');
        $builder->where('estado','0');
        $query = $builder->get();
        return $query->getResult();          
    }
}