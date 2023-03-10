<!-- Include app -->
<?php include 'inc/app.php'; ?>
<!-- Include app -->
<!-- Style Varieble css  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variables.css">
<link rel="stylesheet" href="css/design-your-image.css">
<!-- Style Varieble css  -->

<!-- Design Start Here -->
<section class="tabs-design-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="nav-tabs-design">
                    <ul class="nav nav-pills mb-3 img-design" id="pills-tab" role="tablist">
                        <li class="nav-item nav-second" role="presentation">
                            <button class="nav-link second-links active" data-bs-toggle="pill"
                                data-bs-target="#pills-hidden" type="button" role="tab" aria-selected="true">
                                <div class="deisgn">
                                    <img src="img/design-img.webp" class="img-fluid" alt="">
                                    <h5>Add Images</h5>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                role="tab" aria-selected="false">
                                <div class="deisgn">
                                    <img src="img/design-img.webp" class="img-fluid" alt="">
                                    <h5>Add Images</h5>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                role="tab" aria-selected="false">
                                <div class="deisgn">
                                    <img src="img/design-img1.webp" class="img-fluid" alt="">
                                    <h5>Add Text</h5>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
                                role="tab" aria-selected="false">
                                <div class="deisgn">
                                    <img src="img/design-img2.webp" class="img-fluid" alt="">
                                    <h5>Add Clipart</h5>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link second-links1" data-bs-toggle="pill"
                                data-bs-target="#pills-background" type="button" role="tab" aria-selected="false">
                                <div class="deisgn">
                                    <img src="img/design-img3.webp" class="img-fluid" alt="">
                                    <h5>Add Background</h5>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link second-links12 " data-bs-toggle="pill" data-bs-target="#pills-final"
                                type="button" role="tab" aria-selected="false">
                                <div class="deisgn">
                                    <img src="img/design-img3.webp" class="img-fluid" alt="">
                                    <h5>Add Background</h5>
                                </div>
                            </button>
                        </li>
                    </ul>
                    <div class=main-step-wizard>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-hidden" role="tabpanel"
                                        aria-labelledby="pills-hidden-tab">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="tab-headind-main">
                                                    <h4>Custom Products</h4>
                                                    <p>Get started by choosing an option below:</p>
                                                </div>
                                                <ul class="nav nav-pills inside-wrapper mb-3" id="pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link second-links second-links2 "
                                                            id="pills-home-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-home" type="button" role="tab"
                                                            aria-controls="pills-home" aria-selected="false">
                                                            <div class="deisgn1">
                                                                <img src="img/design-img.webp" class="img-fluid" alt="">
                                                                <div class="image">
                                                                    <h5>Add Images</h5>
                                                                    <p>Choose from ours or upload your own</p>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link second-links2" id="pills-profile-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                            type="button" role="tab" aria-controls="pills-profile"
                                                            aria-selected="false">
                                                            <div class="deisgn1">
                                                                <img src="img/design-img1.webp" class="img-fluid"
                                                                    alt="">
                                                                <div class="image">
                                                                    <h5>Add Text</h5>
                                                                    <p>Choose from over 50 different fonts</p>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link second-links2" id="pills-contact-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact"
                                                            type="button" role="tab" aria-controls="pills-contact"
                                                            aria-selected="false">
                                                            <div class="deisgn1">
                                                                <img src="img/design-img2.webp" class="img-fluid"
                                                                    alt="">
                                                                <div class="image">
                                                                    <h5>Add Clipart</h5>
                                                                    <p>Start your design from a template</p>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item " role="presentation">
                                                        <button class="nav-link second-links1 second-links2 third-link"
                                                            id="pills-background-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-background" type="button" role="tab"
                                                            aria-controls="pills-background" aria-selected="false">
                                                            <div class="deisgn1">
                                                                <img src="img/design-img3.webp" class="img-fluid"
                                                                    alt="">
                                                                <div class="image">
                                                                    <h5>Add Background</h5>
                                                                    <p>Start your design from a template</p>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="flag-img">
                                                    <img src="img/main-walcome-img.webp" class="img-fluid" alt="">
                                                    <!-- <div class="nex-prev-btn">
                                                        <button class="prevtab btn btn-success">Save <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                        <button class="nexttab btn btn-success">Preview <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="col-ting">
                                                    <div class="tab-headind-main">
                                                        <h4>Add an Image To Your Design</h4>
                                                        <p>Browse our clip art catalog or upload your own design</p>
                                                        <div class="controls">
                                                            <div id="frames"></div>
                                                            <label for="image">
                                                                <input type="file" id="image" name="image[]" multiple
                                                                    style="display:none" visbility="hidden" />
                                                                <div class="deisgn1">
                                                                    <img src="img/design-img4.webp" class="img-fluid"
                                                                        alt="">
                                                                    <div class="image">
                                                                        <h5>Add Images</h5>
                                                                        <input type="text" id="fakeInput"
                                                                            placeholder="Choose from ours or upload your own" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="new">
                                                            <form>
                                                                <div class="form-group-checkbox">
                                                                    <input type="checkbox" id="html">
                                                                    <label for="html"></label>
                                                                </div>
                                                                <h5> By ticking, you are
                                                                    confirm that
                                                                    you have read, understood and agree to
                                                                    our <a href="forget-password.php"> terms and
                                                                        conditions.</a>
                                                                </h5>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="flag-img">
                                                    <img src="img/main-walcome-img.webp" class="img-fluid" alt="">
                                                    <div class="nex-prev-btn">
                                                        <button class="prevtab btn btn-success">Save <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                        <button class="nexttab btn btn-success">Preview <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="col-ting">
                                                    <div class="tab-headind-main">
                                                        <form>
                                                            <div class="multi-slider">
                                                                <div class="mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="textHelp"
                                                                        placeholder="Enter Your Text Here..">
                                                                </div>
                                                            </div>
                                                            <div class="select-wrapper">
                                                                <label for="">
                                                                    <h6>Font</h6>
                                                                    <div class="select-wrapper1">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option selected>ROBOTO BOLD</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                </label>
                                                                <div class="color-picker">
                                                                    <label for="color-picker-wrapper">
                                                                        <h6>Color</h6>
                                                                        <img src="img/color-picker.webp"
                                                                            id="color-picker-wrapper" class="img-fluid"
                                                                            alt="">
                                                                    </label>
                                                                </div>
                                                                <div class="color-picker">
                                                                    <label for="color-picker-wrapper">
                                                                        <h6>Stroke</h6>
                                                                        <img src="img/color-picker.webp"
                                                                            id="color-picker-wrapper" class="img-fluid"
                                                                            alt="">
                                                                    </label>
                                                                </div>
                                                                <div class="color-picker">
                                                                    <label for="color-picker-wrapper">
                                                                        <h6>Shadow</h6>
                                                                        <img src="img/color-picker1.webp"
                                                                            id="color-picker-wrapper" class="img-fluid"
                                                                            alt="">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="select-wrapper2">
                                                                <label for="">
                                                                    <h6>Layer Order</h6>
                                                                    <a class="btn" href=""><i
                                                                            class="fa-solid fa-angles-up"></i>
                                                                        <span>Bring Forward</span> </a>
                                                                    <a class="btn" href=""><i
                                                                            class="fa-solid fa-angles-down"></i>
                                                                        <span>Bring Forward</span> </a>
                                                                </label>
                                                                <label for="">
                                                                    <h6>Positions</h6>
                                                                    <a class="btn" href=""><i
                                                                            class="fa-solid fa-angles-up"></i>
                                                                        <span>Bring Forward</span> </a>
                                                                </label>
                                                                <div class="justify">
                                                                    <h6>Justify</h6>
                                                                    <button><img src="img/justify.webp" alt=""></button>
                                                                    <button><img src="img/justify1.webp"
                                                                            alt=""></button>
                                                                    <button><img src="img/justify2.webp"
                                                                            alt=""></button>
                                                                </div>

                                                            </div>
                                                            <div class="range-wrapper">
                                                                <label for="range">
                                                                    <h6> Size</h6>
                                                                    <Input class="range" type="range" name "" value="0"
                                                                        min="1" max="100"
                                                                        onChange="rangeSlide(this.value)"
                                                                        onmousemove="rangeSlide(this.value)"></Input>
                                                                    <span id="rangeValue">0</span>
                                                                </label>
                                                            </div>
                                                            <div class="range-wrapper">
                                                                <label for="range">
                                                                    <h6> Spacing </h6>
                                                                    <Input class="range1 range" type="range" name ""
                                                                        value="0" min="1" max="100"
                                                                        onChange="rangeSlide1(this.value)"
                                                                        onmousemove="rangeSlide1(this.value)"></Input>
                                                                    <span id="rangeValue1">0</span>
                                                                </label>
                                                            </div>
                                                            <div class="range-wrapper">
                                                                <label for="range">
                                                                    <h6> Rotate </h6>
                                                                    <Input class="range2 range" type="range" name ""
                                                                        value="0" min="1" max="100"
                                                                        onChange="rangeSlide(this.value)"
                                                                        onmousemove="rangeSlide2(this.value)"></Input>
                                                                    <span id="rangeValue2">0</span>
                                                                </label>
                                                            </div>
                                                            <div class="range-wrapper">
                                                                <label for="range">
                                                                    <h6> Mirror </h6>
                                                                    <Input class="range3 range" type="range" name ""
                                                                        value="0" min="1" max="100"
                                                                        onChange="rangeSlide(this.value)"
                                                                        onmousemove="rangeSlide3(this.value)"></Input>
                                                                    <span id="rangeValue3">0</span>
                                                                </label>
                                                            </div>
                                                            <div class="range-wrapper">
                                                                <label for="range">
                                                                    <h6> Stretch </h6>
                                                                    <Input class="range4 range" type="range" name ""
                                                                        value="0" min="1" max="100"
                                                                        onChange="rangeSlide(this.value)"
                                                                        onmousemove="rangeSlide4(this.value)"></Input>
                                                                    <span id="rangeValue4">0</span>
                                                                </label>
                                                            </div>
                                                            <div class="range-wrapper">
                                                                <label for="range">
                                                                    <h6> Arc </h6>
                                                                    <Input class="range5 range" type="range" name ""
                                                                        value="0" min="1" max="100"
                                                                        onChange="rangeSlide(this.value)"
                                                                        onmousemove="rangeSlide5(this.value)"></Input>
                                                                    <span id="rangeValue5">0</span>
                                                                </label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="flag-img">
                                                    <img src="img/main-walcome-img.webp" class="img-fluid" alt="">
                                                    <div class="nex-prev-btn">
                                                        <button class="prevtab btn btn-success">Save <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                        <button class="nexttab btn btn-success">Preview <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="col-ting">
                                                    <div class="tab-headind-main">
                                                        <h4>Add Clipart To Your Design</h4>
                                                        <p>Browse our clip art catalog or upload your own design</p>
                                                        <table class="table-fill">
                                                            <tbody class="table-hover">
                                                                <tr>
                                                                    <td class="text-left">Birthday <i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                    <td class="text-left">Special Price <i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">Anniversary<i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                    <td class="text-left">Welcome Home<i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">Party<i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                    <td class="text-left">Voting<i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">Congratulations<i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                    <td class="text-left">Other Generic Templates <i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">Family Reunion <i
                                                                            class="fa-solid fa-arrow-right"></i></td>
                                                                    <td class="text-left"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="flag-img">
                                                    <img src="img/main-walcome-img.webp" class="img-fluid" alt="">
                                                    <div class="nex-prev-btn">
                                                        <button class="prevtab btn btn-success">Save <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                        <button class="nexttab btn btn-success">Preview <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-background" role="tabpanel"
                                        aria-labelledby="pills-background-tab">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="color-handler">
                                                    <div class="tab-headind-main">
                                                        <h4>Backgrounds</h4>
                                                    </div>
                                                    <form>
                                                        <div class="color-picker-plus-color">
                                                            <div class="select-wrapper">
                                                                <div class="color-picker color-picker12">
                                                                    <label for="color-picker-wrapper">
                                                                        <h6>Color</h6>
                                                                        <img src="img/color-picker.webp"
                                                                            id="color-picker-wrapper" class="img-fluid"
                                                                            alt="">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="color-many-color">
                                                                <div class="bGButton">
                                                                    <button class="red"></button>
                                                                    <button class="orange"></button>
                                                                    <button class="yellow"></button>
                                                                    <button class="green"></button>
                                                                    <button class="blue"></button>
                                                                    <button class="purple"></button>
                                                                    <button class="grey"></button>
                                                                    <button class="white"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="main-wrapper">
                                                    <div class="color-wrapper">
                                                        <img src="img/color1.webp" class="img-fluid" alt="">
                                                        <img src="img/color2.webp" class="img-fluid" alt="">
                                                        <img src="img/color3.webp" class="img-fluid" alt="">
                                                        <img src="img/color4.webp" class="img-fluid" alt="">
                                                        <img src="img/color5.webp" class="img-fluid" alt="">
                                                        <img src="img/color6.webp" class="img-fluid" alt="">
                                                        <img src="img/color7.webp" class="img-fluid" alt="">
                                                        <img src="img/color8.webp" class="img-fluid" alt="">
                                                        <img src="img/color9.webp" class="img-fluid" alt="">
                                                        <img src="img/color10.webp" class="img-fluid" alt="">
                                                        <img src="img/color11.webp" class="img-fluid" alt="">
                                                        <img src="img/color12.webp" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="flag-img">
                                                    <img src="img/main-walcome-img.webp" class="img-fluid" alt="">
                                                    <div class="nex-prev-btn">
                                                        <button class="prevtab btn btn-success">Save <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                        <button class="nexttab btn btn-success">Preview <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-final" role="tabpanel"
                                        aria-labelledby="pills-final-tab">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="col-ting">
                                                    <div class="tab-headind-main">
                                                        <h4>Banner Preview</h4>
                                                        <p>cu felis bibendum ut tristique. Elementum facilisis leo vel
                                                            fringilla est ullamcorper. Sed augue lacus viverra vitae
                                                            congue. Sed adipiscin</p>
                                                        <div class="Banner-Preview">
                                                            <div class="art-wrapper">
                                                                <h6>Clip Art</h6>
                                                                <h4>Birthday</h4>
                                                            </div>
                                                            <div class="art-wrapper">
                                                                <h6>Font Size</h6>
                                                                <h4>24 PT</h4>
                                                            </div>
                                                            <div class="art-wrapper">
                                                                <h6>Font Type</h6>
                                                                <h4>Montesarat</h4>
                                                            </div>
                                                        </div>
                                                        <div class="Banner-Preview">
                                                            <div class="art-wrapper">
                                                                <h6>Mirror</h6>
                                                                <h4>36</h4>
                                                            </div>
                                                            <div class="art-wrapper">
                                                                <h6>Stretch</h6>
                                                                <h4>465</h4>
                                                            </div>
                                                            <div class="art-wrapper">
                                                                <h6>Arc</h6>
                                                                <h4>489</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-pills flexwrapper mb-3" id="pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item " role="presentation">
                                                        <button class="nav-link-final" id="pills-profile-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                            type="button" role="tab" aria-controls="pills-profile"
                                                            aria-selected="false">
                                                            <div class="deisgn">
                                                                <h5>Back To Edit <span><i
                                                                            class="fa-solid fa-arrow-right"></i></span>
                                                                </h5>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="view-cart.php"> <button class="nav-link-final">Add To
                                                                Cart <span><i
                                                                        class="fa-solid fa-arrow-right"></i></span></button>
                                                        </a>

                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="flag-img">
                                                    <img src="img/main-walcome-img.webp" class="img-fluid" alt="">
                                                    <!-- <div class="nex-prev-btn">
                                                        <button class="prevtab btn btn-success">Save <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                        <button class="nexttab btn btn-success">Preview <span><i
                                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Design End Here -->

<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->