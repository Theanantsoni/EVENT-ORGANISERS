<?php
// demo2.php

  require "Admin/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve values from the form
    $ufname = $_POST['fname'];
    $ulname = $_POST['lname'];
    $uemail = $_POST['email'];
    $ucontact = $_POST['contact'];
    $uaddress = $_POST['address'];
    $ustate = $_POST['state'];
    $ucity = $_POST['city'];
    $uarea = $_POST['area'];
    $uplace = $_POST['place'];
    $udate = $_POST['udate'];
    $utime = $_POST['time'];
    $urprice = $_POST['rprice'];
    $udectype = $_POST['decoration'];
    $umemnum = $_POST['memnum'];
    $udprice = $_POST['dprice'];
    $uevent = $_POST['event'];
    $ufood = $_POST['food'];

    $mname = $_POST['mname'];
    $memail = $_POST['memail'];
    $mcontact = $_POST['mcontact'];
    $mplocation = $_POST['mplace'];
    $utprice = $_POST['tprice'];



    // Check if the submitted email exists in the eu_login table
    $check_email_query = "SELECT * FROM eu_login WHERE u_email = '$uemail'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_result) > 0) {
        // Email exists in the database, proceed with form submission

        // Fetch place name
        $place_query = "SELECT place_name FROM e_place WHERE place_id = '$uplace'";
        $place_result = mysqli_query($conn, $place_query);
        $place_row = mysqli_fetch_assoc($place_result);
        $place_name = $place_row['place_name'];

        // Check if the combination of place, date, and time already exists
        $check_event_query = "SELECT * FROM book_form WHERE e_place = '$uplace' AND e_date = '$udate' AND e_time = '$utime'";
        $check_event_result = mysqli_query($conn, $check_event_query);

        if(mysqli_num_rows($check_event_result) > 0) {
            // Event with the same place, date, and time already exists, show alert message
            echo "<script>alert('This event is already booked. Please select another Place, Date, or Time.')</script>";
        } else {
            // Fetch state name
            $state_query = "SELECT state_name FROM e_state WHERE state_id = '$ustate'";
            $state_result = mysqli_query($conn, $state_query);
            $state_row = mysqli_fetch_assoc($state_result);
            $state_name = $state_row['state_name'];

            // Fetch city name
            $city_query = "SELECT city_name FROM e_city WHERE city_id = '$ucity'";
            $city_result = mysqli_query($conn, $city_query);
            $city_row = mysqli_fetch_assoc($city_result);
            $city_name = $city_row['city_name'];

            // Fetch area name
            $area_query = "SELECT area_name FROM e_area WHERE area_id = '$uarea'";
            $area_result = mysqli_query($conn, $area_query);
            $area_row = mysqli_fetch_assoc($area_result);
            $area_name = $area_row['area_name'];

            // Fetch decoration name
            $decoration_query = "SELECT dectype_name FROM e_dectype WHERE dectype_id = '$udectype'";
            $decoration_result = mysqli_query($conn, $decoration_query);
            $decoration_row = mysqli_fetch_assoc($decoration_result);
            $decoration_name = $decoration_row['dectype_name'];

            // Check how many times the user has booked at this place
            $check_booking_query = "SELECT COUNT(*) AS booking_count FROM book_form WHERE u_email = '$uemail' AND e_place = '$uplace'";
            $check_booking_result = mysqli_query($conn, $check_booking_query);
            $booking_row = mysqli_fetch_assoc($check_booking_result);
            $booking_count = $booking_row['booking_count'];

            // Calculate discount based on booking count
            if ($booking_count == 0) {
                $discount = '5%';
            } elseif ($booking_count == 1) {
                $discount = '10%';
            } elseif ($booking_count == 2) {
                $discount = '15%';
            } elseif ($booking_count == 3) {
                $discount = '20%';
            } elseif ($booking_count == 4) {
                $discount = '25%';
            }
              else {
                $discount = '30%';
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Row and Column Borders</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    </style>
</head>
<body>
    <br><br>
        <center>
        <button id="screenshot-btn" class="btn btn-primary" style="background-color: #007bff; border-color: skyblue yellow lightgreen;">
        <i class="bi bi-arrows-fullscreen"></i> Download Payment Bill
    </button>
    </center>
    <br><br>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
            <h1 style="color: red;">-------- Event is Registered Successfully --------</h1>
            <h2 style="color: darkgreen;">-------- <?php echo $place_name; ?> Bill --------</h2>
            <h3 style="color: darkblue;">----- Check This Details -----</h3>
        </div>
    </div><br>
    <!-- Your table with Bootstrap classes and black borders -->
    <table class="table table-bordered">
        
    <!-- User Data -->
    <tr>
        <th style="border: 2px solid black;">First Name</th>
        <td style="border: 2px solid black;"><?php echo $ufname; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Last Name</th>
        <td style="border: 2px solid black;"><?php echo $ulname; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Email</th>
        <td style="border: 2px solid black;"><?php echo $uemail; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Contact Number</th>
        <td style="border: 2px solid black;"><?php echo $ucontact; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Address</th>
        <td style="border: 2px solid black;"><?php echo $uaddress; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">State</th>
        <td style="border: 2px solid black;"><?php echo $state_name; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">City</th>
        <td style="border: 2px solid black;"><?php echo $city_name; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Area</th>
        <td style="border: 2px solid black;"><?php echo $area_name; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Place</th>
        <td style="border: 2px solid black;"><?php echo $place_name; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Date</th>
        <td style="border: 2px solid black;"><?php echo $udate; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Time</th>
        <td style="border: 2px solid black;"><?php echo $utime; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Rent Price</th>
        <td style="border: 2px solid black;"><?php echo $urprice; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Decoration Type</th>
        <td style="border: 2px solid black;"><?php echo $decoration_name; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Number of Members</th>
        <td style="border: 2px solid black;"><?php echo $umemnum; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Decoration Price</th>
        <td style="border: 2px solid black;"><?php echo $udprice; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Event Type</th>
        <td style="border: 2px solid black;"><?php echo $uevent; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Food Choice</th>
        <td style="border: 2px solid black;"><?php echo $ufood; ?></td>
    </tr>
    <!-- Manager Data -->
    <tr>
        <th style="border: 2px solid black;">Manager Name</th>
        <td style="border: 2px solid black;"><?php echo $mname; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Manager Email</th>
        <td style="border: 2px solid black;"><?php echo $memail; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Manager Contact</th>
        <td style="border: 2px solid black;"><?php echo $mcontact; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Manager Place</th>
        <td style="border: 2px solid black;"><?php echo $mplocation; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Total Price</th>
        <td style="border: 2px solid black;"><?php echo $utprice; ?></td>
    </tr>
    <tr>
        <th style="border: 2px solid black;">Discount</th>
        <td style="border: 2px solid black;"><?php echo $discount; ?></td>
    </tr>
</table>
    <center>
    <p style="color: red; font-size: 25px; font-weight: bold;">----- Thanks For Book Your Ticket In <?php echo $place_name; ?> ----- </p><p style="color: darkblue; font-size: 25px; font-weight: bold;"> ----- Using Event Organisers Website ----- </p>
    </center>
    <br><br>
</div>

<!-- SCREENSHOT SCRIPT CODE START-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

            <!-- Your JavaScript code for capturing and downloading the scrolling screenshot -->
            <script>
                document.getElementById("screenshot-btn").addEventListener("click", function() {
                    html2canvas(document.body, {
                        scrollY: -window.scrollY, // Capture entire page even if scrolled
                    }).then(function(canvas) {
                        var screenshot = canvas.toDataURL("image/jpg");

                        // Create a temporary link element for download
                        var downloadLink = document.createElement("a");
                        downloadLink.href = screenshot;
                        downloadLink.download = "scrolling_screenshot.jpg";
                        downloadLink.style.display = "none";
                        document.body.appendChild(downloadLink);

                        // Trigger the download
                        downloadLink.click();

                        // Clean up the link element
                        document.body.removeChild(downloadLink);
                    });
                });
            </script>

            <!-- SCREENSHOT SCRIPT CODE END -->
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



<?php
    }
}
}
?>
