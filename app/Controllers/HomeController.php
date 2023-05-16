<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends Controller
{
    public function index()
    {
        $new_product_8 = ProductModel::new_produt_8();
        $products_of_interest_8 = ProductModel::products_of_interest_8();

        $this->view_user('home', [
            'new_product_8' => $new_product_8,
            'products_of_interest_8' => $products_of_interest_8
        ]);
    }
}
