<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET,PUT,PATCH,DELETE');
header("Content-Type: application/json");
header("Accept: application/json");
header('Access-Control-Allow-Headers:Access-Control-Allow-Origin,Access-Control-Allow-Methods,Content-Type');

if (isset($_POST['action']) && $_POST['action'] == 'payOrder') {
    $razorpay_mode = 'test';
    $razorpay_test_key = 'rzp_test_rF4PfasMeADbIc'; //Your Test Key
    $razorpay_test_secret_key = 'B74TJmNEpfiVzaqU5kwrTR2f'; //Your Test Secret Key

    $razorpay_live_key = 'Your_Live_Key';
    $razorpay_live_secret_key = 'Your_Live_Secret_Key';

    if ($razorpay_mode == 'test') {
        $authAPIkey = "Basic " . base64_encode($razorpay_test_key . ":" . $razorpay_test_secret_key);
    } else {
        $authAPIkey = "Basic " . base64_encode($razorpay_live_key . ":" . $razorpay_live_secret_key);
    }

    // Set transaction details
    $order_id = uniqid();

    // Your form fields' data
    $billing_name = $_POST['billing_name'];
    $billing_mobile = $_POST['billing_mobile'];
    $billing_email = $_POST['billing_email'];
    $billing_lname = $_POST['billing_lname'];
    $billing_address = $_POST['billing_address'];
    $billing_state = $_POST['billing_state'];
    $billing_city = $_POST['billing_city'];
    $billing_area = $_POST['billing_area'];
    $billing_place = $_POST['billing_place'];
    $billing_date = $_POST['billing_date'];
    $billing_time = $_POST['billing_time'];
    $billing_rent = $_POST['billing_rent'];
    $billing_dectype = $_POST['billing_dectype'];
    $billing_member = $_POST['billing_member'];
    $billing_decprice = $_POST['billing_decprice'];
    $billing_event = $_POST['billing_event'];
    $billing_food = $_POST['billing_food'];
    $billing_manger = $_POST['billing_manger'];
    $billing_memail = $_POST['billing_memail'];
    $billing_mcontact = $_POST['billing_mcontact'];
    $billing_mplace = $_POST['billing_mplace'];
    $billing_rprice = $_POST['billing_rprice'];
    $billing_dprice = $_POST['billing_dprice'];
    $billing_discount = $_POST['billing_discount'];
    $shipping_name = $_POST['shipping_name'];
    $shipping_mobile = $_POST['shipping_mobile'];
    $shipping_email = $_POST['shipping_email'];
    $paymentOption = $_POST['paymentOption'];
    $payAmount = $_POST['payAmount'];

    // Include your database connection file
    include 'Admin/connection.php';

    // Prepare SQL statement for inserting data into book_form table
    $sql = "INSERT INTO book_form (u_fname, u_lname, u_email, u_contact, u_adddress, e_state, e_city, e_area, e_place, e_date, e_time, e_rprice, e_dectype, e_memnum, e_decprice, e_plan, e_food, em_name, em_email, em_contact, em_place, em_rprice, em_dprice, em_tprice, u_discount)
            VALUES ('$billing_name', '$billing_lname', '$billing_email', '$billing_mobile', '$billing_address', '$billing_state', '$billing_city', '$billing_area', '$billing_place', '$billing_date', '$billing_time', '$billing_rent', '$billing_dectype', '$billing_member', '$billing_decprice', '$billing_event', '$billing_food', '$billing_manger', '$billing_memail', '$billing_mcontact', '$billing_mplace', '$billing_rprice', '$billing_dprice', '$payAmount', '$billing_discount')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // If data insertion is successful, proceed with creating the Razorpay order

        // Construct the order data
        $postdata = array(
            "amount" => $payAmount * 100, // Amount in paisa
            "currency" => "INR",
            "receipt" => "Payment of amount Rs. " . $payAmount,
            "notes" => array(
                "billing_name" => $billing_name,
                "billing_mobile" => $billing_mobile,
                "billing_email" => $billing_email,
                // Add more fields here as required
            )
        );

        // Create the Razorpay order
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.razorpay.com/v1/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postdata),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: ' . $authAPIkey
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $orderRes = json_decode($response);

        if (isset($orderRes->id)) {
            // If order creation is successful, return success response
            echo json_encode(['res' => 'success', 'order_number' => $orderRes->id, 'razorpay_key' => $razorpay_test_key]);
            exit;
        } else {
            // If order creation fails, return error response
            echo json_encode(['res' => 'error', 'info' => 'Error with payment']);
            exit;
        }
    } else {
        // If data insertion fails, return error response
        echo json_encode(['res' => 'error', 'info' => 'Error inserting data into database']);
        exit;
    }
} else {
    echo json_encode(['res' => 'error']);
    exit;
}
?>
