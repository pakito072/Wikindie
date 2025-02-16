<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function userList()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('apps/user-management/userList', $data);
    }
}
?>
