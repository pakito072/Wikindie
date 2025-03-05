<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\GuideModel;

use App\Config\Services;

class Guides extends BaseController
{
    public function guides()
    {

        helper('breadcrumbs');
        $segments = ['Articles', 'Guides'];
        $title = 'Guides';

        $guideModel = new GuideModel();

        $data = $guideModel->paginate(10);
        $paginator = $guideModel->pager;

        $column = $this->request->getGet('column') ?? 'id';
        $order = $this->request->getGet('order') ?? 'asc';

        $data = [
            'breadcrumbs' => generate_breadcrumbs($segments),
            'view_name' => $title,
            'guides' => $guideModel->findAll(),
            'paginator' => $paginator,
            'orderedGuides' => $guideModel->orderedGuides($column, $order),
        ];

        return view('pages/userSection/author/articles/guides', $data);
    }
}

