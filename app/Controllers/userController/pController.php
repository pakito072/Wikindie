<?php

namespace App\Controllers\userController;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Config\Pager;

class PController extends BaseController
{
  protected $userModel;

  public function __construct()
  {
    $this->userModel = new userModel();
  }


  public function view()
  {
    // Cargar helper de breadcrumbs
    helper('breadcrumbs');

    // Obtener ID del usuario logueado
    $userId = session('id');
    if (!$userId) {
      return redirect()->to('signIn')->with('error', 'You must be logged in.');
    }

    // Obtener datos del usuario con su rol
    $user = $this->userModel
      ->select('users.*, roles.name as role_name')
      ->join('roles', 'users.role_id = roles.id', 'left')
      ->find($userId);

    if (!$user) {
      return redirect()->to('/')->with('error', 'User not found.');
    }

    // Configurar breadcrumbs y título
    $segments = ['Profile'];
    $title = 'Profile';

    // Pasar datos a la vista
    $data = [
      'user' => $user,
      'breadcrumbs' => generate_breadcrumbs($segments),
      'view_name' => $title,
    ];

    return view('pages/userPage/profile', $data);
  }

  public function update()
  {
    $userId = session('id');
    $user = $this->userModel->find($userId);
    if (!$user) {
      return redirect()->to('/')->with('error', 'Unauthorized.');
    }

    // Validar solo los campos permitidos
    $validationRules = [
      'username' => 'required|max_length[50]',
      'email' => 'required|valid_email|is_unique[users.email,id,' . $userId . ']',
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    // Actualizar datos
    $data = [
      'id' => $userId,
      'username' => $this->request->getPost('username'),
      'email' => $this->request->getPost('email'),
    ];

    $this->userModel->save($data);
    return redirect()->to(base_url('profile'))->with('success', 'Profile updated.');
  }
}