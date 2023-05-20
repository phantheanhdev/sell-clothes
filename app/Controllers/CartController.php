<?php

namespace App\Controllers;

use App\Models\ColorModel;

class CartController extends Controller
{
    public function cart()
    {
        $this->view_user('cart');
    }

    public function add_cart()
    {
        $_SESSION['list_cart'][$_POST['pro_id']] = $_POST;
        $all_color = ColorModel::all();

        header('location: /cart');
    }
}
