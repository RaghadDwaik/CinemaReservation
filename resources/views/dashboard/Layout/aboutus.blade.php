<!-- about-area-->
{{--
@extends('dashboard.movies.index')

@section('content')
<div class="about-us">
    <div class="about-container">
        <h1 class="about-h1">About Us</h1>
        <h2 class="about-h2">Who We Are</h2>
        <p class="about-p">We are a website specialized in selling and booking cinema tickets, dedicated to providing an
            easy and convenient experience for purchasing movie tickets all around the world. We offer our customers the
            opportunity to access the latest movies of all kinds, at competitive prices and high quality.</p>
    </div>

    <div class="about-container">

        <h2 class="about-h2">Why Us</h2>
        <p class="about-p">Because we are considered the best site in history to help you book cinema tickets with the
            highest quality all around the world and at the best prices. Yes, indeed, we are the only platform for
            booking cinema tickets where you will find all types of movies that you have always wanted to
            watch.</p>
    </div>

    <div class="about-container">
        <h2 class="about-h2">What We Offer</h2>
        <ul>
            <li class="about-li">Ticket Booking: We provide a fast and easy-to-use ticket booking system, allowing you
                to reserve your seats anytime from anywhere in the world.</li>

            <li class="about-li">Movie Information: Our site offers comprehensive information about the movies you want
                to watch.
            </li>
        </ul>
    </div>
</div>
 --}}


 @extends('dashboard.movies.index')
 @section('content')
 <section class="py-5" style="margin-top: 130px;">
     <div class="container">
         <!-- About Us Section -->
         <div class="row align-items-center gx-4 mb-5">
             <div class="col-md-5">
                 <div class="ms-md-2 ms-lg-5">
                     <img class="img-fluid rounded-3 border" src="{{asset('img/about-us/about-01.jpg')}}" alt="About Us" style="border: 2px solid #ccc; border-radius: 10px;">
                 </div>
             </div>
             <div class="col-md-6 offset-md-1">
                 <div class="ms-md-2 ms-lg-5">
                     <h2 class="display-5 fw-bold" style="color: #EEC438;">Who We Are</h2>
                     <p class="lead" style="text-align: justify; color: #ffffff; font-size: 1rem;">We are a website specialized in selling and booking cinema tickets, dedicated to providing an easy and convenient experience for purchasing movie tickets all around the world. We offer our customers the opportunity to access the latest movies and series of all kinds, at competitive prices and high quality.</p>
                     <p class="lead mb-0" style="text-align: justify; color: #ffffff; font-size: 1rem;">Because we are considered the best site in history to help you book cinema tickets with the highest quality all around the world and at the best prices. Yes, indeed, we are the only platform for booking cinema tickets where you will find all types of movies and series that you have always wanted to watch.</p>
                 </div>
             </div>
         </div>
         <!-- Why Us Section -->
         <div class="row align-items-center gx-4 mt-5 mb-5">
             <div class="col-md-5 order-md-2">
                 <div class="ms-md-2 ms-lg-5">
                     <img class="img-fluid rounded-3 border" src="{{asset('img/about-us/about-02.jpg')}}" alt="Why Us" style="border: 2px solid #ccc; border-radius: 10px;">
                 </div>
             </div>
             <div class="col-md-6 offset-md-1 order-md-1">
                 <div class="ms-md-2 ms-lg-5">
                     <h2 class="display-5 fw-bold" style="color: #EEC438;">Why Us</h2>
                     <p class="lead" style="text-align: justify; color: #ffffff; font-size: 1rem;">We provide a fast and easy-to-use ticket booking system, allowing you to reserve your seats anytime from anywhere in the world. Our site offers comprehensive information about the movies you want to watch, including reviews, ratings, and plot summaries, helping you choose the best movie to watch.</p>
                 </div>
             </div>
         </div>
         <!-- What We Offer Section -->
         <div class="row align-items-center gx-4 mt-5">
             <div class="col-md-5">
                 <div class="ms-md-2 ms-lg-5">
                     <img class="img-fluid rounded-3 border" src="{{asset('img/about-us/about-03.jpg')}}" alt="What We Offer" style="border: 2px solid #ccc; border-radius: 10px;">
                 </div>
             </div>
             <div class="col-md-6 offset-md-1">
                 <div class="ms-md-2 ms-lg-5">
                     <h2 class="display-5 fw-bold" style="color: #EEC438;">What We Offer</h2>
                     <ul class="lead" style="text-align: justify; color: #ffffff; font-size: 1rem;">
                         <li class="mb-2">Ticket Booking: We provide a fast and easy-to-use ticket booking system, allowing you to reserve your seats anytime from anywhere in the world.</li>
                         <li class="mb-2">Movie Information: Our site offers comprehensive information about the movies you want to watch, including reviews, ratings, and plot summaries, helping you choose the best movie to watch.</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endsection
