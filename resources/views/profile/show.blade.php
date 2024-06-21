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
        margin: 20px;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

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
    </style>
</head>

<body>

    <section>
        <!-- BEGIN: Content-->
        <div class="app-content">
            <div class="app-user-view-account">
                <!-- profile header -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 order-1 order-md-0">
                        <div class="card">
                            <div class="card-body">
                                <!-- profile picture -->
                                <div class="profile-img-container d-flex align-items-center flex-column">
                                    <div class="profile-img">
                                        @if( auth()->user()->image)
                                        <img src=" {{asset('images/'.auth()->user()->image)}}"
                                            class="round img-fluid mt-1 " alt="Card image" />
                                        @else
                                        <img src="{{asset('/img/images/user.jpg')}}" class="round img-fluid mt-1 "
                                            alt="Card image" />
                                        @endif
                                    </div>
                                    <h2 class="text-center">{{auth()->user()->name}}</h2>
                                </div>
                                <!-- admin information -->
                                <div class="info-container">
                                    <h5 class="mb-75">Name</h5>
                                    <p class="card-text">{{auth()->user()->name}}</p>
                                    <div class="mt-2">
                                        <h5 class="mb-75">Email</h5>
                                        <p class="card-text">{{auth()->user()->email}}</p>
                                    </div>
                                    <!-- <div class="mt-2">
                                        <h5 class="mb-75">Phone Number</h5>
                                        <p class="card-text">{{auth()->user()->phone}}</p>
                                    </div>
                                    <div class="mt-2">
                                        <h5 class="mb-75">Address</h5>
                                        <p class="card-text">{{auth()->user()->address}}</p>
                                    </div> -->
                                    <!-- edit button -->
                                    <div class="d-flex justify-content-center pt-2">
                                        <a href="{{route('profile.updateProfile')}}"
                                            class="btn btn-primary btn-full-width mt-2">
                                            <i data-feather="edit" class="d-block d-md-none"></i>
                                            <span class="btn btn-warning fw-bold">Edit Profile</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content-->
    </section>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>


</html>
