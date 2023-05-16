<h1 class="mt-4 text-uppercase">sizes</h1>
<a href="/ad_add_size">
    <button type="button" class="btn btn-outline-secondary mb-4 mt-3">Add</button>
</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        List sizes
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

                <?php foreach ($all_size as $value_size) {  ?>
                    <tr>
                        <td><?= $value_size->sz_name ?></td>

                        <td>
                            <a href="/ad_update_size?id=<?= $value_size->sz_id ?>">
                                <button class="btn btn-success mb-1" style="width:100px">Update</button>
                            </a>
                            <a href="/ad_delete_size?id=<?= $value_size->sz_id ?>" onclick="return confirm('Do you want to delete it ?')">
                                <button class="btn btn-danger" style="width:100px">Delete</button>
                            </a>
                        </td>
                    </tr>

                <?php }  ?>

            </tbody>
        </table>
    </div>
</div>