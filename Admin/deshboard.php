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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../images/eoc.png" alt="" style="max-height: 70px;
    margin-right: 1px;">
        <span class="d-none d-lg-block">EventOrganizer</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
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
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
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
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

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
      <a href="#">
        <i class="bi bi-circle"></i><span>Show Tables</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bi bi-circle"></i><span>Update Tables</span>
      </a>
    </li>
  </ul>
</li><!-- End Booking Information Nav -->



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
  <i class="bi bi-person-circle"></i>
  <span>Profile</span>
</a>

      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
  <i class="bi bi-telephone-fill"></i>
  <span>Contact</span>
</a>

      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
  <i class="bi bi-envelope"></i>
  <span>User Messages</span>
</a>

      </li><!-- End Register Page Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed" href="pending_fdbk_and_rtng.php">
              <i class="bi bi-hourglass"></i> <!-- Bootstrap Icon for pending items -->
              <span>Pending Feedbacks & Rating</span>
          </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="fdbk_and_rtng.php">
          <i class="bi bi-chat-left-quote"></i>
          <span>Feedbacks & Rating</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-box-arrow-left"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->


<main id="main" class="main">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
  <div class="chart-container">
    <h2 class="state-heading">Gujarat State</h2>
    <canvas id="gujaratChart" width="100" height="100"></canvas>
  </div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="chart-container">
    <h2 class="state-heading">Rajasthan State</h2>
    <canvas id="rajasthanChart" width="100" height="100"></canvas>
  </div>
</main>




<!-- Include Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
  #main {
    display: flex;
    justify-content: center;
    width: 100%;
    margin-left: 10vh;
  }

  .state-heading {
  font-size: 24px; /* Adjust font size as needed */
  text-align: center; /* Center align the headings */
  margin-bottom: 0; /* Remove the default margin-bottom */
}

.chart-container {
  display: flex;
  flex-direction: column; /* Stack items vertically */
  align-items: center; /* Center items horizontally */
  margin-bottom: 20px; /* Add some space between chart containers */
  position: relative; /* Position relative for absolute positioning */
}

canvas {
  width: 350px; /* Increase canvas width */
  height: 350px; /* Increase canvas height */
  margin-top: 50px; /* Adjust margin-top */
}


.state-heading {
  position: absolute; /* Position the heading absolutely */
  top: 0; /* Align to the top of the chart container */
  left: 50%; /* Move to the center horizontally */
  transform: translateX(-50%); /* Adjust to center horizontally */
}

</style>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get the canvas elements
    var ctxG = document.getElementById("gujaratChart").getContext("2d");
    var ctxR = document.getElementById("rajasthanChart").getContext("2d");

    // Create the bar charts
    var gujaratChart = new Chart(ctxG, {
      type: "pie",
      data: {
        labels: ["Ahmedabad", "Vadodara", "Surat", "Rajkot", "Gandhinagar"],
        datasets: [
          {
            label: "Gujarat",
            data: [8, 15, 6, 10, 5],
            backgroundColor: [
              "rgba(255, 99, 132, 0.1)",
              "rgba(54, 162, 235, 0.1)",
              "rgba(255, 206, 86, 0.1)",
              "rgba(75, 192, 192, 0.1)",
              "rgba(153, 102, 255, 0.1)",
            ],
            borderColor: [
              "rgba(255,99,132,1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      },
    });

    var rajasthanChart = new Chart(ctxR, {
      type: "pie",
      data: {
        labels: ["Jaipur", "Jodhpur", "Udaipur", "Ajmer", "Kota"],
        datasets: [
          {
            label: "Rajasthan",
            data: [12, 19, 3, 5, 2],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(153, 102, 255, 0.2)",
            ],

            borderColor: [
              "rgba(255,99,132,1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      },
    });
  });
</script>




    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
