<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Include jQuery -->
<style>
    body {
        font-family: 'Arial', sans-serif;
        color: #333;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .page-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .navbar-wrapper {
        background-color: #333;
        color: #fff;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
    }

    .navbar-search {
        display: flex;
        align-items: center;
        position: relative;
    }

    .navbar-search input {
        padding: 10px;
        border: none;
        border-radius: 20px;
        width: 200px;
        outline: none;
    }

    .navbar-search i {
        position: absolute;
        right: 10px;
        color: #666;
    }

    .container-fluid {
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 0; /* Remove margin to touch sidebar */
        margin-left: 250px; /* Adjust based on sidebar width */
        margin-top: 20px; /* Ensure top margin is retained */
    }

    .page-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
        background-color: #fff;
    }

    .table th, .table td {
        padding: 12px;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table-colgroup {
        width: 30%;
        border-right: 2px solid #ddd;
    }

    h2 {
        font-size: 20px;
        color: #333;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .table th, .table td {
            font-size: 14px;
        }

        .navbar-search input {
            width: 100%;
        }

        .container-fluid {
            margin-left: 0; /* Remove left margin on smaller screens */
        }
    }
</style>
@include('Components.Admin.Header')

<body>


    @include('Components.Admin.Sidebar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Inbound and Outbound</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        {{-- <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageSubcontractor">
    <i class="las la-plus"></i> IN
</button>
<button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageWithdraw">
    <i class="las la-plus"></i> OUT
</button> --}}

                    </div>
                </div>
                <!-- Display the overall Outstanding Balance -->

                <div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-export'></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li><button type="button" id="copyBtn" class="btn dropdown-item"><i
                                        class='bx bx-copy'></i> Copy</button></li>
                            <li><button type="button" id="printBtn" class="btn dropdown-item"><i
                                        class='bx bx-printer'></i> Print</button></li>
                            <li><button type="button" id="excelBtn" class="btn dropdown-item"><i
                                        class='bx bx-file'></i>Excel</button></li>
                            <li><button type="button" id="pdfBtn" class="btn dropdown-item"><i
                                        class='bx bxs-file-pdf'></i> Pdf</button></li>
                        </ul>
                    </div>
                    <div class="dropdown">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Tracking Number</th>
                                                <th>Truck Plate Number</th>
                                                <th>Destination</th>
                                                <th>Remarks</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rubixdetails as $detail)
                                            <tr>
                                            <td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}</td>
                                                <td>{{ $detail->tracking_number }}</td>

                                                <td>{{ $detail->plate_number }}</td>
                                                <td>{{ $detail->consignee_address }}</td>
                                                <td>{{ $detail->remarks }}</td>
                                                <td>
                                                    <!-- Button to trigger modal -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#modal{{ $detail->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>
                @foreach ($rubixdetails as $detail)
    <div class="modal fade" id="modal{{ $detail->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $detail->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 70%; max-width: 1000px; height: 70%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{ $detail->id }}">Details for Plate Number {{ $detail->plate_number }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <!-- First Table Column -->
                            <div class="col-md-6">
                                <h2>Package Reference</h2>
                                <table class="table">
                                    <tr><td>Tracking Number</td><td>{{ $detail->tracking_number }}</td></tr>
                                    <tr><td>Created At</td><td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}</td></tr>
                                    <tr><td>Status</td><td>
                                        <span style="
                                            color: {{ $detail->status == 'Pod_returned' ? 'white' : ($detail->status == 'Delivery successful' ? 'white' : ($detail->status == 'For Pick-up' ? 'white' : ($detail->status == 'First_delivery_attempt' ? 'white' : 'black'))) }};
                                            background-color: {{ $detail->status == 'Pod_returned' ? 'red' : ($detail->status == 'Delivery successful' ? 'green' : ($detail->status == 'For Pick-up' ? 'blue' : ($detail->status == 'First_delivery_attempt' ? 'orange' : 'transparent'))) }};
                                            padding: 2px 5px;
                                            border-radius: 4px;
                                        ">
                                            {{ $detail->status }}
                                        </span>
                                    </td></tr>
                                    <tr><td>Client</td><td>{{ $detail->sender_name }}</td></tr>
                                    <tr><td>Branch Code</td><td>{{ $detail->branch_code }}</td></tr>
                                    <tr><td>Package ID</td><td>
                                        @if($detail->order_number)
                                            {{ $detail->order_number }}<br>
                                        @else
                                            Order Number is not available<br>
                                        @endif
                                        @if($detail->consignee_address)
                                            {{ $detail->consignee_address }}<br>
                                        @else
                                            Consignee Address is null<br>
                                        @endif
                                        -
                                        @if($detail->merchant_address)
                                            {{ $detail->merchant_address }}<br>
                                        @else
                                            Merchant Address is null<br>
                                        @endif
                                    </td></tr>
                                    <tr><td>Group ID</td><td>{{ $detail->group_id }}</td></tr>
                                    <tr><td>Order Number</td><td>{{ $detail->order_number }}</td></tr>
                                    <tr><td>Reference 1</td><td>{{ $detail->reference_one }}</td></tr>
                                    <tr><td>Reference 2</td><td>{{ $detail->reference_two }}</td></tr>
                                    <tr><td>Reference 3</td><td>{{ $detail->reference_three }}</td></tr>
                                    <tr><td>Reference 4</td><td>{{ $detail->reference_four }}</td></tr>
                                    <tr><td>Reference 5</td><td>{{ $detail->reference_five }}</td></tr>
                                    <tr><td>Transport Mode</td><td>{{ $detail->transport_mode }}</td></tr>
                                    <tr><td>Delivery Type</td><td>{{ $detail->delivery_type }}</td></tr>
                                    <tr><td>Shipping Type</td><td>{{ $detail->shipping_type }}</td></tr>
                                    <tr><td>Journey Type</td><td>{{ $detail->journey_type }}</td></tr>
                                </table>
                            </div>

                            <!-- Second Table Column -->
                            <div class="col-md-6">
                                <h2>Consignee Information</h2>
                                <table class="table">
                                    <tr><td>Consignee Name</td><td>{{ $detail->consignee_name }}</td></tr>
                                    <tr><td>Address</td><td>{{ $detail->consignee_address }}</td></tr>
                                    <tr><td>Consignee Email</td><td>{{ $detail->consignee_email }}</td></tr>
                                    <tr><td>Consignee Mobile</td><td>{{ $detail->consignee_mobile }}</td></tr>
                                    <tr><td>City</td><td>{{ $detail->consignee_city }}</td></tr>
                                    <tr><td>Province</td><td>{{ $detail->consignee_province }}</td></tr>
                                    <tr><td>Barangay</td><td>{{ $detail->consignee_barangay }}</td></tr>
                                    <tr><td>Building Type</td><td>{{ $detail->consignee_building_type }}</td></tr>
                                </table>

                                <h2>Merchant Information</h2>
                                <table class="table">
                                    <tr><td>Merchant Name</td><td>{{ $detail->merchant_name }}</td></tr>
                                    <tr><td>Address</td><td>{{ $detail->merchant_address }}</td></tr>
                                    <tr><td>Merchant Email</td><td>{{ $detail->merchant_email }}</td></tr>
                                    <tr><td>Merchant Mobile</td><td>{{ $detail->merchant_mobile }}</td></tr>
                                    <tr><td>City</td><td>{{ $detail->merchant_city }}</td></tr>
                                    <tr><td>Province</td><td>{{ $detail->merchant_province }}</td></tr>
                                </table>
                            </div>
                        </div>

                        <!-- Google Maps Embed -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h2>Route Map</h2>
                                <div id="map{{ $detail->id }}" style="width: 100%; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="printModal('modal{{ $detail->id }}')">Print</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

            <style>
                @media print {
                    .modal-footer button {
                        display: none; /* Hide the Close and Print buttons when printing */
                    }
                }
                </style>
