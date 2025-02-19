<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\UserModel;


class AuthController extends BaseController
{

  public function signIn()
  {
    return view('pages/auth/signIn');
  }

  public function processSignIn()
  {
    helper(['form', 'url']);
    $userModel = new UserModel();

    $rules = [
      'email' => 'required|valid_email',
      'password' => 'required|min_length[6]'
    ];

    if (!$this->validate($rules)) {
      return redirect()->to(base_url('signIn'))->withInput()->with('validation', $this->validator);
    }

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $userModel->where('email', $email)->first();

    if (!$user || !password_verify($password, $user['password'])) {
      return redirect()->to(base_url('signIn'))->withInput()->with('error', 'Correo o contraseña incorrectos.');
    }

    session()->set([
      'id' => $user['id'],
      'first_name' => $user['first_name'],
      'last_name' => $user['last_name'],
      'email' => $user['email'],
      'phone_number' => $user['phone_number'],
      'role_id' => $user['role_id']
    ]);

    return redirect()->to(base_url('dashboard'));
  }

  public function signUp()
  {
    return view('pages/auth/signUp');
  }


  public function processSignUp()
  {
    helper(['form', 'url']);
    $userModel = new UserModel();

    $rules = [
      'first_name' => 'required|min_length[3]|max_length[50]',
      'last_name' => 'required|min_length[3]|max_length[50]',
      'email' => 'required|valid_email|is_unique[users.email]',
      'phone_number' => 'required|min_length[10]|max_length[15]',
      'password' => 'required|min_length[6]',
      'password_confirm' => 'required|matches[password]'
    ];

    if (!$this->validate($rules)) {
      return redirect()->to(base_url('signUp'))->withInput()->with('validation', $this->validator);
    }

    $data = [
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name'),
      'email' => $this->request->getPost('email'),
      'phone_number' => $this->request->getPost('phone_number'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
    ];

    if (!$userModel->save($data)) {
      return error_log('Error al registrar el usuario: ' . json_encode($userModel->errors()));
    } else {
      return redirect()->to(base_url('signIn'));
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