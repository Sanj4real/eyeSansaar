<?php include('partial/header.php') ?>
<section class="cartList padding-spacing bt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="cartlist-left">
                    <div class="site-header">
                        <div class="head">
                            <h4>Shipping Information</h4>
                        </div>
                    </div>
                    <div class="cart-form">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            First Name
                                        </label>
                                        <input type="text" placeholder="Sanjay">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Last Name
                                        </label>
                                        <input type="text" placeholder="Rawal">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Street Address
                                        </label>
                                        <input type="text" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Email
                                        </label>
                                        <input type="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            City
                                        </label>
                                        <input type="text" placeholder="city">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Zip Code
                                        </label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            District
                                        </label>
                                        <Select>
                                            <option value="">Kathmandu</option>
                                            <option value="">Bhaktapur</option>
                                            <option value="">Lalitpur</option>
                                        </Select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Telephone
                                        </label>
                                        <input type="text" placeholder="9806543211">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a href="pay.php" class="site-button">Proceed To Payment</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="pagination-wrapp mt-4">
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


                <!-- <a href="list.php">Read More</a> -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="cartlist-right">
                    <h3>Billing Summary</h3>
                    <div class="cartRight-block">
                        <ul>
                            <li>
                                <div class="top">
                                    Cart total <b>Rs 2341</b>
                                    <br>
                                    <br>
                                    Delivery <b>Rs 100</b>
                                </div>
                            </li>
                            <li>
                                Vat <b>5%</b>
                            </li>
                            <li class="order">
                                Order Total <b>Rs 1234</b>
                            </li>
                        </ul>

                    </div>
                    <p>
                        We accept the following payment methods
                    </p>
                    <div class="cartRight-block pay">
                        <ul>
                            <li>
                                <img src="app/public/pay/e-sewa.png" alt="">
                            </li>
                            <li>
                                <img src="app/public/pay/khalti.png" alt="">
                            </li>
                            <li>
                                <img src="app/public/pay/master.png" alt="">
                            </li>
                            <li>
                                <img src="app/public/pay/visa.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>