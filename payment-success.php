<?php 
// if(isset($_GET)){
    
//     echo "<pre>";
//     print_r($_GET);
//     echo "</p>";
// }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
    
    <!-- Download script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{margin-top:20px;
background-color: #f7f7ff;
}
#invoice {
    padding: 0px;
}

.invoice {
    position: relative;
    background-color: #fff;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #0d6efd
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #0d6efd
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,
.invoice table th {
    padding: 15px;
    background: #f0f0f5;
    border-bottom: 1px solid #fff;
    text-align: center;
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #0d6efd;
    font-size: 1.2em
}

.invoice table .qty,
.invoice table .total,
.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #0d6efd
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #0d6efd;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.invoice table tfoot tr:last-child td {
    color: #0d6efd;
    font-size: 1.4em;
    border-top: 1px solid #0d6efd
}

.invoice table tfoot tr td:first-child {
    border: none;
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0;
}

@media print {
    .invoice {
        font-size: 11px !important;
        overflow: hidden !important
    }
    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always;
    }
    .invoice>div:last-child {
        page-break-before: always
    }
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}

.notice-container {
    white-space: nowrap;
}

.notice {
    display: inline-block;
    margin-right: 10px; /* Optional: Add margin between the divs */
}


</style>

<!-- When refresh the page then time will be not changed -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Check if time is stored in local storage
        var storedTime = localStorage.getItem('storedTime');
        if (storedTime) {
            // Use stored time if available
            updateTimeDisplay(storedTime);
        } else {
            // Get current time and store it in local storage
            var currentTime = new Date().toLocaleTimeString('en-US', { hour12: true });
            localStorage.setItem('storedTime', currentTime);
            updateTimeDisplay(currentTime);
        }
    });

    function updateTimeDisplay(time) {
        // Update time elements in the DOM
        $('.time').text('Time : ' + time);
    }
</script>

<body>
    <div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    <div class="text-end">
                        <center>
<button type="button" id="screenshot-btn" class="btn btn-success">
    <i class="bi bi-download"></i>&nbsp; Download Payment Bill
</button>
                        </center>
                    </div>
                    <hr>
                </div>
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                                <div class="col" style="padding-bottom: 10px;">
                                    <a href="javascript:;">
                                                    <img src="images/eoc.png" width="175px;" alt="">
                                                </a>
                                </div>
                                <div class="col company-details" style="padding-top: 15px;">
                                    <h2 class="name"><?php echo isset($_GET['billing_place']) ? getPlaceName($_GET['billing_place']) : ''; ?></h2>
                                    <div><a style="color:red">Location:</a>&nbsp;<?php echo isset($_GET['billing_mplace']) ? $_GET['billing_mplace'] : ''; ?></div>
                                    <div><a style="color:red">Contact No:</a>&nbsp;<?php echo "+91 "; echo isset($_GET['billing_mcontact']) ? $_GET['billing_mcontact'] : ''; ?></div>
                                    <div><a style="color:red">Email ID:</a>&nbsp;<?php echo isset($_GET['billing_memail']) ? $_GET['billing_memail'] : ''; ?></div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <h4 class="to">Event Book By : </h4>
                                    <div class="text-gray-light"><?php echo isset($_GET['billing_name']) ? $_GET['billing_name'] : ''; echo '&nbsp;'; echo isset($_GET['billing_lname']) ? $_GET['billing_lname'] : ''; ?></div>
                                    <div class="address"><?php echo isset($_GET['billing_address']) ? $_GET['billing_address'] : ''; ?></div>
                                    <div class="email"><a href=""><?php echo isset($_GET['billing_email']) ? $_GET['billing_email'] : ''; ?></a>
                                    </div>
                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id" style="Font-size: 15px;">Payment ID : <?php echo isset($_GET['order_id']) ? $_GET['order_id'] : ''; ?></h1>
                                    <div class="date">Date of Payment : <?php echo date("d-m-Y"); ?></div>
                                    <div class="time"><?php
