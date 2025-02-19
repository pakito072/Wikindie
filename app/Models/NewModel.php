<?php

namespace App\Models;

use CodeIgniter\Model;

class NewModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'article_id', 
        'news_details'
    ];
    protected $useTimestamps = true;
}