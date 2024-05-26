<?php

namespace App\Controllers;

class jsgrid extends BaseController
{
    public function index(): string
    {
        $data['title'] = "jsgrid";
        $data['activeMenu'] = "jsgrid";
        echo view("admin_header", $data);
        echo view("admin_footer");
        return view('jsgrid_view', $data);
    }
}
