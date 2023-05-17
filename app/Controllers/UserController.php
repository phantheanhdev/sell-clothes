<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Request;

class UserController extends Controller
{

    // ================================== user ======================================
    public function log_in()
    {
        $this->view_user('account/log_in');
    }

    public function submit_log_in()
    {
        $acc_name = $_POST['acc_name'];
        $acc_pass = $_POST['acc_pass'];
        $all_user = UserModel::all();

        foreach ($all_user as $all_user) {
            if ($acc_name == $all_user->us_acc_name  && $acc_pass == $all_user->us_pass) {
                if ($all_user->us_role == 1) {
                    $_SESSION['user']['full_name'] = $all_user->us_full_name;
                    $_SESSION['user']['role'] = 1;
                    header('location: /home');
                } elseif ($all_user->us_role == 0) {
                    $_SESSION['user']['full_name'] = $all_user->us_full_name;
                    $_SESSION['user']['role'] = 0;
                    header('location: /ad_list_pro');
                }
            } else {
                setcookie('err', "Sai tài khoản hoặc mật khẩu", time() + 1, "/");
                header('location: /log_in');
            }
        }
    }

    public function log_out()
    {
        session_unset();
        header('location: /home');
    }


    public function register()
    {
        $this->view_user('account/register');
    }

    public function save_register(Request $request)
    {
        $data = $request->getBody();
        $all_user = UserModel::all();

        foreach ($all_user as $all_user) {
            if ($all_user->us_acc_name == $data['us_acc_name']) {
                setcookie('err', "Tài khoản đã tồn tại", time() + 1, "/");
                header('location: /register');
                die("Tài khoản đã tồn tại");
            }
        }
        setcookie('success', "Đăng ký tài khoản thành công", time() + 1, "/");
        $data['us_role'] = 1;

        $p = new UserModel();
        $p->insert($data);
        header("location: /log_in");
        die;
    }

    // =============================== admin ================================

    public function ad_list_user()
    {
        $all_user = UserModel::all_desc('us_id');
        $this->view_admin('user/list', ['all_user' => $all_user]);
    }

    public function ad_add_user()
    {
        $this->view_admin('user/add');
    }

    public function ad_save_add_user(Request $request)
    {
        $data = $request->getBody();
        $all_user = UserModel::all();

        foreach ($all_user as $all_user) {
            if ($all_user->us_acc_name == $data['us_acc_name']) {
                setcookie('err', "Tài khoản đã tồn tại", time() + 1, "/");
                header('location: /ad_add_user');
                die("Tài khoản đã tồn tại");
            }
        }
        setcookie('success', "Thêm thành công", time() + 1, "/");

        $p = new UserModel();
        $p->insert($data);
        header("location: /ad_list_user");
        die;
    }

    public function ad_delete_user(Request $request)
    {
        setcookie('success', "Xóa thành công", time() + 1, "/");

        $id = $request->getBody()['id'];
        $p = new UserModel();
        $p->delete('us_id', $id);
        header("location: /ad_list_user");
        exit;
    }
    public function ad_update_user(Request $request)
    {
        $id = $request->getBody()['id'];
        $user = UserModel::findOne('us_id', $id);

        $this->view_admin('user/update', [
            'user' => $user
        ]);
    }

    public function ad_save_update_user(Request $request)
    {
        setcookie('success', "Cập nhật thành công", time() + 1, "/");
        $data = $request->getBody();

        $p = new UserModel();
        $p->update('us_id', $data['us_id'], $data);
        header("location: /ad_list_user");
        exit;
    }
}
