<?php

$obj_adminBack = new adminBack();
if (isset($_POST['brand_btn'])) {
    $msg = $obj_adminBack->add_brands($_POST);
}

?>


<h2 class="mb-5">Add Brand</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>
<form action="#0" name="ctg-form" method="POST" class="ctg-form w-100">
    <div class="form-group">
        <label for="brand_name" class="form-label">Brand Name</label>
        <input name="brand_name" id="brand_name" type="text" class="form-control" placeholder="Enter Brand Name" required>
    </div>
    <div class="form-group">
        <label for="brand_icon" class="form-label">Brand Icon <span class="text-info">['line Awesome' / 'Font Awesome' icon]</span></label>
        <input name="brand_icon" id="brand_icon" type="text" class="form-control" placeholder="Enter Icon" required>
    </div>
    <div class="form-group">
        <label for="brand_des" class="form-label">Brand Description</label>
        <textarea name="brand_des" id="brand_des" class="form-control" placeholder="Enter Brand Description" required></textarea>
    </div>
    <button name="brand_btn" type="submit" class="btn btn-primary w-100 mb-2">Add Brand</button>

</form>