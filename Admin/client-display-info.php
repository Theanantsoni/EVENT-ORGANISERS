
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

 <!-- Add this JavaScript code to your HTML page -->

</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <img src="../images/eoc.png" alt="" style="max-height: 70px; margin-right: 1px;">
      <span class="d-none d-lg-block">EventOrganizer</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#" id="searchForm">
      <input type="text" name="query" id="searchInput" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="fa fa-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a><!-- End Notification Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Event Organizers</h4>
              <p>Approve rating and feedback</p>
              <p>30 min. ago</p>
            </div>
          </li>
          <li><hr class="dropdown-divider"></li>
          <!-- Add more notification items here -->
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>
        </ul><!-- End Notification Dropdown Items -->
      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">3</span>
        </a><!-- End Messages Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <!-- Add more message items here -->
          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>
        </ul><!-- End Messages Dropdown Items -->
      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="../images/eoc.png" alt="Profile" style="max-height: 70px; margin-right: 1px;" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
        </a><!-- End Profile Image Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Anant Soni</h6>
            <span>Web Developer</span>
          </li>
          <li><hr class="dropdown-divider"></li>
          <!-- Add more profile dropdown items here -->
        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Start Users Informations Nav -->

     <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-toggle="collapse" href="#users-info" aria-expanded="false">
  <i class="bi bi-person"></i><span>User information</span><i class="bi bi-chevron-down ms-auto"></i>
</a>

              <ul id="users-info" class="nav-content collapse" data-bs-parent=".sidebar-nav">
                <li>
                  <a class="nav-link collapsed" data-bs-toggle="collapse" href="#user-info-option1" aria-expanded="false">
                    <i class="bi bi-chevron-double-right" style="color:black; font-size: 15px;"></i><span>Login informations</span><i class="dropdown-toggle" style="color:black; padding-left: 40px; font-size: 15px;"></i>
                  </a>
                  <ul id="user-info-option1" class="nav-content collapse">
                    <li>
                      <a href="user-login-show-info.php">
                        <i class="bi bi-circle"></i><span>Show informations</span>
                      </a>
                    </li>
                    <li>
                      <a href="user-login-update-info.php">
                        <i class="bi bi-circle"></i><span>Update informations</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-link collapsed" data-bs-toggle="collapse" href="#user-info-option2" aria-expanded="false">
                    <i class="bi bi-chevron-double-right" style="color:black; font-size: 15px;"></i><span>Register informations</span><i class="dropdown-toggle" style="color:black; padding-left: 22px; font-size: 15px;"></i>
                  </a>
                  <ul id="user-info-option2" class="nav-content collapse">
                    <li>
                      <a href="user-register-show-info.php">
                        <i class="bi bi-circle"></i><span>Show informations</span>
                      </a>
                    </li>
                    <li>
                      <a href="user-register-update-info.php">
                        <i class="bi bi-circle"></i><span>Update informations</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li><!-- End Users Informations Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-toggle="collapse" href="#forms-nav">
                <i class="bi bi-people"></i><span>Clients Information</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>

              <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                  <a href="client-show-info.php">
                    <i class="bi bi-chevron-double-right" style="color:black; font-size: 15px;"></i><span>Show Informations</span>
                  </a>
                </li>
                <li>
                  <a href="client-update-info.php">
                    <i class="bi bi-chevron-double-right" style="color:black; font-size: 15px;"></i><span>Update Informations</span>
                  </a>
                </li>
                <li>
                  <a class="active"  href="client-display-info.php">
                    <i class="bi bi-chevron-double-right" style="color:black; font-size: 15px;"></i><span>Display All Informations</span>
                  </a>
                </li>
              </ul>
            </li>


<!-- End Client Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-images"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
</a>

        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="client-gallery-show.php">
              <i class="bi bi-circle"></i><span>Show images informations</span>
            </a>
          </li>
          <li>
            <a href="client-gallery-update.php">
              <i class="bi bi-circle"></i><span>Update images informations </span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
  <i class="bi bi-gear-wide-connected"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
</a>

        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="client-service-show.php">
              <i class="bi bi-circle"></i><span>Show img informations</span>
            </a>
          </li>
          <li>
            <a href="client-service-update.php">
              <i class="bi bi-circle"></i><span>Update img informations</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
  <a class="nav-link collapsed" data-bs-toggle="collapse" href="#booking-info-nav">
    <i class="bi bi-calendar-check"></i><span>Booking Information</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="booking-info-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
    <li>
      <a href="user-book-info-show.php">
        <i class="bi bi-circle"></i><span>Show Information</span>
      </a>
    </li>
    <li>
      <a href="user-book-info-update.php">
        <i class="bi bi-circle"></i><span>Update Information</span>
      </a>
    </li>
  </ul>
</li><!-- End Booking Information Nav -->



        <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-profile.php">
  <i class="bi bi-person-circle"></i>
  <span>Profile</span>
