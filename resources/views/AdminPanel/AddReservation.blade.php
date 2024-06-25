@extends('AdminPanel.AdminIndex')

@section('title')
    Add Coupon
@endsection

@section('content')
    <h2 class="mb-4">Add Reservation</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.storeR') }}" method="POST">
            @csrf
            
           

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ticket Price</label>
                <input name="ticketprice" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
           <label for="creationDate" class="form-label">Creation Date</label>
            <input name="creation_date" value="" class="form-control" id="creationDate" rows="3" required>
            </div>

     <div class="mb-3">
    <label for="userId" class="form-label">User Id</label>
    <select name="user_id" class="form-control" id="userId" required>
        <option value="">Select User Id</option>
        @foreach($reservation as $user)
                <option value="{{ $user->id }}">{{ $user->id }}</option>
            @endforeach
       
    </select>
</div>

<div class="mb-3">
    <label for="userId" class="form-label">Coupon Id</label>
    <select name="coupon_id" class="form-control"  required>
        <option value="">Select Coupon Value</option>
        @foreach($reservation as $coupon)
                <option value="{{ $coupon->id }}">{{ $coupon->id }}</option>
            @endforeach
       
    </select>
</div>
            

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Movie Show Id </label>
                <input name="show_movie_id" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add Reservation</button>
            </div>
        </form>
    </div>

    <script>
    // Function to get today's date in yyyy-mm-dd format
    function getCurrentDate() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    // Set the value of the input field to today's date
    document.getElementById('creationDate').value = getCurrentDate();
</script>
@endsection

@section('bottom_button')
    <div class="mb-3 text-center">
        <a href="#" class="btn btn-primary">Add Coupon</a>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="style.css">
@endpush

@push('scripts')
    <script src=""></script>
@endpush
