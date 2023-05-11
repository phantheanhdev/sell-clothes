<?php

namespace App\Controllers;

class CartController extends Controller
{
    public function cart()
    {
        $this->view_user('cart');
    }
}
