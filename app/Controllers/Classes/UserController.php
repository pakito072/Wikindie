<?php

namespace App\Controllers\Classes;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function viewProfile(): string
    {
        return view('pages/profile/view');
    }

    public function user () {
      return view('pages/profile/user');
    }
}
