<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index(): string
    {
        return view('cart');
    }
}