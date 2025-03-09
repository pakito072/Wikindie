<?php

namespace App\Controllers\adminController;

use App\Controllers\BaseController;
use App\Models\RoleModel;

class mrController extends BaseController
{
  protected $roleModel;

  public function __construct()
  {
    $this->roleModel = new RoleModel();
  }

  private function setPaginationData(&$data)
  {
    $perPage = $this->request->getGet('perPage') ?? 5;
    $perPage = in_array($perPage, [5, 10, 15, 20]) ? $perPage : 10;

    $column = $this->request->getGet('column') ?? 'id';
    $order = $this->request->getGet('order') ?? 'asc';

    $allowedColumns = ['id', 'name', 'created_at'];
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
    $segments = ['Manage Roles'];
    $title = 'Manage Roles';

    $this->setPaginationData($data);

    $name = $this->request->getGet('name');
    $createdAt = $this->request->getGet('created_at');
    $showDisabled = $this->request->getGet('showDisabled');

    $query = $this->roleModel;

    if (!empty($name)) {
      $query = $query->like('name', $name);
    }

    if (!empty($createdAt)) {
      $query = $query->where('created_at', $createdAt);
    }

    if ($showDisabled == '1') {
      $query = $query->whereIn('is_disabled', [0, 1]);
    } else {
      $query = $query->where('is_disabled', 0);
    }

    $data['roles'] = $query
      ->orderBy($data['column'], $data['order'])
      ->paginate($data['perPage']);

    $data = [
      'breadcrumbs' => generate_breadcrumbs($segments),
      'view_name' => $title,
      'pager' => $this->roleModel->pager,
      'roles' => $data['roles'],
      'perPage' => $data['perPage'],
      'column' => $data['column'],
      'order' => $data['order'],
      'filters' => [
        'name' => $name,
        'created_at' => $createdAt,
        'showDisabled' => $showDisabled,
      ]
    ];

    return view('pages/adminPage/manageRoles', $data);
  }

  private function buildQueryString($additionalParams = [])
  {
    $queryParams = array_merge($this->request->getGet(), $additionalParams);
    return http_build_query($queryParams);
  }

  public function create()
  {
    $validationRules = [
      'name' => 'required|min_length[3]|max_length[50]|is_unique[roles.name]',
      'description' => 'required|min_length[10]'
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $data = [
      'name' => $this->request->getPost('name'),
      'description' => $this->request->getPost('description'),
      'is_disabled' => 0
    ];

    $this->roleModel->insert($data);

    return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'Role registered successfully.');
  }

  public function update($id = null)
  {
    $id = $this->request->getPost('id');
    if (!$id) {
      return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'Role not found.');
    }
    $role = $this->roleModel->find($id);
    if (!$role) {
      return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'Role not found.');
    }

    $validationRules = [
      'name' => "required|min_length[3]|max_length[50]|is_unique[roles.name,id,{$id}]",
      'description' => "required|min_length[10]"
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $data = [
      'name' => $this->request->getPost('name'),
      'description' => $this->request->getPost('description'),
    ];

    $this->roleModel->update($id, $data);

    return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'Role updated successfully.');
  }

  public function disable($id)
  {
    $role = $this->roleModel->find($id);
    if (!$role) {
      return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'Role not found.');
    }

    $this->roleModel->update($id, ['is_disabled' => 1]);
    return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'Role disabled successfully.');
  }

  public function restore($id)
  {
    $role = $this->roleModel->find($id);
    if (!$role) {
      return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('error', 'Role not found.');
    }

    $this->roleModel->update($id, ['is_disabled' => 0]);
    return redirect()->to(base_url('manageRoles') . '?' . $this->buildQueryString($this->request->getGet()))->with('success', 'Role restored successfully.');
  }

  public function export()
  {
    $filters = [
      'name' => $this->request->getGet('name'),
      'created_at' => $this->request->getGet('created_at'),
      'showDisabled' => $this->request->getGet('showDisabled')
    ];

    $column = $this->request->getGet('column') ?? 'id';
    $order = $this->request->getGet('order') ?? 'asc';
    $allowedColumns = ['id', 'name', 'created_at'];
    $column = in_array($column, $allowedColumns) ? $column : 'id';

    $query = $this->roleModel->select('id, name, description, created_at, is_disabled');

    if (!empty($filters['name'])) {
      $query->like('name', $filters['name']);
    }
    if (!empty($filters['created_at'])) {
      $query->where('created_at', $filters['created_at']);
    }
    if ($filters['showDisabled'] == '1') {
      $query->whereIn('is_disabled', [0, 1]);
    } else {
      $query->where('is_disabled', 0);
    }

    $roles = $query->orderBy($column, $order)->findAll();

    $filename = 'roles_exportados_' . date('YmdHis') . '.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=' . $filename);

    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Name', 'Description', 'Created At', 'Disabled']);

    foreach ($roles as $role) {
      $isDisabled = $role['is_disabled'] ? 'Yes' : 'No';
      fputcsv($output, [$role['id'], $role['name'], $role['description'], $role['created_at'], $isDisabled]);
    }

    fclose($output);
    exit;
  }
}