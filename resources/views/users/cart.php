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
                                        <th class="cart_product">Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th class="text-center">Màu</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-center">Giá</th>
                                        <th class="action"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if (isset($_SESSION['list_cart']) && !empty($_SESSION['list_cart'])) {
                                        foreach ($_SESSION['list_cart'] as $key_list_cart => $list_cart) {
                                    ?>
                                            <tr>
                                                <td class="cart_product">
                                                    <a href="images/products/<?= $list_cart['pro_img'] ?>">
                                                        <img src="images/products/<?= $list_cart['pro_img'] ?>" alt="Product" width="100px" height="100px">
                                                    </a>
                                                </td>
                                                <td class="cart_description">
                                                    <p class="product-name"><?= $list_cart['pro_name'] ?></p>
                                                </td>
                                                <?php
                                                foreach ($all_colors as $colors) {
                                                    if ($list_cart['cl_id'] == $colors->cl_id) {
                                                ?>
                                                        <td class="availability in-stock"><?= $colors->cl_name ?></td>
                                                <?php
                                                    }
                                                } ?>

                                                <?php
                                                foreach ($all_sizes as $sizes) {
                                                    if ($list_cart['sz_id'] == $sizes->sz_id) {
                                                ?>
                                                        <td class="availability in-stock"><?= $sizes->sz_name ?></td>
                                                <?php
                                                    }
                                                } ?>
                                                <td class="availability in-stock qty">
                                                    <input type="number" min="1" max="10" value="<?= $list_cart['qty'] ?>" required disabled>
                                                </td>

                                                <td class="price">
                                                    <span><?= $list_cart['pro_price'] ?></span>
                                                </td>
                                                <td class="action">
                                                    <a href="/cart_delete_one?id=<?= $key_list_cart ?>">
                                                        <button>Xóa</button>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr class="first last">
                                        <td colspan="50" class="a-right last">
                                            <a href="/home">
                                                <button type="button" title="Continue Shopping" class="button btn-continue">
                                                    <span>Tiếp tục mua sắm</span>
                                                </button>
                                            </a>
                                            <a href="/cart_delete_all">
                                                <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Cart" class="button btn-empty" id="empty_cart_button">
                                                    <span>Xóa tất cả sản phẩm</span>
                                                </button>
                                            </a>
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
                                        <!-- <tr>
                                            <td class="a-left" colspan="1">Tiền sản phẩm</td>
                                            <td class="a-right"><span class="price">$249.98</span></td>
                                        </tr> -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="a-left" colspan="1"> <strong>Tổng cộng</strong> </td>
                                            <td class="a-right total-price"><strong>
                                                    <span class="price" id="total-price"></span>
                                                </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <ul class="checkout">
                                    <li>
                                        <a href="/pay">
                                            <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout">
                                                <span>Mua hàng</span>
                                            </button>
                                        </a>
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

<script>
    // Function to calculate the total price
    function calculateTotalPrice() {
        var totalPrice = 0;
        var quantityElements = document.querySelectorAll('.qty input');
        var priceElements = document.querySelectorAll('.price span');

        for (var i = 0; i < quantityElements.length; i++) {
            var quantity = parseInt(quantityElements[i].value);
            var price = parseFloat(priceElements[i].textContent);
            var productPrice = quantity * price;
            totalPrice += productPrice;
        }

        // Display the total price
        var totalPriceElement = document.getElementById('total-price');
        if (totalPriceElement) {
            totalPriceElement.textContent = totalPrice.toFixed(0);
        }
    }

    // Calculate the total price when the page loads
    window.addEventListener('load', calculateTotalPrice);

    // Calculate the total price when the quantity of a product changes
    var quantityInputs = document.querySelectorAll('.qty input');
    for (var i = 0; i < quantityInputs.length; i++) {
        quantityInputs[i].addEventListener('change', calculateTotalPrice);
    }
</script>