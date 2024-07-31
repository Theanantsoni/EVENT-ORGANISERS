<?php
   include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
   <section>
   <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
         <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
         <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
         <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
         <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
         <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="Fifth slide"></li>
         <li data-bs-target="#carouselId" data-bs-slide-to="5" aria-label="Sixth slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
            <img src="images/clubpartyy.jpg" class="w-100 d-block" alt="First slide" width="1100px;" height="700px;">
         </div>
         <div class="carousel-item">
            <img src="images/birthday.jpg" class="w-100 d-block" alt="Second slide" width="150px;" height="700px;">
         </div>
         <div class="carousel-item">
            <img src="images/anniversary.jpg" class="w-100 d-block" alt="Third slide" width="150px;" height="700px;">
         </div>
         <div class="carousel-item">
            <img src="images/clubparty.jpg" class="w-100 d-block" alt="Fourth slide" width="150px;" height="700px;">
         </div>
         <div class="carousel-item">
            <img src="images/bussiness.jpg" class="w-100 d-block" alt="Fifth slide" width="150px;" height="700px;">
         </div>
         <div class="carousel-item">
            <img src="images/wedding.jpg" class="w-100 d-block" alt="Sixth slide" width="150px;" height="700px;">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</section>
</body>
</html>





<?php
   include("footer.php");
?>


