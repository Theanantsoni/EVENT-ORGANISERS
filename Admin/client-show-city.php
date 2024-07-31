<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <h1 class="display-4 text-center mt-5 mb-4">City Information</h1>
    <?php
    require "connection.php";

    $sql = "SELECT city_id, city_name, city_no FROM e_city";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped table-bordered">';
        echo '<thead class="thead-dark"><tr><th style="text-align: center;">City ID</th><th style="text-align: center;">City Name</th><th style="text-align: center;">City No</th></tr></thead>';
        echo '<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td style="text-align: center;">' . $row["city_id"] . '</td>';
            echo '<td style="text-align: center;">' . $row["city_name"] . '</td>';
            echo '<td style="text-align: center;">' . $row["city_no"] . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
        echo '</div>';
    } else {
        echo '<p class="text-center">0 results</p>';
    }

    mysqli_close($conn);
    ?>
</div>

<!-- Bootstrap JS and jQuery (optional, for some Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>