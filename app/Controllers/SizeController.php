<?php

namespace App\Controllers;

use App\Models\SizeModel;
use App\Request;

class SizeController extends Controller
{
    public function ad_list_size()
    {
        $all_size = SizeModel::all_desc('sz_id');
        $this->view_admin('size/list', ['all_size' => $all_size]);
    }

    public function ad_add_size()
    {
        $this->view_admin('size/add');
    }

    public function ad_save_add_size(Request $request)
    {
        $size = $request->getBody();

        $p = new SizeModel();
        $p->insert($size);
        header("location: /ad_list_size");
        die;
    }

    public function ad_delete_size(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new SizeModel();
        $p->delete('sz_id', $id);
        header("location: /ad_list_size");
        exit;
    }

    public function ad_update_size(Request $request)
    {
        $id = $request->getBody()['id'];
        $size = SizeModel::findOne('sz_id', $id);

        $this->view_admin('size/update', [
            'size' => $size
        ]);
    }

    public function ad_save_update_size(Request $request)
    {
        $data = $request->getBody();

        $p = new SizeModel();
        $p->update('sz_id', $data['sz_id'], $data);
        header("location: /ad_list_size");
        exit;
    }
}
