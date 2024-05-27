<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenerbit extends Model
{
    //tampil data
    public function AllData()
   {
        return $this->db->table('tb_penerbit')
        ->orderBy('id','DESC')
        ->Get()->getResultArray();
   }
   
   //tambah data
   public function Add($data)
   {
    $this->db->table('tb_penerbit')->insert($data);
   }

   //detail data
   public function DetailData($id)
   {
        return $this->db->table('tb_penerbit')
        ->where('id',$id)
        ->Get()->getRowArray();
   }
   
   //update data
   public function UpdateData($data)
   {
    $this->db->table('tb_penerbit')
    ->where('id',$data['id'])
    ->update($data);
   }
   
   //delete data
   public function DeleteData($data)
   {
    $this->db->table('tb_penerbit')
    ->where('id',$data['id'])
    ->delete($data);
   }
}
