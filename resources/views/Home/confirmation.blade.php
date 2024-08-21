<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 1) 0%, 
                rgba(0, 0, 255, 0.6) 40%, 
                rgba(255, 0, 0, 0.6) 60%, 
                rgba(255, 255, 255, 1) 100%);
            /* Adjust color stops to blend white with blue and red */
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .card img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Booking Confirmation</h1>
        <p>Booking submitted successfully!</p>
        <p>Tracking Number: {{ $trackingNumber }}</p>
        <img src="{{ asset($qrCodeUrl) }}" alt="QR Code">
    </div>
</body>
</html>