<script>
    function printModal(modalId) {
        var printContent = document.getElementById(modalId).innerHTML;
        var originalContent = document.body.innerHTML;
        var printWindow = window.open('', '', 'height=600,width=800');

        // Write content to the new window
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Print</title>');
        printWindow.document.write('<style>body { margin: 20px; } table { width: 100%; border-collapse: collapse; } table, th, td { border: 1px solid black; } th, td { padding: 8px; text-align: left; } @media print { .modal-footer { display: none; } }</style>'); // Add any necessary styles here
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Print the content
        printWindow.print();

        // Close the print window after printing
        printWindow.onafterprint = function() {
            printWindow.close();
        };
    }
    </script>
                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

                <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css"
                    rel="stylesheet">
                <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css"
                    rel="stylesheet">
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('.jobOffersTable').DataTable({
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        });
                    });
                </script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>
                <script>
                    if ($('li').hasClass('active')) {
                        $('.sidebar__menu-wrapper').animate({
                            scrollTop: eval($(".active").offset().top - 320)
                        }, 500);
                    }
                </script>

                <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!-- Include Bootstrap JS -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

                <!-- Include SweetAlert2 JS (optional) -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- DataTables CSS -->
                <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
                <!-- DataTables JS -->
                <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                <!-- DataTables Buttons Extension CSS -->
                <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">
                <!-- DataTables Buttons Extension JS -->
                <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&libraries=places"></script>
                <script>
function initMap(detailId, startAddress, endAddress) {
    var map = new google.maps.Map(document.getElementById('map' + detailId), {
        zoom: 10,
        center: {lat: -34.397, lng: 150.644} // Default center; will update later
    });

    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    var request = {
        origin: startAddress,
        destination: endAddress,
        travelMode: 'DRIVING'
    };

    directionsService.route(request, function(result, status) {
        if (status === 'OK') {
            directionsRenderer.setDirections(result);
            map.setCenter(result.routes[0].legs[0].start_location);
        } else {
            console.error('Directions request failed due to ' + status);
        }
    });
}

// Function to initialize map for each modal when opened
document.addEventListener('DOMContentLoaded', function () {
    @foreach ($rubixdetails as $detail)
        document.getElementById('modal{{ $detail->id }}').addEventListener('shown.bs.modal', function () {
            initMap(
                '{{ $detail->id }}',
                '{{ $detail->merchant_address }}',
                '{{ $detail->consignee_address }}'
            );
        });
    @endforeach
});
</script>


</body>

</html>
