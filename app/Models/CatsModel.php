<?php

namespace App\Models;

use CodeIgniter\Model;

class CatsModel extends Model
{
  // Definir la tabla que usaremos
  protected $table = 'cats';

  // Clave primaria de la tabla
  protected $primaryKey = 'id';

  // Columnas de la tabla que se pueden insertar o actualizar
  protected $allowedFields = [
    'name',
    'gender',
    'breed',
    'status',
    'age',
    'color',
    'description',
    'created_at',
    'updated_at',
    'is_disabled'
  ];

  // Configuración de la base de datos
  protected $useTimestamps = true;  // Para que se gestionen automáticamente los campos 'created_at' y 'updated_at'
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';

  // Validaciones
  protected $validationRules = [
    'name' => 'required|min_length[3]|max_length[255]',
    'type_id' => 'required|integer',
    'gender' => 'required|in_list[male,female]',
    'age' => 'required|integer',
    'description' => 'permit_empty|max_length[1000]',
    'photo' => 'permit_empty|valid_url',
  ];

  // Mensajes personalizados para la validación
  protected $validationMessages = [
    'name' => [
      'required' => 'The cat name is required.',
      'min_length' => 'The cat name must be at least 3 characters long.',
    ],
    'type_id' => [
      'required' => 'The cat type is required.',
      'integer' => 'The cat type must be an integer.',
    ],
    'gender' => [
      'required' => 'The gender is required.',
      'in_list' => 'Gender must be either "male" or "female".',
    ],
  ];

  // Buscar todos los gatos activos
  public function getActiveCats()
  {
    return $this->where('is_disabled', false)->findAll();
  }

  // Obtener un gato por su ID
  public function getCatById($id)
  {
    return $this->find($id);
  }

  // Crear un nuevo gato
  public function createCat($data)
  {
    return $this->insert($data);
  }

  // Actualizar los datos de un gato
  public function updateCat($id, $data)
  {
    return $this->update($id, $data);
  }

  // Deshabilitar un gato (en vez de eliminar)
  public function disableCat($id)
  {
    return $this->update($id, ['is_disabled' => true]);
  }
}
