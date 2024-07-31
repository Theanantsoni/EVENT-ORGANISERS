<?php
    // include "../connection.php";

    // // Fetch user data for editing
    // if(isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     $sql = "SELECT * FROM eu_login WHERE u_id=$id";
    //     $result = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_assoc($result);
    // } else {
    //     // Redirect if no id is provided
    //     echo "<script>window.location.href = '../user-login-update-info.php';</script>";
    //     exit();
    // }

    // // Update user data
    // if(isset($_POST['btn-update'])) {
    //     $id = $_POST['u_id'];
    //     $email = $_POST['u_email'];
    //     $password = $_POST['u_password'];

    //     $update_query = "UPDATE eu_login SET u_email='$email', u_password='$password' WHERE u_id=$id";
    //     if(mysqli_query($conn, $update_query)) {
    //         echo "<script>window.location.href = '../user-login-update-info.php';</script>";
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
        $sql = "SELECT * FROM eu_login WHERE u_id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        // Redirect if no id is provided
        echo "<script>window.location.href = '../user-login-update-info.php';</script>";
        exit();
    }

    // Update user data
    if(isset($_POST['btn-update'])) {
        $id = $_POST['u_id'];
        $email = $_POST['u_email'];
        $password = $_POST['u_password'];

        // // Check if the new email already exists in the database
        // $check_query = "SELECT * FROM eu_login WHERE u_email='$email' ";
        // $check_result = mysqli_query($conn, $check_query);
        // if(mysqli_num_rows($check_result) > 0) {
        //     echo "<script>alert('Email already exists. Please enter another email.');</script>";
        // } else {
        //     // Proceed with the update if the email is unique
        //     $update_query = "UPDATE eu_login SET u_email='$email', u_password='$password' WHERE u_id=$id";
        //     if(mysqli_query($conn, $update_query)) {
        //         echo "<script>window.location.href = '../user-login-update-info.php';</script>";
        //         exit();
        //     } else {
        //         echo "Error updating record: " . mysqli_error($conn);
        //     }
        // }

        // Proceed with the update if the email is unique
            $update_query = "UPDATE eu_login SET u_email='$email', u_password='$password' WHERE u_id=$id";
            if(mysqli_query($conn, $update_query)) {
                echo "<script>window.location.href = '../user-login-update-info.php';</script>";
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

<h1 class="custom-heading">User Login Update Information</h1>

    <br>

<div class="container">
    <form method="POST">
        <input type="hidden" name="u_id" value="<?php echo $row['u_id']; ?>">
        <div class="form-group">
            <label for="u_id" style="font-size: 30px; opacity: 1;"><strong>ID :</strong></label>
            <input type="text" class="form-control" id="u_id" name="u_id" value="<?php echo $row['u_id']; ?>" readonly>
        </div>

            <br>

        <div class="form-group">
            <label for="u_email" style="font-size: 30px;"><strong>Email :</strong></label>
            <input type="text" class="form-control" id="u_email" name="u_email" value="<?php echo $row['u_email']; ?>">
        </div>

            <br>

        <div class="form-group">
            <label for="u_password" style="font-size: 30px;"><strong>Password :</strong></label>
            <input type="text" class="form-control" id="u_password" name="u_password" value="<?php echo $row['u_password']; ?>">
        </div>

            <br>

        <button type="submit" class="btn btn-success" name="btn-update">Update</button> &nbsp;&nbsp;&nbsp;
        <button type="reset" class="btn btn-warning" name="btn-reset">Reset</button> &nbsp;&nbsp;&nbsp;
        <a href="../user-login-update-info.php" class="btn btn-danger">Cancel</a> 
    </form>
</div>

</body>
</html>
