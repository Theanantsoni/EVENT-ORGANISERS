<?php
   include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Event Organizers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #image img {
      width: 100%;
      height: auto;
      border: 2px solid white;
      border-radius: 35px;
    }
    #text font:first-child {
      font-size: 45px;
      color: #792598;
    }
    #text font:last-child {
      font-size: 15px;
      color: #000a94;
    }
    #text h2 {
      color: #792598;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 text-center">
      <h2 style="color: red;">About Us | Event Organizers</h2>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6" id="image">
      <img src="images/aboutpic.jpg" class="img-fluid" alt="About Picture">
    </div>
    <div class="col-md-6" id="text">
      <p class="fw-bold fs-3 text-primary">We Will Give You A Very<br>Special Celebration For You . . .</p>
      <p class="fs-6 text-dark">- We Can Provide You A World Class Best Events. Such As Birthday Party, Anniversary Party, Wedding Ceremony, Business Advertisement, Annual Party, Christmas Party, Freshers Party And Other ...</p>
      <h2 class="mt-5" style="color: #792598;">Why Choose Us?</h2>
      <ul class="fs-6 text-dark">
        <li>Experienced Team: Our team of skilled professionals brings years of experience in event planning and management.</li>
        <li>Creative Solutions: We love challenges and are committed to finding innovative and creative solutions for every event.</li>
        <li>Client-Centric Approach: Your satisfaction is our priority. We collaborate closely with clients to ensure their vision comes to life.</li>
      </ul><br><br>
    </div>
  </div>
</div>

</body>
</html>



   <?php
         include("e_rating_or_feedback.php");
      ?>


<?php
   include("footer.php");
?>


