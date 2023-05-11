<?php

namespace App\Controllers;

class Controller
{
    public function view_user($path, $data = [])
    {
        extract($data);
        include_once __DIR__ . "/../../resources/views/users/layout/header.php";
        include_once __DIR__ . "/../../resources/views/users/$path.php";
        include_once __DIR__ . "/../../resources/views/users/layout/footer.php";
    }
    public function view_admin($path, $data = [])
    {
        extract($data);
        include_once __DIR__ . "/../../resources/views/admin/layout/header.php";
        include_once __DIR__ . "/../../resources/views/admin/$path.php";
        include_once __DIR__ . "/../../resources/views/admin/layout/footer.php";
    }
    public function view_no_header_footer($path, $data = [])
    {
        extract($data);
        include_once __DIR__ . "/../../resources/views/$path.php";
    }
}
