<html lang="en">
<head>
<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <h1 class="display-4 text-center mt-5 mb-4">Manager Information</h1>
    <?php
    require "connection.php";

    // Fetch manager details from the database
    $sql = "SELECT em_id, em_name, em_email, em_contact, em_location, em_no FROM emp_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row in a table format
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped table-bordered">';
        echo '<thead class="thead-dark"><tr><th style="text-align: center;">ID</th><th style="text-align: center;">Name</th><th style="text-align: center;">Email</th><th style="text-align: center;">Contact</th><th style="text-align: center;">Location</th><th style="text-align: center;">Number</th></tr></thead>';
        echo '<tbody>';
        while($row = $result->fetch_assoc()) {
            echo '<tr><td style="text-align: center;">'.$row["em_id"].'</td><td style="text-align: center;">'.$row["em_name"].'</td><td style="text-align: center;">'.$row["em_email"].'</td><td style="text-align: center;">'.$row["em_contact"].'</td><td style="text-align: center;">'.$row["em_location"].'</td><td style="text-align: center;">'.$row["em_no"].'</td></tr>';
        }
        echo '</tbody></table>';
        echo '</div>';
    } else {
        echo '<p class="text-center">0 results</p>';
    }
    $conn->close();
    ?>
</div>

<!-- Bootstrap JS and jQuery (optional, for some Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



















<?php
// require "connection.php";

// // Fetch manager details from the database
// $sql = "SELECT em_id, em_name, em_email, em_contact, em_location, em_no FROM emp_details";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Output data of each row in a table format
//     echo "<table class='table'>";
//     echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Contact</th><th>Location</th><th>Number</th></tr>";
//     while($row = $result->fetch_assoc()) {
//         echo "<tr><td>".$row["em_id"]."</td><td>".$row["em_name"]."</td><td>".$row["em_email"]."</td><td>".$row["em_contact"]."</td><td>".$row["em_location"]."</td><td>".$row["em_no"]."</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }
// $conn->close();
?>

