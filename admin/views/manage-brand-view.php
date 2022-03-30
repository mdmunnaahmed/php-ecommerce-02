<?php
$obj_adminBack = new adminBack();
$brand_query = $obj_adminBack->displayBrands();

if (isset($_GET['status'])) {
    $brand_id = $_GET['id'];
    if ($_GET['status'] == 'delete') {
        $del = $obj_adminBack->deleteBrand($brand_id);
    }
}
?>


<h2 class="">Manage Brands</h2>
<table class="table bg-white">
    <thead>
        <tr>
            <th>ID</th>
            <th>Brand Name</th>
            <th>Brand Icon</th>
            <th>Brand Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($brand_info = mysqli_fetch_assoc($brand_query)) {
        ?>

            <tr>
                <td><?php echo $brand_info['brand_id'] ?></td>
                <td><?php echo $brand_info['brand_name'] ?></td>
                <td><?php echo $brand_info['brand_icon'] ?></td>
                <td>
                    <p class="ctg_des"><?php echo $brand_info['brand_des'] ?></p>
                </td>

                <td>
                    <a class="btn-sm btn btn-info" href="update-brand.php?status=update&&id=<?php echo $brand_info['brand_id'] ?>">Edit</a>
                    <a class="btn-sm btn btn-danger" href="?status=delete&&id=<?php echo $brand_info['brand_id'] ?>">Delete</a>
                </td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>