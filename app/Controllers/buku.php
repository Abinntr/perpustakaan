<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\modelBuku;

class buku extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->modelBuku = new modelBuku;
    }
    public function index()
    {
        $data = [
            'activeMenu' => 'masterbuku',
            'submenu' => 'buku',
            'title' => 'buku',
            'page' => 'crud_buku',
            'buku' => $this->modelBuku->AllData(),
        ];
        return view('crud_buku',$data);
    }
    public function Add()
    {
        $data = [
            'foto_buku' => $this->request->getPost('foto_buku'),
            'judul'=> $this->request->getPost('judul'),
            'penulis_id' => $this->request->getPost('penulis_id'),
            'penerbit_id' => $this->request->getPost('penerbit_id'),
            'tahun' => $this->request->getPost('tahun'),
            'jumlah' => $this->request->getPost('jumlah'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'lokasi' => $this->request->getPost('lokasi'),
        ];
        $this->modelBuku->Add($data);
            session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
            return redirect()->to(base_url('buku'));
    }
    public function UpdateData($id)
    {
        $data = [
            'id' => $id,
            'foto_buku' => $this->request->getPost('foto_buku'),
            'judul'=> $this->request->getPost('judul'),
            'penulis_id' => $this->request->getPost('penulis_id'),
            'penerbit_id' => $this->request->getPost('penerbit_id'),
            'tahun' => $this->request->getPost('tahun'),
            'jumlah' => $this->request->getPost('jumlah'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'lokasi' => $this->request->getPost('lokasi'),
        ];
            $this->modelBuku->UpdateData($data);
            session()->setFlashdata('pesan','Data Berhasil Diupdate');
            return redirect()->to(base_url('buku'));
    }
    public function DeleteData($id)
    {
        $data = [
            'id'=> $id
        ];
            $this->modelBuku->DeleteData($data);
            session()->setFlashdata('pesan','Data Berhasil Dihapus');
            return redirect()->to(base_url('buku'));
    }
}
