<!-- Include app -->
<?php include 'inc/app.php'; ?>
<!-- Include app -->
<!-- Style Varieble css  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variables.css">
<link rel="stylesheet" href="css/profile.css">
<!-- Style Varieble css  -->

<!--  profile Start Here -->
<section class="profile-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">My Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"> My Addresses</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">My Orders</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Payment-tab" data-bs-toggle="tab" href="#Payment" role="tab"
                            type="button" aria-controls="Payment" aria-selected="false">My Favorates</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-profile-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="upload-img">
                        <img src="./img/profile.png" class="img-fluid" alt="">
                        <div class="profile-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                    </div>
                    <div class="upload-btn-wrapper">
                        <h4> <span> My</span> Profile</h4>
                        <p>Ornare arcu dui vivamus </p>
                        <a href="" class="btn-profile">
                            Logout <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row hidden-btn">
                                <div class="col-lg-12">
                                    <div class="main-wrapper" id="newpost1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="edit">
                                                    <div class="upload-btn-wrapper profilr-page-wrapper">
                                                        <h4> <span> My</span> Profile</h4>
                                                    </div>
                                                    <a class="btn-profile btn-profile1" id="button"
                                                        href="javascript:void(0)"> Edit
                                                        Profile
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottomborder">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="top-wrapper">
                                                        <div class="field-wrapper">
                                                            <div class="first-name">
                                                                <h5>First Name</h5>
                                                                <h6>James</h6>
                                                            </div>
                                                            <div class="first-name">
                                                                <h5>Last Name</h5>
                                                                <h6>Anderson</h6>
                                                            </div>
                                                            <div class="first-name">
                                                                <h5>Phone</h5>
                                                                <h6>+1 (322) 422 654</h6>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrapper">
                                                            <div class="password ">
                                                                <h5>
                                                                    Primary Email
                                                                </h5>
                                                                <h6>Jamesanderson@gmail.com</h6>
                                                            </div>
                                                            <div class=" password ">
                                                                <h5>
                                                                    Password
                                                                </h5>
                                                                <h6>************ <span> <a href="">Change Password</a>
                                                                    </span></h6>
                                                            </div>
                                                        </div>
                                                        <div class=" field-wrapper">
                                                            <div class="password">
                                                                <h5>
                                                                    Default Address
                                                                </h5>
                                                                <h6>4806 Fittro Street hughes, AR 72348</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row hidden-btn">
                                <div class="col-lg-12">
                                    <form action="">
                                        <div class="main-wrapper-input" id="newpost">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="edit">
                                                        <div class="upload-btn-wrapper profilr-page-wrapper">
                                                            <h4> <span> My</span> Profile</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottomborder">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">First Name
                                                                            <input type="text" id="form-wrapper"
                                                                                placeholder="Write name here..">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Last Name
                                                                            <input type="text" id="form-wrapper"
                                                                                placeholder="Write name here..">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Email Address
                                                                            <input type="email" id="form-wrapper"
                                                                                placeholder="Write email here..">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="inputWithIcon">
                                                                            <label for="form-wrapper">Phone Number
                                                                                <input type="phone" id="form-wrapper"
                                                                                    placeholder="Write number here...">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="edit edit-top">
                                                                        <a class="btn-profile btn-profile1" id="button"
                                                                            href="javascript:void(0)"> Edit
                                                                            Profile
                                                                            <i class="fa-solid fa-arrow-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="edit edit-top">
                                                        <a href="javascript:void(0)">
                                                            <button class="btn1">Save</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h4 class="change-p-heading">Change Password</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="inputWithIcon top-margin">
                                                        <input type="password" placeholder="Enter Your Current Password"
                                                            name="password" id="password4">
                                                        <img src="./img/key.webp" class="img-fluid" alt="">
                                                        <i class="fa fa-eye icon-wrapper" aria-hidden="true"
                                                            id="icon4"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="inputWithIcon">
                                                        <input type="password" placeholder="Enter Your New Password"
                                                            name="password" id="password5">
                                                        <img src="./img/key.webp" class="img-fluid" alt="">
                                                        <i class="fa fa-eye icon-wrapper" aria-hidden="true"
                                                            id="icon5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="inputWithIcon">
                                                        <input type="password" placeholder="Re-Enter Your New Password"
                                                            name="password" id="password6">
                                                        <img src="./img/key.webp" class="img-fluid" alt="">
                                                        <i class="fa fa-eye icon-wrapper" aria-hidden="true"
                                                            id="icon6"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-wrapper" id="delivery">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="table-wrapper main-wrapper">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>OrderNo</th>
                                                        <th>Order Date</th>
                                                        <th>Status</th>
                                                        <th>Payment Status</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">#2108484315459
                                                        </td>
                                                        <td>04-12-22</td>
                                                        <td>Confirm</td>
                                                        <td class="pais-color"> Paid <span> <img
                                                                    src="./img/tablearrow.webp" class="img-fluid"
                                                                    alt=""></span>
                                                        </td>
                                                        <td>$590.00</td>
                                                        <td><img src="./img/device.webp" class="img-fluid" alt=""></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#2108484315459
                                                        </td>
                                                        <td>04-12-22</td>
                                                        <td>Confirm</td>
                                                        <td class="pais-color"> Paid <span> <img
                                                                    src="./img/tablearrow.webp" class="img-fluid"
                                                                    alt=""></span>
                                                        </td>
                                                        <td>$590.00</td>
                                                        <td><img src="./img/device.webp" class="img-fluid" alt=""></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#2108484315459
                                                        </td>
                                                        <td>04-12-22</td>
                                                        <td>Confirm</td>
                                                        <td class="pais-color"> Paid <span> <img
                                                                    src="./img/tablearrow.webp" class="img-fluid"
                                                                    alt=""></span>
                                                        </td>
                                                        <td>$590.00</td>
                                                        <td><img src="./img/device.webp" class="img-fluid" alt=""></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#2108484315459
                                                        </td>
                                                        <td>04-12-22</td>
                                                        <td>Confirm</td>
                                                        <td class="pais-color"> Paid <span> <img
                                                                    src="./img/tablearrow.webp" class="img-fluid"
                                                                    alt=""></span>
                                                        </td>
                                                        <td>$590.00</td>
                                                        <td><img src="./img/device.webp" class="img-fluid" alt=""></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pagination">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link prev  pagelink-second" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true"><i
                                                                        class="fa fa-angle-double-left"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item pageNumber active"><a class="page-link "
                                                                href="#">1</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link"
                                                                href="#">2</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link"
                                                                href="#">3</a>
                                                        </li>
                                                        <li class="page-item pageNumber">
                                                            <a class="page-link next pagelink-second" href="#"
                                                                aria-label="Next">
                                                                <span aria-hidden="true"><i
                                                                        class="fa fa-angle-double-right"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class=table-wrapper1>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="table-wrapper main-wrapper">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Items</th>
                                                        <th>Product Name</th>
                                                        <th>Unit Price</th>
                                                        <th>Stock Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-times" aria-hidden="true"></i>
                                                        </td>
                                                        <td><span> <img src="./img/racipe.webp" class="img-fluid"
                                                                    alt=""></span></td>

                                                        <td>Sweet Treats</td>
                                                        <td class="pais-color1"> $20
                                                        </td>
                                                        <td>In-Stock</td>
                                                        <td>
                                                            <div class="edit1 edit-top1">
                                                                <a href="javascript:void(0)">
                                                                    <button class="btn1">Add To Cart</button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-times" aria-hidden="true"></i>
                                                        </td>
                                                        <td><span> <img src="./img/racipe1.webp" class="img-fluid"
                                                                    alt=""></span></td>

                                                        <td>Sweet Treats</td>
                                                        <td class="pais-color1"> $20
                                                        </td>
                                                        <td>In-Stock</td>
                                                        <td>
                                                            <div class="edit1 edit-top1">
                                                                <a href="javascript:void(0)">
                                                                    <button class="btn1">Add To Cart</button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-times" aria-hidden="true"></i>
                                                        </td>
                                                        <td><span> <img src="./img/racipe2.webp" class="img-fluid"
                                                                    alt=""></span></td>

                                                        <td>Sweet Treats</td>
                                                        <td class="pais-color1"> $20
                                                        </td>
                                                        <td>In-Stock</td>
                                                        <td>
                                                            <div class="edit1 edit-top1">
                                                                <a href="javascript:void(0)">
                                                                    <button class="btn1">Add To Cart</button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pagination">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link prev  pagelink-second" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true"><i
                                                                        class="fa fa-angle-double-left"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item pageNumber active"><a class="page-link "
                                                                href="#">1</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link"
                                                                href="#">2</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link"
                                                                href="#">3</a>
                                                        </li>
                                                        <li class="page-item pageNumber">
                                                            <a class="page-link next pagelink-second" href="#"
                                                                aria-label="Next">
                                                                <span aria-hidden="true"><i
                                                                        class="fa fa-angle-double-right"
                                                                        aria-hidden="true"></i>
                                                                </span>

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Payment" role="tabpanel" aria-labelledby="Payment-tab">
                            <div class="row">
                                <div class="col-lg-11">
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
                                                                        <span></span><span class="custom_radio"></span>
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
                                                                        <span class="question">My Personal Card</span>
                                                                        <span class="answer">**********1239</span>
                                                                    </div>
                                                                </div>
                                                                <div class="radiocheck"></div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-2 col-2 p-0">
                                                                <div class="btn-raio-main">
                                                                    <div class="delete">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
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
                                                            <div class="row align-items-start">
                                                                <div class="col-lg-10">
                                                                    <h4>payment page</h4>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group1">
                                                                                <label
                                                                                    for="formGroupExampleInput">Name</label>
                                                                                <div class="inputWithIcon1">
                                                                                    <input type="name"
                                                                                        class="form-control"
                                                                                        id="formGroupExampleInput"
                                                                                        placeholder="Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group1">
                                                                                <label
                                                                                    for="formGroupExampleInput">Cradit
                                                                                    Card Number</label>
                                                                                <div
                                                                                    class="inputWithIcon1 icon-padding">
                                                                                    <input type="number"
                                                                                        placeholder="Zip Code">
                                                                                    <img src="./img/visacard.webp"
                                                                                        class="img-fluid" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group1">
                                                                                <label
                                                                                    for="exampleFormControlSelect1">Expiration
                                                                                    Month</label>
                                                                                <div class="box">
                                                                                    <select>
                                                                                        <option>MM/YY</option>
                                                                                        <option>MM/YY</option>
                                                                                        <option>MM/YY</option>
                                                                                        <option>MM/YY</option>
                                                                                        <option>MM/YY</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group1">
                                                                                <label
                                                                                    for="formGroupExampleInput">CVV</label>
                                                                                <div
                                                                                    class="inputWithIcon1 img-wrapper1">
                                                                                    <input type="number"
                                                                                        placeholder="CVV">
                                                                                    <img src="./img/craditcard.webp"
                                                                                        class="img-fluid" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group1">
                                                                                <label
                                                                                    for="exampleFormControlSelect1">Country</label>
                                                                                <div class="box">
                                                                                    <select>
                                                                                        <option>United state</option>
                                                                                        <option>United state</option>
                                                                                        <option>United state</option>
                                                                                        <option>United state</option>
                                                                                        <option>United state</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group1">
                                                                                <label
                                                                                    for="formGroupExampleInput">ZIP</label>
                                                                                <div class="inputWithIcon1">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="formGroupExampleInput"
                                                                                        placeholder="ZIP Code">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <a href="">
                                                                                <button class="btn13">ADD
                                                                                    Card</button></a>
                                                                        </div>
                                                                    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  profile end Here -->

<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->