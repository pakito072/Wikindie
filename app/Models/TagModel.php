<?php

namespace App\Models;

use CodeIgniter\Model;

class TagModel extends Model
{
  protected $table = 'tags';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'name',
    'created_at',
    'updated_at'
  ];
  protected $useTimestamps = true;
}

