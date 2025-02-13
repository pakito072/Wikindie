<?php

namespace App\Controllers\Classes;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function userList(): string
    {
        return view('apps/user-management/userList');
    }

    public function rolesList () {
      return view('apps/user-management/rolesList');
    }
}
