$(document).ready(function () {

    //For Card Number formatted input
    var cardNum = document.getElementById('cr_no');
    cardNum.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
            parts.push(sanitizedValue.substring(i, i + 4));
        }

        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c > '9') {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join('-');
        this.selectionStart = this.selectionEnd = caretPosition;
    }

    //For Date formatted input
    var expDate = document.getElementById('exp');
    expDate.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
            parts.push(sanitizedValue.substring(i, i + 2));
        }

        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c > '9') {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 2);

        this.value = this.lastValue = parts.join('/');
        this.selectionStart = this.selectionEnd = caretPosition;
    }

    // Radio button
    $('.radio-group .radio').click(function () {
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

})

// This function gets the selected value
//The discount percentage is displayed in the designated place
//The total price is calculated and displayed

function getSelectedCoupon() {

    // id select option
    var selectElement = document.getElementById('coupon');
    var selectedCouponId = selectElement.value;
   
    // option value 
    var selectedCouponText = selectElement.options[selectElement.selectedIndex].text;
    var total = document.getElementById('#total'); //id total price
    if(selectedCouponText)
    {
        if(selectedCouponText == "Select Coupon")
       {selectedCouponText=0.0;} 
    
    total_price = 100 - ((selectedCouponText / 100) * 100); //100 = price tiket
    document.querySelector('#total').textContent = total_price; //Show total price
    document.querySelector('#selected_Coupon').textContent = selectedCouponText; //show selected coupon in box

    document.getElementById('coupon_id').value = selectedCouponId;
    document.getElementById('ticketprice').value = total_price;
    
}
else{
    document.getElementById('coupon_id').value = "NULL";
    document.getElementById('ticketprice').value = 100;
}


}



// pay button
