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
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name'),
      'email' => $this->request->getPost('email'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
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

    $data = [
      'id' => $user['id'],
      'first_name' => $user['first_name'],
      'last_name' => $user['last_name'],
      'email' => $user['email'],
      'role_id' => $user['role_id']
    ];


    if (!$user || !password_verify($password, $user['password'])) {
      return redirect()->to(base_url('signIn'))->with('error', 'Correo o contraseña incorrectos.');
    } else {
      $session->set($data);

      return redirect()->to(base_url('/'));
    }

  }

  public function forgotPassword()
  {
    // Cargar la vista de olvidar contraseña
    return view('pages/auth/newPassword'); // Asegúrate de que la vista se llama 'forgot-password.php' y está en la carpeta 'views/auth'
  }

  public function signOut()
  {
    // Cerrar sesión
    session()->destroy();
    return redirect()->to(base_url('signIn'));
  }
}