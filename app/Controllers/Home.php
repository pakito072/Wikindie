<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['view_name'] = 'Dashboard';

        return view('index', $data);
    }
}
