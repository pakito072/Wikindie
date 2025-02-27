<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\ReviewModel;

class Reviews extends BaseController
{
    public function reviews()
    {
        helper('breadcrumbs');
        $segments = ['Articles', 'Reviews'];
        $data['breadcrumbs'] = generate_breadcrumbs($segments);
        $data['view_name'] = 'Reviews';

        $reviewModel = new ReviewModel();
        $data['reviews'] = $reviewModel->findAll();
        return view('pages/userSection/author/articles/reviews', $data);
    }
}