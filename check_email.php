<?php
// Include your database connection file here
include 'Admin/connection.php';

// Assuming you have a database connection object named $conn

// Check if email is set in POST data
if(isset($_POST['email'])) {
    // Sanitize the email input
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if the submitted email exists in the eu_login table
    $check_email_query = "SELECT * FROM eu_login WHERE u_email = '$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_result) > 0) {
        // Email exists in the database
        echo json_encode(array("exists" => true));
    } else {
        // Email does not exist in the database
        echo json_encode(array("exists" => false));
    }
} else {
    // Email is not set in POST data, handle this case as per your requirements
    echo json_encode(array("error" => "Email not set in POST data"));
}
?>
