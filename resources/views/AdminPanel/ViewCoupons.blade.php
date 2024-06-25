@extends('AdminPanel.AdminIndex')

@section('content')

<h1>All Coupons</h1>
<div class="d-flex justify-content-between align-items-center mb-3">
    <form class="form-inline">
        <!-- Add your form elements here if needed -->
    </form>
    <a href="{{ route('AdminPanel.AddCoupon') }}" class="btn btn-primary">Add Coupon</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="list-group">
                @foreach ($coupon as $coupon)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{ $coupon->code }} - <strong>{{ $coupon->discount }}%</strong></span>
                        <div class="btn-group" role="group" aria-label="Coupon Actions">
                        <div class="d-flex">
                            <a href="{{ route('AdminPanel.EditCoupon',$coupon->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('AdminPanel.deleteC', $coupon->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="script.js"></script>

@push('styles')
    <style>
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .list-group-item {
            font-size: 18px;
        }
        .btn-group {
            display: flex;
        }
        .btn {
            margin-left: 5px;
        }
    </style>
@endpush

@endsection
