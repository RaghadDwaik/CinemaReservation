@extends('AdminPanel.AdminIndex')

@section('content')
    <div class="header">
        <h1>Admin Panel</h1>
    </div>
    <div class="container mt-4 pt-4"> <!-- Adjusted margin-top and padding-top -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">User Management</div> <!-- Added bg-dark and text-white classes -->
                    <div class="card-body">
                        <p>Manage your users here.</p>
                        <a href="{{ route('AdminPanel.ViewUser') }}" class="btn btn-dark">View Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">Movies</div> <!-- Added bg-dark and text-white classes -->
                    <div class="card-body">
                        <p>Change your Movies here.</p>
                        <a href="{{ route('AdminPanel.ViewMovie') }}" class="btn btn-dark">View Movies</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">Reservation</div> <!-- Added bg-dark and text-white classes -->
                    <div class="card-body">
                        <p>View Reservation here.</p>
                        <a href="{{ route('AdminPanel.ViewReservation') }}" class="btn btn-dark">View Reservation</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">Coupon</div> <!-- Added bg-dark and text-white classes -->
                    <div class="card-body">
                        <p>Manage your profile here.</p>
                        <a href="{{ route('AdminPanel.ViewCoupons') }}" class="btn btn-dark">View Coupons</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
