<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'first_name',
    'last_name',
    'email',
    'phone_number',
    'password',
    'created_at',
    'updated_at',
    'role_id'
  ];
  protected $useTimestamps = true;
}

