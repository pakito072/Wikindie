<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RoleModel;


class AuthController extends BaseController
{

  public function signUp()
  {
    return view('pages/auth/signUp');
  }

  public function processSignUp()
  {

    $validationRules = [
      'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
      'email' => 'required|valid_email|is_unique[users.email]',
      'password' => 'required|min_length[8]',
      'confirm_password' => 'required|matches[password]',
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $userModel = new UserModel();

    $defaultAvatar = base_url('assets/media/cats/avatars/default.jpg');

    $data = [
      'username' => $this->request->getPost('username'),
      'email' => $this->request->getPost('email'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'role_id' => 3,
      'avatar' => $defaultAvatar
    ];

    $userModel->insert($data);

    return redirect()->to(base_url('signIn'))->with('success', 'User registered successfully.');
  }
  public function signIn()
  {
    return view('pages/auth/signIn');
  }

  public function processSignIn()
  {
    $userModel = new UserModel();
    $roleModel = new RoleModel();
    $session = \config\Services::session();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $userModel->where('email', $email)->first();

    if (!$user || !password_verify($password, $user['password'])) {
      return redirect()->to(base_url('signIn'))->with('error', 'Email or password incorrect.');
    }

    $role = $roleModel->find($user['role_id']);
    $roleName = $role ? $role['name'] : 'No role';

    $session->set([
      'id' => $user['id'],
      'username' => $user['username'],
      'email' => $user['email'],
      'role_id' => $user['role_id'],
      'avatar' => $user['avatar'],
      'role_name' => $roleName,
      'is_logged_in' => true
    ]);

    return redirect()->to(base_url('/'))->with('success', 'Welcome back, ' . $user['username'] . '!');
  }

  public function signOut()
  {
    // Cerrar sesión
    session()->destroy();
    return redirect()->to(base_url('signIn'))->with('success', 'You have been logged out.');
  }
}