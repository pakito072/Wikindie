<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\TagModel;

class Tags extends BaseController
{
    public function tags()
    {
        helper('breadcrumbs');
        $segments = ['Articles', 'Tags'];
        $data['breadcrumbs'] = generate_breadcrumbs($segments);
        $data['view_name'] = 'Tags';

        $tagModel = new TagModel();
        $data['tags'] = $tagModel->findAll();
        return view('pages/userSection/author/articles/tags', $data);
    }

}

