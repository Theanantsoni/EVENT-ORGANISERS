<?php
    // include "../connection.php";

    // // Fetch user data for editing
    // if(isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     $sql = "SELECT * FROM eu_registration WHERE u_id=$id";
    //     $result = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_assoc($result);
    // } else {
    //     // Redirect if no id is provided
    //     echo "<script>window.location.href = '../user-register-update-info.php';</script>";
    //     exit();
    // }

    // // Update user data
    // if(isset($_POST['btn-update'])) {
    //     $id = $_POST['u_id'];
    //     $fname = $_POST['u_fname'];
    //     $lname = $_POST['u_lname'];
    //     $address = $_POST['u_address'];
    //     $email = $_POST['u_email'];
    //     $contact = $_POST['u_contact'];
    //     $password = $_POST['u_password'];
    //     $rptpassword = $_POST['u_rptpassword'];

    //     $update_query = "UPDATE eu_registration SET u_fname='$fname', u_lname='$lname', u_address='$address', u_email='$email', u_contact='$contact', u_password='$password', u_rptpwd='$rptpassword' WHERE u_id=$id";
    //     if(mysqli_query($conn, $update_query)) {
    //         echo "<script>window.location.href = '../user-register-update-info.php';</script>";
    //         exit();
    //     } else {
    //         echo "Error updating record: " . mysqli_error($conn);
    //     }
    // }

    // mysqli_close($conn);
?>

<?php
    include "../connection.php";

    // Fetch user data for editing
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM eu_registration WHERE u_id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        // Redirect if no id is provided
        echo "<script>window.location.href = '../user-register-update-info.php';</script>";
        exit();
    }

    // Update user data
    if(isset($_POST['btn-update'])) {
        $id = $_POST['u_id'];
        $fname = $_POST['u_fname'];
        $lname = $_POST['u_lname'];
        $address = $_POST['u_address'];
        $email = $_POST['u_email'];
        $contact = $_POST['u_contact'];
        $password = $_POST['u_password'];
        $rptpassword = $_POST['u_rptpassword'];

        // // Check if the new email or contact already exists in the database
        // $check_query = "SELECT * FROM eu_registration WHERE (u_email='$email' OR u_contact='$contact') ";
        // $check_result = mysqli_query($conn, $check_query);
        // if(mysqli_num_rows($check_result) > 0) {
        //     echo "<script>alert('Email or contact already exists. Please enter another email or contact.');</script>";
        // } else {
        //     // Proceed with the update if the email and contact are unique
        //     $update_query = "UPDATE eu_registration SET u_fname='$fname', u_lname='$lname', u_address='$address', u_email='$email', u_contact='$contact', u_password='$password', u_rptpwd='$rptpassword' WHERE u_id=$id";
        //     if(mysqli_query($conn, $update_query)) {
        //         echo "<script>window.location.href = '../user-register-update-info.php';</script>";
        //         exit();
        //     } else {
        //         echo "Error updating record: " . mysqli_error($conn);
        //     }
        // }

        // Proceed with the update if the email and contact are unique
            $update_query = "UPDATE eu_registration SET u_fname='$fname', u_lname='$lname', u_address='$address', u_email='$email', u_contact='$contact', u_password='$password', u_rptpwd='$rptpassword' WHERE u_id=$id";
            if(mysqli_query($conn, $update_query)) {
                echo "<script>window.location.href = '../user-register-update-info.php';</script>";
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

    <br><br><br>

    <h1 class="custom-heading">User Register Update Information</h1>

    <br>

    <div class="container">
        <form method="POST">
            <input type="hidden" name="u_id" value="<?php echo $row['u_id']; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_id"><strong>ID :</strong></label>
                        <input type="text" class="form-control" id="u_id" name="u_id" value="<?php echo $row['u_id']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_fname"><strong>First Name :</strong></label>
                        <input type="text" class="form-control" id="u_fname" name="u_fname" value="<?php echo $row['u_fname']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_lname"><strong>Last Name :</strong></label>
                        <input type="text" class="form-control" id="u_lname" name="u_lname" value="<?php echo $row['u_lname']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_address"><strong>Address :</strong></label>
                        <input type="text" class="form-control" id="u_address" name="u_address" value="<?php echo $row['u_address']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_email"><strong>Email :</strong></label>
                        <input type="text" class="form-control" id="u_email" name="u_email" value="<?php echo $row['u_email']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_contact"><strong>Contact :</strong></label>
                        <input type="text" class="form-control" id="u_contact" name="u_contact" value="<?php echo $row['u_contact']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_password"><strong>Password :</strong></label>
                        <input type="text" class="form-control" id="u_password" name="u_password" value="<?php echo $row['u_password']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="u_rptpassword"><strong>Repeat Password :</strong></label>
                        <input type="text" class="form-control" id="u_password" name="u_rptpassword" value="<?php echo $row['u_rptpwd']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" name="btn-update">Update</button>
                    <button type="reset" class="btn btn-warning" name="btn-reset">Reset</button>
                    <a href="../user-register-update-info.php" class="btn btn-danger">Cancel</a> 
                </div>
            </div>
        </form>
    </div>

</body>
</html>

