<?php
$obj_adminBack = new adminBack();
if (isset($_GET['prostatus'])) {
    $get_id = $_GET['id'];
    if ($_GET['prostatus'] == 'edit') {
        $result = $obj_adminBack->getEditProduct($get_id);
    }
}

$ctg_show = $obj_adminBack->publishedDisplayCategory();

if (isset($_POST['u_product_btn'])) {
    $msg = $obj_adminBack->updateSingleProduct($_POST);
}
?>

<form action="" method="POST" class="ctg-form w-100" enctype="multipart/form-data">
    <input type="hidden" name="product_id" value="<?php echo $result['product_id'] ?>">
    <div class="form-group">
        <label for="u_product_name" class="form-label">Product Name</label>
        <input name="u_product_name" id="u_product_name" type="text" class="form-control" value="<?php echo $result['product_name'] ?>" placeholder="Enter Product Name" required>
    </div>
    <div class="form-group">
        <label for="u_product_price" class="form-label">Product Price</label>
        <input name="u_product_price" id="u_product_price" type="number" class="form-control" value="<?php echo $result['product_price'] ?>" placeholder="Enter Product Name" required>
    </div>
    <div class="form-group">
        <label for="u_product_des" class="form-label">Product Description</label>
        <textarea rows="3" name="u_product_des" id="u_product_des" class="form-control" placeholder="Enter Product Description" required><?php echo $result['product_des'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="u_product_img" class="form-label">Product Image</label>
        <input name="u_product_img" id="u_product_img" type="file" class="form-control" placeholder="Enter Product Image" required value="<?php echo $result['product_img'] ?>">
    </div>
    <div class="form-group">
        <label for="u_product_ctg" class="form-label">Product Category</label>
        <select name="u_product_ctg" id="u_product_ctg" class="form-select form-control" required>
            <?php while ($ctg = mysqli_fetch_assoc($ctg_show)) { ?>
                <option value="<?php echo $ctg['ctg_id'] ?>"><?php echo $ctg['ctg_name'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="u_product_status" class="form-label">Product Status</label>
        <select name="u_product_status" id="u_product_status" class="form-select form-control">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
    <button name="u_product_btn" type="submit" class="btn btn-primary w-100 mb-2">Update Product</button>
    <?php
    if (isset($msg)) {
        echo $msg;
    }
    ?>
</form>