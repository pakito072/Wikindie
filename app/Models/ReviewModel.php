<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
  protected $table = 'reviews';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'review_score',
    'article_id',
    'review_details'
  ];
  protected $useTimestamps = true;
}