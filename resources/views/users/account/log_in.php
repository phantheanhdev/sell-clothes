
<!-- Main Container -->

<section class="main-container col1-layout">
    <div class="main container">
        <div class="page-content">
            <div class="account-login">
                <div class="box-authentication">
                    <h4>Đăng nhập</h4>
                    <span style="color: red;"><?php
                                                if (isset($_COOKIE['success']) && !empty($_COOKIE['success'])) {
                                                    echo $_COOKIE['success'];
                                                }
                                                ?></span>
                    <p class="before-login-text">Chào mừng trở lại! đăng nhập vào tài khoản của bạn</p>

                    <form action="/submit_log_in" method="post" enctype="multipart/form-data">
                        <label for="emmail_login"> Tài khoản <span class="required">*</span></label>
                        <input id="emmail_login" type="text" class="form-control" name="acc_name">

                        <label for="password_login">Mật khẩu <span class="required">*</span></label>
                        <input id="password_login" type="password" class="form-control" name="acc_pass">

                        <span style="color: red;"><?php
                                                    if (isset($_COOKIE['err']) && !empty($_COOKIE['err'])) {
                                                        echo $_COOKIE['err'];
                                                    }
                                                    ?></span>
                        <p class="forgot-pass"><a href="#">Quên mật khẩu?</a></p>

                        <button class="button"><i class="fa fa-lock"></i>&nbsp; <span>Đăng nhập</span></button>
                    </form>
                    <!-- <label class="inline" for="rememberme">
                        <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                        Remember me </label> -->
                </div>
            </div>
        </div>
    </div>
</section>