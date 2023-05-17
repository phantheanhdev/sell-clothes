<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Request;

class CategoryController extends Controller
{
    public function ad_list_categories()
    {
        $all_category = CategoryModel::all_desc('ct_id');
        $this->view_admin('category/list', ['all_category' => $all_category]);
    }

    public function ad_add_categories()
    {
        $this->view_admin('category/add');
    }

    public function ad_save_add_categories(Request $request)
    {
        setcookie('success', "Thêm thành công", time() + 1, "/");

        $category = $request->getBody();

        $p = new CategoryModel();
        $p->insert($category);
        header("location: /ad_list_categories");
        die;
    }

    public function ad_detele_categories(Request $request)
    {
        setcookie('success', "Xóa thành công", time() + 1, "/");

        $id = $request->getBody()['id'];
        $p = new CategoryModel();
        $p->delete('ct_id', $id);
        header("location: /ad_list_categories");
        exit;
    }

    public function ad_update_categories(Request $request)
    {
        $id = $request->getBody()['id'];
        $category = CategoryModel::findOne('ct_id', $id);

        $this->view_admin('category/update', [
            'category' => $category
        ]);
    }

    public function ad_save_update_categories(Request $request)
    {
        setcookie('success', "Cập nhật thành công", time() + 1, "/");

        $data = $request->getBody();

        $p = new CategoryModel();
        $p->update('ct_id', $data['ct_id'], $data);
        header("location: /ad_list_categories");
        exit;
    }
}
