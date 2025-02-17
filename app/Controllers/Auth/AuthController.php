<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\UserModel;

use Exception;
class AuthController extends BaseController
{

    public function signInLoad()
    {
        $data['validation'] = session('validation');
        return view('pages/auth/signIn', $data);
    }

    public function signIn()
    {
        helper(['form']);
        $tokkenLog = session();
        $userModel = new UserModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[255]'
            ];

            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $user = $userModel->verifyUser($email, $password);

                if ($user) {
                    $tokkenLog->set([
                        'user_id' => $user['id'],
                        'email' => $user['email'],
                        'logged_in' => true
                    ]);
                    return redirect()->to(base_url('/'));
                } else {
                    $tokkenLog->setFlashdata('error', 'Invalid login credentials');
                    return redirect()->to(base_url('signIn'));
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/auth/signIn');
    }

    public function signUpLoad()
    {
        $data['validation'] = session('validation');
        return view('pages/auth/signUp', $data);
    }

    
    public function signUp()
    {
        helper(['form']);
        $tokkenLog = session();
        $userModel = new UserModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'first_name' => 'required|min_length[3]|max_length[255]',
                'last_name' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|valid_email',
                'phone_number' => 'permit_empty|numeric|min_length[7]|max_length[15]',
                'password' => 'required|min_length[6]|max_length[255]',
                'confirm_password' => 'required|matches[password]'
            ];

            if ($this->validate($rules)) {
                $data = [
                    'first_name' => $this->request->getVar('first_name'),
                    'last_name' => $this->request->getVar('last_name'),
                    'email' => $this->request->getVar('email'),
                    'phone_number' => $this->request->getVar('phone_number'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];

                $userModel->save($data);
                $tokkenLog->setFlashdata('success', 'Registration successful');
                return redirect()->to(base_url('signIn'));
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/auth/signUp');
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