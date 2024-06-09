@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        @foreach ($coupon as $coupon)
        <li>{{ $coupon->code }} - {{ $coupon->description }} - Save {{ $coupon->discount }}%</li>
        @endforeach
    </ul>
</div>
@endsection
