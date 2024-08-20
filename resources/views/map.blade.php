<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Moving Truck</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&libraries=places" async defer></script>
    <script>
        let map;
        let truckMarker;
        let directionsService;
        let directionsRenderer;
        let routePath = [];
        let stepIndex = 0;
        const destinationAddress = @json($consigneeAddress); // Ensure this address is correctly passed
        const startingAddress = @json($merchantAddress); // Ensure this address is correctly passed

        function initMap() {
            // Initialize the map with roadmap type
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                mapTypeId: 'roadmap' // Set map type to roadmap
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            // Add traffic layer
            const trafficLayer = new google.maps.TrafficLayer();
            trafficLayer.setMap(map);

            const geocoder = new google.maps.Geocoder();

            // Geocode the destination address
            geocoder.geocode({ address: destinationAddress }, function(results, status) {
                if (status === 'OK') {
                    const destinationLatLng = results[0].geometry.location;

                    geocoder.geocode({ address: startingAddress }, function(results, status) {
                        if (status === 'OK') {
                            const startingLatLng = results[0].geometry.location;
                            calculateAndDisplayRoute(startingLatLng, destinationLatLng);
                        } else {
                            console.error('Geocode for merchant address failed due to: ' + status); // Debug geocode errors
                        }
                    });
                } else {
                    console.error('Geocode for consignee address failed due to: ' + status); // Debug geocode errors
                }
            });
        }

        function calculateAndDisplayRoute(start, end) {
            directionsService.route({
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                    const route = response.routes[0].overview_path; // Get the overview path
                    routePath = route;
                    simulateTruckMovement();
                } else {
                    console.error('Directions request failed due to ' + status); // Debug directions errors
                }
            });
        }

        function simulateTruckMovement() {
            const interval = 1000; // Update interval in milliseconds
            const distance = 0.0002; // Distance to move on each step (latitude/longitude change)

            if (!routePath.length) return;

            truckMarker = new google.maps.Marker({
                position: routePath[0],
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

            function moveTruck() {
                if (stepIndex >= routePath.length) {
                    return; // Stop moving if all path steps are completed
                }

                const nextLatLng = routePath[stepIndex];
                truckMarker.setPosition(nextLatLng);
                map.setCenter(nextLatLng);
                stepIndex++;

                setTimeout(moveTruck, interval);
            }

            moveTruck();
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
