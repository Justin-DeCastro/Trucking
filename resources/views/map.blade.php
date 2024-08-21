<!DOCTYPE html>
<html>
<head>
    <title>Rubix Details</title>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
    <script>
        function initMaps() {
            @foreach ($rubixdetails as $detail)
                (function() {
                    var start = "{{ $detail->merchant_address }}";
                    var end = "{{ $detail->consignee_address }}";
                    var mapElement = document.getElementById('map-{{ $detail->id }}');
                    
                    if (!mapElement) return; // Exit if map element is not found
                    
                    var map = new google.maps.Map(mapElement, {
                        zoom: 10,
                        center: { lat: -34.397, lng: 150.644 } // Default center
                    });

                    var directionsService = new google.maps.DirectionsService;
                    var directionsRenderer = new google.maps.DirectionsRenderer;
                    directionsRenderer.setMap(map);

                    directionsService.route({
                        origin: start,
                        destination: end,
                        travelMode: 'DRIVING'
                    }, function(response, status) {
                        if (status === 'OK') {
                            directionsRenderer.setDirections(response);
                        } else {
                            window.alert('Directions request failed due to ' + status);
                        }
                    });
                })();
            @endforeach
        }
    </script>
</head>
<body onload="initMaps()">
    @foreach ($rubixdetails as $detail)
        <div id="map-{{ $detail->id }}" style="height: 500px; width: 100%; margin-bottom: 20px;"></div>
        <img src="{{ $detail->qr_code_url }}" alt="QR Code" style="display: block; margin: 10px 0;">
    @endforeach
</body>
</html>
