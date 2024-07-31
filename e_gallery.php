<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* Apply linear gradient background */
        background: linear-gradient(to right, #75ffef, #f3d0c9);
    }

        .gallery {
            margin-top: 2rem;
            text-align: center;
        }

        .gallery h2 {
            margin-bottom: 1.5rem;
        }

        .gallery .images img {
            border: 5px solid #fff; /* Solid black border */
            border-radius: 10px; /* Optional: Add border radius for a rounded border */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
            cursor: pointer;
            transition: transform 0.3s ease;
            position: relative; /* Required for absolute positioning of glow effect */
        }

        .gallery .images img:hover {
            transform: scale(1.05); /* Optional: Add a hover effect to scale the image slightly */
        }

        .gallery .images img::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-color: rgba(255, 255, 255, 0.5); /* Adjust glow color and opacity */
            border-radius: 10px;
            z-index: -1;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .gallery .images img:hover::before {
            opacity: 1;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5); /* Adjust glow effect */
        }

        figcaption {
            position: absolute;
            border: 5px solid #fff; /* Solid black border */
            border-radius: 100px;  /* Remove or reduce the border-radius */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            font-size: 20px;
            transition: opacity .5s ease;
            pointer-events: none; /* Prevent figcaption from interfering with hover effect */
        }

        .col:hover figcaption {
            opacity: 1;
        }

        /* Styles for the scroll-up button */
        /* Styles for the scroll-up button */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border: none;
            background: none;
            color: red;
            cursor: pointer;
            display: none; /* Initially hide the button */
            transition: color 0.3s ease, box-shadow 0.3s ease; /* Added transition for color and box-shadow */
            font-size: 2em; /* Increase font size */
            border: 2px red solid;
            border-radius: 100px;
            z-index: 9999; /* Ensure the button stays on top */
        }

        /* Glow effect and color change on hover */
        .back-to-top:hover {
            color: green; /* Change text color on hover */
            border: 2px solid green;
        }

    </style>

</head>
<body>

<?php include("header.php"); ?>

<section class="gallery">
    <div class="container">
        <h2>Event Gallery</h2>
        <div class="row row-cols-1 row-cols-md-3 g-3 images">
            <?php
            include "Admin/connection.php";

            $sql = "SELECT eg_img, eg_name FROM e_gallery"; // Corrected SQL query
            $result = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="col position-relative">
                    <img src="images/Event Images/<?php echo $data['eg_img']; ?>" class="img-fluid" alt="Gallery Image">
                    <figcaption>
                        <?php echo "Image Name : <br>" .$data['eg_name']; ?> <!-- Display image name -->
                    </figcaption>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section> 

<!-- Scroll-up button -->
    <button onclick="scrollToTop()" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
</body>
</html>

<?php include("footer.php"); ?>