<div class="container" style="margin: 30px auto;">
    <div class="row">
        <div class="col-xs-12">
            <h3>Địa chỉ nhận hàng</h3>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-5">
                    <h4><?php echo $_SESSION['user']['full_name'] . ' | ' . $_SESSION['user']['phone'] ?></h4>

                </div>
                <div class="col-xs-7">
                    <h4><?= $_SESSION['user']['address'] ?></h4>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 20px;">
        <div class="col-xs-12">
            <h3>Sản phẩm</h3>
        </div>
        <div class="col-xs-12">
            <table class="table cart_summary">
                <thead>
                    <tr>
                        <th class="cart_product">Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th class="text-center">Màu</th>
                        <th class="text-center">Size</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-center">Thành tiền</th>
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
                                <td class="availability in-stock qty" id="qty"><?= $list_cart['qty'] ?></td>

                                <input type="hidden" value="<?= $list_cart['pro_price'] ?>" id="price">

                                <td class="price" id="into_money">
                                    <span>333</span>
                                </td>
                            </tr>
                    <?php
                        }
                    } ?>

                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    // Function to calculate the total price for each product
    function calculateProductTotal() {
        var quantityElements = document.querySelectorAll('.qty');
        var priceElements = document.querySelectorAll('#price');
        var intoMoneyElements = document.querySelectorAll('#into_money');

        for (var i = 0; i < quantityElements.length; i++) {
            var quantity = parseInt(quantityElements[i].textContent);
            var price = parseFloat(priceElements[i].value);
            var productTotal = quantity * price;

            intoMoneyElements[i].innerHTML = productTotal.toFixed(0);
        }
    }

    // Calculate the product totals when the page loads
    window.addEventListener('load', calculateProductTotal);

    // Calculate the product totals when the quantity or price changes
    var quantityElements = document.querySelectorAll('.qty');
    var priceElements = document.querySelectorAll('#price');
    for (var i = 0; i < quantityElements.length; i++) {
        quantityElements[i].addEventListener('input', calculateProductTotal);
        priceElements[i].addEventListener('input', calculateProductTotal);
    }
</script>