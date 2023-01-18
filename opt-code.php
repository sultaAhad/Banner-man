<?php include 'inc/app.php'; ?>

<link rel="stylesheet" href="css/opt-code.css">


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
                        <form action="new-password.php">
                            <label for="inputEmail4">Enter Code</label>
                            <div class="userInput">
                                <input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'first')"
                                    placeholder="0">
                                <input type="text" id='first' maxlength="1" onkeyup="clickEvent(this,'sec')"
                                    placeholder="0">
                                <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')"
                                    placeholder="0">
                                <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')"
                                    placeholder="0">
                                <!-- <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')"
                                    placeholder="07">
                                <input type="text" id="fifth" maxlength="1" onkeyup="clickEvent(this,'six')"
                                    placeholder="03"> -->
                            </div>
                            <!-- <div class="user-time">
                                <div class="time">
                                    <span>01:00</span>
                                </div>
                                <div class="resend">
                                    <div class="forget">

                                        <a href="javascript:void(0)">Resend Code</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-7 p-0 ">
                                <div class="info-btn2">
                                    <button href="new-password.php" type="submit" class="btn btn-primary">Submit <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-img">
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