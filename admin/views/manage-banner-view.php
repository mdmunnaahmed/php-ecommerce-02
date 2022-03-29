<?php
$obj_adminBack = new adminBack();
$msg = $obj_adminBack->view_banner();

if (isset($_GET['banner'])) {
    $banner_id = $_GET['id'];
    if ($_GET['banner'] == 'delete') {
        // $msg = $obj_adminBack->deleteProduct($pro_id);
    }
}
?>


<h2 class="">Manage Banner Image</h2>
<table class="table bg-white">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($banner_info = mysqli_fetch_assoc($msg)) {
        ?>

            <tr>
                <td><?php echo $banner_info['banner_id'] ?></td>
                <td><img src="./../assets/images/banner/<?php echo $banner_info['banner_img'] ?>" alt=""><?php echo $banner_info['banner_img'] ?></td>
                <td><?php
                    if ($banner_info['banner_status'] == 1) {
                        echo "Published";
                    } else {
                        echo "Unpublished";
                    }
                    ?></td>

                <td>
                    <a class="btn-sm btn btn-info" href="update-banner.php?banner=update&&id=<?php echo $banner_info['banner_id'] ?>">Edit</a>
                    <a class="btn-sm btn btn-danger" href="?banner=delete&&id=<?php echo $banner_info['banner_id'] ?>">Delete</a>
                </td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>