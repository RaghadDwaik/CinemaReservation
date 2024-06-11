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
                        <button class="btn btn-dark">View Movies</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">Reservation</div> <!-- Added bg-dark and text-white classes -->
                    <div class="card-body">
                        <p>View Reservation here.</p>
                        <button class="btn btn-dark">View Reservation</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">Profile</div> <!-- Added bg-dark and text-white classes -->
                    <div class="card-body">
                        <p>Manage your profile here.</p>
                        <button class="btn btn-dark">View Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
