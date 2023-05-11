<?php

namespace App\Controllers;

class AccountController extends Controller
{
    public function log_in()
    {
        $this->view_user('account/log_in');
    }
    public function register()
    {
        $this->view_user('account/register');
    }
}
