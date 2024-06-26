<?php

namespace App\Controllers;

use App\Models\ModelRegister;

class Register extends BaseController
{
    public function __construct(){
       helper('form');
       $this->ModelRegister = new ModelRegister;
    }
    public function index(): string
    {

        $data = [
            'judul' => 'Login',
            'page' => 'v_login',
        ];
        return view('register',$data);
    }

    public function LoginUser(){
        $data = [
            'judul' => 'Login User',
            'page' => 'login',
        ];
        return view('register',$data);
    }

    public function CekLoginUser(){
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'=>'{field} masih kosong !',
                    'valid_email' => '{field} Harus format E-Mail !',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} masih kosong !',
                ]
            ],
        ])) {
            //jika entry valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->LoginUser($email,$password);
            if ($cek_login) {
                //jika login berhasil
                session()->set('id',$cek_login['id']);
                session()->set('nama',$cek_login['nama']);
                session()->set('email',$cek_login['email']);
                session()->set('role',$cek_login['role']);
                return redirect()->to(base_url('Auth'));
            }else {
                //jika login gagal
                session()->setFlashdata('pesan','E-mail atau Password salah !');
                return redirect()->to(base_url('register/LoginUser'));
            }
        }else {
            //jika entry tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register/LoginUser'));
        }
    }

    public function LoginAnggota(){
        $data = [
            'judul' => 'Login Anggota',
            'page' => 'login',
        ];

        return view('daftar',$data);

        return view('login',$data);

    }

    public function LogOut(){
        session()->remove('nama');
        session()->remove('email');
        session()->remove('role');
        session()->setFlashdata('pesan','Logout Sukses !');
         return redirect()->to(base_url('auth/LoginUser'));
    }
    public function LogOutAnggota(){
        session()->remove('id');
        session()->remove('username');
        session()->remove('role');
        session()->setFlashdata('pesan','Logout Sukses !');
         return redirect()->to(base_url('auth/LoginAnggota'));
    }
    
    public function Register(){
        $data = [
            'judul' => 'Daftar Anggota',
            'page' => 'register',
        ];

        return view('daftar',$data);

        return view('login',$data);

    }
    
    public function Daftar(){ 
        if ($this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} masih kosong !',
                    
                ]
            ],
            'jk' => [
                'label' => 'Jk',
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} Jenis kelamin harus dipilih !',
                    
                ]
            ],
           
            'telp' => [
                'label' => 'Telp',
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} masih kosong !',
                    
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} masih kosong !',
                    
                ]
            ],
            'role' => [
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} role harus dipilih harus dipilih !',
                    
                ]
            ],
           
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required|is_unique[tb_user.email]|valid_email',
                'errors' => [
                    'required' => '{field} masih kosong !',
                    'is_unique' => '{field} telah digunakan',
                    'valid_email' => '{field} Harus format E-Mail !',
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[tb_user.username]',
                'errors' => [
                    'required' => '{field} masih kosong !',
                    'is_unique' => '{field} Username telah digunakan',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} masih kosong !',
                   
                ]
            ],
            'ulangi_password' => [
                'label' => 'Ulangi password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} masih kosong !',
                    'matches' => '{field} password tidak sama !',
                   
                ]
            ],
        ])) {
            $data=[
                'nama' => $this->request->getPost('nama'),
                'jk' => $this->request->getPost('jk'),
                'telp' => $this->request->getPost('telp'),
                'alamat' => $this->request->getPost('alamat'),
                'role' => $this->request->getPost('role'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            ];
            $this->ModelAuth->Daftar($data);
            session()->setFlashdata('pesan', 'Akun berhasil ditambahkan');
            return redirect()->to(base_url('register/Register'));

        }else{
           session()->setFlashdata('errors', \Config\Services::validation()->getErrors() );
            return redirect()->to(base_url('register/Register'))->withInput('validation', \Config\Services::validation());
        }
    }
   
    public function CekLoginAnggota(){
        if ($this->validate([
            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} masih kosong !',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} masih kosong !',
                ]
            ],
        ])) {
            //jika entry valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->LoginAnggota($username,$password);
            if ($cek_login) {
                //jika login berhasil
                session()->set('id',$cek_login['id']);
                session()->set('username',$cek_login['username']);
                session()->set('role','Anggota');
                return redirect()->to(base_url('dashboard_view'));
            }else {
                //jika login gagal
                session()->setFlashdata('pesan','Username atau Password salah !');
                return redirect()->to(base_url('register/login'));
            }
        }else {
            //jika entry tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register/login'));
        }
    }
    
}