</a>

      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-contact.php">
  <i class="bi bi-telephone-fill"></i>
  <span>Contact</span>
</a>

      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="user-msg-info.php">
          <i class="bi bi-envelope"></i>
          <span>User Messages</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pending_fdbk_and_rtng.php">
          <i class="bi bi-chat-left-quote"></i>
          <span>Pending Feedbacks & Rating</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="fdbk_and_rtng.php">
          <i class="bi bi-chat-left-quote"></i>
          <span>Feedbacks & Rating</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="main.php">
          <i class="bi bi-box-arrow-left"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


    <div id="content">

      <!-- <?php //----------------------------------------------------------------------------------------------------------------------------- ?> -->

<?php
// Include database connection file
require_once "connection.php";

// Main code to generate the table

// Query to fetch states
$query_states = "SELECT state_id, state_name FROM e_state";
$result_states = mysqli_query($conn, $query_states);

// Check if there are any results
if ($result_states && mysqli_num_rows($result_states) > 0) {
    $states = mysqli_fetch_all($result_states, MYSQLI_ASSOC);

    // Proceed with generating the table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powerful and Colorful Bootstrap Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for additional styling */
        .highlight {
            background-color: #f7f7f9;
        }

        .bold-text {
            font-weight: bold;
        }

        .hovered-row {
            background-color: rgba(255, 0, 0, 0.3) !important; /* Red color with low opacity for hover */
        }

        /* Custom CSS for colorful table borders */
        .table-bordered th,
        .table-bordered td {
            border: 2px solid #007bff;
        }

        .table-bordered thead th {
            border-top-width: 4px;
        }

    </style>

</head>
<body>
    <div class="container" id="searchResults">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">State</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">City</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">Area</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">Place_Name</th>
                    <th style="padding-left: 15px; padding-right: 15px; text-align: center;">Place_Rent</th>
                    <th style="padding-left: 15px; padding-right: 15px; text-align: center;">Decoration_Type</th>
                    <th style="padding-left: 15px; padding-right: 15px; text-align: center;">Decoration_Price</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">Manager_Name</th>
                    <th style="padding-left: 15px; padding-right: 15px; text-align: center;">Manager_Email</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">Manager_Contact_Number</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;">Place_Location</th>
                    <th style="padding-left: 55px; padding-right: 55px; text-align: center;" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($states as $state) {
                    $state_id = $state['state_id'];
                    $state_name = $state['state_name'];

                    // Query to fetch cities for the current state
                    $query_cities = "SELECT city_id, city_name FROM e_city WHERE city_no = $state_id";
                    $result_cities = mysqli_query($conn, $query_cities);
                    $cities = mysqli_fetch_all($result_cities, MYSQLI_ASSOC);

                    foreach ($cities as $city) {
                        $city_id = $city['city_id'];
                        $city_name = $city['city_name'];

                        // Query to fetch areas for the current city
                        $query_areas = "SELECT area_id, area_name FROM e_area WHERE area_no = $city_id";
                        $result_areas = mysqli_query($conn, $query_areas);
                        $areas = mysqli_fetch_all($result_areas, MYSQLI_ASSOC);

                        foreach ($areas as $area) {
                            $area_id = $area['area_id'];
                            $area_name = $area['area_name'];

                            // Query to fetch places for the current area
                            $query_places = "SELECT place_id, place_name FROM e_place WHERE place_no = $area_id";
                            $result_places = mysqli_query($conn, $query_places);
                            $places = mysqli_fetch_all($result_places, MYSQLI_ASSOC);

                            $first_place = true; // Flag to identify the first place in the area

                            foreach ($places as $place) {
                                $place_id = $place['place_id'];
                                $place_name = $place['place_name'];

                                // Fetch rent details for the current place
                                $query_rent_details = "SELECT rent_id, rent FROM e_rent WHERE rent_no = $place_id LIMIT 1";
                                $result_rent_details = mysqli_query($conn, $query_rent_details);
                                $rent = mysqli_fetch_assoc($result_rent_details);
                                $rent_amount = $rent['rent'];

                                // Fetch manager details for the current place
                                $query_manager_details = "SELECT em_name, em_email, em_contact, em_location FROM emp_details WHERE em_no = $place_id LIMIT 1";
                                $result_manager_details = mysqli_query($conn, $query_manager_details);
                                $manager_details = mysqli_fetch_assoc($result_manager_details);

                                // Fetch decoration type and decoration price for the current place
                                $query_decoration_details = "SELECT dectype_name, decprice FROM e_dectype INNER JOIN e_decprice ON e_dectype.dectype_id = e_decprice.decprice_no WHERE e_dectype.dectype_no = $place_id";
                                $result_decoration_details = mysqli_query($conn, $query_decoration_details);

                                // Display state, city, and area names only once for the first place in the area
                                if ($first_place) {
                                    echo '<tr class="highlight">';
                                    echo '<td style="text-align: center; padding-top: 130px; padding-bottom: 130px;" rowspan="' . count($places) . '" class="bold-text">' . $state_name . '</td>';
                                    echo '<td style="text-align: center; padding-top: 130px; padding-bottom: 130px;" rowspan="' . count($places) . '" class="bold-text">' . $city_name . '</td>';
                                    echo '<td style="text-align: center; padding-top: 130px; padding-bottom: 130px;" rowspan="' . count($places) . '" class="bold-text">' . $area_name . '</td>';
                                    $first_place = false;
                                }

                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;">' . $place_name . '</td>';
                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;">' . $rent_amount . '</td>';
                                echo '<td style="text-align: center;">';
                                while ($row = mysqli_fetch_assoc($result_decoration_details)) {
                                    echo $row['dectype_name'] . '<br>';
                                }
                                echo '</td>';
                                echo '<td style="padding-left: 60px; padding-right: 60px;">';
                                mysqli_data_seek($result_decoration_details, 0);
                                while ($row = mysqli_fetch_assoc($result_decoration_details)) {
                                    echo $row['decprice'] . '<br>';
                                }
                                echo '</td>';
                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;">' . $manager_details['em_name'] . '</td>';
                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;">' . $manager_details['em_email'] . '</td>';
                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;">' . $manager_details['em_contact'] . '</td>';
                                echo '<td padding-top: 35px; padding-bottom: 35px;>' . $manager_details['em_location'] . '</td>';
                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;"><button class="btn btn-success" onclick="insertData(' . $place_id . ')">Update</button></td>';
                                echo '<td style="text-align: center; padding-top: 35px; padding-bottom: 35px;"><button class="btn btn-danger" onclick="deleteData(' . $place_id . ')">Delete</button></td>';
                                echo '</tr>';
                            }
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript functions for insert and update actions
        function insertData(placeId) {
            // Implement your logic for inserting data here
            console.log('Inserting data for Place ID: ' + placeId);
        }

        function deleteData(placeId) {
            // Implement your logic for updating data here
            console.log('Deleting data for Place ID: ' + placeId);
        }

        $(document).ready(function() {
            // Highlight the entire row when hovering over the "Area" column
            $('td:nth-child(3)').hover(function() {
                $(this).parent().toggleClass('hovered-row');
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const allRows = document.querySelectorAll('.table tbody tr');
    const searchResultsContainer = document.getElementById('searchResults');
    const originalTableHTML = searchResultsContainer.innerHTML;

    function filterRows(input) {
      const filterValue = input.value.toLowerCase().trim();
      let filteredRowsHTML = '';

      allRows.forEach(row => {
        const city = row.querySelector('td:nth-child(2)').textContent.toLowerCase().trim();

        if (city.includes(filterValue)) {
          filteredRowsHTML += row.outerHTML; // Include the entire row HTML
        }
      });

      // Display the original table header and the filtered rows
      searchResultsContainer.innerHTML = '<table class="table">' + originalTableHTML + '</table>';
      // Append the filtered rows after the table header
      searchResultsContainer.querySelector('.table tbody').innerHTML = filteredRowsHTML;
    }

    // Filter rows when input changes
    document.getElementById('searchInput').addEventListener('input', function () {
      filterRows(this);
    });

    // Prevent form submission
    document.getElementById('searchForm').addEventListener('submit', function (event) {
      event.preventDefault();
      // You can add more filtering or other actions here if needed
    });
  });
</script>



</body>
</html>
<?php
// Close the database connection
mysqli_close($conn);
?>
<?php
} else {
    // Handle the case when no states are found
    echo "No states found.";
}
?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const allRows = document.querySelectorAll('.table tbody tr');
    const searchResultsContainer = document.getElementById('searchResults');
    const filteredResultsContainer = document.getElementById('filteredResults');

    function filterRows(input) {
      const filterValue = input.value.toLowerCase().trim();
      let filteredRowsHTML = '';
      let otherRowsHTML = '';

      allRows.forEach(row => {
        const city = row.querySelector('td:nth-child(2)').textContent.toLowerCase().trim();

        if (city.includes(filterValue)) {
          filteredRowsHTML += row.outerHTML; // Include the entire row HTML
        } else {
          otherRowsHTML += row.outerHTML; // Include the entire row HTML
        }
      });

      // Display the filtered rows at the top
      filteredResultsContainer.innerHTML = '<table class="table">' + filteredRowsHTML + '</table>';
      // Display the other rows at the bottom
      searchResultsContainer.innerHTML = '<table class="table">' + otherRowsHTML + '</table>';
    }

    // Filter rows when input changes
    document.getElementById('searchInput').addEventListener('input', function () {
      filterRows(this);
    });

    // Prevent form submission
    document.getElementById('searchForm').addEventListener('submit', function (event) {
      event.preventDefault();
      // You can add more filtering or other actions here if needed
    });
  });
</script>



</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Event Organizers</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Anant Soni</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

