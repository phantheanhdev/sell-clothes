<h1 class="mt-4">PRODUCTS</h1>
<a href="/ad_add_pro">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">Add</button>
</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        list products
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
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
                            <img src="images/products/<?= $value_pro->pro_img ?>" alt="" width="100px" height="100px">
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
                            <a href="/ad-update-product?id=<?= $value_pro->pro_id ?>" class="px-2">
                                <button>edit</button>
                            </a>
                            <a href="/ad-delete-product?id=<?= $value_pro->pro_id ?>" onclick="return confirm('Do you want to delete it ?')">

                                <button>delete</button>
                            </a>
                        </td>
                    </tr>
                <?php }
                ?>

            </tbody>
        </table>
    </div>
</div>