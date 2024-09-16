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
        width: 320px;
        z-index: 1050;
        /* Ensure it's on top of other content */
        padding: 10px;
    }

    .cards {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        background: linear-gradient(-135deg,
                #014f9a,
                #1359a0,
                #1e61a7,
                #3166a1,
                #296cb4,
                #4a7db6,
                #5783b9,
                #5a85bd,
                #8ba6ce,
                #c8d1e5);
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

    @include('Components.Admin.Navbar')



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
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-hourglass-start fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Total Booking</p>
                                    <h3 class="mb-0">{{ $totalBookings }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-dolly fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Bookings Today</p>
                                    <p class="mb-0">Date: {{ $formattedDate }}</p>
                                    <h3 class="mb-0">{{ $todayBookings }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Successful Delivery
                                    </p>
                                    <h3 class="mb-0">{{ $deliverySuccessfulCount }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-bus fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Total Available
                                        Truck</p>
                                    <h3 class="mb-0">{{ $totalAvailableTrucks }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-car fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Total Drivers</p>
                                    <h3 class="mb-0">{{ $totalCouriers }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-car fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Outbound Truck</p>
                                    <h3 class="mb-0">{{ $outboundTruck }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-car fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Inbound Truck</p>
                                    <h3 class="mb-0">{{ $inboundTruck }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-tools fa-2x"></i> <!-- Icon changed to tools -->
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">For Maintenance
                                        Truck</p>
                                    <h3 class="mb-0">{{ $MaintenanceTruck }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- Latest Locations Section -->
                <div class="row mt-4">
                    <div class="col-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-4 rounded d-flex flex-column align-items-start shadow-sm"
                                style="width: 100%; max-width: 1000px; margin: auto;">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt fa-3x me-3"></i>
                                    <div>
                                        <p class="mb-1" style="font-size: 1.5rem; font-weight: 600;">Latest Drivers
                                            Locations</p>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <p class="mb-0">
                                        @forelse ($locationsWithAddresses as $location)
                                            Address: {{ $location['address'] }},
                                            <br>
                                            Updated by: {{ $location['creator'] }}
                                            <br><br>
                                        @empty
                                            No location data available.
                                        @endforelse
                                    </p>
                                </div>
                            </div>
                        </a>
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
        <div class="cards p-3 bg-warning border-warning">
            <img src="Home/360_F_512063511_tspgHXYtRcpd9A05MFaWZv8nCTxL8WXP.jpg" class="card-img-top"
                alt="License Expiration Image">
            <div class="card-body">
                <h5 class="card-title">⚠️ Driver's License Expiration Warning</h5>
                <ul class="list-unstyled">
                    @foreach ($couriers as $courier)
                        @php
                            $expirationDate = \Carbon\Carbon::parse($courier->license_expiration);
                            $today = \Carbon\Carbon::today();
                            $statusText = $expirationDate->isPast() ? 'expired' : 'expires on';
                        @endphp
                        <li class="card-text">• {{ $courier->name }}'s license {{ $statusText }}
                            {{ $expirationDate->format('F j, Y') }}.</li>
                    @endforeach
                </ul>
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
