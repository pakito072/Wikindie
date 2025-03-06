<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = \Config\Services::session();

        // Verificar si el usuario está logueado
        if (!$session->get('is_logged_in')) {
            return redirect()->to(base_url('signIn'));
        }

        // Verificar el role_id si se proporciona en los argumentos
        if (!empty($arguments)) {
            $role_id = $session->get('role_id');
            if (!in_array($role_id, $arguments)) {
                return redirect()->to(base_url('/'))->with('error', 'No tienes permiso para acceder a esta página.');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No es necesario hacer nada después de la ejecución del controlador
    }
}