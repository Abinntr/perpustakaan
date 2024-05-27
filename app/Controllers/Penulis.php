<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\modelPenulis;

class penulis extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->modelPenulis = new modelPenulis;
    }
    public function index()
    {
        $data = [
            'activeMenu' => 'masterbuku',
            'submenu' => 'penulis',
            'title' => 'penulis',
            'page' => 'crud_penulis',
            'penulis' => $this->modelPenulis->AllData(),
        ];
        return view('crud_penulis',$data);
    }
    public function Add()
    {
        $data = [
            'nama'=> $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'website' => $this->request->getPost('website'),
        ];
        $this->modelPenulis->Add($data);
            session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
            return redirect()->to(base_url('penulis'));
    }
    public function UpdateData($id)
    {
        $data = [
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'website' => $this->request->getPost('website'),
        ];
            $this->modelPenulis->UpdateData($data);
            session()->setFlashdata('pesan','Data Berhasil Diupdate');
            return redirect()->to(base_url('penulis'));
    }
    public function DeleteData($id)
    {
        $data = [
            'id'=> $id ];
            $this->modelPenulis->DeleteData($data);
            session()->setFlashdata('pesan','Data Berhasil Dihapus');
            return redirect()->to(base_url('penulis'));
    }
}
