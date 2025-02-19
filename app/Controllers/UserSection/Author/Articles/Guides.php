<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\GuideModel;

class Guides extends BaseController
{
    public function guides()
    {
        $guideModel = new GuideModel();
        $data['guides'] = $guideModel->findAll();
        return view('pages/userSection/author/articles/guides', $data);
    }
}

