<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .notification-card {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        z-index: 1050;
        /* Ensure it's on top of other content */
        padding: 10px;
    }

    .cards {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        background: linear-gradient(135deg, #ff0000, #0000ff);
        /* Red to Blue Gradient */
    }

    .cards-img-top {
        width: 100%;
        height: auto;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        /* Slight border for image separation */
    }

    .cards-body {
        text-align: center;
        color: #fff;
        /* Light text color for contrast against the gradient */
    }

    .card-title {
        color: #fff;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .card-text {
        color: #f8f9fa;
        margin-bottom: 20px;
    }

    .btn-light {
        color: #333;
        background-color: #fff;
        border-color: #ddd;
        border-radius: 5px;
        padding: 5px 15px;
        font-size: 14px;
    }

    .btn-light:hover {
        background-color: #f8f9fa;
        border-color: #ccc;
    }

    .d-none {
        display: none;
    }
</style>


@include('Components.Admin.Header')

<body>


    @include('Components.Admin.Sidebar')

    <!-- navbar-wrapper start -->
    @include('Components.Admin.Navbar')
    <!-- navbar-wrapper end -->


    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Dashboard</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-xxl-3 col-sm-6">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list?status=0">
                            <div class="widget-seven bg--purple  outline ">
                                <div class="widget-seven__content">
                                    <span class="widget-seven__content-icon">
                                        <span class="icon">
                                            <i class="fas fa-hourglass-start"></i>

                                        </span>
                                    </span>
                                    <div class="widget-seven__description">
                                        <!-- In your Blade template -->
                                        <p class="widget-seven__content-title">Total Booking</p>
                                        <h3 class="widget-seven__content-amount">{{ $totalBookings }}</h3>

                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list?status=1">
                            <div class="widget-seven bg--green  outline ">
                                <div class="widget-seven__content">
                                    <span class="widget-seven__content-icon">
                                        <span class="icon">
                                            <i class="fas fa-dolly"></i>

                                        </span>
                                    </span>
                                    <div class="widget-seven__description">
                                        <p class="widget-seven__content-title">Bookings Today</p>
                                        <p class="widget-seven__content-amount">Date: {{ $formattedDate }}</p>
                                        <h3 class="widget-seven__content-amount">{{ $todayBookings }}</h3>

                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list?status=2">
                            <div class="widget-seven bg--deep-purple  outline ">
                                <div class="widget-seven__content">
                                    <span class="widget-seven__content-icon">
                                        <span class="icon">
                                            <i class="fas fa-check-circle"></i>

                                        </span>
                                    </span>
                                    <div class="widget-seven__description">
                                        <p class="widget-seven__content-title"> Successful Delivery</p>
                                        <h3 class="widget-seven__content-amount">{{ $deliverySuccessfulCount }}</h3>
                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list?status=2">
                            <div class="widget-seven bg--deep-purple  outline ">
                                <div class="widget-seven__content">
                                    <span class="widget-seven__content-icon">
                                        <span class="icon">
                                            <i class="fas fa-bus"></i>

                                        </span>
                                    </span>
                                    <div class="widget-seven__description">
                                        <p class="widget-seven__content-title">Total Available Truck</p>
                                        <h3 class="widget-seven__content-amount">{{ $totalAvailableTrucks }}</h3>
                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list?status=2">
                            <div class="widget-seven bg--deep-purple  outline ">
                                <div class="widget-seven__content">
                                    <span class="widget-seven__content-icon">
                                        <span class="icon">
                                            <i class="fas fa-car"></i>

                                        </span>
                                    </span>
                                    <div class="widget-seven__description">
                                        <p class="widget-seven__content-title">Total Drivers</p>
                                        <h3 class="widget-seven__content-amount">{{ $totalCouriers }}</h3>
                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>

                </div>



                <div class="row mt-4">
                    <div class="col-xl-4 col-lg-6 ">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <h5 class="card-title">Total Bookings</h5>
                                <canvas id="userBrowserChart">{{ $totalBookings }}</canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Today`s Booking:{{ $formattedDate }}<h5>
                                        <canvas id="userOsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Successful Delivery</h5>
                                <canvas id="userCountryChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <!-- Notification Card -->
    <!-- Notification Card -->
    <div id="notificationCard" class="notification-card d-none">
        <div class="cards p-3">
            <img src="Home/6371679.webp" class="card-img-top" alt="Booking Image">
            <div class="card-body">
                <h5 class="card-title">Today's Booking</h5>
                <p class="card-text">You have {{ $todayBookings }} booking(s) today ({{ $formattedDate }}).</p>
                <button type="button" class="btn btn-secondary" id="closeNotification">Close</button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show the notification card
            document.getElementById('notificationCard').classList.remove('d-none');

            // Handle closing the notification card
            document.getElementById('closeNotification').addEventListener('click', function() {
                document.getElementById('notificationCard').classList.add('d-none');
            });
        });
    </script>

    </script>


    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/chart.js.2.8.0.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/charts.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>




    <script>
        (function($) {
            "use strict";

            // Assuming piChart is a function that takes a canvas element and data to draw a pie chart
            function piChart(canvas, labels, data) {
                var ctx = canvas.getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: data,
                            backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56', '#e7e9ed',
                                '#4bc0c0', '#f3d3b6'
                            ],
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.label + ': ' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            $(document).ready(function() {
                piChart(
                    document.getElementById('userBrowserChart'),
                    ["Total Bookings"],
                    [{{ $totalBookings }}]
                );

                piChart(
                    document.getElementById('userOsChart'),
                    ["Today`s Booking"],
                    [{{ $todayBookings }}]
                );

                piChart(
                    document.getElementById('userCountryChart'),
                    ["Sucessful Delivery"],
                    [{{ $deliverySuccessfulCount }}]
                );
                piChart(
                    document.getElementById('userTruckChart'),
                    ["Total Trucks Available"],
                    [$totalAvailableTrucks]
                );
            });

        })(jQuery);
    </script>





</body>

</html>
