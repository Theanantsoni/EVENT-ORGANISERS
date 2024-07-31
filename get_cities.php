<?php
require_once "Admin/connection.php";

if (isset($_POST['state_id'])) {

    $stateId = $_POST['state_id'];

    $query = "SELECT * FROM e_city WHERE city_no = $stateId";

    $result = mysqli_query($conn, $query);

    // $output = '<option value="">Select City</option>';


    while ($row = mysqli_fetch_assoc($result)) {

        $output .= '<option value="' . $row["city_id"] . '" style="font-size:20px; border-radius:10px; color: red; background-color: #fbff00;">' . $row["city_name"] . '</option>';
    }

    echo $output;

}

?>


