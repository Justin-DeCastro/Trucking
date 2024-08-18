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
        let intervalId;
        let destinationLatLng;
        let pathLength;

        // Receives the addresses from the server
        const merchantAddress = @json($merchantAddress);
        const consigneeAddress = @json($consigneeAddress);

        function initMap() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const userLatLng = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    map = new google.maps.Map(document.getElementById('map'), {
                        center: userLatLng,
                        zoom: 14
                    });

                    truckMarker = new google.maps.Marker({
                        position: userLatLng,
                        map: map,
                        icon: 'https://maps.google.com/mapfiles/kml/shapes/truck.png', // Default truck icon
                        label: {
                            text: 'GDR Trucking',
                            color: 'black',
                            fontSize: '14px',
                            fontWeight: 'bold'
                        },
                        title: 'Moving Truck'
                    });

                    directionsService = new google.maps.DirectionsService();
                    directionsRenderer = new google.maps.DirectionsRenderer();
                    directionsRenderer.setMap(map);

                    // Add traffic layer
                    const trafficLayer = new google.maps.TrafficLayer();
                    trafficLayer.setMap(map);

                    // Geocode the merchant and consignee addresses to get their coordinates
                    const geocoder = new google.maps.Geocoder();

                    geocoder.geocode({ address: merchantAddress }, function(results, status) {
                        if (status === 'OK') {
                            const startLatLng = results[0].geometry.location;
                            geocoder.geocode({ address: consigneeAddress }, function(results, status) {
                                if (status === 'OK') {
                                    destinationLatLng = results[0].geometry.location;
                                    calculateAndDisplayRoute(startLatLng, destinationLatLng);
                                } else {
                                    window.alert('Geocode for consignee address failed due to: ' + status);
                                }
                            });
                        } else {
                            window.alert('Geocode for merchant address failed due to: ' + status);
                        }
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
                    pathLength = response.routes[0].overview_path.length;
                    animateTruck(response.routes[0].overview_path);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        function animateTruck(path) {
            if (intervalId) {
                clearInterval(intervalId);
            }

            let pathIndex = 0;
            const totalPoints = path.length;

            function updatePosition() {
                if (pathIndex >= totalPoints) {
                    clearInterval(intervalId);
                    showArrivalMessage();
                    return;
                }

                truckMarker.setPosition(path[pathIndex]);
                map.setCenter(path[pathIndex]);
                pathIndex++;
            }

            intervalId = setInterval(updatePosition, 1000); // Move truck every second
        }

        function showArrivalMessage() {
            const infoWindow = new google.maps.InfoWindow({
                content: 'The truck has arrived at the destination!',
                position: destinationLatLng
            });
            infoWindow.open(map);
        }

        function handleLocationError(browserHasGeolocation) {
            const infoWindow = new google.maps.InfoWindow({
                map: map
            });
            infoWindow.setPosition(map.getCenter());
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
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
