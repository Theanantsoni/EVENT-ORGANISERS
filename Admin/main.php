<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<title>Admin Login</title>
	<style>
		div.main
		{
			margin-top: -67px;
			width:350px;
			padding: 25px 55px 5px;
			background-color: #bbffb8a6;
			border: 15px solid white;
			box-shadow: 0 0 10px;
			border-radius: 2px;
			font-size: 13px;
		}

	</style>
	<style>
    /* Internal CSS */
    .submit-btn {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    .submit-btn:hover {
      background-color: green;
    }
    body {
            background: url('https://st.depositphotos.com/1163981/2561/i/450/depositphotos_25613049-stock-photo-empty-background-with-stage-spotlight.jpg') no-repeat center center fixed;
            /* Adjust background properties as needed */
            background-size: cover; /* Ensures the background image covers the entire body */
            /* Additional styling for the body */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            /* Add any other styles you need for the body */
        }
  </style>

	<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>

				function form()
				{
					var username = document.getElementById("user").value;
					var password = document.getElementById("password").value; 

					if(username == "")
					{
						document.getElementById("userr").innerHTML="* USERNAME IS EMPTY*";
						return false;
					} 

					if(!isNaN(username))
					{
						document.getElementById("userr").innerHTML=" * ONLY CHARACTER ALLOWED*";
						return false;	
					}

					else
					{
						document.getElementById("userr").innerHTML="";
					}

					if(password == "")
					{
						document.getElementById("passwrd").innerHTML="*PASSWORD IS EMPTY *";
						return false;
					}

					if(password.length < 5 || password.length > 20)
					{
						document.getElementById("passwrd").innerHTML="Password Length Must Be Between 5 and 20";
						return false;
					}

					else
					{
						document.getElementById("passwrd").innerHTML="";
					} 

					var response = grecaptcha.getResponse();
   		 		
   		 			{
	    				if(response.length == 0) 
	    				{
	        				document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red; font-size:30px;">Please complete the reCAPTCHA challenge!</span>'; 
	        				return false;
	    				}
	    				return true;
					}
				}

		</script>
</head>
<!-- <body style="background: linear-gradient(45deg, #a7f1f6, #b8b1e7);"> -->
<body style="background: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjk2MC1uaW5nLTI5LmpwZw.jpg'); background-size: cover;"><br><br>
	<center style="margin-top: 35px;">
			<div class="main">
		<form method="POST" style="color:black" onsubmit="return form()">
				
			<div class="name" style="margin-top: -30px;">
				<h5 align="center" style="color:red; font-size:35px;">Admin Login</h5>
			</div>

				<img src="../images/eoc.png" width="100" height="100" style="margin-top: -70px;"></img> <br>
		
			<div class="user-label">
				<label style="color: #0f00f7; font-size:25px;">Username : </label>
			</div>

			<div class="user-box">
				<input type="text" id="user" name="txtname" size="30" placeholder="Enter Username" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space;  Border-radius:10px; Font-size:15px; width: 95%; height: 25px; padding-left: 5px;margin-top: 8px;box-shadow : 0 0 5px #00F5FF;border: 2px solid #00F5FF;color: #4f4f4f;font-size: 16px;">
				<span id="userr" style="color:red; font-size:20px;"></span>
			</div>

			<br><br>
			
			<div class="pass-label">
				<label style="color: #0f00f7; font-size:25px;">Password : </label>
			</div>

			<div class="pass-box">
				<input type="text" id="password" name="txtpwd" size="30" placeholder="Enter Password" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px; width: 95%; height: 25px; padding-left: 5px;margin-top: 8px;box-shadow : 0 0 5px #00F5FF;border: 2px solid #00F5FF;color: #4f4f4f;font-size: 16px;">
				<span id="passwrd" style="color:red; font-size:20px;"></span>
			</div>

			<br><br>

			<div class="forget-pass">
				<a href="" style="color: darkblue; font-size: 20px; padding-left: 210px; Text-decoration:none;"> 
					Forget Password 
				</a>
			</div>

			<br><br>
			
			<div class="rem-me" style="font-size: 20px; margin-right: 24vh;">
				<input type="checkbox" name="" style="position: revert-layer;">Remember Me
			</div>

			<br>
			
			<div class="g-recaptcha" data-sitekey="6LcY1M8mAAAAAFITXd7NPTHA0WoVKwmxbaMl5ZFt" ></div>
	    	<div id="g-recaptcha-error"></div>
	    	<br>

			<div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
		    	<button type="submit" name="btnlogin" class="submit-btn">Submit</button>
		  	</div>
			
		</form>
	</div>
	</center>
</body>
</html>


<?php
	if(isset($_POST['btnlogin']))
	{
		$uname=$_POST['txtname'];
		$upwd=$_POST['txtpwd'];

		if($uname=="Anant" and $upwd==2040707)
		{
			echo '<script type="text/javascript">
					window.location="index.php"</script>';
		}
		else
		{
			//echo "<center>";
			//echo "<font size=30 color='red'>";
			//echo "Your Id & Password Is Wrong...!!";
			//echo "</font>";
			//echo "</center>";
			echo "<script>alert('Username And Password Are Wrong !!');</script>";
		}
	}
?>

