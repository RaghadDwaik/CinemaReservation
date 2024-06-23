@extends('AdminPanel.AdminIndex')

@section('title')
    Edit Coupon
@endsection

@section('content')
    <h2 class="mb-4">Edit Coupon</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.updateC', $coupon->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="code" class="form-label">Coupon Name</label>
                <input type="text" name="code" value="{{ $coupon->code }}" class="form-control"  placeholder="U.N" required>
            </div>
            
            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="text" name="discount" value="{{ $coupon->discount }}" class="form-control"  required>
            </div>

           

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update Coupon</button>
            </div>
        </form>
    </div>
@endsection



@push('styles')
    <link rel="stylesheet" href="style.css">
@endpush

@push('scripts')
    <script src="script.js"></script>
@endpush
