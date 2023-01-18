<?php include 'inc/app.php'; ?>

<link rel="stylesheet" href="css/login.css">

<!-- start here -->
<section class="register-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="register-wrapper">
                    <div class="register main_heading">
                        <h2> <span>Register</span></h2>
                    </div>
                    <div class="welcome-reg main_heading">
                        <h2>Welcome Back to <span>Bannerman.net</span>
                            <br>
                            The Best place to enhance your look
                        </h2>

                    </div>
                    <div class="member-log">
                        <span>Already a Member ? <a href="login.php">Login</a></span>
                    </div>
                    <div class="sign-member-form">
                        <form class="row g-3">
                            <div class="col-6">
                                <div class="info-form">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-form">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-form">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-form">
                                    <input type="Number" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-form">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-form">
                                    <input type="Password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-btn">
                                    <a href="profile.php" class="btn btn-primary ">Register <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="terms">
                        <span>By Creating Account you are agree to our <a href="terms-condition.php"> Terms &
                                conditions</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
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