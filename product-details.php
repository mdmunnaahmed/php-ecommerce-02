<?php include "partials/template-top.php" ?>

<body>
    <div class="overlay"></div>

    <?php include "partials/header.php" ?>

    <!-- inner hero section start -->
    <div class="inner-hero section-bg overflow-hidden">
        <div class="container">
            <div class="inner-hero-wrapper d-flex flex-wrap align-items-center">
                <h3 class="title me-5">Product Details</h3>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.php">Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- inner hero section end -->

    <?php
    function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }
    ?>

    <!-- Product Details Starts Here -->
    <div class="product-section mt-5">
        <div class="container">
            <div class="product-wrapper border-0 p-0">
                <div class="product-wrapper-header">
                    <h3 class="product-title">Corsair - HU-05 Wireless Headset Blue</h3>
                    <div class="rating-wrapper d-flex flex-wrap align-items-center">
                        <ul class="rating">
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                        </ul>
                        <span class="rating-count ms-2  me-3 pe-3 border-end">25 REVIEW</span>
                        <span class="sku">SKU: ABCDE99</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb-wrapper">
                            <div class="thumb-main-slider"></div>
                            <div class="thumb-slider-one">
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/product-details/item8.png" alt="product-details"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/product-details/item2.png" alt="product-details"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/product-details/item3.png" alt="product-details"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/product-details/item4.png" alt="product-details"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/product-details/item6.png" alt="product-details"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/product-details/item7.png" alt="product-details"></div>
                                </div>
                            </div>
                            <div class="thumb-slider-two">
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/products/item8.png" alt="product"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/products/item2.png" alt="product"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/products/item3.png" alt="product"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/products/item4.png" alt="product"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/products/item5.png" alt="product"></div>
                                </div>
                                <div class="single-slide">
                                    <div class="thumb"><img src="assets/images/products/item6.png" alt="product"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-wrapper-content">
                            <div class="price-wrapper d-flex flex-wrap align-items-center">
                                <span class="discount-price">$105.00</span>
                                <del class="main-price ms-3">$150.50</del>
                            </div>
                            <span class="badge badge--md badge--success badge--transparent">IN STOCK</span>
                            <p class="product-info">A product is the item offered for sale. A product can be a service or an item. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market,.</p>
                            <div class="product-color-wrapper">
                                <h5 class="title">Color :</h5>
                                <form class="product-color">
                                    <div class="form-group form-check">
                                        <input name="product-color" type="radio" class="form-check-input d-none" id="c1">
                                        <label class="product-color-single form-check-label bg--danger" for="c1"></label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-color" type="radio" class="form-check-input d-none" id="c2">
                                        <label class="product-color-single form-check-label bg--success" for="c2"></label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-color" type="radio" class="form-check-input d-none" id="c3">
                                        <label class="product-color-single form-check-label bg--dark" for="c3"></label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-color" type="radio" class="form-check-input d-none" id="c4">
                                        <label class="product-color-single form-check-label bg--warning" for="c4"></label>
                                    </div>
                                </form>
                            </div>
                            <div class="product-size-wrapper">
                                <h5 class="title">Size :</h5>
                                <form class="product-size">
                                    <div class="form-group form-check">
                                        <input name="product-size" type="radio" class="form-check-input d-none" id="xs">
                                        <label class="product-size-single form-check-label" for="xs">XS</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-size" type="radio" class="form-check-input d-none" id="s">
                                        <label class="product-size-single form-check-label" for="s">S</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-size" type="radio" class="form-check-input d-none" id="m">
                                        <label class="product-size-single form-check-label" for="m">M</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-size" type="radio" class="form-check-input d-none" id="l">
                                        <label class="product-size-single form-check-label" for="l">L</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input name="product-size" type="radio" class="form-check-input d-none" id="xl">
                                        <label class="product-size-single form-check-label" for="xl">XL</label>
                                    </div>
                                </form>
                            </div>
                            <div class="add-cart-wrapper">
                                <div class="cart-plus-minus me-3 me-md-4 mb-3">
                                    <div class="cart-decrease qtybutton dec"><i class="las la-minus"></i></div>
                                    <input class="cart-count" type="text" value="01" readonly>
                                    <div class="cart-increase qtybutton inc active"><i class="las la-plus"></i></div>
                                </div>
                                <a href="#0" class="cmn--btn btn--round btn--md mb-3">Add to Cart</a>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="left-side">
                                    <ul class="product-info-list">
                                        <li><i class="las la-shield-alt"></i> 1 Year AL Jazeera Brand Warranty</li>
                                        <li><i class="las la-undo-alt"></i> 30 Day Return Policy</li>
                                        <li><i class="las la-money-bill-wave-alt"></i> Cash on Delivery available</li>
                                    </ul>
                                    <ul class="info border-top pt-3">
                                        <li>
                                            <h6 class="info-title">Category :</h6>
                                            <a class="value" href="#0">Dress</a>
                                        </li>
                                        <li>
                                            <h6 class="info-title">Tags :</h6>
                                            <p class="value"><a href="#0">Dress</a>, <a href="#0">Bag</a>, <a href="#0">Women Fashion</a></p>
                                        </li>
                                        <li>
                                            <h6 class="info-title">Share :</h6>
                                            <ul class="social-links">
                                                <li><a href="#0"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#0"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#0"><i class="lab la-youtube"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="delivery-info section-bg">
                                    <div class="delivery-info-item">
                                        <div class="icon"><i class="las la-truck"></i></div>
                                        <div class="content">
                                            <p>Free Shipping apply to all orders over $100</p>
                                        </div>
                                    </div>
                                    <div class="delivery-info-item">
                                        <div class="icon"><i class="las la-thumbs-up"></i></div>
                                        <div class="content">
                                            <p>Guranteed 100% Original Product from E-shop.</p>
                                        </div>
                                    </div>
                                    <div class="delivery-info-item">
                                        <div class="icon"><i class="lab la-product-hunt"></i></div>
                                        <div class="content">
                                            <p>1 Day Returns if you have any complain about the products.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details card custom--card card--lg">
                    <div class="card-header card--header bg--none">
                        <ul class="nav-tabs nav border-0 tab-menu">
                            <li><a data-bs-toggle="tab" href="#description" class="active">DRESCRIPTIONS</a></li>
                            <li><a data-bs-toggle="tab" href="#additional-info">ADDITIOINAL INFO</a></li>
                            <li><a data-bs-toggle="tab" href="#delivery-returns">DELIVERY & RETURNS</a></li>
                            <li><a data-bs-toggle="tab" href="#reviews">REVIEWS</a></li>
                        </ul>
                    </div>
                    <div class="card-body card--body">
                        <div class="tab-content">
                            <div class="tab-pane show fade active" id="description">
                                <h5 class="title mb-2">Product Information</h5>
                                <p>A product is the item offered for sale. A product can be a service or an item. It can be physical or in virtual or cyber form. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted. Each product has a useful life after which it needs replacement, and a life cycle after which it has to be re-invented. In FMCG parlance, a brand can be revamped, re-launched or extended to make it more relevant to the segment and times, often keeping the product almost the same.</p>
                                <p>It can be physical or in virtual or cyber form. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted. Each product has a useful life after which it needs replacement, and a life cycle after which it has to be re-invented. In FMCG parlance, a brand can be revamped, re-launched or extended to make it more relevant to the segment and times, often keeping the product almost the same.</p>
                                <p>A product can be a service or an item. It can be physical or in virtual or cyber form. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted. Each product has a useful life after which it needs replacement, and a life cycle after which it has to be re-invented. In FMCG parlance, a brand can be revamped, re-launched or extended to make it more relevant to the segment and times, often keeping the product almost the same.</p>
                                <h5 class="title mb-2 mt-3">Brief Info</h5>
                                <ul class="info-list">
                                    <li>Very good build quality.</li>
                                    <li>Gold tone metal hoop handles..</li>
                                    <li>Snake print trim interior.</li>
                                    <li>Adjustable cross body strap.</li>
                                    <li>Faux suede fabric.</li>
                                </ul>
                            </div>
                            <div class="tab-pane show fade" id="additional-info">
                                <table class="table additional-info-table">
                                    <tbody>
                                        <tr>
                                            <td>Brands</td>
                                            <td>Corsair</td>
                                        </tr>
                                        <tr>
                                            <td>Model</td>
                                            <td>Corsair GH-50 Pro</td>
                                        </tr>
                                        <tr>
                                            <td>Whight</td>
                                            <td>150 Kilograms</td>
                                        </tr>
                                        <tr>
                                            <td>Dimensions</td>
                                            <td>150 * 540 * 50 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Water Resistant</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Material</td>
                                            <td>Artificial Leather</td>
                                        </tr>
                                        <tr>
                                            <td>color Availble</td>
                                            <td>Red, Greeen, Purple, Yellow</td>
                                        </tr>
                                        <tr>
                                            <td>Guarantee</td>
                                            <td>5 Years</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane show fade" id="delivery-returns">
                                <div class="card custom--card">
                                    <div class="card-body card--body">
                                        <h5 class="title mb-2">Delivery Info</h5>
                                        <p>Product delivery doesn't only signify the arrival of ordered goods, but encompasses so much more. ... This includes everything from delivery presentation and marketing, right down to the time and method of delivery. Your customers will place great importance in all of these. Finding great product-market fit is essential for increasing value. Changing the way you govern and fund ideas can be a source of creating great products. <a href="privacy-policy.html" class="text--base">View our Delivery Policy</a> </p>
                                    </div>
                                </div>
                                <div class="card custom--card mt-3">
                                    <div class="card-body card--body">
                                        <h5 class="title mb-2">Return Policy</h5>
                                        <p>Product delivery doesn't only signify the arrival of ordered goods, but encompasses so much more. ... This includes everything from delivery presentation and marketing, right down to the time and method of delivery. Your customers will place great importance in all of these. <a href="privacy-policy.html" class="text--base">View our Return Policy</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show fade" id="reviews">
                                <div class="reviews-wrapper">
                                    <h4 class="text--warning mb-2">5.00 <i class="las la-star"></i> (2)</h3>
                                        <h4 class="title mb-4">Review for : Corsair - HU-05 Wireless Headset Blue</h4>
                                        <ul class="review-item-wrapper">
                                            <li class="review-item">
                                                <div class="review-item__thumb"><img src="assets/images/comment/item1.png" alt="comment"></div>
                                                <div class="review-item__content">
                                                    <ul class="rating rating-fill">
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                    </ul>
                                                    <div class="name-wrapper d-flex flex-wrap align-items-center">
                                                        <h6 class="name me-2">John Doe</h6>--
                                                        <span class="date ms-2">19 Jub, 2021</span>
                                                    </div>
                                                    <p>Here's something we've learned from over a decade running A/B tests on hundreds of Product Detail Pages: Optimizing your product descriptions is one of the highest-return, lowest-investment improvements an ecommerce manager can make.</p>
                                                </div>
                                            </li>
                                            <li class="review-item">
                                                <div class="review-item__thumb"><img src="assets/images/comment/item2.png" alt="comment"></div>
                                                <div class="review-item__content">
                                                    <ul class="rating rating-fill">
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                    </ul>
                                                    <div class="name-wrapper d-flex flex-wrap align-items-center">
                                                        <h6 class="name me-2">John Doe</h6>--
                                                        <span class="date ms-2">19 Jub, 2021</span>
                                                    </div>
                                                    <p>Here's something we've learned from over a decade running A/B tests on hundreds of Product Detail Pages: Optimizing your product descriptions is one of the highest-return, lowest-investment improvements an ecommerce manager can make.</p>
                                                </div>
                                            </li>
                                        </ul>
                                </div>
                                <div class="add-review-wrapper">
                                    <h4 class="border-bottom pb-2 mt-4 mb-4">Add a Review</h4>
                                    <form class="add-review-form">
                                        <div class="form-group">
                                            <label class="form-label">Your Rating <span class="text--danger">*</span></label>
                                            <fieldset>
                                                <span class="star-cb-group">
                                                    <input type="radio" id="rating-5" name="rating" value="5"><label for="rating-5">5</label>
                                                    <input type="radio" id="rating-4" name="rating" value="4" checked="checked"><label for="rating-4">4</label>
                                                    <input type="radio" id="rating-3" name="rating" value="3"><label for="rating-3">3</label>
                                                    <input type="radio" id="rating-2" name="rating" value="2"><label for="rating-2">2</label>
                                                    <input type="radio" id="rating-1" name="rating" value="1"><label for="rating-1">1</label>
                                                    <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear"><label for="rating-0">0</label>
                                                </span>
                                            </fieldset>
                                        </div>
                                        <div class="form-group">
                                            <label for="msg" class="form-label">Your Review <span class="text--danger">*</span></label>
                                            <textarea class="form-control form--control" id="msg"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email <span class="text--danger">*</span></label>
                                            <input type="email" class="form-control form--control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control" id="name">
                                        </div>
                                        <div class="form--check">
                                            <input type="checkbox" id="check01" checked>
                                            <label for="check01">Remember my Name & Email for Future.</label>
                                        </div>
                                        <button type="submit" class="btn btn--base mt-4">Submit Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Ends Here -->


    <?php include "partials/feature.php" ?>

    <?php include "partials/footer.php" ?>

    <?php include "partials/template-bottom.php" ?>