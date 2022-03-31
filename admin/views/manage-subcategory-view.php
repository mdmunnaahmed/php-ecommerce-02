<?php
$obj_adminBack = new adminBack();
$ctg_result = $obj_adminBack->displayCategory();

if (isset($_GET['status'])) {
    $get_id = $_GET['id'];
    if ($_GET['status'] == 'publish') {
        $msg = $obj_adminBack->publishCategory($get_id);
    } else if ($_GET['status'] == 'unpublish') {
        $msg = $obj_adminBack->unPublishCategory($get_id);
    } else if ($_GET['status'] == 'delete') {
        $msg = $obj_adminBack->deleteCategory($get_id);
    } else if ($_GET['status'] == 'edit') {
        $msg = $obj_adminBack->editToShow($get_id);
    }
}
?>


<h2 class="mb-5">Manage Category</h2>
<p class="alert">
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
</p>

<table class="table bg-white">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Category Icon</th>
            <th>Category Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($ctg = mysqli_fetch_assoc($ctg_result)) {
        ?>

            <tr>
                <td><?php echo $ctg['ctg_id'] ?></td>
                <td><?php echo $ctg['ctg_name'] ?></td>
                <td><?php echo $ctg['ctg_icon'] ?></td>
                <td>
                    <p class="ctg_des"><?php echo $ctg['ctg_des'] ?></p>
                </td>
                <td>
                    <?php
                    if ($ctg['ctg_status'] == 0) {
                        // echo "Unpublished";
                    ?>
                        <a href="?status=publish&&id=<?php echo $ctg['ctg_id'] ?>" class="btn btn-success btn-sm ml-3">Make Publish</a>
                    <?php
                    } else if ($ctg['ctg_status'] == 1) {
                        // echo "Published";
                    ?>
                        <a href="?status=unpublish&&id=<?php echo $ctg['ctg_id'] ?>" class="btn btn-danger btn-sm ml-3">Make Unpublish</a>
                    <?php
                    }
                    ?>
                </td>

                <td>
                    <a class="btn-sm btn btn-info" href="edit-category.php?status=edit&&id=<?php echo $ctg['ctg_id'] ?>">Edit</a>
                    <a class="btn-sm btn btn-danger" href="?status=delete&&id=<?php echo $ctg['ctg_id'] ?>">Delete</a>
                </td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>