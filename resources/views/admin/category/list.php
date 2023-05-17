<h1 class="mt-4">CATEGORIES</h1>
<a href="/ad_add_categories">
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
        List categories
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>

                <?php foreach ($all_category as $value_categories) {  ?>
                    <tr>
                        <td><?= $value_categories->ct_name ?></td>

                        <td>
                            <a href="/ad_update_categories?id=<?= $value_categories->ct_id ?>">
                                <button class="btn btn-success mb-1" style="width:100px">Update</button>
                            </a>
                            <a href="/ad_detele_categories?id=<?= $value_categories->ct_id ?>" onclick="return confirm('Do you want to delete it ?')">
                                <button class="btn btn-danger" style="width:100px">Delete</button>
                            </a>
                        </td>
                    </tr>

                <?php }  ?>

            </tbody>
        </table>
    </div>
</div>