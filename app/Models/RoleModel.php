<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
  // Definir la tabla que usaremos
  protected $table = 'roles';

  // Clave primaria de la tabla
  protected $primaryKey = 'id';

  // Columnas de la tabla que se pueden insertar o actualizar
  protected $allowedFields = [
    'name',
    'created_at',
    'updated_at',
    'is_disabled'
  ];
}