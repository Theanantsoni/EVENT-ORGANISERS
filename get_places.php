<?php
require_once "Admin/connection.php";

if (isset($_POST['area_id'])) {

    $areaId = $_POST['area_id'];

    $query = "SELECT * FROM e_place WHERE place_no = $areaId"; // Update with your actual table and column names

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $output .= '<option value="' . $row["place_id"] . '" style="font-size:20px; border-radius:10px; color: red; background-color: #fbff00;">' . $row["place_name"] . '</option>';
    }

    echo $output;
}

?>
