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
                View orders
            </li>
        </ul>
    </div>
</section>

<section class="userDashboard padding-spacing bt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="user-left">
                    <ul>
                        <li>
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
                        <li class="active">
                            <a href="order.php">View Orders</a>
                        </li>
                        <li>
                            <a href="pay.php">Payment Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="user-right">
                    <div class="user-header d-flex align-items-center justify-content-between">
                        <h4>View orders</h4>
                        <div class="header-search right-common">
                            <form action="">
                                <input type="text" placeholder="Search product" name="headerSearch">
                                <i class="las la-search"></i>
                            </form>
                        </div>
                    </div>
                    <div class="userBlock">
                        <div class="noOrder d-none">
                            <p> You Currently have no order </p>
                            <a href="index.php" class="site-button">
                                Continue Order
                            </a>
                        </div>
                        <div class="order">
                            <div class="custom-block custom-table">
                                <table id="dataTable-1" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="details.php"> System Architect</a></td>
                                            <td>2</td>
                                            <td>612</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="details.php">Accountant</a></td>
                                            <td>3</td>
                                            <td>633</td>
                                            <td>2011/07/25</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="details.php">Junior Technical Author</a></td>
                                            <td>3</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="details.php">Senior Javascript Developer</a></td>
                                            <td>3</td>
                                            <td>223</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><a href="details.php">Accountant</a></td>
                                            <td>2</td>
                                            <td>332</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><a href="details.php">Integration Specialist</a></td>
                                            <td>3</td>
                                            <td>612</td>
                                            <td>2012/12/02</td>
                                        </tr>
                                </table>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('partial/footer.php') ?>