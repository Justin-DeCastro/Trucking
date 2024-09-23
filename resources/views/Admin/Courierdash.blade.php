<!DOCTYPE html>
<html lang="en">

<head>
    @include('Components.Admin.header')
    <!-- Include Font Awesome from a CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Maps JavaScript API -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&libraries=places" async defer></script>

    <style>

        #map {
            height: 400px;
            width: 100%;
            display: none;
            /* Hide map initially */
        }
    </style>
    <style>
        .logo-container {
        position: relative;
        display: inline-block;
    }

    .logo-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 90%;
        background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        filter: blur(15px);
        z-index: -1;

    }

    .logo {
        border-radius: 0;
        width: 70%;
        height: 60px;
        position: relative;
        z-index: 1;
    }

    .res-sidebar-close-btn {
        background-color: transparent;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        padding: 10px;
        position: absolute;
        top: 15px;
        right: 15px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .res-sidebar-close-btn:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #ff6b6b;
    }

    .res-sidebar-close-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 107, 107, 0.4);
    }
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
</head>

<body>
        @include('Components.Admin.Driver_Sidebar')
        <!-- navbar-wrapper start -->
        @include('Components.Admin.Navbar')
        <!-- navbar-wrapper end -->
    <div class="page-wrapper default-version">

        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">
                    <div class="d-flex mb-3 flex-wrap gap-3 justify-content-between align-items-center">
                        <h6 class="page-title">Dashboard</h6>
                        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        </div>
                    </div>
                    <div id="map" style="height: 400px;"></div>

                    <div class="row gy-4">
                        <div class="col-xxl-3 col-sm-6">
                            <a href="#" class="text-decoration-none">
                                <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                    <div class="me-3">
                                        <i class="fas fa-route fa-2x"></i> <!-- Icon for total trips -->
                                    </div>
                                    <div>
                                        <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Your Total Trips</p>
                                        <h3 class="mb-0">{{ $totalBookings }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xxl-3 col-sm-6">
                            <a href="#" class="text-decoration-none">
                                <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                    <div class="me-3">
                                        <i class="fas fa-check-circle fa-2x"></i> <!-- Icon for successful delivery -->
                                    </div>
                                    <div>
                                        <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Successful Delivery</p>
                                        <h3 class="mb-0">{{ $totalSuccessfulDeliveries }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xxl-3 col-sm-6">
                            <a href="#" class="text-decoration-none">
                                <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                    <div class="me-3">
                                        <i class="fas fa-wallet fa-2x"></i> <!-- Updated icon -->
                                    </div>
                                    <div>
                                        <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Total Earnings</p>
                                        <h3 class="mb-0">₱ {{ number_format($totalEarnings, 2) }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>



                        <!-- Notification Card -->
                       <!-- Notification Card -->
<div id="notificationCard1" class="notification-card {{ $expiringCourier ? '' : 'd-none' }}">
    <div class="cards p-3 bg-warning border-warning">
        <img src="Home/360_F_512063511_tspgHXYtRcpd9A05MFaWZv8nCTxL8WXP.jpg" class="card-img-top" alt="License Expiration Image">
        <div class="card-body">
            <h5 class="card-title">⚠️ Driver's License Expiration Warning</h5>
            @if ($expiringCourier)
                <p class="card-text">
                    <strong>{{ $expiringCourier->name }}</strong>'s license expires on
                    <strong>{{ \Carbon\Carbon::parse($expiringCourier->license_expiration)->format('F j, Y') }}</strong>.
                </p>
                <!-- Button to open the update form -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateLicenseModal">Update License</button>
            @else
                <p class="card-text">Your driver's license is not expiring within the next 7 days.</p>
            @endif
            <button type="button" class="btn btn-secondary" id="closeNotification1">Close</button>
        </div>
    </div>
</div>

<!-- Modal for updating license -->
<!-- License Expiration Modal -->
@if($expiringCourier)
    <div class="modal fade" id="updateLicenseModal" tabindex="-1" aria-labelledby="updateLicenseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateLicenseModalLabel">Your License is Expiring Soon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <p><strong>Name:</strong> {{ $expiringCourier->name }}</p>
                    <p><strong>License Number:</strong> {{ $expiringCourier->license_number }}</p>
                    <p><strong>Expiration Date:</strong> {{ $expiringCourier->license_expiration->format('F d, Y') }}</p> --}}

                    @if($expiringCourier->drivers_license)
                        <p><strong>Proof of License:</strong> <a href="{{ asset('path/to/licenses/' . $expiringCourier->driver_license) }}" target="_blank">View License</a></p>
                    @endif

                    <form action="{{ route('updateLicense') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- License Number -->
                        <div class="mb-3">
                            <label for="licenseNumber" class="form-label">License Number</label>
                            <input type="text" class="form-control" id="licenseNumber" name="license_number" value="{{ Auth::user()->license_number }}">
                        </div>

                        <!-- Expiration Date -->
                        <div class="mb-3">
                            <label for="licenseExpiration" class="form-label">Expiration Date</label>
                            <input type="date" class="form-control" id="licenseExpiration" name="license_expiration" value="{{ Auth::user()->license_expiration }}">
                        </div>

                        <!-- Driver License Upload -->
                        <div class="mb-3">
                            <label for="driverLicense" class="form-label">Proof of License</label>
                            <input type="file" class="form-control" id="driverLicense" name="driver_license" accept="image/*,application/pdf">
                        </div>

                        <button type="submit" class="btn btn-primary">Update License</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Trigger the modal automatically if the license is about to expire -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = new bootstrap.Modal(document.getElementById('updateLicenseModal'));
            modal.show();
        });
    </script>
@endif




                        <!-- Reminder Card -->


                        <!-- Map Container -->
                        {{-- <div class="col-12">
                            <div id="map" style="height: 400px;"></div>
                            <div id="cityName"></div>

                            <button id="useCurrentLocationBtn" type="button" class="btn btn-primary mt-3" onclick="getCurrentLocation()" style="display: none;">Use Current Location</button>
                            <form id="locationForm" action="{{ route('locations.store') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>


    </div>
</body>
<script>
    function initMap() {
        // Create a map centered at a default location
        const defaultLocation = { lat: -34.397, lng: 150.644 }; // Default to Sydney, Australia
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: defaultLocation,
        });

        // Try to get the user's location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };
                    map.setCenter(userLocation);

                    // Place a marker at the user's location
                    new google.maps.Marker({
                        position: userLocation,
                        map: map,
                    });

                    // Optionally, store the coordinates in hidden input fields
                    document.getElementById('latitude').value = userLocation.lat;
                    document.getElementById('longitude').value = userLocation.lng;
                },
                () => {
                    handleLocationError(true, map.getCenter());
                }
            );
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, pos) {
        alert(browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation.");
    }

    // Initialize the map when the window loads
    window.onload = initMap;
</script>

    @include('Components.Admin.Footer')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4"></script>

    <!-- Include Bootstrap JS for cards -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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


</html>
