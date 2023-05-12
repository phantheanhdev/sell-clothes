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
                <ul class="links">
                  <li><a href="/register">Đăng ký</a></li>
                  <li><a href="/log_in">Đăng nhập</a></li>
                  <li><a href="/ad_list_pro">qua admin hehe</a></li>
                </ul>

                <!-- đổi ngôn ngữ và đổi loại tiền -->
                <!-- <div class="language-currency-wrapper pull-right">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <span class="lg-fr">English</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a href="#"><span>German</span> </a> </li>
                      <li> <a href="#"><span>Brazil</span> </a> </li>
                      <li> <a href="#"><span>Chile</span> </a> </li>
                      <li> <a href="#"><span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
              </div> -->
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
                    <!-- tìm kiếm theo loại hàng -->
                    <!-- <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                    <option>All Categories</option>
                    <option>women</option>
                    <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                    <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                    <option>&nbsp;&nbsp;&nbsp;Top</option>
                    <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                    <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                    <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                    <option>Men</option>
                    <option>Electronics</option>
                    <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                    <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                  </select> -->
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
              <a href="/log_in" class="top-my-account">
                <i class="fa fa-user"></i>
              </a>
              
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
                      <!-- <ul class="dropdown">
                        <li><a href="https://htmlfancy.justthemevalley.com/version1/index.html">Home Version 1</a></li>
                        <li><a href="index.html">Home Version 2</a></li>
                        <li><a href="https://htmlfancy.justthemevalley.com/version3/index.html">Home Version 3</a></li>
                      </ul> -->
                    </li>
                    <li class="megamenu"><a href="/men">Đồ nam</a>
                      <div class="mega-menu">
                        <div class="menu-block menu-block-center">
                          <div class="menu-block-1">
                            <ul>
                              <li> <a class="mega-title" href="#">Áo
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">hot</span> -->
                                </a></li>
                              <li><a href="/men_t_shirt">Áo phông</a></li>
                              <li> <a href="/men_jackets">Áo khoác</a></li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Quần
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">Sale</span> -->
                                </a></li>
                              <li> <a href="/men_short">Quần short</a></li>
                              <li> <a href="/men_jean">Quần jean</a></li>
                            </ul>
                          </div>
                          <div class="menu-block-3 hidden-sm">
                            <div class="mega-menu-img"> <a href="#"><img src="images/menu-img2.jpg" alt="Bannar 1"></a> </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="megamenu"><a href="/women">Đồ nữ</a>
                      <div class="mega-menu">
                        <div class="menu-block menu-block-center">
                          <div class="menu-block-1">
                            <ul>
                              <li> <a class="mega-title" href="#">Áo
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">hot</span> -->
                                </a></li>
                              <li><a href="/women_t_shirt">Áo phông</a></li>
                              <li> <a href="/women_jackets">Áo khoác</a></li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Quần
                                  <!-- <span class="menu-item-tag menu-item-tag-hot">Sale</span> -->
                                </a></li>
                              <li> <a href="/women_short">Quần short</a></li>
                              <li> <a href="/women_jean">Quần jean</a></li>
                            </ul>
                          </div>
                          <div class="menu-block-3 hidden-sm">
                            <div class="mega-menu-img"> <a href="shop_grid.html"><img src="images/menu-img2.jpg" alt="Bannar 1"></a> </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="megamenu"><a href="shop_grid.html">Trang <!--<span class="menu-item-tag menu-item-tag-new">new</span>--></a>
                      <div class="mega-menu">
                        <div class="menu-block menu-block-center">
                          <div class="menu-block">
                            <ul>
                              <li> <a class="mega-title" href="#">Shop Pages </a></li>
                              <li> <a href="shop_grid.html"> Shop grid </a></li>
                              <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
                              <li> <a href="shop_list.html"> Shop list </a> </li>
                              <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
                              <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Ecommerce Pages </a></li>
                              <li> <a href="wishlist.html"> Wishlists </a> </li>
                              <li><a href="checkout.html"> Checkout </a> </li>
                              <li><a href="compare.html"> Compare </a> </li>
                              <li><a href="shopping_cart.html"> Shopping cart </a></li>
                              <li> <a href="faq.html"> FAQ </a> </li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Product Categories </a></li>
                              <li><a href="single_product.html"> single product </a> </li>
                              <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a></li>
                              <li><a href="single_product_left_sidebar.html"> single product left sidebar</a></li>
                              <li><a href="single_product_magnific_popup.html"> single product magnific popup</a></li>
                              <li><a href="cat-4-col-full.html"> 4 Column</a> </li>
                            </ul>
                            <ul>
                              <li> <a class="mega-title" href="#">Static Pages </a></li>
                              <li><a href="create_account_page.html"> Create Account Page </a> </li>
                              <li> <a href="about_us.html"> About Us </a> </li>
                              <li> <a href="contact_us.html"> Contact us </a></li>
                              <li> <a href="404error.html"> Error 404 </a> </li>
                              <li> <a href="register_page.html"> Register Page </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="contact_us.html">Liên hệ</a></li>
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