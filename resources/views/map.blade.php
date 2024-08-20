<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Moving Truck</title>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places" async defer></script>
    <script>
        let map;
        let truckMarker;
        let directionsService;
        let directionsRenderer;
        let userLatLng;
        let destinationLatLng;
        const destinationAddress = @json($merchantAddress); // Ensure this address is correctly passed

        function initMap() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14
            });

            // Check if geolocation is available
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    userLatLng = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    console.log('Current Location:', userLatLng); // Debug current location

                    // Center the map and place the truck marker
                    map.setCenter(userLatLng);
                    truckMarker = new google.maps.Marker({
                        position: userLatLng,
                        map: map,
                        icon: 'https://maps.google.com/mapfiles/kml/shapes/truck.png',
                        label: {
                            text: 'GDR Trucking',
                            color: 'black',
                            fontSize: '14px',
                            fontWeight: 'bold'
                        },
                        title: 'Moving Truck'
                    });

                    // Initialize directions services
                    directionsService = new google.maps.DirectionsService();
                    directionsRenderer = new google.maps.DirectionsRenderer();
                    directionsRenderer.setMap(map);

                    // Add traffic layer
                    const trafficLayer = new google.maps.TrafficLayer();
                    trafficLayer.setMap(map);

                    // Geocode the destination address
                    const geocoder = new google.maps.Geocoder();
                    geocoder.geocode({ address: destinationAddress }, function(results, status) {
                        if (status === 'OK') {
                            destinationLatLng = results[0].geometry.location;
                            calculateAndDisplayRoute(userLatLng, destinationLatLng);
                        } else {
                            console.error('Geocode for merchant address failed due to: ' + status); // Debug geocode errors
                        }
                    });

                    // Continuously update user location
                    navigator.geolocation.watchPosition(function(position) {
                        userLatLng = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        console.log('Updated Location:', userLatLng); // Debug updated location
                        truckMarker.setPosition(userLatLng);
                        map.setCenter(userLatLng);
                        // Update the route if destination is set
                        if (destinationLatLng) {
                            calculateAndDisplayRoute(userLatLng, destinationLatLng);
                        }
                    }, function() {
                        handleLocationError(true);
                    }, {
                        enableHighAccuracy: true,
                        maximumAge: 0,
                        timeout: 27000
                    });

                }, function() {
                    handleLocationError(true);
                });
            } else {
                handleLocationError(false);
            }
        }

        function calculateAndDisplayRoute(start, end) {
            directionsService.route({
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    console.error('Directions request failed due to ' + status); // Debug directions errors
                }
            });
        }

        function handleLocationError(browserHasGeolocation) {
            const infoWindow = new google.maps.InfoWindow({
                map: map
            });
            infoWindow.setPosition(map.getCenter());
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed. Please ensure your location services are enabled and try again.' :
                'Error: Your browser doesn\'t support geolocation or location services are not enabled.');
        }

        window.onload = initMap;
    </script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Google Maps with Moving Truck</h1>
    <div id="map"></div>
</body>
</html>
