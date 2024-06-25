@extends('AdminPanel.AdminIndex')

@section('title')
    Edit Reservation
@endsection

@section('content')
    <h2 class="mb-4">Edit Reservation</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.updateR', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="ticketPrice" class="form-label">Ticket Price</label>
                <input name="ticketprice" class="form-control" id="ticketPrice" value="{{ $reservation->ticketprice }}" required>
            </div>

            <div class="mb-3">
                <label for="creationDate" class="form-label">Creation Date</label>
                <input name="creation_date" class="form-control" id="creationDate" value="{{ $reservation->creation_date }}" required>
            </div>

            <div class="mb-3">
                <label for="userId" class="form-label">User Id</label>
                <select name="user_id" class="form-control" id="userId" required>
                    <option value="">Select User Id</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $reservation->user_id == $user->id ? 'selected' : '' }}>{{ $user->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="couponId" class="form-label">Coupon Id</label>
                <select name="coupon_id" class="form-control" id="couponId" required>
                    <option value="">Select Coupon Id</option>
                    @foreach($coupons as $coupon)
                        <option value="{{ $coupon->id }}" {{ $reservation->coupon_id == $coupon->id ? 'selected' : '' }}>{{ $coupon->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="showMovieId" class="form-label">Movie Show Id</label>
                <input name="show_movie_id" class="form-control" id="showMovieId" value="{{ $reservation->show_movie_id }}" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update Reservation</button>
            </div>
        </form>
    </div>
@endsection

@section('bottom_button')
    <div class="mb-3 text-center">
        <a href="{{ route('AdminPanel.AddUser') }}" class="btn btn-primary">Add User</a>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="style.css">
@endpush

@push('scripts')
    <script src="script.js"></script>
@endpush
