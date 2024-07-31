<?php
// // Include your database connection file here
// include 'Admin/connection.php';

// // Check if place, date, and time are set in POST data
// if(isset($_POST['place']) && isset($_POST['date']) && isset($_POST['time'])) {
//     // Sanitize inputs
//     $place = mysqli_real_escape_string($conn, $_POST['place']);
//     $date = mysqli_real_escape_string($conn, $_POST['date']);
//     $time = mysqli_real_escape_string($conn, $_POST['time']);

//     // Prepare and bind the SQL statement to prevent SQL injection
//     $check_event_query = "SELECT * FROM book_form WHERE e_place = ? AND e_date = ? AND e_time = ?";
//     $stmt = $conn->prepare($check_event_query);
//     $stmt->bind_param("sss", $place, $date, $time);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if($result->num_rows > 0) {
//         // Event exists in the database
//         echo json_encode(array("exists" => true));
//     } else {
//         // Event does not exist in the database
//         echo json_encode(array("exists" => false));
//     }

//     // Close prepared statement and database connection
//     $stmt->close();
//     $conn->close();
// } else {
//     // Required fields are not set in POST data, handle this case as per your requirements
//     echo json_encode(array("error" => "Required fields not set in POST data"));
// }
?>

<?php
// Include your database connection file here
include 'Admin/connection.php';

// Assuming you have a database connection object named $conn

// Check if place, date, and time are set in POST data
if(isset($_POST['place']) && isset($_POST['date']) && isset($_POST['time'])) {
    // Sanitize the inputs
    $placeId = mysqli_real_escape_string($conn, $_POST['place']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);

    // Fetch place name
    $place_query = "SELECT place_name FROM e_place WHERE place_id = '$placeId'";
    $place_result = mysqli_query($conn, $place_query);
    
    if($place_result) {
        $place_row = mysqli_fetch_assoc($place_result);
        $place_name = $place_row['place_name'];

        // Check if the combination of place, date, and time already exists
        $check_event_query = "SELECT * FROM book_form WHERE e_place = '$place_name' AND e_date = '$date' AND e_time = '$time'";
        $check_event_result = mysqli_query($conn, $check_event_query);

        if($check_event_result) {
            if(mysqli_num_rows($check_event_result) > 0) {
                // Event with the same place, date, and time already exists
                echo "exists";
            } else {
                // Event does not exist
                echo "not_exists";
            }
        } else {
            // Error in querying the database for event details
            echo "error";
        }
    } else {
        // Error in querying the database for place details
        echo "error";
    }
} else {
    // place, date, or time is not set in POST data
    echo "error";
}
?>





<?php
// // Include your database connection file here
// include 'Admin/connection.php';

// // Check if place, date, and time are set in POST data
// if(isset($_POST['place']) && isset($_POST['date']) && isset($_POST['time'])) {
//     // Sanitize inputs
//     $place = mysqli_real_escape_string($conn, $_POST['place']);
//     $date = mysqli_real_escape_string($conn, $_POST['date']);
//     $time = mysqli_real_escape_string($conn, $_POST['time']);

//     // Check if the submitted event exists in the book_form table
//     $check_event_query = "SELECT * FROM book_form WHERE e_place = '$place' AND e_date = '$date' AND e_time = '$time'";
//     $check_event_result = mysqli_query($conn, $check_event_query);

//     if(mysqli_num_rows($check_event_result) > 0) {
//         // Event exists in the database
//         $row = mysqli_fetch_assoc($check_event_result);

//         // Fetch place_name based on e_place ID from the place table
//         $place_query = "SELECT place_name FROM e_place WHERE place_id = '$place'";
//         $place_result = mysqli_query($conn, $place_query);
//         $place_row = mysqli_fetch_assoc($place_result);
        
//         echo json_encode(array("exists" => true, "place_name" => $place_row['place_name']));
//     } else {
//         // Event does not exist in the database
//         echo json_encode(array("exists" => false));
//     }
// } else {
//     // Required fields are not set in POST data, handle this case as per your requirements
//     echo json_encode(array("error" => "Required fields not set in POST data"));
// }
?>
