<?php
require_once "Admin/connection.php";

$query = "SELECT * FROM e_state";

$result = mysqli_query($conn, $query);

// $output = '<option value="">Select State</option>';

while ($row = mysqli_fetch_assoc($result)) {

    $output .= '<option value="' . $row["state_id"] . '" style="font-size:20px; border-radius:10px; color: red; background-color: #fbff00;">' . $row["state_name"] . '</option>';

}

echo $output;

?>