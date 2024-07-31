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

    <script>
document.addEventListener("DOMContentLoaded", function() {
    animateCardNumbers();
});

function animateCardNumbers() {
    const cards = document.querySelectorAll('.display-3');
    cards.forEach((card, index) => {
        const targetNumber = parseInt(card.textContent);
        const duration = 500; // 2 seconds
        const increment = targetNumber / (duration / 10); // Increment per 10 milliseconds
        let currentNumber = 1;

        const interval = setInterval(() => {
            card.textContent = Math.round(currentNumber);
            currentNumber += increment;
            if (currentNumber >= targetNumber) {
                card.textContent = targetNumber;
                clearInterval(interval);
            }
        }, 10 * (index + 1)); // Adjust timing for each card
    });
}
</script>

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
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-box-arrow-left"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

      <h4>Deshboard</h4>

    <div class="pagetitle">

    <div class="container mt-5">
        <div class="row" id="cardContainer">

            <!-- Total Events Card -->
            <div class="col-md-4" id="TotalEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-alt fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">50</span></h3>
                                <h6>Total Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-primary">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </div>
            </div>

            <!-- Confirm Events Card -->
            <div class="col-md-4" id="ConfirmEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-check-circle fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">20</span></h3>
                                <h6>Confirm Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-success">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                </div>
            </div>

            <!-- Pending Events Card -->
            <div class="col-md-4" id="PendingEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-hourglass-half fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">10</span></h3>
                                <h6>Pending Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-warning">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                    </div>
                </div>
            </div>

            <!-- This Year Events Card -->
            <div class="col-md-4" id="ThisYearEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-danger text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-alt fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">35</span></h3>
                                <h6>This Year Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-danger">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </div>

            <!-- Before 6 Month Events Card -->
            <div class="col-md-4" id="Before6MonthsEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-info text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-minus fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">15</span></h3>
                                <h6>Before 6 Month Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-info">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                    </div>
                </div>
            </div>

            <!-- Before 3 Month Events Card -->
            <div class="col-md-4" id="Before3MonthsEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-secondary text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-minus fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">25</span></h3>
                                <h6>Before 3 Month Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-secondary">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </div>
            </div>

            <!-- This Month Events Card -->
            <div class="col-md-4" id="ThisMonthEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-alt fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">40</span></h3>
                                <h6>This Month Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-dark">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
            </div>

            <!-- This Week Events Card -->
            <div class="col-md-4" id="ThisWeekEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-info text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-alt fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">15</span></h3>
                                <h6>This Week Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-info">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events Card -->
            <div class="col-md-4" id="UpcomingEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-calendar-check fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">35</span></h3>
                                <h6>Upcoming Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-primary">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </div>

            <!-- Cancel Events Card -->
            <div class="col-md-4" id="CancelEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-danger text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-times-circle fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">5</span></h3>
                                <h6>Cancel Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-danger">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" id="OnGoingEventsCard">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-hourglass-start fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3><span class="display-3">8</span></h3>
                                <h6>Ongoing Events</h6>
                            </div>
                        </div>    
                    </div>
                    <div class="card-footer">
                        <h5>
                            <a href="#" class="text-warning">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                        </h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                    </div>
                </div>
            </div>

        <!-- Completed Events Card -->
        <div class="col-md-4" id="CompleteEventsCard">
            <div class="card text-center">
                <div class="card-header bg-success text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <i class="fas fa-check-circle fa-4x"></i>
                        </div>
                        <div class="col">
                            <h3><span class="display-3">65</span></h3>
                            <h6>Completed Events</h6>
                        </div>
                    </div>    
                </div>
                <div class="card-footer">
                    <h5>
                        <a href="#" class="text-success">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                    </h5>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 130%;" aria-valuenow="130" aria-valuemin="0" aria-valuemax="100">130%</div>
                </div>
            </div>
        </div>

        </div>
    </div>

        </div>
    </div>


 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


<div class="container mt-5">
  <!-- Heading first -->
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <!-- Chart -->
      <h2 class="text-center">Events in Gujarat and Rajasthan</h2> 
      <canvas id="myPieChart" width="300" height="300"></canvas>

    </div>
  </div>
