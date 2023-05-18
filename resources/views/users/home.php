  <!-- Main Slider Area -->
  <div class="main-slider-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-xs-12">
                  <!-- Main Slider -->
                  <div class="main-slider">
                      <div class="slider">
                          <div id="mainSlider" class="nivoSlider slider-image"> <img src="images/slider/slider-img1.jpg" alt="main slider" title="#htmlcaption1" /> <img src="images/slider/slider-img2.jpg" alt="main slider" title="#htmlcaption2" /></div>
                          <!-- Slider Caption 1 -->
                          <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                              <div class="slider-progress"></div>
                              <div class="slide-text">
                                  <div class="middle-text">
                                      <div class="cap-dec">
                                          <h2 class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s">Hè 2023 </h2>
                                          <h1 class="cap-dec wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0s"><span>20%</span> Giảm giá các mặt hàng</h1>
                                      </div>
                                      <!-- <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="#">Shop Now</a> </div> -->
                                  </div>
                              </div>
                          </div>
                          <!-- Slider Caption 2 -->
                          <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                              <div class="slider-progress"></div>
                              <div class="slide-text slide-text-2">
                                  <div class="middle-text">
                                      <div class="cap-dec">
                                          <h2 class="cap-dec wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0s">Hè 2023 </h2>
                                          <h1 class="cap-dec wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0s"><span>20%</span> Giảm giá các mặt hàng</h1>
                                      </div>
                                      <!-- <div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s"> <a href="#">Shop Now</a> </div> -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Main Slider -->

              </div>
          </div>
      </div>
  </div>
  <!-- End Main Slider Area -->
  <div class="container">
      <!-- service section -->
      <div class="jtv-service-area">
          <div class="row">
              <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
                  <div class="block-wrapper ship">
                      <div class="text-des"> <i class="icon-rocket"></i>
                          <h3>MIỄN PHÍ VẬN CHUYỂN</h3>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
                  <div class="block-wrapper return">
                      <div class="text-des"> <i class="fa fa-dollar"></i>
                          <h3>ĐẢM BẢO HOÀN TIỀN</h3>
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
                  <div class="block-wrapper support">
                      <div class="text-des"> <i class="fa fa-headphones"></i>
                          <h3>HỖ TRỢ TRỰC TUYẾN 24/7</h3>
                          <p></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--  -->
  <div class="container">
      <div class="row">

          <!-- main container -->
          <div class="home-tab">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <!-- Home Tabs  -->

                          <div class="tab-info">
                              <h3 class="new-product-title pull-left">SẢN PHẨM MỚI</h3>
                              <ul class="nav home-nav-tabs home-product-tabs">
                              </ul>
                          </div>

                          <div id="productTabContent" class="tab-content">
                              <div class="tab-pane active in" id="all">
                                  <!--  -->
                                  <?php
                                    foreach ($new_product_8 as $value_new_pro_8) {

                                    ?>

                                      <div class="product-item col-md-3 col-sm-6">
                                          <div class="item-inner">
                                              <div class="product-thumbnail">
                                                  <div class="icon-new-label new-left">new</div>
                                                  <div class="box-hover">
                                                      <!-- thêm vào yêu thích + so sánh -->
                                                      <!-- <div class="add-to-links" data-role="add-to-links">
                                                          <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist">
                                                          </a>
                                                          <a href="compare.html" class="action add-to-compare" title="Add to Compare">
                                                          </a>
                                                      </div> -->
                                                  </div>
                                                  <div class="slider-items-products">
                                                      <div id="pro1-slider" class="product-flexslider hidden-buttons">
                                                          <div class="slider-items slider-width-col6">
                                                              <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="product-item-photo">
                                                                  <img class="product-image-photo" src="images/products/<?= $value_new_pro_8->pro_img ?>" alt="" width="200px" height="220px">
                                                              </a>
                                                              <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="product-item-photo">
                                                                  <img class="product-image-photo" src="images/products/<?= $value_new_pro_8->pro_img ?>" alt="" width="200px" height="220px">
                                                              </a>
                                                              <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="product-item-photo">
                                                                  <img class="product-image-photo" src="images/products/<?= $value_new_pro_8->pro_img ?>" alt="" width="200px" height="220px">
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="pro-box-info">
                                                  <div class="item-info">
                                                      <div class="info-inner">
                                                          <div class="item-title">
                                                              <h4> <a title="Product Title Here" href="/single_product?id=<?= $value_new_pro_8->pro_id ?>">
                                                                      <?= $value_new_pro_8->pro_name ?>
                                                                  </a></h4>
                                                          </div>
                                                          <div class="item-content">
                                                              <!-- chất lượng 5 sao -->
                                                              <!-- <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> -->
                                                              <div class="item-price">
                                                                  <div class="price-box">
                                                                      <p class="special-price">
                                                                          <span class="price-label">Special Price</span>
                                                                          <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="price">
                                                                              <?= $value_new_pro_8->pro_price ?> VNĐ
                                                                          </a>
                                                                      </p>
                                                                      <!-- giảm giá  -->
                                                                      <!-- <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p> -->
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="box-hover">
                                                      <div class="product-item-actions">
                                                          <div class="pro-actions">
                                                              <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!--  -->

                                  <?php
                                    }
                                    ?>
                                  <!--  -->
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--  -->

                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <!-- Home Tabs  -->

                          <div class="tab-info">
                              <h3 class="new-product-title pull-left">ĐƯỢC QUAN TÂM NHIỀU</h3>
                              <ul class="nav home-nav-tabs home-product-tabs">
                              </ul>
                          </div>

                          <div id="productTabContent" class="tab-content">
                              <div class="tab-pane active in" id="all">
                                  <!--  -->
                                  <?php
                                    foreach ($products_of_interest_8 as $products_of_interest_8) {
                                    ?>
                                      <div class="product-item col-md-3 col-sm-6">
                                          <div class="item-inner">
                                              <div class="product-thumbnail">
                                                  <div class="icon-sale-label sale-left">hot</div>
                                                  <div class="box-hover">
                                                  </div>
                                                  <div class="slider-items-products">
                                                      <div id="pro1-slider" class="product-flexslider hidden-buttons">
                                                          <div class="slider-items slider-width-col6">
                                                              <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="product-item-photo">
                                                                  <img class="product-image-photo" src="images/products/<?= $products_of_interest_8->pro_img ?>" alt="" width="200px" height="220px">
                                                              </a>
                                                              <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="product-item-photo">
                                                                  <img class="product-image-photo" src="images/products/<?= $products_of_interest_8->pro_img ?>" alt="" width="200px" height="220px">
                                                              </a>
                                                              <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="product-item-photo">
                                                                  <img class="product-image-photo" src="images/products/<?= $products_of_interest_8->pro_img ?>" alt="" width="200px" height="220px">
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="pro-box-info">
                                                  <div class="item-info">
                                                      <div class="info-inner">
                                                          <div class="item-title">
                                                              <h4> <a title="Product Title Here" href="/single_product?id=<?= $value_new_pro_8->pro_id ?>">
                                                                      <?= $products_of_interest_8->pro_name ?>
                                                                  </a></h4>
                                                          </div>
                                                          <div class="item-content">
                                                              <div class="item-price">
                                                                  <div class="price-box">
                                                                      <p class="special-price"> <span class="price-label">Special Price</span>
                                                                          <a href="/single_product?id=<?= $value_new_pro_8->pro_id ?>" class="price">
                                                                              <?= $products_of_interest_8->pro_price ?> VNĐ
                                                                          </a>
                                                                      </p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="box-hover">
                                                      <div class="product-item-actions">
                                                          <div class="pro-actions">
                                                              <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!--  -->
                                  <?php
                                    }
                                    ?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--  -->

                  <!-- thích banner thì bỏ vô dưới cmt ni :v -->

              </div>
          </div>

      </div>
  </div>
  </div>