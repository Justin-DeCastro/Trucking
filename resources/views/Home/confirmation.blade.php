<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Booking submitted successfully!</p>
    <p>Tracking Number: {{ $trackingNumber }}</p>
    <img src="{{ asset($qrCodeUrl) }}" alt="QR Code">
</body>
</html>
