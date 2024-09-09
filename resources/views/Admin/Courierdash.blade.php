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
                        <div class="container mt-4">
                            <div class="col-12">
                                <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><i class="fas fa-exclamation-triangle"></i> Reminder</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Update Your Location</h5>
                                        <p class="card-text">Please update your current location to help admins track
                                            your status easily. Click <button type="button"
                                                class="btn btn-outline-light" onclick="toggleMap()">here</button> to
                                            update.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Map Container -->
                            <div id="map"></div>
                            <div id="cityName"></div>

                            <button id="useCurrentLocationBtn" type="button" class="btn btn-primary mt-3"
                                onclick="getCurrentLocation()" style="display: none;">Use Current Location</button>
                            <form id="locationForm" action="{{ route('locations.store') }}" method="POST"
                                style="display: none;">
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
