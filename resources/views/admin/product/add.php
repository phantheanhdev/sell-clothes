<h1 class="mt-4">ADD PRODUCTS</h1>

<a href="/ad-list-product">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">List</button>
</a>
<div class="card mb-4">
    <form action="/ad-add-product" method="post" class="mx-5 mt-3" enctype="multipart/form-data">

        <!-- text -->
        <div class="mb-3">
            <label class="form-label">Name product</label>
            <input type="text" class="form-control" name="pro_name" required>
            <span class="form-text"> </span>
        </div>

        <select class="form-select mb-3" aria-label="Default select example" name="categories_id">

            <?php foreach ($categories as $value_categories) : ?>
                <option hidden>Category</option>
                <option value="<?= $value_categories->categories_id ?>">
                    <?= $value_categories->categories_name ?>
                </option>
            <?php endforeach ?>

        </select>

        <select class="form-select mb-3" aria-label="Default select example" name="sizes_id">
            <?php foreach ($sizes as $value_size) : ?>
                <option hidden>Size</option>
                <option value="<?= $value_size->sizes_id ?>">
                    <?= $value_size->sizes_name ?>
                </option>
            <?php endforeach ?>
        </select>


        <!-- img -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pro_img" multiple required>
            <span id="emailHelp" class="form-text"> </span>
        </div>

        <input type="submit" class="btn btn-primary mb-4">
        <!-- <button type="submit" class="btn btn-primary mb-4">Submit</button> -->

    </form>
</div>