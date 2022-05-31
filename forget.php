<?php include('partial/header.php') ?>
<section class="pagination-wrap">
    <div class="container">

        <ul class="pagination">
            <li>
                <a href="index.php">Home</a><i class="las la-angle-right"></i>
            </li>
            <li class="active">
                Forgotten Password
            </li>
        </ul>
    </div>
</section>
<section class="form padding-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-block forget">
                    <h5>Forgotten Password</h5>
                    <p>Please enter the email address associated with your account and we’ll send an email with
                        instructions to reset your password.</p>
                    <form action="">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <button class="site-button">Send Email</button>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include('partial/footer.php') ?>