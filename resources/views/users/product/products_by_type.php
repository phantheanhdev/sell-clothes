  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
              </div>
          </div>
      </div>
  </div>
  <!-- Breadcrumbs End -->
  <!-- Main Container -->
  <div class="main-container col1-layout">
      <div class="container">
          <div class="row">
              <div class="col-main col-sm-12 col-xs-12">
                  <div class="shop-inner">
                      <div class="page-title">
                          <!-- <h2> Đồ nam</h2> -->
                      </div>
                      <div class="toolbar column">
                          <div class="sorter">
                              <div class="short-by">
                                  <label>Sort By:</label>
                                  <select>
                                      <option selected="selected">Position</option>
                                      <option>Name</option>
                                      <option>Price</option>
                                      <option>Size</option>
                                  </select>
                              </div>
                              <div class="short-by page">
                                  <label>Show:</label>
                                  <select>
                                      <option selected="selected">16</option>
                                      <option>20</option>
                                      <option>25</option>
                                      <option>30</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="product-grid-area">
                          <ul class="products-grid">
                              <!--  -->
                              <?php
                                foreach ($product as $product) {
                                ?>
                                  <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="product-item">
                                          <div class="item-inner">
                                              <div class="product-thumbnail">
                                                  <div class="box-hover">
                                                      <div class="btn-quickview">
                                                      </div>
                                                  </div>
                                                  <a href="/single_product?id=<?= $product->pro_id ?>" class="product-item-photo">
                                                      <img class="product-image-photo" src="images/products/<?= $product->pro_img ?>" alt="" width="200px" height="220px">
                                                  </a>
                                              </div>
                                              <div class="pro-box-info">
                                                  <div class="item-info">
                                                      <div class="info-inner">
                                                          <div class="item-title">
                                                              <h4><a title="Ipsums Dolors Untra" href="/single_product?id=<?= $product->pro_id ?>">
                                                                      <?= $product->pro_name ?>
                                                                  </a></h4>
                                                          </div>
                                                          <div class="item-content">
                                                              <div class="item-price">
                                                                  <div class="price-box">
                                                                      <p class="special-price">
                                                                          <span class="price-label">Special Price</span>
                                                                          <a href="/single_product?id=<?= $product->pro_id ?>" class="price"> <?= $product->pro_price ?> VNĐ </a>
                                                                      </p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="box-hover">
                                                      <div class="product-item-actions">
                                                          <div class="pro-actions">
                                                              <button onclick="location.href='/single_product?id=<?= $product->pro_id ?>'" class="action add-to-cart" type="button" title="Add to Cart">
                                                                  <span>Xem chi tiết</span>
                                                              </button>
                                                          </div>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              <?php  }  ?>
                              <!--  -->

                          </ul>
                      </div>
                      <div class="pagination-area ">
                          <ul>
                              <li><a class="active" href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Main Container End -->
  <!-- our clients Slider -->