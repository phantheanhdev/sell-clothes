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
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <!-- form -->
                        <form action="/add_cart" method="post" enctype="multipart/form-data">

                            <div class="large-image">
                                <a href="images/products/<?= $single_pro->pro_img ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                                    <img class="zoom-img" src="images/products/<?= $single_pro->pro_img ?>" alt="products" width="487px" height="487px">
                                </a>
                            </div>
                            <!--  -->
                            <input type="hidden" name="pro_id" value="<?= $single_pro->pro_id ?>">
                            <input type="hidden" name="pro_img" value="<?= $single_pro->pro_img ?>">
                            <input type="hidden" name="pro_name" value="<?= $single_pro->pro_name ?>">
                            <input type="hidden" name="pro_price" value="<?= $single_pro->pro_price ?>">

                            <!-- end: more-images -->

                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                        <div class="product-name">
                            <h2><?= $single_pro->pro_name ?></h2>
                        </div>
                        <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?= $single_pro->pro_price ?> VNĐ </span> </p>
                            <!-- giam gia -->
                            <!-- <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $359.99 </span> </p> -->
                        </div>
                        <div class="product-color-size-area">
                            <div class="color-area">
                                <h2 class="saider-bar-title">Màu</h2>
                                <select name="cl_id" id="" style="color:black;">
                                    <?php
                                    foreach ($all_color as $all_color) { ?>
                                        <option value="<?= $all_color->cl_id ?>"><?= $all_color->cl_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="size-area">
                                <h2 class="saider-bar-title">Size</h2>
                                <select name="sz_id" id="" style="color:black;">
                                    <?php
                                    foreach ($all_size as $all_size) { ?>
                                        <option value="<?= $all_size->sz_id ?>"><?= $all_size->sz_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="product-variation">
                            <div class="cart-plus-minus">
                                <label for="qty">Số lượng:</label>
                                <div class="numbers-row">
                                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton">
                                        <i class="fa fa-minus">&nbsp;</i>
                                    </div>

                                    <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">

                                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton">
                                        <i class="fa fa-plus">&nbsp;</i>
                                    </div>
                                </div>
                            </div>

                            <button class="button pro-add-to-cart" title="Add to Cart" type="submit">
                                <span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
                            </button>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-overview-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="product-tab-inner">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#description" data-toggle="tab"> Mô tả </a> </li>
                                    <li> <a href="#custom_tabs" data-toggle="tab">Bình luận</a> </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="description">
                                        <div class="std">
                                            <p>
                                                <?= $single_pro->pro_desc ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom_tabs">
                                        <div class="product-tabs-content-inner clearfix">
                                            comment
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Container End -->

<!-- Related Product Slider -->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="related-product-area">
                <div class="title_block">
                    <h3 class="products_title">Sản phẩm tương tự</h3>
                </div>
                <div class="related-products-pro">
                    <div class="slider-items-products">
                        <div id="related-product-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                <!--  -->
                                <?php foreach ($similar_pro as $similar_pro) {  ?>

                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <a href="/single_product?id=<?= $similar_pro->pro_id ?>" class="product-item-photo">
                                                    <img class="product-image-photo" src="images/products/<?= $similar_pro->pro_img ?>" alt="" width="200px" height="220px">
                                                </a>
                                            </div>
                                            <div class="pro-box-info">
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <h4>
                                                                <a title="Ipsums Dolors Untra" href="/single_product?id=<?= $similar_pro->pro_id ?>">
                                                                    <?= $similar_pro->pro_name ?>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <a href="/single_product?id=<?= $similar_pro->pro_id ?>" class="regular-price">
                                                                        <span class="price"><?= $similar_pro->pro_price ?> VNĐ</span>
                                                                    </a>
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

                                <?php } ?>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Product Slider End -->

<!-- Upsell Product Slider -->

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