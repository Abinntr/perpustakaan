<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    //tampil data
    public function AllData()
   {
        return $this->db->table('tb_buku')
        ->orderBy('id','DESC')
        ->Get()->getResultArray();
   }
   
   //tambah data
   public function Add($data)
   {
    $this->db->table('tb_buku')->insert($data);
   }

   //detail data
   public function DetailData($id)
   {
        return $this->db->table('tb_buku')
        ->where('id',$id)
        ->Get()->getRowArray();
   }
   
   //update data
   public function UpdateData($data)
   {
    $this->db->table('tb_buku')
    ->where('id',$data['id'])
    ->update($data);
   }
   
   //delete data
   public function DeleteData($data)
   {
    $this->db->table('tb_buku')
    ->where('id',$data['id'])
    ->delete($data);
   }
}
