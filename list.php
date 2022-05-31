<?php include('partial/header.php') ?>

<section class="pagination-wrap">
    <div class="container">
        <ul class="pagination">
            <li>
                <a href="index.php">Home</a><i class="las la-angle-right"></i>
            </li>
            <li class="active">
                List
            </li>
        </ul>
    </div>
</section>

<!-- advertise -->
<section class="img-advertise padding-spacing bt-0">
    <div class="container">
        <a href="">
            <img src="app/public/img/1.png" alt="">
        </a>
    </div>
</section>

<section class="list padding-spacing pt-0 bt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 d-none d-md-block">
                <div class="list-left">
                    <div class="listHead">
                        <h4>Filters</h4>
                    </div>
                    <div class="list-left-block">
                        <div class="Head">
                            <h4>Popular picks</h4>
                        </div>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadioDefault" class="form-check-input" id="checkOne"
                                        checked>
                                    <label class="form-check-label" for="checkOne">In Stock</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadioDefault" class="form-check-input" id="checkTwo">
                                    <label for="checkTwo" class="form-check-label">New Arrivals</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-left-block">
                        <div class="Head">
                            <h4>Gender</h4>
                        </div>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadioDefaults" class="form-check-input"
                                        id="checkThree" checked>
                                    <label class="form-check-label" for="checkThree">Kids</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadioDefaults" class="form-check-input"
                                        id="checkFour">
                                    <label class="form-check-label" for="checkFour">Man</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadioDefaults" class="form-check-input"
                                        id="checkFive">
                                    <label class="form-check-label" for="checkFive">Women</label>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="list-left-block">
                        <div class="Head">
                            <h4>Brands</h4>
                        </div>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadio" class="form-check-input" id="CheckThree"
                                        checked>
                                    <label class="form-check-label" for="CheckThree">Ray-Ban</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadio" class="form-check-input" id="CheckFour">
                                    <label class="form-check-label" for="CheckFour">Adidas</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadio" class="form-check-input" id="CheckFive">
                                    <label class="form-check-label" for="CheckFive">Calvin Kelvin</label>
                                </div>
                            </li>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadio" class="form-check-input" id="CheckSix">
                                    <label class="form-check-label" for="CheckSix">Carter Bond</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="radio" name="flexRadio" class="form-check-input" id="CheckSeven">
                                    <label class="form-check-label" for="CheckSeven">CR7</label>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="list-left-block">
                        <div class="Head">
                            <h4>Frame Colors</h4>
                        </div>
                        <ul class="colors">
                            <li>
                                <a href="#" class="color">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="color color-1"></a>
                            </li>
                            <li>
                                <a href="#" class="color color-2"></a>
                            </li>
                            <li>
                                <a href="#" class="color color-3"></a>
                            </li>

                        </ul>
                    </div>
                    <div class="list-left-block">
                        <div class="Head">
                            <h4>Prices</h4>
                        </div>
                        <div class="wrapper">
                            <fieldset class="filter-price">
                                <div class="price-field">
                                    <div class="label">
                                        <h6>min</h6>
                                        <h6>max</h6>
                                    </div>
                                    <input type="range" min="100" max="500" value="135" id="lower">
                                    <input type="range" min="100" max="500" value="500" id="upper">
                                </div>
                                <div class="price-wrap">
                                    <div class="price-container">
                                        <div class="price-wrap-1">
                                            <label for="one">Rs</label>
                                            <input id="one">
                                        </div>
                                        <div class="price-wrap-2">
                                            <label for="two">Rs</label>
                                            <input id="two">

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="list-right">
                    <div class="listHead">
                        <h4>Filters</h4>
                        <div class="headRight">
                            <div class="d-none d-md-flex">
                                <label>Sort By:</label>
                                <div class="select shop__header--select">
                                    <select class="product__view--select">
                                        <option selected="" value="1">Sort by latest</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by rating </option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <ul>
                                    <li class="active" id="grid" onclick="gridContent()">
                                        <i class="las la-th-list"></i>
                                    </li>
                                    <li id="listing" onclick="listContent()">
                                        <i class="las la-list-ul"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="gridContent contentList brands features active" id="gridContent">
                        <!-- feature -->
                        <div class="row row-cols-lg-4 row-cols-xl-4 row-cols-md-2 row-cols-sm-2">
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
                    <div class="listContent contentList" id="listContent">
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="img">
                                            <a href="details.php">
                                                <img src="app/public/products/1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-sm-9 col-md-9">
                                        <div class="listContent-block">
                                            <h6>Sunglass, Man</h6>
                                            <h4><a href="details.php"> Soho 4 Drawer Filing Cabinet Black</a></h4>
                                            <div class="price">RS 1400
                                                <span>RS 2000</span>
                                            </div>
                                            <div class="star">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star-half"></i>
                                            </div>
                                            <div class="listContent-info">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia
                                                    voluptas
                                                    dolore doloribus architecto sequi corporis deleniti officia culpa
                                                    dolor esse
                                                    consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                    voluptates,
                                                    illo exercitationem numquam ipsa. Est fuga ex ipsum alias ipsa
                                                    quibusdam
                                                    magni harum labore voluptate, esse deserunt saepe eveniet./p>
                                            </div>
                                            <div>
                                                <a class="site-button" href="cart.php"><i
                                                        class="las la-cart-plus"></i>Add to
                                                    Cart</a>
                                                <a href="wish.php" class="site-button">
                                                    <i class="las la-heart"></i>wishlist
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="img">
                                            <a href="details.php">
                                                <img src="app/public/products/1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-sm-9">
                                        <div class="listContent-block">
                                            <h6>Sunglass, Man</h6>
                                            <h4><a href="details.php"> Soho 4 Drawer Filing Cabinet Black</a></h4>
                                            <div class="price">RS 1400
                                                <span>RS 2000</span>
                                            </div>
                                            <div class="star">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star-half"></i>
                                            </div>
                                            <div class="listContent-info">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia
                                                    voluptas
                                                    dolore doloribus architecto sequi corporis deleniti officia culpa
                                                    dolor esse
                                                    consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                    voluptates,
                                                    illo exercitationem numquam ipsa. Est fuga ex ipsum alias ipsa
                                                    quibusdam
                                                    magni harum labore voluptate, esse deserunt saepe eveniet./p>
                                            </div>
                                            <div>
                                                <a class="site-button" href="cart.php"><i
                                                        class="las la-cart-plus"></i>Add to
                                                    Cart</a>
                                                <a href="wish.php" class="site-button">
                                                    <i class="las la-heart"></i>wishlist
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="img">
                                            <a href="details.php">
                                                <img src="app/public/products/1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-sm-9">
                                        <div class="listContent-block">
                                            <h6>Sunglass, Man</h6>
                                            <h4><a href="details.php"> Soho 4 Drawer Filing Cabinet Black</a></h4>
                                            <div class="price">RS 1400
                                                <span>RS 2000</span>
                                            </div>
                                            <div class="star">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star-half"></i>
                                            </div>
                                            <div class="listContent-info">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia
                                                    voluptas
                                                    dolore doloribus architecto sequi corporis deleniti officia culpa
                                                    dolor esse
                                                    consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                    voluptates,
                                                    illo exercitationem numquam ipsa. Est fuga ex ipsum alias ipsa
                                                    quibusdam
                                                    magni harum labore voluptate, esse deserunt saepe eveniet./p>
                                            </div>
                                            <div>
                                                <a class="site-button" href="cart.php"><i
                                                        class="las la-cart-plus"></i>Add to
                                                    Cart</a>
                                                <a href="wish.php" class="site-button">
                                                    <i class="las la-heart"></i>wishlist
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="pagination-wrapp">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>