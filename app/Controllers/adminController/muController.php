<?php

namespace App\Controllers\adminController;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RoleModel; // Asegúrate de tener este modelo

class muController extends BaseController
{
    protected $userModel;
    protected $roleModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel(); // Para cargar roles en formularios
    }

    // Vista principal de usuarios (ya existente)
    public function view()
    {
        helper('breadcrumbs');
        $segments = ['Manage Users'];
        $data['breadcrumbs'] = generate_breadcrumbs($segments);
        $data['view_name'] = 'Manage Users';

        // Parámetros de paginación/ordenación
        $perPage = $this->request->getGet('perPage') ?? 5;
        $perPage = in_array($perPage, [5, 10, 15, 20]) ? $perPage : 10;

        $column = $this->request->getGet('column') ?? 'id';
        $order = $this->request->getGet('order') ?? 'asc';

        $allowedColumns = ['id', 'username', 'email', 'role_id', 'created_at'];
        if (!in_array($column, $allowedColumns)) {
            $column = 'id';
        }

        // Obtener usuarios
        $data['users'] = $this->userModel
            ->where('is_disabled', 0)
            ->orderBy($column, $order)
            ->paginate($perPage);

        // Datos para la vista
        $data['pager'] = $this->userModel->pager;
        $data['column'] = $column;
        $data['order'] = $order;
        $data['perPage'] = $perPage;
        $data['roles'] = $this->roleModel->where('is_disabled', 0)->findAll(); // Roles para dropdowns

        return view('pages/adminPage/manageUsers', $data);
    }

    public function create()
{
    // Instancia del modelo UserModel
    $userModel = new UserModel();

    // Validar datos
    $validationRules = [
        'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]',
        'role_id'  => 'required|in_list[1,2,3]'
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('error', 'Validation failed. Please check the form.');
    }

    // Datos para insertar en la base de datos
    $data = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'role_id'  => $this->request->getPost('role_id'),
        'avatar'   => $this->request->getPost('avatar') ?? base_url('assets/media/cats/avatars/default.jpg'),
        'is_disabled' => 0 // Usuario activo por defecto
    ];

    // Insertar el usuario en la base de datos
    $userModel->insert($data);

    // Redirigir con mensaje de éxito
    return redirect()->to(base_url('manageUsers'))->with('success', 'Usuario registrado correctamente.');
}

public function edit($id = null)
{
    // Instancia del modelo UserModel
    $userModel = new UserModel();

    // Verificar si el usuario existe
    $user = $userModel->find($id);
    if (!$user) {
        return redirect()->to(base_url('manageUsers'))->with('error', 'User not found.');
    }

    // Obtener roles para el menú desplegable
    $roleModel = new RoleModel();
    $roles = $roleModel->where('is_disabled', 0)->findAll();

    // Pasar los datos a la vista
    $data['user'] = $user;
    $data['roles'] = $roles;

    // Cargar la vista con los datos
    return redirect()->to(base_url('manageUsers', $data))->with('success', 'Usuario registrado correctamente.');
}

public function update($id = null)
{
    // Instancia del modelo UserModel
    $userModel = new UserModel();

    // Verificar si el usuario existe
    $user = $userModel->find($id);
    if (!$user) {
        return redirect()->to(base_url('manageUsers'))->with('error', 'User not found.');
    }

    // Validar datos
    $validationRules = [
        'username' => "required|min_length[3]|max_length[50]|is_unique[users.username,id,{$id}]",
        'email'    => "required|valid_email|is_unique[users.email,id,{$id}]",
        'role_id'  => 'required|in_list[1,2,3]'
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('error', 'Validation failed. Please check the form.');
    }

    // Datos para actualizar
    $data = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'role_id'  => $this->request->getPost('role_id'),
    ];

    // Actualizar la contraseña solo si se proporciona
    $password = $this->request->getPost('password');
    if (!empty($password)) {
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    // Actualizar el usuario en la base de datos
    $userModel->update($id, $data);

    // Redirigir con mensaje de éxito
    return redirect()->to(base_url('manageUsers'))->with('success', 'User updated successfully.');
}

    // Deshabilitar usuario (soft delete)
    public function disable($id)
    {
        $user = $this->userModel->find($id);
        if (!$user) {
            return redirect()->to(base_url('manageUsers'))->with('error', 'User not found.');
        }

        $this->userModel->update($id, ['is_disabled' => 1]);
        return redirect()->to(base_url('manageUsers'))->with('success', 'User disabled successfully.');
    }
}