<?php

namespace App\Controllers\UserSection\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserList extends BaseController
{
    public function userList()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('pages/userSection/admin/userManagement/userList', $data);
    }
}
?>
