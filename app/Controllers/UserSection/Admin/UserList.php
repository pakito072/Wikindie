<?php

namespace App\Controllers\UserSection\Admin;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserList extends Controller
{
    public function userList()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('pages/userSection/admin/userManagement/userList', $data);
    }
}
?>
