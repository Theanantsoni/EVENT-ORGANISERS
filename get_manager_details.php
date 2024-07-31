<?php
require_once "Admin/connection.php";

if (isset($_POST['place_Id'])) {
    $placeId = $_POST['place_Id'];

    $query = "SELECT em_name, em_email, em_contact, em_location FROM emp_details WHERE em_no = $placeId";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        $details = array(
            'em_name' => $row['em_name'],
            'em_email' => $row['em_email'],
            'em_contact' => $row['em_contact'],
            'em_location' => $row['em_location']
        );

        echo json_encode($details);
    } else {
        echo "Error fetching details";
    }
}
?>



