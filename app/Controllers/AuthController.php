<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class AuthController extends Controller
{

    public function signIn()
    {
        // Cargar la vista de login
        return view('authentication/flows/sign-in');
    }

    public function signUp()
    {
        // Cargar la vista de registro
        return view('authentication/flows/sign-up');
    }

    public function forgotPassword()
    {
        // Cargar la vista de olvidar contraseña
        return view('authentication/flows/new-password'); // Asegúrate de que la vista se llama 'forgot-password.php' y está en la carpeta 'views/auth'
    }

    public function signOut()
    {
        // Cerrar sesión
        session()->destroy();
        return redirect()->to(base_url('signIn'));
    }
}