<h1 class="mt-4 text-uppercase">colors</h1>
<a href="/ad_add_color">
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
        List colors
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

                <?php foreach ($all_color as $all_color) {  ?>
                    <tr>
                        <td><?= $all_color->cl_name ?></td>

                        <td>
                            <a href="/ad_update_color?id=<?= $all_color->cl_id ?>">
                                <button class="btn btn-success mb-1" style="width:100px">Update</button>
                            </a>
                            <a href="/ad_delete_color?id=<?= $all_color->cl_id ?>" onclick="return confirm('Do you want to delete it ?')">
                                <button class="btn btn-danger" style="width:100px">Delete</button>
                            </a>
                        </td>
                    </tr>

                <?php }  ?>

            </tbody>
        </table>
    </div>
</div>