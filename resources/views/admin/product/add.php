<h1 class="mt-4">ADD PRODUCT</h1>

<a href="/ad_list_pro">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">List products</button>
</a>
<div class="card mb-4">
    <form action="/ad_save_add_pro" method="post" class="mx-5 mt-3" enctype="multipart/form-data">

        <!-- text -->
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="pro_name" required>
            <span class="form-text"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="pro_price" required>
            <span class="form-text"> </span>
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px;" name="pro_desc"></textarea>
                <label for="floatingTextarea">Description</label>
                <span class="form-text"> </span>
            </div>
        </div>

        <select class="form-select mb-3" aria-label="Default select example" name="ct_id">
            <?php foreach ($all_categories as $value_categories) : ?>
                <option hidden>Select a category</option>
                <option value="<?= $value_categories->ct_id ?>">
                    <?= $value_categories->ct_name ?>
                </option>
            <?php endforeach ?>
        </select>

        <!-- img -->
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="pro_img" multiple required>
            <span class="form-text"> </span>
        </div>

        <input type="submit" class="btn btn-primary mb-4">
        <!-- <button type="submit" class="btn btn-primary mb-4">Submit</button> -->

    </form>
</div>