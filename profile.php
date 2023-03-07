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
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">My Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> My Addresses</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">My Orders</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Payment-tab" data-bs-toggle="tab" href="#Payment" role="tab" type="button" aria-controls="Payment" aria-selected="false">My Favourite</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-profile-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="upload-img">
                        <img src="./img/profile.webp" class="img-fluid" alt="">
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
                                                    <a class="btn-profile btn-profile1" id="button" href="javascript:void(0)"> Edit
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
                                                                <div class="change-password">
                                                                    <h6> ************
                                                                    </h6>
                                                                    <a class="change-btn-wrapper" href="javascript:void(0)">Change
                                                                        Password</a>
                                                                </div>
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
                                                        <div class="col-lg-10">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">First Name </label>
                                                                        <input type="text" id="form-wrapper" placeholder="Write name here..">

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Last Name </label>
                                                                        <input type="text" id="form-wrapper" placeholder="Write name here..">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Email Address </label>
                                                                        <input type="email" id="form-wrapper" placeholder="Write email here..">

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Phone Number</label>
                                                                        <input type="Number" id="form-wrapper" placeholder="Write number here...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-10">
                                                                    <div class="edit edit-top">
                                                                        <a class="btn-profile btn-profile1" id="button" href="javascript:void(0)">
                                                                            Submit
                                                                            <i class="fa-solid fa-arrow-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row hidden-btn">
                                <div class="col-lg-12">
                                    <form action="">
                                        <div class="main-wrapper-input1 main-wrapper-input11">
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
                                                        <div class="col-lg-10">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Current Password
                                                                        </label>
                                                                        <input type="Password" id="form-wrapper" placeholder="Write Password">

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">New Password
                                                                        </label>
                                                                        <input type="password" id="form-wrapper" placeholder="Write Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Confirm New
                                                                            Password</label>
                                                                        <input type="password" id="form-wrapper" placeholder="Write Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-10">
                                                                    <div class="edit edit-top">
                                                                        <a class="btn-profile btn-profile1" id="button" href="javascript:void(0)">
                                                                            Submit
                                                                            <i class="fa-solid fa-arrow-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="address-box address-box1 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="multi-wrapper fitter-street">
                                            <div class="address-wrapper">
                                                <ul>
                                                    <li class='active'>
                                                        <div class="address-default phases-text">
                                                            <a class='active' href="javascript:void(0)">Default</a>
                                                        </div>
                                                        <div class="address-name">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                            <div class="john-heading">
                                                                <h5>John Doe</h5>
                                                                <h6>4806 Fittro Street hughes, <br>
                                                                    AR 72348 </h6>
                                                                <h6> 4806 Fittro Street hughes </h6>
                                                                <h4> <span> Phone: </span> +123456789</h4>
                                                            </div>
                                                            <div class="icon-profile-wrapper">
                                                                <a class="edit-wrapper" href="">
                                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a href="">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="address-default phases-text">
                                                            <a href="javascript:void(0)">Default</a>
                                                        </div>
                                                        <div class="address-name">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                            <div class="john-heading">
                                                                <h5>John Doe</h5>
                                                                <h6>4806 Fittro Street hughes, <br>
                                                                    AR 72348 </h6>
                                                                <h6> 4806 Fittro Street hughes </h6>
                                                                <h4> <span> Phone: </span> +123456789</h4>
                                                            </div>
                                                            <div class="icon-profile-wrapper">
                                                                <a class="edit-wrapper" href="">
                                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a href="">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="address-default phases-text">
                                                            <a href="javascript:void(0)">Default</a>
                                                        </div>
                                                        <div class="address-name">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                            <div class="john-heading">
                                                                <h5>John Doe</h5>
                                                                <h6>4806 Fittro Street hughes, <br>
                                                                    AR 72348 </h6>
                                                                <h6> 4806 Fittro Street hughes </h6>
                                                                <h4> <span> Phone: </span> +123456789</h4>
                                                            </div>
                                                            <div class="icon-profile-wrapper">
                                                                <a class="edit-wrapper" href="">
                                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a href="">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="address-default phases-text">
                                                            <a href="javascript:void(0)">Default</a>
                                                        </div>
                                                        <div class="address-name">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                            <div class="john-heading">
                                                                <h5>John Doe</h5>
                                                                <h6>4806 Fittro Street hughes, <br>
                                                                    AR 72348 </h6>
                                                                <h6> 4806 Fittro Street hughes </h6>
                                                                <h4> <span> Phone: </span> +123456789</h4>
                                                            </div>
                                                            <div class="icon-profile-wrapper">
                                                                <a class="edit-wrapper" href="">
                                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a href="">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="address-default phases-text">
                                                            <a href="javascript:void(0)">Default</a>
                                                        </div>
                                                        <div class="address-name">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                            <div class="john-heading">
                                                                <h5>John Doe</h5>
                                                                <h6>4806 Fittro Street hughes, <br>
                                                                    AR 72348 </h6>
                                                                <h6> 4806 Fittro Street hughes </h6>
                                                                <h4> <span> Phone: </span> +123456789</h4>
                                                            </div>
                                                            <div class="icon-profile-wrapper">
                                                                <a class="edit-wrapper" href="">
                                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a href="">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="address-default phases-text">
                                                            <a href="javascript:void(0)">Default</a>
                                                        </div>
                                                        <div class="address-name">
                                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                            <div class="john-heading">
                                                                <h5>John Doe</h5>
                                                                <h6>4806 Fittro Street hughes, <br>
                                                                    AR 72348 </h6>
                                                                <h6> 4806 Fittro Street hughes </h6>
                                                                <h4> <span> Phone: </span> +123456789</h4>
                                                            </div>
                                                            <div class="icon-profile-wrapper">
                                                                <a class="edit-wrapper" href="">
                                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a href="">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="edit edit-top-wrapper1">
                                            <a class="btn-profile btn-profile1 address-btn-click" id="button" href="javascript:void(0)">
                                                Add New Address
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wrapper-input-address" id="address-wrapper">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="edit">
                                                <div class="upload-btn-wrapper profilr-page-wrapper">
                                                    <h4> <span> Add New </span> Address</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">City</label>
                                                        <input type="text" id="form-wrapper" placeholder="Write City">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">State </label>
                                                        <input type="text" id="form-wrapper" placeholder="Write State">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">Country </label>
                                                        <input type="text" id="form-wrapper" placeholder="Write Country">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">Postal Code</label>
                                                        <input type="Number" id="form-wrapper" placeholder="Write Postal code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="inputWithIcon">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                        <textarea class="form-control" placeholder="Write address here" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="edit edit-top">
                                                        <a class="btn-profile btn-profile1" id="button" href="javascript:void(0)">
                                                            Submit
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="address-wrapper-edit">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="edit">
                                                <div class="upload-btn-wrapper profilr-page-wrapper">
                                                    <h4> <span> Edit New </span> Address</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">City</label>
                                                        <input type="text" id="form-wrapper" placeholder="Write City">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">State </label>
                                                        <input type="text" id="form-wrapper" placeholder="Write State">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">Country </label>
                                                        <input type="text" id="form-wrapper" placeholder="Write Country">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputWithIcon">
                                                        <label for="form-wrapper">Postal Code</label>
                                                        <input type="Number" id="form-wrapper" placeholder="Write Postal code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="inputWithIcon">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                        <textarea class="form-control" placeholder="Write address here" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="edit edit-top">
                                                        <a class="btn-profile btn-profile1" id="button" href="javascript:void(0)">
                                                            Submit
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="table-wrapper" id="delivery">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="table-wrapper ">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>OrderNo</th>
                                                        <th>Order Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td>
                                                            <!-- <a class="order-details-btn" data-toggle="modal" data-target="#exampleModalLong">view Details</a> -->
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="order-details-btns" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                view Details
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td>
                                                            <button type="button" class="order-details-btns" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                view Details
                                                            </button>
                                                            <!-- <a class="view-detail" href="">view Details</a> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td>
                                                            <button type="button" class="order-details-btns" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                view Details
                                                            </button>
                                                            <!-- <a class="view-detail" href="">view Details</a> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td>
                                                            <button type="button" class="order-details-btns" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                view Details
                                                            </button>
                                                            <!-- <a class="view-detail" href="">view Details</a> -->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pagination">
                                                <navbar aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link prev  pagelink-second" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item pageNumber active"><a class="page-link " href="#">1</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item pageNumber">
                                                            <a class="page-link next pagelink-second" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </navbar>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Payment" role="tabpanel" aria-labelledby="Payment-tab">
                            <div class="table-wrapper" id="delivery">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="table-wrapper ">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Product Name</th>
                                                        <th>Price</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row"><img src="img/table-wrapper.webp" class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6 class="papper-heading">Paper Economy</h6>
                                                            <h6 class="inch-table"> <span> HxW (inches) </span> 24
                                                                x 60 </h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="inch-table"> <span> USD </span> 24.00 </h6>
                                                        </td>
                                                        <td><i class="fa-solid fa-trash-can"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><img src="img/table-wrapper.webp" class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6 class="papper-heading">Paper Economy</h6>
                                                            <h6 class="inch-table"> <span> HxW (inches) </span> 24
                                                                x 60 </h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="inch-table"> <span> USD </span> 24.00 </h6>
                                                        </td>
                                                        <td><i class="fa-solid fa-trash-can"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><img src="img/table-wrapper.webp" class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6 class="papper-heading">Paper Economy</h6>
                                                            <h6 class="inch-table"> <span> HxW (inches) </span> 24
                                                                x 60 </h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="inch-table"> <span> USD </span> 24.00 </h6>
                                                        </td>
                                                        <td><i class="fa-solid fa-trash-can"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"><img src="img/table-wrapper.webp" class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6 class="papper-heading">Paper Economy</h6>
                                                            <h6 class="inch-table"> <span> HxW (inches) </span> 24
                                                                x 60 </h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="inch-table"> <span> USD </span> 24.00 </h6>
                                                        </td>
                                                        <td><i class="fa-solid fa-trash-can"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pagination">
                                                <navbar aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link prev  pagelink-second" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item pageNumber active"><a class="page-link " href="#">1</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item pageNumber"><a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item pageNumber">
                                                            <a class="page-link next pagelink-second" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </navbar>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal starts here-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="model-header order-modal">
                                <h5 class="modal-title order-num" id="exampleModalLabel">OrderNo</h5>
                                <h6>Order #1084598423154 was placed on 30 March 2022</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                            <div class="modal-body">
                                <div class="product-deatail-wrapper my-3">
                                    <div class="product-img">
                                        <figure>
                                            <img src="img/slide-banner1.webp" class="img-fluid" alt="">
                                        </figure>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name">Lorem ipsum dolor sit</h5>
                                        <h6 class="product-size">$ 49.00 <span>Category : <small>(shop by benefit)</small></span></h6>
                                        <h4 class="stocks">Quantity : <span style="color:#081a55">(02)</span></h4>
                                    </div>
                                </div>
                                <div class="product-deatail-wrapper my-3">
                                    <div class="product-img">
                                        <figure>
                                            <img src="img/sliderbanner1.webp" class="img-fluid" alt="">
                                        </figure>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name">Lorem ipsum dolor sit</h5>
                                        <h6 class="product-size">$ 49.00 <span>Category : <small>(shop by benefit)</small></span></h6>
                                        <h4 class="stocks">Quantity : <span style="color:#081a55">(02)</span></h4>
                                    </div>
                                </div>
                                <div class="product-deatail-wrapper my-3">
                                    <div class="product-img">
                                        <figure>
                                            <img src="img/slider-img7.webp" class="img-fluid" alt="">
                                        </figure>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name">Lorem ipsum dolor sit</h5>
                                        <h6 class="product-size">$ 49.00 <span>Category : <small>(shop by benefit)</small></span></h6>
                                        <h4 class="stocks">Quantity : <span style="color:#081a55">(02)</span></h4>
                                    </div>
                                </div>
                                <div class="order-details">
                                    <div class="order-details-wrapper mt-5">
                                        <h6><span>Sub Total :</span> <span class="date">$ 147.00</span></h6>
                                        <h6><span>Discount Code Applied :</span> <span class="subtotal">-$ 14.00</span></h6>
                                        <h6><span>Shipping Cost :</span> <span class="tax-fee">$ 69.00</span></h6>
                                        <h6><span>Shipping Address:</span> <span class="shipping-fee">Lorem ipsum dolr sit</span></h6>
                                        <h6><span>Total Amount :</span> <span class="Coupon">$ 150.00</span></h6>
                                    </div>
                                </div>
                                <div class="order-details pb-5">
                                    <div class="order-details-wrapper mt-5">
                                        <button class="btn form-control" onclick="location.href='shop.php'">Continue Shopping</button>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="row">
                                           
                                        </div> -->
                            </div>
                            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
                        </div>
                    </div>
                </div>

                <!-- Modal ends here-->
            </div>
        </div>
    </div>
</section>
<!--  profile end Here -->

<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->