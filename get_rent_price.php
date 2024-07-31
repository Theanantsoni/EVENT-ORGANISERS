<?php

// Assuming you have a database connection established
// Include your database connection code here

require_once "Admin/connection.php";

if (isset($_POST['place_id'])) {
  $placeId = $_POST['place_id'];

  // Perform a SQL query to fetch the rent price based on $placeId
  // Replace 'your_table' with the actual table name and adjust the query accordingly
  $query = "SELECT rent FROM e_rent WHERE rent_no = $placeId";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $rentPrice = $row['rent'];

    // Return the rent price as a response
    echo $rentPrice;
  } else {
    // Handle query error
    echo 'Error fetching rent price';
  }
} else {
  // Handle invalid request
  echo 'Invalid request';
}
?>
