
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Inline CSS for custom styling */
        body {
            background-image: url("images/flower.jpg");
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding-top: 27px;
/*            padding-bottom: 250px;*/
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh; /* This ensures the background covers the entire viewport height */
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.7);
            border-radius: 5px;
            margin-left: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            color: white;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
/*            cursor: none;*/
            color: white;
            border: 2px solid black;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            transition: background 0.1s; /* Add a smooth transition for neon effect */
        }

        .form-group input:focus {
            background: rgba(255, 255, 255, 0.4); /* Change background color on focus (neon effect) */
            color: black;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(45deg, #ff00f7, #007bff);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.4s;
        }

        .login-button:hover {
            background: linear-gradient(45deg, #ff00f7, #007bff);
            color: #fff;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Custom styling for the user photo */
        .user-photo {
            display: block;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
        }
        .register {
            font-size: 0.9em;
            color: #fff;
            text-align: center;
            margin: 20px 0 15px;
        }

        .register p a{
            text-decoration: none;
            color: #fff;
            font-weight: 800;
        }

        .register p a:hover{
            text-decoration: underline;
        }
    </style>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>

        function form()
        {

        //Email Javascript Code ...
                  var email = document.getElementById("useremail").value;
                  var emailpattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation

                  if(email == "")
                  {
                    document.getElementById("uemail").innerHTML="*Please Enter Your Email Address*";
                    return false;
                  }

                  if(emailpattern.test(email))
                  {
                    document.getElementById("uemail").innerHTML="";
                  }  

                  else
                  {
                    document.getElementById("uemail").innerHTML="*Invalid Email Address. Please Enter Valid Email Address*";
                    return false;
                  }

        //Password Javascript Code ...
                  var password = document.getElementById("userpassword").value;

                  if(password == "")
                  {
                    document.getElementById("userpwd").innerHTML="*Please Enter password*";
                    return false;
                  }

                  if(password.length < 5 || password.length > 20)
                  {
                    document.getElementById("userpwd").innerHTML="*Please Enter Password Length Must Be Between 5 And 20*";
                    return false;
                  }

        //ReCaptcha Code ...

                  var response = grecaptcha.getResponse();
                
                    {
                        if(response.length == 0) 
                        {
                            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red; font-size:15px;">Please complete the reCAPTCHA challenge!</span>'; 
                            return false;
                        }
                        return true;
                    }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center" style="color: red">Login</h2><br>
            <img src="https://cdn-icons-png.flaticon.com/512/1057/1057231.png" class="user-photo" alt="User Photo">
            <form action="" method="POST" onsubmit="return form()">
                <div class="form-group">
                    <label for="username" style="color: black">Email :</label>
                    <input type="text" name="email" class="form-control" id="useremail" placeholder="Enter your username">
                    <span id="uemail" style="color: red;">
                </div>
                <div class="form-group">
                    <label for="password" style="color: black">Password :</label>
                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter your password">
                    <span id="userpwd" style="color: red;">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input type="checkbox"  class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe" style="color: black">Remember Me</label>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="forgot-password.html" class="text-white"><p style="color: black">Forgot Password?</p></a>
                    </div>
                </div>
                <br>
                    <center>
                        <div class="g-recaptcha" data-sitekey="6LcY1M8mAAAAAFITXd7NPTHA0WoVKwmxbaMl5ZFt" ></div>
                        <div id="g-recaptcha-error"></div>
                    </center>
                <br>
                <button type="submit" name="btnsubmit" class="btn login-button btn-lg">Login</button>
                
                <div class="register">
                    <p style="color: black">Don't have an account ? click here for ...<br> <a href="e_registration.php" style="color: black">register</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





<?php

    require 'Admin/connection.php';

    // Check if the form is submitted
    if(isset($_POST['btnsubmit'])) 
    {
            // Check if the form is submitted
    if(isset($_POST['btnsubmit'])) 
    {
        // Retrieve form data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare SQL statement to check if email and password exist in the registration database
        $sql = "SELECT * FROM eu_registration WHERE u_email = '$email' AND u_password = '$password'";
        
        $result = mysqli_query($conn, $sql);

        // Check if there is a match
        if(mysqli_num_rows($result) > 0) {
            // User found in the database, redirect to index.php or wherever you want to redirect after successful login
            // Prepare SQL statement to insert data
            $sql = "INSERT INTO eu_login VALUES (0, '$email', '$password')";
        
            $data = mysqli_query($conn,$sql);

            // Redirect to index.php
            echo '<script type="text/javascript">
                    window.location.href = "index.php";
                  </script>';

            exit(); // Make sure to exit after redirection
        } else {
            // No matching user found, display an error message or handle the error as per your requirement
            echo '<script>alert("Invalid Email & Password ... Please Try Again ...");</script>';
        }
    }
            exit(); // Make sure to exit after redirection
        
    }
?>

