<?php

// Assuming you have a database connection established
// Include your database connection code here

require_once "Admin/connection.php";

if (isset($_POST['dec_type'])) {
  $DecType = $_POST['dec_type'];

  // Perform a SQL query to fetch the rent price based on $placeId
  // Replace 'your_table' with the actual table name and adjust the query accordingly
  $query = "SELECT decprice FROM e_decprice WHERE decprice_no = $DecType";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $rentPrice = $row['decprice'];

    // Return the rent price as a response
    echo $rentPrice;
  } else {
    // Handle query error
    echo 'Error fetching decprice price';
  }
} else {
  // Handle invalid request
  echo 'Invalid request';
}
?>
