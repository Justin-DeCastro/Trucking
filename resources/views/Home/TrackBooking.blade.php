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
                                <i class="las la-envelope-open"></i> </span>
                            <a class="contact-list__link"
                                href="/cdn-cgi/l/email-protection#e1929491918e9395a1828e94938884938d8083cf828e8c">
                                <span class="__cf_email__"
                                    data-cfemail="8bf8fefbfbe4f9ffcbe8e4fef9e2eef9e7eae9a5e8e4e6">[email&#160;protected]</span>
                            </a>
                        </li>
                        <li class="contact-list__item flex-align">
                            <span class="contact-list__item-icon flex-center">
                                <i class="las la-phone"></i> </span>
                            <a class="contact-list__link" href="tel:+44 123 1217">
                                +44 123 1217
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

    <section class="tracking py-120">
        <div class="container">
            <h1>Track Booking Result</h1>

            @if(isset($location) && isset($order_status))
                <div class="status">
                    <p><strong>Location:</strong> {{ $location }}</p>
                    <p><strong>Order Status:</strong> {{ $order_status }}</p>

                    <!-- Map Container -->
                    <div id="map"></div>
                </div>
            @else
                <p class="error">{{ $error ?? 'Tracking number not found.' }}</p>
            @endif
        </div>
    </section>

    <!-- Include Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-IhA4pI1twy7MJQbTy8wO2V7MA81QzF4zGFRO9jv7sYk=" crossorigin=""></script>

    <script>
        function initMap() {
            @if(isset($location))
                var location = '{{ $location }}'; // e.g., "37.7749,-122.4194"
                var latLng = location.split(',');

                var map = L.map('map').setView([parseFloat(latLng[0]), parseFloat(latLng[1])], 14);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([parseFloat(latLng[0]), parseFloat(latLng[1])])
                    .addTo(map)
                    .bindPopup('Booking Location')
                    .openPopup();
            @endif
        }

        // Initialize map after window loads
        window.onload = initMap;
    </script>



@include('Components.Home.Footer')



@include('Components.Home.Script')
</body>

</html>