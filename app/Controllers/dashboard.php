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
        return view('dashboard_view',$data);
    }
}
