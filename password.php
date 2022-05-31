<?php include('partial/header.php') ?>

<section class="pagination-wrap">
    <div class="container">
        <ul class="pagination">
            <li>
                <a href="index.php">Home</a><i class="las la-angle-right"></i>
            </li>
            <li>
                <a href="myaccount.php">My account</a><i class="las la-angle-right"></i>
            </li>
            <li class="active">
                Change password
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
                        <li>
                            <a href="myaccount.php">My account</a>
                        </li>
                        <li>
                            <a href="Personal.php">Personal Details</a>
                        </li>
                        <li class="active">
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
                    <h4>Change password</h4>
                    <div class="userBlock">
                        <div class="userGreet">
                            <h6>Sanjay</h6>
                            <p>You may change your password here</p>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            Current Password
                                        </label>
                                        <input type="password" placeholder="current password">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            New Password
                                        </label>
                                        <input type="password" placeholder="New password">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            Confirm New Password
                                        </label>
                                        <input type="password" placeholder="Confirm New password">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-danger">cancel</button>
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('partial/footer.php') ?>