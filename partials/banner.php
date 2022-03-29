<?php
$obj_adminBack = new adminBack();
$msg = $obj_adminBack->view_banner();
?>

<!-- Banner Section Starts Here -->
<div class="banner-slider">
    <?php while ($data = mysqli_fetch_assoc($msg)) { ?>
        <div class="single-slide">
            <div class="banner-section bg_img" style="background: url(assets/images/banner/<?php echo $data['banner_img'] ?>);">
            </div>
        </div>
    <?php } ?>
</div>
<!-- Banner Section Ends Here -->