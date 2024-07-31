<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <style>
        /* Your existing styles remain unchanged */
        body {
            /* background-color: #f8f9fa; */
            background: linear-gradient(to right, #75ffef, #f3d0c9);
        }

        #filter:focus {
            box-shadow: none;
            /* Add any other styling you need for the focus state */
        }

        .card {
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border: 2px solid #000; /* Add border around the card */
            border-radius: 70px;
            cursor: pointer;
        }

        .card-img-top {
            height: 100px;
            width: 100px;
            margin-left: 125px;
            margin-top: 25px;
            margin-right: 125px;
            object-fit: cover;
        }

        .card-body {
            text-align: center;
            height: 300px;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border: none;
            background: none;
            color: red;
            cursor: pointer;
            display: none;
            /* Initially hide the button */
            transition: color 0.3s ease, box-shadow 0.3s ease;
            /* Added transition for color and box-shadow */
            font-size: 2em;
            /* Increase font size */
            border: 2px red solid;
            border-radius: 100px;
            z-index: 9999;
            /* Ensure the button stays on top */
        }

        /* Glow effect and color change on hover */
        .back-to-top:hover {
            color: green;
            /* Change text color on hover */
            border: 2px solid green;
        }
    </style>

</head>

<body>
    <!-- Search Box Start -->
    <div class="container mt-3">
        <div class="input-group">
            <input type="text" class="form-control" id="filter" placeholder="Search an Event . . ."
                style="height:7.5vh; background-color: #fff; border: none; margin-left: 7px; margin-right: 2px; border-left: 3px solid skyblue; border-bottom: 3px solid skyblue;">
            <div class="input-group-append">
                <button id="button-addon5" type="submit" class="btn btn-primary"
                    style="height: 7.5vh; width: 7.5vh; margin-right: 10px;"> <i class="fa fa-search"
                        style="font-size: 20px;"> </i> </button>
            </div>
        </div>
    </div>
    <!-- Search Box End -->

    <div class="container mt-3">
        <div class="row">
            <?php
            include "Admin/connection.php";

            $sql = "SELECT * FROM e_service";
            $result = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4 card">
                    <img src="images/<?php echo $data['image']; ?>" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title" style="color: red; font-weight: bold;">
                            <?php echo $data['title']; ?>
                        </h5><br>
                        <p class="card-text">
                            <?php echo $data['description']; ?><br><br>
                        </p>
                        <div class="card-buttons">
                            <button class="btn btn-primary"
                                onclick="showDetails('<?php echo $data['image']; ?>', '<?php echo $data['title']; ?>', '<?php echo $data['description']; ?>', '<?php echo $data['description1']; ?>', '<?php echo $data['description2']; ?>', '<?php echo $data['description3']; ?>', '<?php echo $data['description4']; ?>')">Learn More</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="form.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap Modal for Details -->
    <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Service Details</h5>
                    <!-- Big close icon for removing the card -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="removeCard()">
                        <span aria-hidden="true" style="font-size: 1em;">❌</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" id="modalImage" class="card-img-top" alt="Service Image"
                        style="margin-left: auto; margin-right: auto; display: block;">
                    <h5 class="card-title" style="color: red; font-weight: bold; text-align: center;"
                        id="modalTitle"></h5>
                    <p class="card-text" id="modalDescription" style="text-align: center;"></p>
                    <p class="card-text" id="modalDescription1" style="text-align: center;"></p>
                    <p class="card-text" id="modalDescription2" style="text-align: center;"></p>
                    <p class="card-text" id="modalDescription3" style="text-align: center;"></p>
                    <p class="card-text" id="modalDescription4" style="text-align: center;"></p>
                </div>
            </div>
        </div>
    </div> <br><br>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const allCards = document.querySelectorAll('.card');

            function filterCards(input) {
                const filterValue = input.value.toLowerCase().trim();

                allCards.forEach(card => {
                    const cardTitle = card.querySelector('.card-title').textContent.toLowerCase().trim();

                    if (cardTitle.includes(filterValue)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Display all cards initially
            allCards.forEach(card => {
                card.style.display = 'block';
            });

            // Filter cards when input changes
            document.getElementById('filter').addEventListener('input', function () {
                filterCards(this);
            });

            // Reset filter when the search input is cleared
            document.getElementById('filter').addEventListener('blur', function () {
                if (this.value === "") {
                    filterCards(this);
                }
            });
        });

        function showDetails(image, title, description, description1, description2, description3, description4) {
            $('#modalImage').attr('src', 'images/' + image);
            $('#modalTitle').text(title);
            $('#modalDescription').text(description);
            $('#modalDescription1').text(description1);
            $('#modalDescription2').text(description2);
            $('#modalDescription3').text(description3);
            $('#modalDescription4').text(description4);
            $('#detailsModal').modal('show');
        }

        function removeCard() {
            // Remove the card from the DOM
            $('.modal-lg .card:not(.disabled)').remove();

            // Close the modal
            $('#detailsModal').modal('hide');
        }
    </script>

    

    <?php
    include("footer.php");
    ?>

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
