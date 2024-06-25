 <!-- confirmation Screen -->
 @extends('dashboard.movies.index')
 @section('content')
     <!-- st bc Start -->
     <div class="st_bcc_main_main_wrapper float_left">
         <div class="st_bcc_main_wrapper">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="st_bcc_heading_wrapper float_left"> <i class="fa fa-check-circle"></i>
                             <!-- <h3>Payment of <span>Rs 373.00</span> Complete successfull</h3> -->
                             <h3>Payment Complete successfull</h3>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="st_bcc_ticket_boxes_wrapper float_left" style="background-color: white;">
                             <div class="st_bcc_tecket_top_hesder float_left">
                                 <p>Your Booking is Confirmed!</p>
                             </div>
                             <div class="st_bcc_tecket_bottom_hesder float_left">
                                 <div class="st_bcc_tecket_bottom_left_wrapper">
                                     @if ($Reservation)
                                         <div class="st_bcc_tecket_bottom_inner_left">

                                             <div class="st_bcc_teckt_bot_inner_img">
                                                 <img class="img-confirmation" src="{{ asset($Movie->image) }}"
                                                     alt="img">
                                             </div>
                                             <div class="st_bcc_teckt_bot_inner_img_cont">

                                                 <h4>Movie Name: <span>{{ $Movie->movie_name }}</span></h4>
                                                 <h4>Sinema Hall No: <span>{{ $Show_Movie->sinema_hall_no }}</span> </h4>

                                                 <h4>{{ $Show_Movie->film_release_date }} <span>,</span>
                                                     {{ $Show_Movie->show_time }}
                                                 </h4>
                                             @else
                                                 <h4>Show time not available</h4>
                                     @endif

                                 </div>

                                 <div class="st_purchase_img">
                                     <img src="{{ asset('img/confirmation_screen/pur2.png') }}" alt="img">
                                 </div>
                             </div>
                             <!-- <div class="st_bcc_tecket_bottom_inner_right"> <i class="fas fa-chair"></i>
                                                     <h3>2 TICKETS <br>
                                                         <span>EXECUTIV - K1, K2</span>
                                                     </h3>
                                                 </div> -->
                         </div>
                         <div class="st_bcc_tecket_bottom_right_wrapper">
                             <img src="{{ asset('img/confirmation_screen/qr.png') }}" alt="img">
                             @if ($Reservation)
                                 <h4>Booking ID<br>{{ $Reservation->id }}</h4>
                         </div>
                         <div class="st_bcc_tecket_bottom_left_price_wrapper">
                             <h4>Total Price</h4>

                             <h5>{{ $Reservation->ticketprice }}</h5>
                             @endif
                         </div>
                     </div>
                 </div>
                 <div class="st_bcc_ticket_boxes_bottom_wrapper float_left">
                     <p>You can access your ticket from your Profile. We will send you
                         <br>an e-Mail/SMS Confirmation with in 15 Minutes.
                     </p>

                 </div>
             </div>
         </div>
     </div>
     </div>
     </div>


     <!-- st bc End -->
 @endsection
