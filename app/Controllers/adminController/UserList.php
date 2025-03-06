<?php

namespace App\Controllers\UserSection\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;


class UserList extends BaseController
{
    public function userList()
    {
        helper('breadcrumbs');
        $segments = ['User Management', 'Users List'];
        $data['breadcrumbs'] = generate_breadcrumbs($segments);
        $data['view_name'] = 'Users List';

        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('pages/userSection/admin/userManagement/userList', $data);
    }
}
?>
