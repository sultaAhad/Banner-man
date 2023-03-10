<?php include 'inc/app.php'; ?>

<link rel="stylesheet" href="css/payment-detail.css">

<!-- start here -->

<section class="checkout">
    <div class="container">
        <div class="cart-heading">
            <div class="main_heading main_heading12">
                <h6>Your Superhero For Banners And Signs</h6>
                <h2>Checkout</h2>
            </div>
        </div>
        <form action="thank-you.php">
            <div class="all-cart-forms">
                <div class="top-heading">
                    <h5>Checkout Details</h5>
                </div>
                <div class="all-cart-form">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="add-new-address">
                                    <div class="ship-login">
                                        <div class="main_heading">
                                            <h2>Shipment <span>Details</span></h2>
                                        </div>
                                        <div class="login">
                                            <span><a href="register.php"> Sign-in</a> or continue as a Guest User</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="radio-wrapper">
                                            <h4 class="detail">Payment Details</h4>
                                            <div class="single_address">
                                                <input type="radio" id="address1" class="cutom_radio_btn" checked=""
                                                    name="address_select">
                                                <label for="address1">
                                                    <div class="address_start">
                                                        <div class="detail_information_information">
                                                            <div class="row m-0">
                                                                <div class="col-lg-1 col-sm-1 col-1">
                                                                    <div class="custom_check_box">
                                                                        <div class="for_the_label">
                                                                            <span></span><span
                                                                                class="custom_radio"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-sm-9 col-9">
                                                                    <div class="main-row">
                                                                        <div class="img-wrapper">
                                                                            <img src="./img/visa.webp" class="img-fluid"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="the_row">
                                                                            <span class="question">My Personal
                                                                                Card</span>
                                                                            <span class="answer">**********1239</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="radiocheck"></div>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-2 col-2 p-0">
                                                                    <div class="btn-raio-main">
                                                                        <div class="delete">
                                                                            <i class="fa fa-trash"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <button class="btn-radio"><a
                                                                                href="">Default</a></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                                <div class="single_address">
                                                    <input type="radio" id="address2" class="cutom_radio_btn"
                                                        name="address_select">
                                                    <label for="address2">
                                                        <div class="address_start">
                                                            <div class="detail_information_information">
                                                                <div class="row m-0">
                                                                    <div class="col-lg-1 col-sm-1 col-1">
                                                                        <div class="custom_check_box">
                                                                            <div class="for_the_label">
                                                                                <span></span><span
                                                                                    class="custom_radio"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9 col-sm-9 col-9">
                                                                        <div class="main-row">
                                                                            <div class="img-wrapper">
                                                                                <img src="./img/visa.webp"
                                                                                    class="img-fluid" alt="">
                                                                            </div>
                                                                            <div class="the_row">
                                                                                <span class="question">My Personal
                                                                                    Card</span>
                                                                                <span
                                                                                    class="answer">**********1239</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="radiocheck"></div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-sm-2 col-2 p-0">
                                                                        <div class="btn-raio-main">
                                                                            <div class="delete">
                                                                                <i class="fa fa-trash"
                                                                                    aria-hidden="true"></i>
                                                                            </div>
                                                                            <button class="btn-radio"><a
                                                                                    href="">Default</a></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group12">
                                                        <input type="checkbox" class="checkbox" id="html">
                                                        <label for="html">Add New Card</label>
                                                    </div>
                                                    <div class="form-group check-wrapper">
                                                        <div class="form-tabs adderess-form ">
                                                            <form action="">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="fname">First Name</label>
                                                                            <input type="text" id="fname"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="lname">Last Name</label>
                                                                            <input type="text" id="lname"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone</label>
                                                                            <input type="text" id="phone"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="text" id="email"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address">Address</label>
                                                                            <input type="text" id="address"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="apartmnt">Suite, Apartment, etc
                                                                            </label>
                                                                            <input type="text" id="apartmnt"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="city">City</label>
                                                                            <input type="text" id="city"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="region">Country/Region</label>
                                                                            <input type="text" id="region"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="state">State</label>
                                                                            <input type="text" id="state"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="zip-code">Zip Code</label>
                                                                            <input type="text" id="zip-code"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="exampleCheck1">
                                                                            <label class="form-check-label"
                                                                                for="exampleCheck1">Save Shipping
                                                                                Details</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="payment-detail">
                                                                    <div class="saved-payment-method">
                                                                        <div class="add-new-method">
                                                                            <div class="form-group">
                                                                                <label class="form-check-label"
                                                                                    for="exampleCheck1">Payment
                                                                                    Details</label>
                                                                                <input type="text"
                                                                                    class="form-control __web-inspector-hide-shortcut__"
                                                                                    id="exampleFormControlInput1"
                                                                                    placeholder="Card Number &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;      mm/yy cvc ">
                                                                            </div>
                                                                            <div class="sub-this">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary mb-3">Add
                                                                                    Card</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Saved payments Method -->
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-5">
                                <div class="cart-product-detail">
                                    <div class="all-product-parcel">
                                        <div class="checkout-products">
                                            <div class="products ">
                                                <div class="abt-product">
                                                    <div class="img-box">
                                                        <figure><img src="img/product1.webp" alt="123">
                                                        </figure>
                                                    </div>
                                                    <div class="pro-dtl">
                                                        <h5 class="name">Paper Economy</h5>
                                                        <ul class="variations">
                                                            <li>HxW (inches) <span>24 x 60</span></li>
                                                        </ul>
                                                        <div class="product-price main_heading">
                                                            <h2> USD <span>24.00</span></h2>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="products ">
                                                <div class="abt-product">
                                                    <div class="img-box">
                                                        <figure><img src="img/product2.webp" alt="123">
                                                        </figure>
                                                    </div>
                                                    <div class="pro-dtl">
                                                        <h5 class="name">Paper Economy</h5>
                                                        <ul class="variations">
                                                            <li>HxW (inches) <span>24 x 60</span></li>
                                                        </ul>
                                                        <div class="product-price main_heading">
                                                            <h2> USD <span>24.00</span></h2>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="products ">
                                                <div class="abt-product">
                                                    <div class="img-box">
                                                        <figure><img src="img/product3.webp" alt="123">
                                                        </figure>
                                                    </div>
                                                    <div class="pro-dtl">
                                                        <h5 class="name">Paper Economy</h5>
                                                        <ul class="variations">
                                                            <li>HxW (inches) <span>24 x 60</span></li>
                                                        </ul>
                                                        <div class="product-price main_heading">
                                                            <h2> USD <span>24.00</span></h2>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="products ">
                                                <div class="abt-product">
                                                    <div class="img-box">
                                                        <figure><img src="img/product1.webp" alt="123">
                                                        </figure>
                                                    </div>
                                                    <div class="pro-dtl">
                                                        <h5 class="name">Paper Economy</h5>
                                                        <ul class="variations">
                                                            <li>HxW (inches) <span>24 x 60</span></li>
                                                        </ul>
                                                        <div class="product-price main_heading">
                                                            <h2> USD <span>24.00</span></h2>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="products ">
                                                <div class="abt-product">
                                                    <div class="img-box">
                                                        <figure><img src="img/product2.webp" alt="123">
                                                        </figure>
                                                    </div>
                                                    <div class="pro-dtl">
                                                        <h5 class="name">Paper Economy</h5>
                                                        <ul class="variations">
                                                            <li>HxW (inches) <span>24 x 60</span></li>
                                                        </ul>
                                                        <div class="product-price main_heading">
                                                            <h2> USD <span>24.00</span></h2>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="products ">
                                                <div class="abt-product">
                                                    <div class="img-box">
                                                        <figure><img src="img/product3.webp" alt="123">
                                                        </figure>
                                                    </div>
                                                    <div class="pro-dtl">
                                                        <h5 class="name">Paper Economy</h5>
                                                        <ul class="variations">
                                                            <li>HxW (inches) <span>24 x 60</span></li>
                                                        </ul>
                                                        <div class="product-price main_heading">
                                                            <h2> USD <span>24.00</span></h2>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="all-price-detail">
                                            <div class="item-total">
                                                <h4 class="property">Shipping : </h4>
                                                <h4 class="value">USD 24.00</h4>
                                            </div>
                                            <div class="item-total">
                                                <h4 class="property">Sales Taxes :</h4>
                                                <h4 class="value">USD 24.00</h4>
                                            </div>
                                            <div class="item-total">
                                                <h4 class="property">Subtotal :</h4>
                                                <h4 class="value">USD 24.00</h4>
                                            </div>
                                        </div>
                                        <!-- <div class="order-total">
                                        <h3 class="property">Order Total</h3>
                                        <h3 class="value">$3050.00</h3>
                                    </div> -->
                                    </div>
                                </div>
                                <div class="promo-code-box">
                                    <h5>Promo Code</h5>
                                    <p>If you have a promo code, please apply it below.</p>
                                    <div class="promocode">
                                        <div class="col-auto">
                                            <input type="promocode" class="form-control" id="inputcode2">
                                        </div>
                                        <div class="col-auto">
                                            <a href=""> <button type="submit" class="btn btn-primary mb-3">Apply
                                                    Code</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-last"></div>
                            <div class="col-md-12">
                                <div class="confirm-orderDv">
                                    <div class="form-check ">
                                        <input type="checkbox" class="form-check-input" id="for-checkbox">
                                        <label class="form-check-label" for="exampleCheck1">Proident, sunt in culpa
                                            qui
                                            officia deserunt mollit anim id est
                                            laborum</label>
                                    </div>

                                    <div class="button-checkout">
                                        <a href="thankyou.php" class="btn btn-primary ">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="cart-img">
                    <img src="img/border.webp" alt="" class="img-fluid">
                </div>
            </div>
        </form>
    </div>
</section>
<!-- checkout-section ends here -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>