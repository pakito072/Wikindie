<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  // Definir la tabla que usaremos
  protected $table = 'users';

  // Clave primaria de la tabla
  protected $primaryKey = 'id';

  // Columnas de la tabla que se pueden insertar o actualizar
  protected $allowedFields = [
    'username',
    'email',
    'password',
    'role_id',
    'avatar',
    'created_at',
    'updated_at',
    'is_disabled'
  ];


  protected $useTimestamps = true;
  protected $defaults = [
    'avatar' => 'assets/media/cats/avatars/default.jpg'
  ];
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';

  public function getUserWithRole($userId)
  {
    return $this->select('users.*, roles.name as role_name')
      ->join('roles', 'users.role_id = roles.id', 'left')
      ->where('users.id', $userId)
      ->first();
  }
}