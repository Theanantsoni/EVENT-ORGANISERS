<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Form</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<!-- Your HTML form -->
<form action="" method="POST" id="paymentForm">
    <!-- Your form fields here -->
    <input type="text" name="fname" id="ufname" placeholder="First Name">
    <input type="text" name="lname" id="ulname" placeholder="Last Name">
    <input type="text" name="email" id="useremail" placeholder="Email">
    <input type="text" name="contact" id="usercontact" placeholder="Mobile Number">
    <input type="text" name="tprice" id="tprice" placeholder="Total Price">

    <!-- Pay Now button -->
    <button type="button" id="payNow">Pay Now</button>
</form>

<script>
jQuery(document).ready(function($) {
    $('#payNow').click(function(e) {
        e.preventDefault(); // Prevent default form submission

        // Retrieve form data
        var billing_name = $('#ufname').val();
        var billing_mobile = $('#usercontact').val();
        var billing_email = $('#useremail').val();
        var payAmount = parseFloat($('#tprice').val()) || 0; // Default to 0 if NaN

        // Construct Razorpay options
        var options = {
            "key": "",
            "amount": payAmount * 100, // Amount in paisa
            "currency": "INR",
            "name": "Event Management",
            "description": "Payment for event management services",
            "prefill": {
                "name": billing_name,
                "email": billing_email,
                "contact": billing_mobile
            },
            "handler": function(response) {
                // Redirect to success page with payment details
                window.location.href = "payment-success.php?payment_id=" + response.razorpay_payment_id;
            },
            "modal": {
                "ondismiss": function() {
                    // Redirect to failure page if payment is dismissed
                    window.location.href = "payment-failed.php";
                }
            }
        };

        // Initialize Razorpay
        var rzp = new Razorpay(options);

        // Open Razorpay payment form
        rzp.open();
    });
});
</script>

</body>
</html>
