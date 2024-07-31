<?php 
// if(isset($_GET)){
    
//     echo "<pre>";
//     print_r($_GET);
//     echo "</p>";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Bill</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for black border */
        .table {
            border: 2px solid black;
        }

        /* Custom CSS for centering content and adding space */
        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px; /* Space on the left */
            padding-right: 15px; /* Space on the right */
            max-width: 900px; /* Adjust as needed */
        }

        /* Custom CSS for table header background color */
        .table thead th {
            background-color: #007bff; /* Blue */
            color: white;
        }

        /* Custom CSS for alternating row colors */
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray */
        }

        /* Custom CSS for table data color */
        .table tbody td {
            color: #007bff; /* Blue */
        }

        .row {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .logo {
    width: 250px;
    height: 250px;
    
    padding-right: 5%;
}

.content {
    margin-left: 20px; /* Adjust as needed */
    text-align: left;
    padding-left: 15%; /* Adjust padding-left value */
}



    </style>
    
</head>
<body>
        <center><br>
<button id="screenshot-btn" style="background-color: #007bff; padding-right: 20%; font-size: 100%; color: white; padding-left: 20%; border-color: skyblue yellow lightgreen;">
            <i class="bi bi-arrows-fullscreen"></i> Download Payment Bill
        </button>

        </center>
    <div class="container">
            <div class="row">
                <img src="images/eoc.png" class="logo" alt="Logo">
                <div class="content">
                    <h1 style="color: red; font-size: 30px;">Event is Registered Successfully</h1>
                    <h2 style="color: darkgreen; font-size: 25px;"><?php echo isset($_GET['billing_place']) ? getPlaceName($_GET['billing_place']) : ''; ?> Bill</h2>
                    <h3 style="color: darkblue; font-size: 25px;">Check This Details</h3>
                </div>
            </div>
        <!-- Your table with Bootstrap classes and black borders -->
        <table class="table table-bordered">
            <!-- User Data -->
            <tr>
                <th style="border: 2px solid black;">First Name</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_name']) ? $_GET['billing_name'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Last Name</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_lname']) ? $_GET['billing_lname'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Mobile</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_mobile']) ? $_GET['billing_mobile'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Email</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_email']) ? $_GET['billing_email'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Address</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_address']) ? $_GET['billing_address'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">State</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_state']) ? getStateName($_GET['billing_state']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">City</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_city']) ? getCityName($_GET['billing_city']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Area</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_area']) ? getAreaName($_GET['billing_area']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Place</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_place']) ? getPlaceName($_GET['billing_place']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Date</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_date']) ? $_GET['billing_date'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Time</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_time']) ? $_GET['billing_time'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Rent Price</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_rent']) ? $_GET['billing_rent'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Decoration Type</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_dectype']) ? getDecorationTypeName($_GET['billing_dectype']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Number of Members</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_member']) ? $_GET['billing_member'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Decoration Price</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_decprice']) ? $_GET['billing_decprice'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Event Type</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_event']) ? $_GET['billing_event'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Food Choice</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_food']) ? $_GET['billing_food'] : ''; ?></td>
            </tr>
            <!-- Manager Data -->
            <tr>
                <th style="border: 2px solid black;">Manager Name</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_manger']) ? $_GET['billing_manger'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Manager Email</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_memail']) ? $_GET['billing_memail'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Manager Contact</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_mcontact']) ? $_GET['billing_mcontact'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Manager Place</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_mplace']) ? $_GET['billing_mplace'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Rent Price</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_rprice']) ? $_GET['billing_rprice'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Decoration Price</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_dprice']) ? $_GET['billing_dprice'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Total Price</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['payAmount']) ? $_GET['payAmount'] : ''; ?></td>
            </tr>
            <tr>
    <th style="border: 2px solid black;">Discount</th>
    <td style="border: 2px solid black;"><?php 
$discount = isset($_GET['billing_discount']) ? floatval($_GET['billing_discount']) : null;
echo $discount !== null ? $discount . "%" : 'N/A'; 
?>
</td>
</tr>

        </table>

        <center>
            <p style="color: red; font-size: 25px; font-weight: bold;">----- Thanks For Booking Your Ticket In <?php echo isset($_GET['billing_place']) ? getPlaceName($_GET['billing_place']) : ''; ?> ----- </p>
            <p style="color: darkblue; font-size: 25px; font-weight: bold;"> ----- Using Event Organisers Website ----- </p>
        </center>
    </div>
    <!-- SCREENSHOT SCRIPT CODE START-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

            <!-- Your JavaScript code for capturing and downloading the scrolling screenshot -->
            <script>
    document.getElementById("screenshot-btn").addEventListener("click", function() {
        // Hide the button
        this.style.display = 'none';

        html2canvas(document.body, {
            scrollY: -window.scrollY, // Capture entire page even if scrolled
        }).then(function(canvas) {
            var screenshot = canvas.toDataURL("image/jpg");

            // Create a temporary link element for download
            var downloadLink = document.createElement("a");
            downloadLink.href = screenshot;
            downloadLink.download = "scrolling_screenshot.jpg";
            document.body.appendChild(downloadLink);

            // Trigger the download
            downloadLink.click();

            // Clean up the link element
            document.body.removeChild(downloadLink);

            // Show the button again after download is complete
            document.getElementById("screenshot-btn").style.display = 'block';
        });
    });
</script>


            <!-- SCREENSHOT SCRIPT CODE END -->
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php


// Function to fetch state name
function getStateName($state_id) {
    // Perform database connection and execute query to fetch state name
    require "Admin/connection.php";

    $state_query = "SELECT state_name FROM e_state WHERE state_id = '$state_id'";
    $state_result = mysqli_query($conn, $state_query);
    $state_row = mysqli_fetch_assoc($state_result);
    return $state_row['state_name'];
}

// Function to fetch city name
function getCityName($city_id) {
    // Perform database connection and execute query to fetch city name
    require "Admin/connection.php";
    $city_query = "SELECT city_name FROM e_city WHERE city_id = '$city_id'";
    $city_result = mysqli_query($conn, $city_query);
    $city_row = mysqli_fetch_assoc($city_result);
    return $city_row['city_name'];
}

// Function to fetch area name
function getAreaName($area_id) {
    // Perform database connection and execute query to fetch area name
    require "Admin/connection.php";
    $area_query = "SELECT area_name FROM e_area WHERE area_id = '$area_id'";
    $area_result = mysqli_query($conn, $area_query);
    $area_row = mysqli_fetch_assoc($area_result);
    return $area_row['area_name'];
}

// Function to fetch place name
function getPlaceName($place_id) {
    // Perform database connection and execute query to fetch place name
    require "Admin/connection.php";
    $place_query = "SELECT place_name FROM e_place WHERE place_id = '$place_id'";
    $place_result = mysqli_query($conn, $place_query);
    $place_row = mysqli_fetch_assoc($place_result);
    return $place_row['place_name'];
}

// Function to fetch decoration type name
function getDecorationTypeName($dectype_id) {
    // Perform database connection and execute query to fetch decoration type name
    require "Admin/connection.php";
    $decoration_query = "SELECT dectype_name FROM e_dectype WHERE dectype_id = '$dectype_id'";
    $decoration_result = mysqli_query($conn, $decoration_query);
    $decoration_row = mysqli_fetch_assoc($decoration_result);
    return $decoration_row['dectype_name'];
}
?>

