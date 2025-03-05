<?php

namespace App\Models;

use CodeIgniter\Model;

class GuideModel extends Model
{
  protected $table = 'guides';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'article_id',
    'guide_details'
  ];
  protected $useTimestamps = true;

  public function orderedGuides($column, $order)
  {
    return $this->orderBy($column, $order)->findAll();
  }
}

