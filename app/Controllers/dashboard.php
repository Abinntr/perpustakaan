<?php

namespace App\Controllers;

class dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'dashboard',
            'activeMenu' => 'dashboard',
        ];

        echo view("admin_header", $data);
        
        echo view("admin_footer");
        return view('dashboard_view',$data);
    }
}
