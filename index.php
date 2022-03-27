<?php include "admin/class/adminBack.php"; ?>
<?php include "partials/template-top.php" ?>

<body>
    <div class="overlay"></div>

    <?php include "partials/header.php" ?>

    <!-- Main Wrapper Starts -->
    <div class="main-wrapper">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xxl-2 col-lg-3 pt-3 order-3 order-lg-1">

                    <?php include "partials/category-sidebar.php" ?>

                    <div class="promo-wrapper d-none d-lg-block">
                        <div class="card custom--card promo-card">
                            <div class="card-body">
                                <a href="#0">
                                    <div class="promo-thumb"><img src="assets/images/promo/promo1.jpg" alt="promo">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card custom--card promo-card">
                            <div class="card-body">
                                <a href="#0">
                                    <div class="promo-thumb"><img src="assets/images/promo/promo6.gif" alt="promo">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feature-wrapper d-flex flex-wrap justify-content-between">
                        <h5 class="title w-100">Best Sellers</h6>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item6.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Women - happy fashion dress</a>
                                    </h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item10.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Men - Stylish watch collection</a>
                                    </h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item7.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Women Handy Comfort bag</a></h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item9.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Men - Stylish watch collection</a>
                                    </h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item5.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Women Handy Comfort bag</a></h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item6.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Women - happy fashion dress</a>
                                    </h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item feature-product d-flex">
                                <div class="product-item__thumb">
                                    <img src="assets/images/products/item10.png" alt="products">
                                </div>
                                <div class="product-item__content">
                                    <h6 class="title"><a href="product-details.html">Men - Stylish watch collection</a>
                                    </h6>
                                    <div class="price-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                        <span class="discount-price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="promo-wrapper d-none d-lg-block">
                        <div class="card custom--card promo-card">
                            <div class="card-body">
                                <a href="#0">
                                    <div class="promo-thumb"><img src="assets/images/promo/promo4.png" alt="promo">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card custom--card promo-card">
                            <div class="card-body">
                                <a href="#0">
                                    <div class="promo-thumb"><img src="assets/images/promo/promo7.gif" alt="promo">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-lg-9 order-1 order-lg-2 pt-3">

                    <?php include "partials/banner.php" ?>


                    <!-- Product Section Starts Here -->
                    <div class="product-section">

                        <?php include "partials/featured-products.php" ?>

                        <?php include "partials/latest-products.php" ?>

                        <?php include "partials/tranding-products.php" ?>

                    </div>
                    <!-- Product Section Ends Here -->
                </div>

                <div class="col-xxl-2 pt-3 order-2 order-lg-3">

                    <?php include "partials/hot-deals.php" ?>

                    <div class="promo-wrapper d-none d-xxl-block">
                        <div class="card custom--card promo-card">
                            <div class="card-body">
                                <a href="#0">
                                    <div class="promo-thumb"><img src="assets/images/promo/promo6.gif" alt="promo">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card custom--card promo-card">
                            <div class="card-body">
                                <a href="#0">
                                    <div class="promo-thumb"><img src="assets/images/promo/promo8.gif" alt="promo">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Wrapper Ends -->



    <?php include "partials/product-modal.php" ?>

    <?php include "partials/feature.php" ?>

    <?php include "partials/footer.php" ?>

    <?php include "partials/template-bottom.php" ?>