date_default_timezone_set("Asia/Kolkata"); // Set the timezone to Indian Standard Time (IST)

echo "Time : " . date("h:i:sa"); // Display the time in hours:minutes:seconds AM/PM format
?>
</div>
                                </div>
                            </div>
                            <!-- Your table with Bootstrap classes and black borders -->
        <table class="table table-bordered">
            <!-- User Data -->
            <tr>
                <th style="border: 2px solid black;"><strong>First Name :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_name']) ? $_GET['billing_name'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Last Name :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_lname']) ? $_GET['billing_lname'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Mobile :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_mobile']) ? $_GET['billing_mobile'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Email :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_email']) ? $_GET['billing_email'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Address :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_address']) ? $_GET['billing_address'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>State :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_state']) ? getStateName($_GET['billing_state']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>City :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_city']) ? getCityName($_GET['billing_city']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Area :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_area']) ? getAreaName($_GET['billing_area']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Place :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_place']) ? getPlaceName($_GET['billing_place']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Date :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_date']) ? $_GET['billing_date'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Time :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_time']) ? $_GET['billing_time'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Rent Price :</strong></th>
                <td style="border: 2px solid black;"><?php echo "Rs. "; echo isset($_GET['billing_rent']) ? $_GET['billing_rent'] : ''; echo "/- Only"; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Decoration Type :</strong></th>
                <td style="border: 2px solid black;"><?php  echo isset($_GET['billing_dectype']) ? getDecorationTypeName($_GET['billing_dectype']) : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Number of Members :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_member']) ? $_GET['billing_member'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Decoration Price :</strong></th>
                <td style="border: 2px solid black;"><?php echo "Rs. "; echo isset($_GET['billing_decprice']) ? $_GET['billing_decprice'] : ''; echo "/- Only"; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Event Type :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_event']) ? $_GET['billing_event'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Food Choice :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_food']) ? $_GET['billing_food'] : ''; ?></td>
            </tr>
            <!-- Manager Data -->
            <tr>
                <th style="border: 2px solid black;"><strong>Manager Name :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_manger']) ? $_GET['billing_manger'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Manager Email :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_memail']) ? $_GET['billing_memail'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Manager Contact :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_mcontact']) ? $_GET['billing_mcontact'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Place Location :</strong></th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_mplace']) ? $_GET['billing_mplace'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Total Amount :</strong></th>
                <td style="border: 2px solid black;">
                    <?php 
                        $rentPrice = isset($_GET['billing_rent']) ? floatval($_GET['billing_rent']) : 0;
                        $decorationPrice = isset($_GET['billing_decprice']) ? floatval($_GET['billing_decprice']) : 0;
                        $totalAmount = $rentPrice + $decorationPrice;
                        echo "Rs. ";
                        echo $totalAmount;
                        echo "/- Only";
                    ?>
                </td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Pay Amount :</strong></th>
                <td style="border: 2px solid black;"><?php echo "Rs. "; echo  isset($_GET['payAmount']) ? $_GET['payAmount'] : ''; echo "/- Only"; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;"><strong>Discount :</strong></th>
                <td style="border: 2px solid black;">
                    <?php 
                        $discount = isset($_GET['billing_discount']) ? floatval($_GET['billing_discount']) : null;
                        echo $discount !== null ? $discount . "%" : 'N/A';  echo " Only";
                    ?>
                </td>
            </tr>

        </table>
            <div class="notices">
                                
                <div class="notice-container">
    <div class="notice" style="color: red; font-size: 20px; font-weight: bold;">Thanks For Booking Your Ticket In <a style="color: green;"><?php echo isset($_GET['billing_place']) ? getPlaceName($_GET['billing_place']) : ''; ?> </a>...</div>
    <div class="notice" style="color: red; font-weight: bold; font-size: 20px;">Using <a style="color: green;">Event Organisers </a> Website ...</div>
</div>

                     </main>
                        <footer style="color: blue; font-size: 20px;">Team : Event Organisers</footer>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
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

