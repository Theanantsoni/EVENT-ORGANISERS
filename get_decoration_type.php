<?php

require_once "Admin/connection.php";

if (isset($_POST['place_id'])) {

	$placeId = $_POST['place_id'];

	// $query = "SELECT * FROM e_place WHERE place_no = $areaId";

	    // $result = mysqli_query($conn, $query);

    // $placeid = mysqli_real_escape_string($conn, $_POST['place_id']); // Sanitize the input

    $query = "SELECT * FROM e_dectype WHERE dectype_no = $placeId"; // Update with your actual table and column names

    $result = mysqli_query($conn, $query);

    // $output = ''; // Initialize $output variable

    // while ($row = mysqli_fetch_assoc($result)) {
    //     $output .= '<option value="' . htmlspecialchars($row["dectype_id"]) . '" style="font-size:20px; border-radius:10px; color: red; background-color: #fbff00;">' . htmlspecialchars($row["dectype_name"]) . '</option>';
    // }

    while ($row = mysqli_fetch_assoc($result)) {

        $output .= '<option value="' . $row["dectype_id"] . '" style="font-size:20px; border-radius:10px; color: red; background-color: #fbff00;">' . $row["dectype_name"] . '</option>';
    }

    echo $output;
}
?>
