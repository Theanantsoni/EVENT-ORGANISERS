<?php
   include("header.php");
?>


<html>
   <head>
     <title>CONTACT US FOR FASHION</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
       <link rel="stylesheet" href="D:/training/journal/css/style.css"></link>
       <link rel="stylesheet" href="D:/training/journal/css/active.css"></link>
       <link rel="icon" type="image/x-icon" href="D:\training\journal\image\titlelogo-modified.png">
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
       <script src="https://kit.fontawesome.com/65e8b6d2d6.js" crossorigin="anonymous"></script>
   </head>
      <style>
        .txt {
      text-align: center;
      color: #333;
    }
        .sci {
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 0;
    }

    .sci li {
      margin: 0 10px;
    }

    .sci a {
      font-size: 24px;
      color: #333;
    }
    .box .icon {
      font-size: 30px;
      margin-right: 10px;
      color: #28a745; /* Green color for icons */
    }
      </style>

      <script>
    function form()
    {
          //Full Name javascript Code ...
                    var fname = document.getElementById("userfname").value;

                    var pattern = /^[a-zA-Z\s]+$/; // Updated pattern to allow letters and spaces

                    if (fname.trim() === "") {
                        document.getElementById("ufname").innerHTML = "*Please Enter Your Full Name*";
                        return false;
                    }

                    if (!pattern.test(fname)) {
                        document.getElementById("ufname").innerHTML = "*Numbers Or Symbols Are Not Allowed*";
                        return false;
                    } else {
                        document.getElementById("ufname").innerHTML = "";
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
          
          //Subject javascript Code ...
                  var Subject = document.getElementById("usersubject").value;

                  if(Subject == "")
                  {
                    document.getElementById("usubject").innerHTML="*Please Write a Message*";
                    return false;
                  }

                  else
                  {
                    document.getElementById("umsg").innerHTML="";
                  }
          
          //Message javascript Code ...
                  var msg = document.getElementById("usermsg").value;

                  if(msg == "")
                  {
                    document.getElementById("umsg").innerHTML="*Please Write a Message*";
                    return false;
                  }

                  else
                  {
                    document.getElementById("umsg").innerHTML="";
                  }
         }
  </script>

<body>

</header>

 <!---------- main continer ---------->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <br>
        <p style="padding-top: 10px">We are always here to help. If your have requirments/queries about our services; fill up the contact form below and we'll do our best to reply within 24 hours Alternatively simply pickup the phone and give us a call.</p>
      <hr style="color: #282a35; border:1px solid #282a35;">
      </div>
    </div>
  </div>
</section>

<section class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <form method="POST" action="ContactUs.php" id="contactForm" name="contactForm" class="contactForm" onsubmit="return form()">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="label" for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="userfname" placeholder="Name">
        <span id="ufname" style="color: red;">
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <label class="label" for="email">Email Address</label>
                <input type="text" class="form-control" name="email" id="useremail" placeholder="Email Address">
        <span id="uemail" style="color: red;"><br>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="label" for="name">Contact Number</label>
                <input type="text" class="form-control" name="contact" id="usercontact" placeholder="Contact Number">
        <span id="ucontact" style="color: red;">
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <label class="label" for="email">Country</label>
                <input type="text" class="form-control" name="country" id="country"  value="INDIA" readonly><br>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="label" for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="usersubject"  placeholder="Subject"><br>
        <span id="usubject" style="color: red;">
        
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="label" for="#">Message</label>
                <textarea name="message" class="form-control" id="usermsg" cols="30" rows="4" placeholder="Type Your Message ..."></textarea><br>
        <span id="umsg" style="color: red;">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Send Message</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-info"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>
    </div>
</form>

      </div>
        
      <div class="col-md-6 address"><br>
        <h5>Call Us / whatsapp</h5>
        <p><a href="tel:+910123456789"><i class="fas fa-phone"></i>+(91) 8140591020</a><br><br>
        </p>
        <h5>Email</h5>
        <p>
          <a href="mailto:event@gmail.com"><i class="fas fa-envelope"></i> event@gmail.com</a><br><br>
        </p>
        <h5>Working</h5>
        <h6>
          Time:-24*7
        </h6><br><br>
        <h5>Address</h5>
        <p>Ved Road, Katargam, Surat, Gujarat-395004</p>
      </div>
    </div>
  </div>
  <br>
    <h2 class="txt">Connect with us</h2>
        <ul class="sci">
          <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
</section>

  
   </body>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>



<?php
   include("footer.php");
?>

<?php
require 'Admin/connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO e_message (u_id,u_name,u_email,u_contact,u_country,u_subject,u_message) VALUES ('','$fullname','$email','$contact','$country','$subject','$message')";

    if (mysqli_query($conn, $sql)) {
        // header('location: ContactUs.php');
        // Redirect to index.php
            echo '<script type="text/javascript">
                    window.location.href = "ContactUs.php";
                  </script>';
            exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
