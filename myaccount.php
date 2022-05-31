<?php include('partial/header.php') ?>

<section class="pagination-wrap">
    <div class="container">
        <ul class="pagination">
            <li>
                <a href="index.php">Home</a><i class="las la-angle-right"></i>
            </li>
            <li class="active">
                My account
            </li>
        </ul>
    </div>
</section>

<section class="userDashboard padding-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="user-left">
                    <ul>
                        <li class="active">
                            <a href="myaccount">My account</a>
                        </li>
                        <li>
                            <a href="Personal.php">Personal Details</a>
                        </li>
                        <li>
                            <a href="password.php">Change Password</a>
                        </li>
                        <li>
                            <a href="cartList.php">Cart</a>
                        </li>
                        <li>
                            <a href="wishlist.php">Wishlist</a>
                        </li>
                        <li>
                            <a href="order.php">View Orders</a>
                        </li>
                        <li>
                            <a href="pay.php">Payment Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="user-right">
                    <h4>My Account</h4>
                    <div class="userBlock">
                        <div class="row  row-cols-xl-3 row-cols-md-3 row-cols-sm-2">
                            <div class="col">
                                <div class="user-block">
                                    <a href="personal.php">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Personal Details</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="user-block">
                                    <a href="personal.php">
                                        <div class="icon">
                                            <i class="las la-lock"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Change Password</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="user-block">
                                    <a href="personal.php">
                                        <div class="icon">
                                            <i class="las la-truck"></i>
                                        </div>
                                        <div class="info">
                                            <h5>View and track orders</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="user-block">
                                    <a href="personal.php">
                                        <div class="icon">
                                            <i class="las la-credit-card"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Payment details</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="user-block">
                                    <a href="personal.php">
                                        <div class="icon">
                                            <i class="las la-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Address</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('partial/footer.php') ?>