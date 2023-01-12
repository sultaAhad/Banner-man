<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/view-cart.css">
<!--  Start Here -->
<!-- cart-sec start here  -->
<section class="cart-sec">
    <div class="container">
        <div class="cart-heading">
            <div class="main_heading">
                <h6>Your Superhero For Banners And Signs</h6>
                <h2>View <span> Cart</span></h2>
            </div>
        </div>
        <div class="cart-box">
            <div class="cart-top-heading">
                <h5>My Cart</h5>
            </div>
            <div class="order-information">
                <div class="row">
                    <div class="col-md-6">
                        <div class="order-one">
                            <div class="del-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.2" height="12.265"
                                    viewBox="0 0 9.2 12.265">
                                    <g id="Group_8339" data-name="Group 8339" transform="translate(178.025 129)">
                                        <path id="Path_4828" data-name="Path 4828"
                                            d="M-172.252-129a.551.551,0,0,1,.378.643h.137c.531,0,1.062.014,1.593,0a1.275,1.275,0,0,1,1.319,1.317c-.009.227,0,.455,0,.683a.272.272,0,0,1-.311.307h-8.576a.27.27,0,0,1-.31-.307,8.572,8.572,0,0,1,.025-.956,1.218,1.218,0,0,1,1.172-1.036c.567-.009,1.134,0,1.7,0h.148A.552.552,0,0,1-174.6-129Z"
                                            transform="translate(0)" fill="#fff" />
                                        <path id="Path_4829" data-name="Path 4829"
                                            d="M-156.937,7.467h3.677c.348,0,.5.147.5.493q0,3.15,0,6.3a1.959,1.959,0,0,1-1.344,1.933,2.138,2.138,0,0,1-.668.109c-1.441.009-2.883.007-4.324,0a1.972,1.972,0,0,1-1.963-1.561,2.165,2.165,0,0,1-.047-.486q0-3.15,0-6.3c0-.345.15-.492.5-.492Zm-.99,4.42q0-.916,0-1.832a1.239,1.239,0,0,0-.013-.191.5.5,0,0,0-.53-.417.512.512,0,0,0-.474.569q0,1.868,0,3.736a.959.959,0,0,0,.012.155.5.5,0,0,0,.423.413.489.489,0,0,0,.537-.308.858.858,0,0,0,.043-.281C-157.926,13.116-157.927,12.5-157.927,11.887Zm3,.012q0-.928,0-1.856a1.115,1.115,0,0,0-.013-.179.5.5,0,0,0-.47-.418.5.5,0,0,0-.506.357.961.961,0,0,0-.026.249q0,1.832,0,3.664a1.26,1.26,0,0,0,.014.2.493.493,0,0,0,.433.4.507.507,0,0,0,.569-.554C-154.93,13.144-154.931,12.522-154.931,11.9Z"
                                            transform="translate(-16.488 -133.043)" fill="#fff" />
                                    </g>
                                </svg>

                            </div>
                            <div class="order-info">
                                <div class="order-img">
                                    <img src="img/orderone.png" alt="" class="img-fluid">
                                </div>
                                <div class="order-item">
                                    <div class="order-name">
                                        <div class="main_heading">
                                            <h2>Paper Economy</h2>
                                        </div>
                                    </div>
                                    <div class="product-size">
                                        <div class="main_heading">
                                            <h2> H (inches) <span>24 to 60</span></h2>
                                            <h2> W (inches) <span>24 to 36</span></h2>
                                        </div>
                                    </div>
                                    <div class="qty-box">
                                        <div class="quantity-field">
                                            <button class="value-button decrease-button" onclick="decreaseValue(this)"
                                                title="Azalt">-</button>
                                            <div class="number">0</div>
                                            <button class="value-button increase-button"
                                                onclick="increaseValue(this, 5)" title="Arrtır">+
                                            </button>
                                        </div>
                                    </div>
                                    <div class="totalprice">
                                        <h5>Subtotal </h5>
                                        <h2><span>: USD 24.00</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-two">
                            <div class="del-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.2" height="12.265"
                                    viewBox="0 0 9.2 12.265">
                                    <g id="Group_8339" data-name="Group 8339" transform="translate(178.025 129)">
                                        <path id="Path_4828" data-name="Path 4828"
                                            d="M-172.252-129a.551.551,0,0,1,.378.643h.137c.531,0,1.062.014,1.593,0a1.275,1.275,0,0,1,1.319,1.317c-.009.227,0,.455,0,.683a.272.272,0,0,1-.311.307h-8.576a.27.27,0,0,1-.31-.307,8.572,8.572,0,0,1,.025-.956,1.218,1.218,0,0,1,1.172-1.036c.567-.009,1.134,0,1.7,0h.148A.552.552,0,0,1-174.6-129Z"
                                            transform="translate(0)" fill="#fff" />
                                        <path id="Path_4829" data-name="Path 4829"
                                            d="M-156.937,7.467h3.677c.348,0,.5.147.5.493q0,3.15,0,6.3a1.959,1.959,0,0,1-1.344,1.933,2.138,2.138,0,0,1-.668.109c-1.441.009-2.883.007-4.324,0a1.972,1.972,0,0,1-1.963-1.561,2.165,2.165,0,0,1-.047-.486q0-3.15,0-6.3c0-.345.15-.492.5-.492Zm-.99,4.42q0-.916,0-1.832a1.239,1.239,0,0,0-.013-.191.5.5,0,0,0-.53-.417.512.512,0,0,0-.474.569q0,1.868,0,3.736a.959.959,0,0,0,.012.155.5.5,0,0,0,.423.413.489.489,0,0,0,.537-.308.858.858,0,0,0,.043-.281C-157.926,13.116-157.927,12.5-157.927,11.887Zm3,.012q0-.928,0-1.856a1.115,1.115,0,0,0-.013-.179.5.5,0,0,0-.47-.418.5.5,0,0,0-.506.357.961.961,0,0,0-.026.249q0,1.832,0,3.664a1.26,1.26,0,0,0,.014.2.493.493,0,0,0,.433.4.507.507,0,0,0,.569-.554C-154.93,13.144-154.931,12.522-154.931,11.9Z"
                                            transform="translate(-16.488 -133.043)" fill="#fff" />
                                    </g>
                                </svg>

                            </div>
                            <div class="order-info">
                                <div class="order-img">
                                    <img src="img/order2.png" alt="" class="img-fluid">
                                </div>
                                <div class="order-item">
                                    <div class="order-name">
                                        <div class="main_heading">
                                            <h2>Paper Economy</h2>
                                        </div>
                                    </div>
                                    <div class="product-size">
                                        <div class="main_heading">
                                            <h2> H (inches) <span>24 to 60</span></h2>
                                            <h2> W (inches) <span>24 to 36</span></h2>
                                        </div>
                                    </div>
                                    <div class="qty-box">
                                        <div class="quantity-field">
                                            <button class="value-button decrease-button" onclick="decreaseValue(this)"
                                                title="Azalt">-</button>
                                            <div class="number">0</div>
                                            <button class="value-button increase-button"
                                                onclick="increaseValue(this, 5)" title="Arrtır">+
                                            </button>
                                        </div>
                                    </div>
                                    <div class="totalprice">
                                        <h5>Subtotal </h5>
                                        <h2><span>: USD 24.00</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="order-summary">
                            <div class="order-summary-heading">
                                <div class="main_heading">
                                    <h2>Order <span>Summary</span></h2>
                                </div>
                            </div>
                            <div class="shipping-rates">
                                <div class="totalprice">
                                    <h5>Shipping </h5>
                                    <h2><span>: USD 24.00</span></h2>
                                </div>
                                <div class="totalprice">
                                    <h5>Subtotal </h5>
                                    <h2><span>: USD 24.00</span></h2>
                                </div>
                            </div>
                            <div class="taxes-duty">
                                <p>Taxes and discounts will be calculated at checkout</p>
                            </div>
                            <div class="summary-btn">
                                <div class="check-out-btn">
                                    <a href="" class="btn btn-primary">update</a>
                                </div>
                                <div class="check-out-btn">
                                    <a href="payment-detail.php" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-img">
                    <img src="img/border.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- cart-sec end here  -->
<!-- end here -->
<?php include 'inc/footer.php'; ?>