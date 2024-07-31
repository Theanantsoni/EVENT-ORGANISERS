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
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center">
                <h1 style="color: red;">-------- Event is Registered Successfully --------</h1>
                <h2 style="color: darkgreen;">-------- <?php echo isset($_GET['billing_place']) ? $_GET['billing_place'] : ''; ?> Bill --------</h2>
                <h3 style="color: darkblue;">----- Check This Details -----</h3>
            </div>
        </div><br>
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
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_state']) ? $_GET['billing_state'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">City</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_city']) ? $_GET['billing_city'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Area</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_area']) ? $_GET['billing_area'] : ''; ?></td>
            </tr>
            <tr>
                <th style="border: 2px solid black;">Place</th>
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_place']) ? $_GET['billing_place'] : ''; ?></td>
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
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_dectype']) ? $_GET['billing_dectype'] : ''; ?></td>
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
                <td style="border: 2px solid black;"><?php echo isset($_GET['billing_discount']) ? $_GET['billing_discount'] : ''; ?></td>
            </tr>
            <!-- Add other fields similarly -->
        </table>

        <center>
            <p style="color: red; font-size: 25px; font-weight: bold;">----- Thanks For Booking Your Ticket In <?php echo isset($_GET['billing_place']) ? $_GET['billing_place'] : ''; ?> ----- </p>
            <p style="color: darkblue; font-size: 25px; font-weight: bold;"> ----- Using Event Organisers Website ----- </p>
        </center>
    </div>
</body>
</html>
