<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\UserModel;


class AuthController extends BaseController
{

  public function signUp()
  {
    return view('pages/auth/signUp');
  }

  public function processSignUp()
  {

    $userModel = new UserModel();

    $data = [
      'username' => $this->request->getPost('username'),
      'email' => $this->request->getPost('email'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'role_id' => 3
    ];

    $userModel->insert($data);

    return redirect()->to(base_url('signIn'))->with('success', 'Usuario registrado correctamente.');
  }
  public function signIn()
  {
    return view('pages/auth/signIn');
  }

  public function processSignIn()
  {
    $userModel = new UserModel();

    $session = \config\Services::session();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $userModel->where('email', $email)->first();

    if (!$user && !password_verify($password, $user['password'])) {
      return redirect()->to(base_url('signIn'))->with('error', 'Correo o contraseña incorrectos.');
    }

    $session->set([
      'id' => $user['id'],
      'username' => $user['username'],
      'email' => $user['email'],
      'role_id' => $user['role_id'],
      'isLoggedIn' => true
    ]);

    return redirect()->to(base_url('/'))->with('success', 'Bienvenido de nuevo.');
  }

  public function signOut()
  {
    // Cerrar sesión
    session()->destroy();
    return redirect()->to(base_url('signIn'));
  }
}