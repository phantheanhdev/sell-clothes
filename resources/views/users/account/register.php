
<!-- Main Container -->
<section class="main-container col1-layout">
    <div class="main container">
        <div class="page-content">
            <div class="account-login">
                <div class="box-authentication new-customer-box Account Page ">

                    <form action="/save_register" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="check-title">
                                    <h4>Đăng ký</h4>
                                </div>
                                <span style="color: red;"><?php
                                                            if (isset($_COOKIE['err']) && !empty($_COOKIE['err'])) {
                                                                echo $_COOKIE['err'];
                                                            }
                                                            ?></span>
                            </div>
                            <div class="col-sm-12">
                                <label>Họ và tên:</label>
                                <div class="input-text">
                                    <input type="text" name="us_full_name" id="full_name" class="form-control">
                                </div>
                                <span class="form-text" id="err_full_name" style="color: red;"> </span>
                            </div>
                            <div class="col-sm-12">
                                <label>Địa chỉ:</label>
                                <div class="input-text">
                                    <input type="text" name="us_address" id="address" class="form-control">
                                </div>
                                <span class="form-text" id="err_address" style="color: red;"> </span>
                            </div>
                            <div class="col-sm-12">
                                <label>Email:</label>
                                <div class="input-text">
                                    <input type="email" name="us_email" id="email" class="form-control">
                                </div>
                                <span class="form-text" id="err_email" style="color: red;"> </span>
                            </div>
                            <div class="col-sm-12">
                                <label>Số điện thoại:</label>
                                <div class="input-text">
                                    <input type="text" name="us_phone" id="phone" class="form-control">
                                </div>
                                <span class="form-text" id="err_phone" style="color: red;"> </span>
                            </div>
                            <div class="col-sm-12">
                                <label>Tài khoản:</label>
                                <div class="input-text">
                                    <input type="text" name="us_acc_name" id="acc_name" class="form-control">
                                </div>
                                <span class="form-text" id="err_acc_name" style="color: red;"> </span>
                            </div>
                            <div class="col-sm-12">
                                <label>Mật khẩu:</label>
                                <div class="input-text">
                                    <input type="password" name="us_pass" id="pass" class="form-control">
                                </div>
                                <span class="form-text" id="err_pass" style="color: red;"> </span>
                            </div>
                            <div class="col-sm-12">
                                <label>Nhập lại mật khẩu:</label>
                                <div class="input-text">
                                    <input type="password" id="retype_pass" class="form-control">
                                </div>
                                <span class="form-text" id="err_retype_pass" style="color: red;"> </span>
                            </div>
                            <div class="col-xs-12">
                                <!-- <div class="billing-checkbox">
                                    <label class="inline" for="rememberme">
                                        <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                        Sign up for our newsletter! </label>
                                </div> -->
                                <div class="submit-text">
                                    <button class="button" id="submit">
                                        <i class="fa fa-user">
                                        </i>&nbsp; <span>Đăng ký</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let sumit_add_pro = document.querySelector('#submit')

    const validate = () => {
        let full_name = document.querySelector('#full_name').value
        let err_full_name = document.querySelector('#err_full_name')
        let reg_full_name = /^[\p{L}\s0-9_]{5,100}$/u;
        // 
        let address = document.querySelector('#address').value
        let err_address = document.querySelector('#err_address')
        let reg_address = /^[\p{L}\s0-9_,]{10,500}$/u;

        // 
        let email = document.querySelector('#email').value
        let err_email = document.querySelector('#err_email')
        let reg_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // 
        let phone = document.querySelector('#phone').value
        let err_phone = document.querySelector('#err_phone')
        let reg_phone = /^(?:\+84|0)(?:\d{9}|\d{10})$/;
        // 
        let acc_name = document.querySelector('#acc_name').value
        let err_acc_name = document.querySelector('#err_acc_name')
        let reg_acc_name = /^[a-zA-Z0-9]{5,50}$/;
        // 
        let pass = document.querySelector('#pass').value
        let err_pass = document.querySelector('#err_pass')
        let reg_pass = /^[a-zA-Z0-9]{5,50}$/;
        // 
        let retype_pass = document.querySelector('#retype_pass').value
        let err_retype_pass = document.querySelector('#err_retype_pass')
        // 

        const flag = {
            full_name: false,
            address: false,
            email: false,
            phone: false,
            acc_name: false,
            pass: false,
            retype_pass: false
        }
        // 
        if (full_name == '' || full_name == null) {
            err_full_name.innerHTML = "Không được để trống"
            flag.full_name = true;
        } else if (!reg_full_name.test(full_name)) {
            err_full_name.innerHTML = "Họ tên có thể chứa kí tự a-z A-Z 0-9, độ dài tối thiểu 5 kí tự, tối đa 100"
            flag.full_name = true;
        } else {
            err_full_name.innerHTML = "";
            flag.full_name = false;
        }
        // 
        if (address == '' || address == null) {
            err_address.innerHTML = "Không được để trống"
            flag.address = true;
        } else if (!reg_address.test(address)) {
            err_address.innerHTML = "Địa chỉ có thể chứa kí tự a-z A-Z 0-9, độ dài tối thiểu 10 kí tự, tối đa 500"
            flag.address = true;
        } else {
            err_address.innerHTML = "";
            flag.address = false;
        }
        // 
        if (email == '' || email == null) {
            err_email.innerHTML = "Không được để trống"
            flag.email = true;
        } else if (!reg_email.test(email)) {
            err_email.innerHTML = "Hãy nhập đúng email"
            flag.email = true;
        } else {
            err_email.innerHTML = "";
            flag.email = false;
        }
        // 
        if (phone == '' || phone == null) {
            err_phone.innerHTML = "Không được để trống"
            flag.phone = true;
        } else if (!reg_phone.test(phone)) {
            err_phone.innerHTML = "Hãy nhập đúng số điện thoại"
            flag.phone = true;
        } else {
            err_phone.innerHTML = "";
            flag.phone = false;
        }
        // 
        if (acc_name == '' || acc_name == null) {
            err_acc_name.innerHTML = "Không được để trống"
            flag.acc_name = true;
        } else if (!reg_acc_name.test(acc_name)) {
            err_acc_name.innerHTML = "Tài khoản viết liền không dấu, kí tự 5-50"
            flag.acc_name = true;
        } else {
            err_acc_name.innerHTML = "";
            flag.acc_name = false;
        }
        // 
        if (pass == '' || pass == null) {
            err_pass.innerHTML = "Không được để trống"
            flag.pass = true;
        } else if (!reg_pass.test(pass)) {
            err_pass.innerHTML = "Mật khẩu viết liền không dấu, kí tự 5-50"
            flag.pass = true;
        } else {
            err_pass.innerHTML = "";
            flag.pass = false;
        }
        // 
        if (retype_pass == '' || retype_pass == null) {
            err_retype_pass.innerHTML = "Không được để trống"
            flag.retype_pass = true;
        } else if (retype_pass != pass) {
            err_retype_pass.innerHTML = "Mật khẩu không khớp"
            flag.retype_pass = true;
        } else {
            err_retype_pass.innerHTML = "";
            flag.retype_pass = false;
        }

        // 
        if (flag.full_name == false && flag.address == false && flag.email == false && flag.phone == false && flag.acc_name == false && flag.pass == false && flag.retype_pass == false) {
            return true;
        } else {
            return false;
        }

    }
</script>