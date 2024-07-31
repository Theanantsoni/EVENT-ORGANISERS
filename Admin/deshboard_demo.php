<!DOCTYPE html>
<html>
<head>
    <title>Event Organizers Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        .card {
            display: none;
        }
    </style>
</head>
<body>

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#" id="searchForm">
            <input type="text" name="query" id="searchInput" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>

<main id="main" class="main">
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
</main>

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
</body>
</html>
