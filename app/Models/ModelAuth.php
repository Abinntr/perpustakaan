<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jk', 'telp', 'alamat', 'role', 'email', 'username', 'password'];

    // tambahkan method-method tambahan sesuai kebutuhan, seperti method untuk menyimpan user baru
}
