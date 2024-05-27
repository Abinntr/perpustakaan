<?php

namespace App\Models;
use CodeIgniter\Model;

class loginAdmin extends Model
{
public function loginAdmin($email, $password)
{
    return $this->db->table('tb_petugas')
    ->where([
        'email' => $email,
        'password' => $password,
    ])->get()->getRowArray();
}
}