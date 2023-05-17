<h1 class="mt-4">PRODUCTS</h1>
<a href="/ad_add_pro">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">Add</button>
</a>
<h5 style="color: red;"><?php
                            if (isset($_COOKIE['success']) && !empty($_COOKIE['success'])) {
                                echo $_COOKIE['success'];
                            }
                            ?></h5>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        List products
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price (VNĐ)</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Price (VNĐ)</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>

                <?php foreach ($all_pro as $value_pro) {  ?>
                    <tr>
                        <td><?= $value_pro->pro_name ?></td>
                        <td><?= $value_pro->pro_price ?></td>
                        <td><?= $value_pro->pro_desc ?></td>
                        <td>
                            <img src="images/products/<?= $value_pro->pro_img ?>" alt="" width="150px" height="150px">
                        </td>

                        <?php foreach ($all_categories as $value_categories) { ?>

                            <?php
                            if ($value_pro->ct_id == $value_categories->ct_id) { ?>
                                <td>
                                    <?= $value_categories->ct_name; ?>
                                </td>
                        <?php
                            }
                        } ?>

                        <td>
                            <a href="/ad_update_pro?id=<?= $value_pro->pro_id ?>">
                                <button class="btn btn-success mb-1" style="width:100px">Update</button>
                            </a>
                            <a href="/ad_delete_pro?id=<?= $value_pro->pro_id ?>" onclick="return confirm('Do you want to delete it ?')">

                                <button class="btn btn-danger" style="width:100px">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php }
                ?>

            </tbody>
        </table>
    </div>
</div>