<?php

namespace App\Controllers;

use App\Models\BillModel;
use App\Models\ColorModel;
use App\Models\SizeModel;
use App\Request;

class CartController extends Controller
{
    public function cart()
    {
        $all_colors = ColorModel::all();
        $all_sizes = SizeModel::all();


        $this->view_user('cart', [
            'all_colors' => $all_colors,
            'all_sizes' => $all_sizes
        ]);
    }

    public function add_cart()
    {
        // Kiểm tra xem session 'list_cart' đã tồn tại chưa, nếu chưa thì khởi tạo là một mảng trống
        if (!isset($_SESSION['list_cart'])) {
            $_SESSION['list_cart'] = [];
        }

        $pro = $_POST;
        array_push($_SESSION['list_cart'], $pro); // Thêm sản phẩm vào mảng trong session

        header('location: /cart');
    }

    public function cart_delete_one()
    {
        $id = $_GET['id'];
        unset($_SESSION['list_cart'][$id]);
        header('location: /cart');
    }

    public function cart_delete_all()
    {
        unset($_SESSION['list_cart']);
        header('location: /cart');
    }

    // pay 
    public function pay()
    {
        $all_colors = ColorModel::all();
        $all_sizes = SizeModel::all();

        if (isset($_SESSION['user'])) {
            if (!isset($_SESSION['list_cart']) && empty($_SESSION['list_cart'])) {
                header('location: /cart');
            } else {
                $this->view_user(
                    'pay',
                    [
                        'all_colors' => $all_colors,
                        'all_sizes' => $all_sizes
                    ]
                );
            }
        } else {
            setcookie('err', "Bạn cần đăng nhập để mua hàng", time() + 1, "/");
            header('location: /log_in');
        }
    }
    public function order()
    {
        unset($_SESSION['list_cart']);
        $this->view_user('order');
    }
}
