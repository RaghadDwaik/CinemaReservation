<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background-color: #1e1e3f;
        background-image: linear-gradient(180deg, rgba(31, 30, 36, 0.7), rgba(18, 17, 25, 0.7)), url('/img/images/landing-bg-ww.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', Poppins, Arial, Helvetica, sans-serif;
        /*
        align-items: center; */
        /* display: flex;
        justify-content: center; */
        height: 100vh;
        overflow: auto;
    }



    .card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        background-color: rgb(23 19 20);
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        max-width: 400px;
        padding: 30px 30px;
        text-align: center;
        border-radius: 16px;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* max-height: 100vh; */

    }

    .card .card-body {
        height: auto;
    }

    .profile-img-container {
        background-image: linear-gradient(rgb(255 220 141 / 80%), rgb(255 223 0 / 90%)), url(/img/images/landing-bg-ww.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        margin-bottom: 20px;
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
        height: 184px;
    }

    .profile-img-container h2 {
        color: #ffffff;
        font-weight: bold;
    }

    .profile-img img {
        border-radius: 50%;
        box-shadow: 0 4px 8px 0 rgba(34, 41, 47, 0.12), 0 2px 4px 0 rgba(34, 41, 47, 0.08);
        width: 100px;
        height: 100px;
        margin-top: 10px;
    }

    .btn-primary {
        text-decoration: none !important;
    }

    .btn-full-width {
        width: 100%;
        display: block;
    }

    .btn-warning {
        background-color: #171315;
        color: #ffffff;
        border: 1px solid #e4d804;
        padding: 10px;
        border-radius: 32px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        font-weight: bold;
        margin-top: 26px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .btn-warning:hover {
        background-color: #e4d804;
        color: #ffffff;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        height: 30px;
    }
    </style>
    <section>
        <!-- BEGIN: Content-->
        <div class="app-content">
            <!-- <div class="content-overlay"></div> -->
            <!-- <div class="header-navbar-shadow"></div> -->
            <!-- <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Profile</h2> -->

            <div class="d-flex justify-content-start breadcrumb-wrapper my-2">
                <!-- <nav aria-label="breadcrumb">
                    <h3 class=" content-header-title float-start mb-0">Profile</h3>
                </nav> -->



            </div>
        </div>
        </div>


        <!-- collapse  -->

        <div class="app-user-form-account">

            <!-- profile header -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-5 col-md-6 order-1 order-md-0">
                    <div class="card">
                        <div class="card-body">

                            <!-- profile picture -->

                            <div class="profile-img-container  d-flex align-items-center flex-column   p-2">
                                <form method="POST" action="{{route('profile.updateProfile')}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="profile-img d-flex align-items-center flex-column ">
                                        @if( auth()->user()->image)
                                        <img src="{{asset('images/'.auth()->user()->image)}}"
                                            class="round img-fluid mb-1 d-flex align-items-center" alt="Card image" />

                                        @else
                                        <img src="{{asset('/img/images/user.jpg')}}"
                                            class="round img-fluid d-flex align-items-center" alt="Card image" />

                                        @endif

                                    </div>
                                    <div class="d-flex align-items-center flex-column text-center">
                                        <input type="file" id="modalPermissionName" name="image" class=" choose-file "
                                            placeholder="الصورة" autofocus data-msg="Please enter image" />
                                    </div>
                                    <!-- profile title -->

                            </div>

                            <!-- admin information -->
                            <div class="info-container">
                                <div class="">
                                    <div style="text-align: left;">
                                        <h5 class="">Name</h5>
                                        <input type="text" id="modalPermissionName" name="name"
                                            value="{{ old('name', auth()->user()->name) }}" class="form-control"
                                            placeholder="Enter your name" autofocus
                                            data-msg="Please enter teacher name" />
                                    </div>
                                </div>
                                <div class="">
                                    <div style="text-align: left;">
                                        <h5 class="">Email</h5>
                                        <input type="email" id="modalPermissionName" name="email"
                                            value="{{ old('email', auth()->user()->email) }}" class="form-control"
                                            placeholder="Email" autofocus data-msg="Please enter your email" />
                                    </div>
                                </div>
                                <div class="">
                                    <div style="text-align: left;">
                                        <h5 class="">Password</h5>
                                        <input type="password" id="modalPermissionName" name="password"
                                            class="form-control" placeholder="Password" autofocus
                                            data-msg="Please enter password" />
                                    </div>
                                </div>
                                <div class="">
                                    <div style="text-align: left;">
                                        <h5 class="">Confirm Password</h5>
                                        <input type="password" id="modalPermissionName" name="confirm_password"
                                            class="form-control" placeholder="Confirm Password" autofocus
                                            data-msg="Please enter password" />
                                    </div>
                                </div>
                                <!-- <div class="">
                                    <div style="text-align: left;">

                                        <h5 class="">Phone Number</h5>
                                        <input type="text" id="modalPermissionName" name="phone"
                                            value="{{ old('phone', auth()->user()->phone) }}" class="form-control"
                                            placeholder="Phone Number" autofocus data-msg="Please enter phone" />
                                    </div>
                                </div> -->
                                <!-- <div class="">
                                    <div style="text-align: left;">
                                        <h5 class="">Address</h5>
                                        <input type="text" id="modalPermissionName" name="address"
                                            value="{{ old('address', auth()->user()->address) }}" class="form-control"
                                            placeholder="Address" autofocus data-msg="Please enter address" />
                                    </div>
                                </div> -->

                                <!-- save button -->
                                <a href="{{route('profile.show')}}" class="btn btn-primary btn-full-width">
                                    <i data-feather="edit" class="d-block d-md-none"></i>
                                    <span class="btn btn-warning fw-bold">Save Changes</span>
                                </a>
                            </div>

                        </div>
                    </div>


                </div>
            </div>




        </div>
        <!-- END: Content-->
    </section>

    <!--/ Basic table -->
    <scr src="https://code.jquery.com/jquery-3.6.4.min.js"></scr>
    </body>





</html>
