<h1 class="mt-4 text-uppercase">update size</h1>

<a href="/ad_list_size">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">List size</button>
</a>
<div class="card mb-4">
    <form action="/ad_save_update_size" method="post" class="mx-5 mt-3" enctype="multipart/form-data" onsubmit="return validate()">

        <input type="hidden" value="<?= $size->sz_id ?>" name="sz_id">
        <!-- text -->
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="sz_name" id="pro_name" value="<?= $size->sz_name ?>">
            <span class="form-text" id="err_pro_name" style="color: red;"> </span>
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
        let reg_pro_name = /^[\p{L}\s0-9_]{1,50}$/u;

        const flag = {
            name: false
        }
        // 
        if (pro_name == '' || pro_name == null) {
            err_pro_name.innerHTML = "Không được để trống"
            flag.name = true;
        } else if (!reg_pro_name.test(pro_name)) {
            err_pro_name.innerHTML = "Tên loại có thể chứa kí tự a-z A-Z 0-9, độ dài tối thiểu 1 kí tự, tối đa 50"
            flag.name = true;
        } else {
            err_pro_name.innerHTML = "";
            flag.name = false;
        }
        // 
        if (flag.name == false) {
            return true;
        } else {
            return false;
        }

    }
</script>