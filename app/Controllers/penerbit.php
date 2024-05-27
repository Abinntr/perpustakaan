<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\modelPenerbit;

class penerbit extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->modelPenerbit = new modelPenerbit;
    }
    public function index()
    {
        $data = [
            'activeMenu' => 'masterbuku',
            'submenu' => 'penerbit',
            'title' => 'penerbit',
            'page' => 'crud_penerbit',
            'penerbit' => $this->modelPenerbit->AllData(),
        ];
        return view('crud_penerbit',$data);
    }
    public function Add()
    {
        $data = [
            'nama'=> $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telp' => $this->request->getPost('telp'),
        ];
        $this->modelPenerbit->Add($data);
            session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
            return redirect()->to(base_url('penerbit'));
    }
    public function UpdateData($id)
    {
        $data = [
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telp' => $this->request->getPost('telp'),
        ];
            $this->modelPenerbit->UpdateData($data);
            session()->setFlashdata('pesan','Data Berhasil Diupdate');
            return redirect()->to(base_url('penerbit'));
    }
    public function DeleteData($id)
    {
        $data = [
            'id'=> $id,
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telp' => $this->request->getPost('telp'),
        ];
            $this->modelPenerbit->DeleteData($data);
            session()->setFlashdata('pesan','Data Berhasil Dihapus');
            return redirect()->to(base_url('penerbit'));
    }
}
