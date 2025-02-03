<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $timestamps = true;

    protected $allowedFields = ['name', 'email', 'password', 'created_at', 'updated_at'];

    @param string $email
    @return array|null

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}