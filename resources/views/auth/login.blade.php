<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background-color: #1e1e3f;
        background-image: linear-gradient(180deg, rgba(31, 30, 36, 0.9), rgba(18, 17, 25, 0.9)),
            url('/img/images/bg-1.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', Poppins, Arial, Helvetica, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        background-color: rgb(23 19 20);
        background-image: url('/img/images/movies .png');
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        max-width: 400px;
        padding: 30px 30px;
        text-align: center;
        border-radius: 16px;
    }

    .form-check {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
        text-align: left;
    }

    .form-check-input {
        display: none;
    }

    .form-check-label {
        position: relative;
        padding-left: 25px;
        cursor: pointer;
        color: #fff;
    }

    .form-check-label::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 14px;
        height: 14px;
        border: 2px solid #ccc;
        border-radius: 3px;
        background-color: #fff;
    }

    .form-check-input:checked+.form-check-label::before {
        background-color: #f7941d;
        border-color: #f7941d;
    }

    .form-check-input:checked+.form-check-label::after {
        content: '✔';
        position: absolute;
        left: 4px;
        top: 0px;
        font-size: 12px;
        color: #fff;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        color: #fff;
        display: inline-block;
        vertical-align: middle;
        margin-bottom: 10px;
    }

    .form-group input {
        width: 100%;
        padding: 10px 5px;
        border: none;
        border-radius: 5px;
        background-color: #333;
        color: #fff;
    }

    .form-group input:focus {
        background-color: #444;
        color: #fff;
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
    }

    .btn-warning:hover {
        background-color: #e4d804;
        color: #ffffff;
        font-weight: bold;
    }

    .text-warning {
        color: #f7941d;
    }

    .eye-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    h2 {
        margin-bottom: 20px;
        text-align: center;
    }

    .logo img {
        width: 150px;
        margin-bottom: 20px;
    }

    .login-prompt {
        margin-top: 20px;
        text-align: center;
        color: white;
    }

    .login-prompt p {
        margin: 0;
    }

    .password-link {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .password-link:hover {
        color: #f7941d;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="text-center mb-4">
                <img src="/img/logo/logo.png" alt="Cinema Logo" class="img-fluid logo mb-3">
                <h2>Welcome To Cinema</h2>
            </div>

            <!-- Login Form -->
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Remember Me and Forgot Password Link -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember_me">Remember me</label>

                    @if (Route::has('password.request'))
                    <a class="password-link text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-warning ms-3">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

            <div class="login-prompt">
                <p>Don't Have An Account? <a href="{{ route('register') }}" class="text-warning">Register</a></p>
            </div>
        </div>
    </div>
</body>

</html>