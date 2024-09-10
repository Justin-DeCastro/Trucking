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

    .widget-seven {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 15px;
        color: #fff;
        background: #007bff;
        display: flex;
        align-items: center;
    }

    .widget-seven__content-icon {
        font-size: 24px;
        margin-right: 10px;
    }

    .widget-seven__description {
        flex: 1;
    }

    .widget-seven__content-title {
        font-size: 14px;
        margin: 0;
    }

    .widget-seven__content-amount {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
    }
</style>

@include('Components.Admin.Header')

<body>

    @include('Components.Admin.CoordinatorSidebar')
    @include('Components.Admin.Navbar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Dashboard</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    </div>
                </div>

                <!-- Notification Card 1 -->
                <div id="notificationCard1" class="notification-card d-none">
                    <div class="cards p-3 bg-warning border-warning">
                        <img src="Home/360_F_512063511_tspgHXYtRcpd9A05MFaWZv8nCTxL8WXP.jpg" class="card-img-top"
                            alt="License Expiration Image">
                        <div class="card-body">
                            <h5 class="card-title">⚠️ Driver's License Expiration Warning</h5>
                            @foreach ($couriers as $courier)
                                <p class="card-text">{{ $courier->name }}'s license expires on
                                    {{ \Carbon\Carbon::parse($courier->license_expiration)->format('F j, Y') }}.</p>
                            @endforeach
                            <button type="button" class="btn btn-secondary"  id="closeNotification1">Close</button>
                        </div>
                    </div>
                </div>

                <!-- Notification Card 2 -->
                <div id="notificationCard2" class="notification-card d-none">
                    <div class="card p-3 bg-danger text-white border-danger">
                        <img src="Home/jJSs0vhUQdOpWUjV4cdQRg.webp" class="card-img-top mb-3" alt="Backload Bookings Image">
                        <div class="card-body">
                            <h5 class="card-title">⚠️ New Backload Bookings</h5>
                            @forelse ($newBackloadBookings as $location)
                                <ul class="list-unstyled">
                                    <li class="mb-1"><strong>Created on:</strong> {{ $location->created_at }}</li>
                                    <li class="mb-1"><strong>Tracking Number:</strong> {{ $location->tracking_number }}</li>
                                    <li class="mb-1"><strong>Delivery Type:</strong> {{ $location->delivery_type }}</li>
                                    <li class="mb-1"><strong>From:</strong> {{ $location->merchant_address }}</li>
                                    <li class="mb-1"><strong>To:</strong> {{ $location->consignee_address }}</li>
                                    <li class="mb-1"><strong>Product:</strong> {{ $location->product_name }}</li>
                                </ul>
                            @empty
                                <p class="card-text">No new backload bookings available.</p>
                            @endforelse
                            <button type="button" class="btn btn-light mt-3" id="closeNotification2">Close</button>
                        </div>
                    </div>
                </div>


                <!-- Latest Location Widget -->
                <div class="row mt-4">
                    <div class="col-xxl-3 col-sm-6">
                        <a href="#" class="text-decoration-none">
                            <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                <div class="me-3">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Latest Drivers
                                        Locations</p>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show the first notification card
            document.getElementById('notificationCard1').classList.remove('d-none');

            // Handle closing the first notification card
            document.getElementById('closeNotification1').addEventListener('click', function() {
                document.getElementById('notificationCard1').classList.add('d-none');
                // Show the second notification card after the first one is closed
                setTimeout(function() {
                    document.getElementById('notificationCard2').classList.remove('d-none');
                }, 300); // Delay to ensure the first card is hidden before showing the second one
            });

            // Handle closing the second notification card
            document.getElementById('closeNotification2').addEventListener('click', function() {
                document.getElementById('notificationCard2').classList.add('d-none');
            });
        });
    </script>

    @include('Components.Admin.Footer')

</body>

</html>
