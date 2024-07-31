<?php
require_once "Admin/connection.php";

if (isset($_POST['city_id'])) {

    $cityId = $_POST['city_id'];

    $query = "SELECT * FROM e_area WHERE area_no = $cityId";

    $result = mysqli_query($conn, $query);

    // $output = '<option value="">Select City</option>';


    while ($row = mysqli_fetch_assoc($result)) {

        $output .= '<option value="' . $row["area_id"] . '" style="font-size:20px; border-radius:10px; color: red; background-color: #fbff00;">' . $row["area_name"] . '</option>';
    }

    echo $output;

}

?>


