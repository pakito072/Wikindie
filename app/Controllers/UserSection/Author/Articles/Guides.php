<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\GuideModel;

class Guides extends BaseController
{
    public function guides()
    {
        helper('breadcrumbs');
        $segments = ['Articles', 'Guides'];
        $data['breadcrumbs'] = generate_breadcrumbs($segments);
        $data['view_name'] = 'Guides';

        $guideModel = new GuideModel();
        $data['guides'] = $guideModel->findAll();
        return view('pages/userSection/author/articles/guides', $data);
    }
}

