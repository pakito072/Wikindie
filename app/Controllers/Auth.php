<?php

namespace App\Controllers;

use CodeIgniter\Controller;
class Auth extends Controller {

    public function index() {
        // Cargar la vista de login
        return view('authentication/flows/sign-in'); // Asegúrate de que la vista se llama 'login.php' y está en la carpeta 'views/auth'
    }

    public function register() {
        // Cargar la vista de registro
        return  view('authentication/flows/sign-up'); // Asegúrate de que la vista se llama 'register.php' y está en la carpeta 'views/auth'
    }
}