</div>

<script>
  // Data for the pie chart
  var data = {
    labels: ['Gujarat', 'Rajasthan'],
    datasets: [{
      data: [70, 30], // Area percentages
      backgroundColor: ['#007bff', '#28a745'] // Colors for each state
    }]
  };

  // Options for the pie chart
  var options = {
    responsive: true
  };

  // Get the canvas element
  var ctx = document.getElementById('myPieChart').getContext('2d');

  // Create the pie chart
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: options
  });
</script>

<br><br><br>
    
  <div class="chart-container-wrapper">
  <div class="chart-container-small">
    <div id="gujaratChartContainer" class="chart-container">
      <h2 class="state-heading">Gujarat State</h2>
      <canvas id="gujaratChart" width="100" height="100"></canvas>
    </div>
  </div>
  <div class="chart-container-small">
    <div id="rajasthanChartContainer" class="chart-container">
      <h2 class="state-heading">Rajasthan State</h2>
      <canvas id="rajasthanChart" width="100" height="100"></canvas>
    </div>
  </div>
</div>


<!-- Include Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
  .chart-container-wrapper {
  display: flex;
}

.chart-container-small {
  flex: 1;
  text-align: center;
}

canvas {
  width: 80px; /* Adjust the width of the charts */
  height: 80px; /* Adjust the height of the charts */
  margin-top: 10px; /* Add margin for better spacing */
}

.state-heading {
  font-size: 16px; /* Adjust the font size of the headings */
  margin-bottom: 5px; /* Add margin below the headings */
}

</style>

<!-- Cards Searching Script -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const allCards = document.querySelectorAll('.card');
        const cardContainer = document.getElementById('cardContainer');

        function filterCards(input) {
            const filterValue = input.value.toLowerCase().trim();

            allCards.forEach(card => {
                const cardTitle = card.querySelector('h6').textContent.toLowerCase().trim();

                if (cardTitle.includes(filterValue)) {
                    card.style.display = 'block';
                    // Move the card to the beginning of the row
                    cardContainer.insertBefore(card.parentElement, cardContainer.firstElementChild);
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
        document.getElementById('searchInput').addEventListener('input', function () {
            filterCards(this);
        });

        // Prevent form submission
        document.getElementById('searchForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // You can add more filtering or other actions here if needed
        });
    });
</script>

<!-- Charts Seraching Script-->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const allCharts = document.querySelectorAll('.chart-container');

      function filterCharts(input) {
        const filterValue = input.value.toLowerCase().trim();

        allCharts.forEach(chart => {
          const chartLabel = chart.querySelector('.state-heading').textContent.toLowerCase().trim();

          if (chartLabel.includes(filterValue)) {
            chart.style.display = 'block';
          } else {
            chart.style.display = 'none';
          }
        });
      }

      // Display all charts initially
      allCharts.forEach(chart => {
        chart.style.display = 'block';
      });

      // Filter charts when input changes
      document.getElementById('searchInput').addEventListener('input', function () {
        filterCharts(this);
      });

      // Prevent form submission
      document.getElementById('searchForm').addEventListener('submit', function (event) {
        event.preventDefault();
        // You can add more filtering or other actions here if needed
      });
    });

    // Chart data and options
    var gujaratChartConfig = {
      type: "pie",
      data: {
        labels: ["Ahmedabad", "Vadodara", "Surat", "Rajkot", "Gandhinagar"],
        datasets: [{
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
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
            },
          }],
        },
      },
    };

    var rajasthanChartConfig = {
      type: "pie",
      data: {
        labels: ["Jaipur", "Jodhpur", "Udaipur", "Ajmer", "Kota"],
        datasets: [{
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
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
            },
          }],
        },
      },
    };

    // Render charts
    var gujaratChartCtx = document.getElementById("gujaratChart").getContext("2d");
    var rajasthanChartCtx = document.getElementById("rajasthanChart").getContext("2d");

    new Chart(gujaratChartCtx, gujaratChartConfig);
    new Chart(rajasthanChartCtx, rajasthanChartConfig);
  </script>


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