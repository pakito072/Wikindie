<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Controller;

class ViewArticles extends Controller
{
    public function viewArticles()
    {
        $articleModel = new ArticleModel();
        $data['articles'] = $articleModel->findAll();
        return view('articles/view', $data);
    }
}
?>
