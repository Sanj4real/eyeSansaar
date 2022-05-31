<?php include('partial/header.php') ?>
<section class="cartList padding-spacing bt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="cartlist-left">
                    <div class="site-header">
                        <div class="head">
                            <h4>Payment Method</h4>
                        </div>
                    </div>
                    <div class="cart-form">

                        <div class="payment mb-5">
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
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Credit Card Type
                                        </label>
                                        <select name="" id="">
                                            <option value="">
                                                visa
                                            </option>
                                            <option value="">
                                                MasterCard
                                            </option>
                                            <option value="">
                                                E-sewa
                                            </option>
                                            <option value="">
                                                Khalti
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Credit card Number
                                        </label>
                                        <input type="number" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                        Credit Holder Name
                                        </label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">
                                            Expiration
                                        </label>
                                        <input type="date" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#" class="site-button">Place Your Order</a>
                                </div>
                            </div>
                        </form>
                    </div>
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