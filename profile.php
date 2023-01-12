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
                                                                <div class="change-password">
                                                                    <h6> ************
                                                                    </h6>
                                                                    <a class="change-btn-wrapper"
                                                                        href="javascript:void(0)">Change
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
                                                                        <input type="text" id="form-wrapper"
                                                                            placeholder="Write name here..">

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Last Name </label>
                                                                        <input type="text" id="form-wrapper"
                                                                            placeholder="Write name here..">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Email Address </label>
                                                                        <input type="email" id="form-wrapper"
                                                                            placeholder="Write email here..">

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Phone Number</label>
                                                                        <input type="phone" id="form-wrapper"
                                                                            placeholder="Write number here...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-10">
                                                                    <div class="edit edit-top">
                                                                        <a class="btn-profile btn-profile1" id="button"
                                                                            href="javascript:void(0)">
                                                                            Edit
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
                                                                        <input type="text" id="form-wrapper"
                                                                            placeholder="************">

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">New Password
                                                                        </label>
                                                                        <input type="password" id="form-wrapper"
                                                                            placeholder="************">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="inputWithIcon">
                                                                        <label for="form-wrapper">Confirm New
                                                                            Password</label>
                                                                        <input type="password" id="form-wrapper"
                                                                            placeholder="Write email here..">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-10">
                                                                    <div class="edit edit-top">
                                                                        <a class="btn-profile btn-profile1" id="button"
                                                                            href="javascript:void(0)">
                                                                            Add New Address
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
                                                        <i class="fa-solid fa-trash-can"></i>
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
                                                        <i class="fa-solid fa-trash-can"></i>
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
                                                        <i class="fa-solid fa-trash-can"></i>
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
                                                        <i class="fa-solid fa-trash-can"></i>
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
                                                        <i class="fa-solid fa-trash-can"></i>
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
                                                        <i class="fa-solid fa-trash-can"></i>
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
                                        <a class="btn-profile btn-profile1" id="button" href="javascript:void(0)">
                                            Add New Address
                                        </a>
                                    </div>
                                </div>
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
                                                        <td><a class="view-detail" href="">view Details</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td><a class="view-detail" href="">view Details</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td><a class="view-detail" href="">view Details</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">#1084598423154
                                                        </td>
                                                        <td>04-12-21</td>
                                                        <td>Confirm</td>
                                                        <td>$590.00</td>
                                                        <td><a class="view-detail" href="">view Details</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pagination">
                                                <navbar aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link prev  pagelink-second" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true"><i class="fa fa-angle-left"
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
                                                                <span aria-hidden="true"><i class="fa fa-angle-right"
                                                                        aria-hidden="true"></i>
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
                                                        <td scope="row"><img src="img/table-wrapper.png"
                                                                class="img-fluid" alt="">
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
                                                        <td scope="row"><img src="img/table-wrapper.png"
                                                                class="img-fluid" alt="">
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
                                                        <td scope="row"><img src="img/table-wrapper.png"
                                                                class="img-fluid" alt="">
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
                                                        <td scope="row"><img src="img/table-wrapper.png"
                                                                class="img-fluid" alt="">
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
                                                            <a class="page-link prev  pagelink-second" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true"><i class="fa fa-angle-left"
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
                                                                <span aria-hidden="true"><i class="fa fa-angle-right"
                                                                        aria-hidden="true"></i>
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
            </div>
        </div>
    </div>
</section>
<!--  profile end Here -->

<!-- Include Footer -->
<?php include 'inc/footer.php'; ?>
<!-- Include Footer -->