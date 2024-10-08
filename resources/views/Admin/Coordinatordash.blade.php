<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    @keyframes pulse {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 rgba(255, 193, 7, 0.6);
    }
    50% {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(255, 193, 7, 0.8);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 0 rgba(255, 193, 7, 0.6);
    }
}

.warning-card {
    animation: pulse 2s infinite;
}

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
                <!-- Notification Card for License Expiration -->
                <div id="notificationCard1" class="notification-card {{ $expiringCouriers->isEmpty() ? 'd-none' : '' }}">
                    <div class="cards p-3 bg-warning border-warning">
                        <img src="Home/360_F_512063511_tspgHXYtRcpd9A05MFaWZv8nCTxL8WXP.jpg" class="card-img-top" alt="License Expiration Image">
                        <div class="card-body">
                            <h5 class="card-title">⚠️ Driver's License Expiration Warning</h5>
                            @foreach ($expiringCouriers as $courier)
                                <p class="card-text"><strong>{{ $courier->name }}</strong>'s license expires on <strong>{{ \Carbon\Carbon::parse($courier->license_expiration)->format('F j, Y') }}</strong>.</p>
                            @endforeach
                            <button type="button" class="btn btn-secondary" id="closeNotification1">Close</button>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-sm-6 mt-4 mt-sm-0">
                    <a href="#" class="text-decoration-none">
                        <div class="bg-warning text-dark p-3 rounded d-flex align-items-center shadow-sm border border-danger warning-card">
                            <div class="me-3">
                                <i class="fas fa-car fa-2x"></i>
                            </div>
                            <div>
                                <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Trucks with Less Than 5 Bookings</p>
                                <p class="mb-0">
                                    @forelse ($plateNumbersWithFewBookings as $plate)
                                        <strong class="text-dark">Plate Number:</strong> <span class="fw-bold">{{ $plate->plate_number }}</span>
                                        <br>
                                        <strong class="text-dark">Total Bookings:</strong> <span class="fw-bold">{{ $plate->booking_count }}</span>
                                        <br><br>
                                    @empty
                                        <span class="text-muted">No trucks with fewer than 5 bookings.</span>
                                    @endforelse
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

<!-- Notification Card for New Backload Bookings -->
<!-- Notification Card for New Backload Bookings -->
@if($newBackloadBookings->isNotEmpty())
<div id="notificationCard2" class="notification-card">
    <div class="card p-3 bg-danger text-white border-danger">
        <img src="Home/jJSs0vhUQdOpWUjV4cdQRg.webp" class="card-img-top mb-3" alt="Backload Bookings Image">
        <div class="card-body">
            <h5 class="card-title">⚠️ New Backload Bookings</h5>
            @foreach ($newBackloadBookings as $location)
                <ul class="list-unstyled">
                    <li class="mb-1"><strong>Created on:</strong> {{ $location->created_at }}</li>
                    <li class="mb-1"><strong>Tracking Number:</strong> {{ $location->tracking_number }}</li>
                    <li class="mb-1"><strong>Delivery Type:</strong> {{ $location->delivery_type }}</li>
                    <li class="mb-1"><strong>From:</strong> {{ $location->merchant_address }}</li>
                    <li class="mb-1"><strong>To:</strong> {{ $location->consignee_address }}</li>
                    <li class="mb-1"><strong>Product:</strong> {{ $location->product_name }}</li>
                </ul>
            @endforeach
            <button type="button" class="btn btn-light mt-3" id="closeNotification2">Close</button>
        </div>
    </div>
</div>
@endif




                <!-- Latest Location Widget -->

                <div class="row mt-4">
                    <div class="col-12">
                        <div id="map" style="height: 500px; width: 100%;"></div>
                    </div>
                </div>

                    <!-- Display Plate Numbers with Fewer than 5 Bookings -->


                </div>



            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const notificationCard1 = document.getElementById('notificationCard1');

    // Check if the notification card is already hidden (no expiring licenses)
    if (!notificationCard1.classList.contains('d-none')) {
        // Show the notification card if not hidden
        notificationCard1.classList.remove('d-none');
    }

    // Handle closing the first notification card
    document.getElementById('closeNotification1').addEventListener('click', function() {
        notificationCard1.classList.add('d-none');

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
    <script>
        function initMap() {
            // Create the map centered on a default location (Manila).
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: { lat: 14.5995, lng: 120.9842 }, // Manila as the default center
            });

            // The locations with addresses
            var locations = @json($locationsWithAddresses);

            // Geocoding service to convert addresses to coordinates
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();

            // Iterate over each location
            locations.forEach(function(location) {
                geocodeAddress(geocoder, map, location, infowindow);
            });
        }

        // Function to geocode addresses and place markers
        function geocodeAddress(geocoder, map, location, infowindow) {
            geocoder.geocode({ 'address': location.address }, function(results, status) {
                if (status === 'OK') {
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        icon: {
                            url: "Home/man-driver-driving-car-17472.svg", // Font Awesome user icon
                            scaledSize: new google.maps.Size(40, 40), // Adjust size as needed
                            // Custom styling for blue color
                            anchor: new google.maps.Point(20, 20),
                            scaledSize: new google.maps.Size(40, 40)
                        },
                    });

                    // Add a hover listener to the marker
                    google.maps.event.addListener(marker, 'mouseover', function() {
                        infowindow.setContent(`
                            <div>
                                <strong>Address:</strong> ${location.address}<br>
                                <strong>Driver name:</strong> ${location.creator}
                            </div>
                        `);
                        infowindow.open(map, marker);
                    });

                    // Close infowindow on mouse out
                    google.maps.event.addListener(marker, 'mouseout', function() {
                        infowindow.close();
                    });
                } else {
                    console.log('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>
 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&callback=initMap">
</script>

    @include('Components.Admin.Footer')

</body>

</html>
