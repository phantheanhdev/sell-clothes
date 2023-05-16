<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Request;

class UserController extends Controller
{
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
        $data['us_role'] = 1;

        $p = new UserModel();
        $p->insert($data);
        header("location:/log_in");
        die;
    }
}
