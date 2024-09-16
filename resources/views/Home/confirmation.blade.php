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
                rgba(0, 0, 255, 0.8) 50%,
                rgba(255, 0, 0, 0.4) 75%,
                rgba(255, 255, 255, 1) 100%);
            /* White to blue to red, with blue being more prominent */
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            text-align: center;
            border: 1px solid #ddd;
            position: relative;
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
        .note {
            position: absolute;
            top: -30px; /* Adjust this value based on the card size */
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            animation: pulse 2s infinite;
            z-index: 1; /* Ensure the note is above the card content */
        }
        @keyframes pulse {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
                transform: translateX(-50%) scale(1.05);
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="note">Please take a screenshot!</div>
        <h1>Booking Confirmation</h1>
        <p>Booking submitted successfully!</p>
        <p>Tracking Number: {{ $trackingNumber }}</p>
        <img src="{{ asset($qrCodeUrl) }}" alt="QR Code">
    </div>
</body>
</html>
