<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    //======================= user ===========================
    // men

    public function men_t_shirt()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 1');
        $this->view_user('men/men_t_shirt', ['product' => $product]);
    }

    public function men_jackets()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 5');
        $this->view_user('men/men_jackets', ['product' => $product]);
    }

    public function men_short()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 3');
        $this->view_user('men/men_short', ['product' => $product]);
    }

    public function men_jean()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 7');
        $this->view_user('men/men_jean', ['product' => $product]);
    }

    // women

    public function women_t_shirt()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 2');
        $this->view_user('women/wo_t_shirt', ['product' => $product]);
    }

    public function women_jackets()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 6');
        $this->view_user('women/wo_jackets', ['product' => $product]);
    }

    public function women_short()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 4');
        $this->view_user('women/wo_short', ['product' => $product]);
    }

    public function women_jean()
    {
        $product = ProductModel::get_data_by_condition('ct_id = 8');
        $this->view_user('women/wo_jean', ['product' => $product]);
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
        // $id = $request->getBody()['id'];
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
