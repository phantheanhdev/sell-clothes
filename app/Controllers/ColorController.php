<?php

namespace App\Controllers;

use App\Models\ColorModel;
use App\Request;

class ColorController extends Controller
{
    public function ad_list_color()
    {
        $all_color = ColorModel::all_desc('cl_id');
        $this->view_admin('color/list', ['all_color' => $all_color]);
    }

    public function ad_add_color()
    {
        $this->view_admin('color/add');
    }

    public function ad_save_add_color(Request $request)
    {
        setcookie('success', "Thêm thành công", time() + 1, "/");

        $color = $request->getBody();

        $p = new ColorModel();
        $p->insert($color);
        header("location: /ad_list_color");
        die;
    }

    public function ad_delete_color(Request $request)
    {
        setcookie('success', "Xóa thành công", time() + 1, "/");

        $id = $request->getBody()['id'];
        $p = new ColorModel();
        $p->delete('cl_id', $id);
        header("location: /ad_list_color");
        exit;
    }

    public function ad_update_color(Request $request)
    {
        $id = $request->getBody()['id'];
        $color = ColorModel::findOne('cl_id', $id);

        $this->view_admin('color/update', [
            'color' => $color
        ]);
    }

    public function ad_save_update_color(Request $request)
    {
        setcookie('success', "Cập nhật thành công", time() + 1, "/");

        $data = $request->getBody();

        $p = new ColorModel();
        $p->update('cl_id', $data['cl_id'], $data);
        header("location: /ad_list_color");
        exit;
    }



}
