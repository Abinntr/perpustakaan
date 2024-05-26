<?php

namespace App\Controllers;

class Single extends BaseController
{
    public function index(): string
    {
        return view('single');
    }
}