<?php

namespace App\Controllers;

use App\Models\GuideModel;
use CodeIgniter\Controller;

class Guides extends Controller
{
    public function index()
    {
        $guideModel = new GuideModel();
        $data['guides'] = $guideModel->findAll();
        return view('guides/view', $data);
    }

    public function view($id)
    {
        $guideModel = new GuideModel();
        $data['guide'] = $guideModel->find($id);
        return view('guides/view_single', $data);
    }
}
?>
