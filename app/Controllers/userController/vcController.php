<?php

namespace App\Controllers\userController;

use App\Controllers\BaseController;
use App\Models\CatsModel;
use App\Models\CatTypesModel;
use App\Config\Pager;

class vcController extends BaseController
{
  protected $catsModel;
  protected $catTypesModel;

  public function __construct()
  {
    $this->catsModel = new CatsModel();
    $this->catTypesModel = new CatTypesModel;
  }


  public function view()
  {
    helper('breadcrumbs');
    $segments = ['View Cats'];
    $title = 'View Cats';


    $perPage = $this->request->getGet('perPage') ?? 5;
    $perPage = in_array($perPage, [5, 10, 15, 20]) ? $perPage : 10;


    $column = $this->request->getGet('column') ?? 'id';
    $order = $this->request->getGet('order') ?? 'asc';

    // Validar que la columna sea válida para evitar SQL Injection
    $allowedColumns = ['id', 'name', 'age', 'cat_type_id', 'gender', 'color', 'status'];
    if (!in_array($column, $allowedColumns)) {
      $column = 'id';
    }


    $order = ($order === 'desc') ? 'desc' : 'asc';


    $cats = $this->catsModel->where('is_disabled', 0)
      ->orderBy($column, $order)
      ->paginate($perPage);

    $pager = $this->catsModel->pager;


    $data = [
      'breadcrumbs' => generate_breadcrumbs($segments),
      'view_name' => $title,
      'cats' => $cats,
      'pager' => $pager,
      'column' => $column,
      'order' => $order,
      'perPage' => $perPage,
    ];

    return view('pages/userPage/viewCats', $data);
  }


  public function create()
{
    // Si es una solicitud POST (envío de formulario)
    if ($this->request->getMethod() === 'post') {
        // Validar datos
        $validationRules = [
            'name'        => 'required|min_length[3]|max_length[50]',
            'age'         => 'required|integer',
            'cat_type_id' => 'required|integer',
            'gender'      => 'required|in_list[male,female]',
            'color'       => 'required|max_length[50]',
            'description' => 'required|max_length[500]',
            'status'      => 'required|in_list[available,adopted]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Crear el gato
        $data = [
            'name'        => $this->request->getPost('name'),
            'age'         => $this->request->getPost('age'),
            'cat_type_id' => $this->request->getPost('cat_type_id'),
            'gender'      => $this->request->getPost('gender'),
            'color'       => $this->request->getPost('color'),
            'description' => $this->request->getPost('description'),
            'status'      => $this->request->getPost('status'),
            'is_disabled' => false,
        ];

        $this->catsModel->createCat($data);
        return redirect()->to('/viewCats')->with('success', 'Cat created successfully.');
    }

    // Si es una solicitud GET (mostrar formulario)
    return view('pages/userPage/viewCats'); // Creamos esta vista
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
        'cat_type_id' => $this->request->getPost('cat_type_id'),
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