<?php

$obj_adminBack = new adminBack();
$display_category_query = $obj_adminBack->publishedDisplayCategory();
if (isset($_POST['sub_ctg_btn'])) {
    $msg = $obj_adminBack->add_sub_category($_POST);
}

?>


<h2 class="mb-5">Add Sub Category</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>
<form action="#0" name="ctg-form" method="POST" class="ctg-form w-100">
    <div class="form-group">
        <label for="parent_sub_ctg" class="form-label">Category Name</label>

        <select name="parent_sub_ctg" id="parent_sub_ctg" class="form-select form-control">
            <?php while ($row = mysqli_fetch_assoc($display_category_query)) { ?>
                <?php if ($row  >  0 && $row['ctg_status'] == 1) { ?>

                    <option value="<?php echo $row['ctg_id'] ?>"><?php echo $row['ctg_name'] ?></option>

                <?php } else {  ?>
                    <option>No Category Found</option>
            <?php
                }
            } ?>


        </select>
    </div>
    <div class="form-group">
        <label for="sub_ctg_name" class="form-label">Sub Category Name</label>
        <input name="sub_ctg_name" id="ctg_name" type="text" class="form-control" placeholder="Enter Sub Category Name" required>
    </div>
    <div class="form-group">
        <label for="sub_ctg_des" class="form-label">Category Description</label>
        <textarea name="sub_ctg_des" id="sub_ctg_des" type="text" class="form-control" placeholder="Enter Sub Category Description" required></textarea>
    </div>
    <button name="sub_ctg_btn" type="submit" class="btn btn-primary w-100 mb-2">Add Sub Category</button>

</form>