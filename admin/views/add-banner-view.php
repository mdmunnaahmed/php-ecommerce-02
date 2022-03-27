<?php
$obj_adminBack = new adminBack();
if (isset($_POST['banner_btn'])) {
    $msg = $obj_adminBack->addBanner($_POST);
}

?>

<h2 class="mb-4">Add Product</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>

<form action="" method="POST" class="w-100" enctype="multipart/form-data">
    <div class="form-group">
        <label for="banner_img" class="form-label">Product Image</label>
        <input name="banner_img" id="banner_img" type="file" class="form-control" placeholder="Enter Banner Image" required>
    </div>
    <button name="banner_btn" type="submit" class="btn btn-primary w-100 mb-2">Add Banner Image</button>
</form>