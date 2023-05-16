<?php

namespace App\Controllers;

use App\Models\UserModel;

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
                    header('location: /home');
                }
            }
        }
    }

    public function register()
    {
        $this->view_user('account/register');
    }
}
