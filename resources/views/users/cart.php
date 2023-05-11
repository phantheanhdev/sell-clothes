  <!-- Main Container -->
  <section class="main-container col1-layout">
      <div class="main container">
          <div class="col-main">
              <div class="cart">

                  <div class="page-content page-order">
                      <div class="page-title">
                          <h2>Giỏ hàng</h2>
                      </div>


                      <div class="order-detail-content">
                          <div class="table-responsive">
                              <table class="table table-bordered cart_summary">
                                  <thead>
                                      <tr>
                                          <th class="cart_product">Product</th>
                                          <th>Description</th>
                                          <th class="text-center">Availability</th>
                                          <th class="text-center">Unit price</th>
                                          <th class="text-center">Qty</th>
                                          <th class="text-center">Total</th>
                                          <th class="action"><i class="fa fa-trash-o"></i></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="cart_product"><a href="#"><img src="images/products/img01.jpg" alt="Product"></a></td>
                                          <td class="cart_description">
                                              <p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                                              <small><a href="#">Color : Red</a></small><br>
                                              <small><a href="#">Size : M</a></small>
                                          </td>
                                          <td class="availability in-stock"><span class="label">In stock</span></td>
                                          <td class="price"><span>$49.88</span></td>
                                          <td class="qty"><input class="form-control input-sm" type="text" value="1"></td>
                                          <td class="price"><span>$49.88</span></td>
                                          <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                                      </tr>
                                      <tr>
                                          <td class="cart_product"><a href="#"><img src="images/products/img02.jpg" alt="Product"></a></td>
                                          <td class="cart_description">
                                              <p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                                              <small><a href="#">Color : Green</a></small><br>
                                              <small><a href="#">Size : XL</a></small>
                                          </td>
                                          <td class="availability out-of-stock"><span class="label">No stock</span></td>
                                          <td class="price"><span>$00.00</span></td>
                                          <td class="qty"><input class="form-control input-sm" type="text" value="0"></td>
                                          <td class="price"><span>00.00</span></td>
                                          <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                                      </tr>
                                      <tr>
                                          <td class="cart_product"><a href="#"><img src="images/products/img03.jpg" alt="Product"></a></td>
                                          <td class="cart_description">
                                              <p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                                              <small><a href="#">Color : Blue</a></small><br>
                                              <small><a href="#">Size : S</a></small>
                                          </td>
                                          <td class="availability in-stock"><span class="label">In stock</span></td>
                                          <td class="price"><span>$99.00</span></td>
                                          <td class="qty"><input class="form-control input-sm" type="text" value="2"></td>
                                          <td class="price"><span>$188.00</span></td>
                                          <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr class="first last">
                                          <td colspan="50" class="a-right last"><button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('#')"><span>Continue Shopping</span></button>
                                              <button type="submit" name="update_cart_action" value="update_qty" title="Update Cart" class="button btn-update"><span>Update Cart</span></button>
                                              <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Cart" class="button btn-empty" id="empty_cart_button"><span>Clear Cart</span></button>
                                          </td>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>

                      <div class="cart-collaterals row">
                          <div class="col-sm-4">
                              <div class="discount">
                                  <h3>MÃ GIẢM GIÁ</h3>
                                  <form id="discount-coupon-form" action="#couponPost/" method="post">
                                      <label for="coupon_code">Nhập mã phiếu giảm giá của bạn nếu bạn có. </label>
                                      <input type="hidden" name="remove" id="remove-coupone" value="0">
                                      <input type="text" class="input-text fullwidth" id="coupon_code" name="coupon_code" value="">
                                      <button type="button" title="Apply Coupon" class="button coupon " onclick="discountForm.submit(false)" value="Apply Coupon"><span>Áp dụng</span></button>
                                  </form>
                              </div>
                          </div>
                          <div class="totals col-sm-4">
                              <h3>TỔNG CỘNG</h3>
                              <div class="inner">
                                  <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                      <colgroup>
                                          <col>
                                          <col width="1">
                                      </colgroup>
                                      <tbody>
                                          <tr>
                                              <td class="a-left" colspan="1">Tiền sản phẩm</td>
                                              <td class="a-right"><span class="price">$249.98</span></td>
                                          </tr>
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <td class="a-left" colspan="1"> <strong>Tổng cộng</strong> </td>
                                              <td class="a-right"><strong>
                                                      <span class="price">$249.98</span>
                                                  </strong></td>
                                          </tr>
                                      </tfoot>
                                  </table>
                                  <ul class="checkout">
                                      <li>
                                          <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout"><span>Mua hàng</span></button>
                                      </li>
                                  </ul>
                              </div>
                              <!--inner-->

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>