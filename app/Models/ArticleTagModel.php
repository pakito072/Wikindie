<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleTagModel extends Model
{
    protected $table = 'article_tags';
    protected $primaryKey = 'article_id';
    protected $allowedFields = [
        'article_id',
        'tag_id',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
