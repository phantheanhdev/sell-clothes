<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    //======================= user ===========================
    // men
    public function men_page()
    {
        $this->view_user('men/men');
    }

    public function men_t_shirt()
    {
        $this->view_user('men/men_t_shirt');
    }

    public function men_jackets()
    {
        $this->view_user('men/men_jackets');
    }

    public function men_short()
    {
        $this->view_user('men/men_short');
    }

    public function men_jean()
    {
        $this->view_user('men/men_jean');
    }

    // women
    public function women_page()
    {
        $this->view_user('women/women');
    }

    public function women_t_shirt()
    {
        $this->view_user('women/wo_t_shirt');
    }

    public function women_jackets()
    {
        $this->view_user('women/wo_jackets');
    }

    public function women_short()
    {
        $this->view_user('women/wo_short');
    }

    public function women_jean()
    {
        $this->view_user('women/wo_jean');
    }

    // =============== admin =======================
    public function ad_list_pro()
    {
        $all_pro = ProductModel::all();
        $all_categories = CategoryModel::all();
        $this->view_admin('product/list', ['all_pro' => $all_pro, 'all_categories' => $all_categories]);
    }

    public function ad_add_pro()
    {
        $all_categories = CategoryModel::all();
        $this->view_admin('product/add', ['all_categories' => $all_categories]);
    }
    public function ad_save_add_pro(Request $request)
    {
        $product = $request->getBody();
        $product['pro_img'] = $_FILES['pro_img']['name'];

        move_uploaded_file($_FILES['pro_img']['tmp_name'], "images/products/" . $_FILES['pro_img']['name']);

        $p = new ProductModel();
        $p->insert($product);
        header("location: /ad_list_pro");
        die;
    }
    public function ad_delete_pro(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new ProductModel();
        $p->delete('pro_id', $id);
        header("location: /ad_list_pro");
        exit;
    }
}
