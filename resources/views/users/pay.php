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
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <h3>Phương thức thanh toán</h3>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-6">
                    <img src="/images/pay/BIDV.jpg" alt="" width="400px" height="400px">
                </div>
                <div class="col-xs-6">
                    <form action="">
                        <div class="">
                            <input type="radio" name="pttt" value="1">
                            <label for="">Chuyển khoản</label>
                        </div>
                        <div class="">
                            <input type="radio" name="pttt" value="2" checked>
                            <label for="">Thanh toán khi nhận hàng</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" style="display: flex; flex-direction: row-reverse;">
            <h3 id="total_money" style="color: red; margin-left: 20px;"></h3>
            <h3>Tổng:</h3>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 20px;">
        <div class="col-xs-10">
            <h5>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo Điều khoản Fancy và Điều khoản và Điều kiện của hợp đồng Bảo hiểm</h5>
        </div>
        <div class="col-xs-2">
            <a href="/order">
                <button class="btn ">Đặt hàng</button>
            </a>
        </div>
    </div>
</div>

<script>
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

    function calculateTotalMoney() {
        var totalMoney = 0;
        var intoMoneyElements = document.querySelectorAll('#into_money');

        for (var i = 0; i < intoMoneyElements.length; i++) {
            var money = parseFloat(intoMoneyElements[i].textContent);
            totalMoney += money;
        }

        var totalMoneyElement = document.getElementById('total_money');
        if (totalMoneyElement) {
            totalMoneyElement.textContent = totalMoney.toFixed(0);
        }
    }

    function calculateTotals() {
        calculateProductTotal();
        calculateTotalMoney();
    }

    window.addEventListener('load', calculateTotals);

    var quantityElements = document.querySelectorAll('.qty');
    var priceElements = document.querySelectorAll('#price');
    for (var i = 0; i < quantityElements.length; i++) {
        quantityElements[i].addEventListener('input', calculateTotals);
        priceElements[i].addEventListener('input', calculateTotals);
    }
</script>