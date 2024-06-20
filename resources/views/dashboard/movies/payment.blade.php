<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movfix </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/paymentstyle.css') }}">

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2 col-lg-8">
                <div class="card card0 rounded-0">
                    <div class="row">
                        <div class="col-md-5 d-md-block d-none p-0 box">
                            <div class="card rounded-0 border-0 card1" style=" background-color:#EEC438 ;" id="bill">
                                <h3 id="heading1">Payment Summary</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-7 col-8 mt-4">
                                        <h2 class="bill-head">Ticket price</h2>
                                        <small class="bill-price">100 TL</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7 col-8 mt-4 ">
                                        <h2 class="bill-head">Selected Coupon</h2>
                                        <small class="bill-price"> <span id="selected_Coupon">No selected
                                                yet</span>%</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 red-bg">
                                        <p class="bill-price" id="total-label" style="color: #EEC438; 
                                        font-size: 28px;
                                        font-weight: bold;">Total Price </p>
                                        <h2 class="bill-head" id="total" style="color: white; 
                                        font-size: 24px;
                                        font-weight: bold;">100 TL</h2>
                                        <!-- <small class="bill-price" id="total-label">Price includes all taxes</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12 p-0 box">
                            <div class="card rounded-0 border-0 card2" id="paypage" style="background: whitesmoke;">
                                <div class="form-card">
                                    <h2 id="heading2"> Payment Details</h2>
                                    <!-- <div class="radio-group">
			                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
			                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/5QFsx7K.jpg" width="200px" height="60px"></div>
			                        <br>
			                    </div> -->
                                    <label class="pay">Name on Card</label>
                                    <input type="text" name="holdername" placeholder="John Smith">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="pay"> Card Number </label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="cardno" id="cr_no"
                                                placeholder="0000-0000-0000-0000" minlength="19" maxlength="19">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8 col-md-6">
                                            <label class="pay">Expiration Date</label>
                                            <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5"
                                                maxlength="5">
                                        </div>
                                        <div class="col-4 col-md-6">
                                            <label class="pay">CVV</label>
                                            <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;"
                                                class="placeicon" minlength="3" maxlength="3">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4 col-md-6">
                                            <label class="pay" for=" ">Coupon</label>
                                            <select id="coupon" name="coupon" onchange="getSelectedCoupon()">
                                                <option value=" ">Select Coupon</option>

                                                @foreach($coupon as $item)
                                                <option value="{{$item ->discount}}">Coupon code : {{$item->discount}} %
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/payment.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    function getSelectedCoupon() {
        // This function gets the selected value
        //The discount percentage is displayed in the designated place
        //The total price is calculated and displayed
        var selected = document.getElementById('#selected_Coupon'); //id selected Coupon
        var total = document.getElementById('#total'); //id total price
        selectElement = document.querySelector('#coupon');
        output = selectElement.value;
        document.querySelector('#selected_Coupon').textContent = output;
        total_price = 100 - ((output / 100) * 100); //100 = price tiket
        document.querySelector('#total').textContent = total_price; //Show total price
    }
    </script>
</body>