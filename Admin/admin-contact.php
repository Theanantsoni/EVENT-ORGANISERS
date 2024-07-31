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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Adjustments for better UI */
    .form-container {
      max-width: 500px;
      margin: 0 auto;
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

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .form-control {
            border-color: #6c757d; /* Default input border color */
        }

        .form-control:focus {
            border-color: #007bff; /* Input border color on focus */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Focus shadow */
        }

        .btn-primary {
            background-color: #007bff; /* Primary button background color */
            border-color: #007bff; /* Primary button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Primary button background color on hover */
            border-color: #0056b3; /* Primary button border color on hover */
        }
    </style>

<main id="main" class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0"><strong>Admin Contact</strong></h2>
                    </div>
                    <div class="card-body">
                        <form id="profileForm" class="form-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">First Name:</label>
                                        <input type="text" class="form-control bg-light" id="fname" name="fname" value="Anant" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Last Name:</label>
                                        <input type="text" class="form-control bg-light" id="lname" name="lname" value="Soni" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address:</label>
                                        <input type="email" class="form-control bg-light" id="email" name="email" value="mranantsoni@gmail.com" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact">Phone Number:</label>
                                        <input type="tel" class="form-control bg-light" id="contact" name="contact" value="8140591020" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea class="form-control bg-light" id="address" name="address" rows="2" readonly>Katargam, Surat</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyName">Company Name:</label>
                                        <input type="text" class="form-control bg-light" id="companyName" name="companyName" value="DreamEvent Creators" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Website:</label>
                                        <input type="url" class="form-control bg-light" id="website" name="website" value="Event Organizers" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="companyAddress">Company Address:</label>
                                <input type="text" class="form-control bg-light" id="companyAddress" name="companyAddress" value="Adajan, Surat" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</main>

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
