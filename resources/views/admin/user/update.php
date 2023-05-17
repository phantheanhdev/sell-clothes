<h1 class="mt-4 text-uppercase">update user</h1>

<a href="/ad_list_user">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">List users</button>
</a>
<h5 style="color: red;"><?php
                        if (isset($_COOKIE['err']) && !empty($_COOKIE['err'])) {
                            echo $_COOKIE['err'];
                        }
                        ?></h5>

<div class="card mb-4">
    <form action="/ad_save_update_user" method="post" class="mx-5 mt-3" enctype="multipart/form-data" onsubmit="return validate()">

        <input type="hidden" value="<?= $user->us_id ?>" name="us_id">
        <!-- text -->
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" name="us_full_name" id="us_full_name" value="<?= $user->us_full_name ?>">
            <span class="form-text" id="err_us_full_name" style="color: red;"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Account name</label>
            <input type="text" readonly class="form-control" name="us_acc_name" id="us_acc_name" value="<?= $user->us_acc_name ?>">
            <span class="form-text" style="color: red;" id="err_us_acc_name"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Pass</label>
            <input type="text" class="form-control" name="us_pass" id="us_pass" value="<?= $user->us_pass ?>">
            <span class="form-text" style="color: red;" id="err_us_pass"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="us_address" id="us_address" value="<?= $user->us_address ?>">
            <span class="form-text" style="color: red;" id="err_us_address"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="us_email" id="us_email" value="<?= $user->us_email ?>">
            <span class="form-text" style="color: red;" id="err_us_email"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="us_phone" id="us_phone" value="<?= $user->us_phone ?>">
            <span class="form-text" style="color: red;" id="err_us_phone"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="us_role" id="">
                <option value="0" <?php if ($user->us_role == 0) {
                                        echo 'selected';
                                    } ?>>admin</option>
                <option value="1" <?php if ($user->us_role == 1) {
                                        echo 'selected';
                                    } ?>>Khách hàng</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary mb-4" id="submit">

    </form>
</div>

<script>
    let sumit_add_pro = document.querySelector('#submit')

    const validate = () => {
        let us_full_name = document.querySelector('#us_full_name').value
        let err_us_full_name = document.querySelector('#err_us_full_name')
        let reg_us_full_name = /^[\p{L}\s0-9_]{5,100}$/u;
        // 
        let us_acc_name = document.querySelector('#us_acc_name').value
        let err_us_acc_name = document.querySelector('#err_us_acc_name')
        let reg_us_acc_name = /^[a-zA-Z0-9]{5,50}$/;
        // 
        let us_pass = document.querySelector('#us_pass').value
        let err_us_pass = document.querySelector('#err_us_pass')
        let reg_us_pass = /^[a-zA-Z0-9]{5,50}$/;
        // 
        let us_address = document.querySelector('#us_address').value
        let err_us_address = document.querySelector('#err_us_address')
        let reg_us_address = /^[\p{L}\s0-9_,]{10,500}$/u;

        // 
        let us_email = document.querySelector('#us_email').value
        let err_us_email = document.querySelector('#err_us_email')
        let reg_us_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // 
        let us_phone = document.querySelector('#us_phone').value
        let err_us_phone = document.querySelector('#err_us_phone')
        let reg_us_phone = /^(?:\+84|0)(?:\d{9}|\d{10})$/;

        const flag = {
            us_full_name: false,
            us_acc_name: false,
            us_pass: false,
            us_address: false,
            us_email: false,
            us_phone: false,
        }
        // 
        if (us_full_name == '' || us_full_name == null) {
            err_us_full_name.innerHTML = "Không được để trống"
            flag.us_full_name = true;
        } else if (!reg_us_full_name.test(us_full_name)) {
            err_us_full_name.innerHTML = "Họ tên có thể chứa kí tự a-z A-Z 0-9, độ dài tối thiểu 5 kí tự, tối đa 100"
            flag.us_full_name = true;
        } else {
            err_us_full_name.innerHTML = "";
            flag.us_full_name = false;
        }
        // 
        if (us_acc_name == '' || us_acc_name == null) {
            err_us_acc_name.innerHTML = "Không được để trống"
            flag.us_acc_name = true;
        } else if (!reg_us_acc_name.test(us_acc_name)) {
            err_us_acc_name.innerHTML = "Tài khoản viết liền không dấu, kí tự 5-50"
            flag.us_acc_name = true;
        } else {
            err_us_acc_name.innerHTML = "";
            flag.us_acc_name = false;
        }
        // 
        if (us_pass == '' || us_pass == null) {
            err_us_pass.innerHTML = "Không được để trống"
            flag.us_pass = true;
        } else if (!reg_us_pass.test(us_pass)) {
            err_us_pass.innerHTML = "Mật khẩu viết liền không dấu, kí tự 5-50"
            flag.us_pass = true;
        } else {
            err_us_pass.innerHTML = "";
            flag.us_pass = false;
        }
        // 
        if (us_address == '' || us_address == null) {
            err_us_address.innerHTML = "Không được để trống"
            flag.us_address = true;
        } else if (!reg_us_address.test(us_address)) {
            err_us_address.innerHTML = "Địa chỉ có thể chứa kí tự a-z A-Z 0-9, độ dài tối thiểu 10 kí tự, tối đa 500"
            flag.us_address = true;
        } else {
            err_us_address.innerHTML = "";
            flag.us_address = false;
        }
        // 
        if (us_email == '' || us_email == null) {
            err_us_email.innerHTML = "Không được để trống"
            flag.us_email = true;
        } else if (!reg_us_email.test(us_email)) {
            err_us_email.innerHTML = "Hãy nhập đúng email"
            flag.us_email = true;
        } else {
            err_us_email.innerHTML = "";
            flag.us_email = false;
        }
        // 
        if (us_phone == '' || us_phone == null) {
            err_us_phone.innerHTML = "Không được để trống"
            flag.us_phone = true;
        } else if (!reg_us_phone.test(us_phone)) {
            err_us_phone.innerHTML = "Hãy nhập đúng số điện thoại"
            flag.us_phone = true;
        } else {
            err_us_phone.innerHTML = "";
            flag.us_phone = false;
        }

        // 
        if (flag.us_full_name == false && flag.us_acc_name == false && flag.us_pass == false && flag.us_address == false && flag.us_email == false && flag.us_phone == false) {
            return true;
        } else {
            return false;
        }

    }
</script>