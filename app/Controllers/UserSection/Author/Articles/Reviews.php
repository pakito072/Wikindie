<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\ReviewModel;

class Reviews extends BaseController
{
    public function reviews()
    {
        $reviewModel = new ReviewModel();

        $data['reviews'] = $reviewModel->findAll();

        return view('pages/userSection/author/articles/reviews', $data);
    }
}