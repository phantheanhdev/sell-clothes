<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlfancy.justthemevalley.com/version2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2023 15:29:24 GMT -->

<head>
  <!-- Basic page needs -->
  <meta charset="utf-8">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fancy</title>
  <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
  <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />

  <!-- Mobile specific metas  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">

  <!-- CSS Style -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="cms-index-index cms-home-page">

  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="page">

    <!-- Header -->
    <header id="header">
      <div class="header-container">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs">
                <div class="slider-items-products">
                  <div id="offer-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                      <div class="offer-content-text">
                        <p><i class="pe-7s-plane"></i> Giao hàng miễn phí cho các đơn hàng trên <span>100.000đ</span></p>
                      </div>
                      <div class="offer-content-text">
                        <p><i class="pe-7s-like2"></i>Chỉ có chất lượng tốt nhất và thương hiệu </p>
                      </div>
                      <div class="offer-content-text">
                        <p><i class="pe-7s-gift"></i> Quà tặng miễn phí sau mỗi <span>10 đơn hàng</span></p>
                      </div>
                      <div class="offer-content-text">
                        <p><i class="pe-7s-refresh-2"></i> Đảm bảo hoàn tiền <span>100%</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- top links -->
              <div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12">
                <!-- Default Welcome Message -->
                <div class="welcome-msg hidden-xs">Chào mừng tới FANCY</div>
                <?php
                if (isset($_SESSION) && !empty($_SESSION['user']['full_name'])) {
                  if ($_SESSION['user']['role'] == 0) {
                    echo '<ul class="links">
                    <li><a href="/ad_list_pro">Vào trang admin</a></li>
                    <li><a href="/log_out">Đăng xuất</a></li>
                  </ul>';
                  } else {
                    echo '<ul class="links">
                    <li><a href="/log_out">Đăng xuất</a></li>
                  </ul> ';
                  }
                } else {
                  echo '<ul class="links">
                  <li><a href="/register">Đăng ký</a></li>
                  <li><a href="/log_in">Đăng nhập</a></li>
                </ul> ';
                }
                ?>

              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <!-- Header Logo -->
            <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
              <div class="logo"><a title="e-commerce" href="/home"><img alt="e-commerce" src="images/logo.png"></a> </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 col-md-5 top-search">
              <!-- Search -->
              <div id="search">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>

              <!-- End Search -->
            </div>
            <div class="col-lg-2 col-sm-3 col-xs-12 top-cart">
              <!-- Begin shopping cart trigger  -->
              <div id="shopping-cart-trigger">
                <a href="/cart" class="cart-icon" title="Shopping Cart" data-toggle="modal">

                  <!-- nếu muốn làm giỏ hàng xổ ra trước khi vào trang giỏ hàng như shoppee thì thêm data-target="#modal-cart" vào trong + cuối thẻ a ở trên
                  rồi qua file footer bỏ comment phần 
                -->

                  <i class="fa fa-shopping-bag"></i>
                  <!-- <span class="cart-num">2</span> -->
                </a>
              </div>
              <!-- End shopping cart trigger -->
              <?php
              if (isset($_SESSION) && !empty($_SESSION['user']['full_name'])) {
                $a = $_SESSION['user']['full_name'];
                echo "<h4>Xin chào: " . $a . "</h4>";
              } else {
                echo '<a href="/log_in" class="top-my-account">
                <i class="fa fa-user"></i>
                    </a>';
              }
              ?>

              <!-- so sánh sản phẩm -->
              <!-- <a href="compare.html" class="top-compare">
                <i class="fa fa-signal"></i>
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Header Logo -->

      <nav>
        <!-- Start Menu Area -->
        <div class="menu-area">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="main-menu">
                  <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                    <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <ul class="hidden-xs">
                    <li class="active custom-menu"><a href="/home">Trang chủ</a>
                    </li>
                    <li class="megamenu"><a href="#">Đồ nam</a>
                      <div class="mega-menu">
                        <div class="menu-block menu-block-center">
                          <div class="menu-block-1">
                            <ul>
                              <li> <a class="mega-title" href="#">Áo
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">hot</span> -->
                                </a></li>
                              <li><a href="/products_by_type?ct_id=1">Áo phông</a></li>
                              <li> <a href="/products_by_type?ct_id=5">Áo khoác</a></li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Quần
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">Sale</span> -->
                                </a></li>
                              <li> <a href="/products_by_type?ct_id=3">Quần short</a></li>
                              <li> <a href="/products_by_type?ct_id=7">Quần jean</a></li>
                            </ul>
                          </div>
                          <div class="menu-block-3 hidden-sm">
                            <div class="mega-menu-img">
                              <a href="#">
                                <img src="images/slider/men-menu.jpg" alt="Bannar 1">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="megamenu"><a href="#">Đồ nữ</a>
                      <div class="mega-menu">
                        <div class="menu-block menu-block-center">
                          <div class="menu-block-1">
                            <ul>
                              <li> <a class="mega-title" href="#">Áo
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">hot</span> -->
                                </a></li>
                              <li><a href="/products_by_type?ct_id=2">Áo phông</a></li>
                              <li> <a href="/products_by_type?ct_id=6">Áo khoác</a></li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Quần
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">Sale</span> -->
                                </a></li>
                              <li> <a href="/products_by_type?ct_id=4">Quần short</a></li>
                              <li> <a href="/products_by_type?ct_id=8">Quần jean</a></li>
                            </ul>
                          </div>
                          <div class="menu-block-3 hidden-sm">
                            <div class="mega-menu-img"> <a href="#"><img src="images/slider/women-menu.jpg" alt="Bannar 1"></a> </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="##">Liên hệ</a></li>
                  </ul>
                  <span class="phone hidden-xs hidden-sm"><i class="fa fa-phone fa-lg"></i> +84 328588478</span>
                  <!-- <a href="#" class="buy-theme">
                    <p class="text-color">Buy this Template</p>
                  </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header -->