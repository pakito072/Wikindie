<?php

namespace App\Libraries;

use CodeIgniter\Validation\Rules;

class MyValidationRules extends Rules
{
  public function validate_current_password(string $password): bool
  {
    $userId = session('id');
    $userModel = new \App\Models\UserModel();
    $user = $userModel->find($userId);

    if (!$user || !password_verify($password, $user['password'])) {
      return false;
    }
    return true;
  }
}