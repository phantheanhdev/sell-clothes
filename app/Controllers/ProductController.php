<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    //======================= user ===========================
    // products_by_type
    public function products_by_type()
    {
        $ct_id = $_GET['ct_id'];
        $product = ProductModel::get_data_by_condition("ct_id = $ct_id");
        $this->view_user('product/products_by_type', ['product' => $product]);
    }

    // single product
    public function single_product()
    {
        $this->view_user('product/single_product');
    }

    // =============== admin =======================
    public function ad_list_pro()
    {
        $all_pro = ProductModel::all_desc('pro_id');
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
        setcookie('success', "Thêm thành công", time() + 1, "/");

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
        setcookie('success', "Xóa thành công", time() + 1, "/");

        $id = $request->getBody()['id'];
        $p = new ProductModel();
        $p->delete('pro_id', $id);
        header("location: /ad_list_pro");
        exit;
    }
    public function ad_update_pro(Request $request)
    {

        $id = $request->getBody()['id'];
        $product = ProductModel::findOne('pro_id', $id);
        $all_categories = CategoryModel::all();

        $this->view_admin('product/update', [
            'all_categories' => $all_categories,
            'product' => $product
        ]);
    }
    public function ad_save_update_pro(Request $request)
    {
        setcookie('success', "Cập nhật thành công", time() + 1, "/");

        $data = $request->getBody();

        $id_pro = $data['pro_id'];
        $product = ProductModel::findOne('pro_id', $id_pro);
        $input_file_img = $_FILES['pro_img']['size'];

        if ($input_file_img <= 0) {
            $data['pro_img'] = $product->pro_img;
        }

        if ($_FILES['pro_img']['size'] > 0) {
            $data['pro_img'] = $_FILES['pro_img']['name'];
            move_uploaded_file($_FILES['pro_img']['tmp_name'], 'images/products/' . $data['pro_img']);
        };

        $p = new ProductModel();
        $p->update('pro_id', $data['pro_id'], $data);
        header("location: /ad_list_pro");
        exit;
    }
}
