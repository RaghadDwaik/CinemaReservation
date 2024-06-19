@extends('AdminPanel.AdminIndex')

@section('title')
    Add Movie
@endsection

@section('content')

{{-- <div class="container">
    <ul>
        @foreach ($coupon as $coupon)
        <li>{{ $coupon->code }} - {{ $coupon->description }} - Save {{ $coupon->discount }}%</li>
        @endforeach
    </ul>
</div> --}}

<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background: url('{{asset('img/background.jpg')}}') no-repeat center center fixed; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg" style="border: none; background-color: rgba(33, 37, 41, 0.8);">
                    <img class="card-img-top" src="{{asset('img/coupon/Coupon-01.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 1.2rem; color: white;">We care for our visitors and from time to time we provide small gifts to them. You are the lucky one today!</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{route('dashboard.movies.movie')}}" class="btn btn-custom">Get it now
                                <i class="fa fa-gem"></i>
                            </a>
                            <a href="{{route('dashboard.movies.movie')}}" class="btn btn-custom-outline" data-dismiss="modal">No, thanks</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg" style="border: none; background-color: rgba(33, 37, 41, 0.8);">
                    <img class="card-img-top" src="{{asset('img/coupon/Coupon-02.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 1.2rem; color: white;">We care for our visitors and from time to time we provide small gifts to them. You are the lucky one today!</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{route('dashboard.movies.movie')}}" class="btn btn-custom">Edit Coupon
                                <i class="fa fa-gem"></i>
                            </a>
                            <a href="{{route('dashboard.movies.movie')}}" class="btn btn-custom-outline" data-dismiss="modal">No, thanks</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="script.js"></script>

@push('styles')
<style>
    .btn-custom,
    .btn-custom-outline {
        background-color: transparent;
        color: white;
        border: 2px solid #228EE5;
        border-radius: 10px;
        padding: 10px 20px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-custom:hover,
    .btn-custom-outline:hover {
        background-color: #0e0d0d80;
        color: #EEC438;
    }
</style>
@endpush

@endsection

@push('styles')
    <link rel="stylesheet" href="style.css">
@endpush

@push('scripts')
    <script src="script.js"></script>
@endpush
