<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Home.Header')
<style>
    .tracking {
        background: linear-gradient(to right, #f7f7f7, #e0e0e0);
        padding: 60px 0;
        color: #333;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #333;
    }

    .status {
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .status p {
        font-size: 1.125rem;
        margin: 10px 0;
        color: #555;
    }

    .status p strong {
        color: #333;
    }

    .error {
        color: #e74c3c;
        font-size: 1.125rem;
        background: #fbe9e7;
        border: 1px solid #f5c6c6;
        border-radius: 8px;
        padding: 15px;
        margin: 20px 0;
    }
</style>
<body>

    <div class="preloader">
        <div class="loader-p"></div>
    </div>

    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

    <div class="header-top d-lg-block d-none">
        <div class="container">
            <div class="top-header-wrapper d-flex justify-content-between align-items-center flex-wrap">
                <div class="top-contact">
                    <ul class="contact-list">
                        <li class="contact-list__item flex-align">
                            <span class="contact-list__item-icon flex-center">
                                <i class="fas fa-envelope-open"></i> </span>
                                <a class="contact-list__link" href="mailto:gdrlogisticsinc@outlook.com">
                                    gdrlogisticsinc@outlook.com
                                </a>

                        </li>
                        <li class="contact-list__item flex-align">
                            <span class="contact-list__item-icon flex-center">
                                <i class="fas fa-phone"></i> </span>
                            <a class="contact-list__link" href="tel:+44 123 1217">
                                +63 917-819-1571
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    @include('Components.Home.Navbar')


    <section class="breadcrumb bg-img mb-0"
        data-background-image="https://script.viserlab.com/courierlab/demo/assets/images/frontend/breadcrumb/6652bfd4ad66b1716699092.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title">Order Tracking</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Include Leaflet JavaScript -->
    <section class="tracking py-120 bg-light">
        <div class="container">
            <h1 class="mb-4 text-center">Track Booking Result</h1>

            @if(isset($merchant_address) && isset($status) && isset($trackingNumber) && isset($consignee_address))
                <div class="status bg-white p-4 rounded shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-primary">Location</h5>
                            <p class="lead">{{ $merchant_address }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-primary">Order Status</h5>
                            <p class="lead">{{ $status }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-primary">Consignee Address</h5>
                            <p class="lead">{{ $consignee_address }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-primary">Date of Pick Up</h5>
                            <p class="lead">{{ \Carbon\Carbon::parse($date_of_pick_up)->format('F d, Y g:i A') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-primary">Product</h5>
                            <p class="lead">{{ $product_name }}</p>
                        </div>
                    </div>

                    <!-- Map Container -->
                    <div id="map" style="width: 100%; height: 500px; margin-top: 20px;"></div>
                </div>
            @else
                <div class="alert alert-danger mt-4" role="alert">
                    {{ $error ?? 'Tracking number not found.' }}
                </div>
            @endif
        </div>
    </section>


    <script>
        function initMap() {
            var mapOptions = {
                zoom: 10,
                center: { lat: 14.5995, lng: 120.9842 }, // Initial center on Manila, Philippines
                mapTypeControl: false,
            };

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            // Function to calculate and display the route
            function calculateAndDisplayRoute() {
                var start = @json($merchant_address); // Start address from PHP
                var end = @json($consignee_address); // End address from PHP

                directionsService.route(
                    {
                        origin: start,
                        destination: end,
                        travelMode: google.maps.TravelMode.DRIVING,
                    },
                    function (response, status) {
                        if (status === google.maps.DirectionsStatus.OK) {
                            directionsRenderer.setDirections(response);
                        } else {
                            console.error('Directions request failed due to ' + status);
                        }
                    }
                );
            }

            // Initial call to calculate and display the route
            calculateAndDisplayRoute();
        }

        // Load Google Maps API and initialize the map
        document.addEventListener('DOMContentLoaded', function() {
            var script = document.createElement('script');
            script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&callback=initMap`;
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        });
    </script>




@include('Components.Home.Footer')



@include('Components.Home.Script')
</body>

</html>
