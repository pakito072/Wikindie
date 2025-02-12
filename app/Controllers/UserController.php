<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function overview(): string
    {
        return view('pages/profile/overview');
    }

    public function user () {
      return view('pages/profile/user');
    }
}
