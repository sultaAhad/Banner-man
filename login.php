<?php include 'inc/app.php'; ?>

<link rel="stylesheet" href="css/login.css">

<!-- start here -->
<section class="register-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-0">
                <div class="register-wrapper">
                    <div class="register main_heading">
                        <h2> <span>Login</span></h2>
                    </div>
                    <div class="welcome-reg main_heading">
                        <h2>Welcome Back to <span>Bannerman.net</span>
                            <br>
                            The Best place to enhance your look
                        </h2>

                    </div>
                    <div class="member-log">
                        <span>Not a Member ? <a href="register.php">Register</a></span>
                    </div>
                    <div class="sign-member-form">
                        <form>
                            <div class="col-lg-9">
                                <div class="info-one">
                                    <input type="Email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="info-one">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="remmeber-this">
                                    <div class="new">
                                        <form>
                                            <div class="form-group">
                                                <input type="checkbox" id="html">
                                                <label for="html">Remember Me</label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="forget-this">
                                        <a href="forgetpassword.php">Forgot Password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="info-btn2">
                                    <a href="profile.php" class="btn btn-primary ">Login <i
                                            class="fa-solid fa-arrow-right"></i></a>
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
    </div>
</section>
<!-- checkout-section ends here -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>