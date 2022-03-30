<?php
$obj_adminBack = new adminBack();
$product_result = $obj_adminBack->displayFeatureProduct();

?>

<?php if (mysqli_num_rows($product_result) > 0) { ?>
    <h4 class="title py-2 section-bg px-3 mb-3">Featured Products</h4>
<?php } ?>

<div class="row g-3 mb-4">

    <?php while ($product_details = mysqli_fetch_assoc($product_result)) { ?>

        <div class="col-xxl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="product-item">
                <div class="product-item__thumb">
                    <ul class="product-type">
                        <li><span class="badge badge--md badge--warning radius-0"><i class="las la-bolt"></i> <?php if ($product_details['product_type'] == 1) {
                                                                                                                    echo "FEATURED";
                                                                                                                } ?></span></li>
                    </ul>
                    <img src="assets/images/products/<?php echo $product_details['product_img'] ?>" alt="products">
                    <a href="#0" class="add-to-cart btn btn--primary btn--sm">Add to Cart</a>
                    <ul class="product-buttons">
                        <li><button data-bs-toggle="modal" data-bs-target="#productModal" class="product-button btn"><i class="las la-expand"></i></button>
                        </li>
                        <li><button class="product-button btn"><i class="lar la-heart"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="product-item__content">
                    <a href="#0" class="tags text-uppercase"><?php echo $product_details['ctg_name'] ?></a>
                    <h6 class="title"><a href="product-details.php?status=singleProduct&id=<?php echo $product_details['product_id'] ?>"><?php echo $product_details['product_name'] ?></a></h6>
                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                        <span class="discount-price">$<?php echo $product_details['product_price'] ?></span>
                        <del class="main-price">$150.50</del>
                    </div>
                    <div class="rating-wrapper d-flex align-items-center">
                        <ul class="rating">
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                        </ul>
                        <span class="rating-count ms-2">(25)</span>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

</div>