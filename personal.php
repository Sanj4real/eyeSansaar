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
                Personal Details
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
                        <li class="active">
                            <a href="Personal.php">Personal Details</a>
                        </li>
                        <li>
                            <a href="password.php">Change Password</a>
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
                    <h4>Personal Details</h4>
                    <div class="userBlock">
                        <div class="userGreet">
                            <h6>Hi Sanjay</h6>
                            <p>Welcome to your account</p>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            Title
                                        </label>
                                        <select name="" id="">
                                            <option value="">Miss</option>
                                            <option value="">Ms</option>
                                            <option value="">Mrs</option>
                                            <option value="">Dr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            First Name
                                        </label>
                                        <input type="text" placeholder="" value="Sanjay">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            Last Name
                                        </label>
                                        <input type="text" placeholder="" value="Rawal">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="">
                                            Mobile Number
                                        </label>
                                        <input type="Number" placeholder="" value="98">
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