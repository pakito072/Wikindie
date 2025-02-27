<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\NewModel;

class News extends BaseController
{
    public function news()
    {
        helper('breadcrumbs');
        $segments = ['Articles', 'News'];
        $data['breadcrumbs'] = generate_breadcrumbs($segments);
        $data['view_name'] = 'News';

        $newModel = new NewModel();
        $data['news'] = $newModel->findAll();
        return view('pages/userSection/author/articles/news', $data);
    }
}