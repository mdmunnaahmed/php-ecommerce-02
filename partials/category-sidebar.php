<?php
$obj_adminBack = new adminBack();
$msg = $obj_adminBack->publishedDisplayCategory();

?>

<ul class="category-sidebar">
    <div class="logo-wrapper d-flex justify-content-between align-items-center mb-4 d-lg-none">
        <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
        </div>
        <button class="btn-close"></button>
    </div>

    <li class="d-none"><a href="#0"><i class="las la-tshirt"></i> Mens Dress</a>
        <ul class="sub-category">
            <li><a href="#0">T-Shirt</a>
                <ul class="sub-category">
                    <li><a href="#0">T-Shirt</a></li>
                    <li><a href="#0">Shirt</a></li>
                    <li><a href="#0">Long Pant</a></li>
                    <li><a href="#0">Short Pant</a></li>
                </ul>
            </li>
            <li><a href="#0">Shirt</a></li>
            <li><a href="#0">Long Pant</a></li>
            <li><a href="#0">Short Pant</a></li>
        </ul>
    </li>

    <?php
    while ($ctg_show = mysqli_fetch_assoc($msg)) { ?>

        <li><a href="#0"><?php echo $ctg_show['ctg_icon'] ?> <?php echo $ctg_show['ctg_name'] ?></a></li>

    <?php } ?>
</ul>