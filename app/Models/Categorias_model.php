<?php
namespace App\Models;

use CodeIgniter\Model;

class Categorias_model extends Model {
	protected $table      = 'categorias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombreCate', 'asociada'];
}