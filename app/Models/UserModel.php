<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'password', 'created_at', 'updated_at'];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';

    protected $updatedField = 'updated_at';


    /**
     * Obtener usuario por email
     *
     * @param string $email
     * @return array|null
     */

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}