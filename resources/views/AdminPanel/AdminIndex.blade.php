<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin-top: 60px; /* Adjusted for navbar height */
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #343a40;
            padding-top: 70px; /* Adjusted for navbar height + spacing */
            top: 40px; /* Start below the navbar */
            overflow-y: auto; /* Allow sidebar to scroll if content exceeds height */
        }
        .sidebar a {
            color: #ecf0f1;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar bg-dark text-dark">
        <h1>Admin Panel</h1>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('AdminPanel.AdminDashboard') }}">Dashboard</a>
        <a href="{{ route('AdminPanel.ViewUser') }}">Users</a>
        <a href="{{ route('AdminPanel.ViewMovie') }}">Movies</a>
        <a href="{{ route('AdminPanel.ViewCoupons') }}">Coupon</a>
        <a href="#">Reservation</a>
        <a href="{{ route('AdminPanel.Profile') }}">Profile</a>
        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-black text-light" >Logout</button>
                        </form>    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
