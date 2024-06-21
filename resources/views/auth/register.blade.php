<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background-color: #1e1e3f;
        background-image: linear-gradient(180deg, rgba(31, 30, 36, 0.9), rgba(18, 17, 25, 0.9)), url('/img/images/bg-1.jpg');
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
        text-align: left;
    }

    .form-check-input {
        display: none;
    }

    .form-check-label {
        position: relative;
        padding-left: 25px;
        cursor: pointer;
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
        font-size: 14px;
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
        /* color: #171315; */
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
    </style>
</head>


<body>
    <div class="container">
        <div class="card">
            <div class="text-center mb-4">
                <img src="/img/logo/logo.png" alt="Cinema Logo" class="img-fluid logo  mb-3">
                <h2>Welcome To Cinema</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        placeholder="Your Name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="age">Your Age:</label>
                    <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age"
                        placeholder="Your Age" value="{{ old('age') }}" required>
                    @error('age')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Your Phone:</label>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                        placeholder="Your Phone Number" value="{{ old('phone') }}" required>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="username@gmail.com" value="{{ old('email') }}" required
                        autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Your Password:</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="Your Password" required autocomplete="new-password">
                    <i class="fa fa-eye eye-icon" onclick="togglePassword('password')"
                        style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Your Password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Your Password" required autocomplete="new-password">
                    <i class="fa fa-eye eye-icon" onclick="togglePassword('password_confirmation')"
                        style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                </div>
                <div class="form-check mb-3">

                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                    <label class="form-check-label text-white" for="terms">
                        I agree with <a href="#" class="text-warning">terms and conditions</a>
                    </label>
                </div>
                <div class="login-prompt">
                    <p>Do You Have Account Already? <a href="{{ route('login') }}" class="text-warning">Login</a></p>
                </div>
                <button type="submit" class="btn btn-warning">Register</button>
            </form>
        </div>
    </div>

    <script>
    function togglePassword(id) {
        var element = document.getElementById(id);
        if (element.type === "password") {
            element.type = "text";
        } else {
            element.type = "password";
        }
    }
    </script>
</body>

</html>
