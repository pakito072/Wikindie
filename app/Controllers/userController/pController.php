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
    helper('breadcrumbs');
    $userId = session('id');
    $user = $this->userModel->getUserWithRole($userId);

    // Si no hay avatar, seleccionar uno aleatorio de la carpeta
    if (empty($user['avatar'])) {
      $catImages = glob(FCPATH . 'assets/media/cats/*.jpg'); // Buscar imágenes
      $randomImage = !empty($catImages)
        ? base_url('assets/media/cats/' . basename($catImages[array_rand($catImages)]))
        : base_url('assets/media/avatars/default.jpg');
      $user['avatar'] = $randomImage;
    }

    $data = [
      'user' => $user,
      'breadcrumbs' => generate_breadcrumbs(['Profile']),
      'view_name' => 'Profile',
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

    // Validación (ajustada para avatar)
    $validationRules = [
        'username' => 'required|max_length[50]',
        'email' => 'required|valid_email|is_unique[users.email,id,' . $userId . ']',
        'current_password' => 'required|validate_current_password',
        'new_password' => 'permit_empty|min_length[8]',
        'confirm_password' => 'matches[new_password]',
        'avatar' => 'permit_empty|valid_url',
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    // Actualizar datos
    $data = [
        'id' => $userId,
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'avatar' => $this->request->getPost('avatar'), // ?? $user['avatar']
    ];

    // Actualizar contraseña si se proporciona
    $newPassword = $this->request->getPost('new_password');
    if (!empty($newPassword)) {
        $data['password'] = password_hash($newPassword, PASSWORD_DEFAULT);
    }

    $this->userModel->save($data);
    $newUserData = $this->userModel->find(session('id'));
    session()->set([
      'username' => $newUserData['username'],
      'email' => $newUserData['email'],
      'avatar' => $newUserData['avatar'],
    ]);
    return redirect()->to(base_url('profile'))->with('success', 'Profile updated.');
}
}