<h1 class="mt-4 text-uppercase">user</h1>
<a href="/ad_add_user">
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
                    <th>Full name</th>
                    <th>Account name</th>
                    <th>Pass</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Full name</th>
                    <th>Account name</th>
                    <th>Pass</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>

                <?php foreach ($all_user as $value_all_user) {  ?>
                    <tr>
                        <td><?= $value_all_user->us_full_name ?></td>
                        <td><?= $value_all_user->us_acc_name ?></td>
                        <td><?= $value_all_user->us_pass ?></td>
                        <td><?= $value_all_user->us_address ?></td>
                        <td><?= $value_all_user->us_email ?></td>
                        <td><?= $value_all_user->us_phone ?></td>
                        <td><?php if ($value_all_user->us_role == 0) {
                                echo 'Admin';
                            } else {
                                echo 'Khách hàng';
                            } ?>
                        </td>

                        <td>
                            <a href="/ad_update_user?id=<?= $value_all_user->us_id ?>">
                                <button class="btn btn-success mb-1" style="width:100px">Update</button>
                            </a>
                            <a href="/ad_delete_user?id=<?= $value_all_user->us_id ?>" onclick="return confirm('Do you want to delete it ?')">

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