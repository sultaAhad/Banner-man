<link rel="stylesheet" href="css/opt-code.css">
<?php include 'inc/app.php'; ?>

<!-- start here -->
<section class="register-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0">
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
                                    placeholder="02">
                                <input type="text" id='first' maxlength="1" onkeyup="clickEvent(this,'sec')"
                                    placeholder="05">
                                <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')"
                                    placeholder="06">
                                <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')"
                                    placeholder="10">
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
                            <div class="col-md-6 p-0 ">
                                <div class="info-btn2">
                                    <button href="new-password.php" type="submit"
                                        class="btn btn-primary">Submit <svg xmlns="http://www.w3.org/2000/svg" width="9.115" height="7.588" viewBox="0 0 9.115 7.588">
                                                <path id="Path_72" data-name="Path 72" d="M-455.048-393.807c.013-.032.025-.065.04-.1a.483.483,0,0,1,.405-.292,1.191,1.191,0,0,1,.133,0h6.011c-.033-.035-.053-.057-.075-.079l-1.81-1.815a.478.478,0,0,1-.1-.636,2.544,2.544,0,0,1,.475-.475.456.456,0,0,1,.569.045c.023.019.044.039.065.06l3.222,3.222a.5.5,0,0,1,.108.645.706.706,0,0,1-.107.13l-3.222,3.223a.505.505,0,0,1-.775,0l-.233-.232a.5.5,0,0,1,0-.761q.913-.912,1.828-1.822c.022-.022.043-.046.079-.083h-5.968c-.395,0-.5-.068-.642-.427Z" transform="translate(455.048 397.284)" fill="#fff" />
                                            </svg></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-img">
                    <img src="img/login-man.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout-section ends here -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>