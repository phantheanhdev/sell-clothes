<h1 class="mt-4">ADD PRODUCT</h1>

<a href="/ad_list_pro">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">List products</button>
</a>
<div class="card mb-4">
    <form action="/ad_save_add_pro" method="post" class="mx-5 mt-3" enctype="multipart/form-data" onsubmit="return validate()">

        <!-- text -->
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="pro_name" id="pro_name">
            <span class="form-text" id="err_pro_name" style="color: red;"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="pro_price" id="pro_price">
            <span class="form-text" style="color: red;" id="err_pro_price"> </span>
        </div>
        <div class="mb-3">
            <label for="floatingTextarea">Description</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="pro_desc" style="height: 200px;" name="pro_desc"></textarea>
                <span class="form-text" style="color: red;" id="err_pro_desc"> </span>
            </div>
        </div>

        <select class="form-select mb-3" aria-label="Default select example" name="ct_id" id="pro_category">
            <?php foreach ($all_categories as $value_categories) : ?>
                <option value="<?= $value_categories->ct_id ?>">
                    <?= $value_categories->ct_name ?>
                </option>
            <?php endforeach ?>
        </select>
        <span class="form-text" style="color: red;" id="err_pro_category"> </span>

        <!-- img -->
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="pro_img" multiple id="pro_img">
            <span class="form-text" style="color: red;" id="err_pro_img"> </span>
        </div>

        <input type="submit" class="btn btn-primary mb-4" id="submit_add_pro">
        <!-- <button type="submit" class="btn btn-primary mb-4">Submit</button> -->

    </form>
</div>

<script>
    let sumit_add_pro = document.querySelector('#submit_add_pro')

    const validate = () => {
        let pro_name = document.querySelector('#pro_name').value
        let err_pro_name = document.querySelector('#err_pro_name')
        let reg_pro_name = /^[\p{L}\s0-9_]{10,500}$/u;
        // 
        let pro_price = document.querySelector('#pro_price').value
        let err_pro_price = document.querySelector('#err_pro_price')
        let reg_pro_price = /^[0-9]{4,100}$/u
        // 
        let pro_desc = document.querySelector('#pro_desc').value
        let err_pro_desc = document.querySelector('#err_pro_desc')
        let reg_pro_desc = /^[\p{L}\p{N}\s.,;:_\-(){}\[\]'"?!@#$%^&*+=<>{\}[\]\\|]{30,1000}$/u
        // 
        let pro_img = document.querySelector('#pro_img').value
        let err_pro_img = document.querySelector('#err_pro_img')

        const flag = {
            name: false,
            price: false,
            desc: false,
            img: false
        }
        // 
        if (pro_name == '' || pro_name == null) {
            err_pro_name.innerHTML = "Không được để trống"
            flag.name = true;
        } else if (!reg_pro_name.test(pro_name)) {
            err_pro_name.innerHTML = "Tên sản phẩm có thể chứa kí tự a-z A-Z 0-9, độ dài tối thiểu 10 kí tự, tối đa 500"
            flag.name = true;
        } else {
            err_pro_name.innerHTML = "";
            flag.name = false;
        }
        // 
        if (pro_price == '' || pro_price == null) {
            err_pro_price.innerHTML = "Không được để trống"
            flag.price = true;
        } else if (!reg_pro_price.test(pro_price)) {
            err_pro_price.innerHTML = "Giá sản phẩm phải là số và từ 4 kí tự"
            flag.price = true;
        } else {
            err_pro_price.innerHTML = "";
            flag.price = false;
        }
        // 
        if (pro_desc == '' || pro_desc == null) {
            err_pro_desc.innerHTML = "Không được để trống"
            flag.desc = true;
        } else if (!reg_pro_desc.test(pro_desc)) {
            err_pro_desc.innerHTML = "Mô tả có độ dài tối thiểu 30 kí tự tối đa 1000"
            flag.desc = true;
        } else {
            err_pro_desc.innerHTML = "";
            flag.desc = false;
        }
        // 
        if (pro_img == '' || pro_img == null) {
            err_pro_img.innerHTML = "Hãy chọn ảnh"
            flag.img = true;
        } else {
            err_pro_img.innerHTML = "";
            flag.img = false;
        }

        // 
        if (flag.name == false && flag.price == false && flag.desc == false && flag.img == false) {
            return true;
        } else {
            return false;
        }

    }
</script>