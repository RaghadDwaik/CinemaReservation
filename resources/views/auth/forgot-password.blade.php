<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
        font-family: 'Poppins', sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        background-color: #171315;
        max-width: 400px;
        width: 100%;
        padding: 30px;
        text-align: center;
        border-radius: 16px;
    }

    .form-group {
        margin-bottom: 1rem;
        text-align: left;
    }

    .form-group label {
        color: #fff;
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
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
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="text-center mb-4">
                <img src="/img/logo/logo.png" alt="Cinema Logo" class="logo mb-3">
                <h2>Welcome To Cinema</h2>
            </div>
            <div class="mb-4 text-sm text-gray-600 text-left d-flex-start">
                {{ __(' We will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            @if (session('status'))
            <div class="mb-4 text-sm text-gray-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group mt-3">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-warning">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>