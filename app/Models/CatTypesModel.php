<?php

namespace App\Models;

use CodeIgniter\Model;

class CatTypesModel extends Model
{
  // Definir la tabla que usaremos
  protected $table = 'cat_types';

  // Clave primaria de la tabla
  protected $primaryKey = 'id';

  // Columnas de la tabla que se pueden insertar o actualizar
  protected $allowedFields = [
    'name',
    'description',
    'created_at',
    'updated_at',
    'is_disabled'
  ];

  // Configuración de la base de datos
  protected $useTimestamps = true;  // Para que se gestionen automáticamente los campos 'created_at' y 'updated_at'
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
}