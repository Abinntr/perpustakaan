<?php

namespace App\Models;
use CodeIgniter\Model;

class adminlogin extends Model
{
public function adminLogin($email, $password)
{
    return $this->db->table('tb_user')
    ->where([
        'email' => $email,
        'password' => $password,
    ])->get()->getRowArray();
}
}