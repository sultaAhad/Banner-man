<link rel="stylesheet" href="css/login.css">
<?php include 'inc/app.php'; ?>

<!-- start here -->
<section class="register-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="register-wrapper">
                    <div class="register main_heading">
                        <h2> <span>LOGIN</span></h2>
                    </div>
                    <div class="welcome-reg main_heading">
                        <h2>Welcome Back to <span>Bannerman.net</span>
                            <br>
                            The Best place to enhance your look
                        </h2>

                    </div>
                    <div class="member-log">
                        <span>Already a Member ? <a href="register.php">Register</a></span>
                    </div>
                    <div class="sign-member-form">
                        <form>
                            <div class=" col-10">
                                <div class="info-one">
                                    <input class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-10">
                                <div class="info-one">
                                    <input class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="remmeber-this">
                                    <div class="mod-chk range">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember Me
                                        </div>
                                    </div>

                                    <div class="forget-this">
                                        <a href="forgetpassword.php">Forgot Password ?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10">
                                <div class="info-btn2">
                                    <a href="profile.php" class="btn btn-primary ">Login <svg
                                            xmlns="http://www.w3.org/2000/svg" width="9.115" height="7.588"
                                            viewBox="0 0 9.115 7.588">
                                            <path id="Path_72" data-name="Path 72"
                                                d="M-455.048-393.807c.013-.032.025-.065.04-.1a.483.483,0,0,1,.405-.292,1.191,1.191,0,0,1,.133,0h6.011c-.033-.035-.053-.057-.075-.079l-1.81-1.815a.478.478,0,0,1-.1-.636,2.544,2.544,0,0,1,.475-.475.456.456,0,0,1,.569.045c.023.019.044.039.065.06l3.222,3.222a.5.5,0,0,1,.108.645.706.706,0,0,1-.107.13l-3.222,3.223a.505.505,0,0,1-.775,0l-.233-.232a.5.5,0,0,1,0-.761q.913-.912,1.828-1.822c.022-.022.043-.046.079-.083h-5.968c-.395,0-.5-.068-.642-.427Z"
                                                transform="translate(455.048 397.284)" fill="#fff" />
                                        </svg></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-banner-img " data-aos="fade-left" data-aos-anchor="#example-anchor"
                    data-aos-offset="700" data-aos-duration="2000">
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