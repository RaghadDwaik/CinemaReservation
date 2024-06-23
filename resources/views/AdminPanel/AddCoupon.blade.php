@extends('AdminPanel.AdminIndex')

@section('title')
    Add Coupon
@endsection

@section('content')
    <h2 class="mb-4">Add Coupon</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.storeC') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Coupon Name</label>
                <input type="text" name="code" class="form-control" id="exampleFormControlInput1"
                     required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Discount</label>
                <input name="discount" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <input name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add Coupon</button>
            </div>
        </form>
    </div>
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
