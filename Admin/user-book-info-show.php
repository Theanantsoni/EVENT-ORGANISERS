<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Organizers Admin Dashboard</title>
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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

   <title>Event Organizer Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .progress {
            height: 20px;
            margin-bottom: 10px;
        }
    </style>

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
        <a class="nav-link" href="index.php">
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

  <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
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
      <a href="client-display-info.php">
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

        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
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
  <a class="nav-link collapsed show" data-bs-toggle="collapse" href="#booking-info-nav">
    <i class="bi bi-calendar-check"></i><span>Booking Information</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="booking-info-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
    <li>
      <a href="user-book-info-show.php" class="active">
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

    <style>
  .custom-heading {
    background-color: #343a40;
    color: white;
    padding: 10px; /* Optional: Add padding for better visual */
    text-align: center;
  }
</style>

<h1 class="display-6 custom-heading"> Event Book Information Show</h1>


    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Additional custom styling */
        .table-responsive {
            overflow-x: auto;
        }
    </style>

<?php
require "connection.php";

// Pagination variables
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$records_per_page = 5;
$offset = ($page - 1) * $records_per_page;

$sql = "SELECT * FROM book_form LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered">';
    echo '<thead class="thead-dark">
                <tr>
                    <th style="text-align: center; padding-right: 30px; padding-left: 30px;">ID</th>
                    <th style="text-align: center;">First Name</th>
                    <th style="text-align: center;">Last Name</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Contact</th>
                    <th style="text-align: center; padding-right: 100px; padding-left: 100px;">Address</th>
                    <th style="text-align: center;">State</th>
                    <th style="text-align: center;">City</th>
                    <th style="text-align: center;">Area</th>
                    <th style="text-align: center; padding-right: 70px; padding-left: 70px;">Place</th>
                    <th style="text-align: center; padding-right: 50px; padding-left: 50px;">Date</th>
                    <th style="text-align: center; padding-right: 70px; padding-left: 70px;">Time</th>
                    <th style="text-align: center;">Rent Price</th>
                    <th style="text-align: center;">Decoration Type</th>
                    <th style="text-align: center; padding-right: 70px; padding-left: 70px;">Member_Number</th>
                    <th style="text-align: center;">Decoration Price</th>
                    <th style="text-align: center; padding-right: 70px; padding-left: 70px;">Event_Plan</th>
                    <th style="text-align: center; padding-right: 40px; padding-left: 40px;">Food</th>
                    <th style="text-align: center;  padding-right: 70px; padding-left: 70px;">Manager_Name</th>
                    <th style="text-align: center; ">Manager Email</th>
                    <th style="text-align: center; ">Manager Contact No</th>
                    <th style="text-align: center; padding-right: 100px; padding-left: 100px;">Place_Details</th>
                    <th style="text-align: center;">Rent Price</th>
                    <th style="text-align: center;">Decoration Price</th>
                    <th style="text-align: center;">Total Price</th>
                    <th style="text-align: center;">User Discount</th>  
                </tr>
            </thead>';
    echo '<tbody>';

    // Initialize a counter variable
    $counter = $offset + 1;

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td style='text-align: center;'>".$counter."</td>
                <td style='text-align: center; padding-right: 50px; padding-left: 50px;'>".$row["u_fname"]."</td>
                <td style='text-align: center; padding-right: 50px; padding-left: 50px;'>".$row["u_lname"]."</td>
                <td style='text-align: center;'>".$row["u_email"]."</td>
                <td style='text-align: center;'>".$row["u_contact"]."</td>
                <td style='text-align: center;'>".$row["u_adddress"]."</td>
                <td style='text-align: center;'>".$row["e_state"]."</td>
                <td style='text-align: center;'>".$row["e_city"]."</td>
                <td style='text-align: center;'>".$row["e_area"]."</td>
                <td style='text-align: center; '>".$row["e_place"]."</td>
                <td style='text-align: center;'>".$row["e_date"]."</td>
                <td style='text-align: center;'>".$row["e_time"]."</td>
                <td style='text-align: center; padding-right: 40px; padding-left: 40px;'>".$row["e_rprice"]."</td>
                <td style='text-align: center; padding-right: 50px; padding-left: 50px;'>".$row["e_dectype"]."</td>
                <td style='text-align: center;'>".$row["e_memnum"]."</td>
                <td style='text-align: center; padding-right: 70px; padding-left: 70px;'>".$row["e_decprice"]."</td>
                <td style='text-align: center;'>".$row["e_plan"]."</td>
                <td style='text-align: center;'>".$row["e_food"]."</td>
                <td style='text-align: center;'>".$row["em_name"]."</td>
                <td style='text-align: center; padding-right: 70px; padding-left: 70px;'>".$row["em_email"]."</td>
                <td style='text-align: center; padding-right: 70px; padding-left: 70px;'>".$row["em_contact"]."</td>
                <td style='text-align: center;'>".$row["em_place"]."</td>
                <td style='text-align: center; padding-right: 40px; padding-left: 40px;'>".$row["em_rprice"]."</td>
                <td style='text-align: center; padding-right: 60px; padding-left: 60px;'>".$row["em_dprice"]."</td>
                <td style='text-align: center; padding-right: 40px; padding-left: 40px;'>".$row["em_tprice"]."</td>
                <td style='text-align: center; padding-right: 50px; padding-left: 50px;'>".$row["u_discount"]."</td>
            </tr>";

        // Increment the counter for the next iteration
        $counter++;
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    // Pagination controls
    $sql = "SELECT COUNT(*) AS total FROM book_form";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_pages = ceil($row["total"] / $records_per_page);

    echo '<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">';

    if ($page > 1) {
        echo '<li class="page-item"><a class="page-link" href="?page='.($page - 1).'">Previous</a></li>';
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        echo '<li class="page-item '.($page == $i ? 'active' : '').'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
    }

    if ($page < $total_pages) {
        echo '<li class="page-item"><a class="page-link" href="?page='.($page + 1).'">Next</a></li>';
    }

    echo '</ul>
        </nav>';
} else {
    echo "0 results";
}
$conn->close();
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const allRows = document.querySelectorAll('.table tbody tr');

    function filterRows(input) {
      const filterValue = input.value.toLowerCase().trim();

      allRows.forEach(row => {
        const u_email = row.querySelector('td:nth-child(4)').textContent.toLowerCase().trim();
        const u_contact = row.querySelector('td:nth-child(5)').textContent.toLowerCase().trim();
        const e_place = row.querySelector('td:nth-child(10)').textContent.toLowerCase().trim();
        const em_email = row.querySelector('td:nth-child(20)').textContent.toLowerCase().trim();
        const em_contact = row.querySelector('td:nth-child(21)').textContent.toLowerCase().trim();

        if (u_email.includes(filterValue) || u_contact.includes(filterValue) || e_place.includes(filterValue) || em_email.includes(filterValue) || em_contact.includes(filterValue)) {
          row.style.display = 'table-row';
        } else {
          row.style.display = 'none';
        }
      });
    }

    // Display all rows initially
    allRows.forEach(row => {
      row.style.display = 'table-row';
    });

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
