<?php
// Include your database connection
require_once 'Admin/connection.php';

if (isset($_POST['billing_email']) && isset($_POST['billing_place']) && isset($_POST['payAmount'])) {
    // Sanitize input
    $billing_email = mysqli_real_escape_string($conn, $_POST['billing_email']);
    $billing_place_id = mysqli_real_escape_string($conn, $_POST['billing_place']);
    $payAmount = floatval($_POST['payAmount']);

    // Check for empty values
    if (empty($billing_email) || empty($billing_place_id) || empty($payAmount)) {
        echo json_encode(array('error' => 'Please provide all required information.'));
        exit;
    }

    // Fetch place name
    $place_query = "SELECT place_name FROM e_place WHERE place_id = '$billing_place_id'";
    $place_result = mysqli_query($conn, $place_query);

    if ($place_result && mysqli_num_rows($place_result) > 0) {
        $place_row = mysqli_fetch_assoc($place_result);
        $billing_place = $place_row['place_name'];

        // Check if email and place name exist in the book_form table
        $check_existing_query = "SELECT COUNT(*) AS existing_count FROM book_form WHERE u_email = '$billing_email' AND e_place = '$billing_place'";
        $check_existing_result = mysqli_query($conn, $check_existing_query);

        // Check if the query executed successfully
        if ($check_existing_result) {
            // Fetch the row
            $existing_row = mysqli_fetch_assoc($check_existing_result);
            $existing_count = $existing_row['existing_count'];

            // Calculate discount based on existing count
            if ($existing_count >= 0) {
                // Apply discount based on existing count
                if ($existing_count == 0) {
                    $billing_discount = 5;
                } elseif ($existing_count == 1) {
                    $billing_discount = 10;
                } elseif ($existing_count == 2) {
                    $billing_discount = 15;
                } elseif ($existing_count == 3) {
                    $billing_discount = 20;
                } elseif ($existing_count == 4) {
                    $billing_discount = 25;
                } else {
                    $billing_discount = 30;
                }

                // Calculate discounted amount
                $discount = $billing_discount / 100;
                $discountedAmount = $payAmount - ($payAmount * $discount);

                // Prepare response data
                $response = array(
                    'discount' => $billing_discount,
                    'discountedAmount' => $discountedAmount,
                    'billing_place' => $billing_place
                );

                // Return JSON response
                echo json_encode($response);
            } else {
                // No discount if email and place combination doesn't exist
                $billing_discount = 0;

                // Prepare response data
                $response = array(
                    'discount' => $billing_discount,
                    'billing_place' => $billing_place
                );

                // Return JSON response
                echo json_encode($response);
            }
        } else {
            // Error in executing the query
            echo json_encode(array('error' => 'Error executing the query'));
        }
    } else {
        // Error in fetching place name
        echo json_encode(array('error' => 'Error fetching place name'));
    }
} else {
    // Missing parameters
    echo json_encode(array('error' => 'Missing parameters'));
}
?>
