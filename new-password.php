<?php include 'inc/app.php'; ?>

<link rel="stylesheet" href="css/login.css">

<!-- start here -->
<section class="register-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-0">
                <div class="register-wrapper">
                    <div class="register main_heading">
                        <h2> <span>Forgot Password?</span></h2>
                    </div>
                    <div class="welcome-reg main_heading forgot-heading">
                        <h2>Enter your registered email below to receive
                            password reset <span>instructions</span>
                            <br>

                        </h2>
                    </div>
                    <div class="sign-member-form">
                        <form>
                            <div class=" col-9">
                                <div class="info-one">
                                    <!-- <label for="inputEmail4">New Password</label> -->
                                    <input type="password" class="form-control" id="inputEmail4"
                                        placeholder="New Password">
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="info-one">
                                    <!-- <label for="inputEmail4">Confirm Password</label> -->
                                    <input type="password" class="form-control" id="inputEmail4"
                                        placeholder="Confirm New Password">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="info-btn2">
                                    <a href="login.php" class="btn btn-primary ">Submit <i
                                            class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-banner-img " data-aos="fade-left" data-aos-anchor="#example-anchor"
                    data-aos-offset="500" data-aos-duration="2000">
                    <figure>
                        <img src="img/banner-man-net.webp" class=" img-fluid layer" data-speed="-5" alt="">
                    </figure>
                </div>
            </div>
        </div>
</section>
<!-- checkout-section ends here -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>