<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class Auth extends Controller
{

    public function login()
    {

        helper(['form', 'url']);
        $session = session();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email, password]'
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();
                $user = $userModel->where('email', $this->request->getPost('email'))->first();

                if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                    $session->set([
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'isLoggedIn' => true
                    ]);

                    return redirect()->to(base_url('home'));
                } else {
                    $session->setFlashdata('error', 'Correo o contraseña incorrectos');
                }
            } else {
                $session->setFlashdata('error', 'Porfavor verifica tus datos');
            }
        }

        // Cargar la vista de login
        return view('authentication/flows/sign-in');
    }

    public function register()
    {
        helper(['form', 'url']);
        $session = session();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'first_name' => 'required|min_length[2]|max_length[100]',
                'last_name' => 'required|min_length[2]|max_length[100]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'phone_number' => 'required|min_length[10]|max_length[15]',
                'password' => 'required|min_length[8]|max_length[255]'
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();
                $data = [
                    'first_name' => $this->request->getPost('first_name'),
                    'last_name' => $this->request->getPost('last_name'),
                    'email' => $this->request->getPost('email'),
                    'phone_number' => $this->request->getPost('phone_number'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
                ];
                $userModel->save($data);

                $session->setFlashdata('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
                return redirect()->to(base_url('sign-in'));
            } else {
                $data['validation'] = $this->validator;
            }
        }

        // Cargar la vista de registro
        return view('authentication/flows/sign-up', isset($data) ? $data : []);
        // Cargar la vista de registro

        // Asegúrate de que la vista se llama 'register.php' y está en la carpeta 'views/auth'
    }

    public function forgotPassword()
    {
        // Cargar la vista de olvidar contraseña
        return view('authentication/flows/new-password'); // Asegúrate de que la vista se llama 'forgot-password.php' y está en la carpeta 'views/auth'
    }
}