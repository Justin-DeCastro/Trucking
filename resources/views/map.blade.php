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
        let routeIndex = 0;
        let intervalId;

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
                        icon: 'https://maps.google.com/mapfiles/kml/shapes/truck.png', // Example truck icon
                        title: 'Moving Truck'
                    });

                    directionsService = new google.maps.DirectionsService();
                    directionsRenderer = new google.maps.DirectionsRenderer();
                    directionsRenderer.setMap(map);

                    calculateAndDisplayRoute(userLatLng, { lat: 14.5833, lng: 121.0333 }); // Mandaluyong coordinates

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

            function updatePosition() {
                if (pathIndex >= path.length) {
                    clearInterval(intervalId);
                    return;
                }

                truckMarker.setPosition(path[pathIndex]);
                map.setCenter(path[pathIndex]);
                pathIndex++;
            }

            intervalId = setInterval(updatePosition, 1000); // Move truck every second
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
