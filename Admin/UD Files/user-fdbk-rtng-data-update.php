<?php
require "../connection.php";

// Check if ID is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // SQL query to fetch data for the given ID
    $sql = "SELECT u_id, u_email, u_feedback, u_rate, approval_status FROM e_rate_or_feedback WHERE u_id = $id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch data
        $row = $result->fetch_assoc();
        
        // Assign fetched data to variables
        $u_id = $row["u_id"];
        $u_email = $row["u_email"];
        $u_feedback = $row["u_feedback"];
        $u_rate = $row["u_rate"];
        $approval_status = $row["approval_status"];
    } else {
        // If no data found, redirect or show an error message
        header("Location: error.php");
        exit();
    }
} else {
    // If ID is not set, redirect or show an error message
    header("Location: error.php");
    exit();
}

// Update user data
if(isset($_POST['btn-update'])) {
    $u_id = $_POST["uid"];
    $u_email = $_POST["uemail"];
    $u_feedback = $_POST["ufdbk"];
    $u_rate = $_POST["urtng"];
    $approval_status = $_POST["ustatus"];

    $update_query = "UPDATE e_rate_or_feedback SET u_email='$u_email', u_feedback='$u_feedback', u_rate='$u_rate', approval_status='$approval_status' WHERE u_id=$u_id";

    if(mysqli_query($conn, $update_query)) {
        echo "<script>window.location.href = '../fdbk_and_rtng.php';</script>";
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Update Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-heading {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 2rem; /* Increase font size of the heading */
        }
        .form-control,
        .btn {
            font-size: 1.5rem; /* Increase font size of form inputs and buttons */
        }
        .form-group label {
            font-size: 1.5rem; /* Increase font size of form labels */
        }
    </style>
</head>
<body>

    <br>

<h1 class="custom-heading">User Feedback & Rating Update Information</h1>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Feedback Form</h2>
      <form method="POST" >
    <!-- Row 1: ID and Email -->
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="id"><strong>ID :</strong></label>
            <input type="text" name="uid" class="form-control" id="id" readonly value="<?php echo $u_id; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="email"><strong>Email :</strong></label>
            <input type="text" name="uemail" class="form-control" id="email" value="<?php echo $u_email; ?>">
        </div>
    </div>
    <!-- Row 2: Feedback -->
    <div class="form-group">
        <label for="feedback"><strong>Feedback :</strong></label>
        <textarea class="form-control" name="ufdbk" id="feedback" rows="3"><?php echo $u_feedback; ?></textarea>
    </div>
    <!-- Row 3: Rating and Approval Status -->
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="rating"><strong>Rating :</strong></label>
            <input type="text" name="urtng" class="form-control" id="rating" value="<?php echo $u_rate; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="approvalStatus"><strong>Status :</strong></label>
            <input type="text" name="ustatus" class="form-control" id="approvalStatus" readonly value="<?php echo $approval_status; ?>">
        </div>
    </div>

    <br>
    
    <!-- Button group centered -->
    <div class="text-center">
        <button type="submit" class="btn btn-success" name="btn-update">Update</button> &nbsp;&nbsp;&nbsp;
        <button type="reset" class="btn btn-warning" name="btn-reset">Reset</button> &nbsp;&nbsp;&nbsp;
        <a href="../fdbk_and_rtng.php" class="btn btn-danger">Cancel</a>
    </div>
</form>
    </div>
  </div>
</div>



</body>
</html>

