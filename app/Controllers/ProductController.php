<?php

namespace App\Controllers;

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
        $this->view_admin('product/list');
    }

    public function ad_add_pro()
    {
        $this->view_admin('product/add');
    }

}
