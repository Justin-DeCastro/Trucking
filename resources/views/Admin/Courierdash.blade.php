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
    <div class="page-wrapper default-version">
        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo"
                    style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                    <img src="proofs/GDR.png" alt="Logo"
                        style="border-radius: 0; width: 100px; height: 100px; filter: drop-shadow(0 0 30px rgba(0, 127, 255, 1));">
                    <h3 style="margin-top: 10px; color: #1F8FFF;"><b>ADMIN</b></h3>
                </div>
                <div class="sidebar__menu-wrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item">
                            <a href="courierdash" class="nav-link">
                                <i class="menu-icon fas fa-clipboard-list"></i>
                                <span class="menu-title">Courier Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="order-for-courier" class="nav-link">
                                <i class="menu-icon fas fa-clipboard-list"></i>
                                <span class="menu-title">Manage Order</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="return-items" class="nav-link">
                                <i class="menu-icon fas fa-clipboard-list"></i>
                                <span class="menu-title">Return Items</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="delay" class="nav-link">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <span class="menu-title" style="padding-left: 17px">Delay Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        @include('Components.Admin.Navbar')
        <!-- navbar-wrapper end -->

        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">
                    <div class="d-flex mb-3 flex-wrap gap-3 justify-content-between align-items-center">
                        <h6 class="page-title">Dashboard</h6>
                        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-xxl-3 col-sm-6">
                            <a href="#" class="text-decoration-none">
                                <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                    <div class="me-3">
                                        <i class="fas fa-list-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Your Total Bookings</p>
                                        <h3 class="mb-0">{{ $totalBookings }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xxl-3 col-sm-6">
                            <a href="#" class="text-decoration-none">
                                <div class="bg-info text-white p-3 rounded d-flex align-items-center shadow-sm">
                                    <div class="me-3">
                                        <i class="fas fa-list-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <p class="mb-1" style="font-size: 1.125rem; font-weight: 500;">Successful Delivery</p>
                                        <h3 class="mb-0">{{ $totalSuccessfulDeliveries }}</h3>
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
                        <div class="col-12 mt-4">
                            <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                                <div class="card-header"><i class="fas fa-exclamation-triangle"></i> Reminder</div>
                                <div class="card-body">
                                    <h5 class="card-title">Update Your Location</h5>
                                    <p class="card-text">Please update your current location to help admins track your status easily. Click <button type="button" class="btn btn-outline-light" onclick="toggleMap()">here</button> to update.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Map Container -->
                        <div class="col-12">
                            <div id="map" style="height: 400px;"></div>
                            <div id="cityName"></div>

                            <button id="useCurrentLocationBtn" type="button" class="btn btn-primary mt-3" onclick="getCurrentLocation()" style="display: none;">Use Current Location</button>
                            <form id="locationForm" action="{{ route('locations.store') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('Components.Admin.Footer')

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
    <script>
        let map;
        let geocoder;
        let mapInitialized = false;
        let marker;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 }, // Default center
                zoom: 8
            });

            geocoder = new google.maps.Geocoder();

            // Initialize marker with a red flag icon
            marker = new google.maps.Marker({
                map: map,
                title: 'Your Location',
                icon: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png' // Red flag icon
            });

            mapInitialized = true;
        }

        function geocodeLatLng(location) {
            geocoder.geocode({
                location: location
            }, (results, status) => {
                if (status === 'OK') {
                    if (results[0]) {
                        const address = results[0].formatted_address;
                        document.getElementById('cityName').innerText = address;
                        document.getElementById('latitude').value = location.lat();
                        document.getElementById('longitude').value = location.lng();
                        document.getElementById('locationForm').style.display = 'block';
                        // Update marker position
                        marker.setPosition(location);
                        map.setCenter(location);
                    } else {
                        document.getElementById('cityName').innerText = 'Address not found.';
                    }
                } else {
                    document.getElementById('cityName').innerText = 'Error in reverse geocoding.';
                }
            });
        }

        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    const location = new google.maps.LatLng(lat, lng);

                    if (map) {
                        map.setCenter(location);
                        marker.setPosition(location);
                        map.setZoom(15); // Zoom in to the current location
                    }
                    geocodeLatLng(location);
                }, () => {
                    alert('Error retrieving your location.');
                });
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }

        // Toggle map visibility
        function toggleMap() {
            const mapContainer = document.getElementById('map');
            if (mapContainer.style.display === 'none') {
                if (!mapInitialized) {
                    initMap();
                }
                mapContainer.style.display = 'block';
                getCurrentLocation(); // Show current location
                document.getElementById('useCurrentLocationBtn').style.display = 'block';
            } else {
                mapContainer.style.display = 'none';
                document.getElementById('useCurrentLocationBtn').style.display = 'none';
            }
        }
    </script>
</body>

</html>
