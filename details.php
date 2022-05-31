<?php include('partial/header.php') ?>

<section class="pagination-wrap">
    <div class="container">
        <ul class="pagination">
            <li>
                <a href="index.php">Home</a><i class="las la-angle-right"></i>
            </li>
            <li>
                <a href="index.php">Listing Page</a><i class="las la-angle-right"></i>
            </li>
            <li class="active">
                Details Page
            </li>
        </ul>
    </div>
</section>

<section class="details padding-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="details-left" id="magnific">
                    <div class="large-5 column">
                        <div class="xzoom-container">
                            <img class="xzoom5" id="xzoom-magnific" src="app/public/gallery/preview/01_b_car.jpg"
                                xoriginal="app/public/gallery/original/01_b_car.jpg" />
                            <div class="xzoom-thumbs">
                                <a href="app/public/gallery/original/01_b_car.jpg"><img class="xzoom-gallery5"
                                        width="80" src="app/public/gallery/thumbs/01_b_car.jpg"
                                        xpreview="app/public/gallery/preview/01_b_car.jpg"
                                        title="The description goes here"></a>
                                <a href="app/public/gallery/original/02_o_car.jpg"><img class="xzoom-gallery5"
                                        width="80" src="app/public/gallery/preview/02_o_car.jpg"
                                        title="The description goes here"></a>
                                <a href="app/public/gallery/original/03_r_car.jpg"><img class="xzoom-gallery5"
                                        width="80" src="app/public/gallery/preview/03_r_car.jpg"
                                        title="The description goes here"></a>
                                <a href="app/public/gallery/original/04_g_car.jpg"><img class="xzoom-gallery5"
                                        width="80" src="app/public/gallery/preview/04_g_car.jpg"
                                        title="The description goes here"></a>
                            </div>
                        </div>
                    </div>
                    <div class="large-7 column"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="details-right">
                    <h3>Disney Women's Lilo & Stitch Oversized Hoodie - Navy - Size One Size</h3>
                    <div class="star">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star-half"></i>
                    </div>

                    <div class="info">
                        <ul>
                            <li>
                                Product Name:<span> Jade Black Sunglasses</span>
                            </li>
                            <li>
                                Deliver Charge:<span> RS 50</span>
                            </li>
                            <li>
                                Material:<span> Black</span>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <p>More Frame colour options in stock</p>
                        <ul class="color">
                            <li class="active">
                                <a href="#">Red</a>
                            </li>
                            <li>
                                <a href="#">Blue</a>
                            </li>
                            <li>
                                <a href="#">Green</a>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <p>More Sizes options in stock</p>
                        <ul class="color">
                            <li>
                                <a href="#">53-14-116-33</a>
                            </li>
                            <li class="active">
                                <a href="#">51-14-116-33</a>
                            </li>
                            <li>
                                <a href="#">50-14-116-33</a>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <p>WE Accept</p>
                        <ul class="color">
                            <li>
                                <img src="app/public/pay/e-sewa.png" alt="">

                        </li>
                            <li class="active">
                                <img src="app/public/pay/khalti.png" alt="">

                        </li>
                            <li>
                                <img src="app/public/pay/visa.png" alt="">

                        </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="details-between">
                    <div class="price-wrap">
                        <div class="price">RS 1400
                            <span>RS 2000</span>
                        </div>
                        <span>FREE Shipping</span>
                    </div>
                    <div>
                        <p>Currently Avilable</p>
                    </div>
                    <p>We don't know when or if this item will be back in stock.</p>
                    <div class="quantity">
                        Quantity:
                        <div class="increment">
                            <button id="subtract">
                                <i class="las la-minus"></i>
                            </button>
                            <div id="counter">0</div>
                            <button id="add">
                                <i class="las la-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="cart">
                        <a class="site-button" href="cart.php"><i class="las la-credit-card"></i>Buy Now</a>
                        <a class="site-button" href="cart.php"><i class="las la-cart-plus"></i>Add to
                            Cart</a>
                    </div>
                    <!-- <div class="social">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="lab la-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="details-spec">
    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home- 3tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Product Details</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="details-block">
                    <p>Enjoy couch time in the Disney Lilo & Stitch Oversized Hoodie. Featuring a fleece construction
                        and a
                        fluffy interior, the vibrant printed piece is sure to keep you cosy.</p>
                    <h5>Product Features:</h5>
                    <ul>
                        <li>Lilo & Sitch print</li>
                        <li>Cuffled long sleeves</li>
                        <li>Polyester construction</li>
                        <li>Machine washable</li>
                    </ul>
                    <h5>Product Details:</h5>
                    <p>Vista Sport features designs for the active individual. The frames are light and comfortable,
                        something absolutely essential while trying to break that personal record. The frames are made
                        of
                        surgical grade stainless steel, a material that has been tested in the worst of conditions and
                        have
                        yet to falter. Its anti-corrosive properties means the reason you’ll buy a new pair of glasses
                        is
                        because you got tired of wearing them.</p>
                </div>
            </div>
            <div class="tab-pane fade specification" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="details-block">
                    <ul>
                        <li>
                            Article Number: <span>1395637</span>
                        </li>
                        <li>
                            Product Depth: <span>13cm</span>
                        </li>
                        <li>
                            Product Weight: <span>1kg</span>
                        </li>
                        <li>
                            Brand Name: <span>Disney</span>
                        </li>
                        <li>
                            Product Height: <span>10cm</span>
                        </li>
                        <li>
                            Product width: <span>10cm</span>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="details-block">
                    <p>If you have been purchased this product, please <a href="signIn.php"> CLICK HERE</a> to comment
                        on it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recommend features brands padding-spacing bt-0">
    <div class="container">
        <div class="site-header">
            <div class="head">
                <h4>Similar Products</h4>
            </div>
            <!-- <a href="list.php">Read More</a> -->
        </div>
        <div class="product-slider owl-carousel">
        <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/1.avif" alt="">
                        <div class="disc">
                            <h6>22%</h6>
                        </div>
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">
                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/2.avif" alt="">
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">

                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/1.avif" alt="">
                        <div class="disc">
                            <h6>22%</h6>
                        </div>
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">
                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/2.avif" alt="">
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">

                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/1.avif" alt="">
                        <div class="disc">
                            <h6>22%</h6>
                        </div>
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">
                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/2.avif" alt="">
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">

                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/1.avif" alt="">
                        <div class="disc">
                            <h6>22%</h6>
                        </div>
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">
                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="block">
                    <div class="block-img">
                        <img src="app/public/products/2.avif" alt="">
                        <div class="add">
                            <ul>
                                <li>
                                    <a href="cartList.php">
                                        <i class="las la-cart-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="las la-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-title">
                        <a href="details.php">

                            <h4 class="price">RS 1400
                                <span>RS 2000</span>
                            </h4>
                            <h5>Soho 4 Drawer Filing Cabinet Black</h5>
                            <!-- <button class="site-button"><i class="las la-cart-plus"></i>Add to Cart</button> -->
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>