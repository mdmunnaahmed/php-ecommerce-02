<?php
$obj_adminBack = new adminBack();
$ctg_info = $obj_adminBack->publishedDisplayCategory();
if (isset($_POST['product_btn'])) {
    $msg = $obj_adminBack->addProduct($_POST);
}

?>

<h2 class="mb-4">Add Product</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>

<form action="" method="POST" class="w-100" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_name" class="form-label">Product Name</label>
                <input name="product_name" id="product_name" type="text" class="form-control" placeholder="Enter Product Name" required>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_sku" class="form-label">Product SKU</label>
                <input name="product_sku" id="product_sku" type="text" class="form-control" placeholder="Enter SKU" required>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_ctg" class="form-label">Product Category</label>
                <select name="product_ctg" id="product_ctg" class="form-select form-control">
                    <option>Please Select a Category</option>
                    <?php while ($ctg = mysqli_fetch_assoc($ctg_info)) { ?>
                        <option value="<?php echo $ctg['ctg_id'] ?>"><?php echo $ctg['ctg_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_sub_cat" class="form-label">Product Subcategory</label>
                <select name="product_sub_cat" id="product_sub_cat" class="form-control">
                    <option value="1">Sub Category</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_price" class="form-label">Product Price</label>
                <input name="product_price" id="product_price" type="number" class="form-control" placeholder="Enter Product Price  " required>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="d_product_price" class="form-label">Discount Product Price</label>
                <input name="d_product_price" id="d_product_price" type="number" class="form-control" placeholder="Enter Product Price  " required>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_qty" class="form-label">Product Quantity</label>
                <input name="product_qty" id="product_qty" type="number" class="form-control" placeholder="Enter Product Quantity" required>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_des" class="form-label">Product Description</label>
                <textarea rows="3" name="product_des" id="product_des" class="form-control" placeholder="Enter Product Description" required></textarea>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_sum" class="form-label">Product Summery</label>
                <textarea rows="3" name="product_sum" id="product_sum" class="form-control" placeholder="Enter Product Summery" required></textarea>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_img" class="form-label">Product Image</label>
                <input name="product_img" id="product_img" type="file" class="form-control" placeholder="Enter Product Image" required>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_type" class="form-label">Product Type / <span class="text-primary">Add Product As</span></label>
                <select name="product_type" id="product_type" class="form-control">
                    <option value="1">Featured</option>
                    <option value="2">Hot Deals</option>
                    <option value="3">Tranding</option>
                    <option value="4">Latest</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_status" class="form-label">Product Status</label>
                <select name="product_status" id="product_status" class="form-select form-control">
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_size" class="form-label">Product Size</label>
                <select name="product_size" id="product_size" class="form-select form-control">
                    <option value="1">XXL</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="product_color" class="form-label">Product Quantity / <span class="text-primary">Product Color</span></label>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <select name="product_color" id="product_color" class="form-select form-control text-primary">
                        <option value="1">Red</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <button name="product_btn" type="submit" class="btn btn-primary w-100 mb-2">Add Product</button>
</form>