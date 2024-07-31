<?php
// Establish a connection to your MySQL database
include 'Admin/connection.php';

// Retrieve data from AJAX request
$billing_name = $_POST['billing_name'];
$billing_mobile = $_POST['billing_mobile'];
$billing_email = $_POST['billing_email'];
$billing_lname = $_POST['billing_lname'];
$billing_address = $_POST['billing_address'];
$billing_state_id = $_POST['billing_state'];
$billing_city_id = $_POST['billing_city'];
$billing_area_id = $_POST['billing_area'];
$billing_place_id = $_POST['billing_place'];
$billing_date = $_POST['billing_date'];
$billing_time = $_POST['billing_time'];
$billing_rent = $_POST['billing_rent'];
$billing_dectype_id = $_POST['billing_dectype'];
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
$tPrice = $_POST['tPrice'];

// Fetch state name
$state_query = "SELECT state_name FROM e_state WHERE state_id = '$billing_state_id'";
$state_result = mysqli_query($conn, $state_query);
$state_row = mysqli_fetch_assoc($state_result);
$billing_state = $state_row['state_name'];

// Fetch city name
$city_query = "SELECT city_name FROM e_city WHERE city_id = '$billing_city_id'";
$city_result = mysqli_query($conn, $city_query);
$city_row = mysqli_fetch_assoc($city_result);
$billing_city = $city_row['city_name'];

// Fetch area name
$area_query = "SELECT area_name FROM e_area WHERE area_id = '$billing_area_id'";
$area_result = mysqli_query($conn, $area_query);
$area_row = mysqli_fetch_assoc($area_result);
$billing_area = $area_row['area_name'];

// Fetch place name
$place_query = "SELECT place_name FROM e_place WHERE place_id = '$billing_place_id'";
$place_result = mysqli_query($conn, $place_query);
$place_row = mysqli_fetch_assoc($place_result);
$billing_place = $place_row['place_name'];

// Fetch decoration type name
$decoration_query = "SELECT dectype_name FROM e_dectype WHERE dectype_id = '$billing_dectype_id'";
$decoration_result = mysqli_query($conn, $decoration_query);
$decoration_row = mysqli_fetch_assoc($decoration_result);
$billing_dectype = $decoration_row['dectype_name'];
// Check if email and place name exist in the book_form table
$check_existing_query = "SELECT COUNT(*) AS existing_count FROM book_form WHERE u_email = '$billing_email' AND e_place = '$billing_place'";
$check_existing_result = mysqli_query($conn, $check_existing_query);
$existing_row = mysqli_fetch_assoc($check_existing_result);
$existing_count = $existing_row['existing_count'];

// Calculate discount based on existing count
if ($existing_count >= 0) {
    // Apply discount based on existing count
    if ($existing_count == 0) {
        $billing_discount = '5%';
    } elseif ($existing_count == 1) {
        $billing_discount = '10%';
    } elseif ($existing_count == 2) {
        $billing_discount = '15%';
    } elseif ($existing_count == 3) {
        $billing_discount = '20%';
    } elseif ($existing_count == 4) {
        $billing_discount = '25%';
    } else {
        $billing_discount = '30%';
    }

    // Update the discount field in the SQL query
    $discount = $billing_discount;
    
    // $discountedAmount = $payAmount - ($payAmount * $discount / 100); // Calculate discounted amount
    // $payAmount = $discountedAmount; // Update the total amount to be paid after applying the discount
} else {
    // No discount if email and place combination doesn't exist
    $billing_discount = 0;
    $discount = $billing_discount;
}



// SQL query to insert data into book_form table with updated discount
$sql = "INSERT INTO book_form (u_fname, u_lname, u_email, u_contact, u_adddress, e_state, e_city, e_area, e_place, e_date, e_time, e_rprice, e_dectype, e_memnum, e_decprice, e_plan, e_food, em_name, em_email, em_contact, em_place, em_rprice, em_dprice, em_tprice, u_discount)
VALUES ('$billing_name', '$billing_lname', '$billing_email', '$billing_mobile', '$billing_address', '$billing_state', '$billing_city', '$billing_area', '$billing_place', '$billing_date', '$billing_time', '$billing_rent', '$billing_dectype', '$billing_member', '$billing_decprice', '$billing_event', '$billing_food', '$billing_manger', '$billing_memail', '$billing_mcontact', '$billing_mplace', '$billing_rprice', '$billing_dprice', '$tPrice', '$billing_discount')";

if ($conn->query($sql) === TRUE) {
    // If insertion is successful, redirect to bill.php
    header("Location: bill.php?discount=$billing_discount"); // Pass the discount value in the URL
    exit(); // Terminate script after redirection
} else {
    // If insertion fails, return error response
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close database connection
$conn->close();

?>
