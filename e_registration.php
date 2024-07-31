<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
        background-size: cover;
        background-image: url("images/bg2.jpg");
        padding-bottom: 15px;
        padding-top: 5px;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.8); /* semi-transparent white background */
      padding: 30px;
      border-radius: 70px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* drop shadow effect */
      animation: glowing-border 2s infinite alternate;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    @keyframes glowing-border {
      from {
        box-shadow: 0 0 10px rgba(0, 0, 255, 0.5);
      }
      to {
        box-shadow: 0 0 20px rgba(0, 0, 255, 0.5);
      }
    }
  </style>


  <script src='https://www.google.com/recaptcha/api.js'></script>


  <script>
        function form()
        {
            //First Name javascript Code ...
                  var fname = document.getElementById("userfname").value;

                  var pattern = /^[a-zA-Z]*$|^\d*$/;

                  if(fname == "")
                  {
                    document.getElementById("ufname").innerHTML="*Please Enter Your Full Name*";
                    return false;
                  }

                  if (!pattern.test(fname)) 
                  {
                      document.getElementById("ufname").innerHTML="Numbers Or Symbols Are Not Allowed*";
                      return false;
                  }

                  else
                  {
                    document.getElementById("ufname").innerHTML="";
                  }

            //Full Name javascript Code ...
                  var lname = document.getElementById("userlname").value;

                  var pattern = /^[a-zA-Z]*$|^\d*$/;

                  if(lname == "")
                  {
                    document.getElementById("ulname").innerHTML="*Please Enter Your Full Name*";
                    return false;
                  }

                  if (!pattern.test(lname)) 
                  {
                      document.getElementById("ulname").innerHTML="Numbers Or Symbols Are Not Allowed*";
                      return false;
                  }

                  else
                  {
                    document.getElementById("ulname").innerHTML="";
                  }

            //Address Javascript Code ...
                  var address = document.getElementById("useraddress").value;

                  if(address == "")
                  {
                    document.getElementById("uaddress").innerHTML="*Please Enter Your Address*";
                    return false;
                  }

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

            //Phone Number Javascript Code ...
                  var contact = document.getElementById("usercontact").value;

                  if(contact == "")
                  {
                    document.getElementById("ucontact").innerHTML="*Please Enter Your Contact Number*";
                    return false;
                  }

                  if(isNaN(contact))
                  {
                    document.getElementById("ucontact").innerHTML="*Characters Are Not Allowed*";
                    return false;
                  }

                  if(contact.length>10 || contact.length<10)
                  {
                    document.getElementById("ucontact").innerHTML="*Enter Contact Number Must Be 10 Digits*";
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

            //RepeatPassword Javascript Code ...
                  var rptpassword = document.getElementById("userRepeatPassword").value;

                  if(rptpassword == "")
                  {
                    document.getElementById("urptpwd").innerHTML="*Please Enter Confirm Password*";
                    return false;
                  }

                  if(rptpassword.length < 5 || rptpassword.length > 20)
                  {
                    document.getElementById("urptpwd").innerHTML="Please Enter Confirm Password Length Must Be Between 5 And 20*";
                    return false;
                  }

            //Check Password And Confirm Password Are Same Or Not ...

                  if(password != rptpassword)
                  {
                    document.getElementById("urptpwd").innerHTML="*Password And Confirm Password Is Not Same*";
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
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="form-container">
          <h2 class="text-center mb-4">Registration Form</h2>

              <form action="" method="POST" onsubmit="return form()">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName">First Name :</label>
                            <input type="text" name="fname" class="form-control" id="userfname" placeholder="First Name">
                            <span id="ufname" style="color: red;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName">Last Name :</label>
                            <input type="text" name="lname" class="form-control" id="userlname" placeholder="Last Name">
                            <span id="ulname" style="color: red;">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address :</label>
                    <input type="text" name="address" class="form-control" id="useraddress" placeholder="Address">
                    <span id="uaddress" style="color: red;">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Id :</label>
                            <input type="text" name="email" class="form-control" id="useremail" placeholder="Email Id">
                            <span id="uemail" style="color: red;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contactNo">Contact No :</label>
                            <input type="text" name="contact" class="form-control" id="usercontact" placeholder="Contact No">
                            <span id="ucontact" style="color: red;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Password">
                            <span id="userpwd" style="color: red;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password :</label>
                            <input type="password" name="rptpassword" class="form-control" id="userRepeatPassword" placeholder="Confirm Password">
                            <span id="urptpwd" style="color: red;">
                        </div>
                    </div>
                </div>

                <br>
                    <center>
                        <div class="g-recaptcha" data-sitekey="6LcY1M8mAAAAAFITXd7NPTHA0WoVKwmxbaMl5ZFt" ></div>
                        <div id="g-recaptcha-error"></div>
                    </center>
                <br>

                <div class="row">
                    <div class="col-md-3 offset-md-3 text-center">
                        <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-secondary btn-block"><a href="index.php" style="text-decoration: none; color: white;">Cancel</a></button>
                    </div>
                </div> <br>
                <center>
                    <label>Do you have an account ? Click here For...</label><br>
                    <a href="e_login.php">Login</a> 
                </center>
            </form>

        </div>
      </div>
    </div>
  </div>

</body>
</html>


<?php
    require 'Admin/connection.php';

    // Check if the form is submitted
    if(isset($_POST['btnsubmit'])) 
    {
        // Retrieve form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $rptpassword = $_POST['rptpassword'];

        // $sql = "INSERT INTO eu_registration VALUES (0, '$fname', '$lname','$address','$email','$contact','$password','$rptpassword')";
        
        // $data = mysqli_query($conn,$sql);

        
        // echo '<script type="text/javascript">
        //         window.location.href = "form.php";
        //       </script>';
        // exit(); // Make sure to exit after redirection


        $select = "select u_email from eu_registration WHERE u_email='$email'";

        $result = mysqli_query($conn,$select);
        $count = mysqli_num_rows($result);

        if($count > 0)
        {
                echo "<script>alert('Email or contact already exists. Please enter another email or contact.'); window.location.href = 'e_login.php';</script>";

        }
        else
        {
            // Prepare SQL statement to insert data
        $sql = "INSERT INTO eu_registration VALUES (0, '$fname', '$lname','$address','$email','$contact','$password','$rptpassword')";
        
            $data = mysqli_query($conn,$sql);

            // Redirect to index.php
            echo '<script type="text/javascript">
                    window.location.href = "e_login.php";
                  </script>';
            exit(); // Make sure to exit after redirection
        }
    }
    
?>