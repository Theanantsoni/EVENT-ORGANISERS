<?php
include "../connection.php";

// Check if the ID is provided in the URL
if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $conn->real_escape_string($_GET['id']);

    // Query to retrieve data based on the provided ID
    $query = "SELECT * FROM book_form WHERE u_id = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Check if form is submitted
        if (isset($_POST['btn-update'])) {
            // Sanitize inputs to prevent SQL injection
            $id = $conn->real_escape_string($_POST['id']);
            $firstName = $conn->real_escape_string($_POST['firstName']);
            $lastName = $conn->real_escape_string($_POST['lastName']);
            $email = $conn->real_escape_string($_POST['email']);
            $contact = $conn->real_escape_string($_POST['contact']);
            $address = $conn->real_escape_string($_POST['address']);
            $state = $conn->real_escape_string($_POST['state']);
            $city = $conn->real_escape_string($_POST['city']);
            $area = $conn->real_escape_string($_POST['area']);
            $place = $conn->real_escape_string($_POST['place']);
            $date = $conn->real_escape_string($_POST['date']);
            $time = $conn->real_escape_string($_POST['time']);
            $rentPrice = $conn->real_escape_string($_POST['rentPrice']);
            $decorationType = $conn->real_escape_string($_POST['decorationType']);
            $decorationPrice = $conn->real_escape_string($_POST['decorationPrice']);
            $memberNumber = $conn->real_escape_string($_POST['memberNumber']);
            $eventPlan = $conn->real_escape_string($_POST['eventPlan']);
            $food = $conn->real_escape_string($_POST['food']);
            $managerName = $conn->real_escape_string($_POST['managerName']);
            $managerEmail = $conn->real_escape_string($_POST['managerEmail']);
            $managerContact = $conn->real_escape_string($_POST['managerContact']);
            $placeDetails = $conn->real_escape_string($_POST['placeDetails']);
            $totalPrice = $conn->real_escape_string($_POST['totalPrice']);
            $userDiscount = $conn->real_escape_string($_POST['userDiscount']);

            // Query to update data in the database
            $query = "UPDATE book_form SET 
                u_fname='$firstName', 
                u_lname='$lastName', 
                u_email='$email', 
                u_contact='$contact', 
                u_adddress='$address', 
                e_state='$state', 
                e_city='$city', 
                e_area='$area', 
                e_place='$place', 
                e_date='$date', 
                e_time='$time', 
                e_rprice='$rentPrice', 
                e_dectype='$decorationType', 
                e_decprice='$decorationPrice', 
                e_memnum='$memberNumber', 
                e_plan='$eventPlan', 
                e_food='$food', 
                em_name='$managerName', 
                em_email='$managerEmail', 
                em_contact='$managerContact', 
                em_place='$placeDetails', 
                em_tprice='$totalPrice', 
                u_discount='$userDiscount' 
                WHERE u_id='$id'";

            // Execute the query
            if ($conn->query($query) === TRUE) {
                echo "<script>window.location.href = '../user-book-info-update.php';</script>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    } else {
        echo "No record found with the provided ID";
    }
} else {
    echo "No ID provided";
}

// Close the database connection
$conn->close();
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Booking Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    th {
      text-align: center;
    }
        .custom-heading {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 2rem; /* Increase font size of the heading */
        }
        
  </style>
</head>
<body>

  <h1 class="custom-heading">Book Event Update Information</h1>

<div class="container mt-5">
  <form method="POST">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="id">ID</label>
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['u_id']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $row['u_fname']; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $row['u_lname']; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['u_email']; ?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="tel" class="form-control" id="contact" name="contact" value="<?php echo $row['u_contact']; ?>">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['u_adddress']; ?>">
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label for="state">State</label>
          <input type="text" class="form-control" id="state" name="state" value="<?php echo $row['e_state']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" name="city" value="<?php echo $row['e_city']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="area">Area</label>
          <input type="text" class="form-control" id="area" name="area" value="<?php echo $row['e_area']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="place">Place</label>
          <input type="text" class="form-control" id="place" name="place" value="<?php echo $row['e_place']; ?>" readonly>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['e_date']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="time">Time</label>
          <input type="text" class="form-control" id="time" name="time" value="<?php echo $row['e_time']; ?>" readonly>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="rentPrice">Rent Price</label>
          <input type="text" class="form-control" id="rentPrice" name="rentPrice" value="<?php echo $row['e_rprice']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="decorationType">Decoration Type</label>
          <input type="text" class="form-control" id="decorationType" name="decorationType" value="<?php echo $row['e_dectype']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="decorationPrice">Decoration Price</label>
          <input type="text" class="form-control" id="decorationPrice" name="decorationPrice" value="<?php echo $row['e_decprice']; ?>" readonly>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="memberNumber">Member Number</label>
          <input type="text" class="form-control" id="memberNumber" name="memberNumber" value="<?php echo $row['e_memnum']; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="eventPlan">Event Plan</label>
          <input type="text" class="form-control" id="eventPlan" name="eventPlan" value="<?php echo $row['e_plan']; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="food">Food</label>
          <input type="text" class="form-control" id="food" name="food" value="<?php echo $row['e_food']; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="managerName">Manager Name</label>
          <input type="text" class="form-control" id="managerName" name="managerName" value="<?php echo $row['em_name']; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="managerEmail">Manager Email</label>
          <input type="email" class="form-control" id="managerEmail" name="managerEmail" value="<?php echo $row['em_email']; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="managerContact">Manager Contact No</label>
          <input type="tel" class="form-control" id="managerContact" name="managerContact" value="<?php echo $row['em_contact']; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="placeDetails">Place Details</label>
          <input type="text" class="form-control" id="placeDetails" name="placeDetails" value="<?php echo $row['em_place']; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="totalPrice">Total Price</label>
          <input type="text" class="form-control" id="totalPrice" name="totalPrice" value="<?php echo $row['em_tprice']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="userDiscount">User Discount</label>
          <input type="text" class="form-control" id="userDiscount" name="userDiscount" value="<?php echo $row['u_discount']; ?>" readonly>
        </div>
      </div>
    </div>
      <center>
        <button type="submit" class="btn btn-success" name="btn-update">Update</button> &nbsp;&nbsp;&nbsp;
        <button type="reset" class="btn btn-warning" name="btn-reset">Reset</button> &nbsp;&nbsp;&nbsp;
        <a href="../user-book-info-update.php" class="btn btn-danger">Cancel</a> 
      </center>
  </form> <br>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
