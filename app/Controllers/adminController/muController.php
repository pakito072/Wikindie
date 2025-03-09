<?php

namespace App\Controllers\adminController;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RoleModel;


class muController extends BaseController
{
  protected $userModel;
  protected $roleModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->roleModel = new RoleModel();
  }


  private function setPaginationData(&$data)
  {
    $perPage = $this->request->getGet('perPage') ?? 5;
    $perPage = in_array($perPage, [5, 10, 15, 20]) ? $perPage : 10;

    $column = $this->request->getGet('column') ?? 'id';
    $order = $this->request->getGet('order') ?? 'asc';

    $allowedColumns = ['id', 'username', 'email', 'role_id', 'created_at'];
    if (!in_array($column, $allowedColumns)) {
      $column = 'id';
    }

    $data = [
      'perPage' => $perPage,
      'column' => $column,
      'order' => $order
    ];
  }

  public function view()
  {
    helper('breadcrumbs');
    $segments = ['Manage Users'];
    $title = 'Manage Users';

    $this->setPaginationData($data);

    $username = $this->request->getGet('username');
    $email = $this->request->getGet('email');
    $roleId = $this->request->getGet('role_id');
    $createdAt = $this->request->getGet('created_at');
    $showDisabled = $this->request->getGet('showDisabled');

    // Filtrar usuarios
    $query = $this->userModel;

    if (!empty($username)) {
      $query = $query->like('username', $username);
    }

    if (!empty($email)) {
      $query = $query->like('email', $email);
    }

    if (!empty($roleId)) {
      $query = $query->where('role_id', $roleId);
    }

    if (!empty($createdAt)) {
      $query = $query->where('created_at', $createdAt);
    }

    if ($showDisabled == '1') {
      $query = $query->whereIn('is_disabled', [0, 1]);
    } else {
      $query = $query->where('is_disabled', 0);
    }

    // Obtener usuarios
    $data['users'] = $query
      ->orderBy($data['column'], $data['order'])
      ->paginate($data['perPage']);


    $data = [
      'breadcrumbs' => generate_breadcrumbs($segments),
      'view_name' => $title,
      'pager' => $this->userModel->pager,
      'users' => $data['users'],
      'perPage' => $data['perPage'],
      'column' => $data['column'],
      'order' => $data['order'],
      'roles' => $this->roleModel->findAll(),
      'filters' => [
        'username' => $username,
        'email' => $email,
        'role_id' => $roleId,
        'created_at' => $createdAt,
        'showDisabled' => $showDisabled,
      ]
    ];

    return view('pages/adminPage/manageUsers', $data);
  }

  private function buildQueryString($additionalParams = [])
  {
    $queryParams = array_merge($this->request->getGet(), $additionalParams);
    return http_build_query($queryParams);
  }

  public function create()
  {

    $validationRules = [
      'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
      'email' => 'required|valid_email|is_unique[users.email]',
      'password' => 'required|min_length[8]',
      'role_id' => 'required|in_list[1,2,3]'
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('error', 'Validation failed. Please check the form.');
    }

    // Datos para insertar en la base de datos
    $data = [
      'username' => $this->request->getPost('username'),
      'email' => $this->request->getPost('email'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'role_id' => $this->request->getPost('role_id'),
      'avatar' => $this->request->getPost('avatar') ?? base_url('assets/media/cats/avatars/default.jpg'),
      'is_disabled' => 0 // Usuario activo por defecto
    ];

    // Insertar el usuario en la base de datos
    $this->userModel->insert($data);

    // Redirigir con mensaje de éxito
    return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'Usuario registrado correctamente.');
  }

  public function update($id = null)
  {

    $id = $this->request->getPost('id');
    if (!$id) {
      return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'User not found.');
    }
    $user = $this->userModel->find($id);
    if (!$user) {
      return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'User not found.');
    }

    $validationRules = [
      'username' => "required|min_length[3]|max_length[50]|is_unique[users.username,id,{$id}]",
      'email' => "required|valid_email|is_unique[users.email,id,{$id}]",
      'role_id' => 'required|in_list[1,2,3]'
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('error', 'Validation failed. Please check the form.');
    }

    // Datos para actualizar
    $data = [
      'username' => $this->request->getPost('username'),
      'email' => $this->request->getPost('email'),
      'role_id' => $this->request->getPost('role_id'),
    ];

    // Actualizar la contraseña solo si se proporciona
    $password = $this->request->getPost('password');
    if (!empty($password)) {
      $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    $this->userModel->update($id, $data);

    return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'User updated successfully.');
  }

  public function disable($id)
  {
    $user = $this->userModel->find($id);
    if (!$user) {
      return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'User not found.');
    }

    $this->userModel->update($id, ['is_disabled' => 1]);
    return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'User disabled successfully.');
  }

  public function restore($id)
  {
    $user = $this->userModel->find($id);
    if (!$user) {
      return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'User not found.');
    }

    $this->userModel->update($id, ['is_disabled' => 0]);
    return redirect()->to(base_url('manageUsers') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'User restored successfully.');
  }

  public function export()
  {
    // Obtener parámetros de filtrado
    $filters = [
      'username' => $this->request->getGet('username'),
      'email' => $this->request->getGet('email'),
      'role_id' => $this->request->getGet('role_id'),
      'created_at' => $this->request->getGet('created_at'),
      'showDisabled' => $this->request->getGet('showDisabled')
    ];

    // Configurar ordenamiento
    $column = $this->request->getGet('column') ?? 'id';
    $order = $this->request->getGet('order') ?? 'asc';
    $allowedColumns = ['id', 'username', 'email', 'role_id', 'created_at'];
    $column = in_array($column, $allowedColumns) ? $column : 'id';

    // Construir consulta
    $query = $this->userModel->select('id, username, email, role_id, created_at, is_disabled');

    // Aplicar filtros
    if (!empty($filters['username'])) {
      $query->like('username', $filters['username']);
    }
    if (!empty($filters['email'])) {
      $query->like('email', $filters['email']);
    }
    if (!empty($filters['role_id'])) {
      $query->where('role_id', $filters['role_id']);
    }
    if (!empty($filters['created_at'])) {
      $query->where('created_at', $filters['created_at']);
    }
    if ($filters['showDisabled'] == '1') {
      $query->whereIn('is_disabled', [0, 1]);
    } else {
      $query->where('is_disabled', 0);
    }

    // Obtener todos los registros (sin paginación)
    $users = $query->orderBy($column, $order)->findAll();

    // Generar CSV
    $filename = 'usuarios_exportados_' . date('YmdHis') . '.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=' . $filename);

    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Username', 'Email', 'Role', 'Created At', 'Disabled']);

    foreach ($users as $user) {
      $role = $this->roleModel->find($user['role_id']);
      $roleName = $role ? $role['name'] : 'Unknown';
      $isDisabled = $user['is_disabled'] ? 'Yes' : 'No';
      fputcsv($output, [$user['id'], $user['username'], $user['email'], $roleName, $user['created_at'], $isDisabled]);
    }

    fclose($output);
    exit;
  }
}