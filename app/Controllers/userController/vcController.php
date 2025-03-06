<?php

namespace App\Controllers\userController;

use App\Controllers\BaseController;
use App\Models\CatsModel;

class vcController extends BaseController
{
  protected $catsModel;

  public function __construct()
  {
    $this->catsModel = new CatsModel();
  }

  // Mostrar todos los gatos
  public function view()
  {
    helper('breadcrumbs');
    $segments = ['View Cats'];
    $title = 'View Cats';

    // Obtener la cantidad de elementos por página desde la URL o establecer un valor por defecto
    $perPage = $this->request->getGet('perPage') ?? 5;
    $perPage = in_array($perPage, [5, 10, 15, 20]) ? $perPage : 10;

    // Obtener parámetros de ordenación
    $column = $this->request->getGet('column') ?? 'id';
    $order = $this->request->getGet('order') ?? 'asc';

    // Validar que la columna sea válida para evitar SQL Injection
    $allowedColumns = ['id', 'name', 'age', 'breed', 'gender', 'color', 'status'];
    if (!in_array($column, $allowedColumns)) {
      $column = 'id';
    }

    // Validar orden asc/desc
    $order = ($order === 'desc') ? 'desc' : 'asc';

    // Obtener gatos paginados y ordenados
    $cats = $this->catsModel->where('is_disabled', 0)
      ->orderBy($column, $order)
      ->paginate($perPage);

    $paginator = $this->catsModel->pager;

    $data = [
      'breadcrumbs' => generate_breadcrumbs($segments),
      'view_name' => $title,
      'cats' => $cats,
      'paginator' => $paginator,
      'currentColumn' => $column,
      'currentOrder' => $order,
      'perPage' => $perPage,
    ];

    return view('pages/userPage/viewCats', $data);
  }

  // Crear un nuevo gato
  public function create()
  {
    if ($this->request->getMethod() === 'post') {
      $validationRules = $this->catsModel->validationRules;

      if (!$this->validate($validationRules)) {
        return view('cats/create', ['validation' => $this->validator]);
      }

      $data = [
        'name' => $this->request->getPost('name'),
        'gender' => $this->request->getPost('gender'),
        'breed' => $this->request->getPost('breed'),
        'status' => $this->request->getPost('status'),
        'age' => $this->request->getPost('age'),
        'color' => $this->request->getPost('color'),
        'description' => $this->request->getPost('description'),
        'is_disabled' => false,
      ];

      $this->catsModel->createCat($data);
      return redirect()->to('/viewCats')->with('success', 'Cat created successfully.');
    }

    return view('pages/userPage/viewCats');
  }

  // Actualizar la información de un gato
  public function update($id)
  {
    $cat = $this->catsModel->getCatById($id);
    if (empty($cat)) {
      return redirect()->to('/viewCats')->with('error', 'Cat not found.');
    }

    if ($this->request->getMethod() === 'post') {
      $validationRules = $this->catsModel->validationRules;

      if (!$this->validate($validationRules)) {
        return view('cats/update', ['cat' => $cat, 'validation' => $this->validator]);
      }

      $data = [
        'name' => $this->request->getPost('name'),
        'gender' => $this->request->getPost('gender'),
        'breed' => $this->request->getPost('breed'),
        'status' => $this->request->getPost('status'),
        'age' => $this->request->getPost('age'),
        'color' => $this->request->getPost('color'),
        'description' => $this->request->getPost('description'),
      ];

      $this->catsModel->updateCat($id, $data);
      return redirect()->to('/viewCats')->with('success', 'Cat updated successfully.');
    }

    return view('cats/update', ['cat' => $cat]);
  }

  // Deshabilitar un gato (en lugar de eliminarlo)
  public function disable($id)
  {
    $this->catsModel->disableCat($id);
    return redirect()->to('/viewCats')->with('success', 'Cat disabled successfully.');
  }
}