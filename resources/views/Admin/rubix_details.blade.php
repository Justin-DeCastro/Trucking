<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- DataTables Buttons CSS -->
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">

    <!-- Custom CSS for spacing -->
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

     

        .container-fluid {
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 0;
            /* Remove margin to touch sidebar */
            margin-left: 250px;
            /* Adjust based on sidebar width */
            /* Ensure top margin is retained */
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

        .table th,
        .table td {
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

            .table th,
            .table td {
                font-size: 14px;
            }

            .navbar-search input {
                width: 100%;
            }

            .container-fluid {
                margin-left: 0;
                /* Remove left margin on smaller screens */
            }
        }

       
        .logo img {
            width: 100px;
        }

        .waybill-details {
            text-align: right;
        }

        .waybill-number {
            font-weight: bold;
            font-size: 14px;
        }

        .non-dg {
            font-size: 12px;
            color: #666;
        }

        .order-details {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
        }

        .barcode {
            text-align: center;
            margin: 10px 0;
        }

        .barcode img {
            width: 50%;
        }

        .tracking-number {
            font-weight: bold;
            font-size: 14px;
            margin-top: 5px;
        }

        .address-section {
            display: flex;
            flex-direction: column;
        }

        .buyer-seller {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .seller,
        .buyer {
            flex: 1;
            text-align: center;
        }

        .address {
            display: flex;
            justify-content: space-between;
        }

        .from-address,
        .to-address {
            flex: 1;
            padding: 0 1rem;
        }

        .name,
        .address-line,
        .postal-code {
            margin-bottom: 0.5rem;
            font-weight: normal;
            /* Ensure text is not bold */
        }

        .name {
            font-weight: normal;
            /* Ensure name is not bold */
        }

        .address-line,
        .postal-code {
            font-weight: normal;
            /* Ensure other address fields are not bold */
        }

        .to-address {
            margin-left: auto;
        }

        .additional-info {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
        }

        .qr-section {
            text-align: center;
        }

        .qr-section img {
            width: 50px;
            height: 50px;
        }

        .product-info {
            margin-top: 10px;
            font-size: 12px;
        }

        .attempts {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .attempt {
            text-align: center;
            width: 30%;
            font-size: 12px;
            border: 1px solid #000;
            padding: 5px;
        }

        .attempt-number {
            font-weight: bold;
            font-size: 14px;
        }

        .dataTables_wrapper .dt-buttons {
            margin-bottom: 20px;
            /* Adjust the value as needed */
        }

        .qr-container {
            text-align: center;
            /* Center the QR code */
            margin-bottom: 20px;
        }
    </style>

    @include('Components.Admin.Header')

</head>

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')

    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h3 class="page-title p-2">Booking History</h3      >
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <div class="row mb-4 ">
                                    <div class="col-md-2 p-4">
                                        <label for="plate_number">Truck Plate Number:</label>
                                        <input type="text" id="plate_number" class="form-control"
                                            placeholder="Enter plate number">
                                    </div>
                                    <div class="col-md-4 p-4">
                                        <label for="start_date">Start Date:</label>
                                        <input type="date" id="start_date" class="form-control">
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end p-4">
                                        <button id="resetBtn" class="btn btn-secondary w-100">Reset Filter</button>
                                    </div>
                                </div>


                                <div
                                    class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins pb-3">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class='bx bx-export'></i> Export
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button type="button" id="copyBtn" class="btn dropdown-item">
                                                    <i class='bx bx-copy'></i> Copy
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" id="printBtn" class="btn dropdown-item">
                                                    <i class='bx bx-printer'></i> Print
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" id="pdfBtn" class="btn dropdown-item">
                                                    <i class='bx bxs-file-pdf'></i> PDF
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" id="excelBtn" class="btn dropdown-item">
                                                    <i class='bx bx-file'></i> Excel
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <table id="data-table" class="table table--light style--two display nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Trip Ticket Number</th>
                                            <th>Truck Plate Number</th>
                                            <th>Destination</th>
                                            <th>Proof of Delivery</th>
                                            <th>Remarks</th>
                                            <th>Status</th>
                                            <th>Reference</th>
                                            <th>Booking Created By</th>
                                            <th>Updated By</th>
                                            <th>Location Updated By</th>
                                            <th>Update Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rubixdetails as $detail)
                                            <tr class="clickable-row" data-bs-target="#modal{{ $detail->id }}">
                                                <td>{{ \Carbon\Carbon::parse($detail->date)->format('d-M-y h:i A') }}
                                                </td>
                                                <td>{{ $detail->trip_ticket }}</td>
                                                <td>{{ $detail->plate_number }}</td>
                                                <td>{{ $detail->location }}</td>
                                                <td>
                                                    @if ($detail->proof_of_delivery)
                                                        <a href="{{ asset($detail->proof_of_delivery) }}"
                                                            target="_blank">View Proof</a>
                                                    @else
                                                        No proof uploaded yet
                                                    @endif
                                                </td>
                                                <td>{{ $detail->remarks }}</td>
                                                <td>{{ $detail->status }}</td>
                                                <td>{{ $detail->order_status }}</td>
                                                <td>
                                                    @if ($detail->creator)
                                                        Created by: {{ $detail->creator->name }}<br>
                                                        Created on: {{ $detail->created_at->format('d-M-y h:i A') }}
                                                    @else
                                                        Not available
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($detail->updater)
                                                        Approved by: {{ $detail->updater->name }}<br>
                                                        Updated on: {{ $detail->updated_at->format('d-M-y h:i A') }}
                                                    @else
                                                        Not updated
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($detail->updater)
                                                        Location Updated by: {{ $detail->updater->name }}<br>
                                                        Location: {{ $detail->location }}<br>
                                                        Updated at:
                                                        {{ \Carbon\Carbon::parse($detail->location_updated_at)->format('d-M-y h:i A') }}
                                                    @else
                                                        Not updated
                                                    @endif
                                                </td>
                                                <td class="update-status">
                                                    <form id="statusForm"
                                                        action="{{ route('update.admin.status', ['id' => $detail->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="order_status"
                                                            value="Confirmed_delivery">
                                                        @php
                                                            $buttonClass =
                                                                $detail->order_status === 'Confirmed_delivery'
                                                                    ? 'btn-warning'
                                                                    : 'btn-success';
                                                            $buttonText =
                                                                $detail->order_status === 'Confirmed_delivery'
                                                                    ? 'Approved'
                                                                    : 'Approve';
                                                            $isDisabled =
                                                                $detail->order_status === 'Confirmed_delivery'
                                                                    ? 'disabled'
                                                                    : '';
                                                        @endphp
                                                        <button type="submit" id="approveButton"
                                                            class="btn {{ $buttonClass }}" {{ $isDisabled }}>
                                                            {{ $buttonText }}
                                                        </button>
                                                    </form>
                                                </td>
                                                <td class="actions-dropdown">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            id="dropdownActions{{ $detail->id }}"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="dropdownActions{{ $detail->id }}">
                                                            <li>
                                                                <button type="button" class="dropdown-item"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#waybillModal{{ $detail->id }}">
                                                                    <i class="fas fa-print"></i> Print Waybill
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="dropdown-item"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal{{ $detail->id }}">
                                                                    <i class="fas fa-eye"></i> View
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="dropdown-item"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#locationModal{{ $detail->id }}">
                                                                    <i class="fas fa-map-marker-alt"></i> Update
                                                                    Location
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($rubixdetails as $detail)
        <div class="modal fade" id="modal{{ $detail->id }}" tabindex="-1"
            aria-labelledby="modalLabel{{ $detail->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="max-width: 50%; width: auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="modalLabel{{ $detail->id }}">Details for Plate Number
                            {{ $detail->plate_number }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- QR Code Section -->

                    <div class="modal-body">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="class-col-md qr-container">
                                    <h2>QR Code</h2>
                                    <img src="{{ asset($detail->qr_code_path) }}" alt="QR Code" class="img-fluid">
                                </div>

                            </div>
                            <div class="row">
                                <!-- First Table Column -->
                                <div class="col-md-6">
                                    <h2>Package Reference</h2>
                                    <table class="table table-bordered">

                                        <tr>
                                            <td>Tracking Number</td>
                                            <td class="text-wrap">{{ $detail->tracking_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Pick Up</td>
                                            <td>{{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('F d, Y g:i A') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Created At</td>
                                            <td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            @php
                                                $statusColor = match ($detail->status) {
                                                    'Pod_returned' => 'white',
                                                    'Delivery_successful' => 'white',
                                                    'For_Pick-up' => 'white',
                                                    'First_delivery_attempt' => 'white',
                                                    'In_Transit' => 'white',
                                                    'Confirmed_delivery' => 'white',
                                                    default => 'black',
                                                };

                                                $bgColor = match ($detail->status) {
                                                    'Pod_returned' => 'red',
                                                    'Delivery_successful' => 'green',
                                                    'For_Pick-up' => 'blue',
                                                    'First_delivery_attempt' => 'orange',
                                                    'In_Transit' => 'purple',
                                                    'Confirmed_delivery' => 'teal',
                                                    default => 'transparent',
                                                };
                                            @endphp

                                            <td>
                                                <span
                                                    style="
            color: {{ $statusColor }};
            background-color: {{ $bgColor }};
            padding: 2px 5px;
            border-radius: 4px;
        ">
                                                    {{ $detail->status }}
                                                </span>
                                            </td>



                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Client</td>
                                            <td class="text-wrap">{{ $detail->sender_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Branch Code</td>
                                            <td class="text-wrap">{{ $detail->branch_code }}</td>
                                        </tr>
                                        <tr>
                                            <td>Package ID</td>
                                            <td class="text-wrap">
                                                @if ($detail->order_number)
                                                    {{ $detail->order_number }}<br>
                                                @else
                                                    Order Number is not available<br>
                                                @endif
                                                @if ($detail->consignee_address)
                                                    {{ $detail->consignee_address }}<br>
                                                @else
                                                    Consignee Address is null<br>
                                                @endif
                                                -
                                                @if ($detail->merchant_address)
                                                    {{ $detail->merchant_address }}<br>
                                                @else
                                                    Merchant Address is null<br>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Group ID</td>
                                            <td class="text-wrap">{{ $detail->group_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Order Number</td>
                                            <td class="text-wrap">{{ $detail->order_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Reference 1</td>
                                            <td>
                                                <span
                                                    style="
                                                                    color: {{ $detail->order_status == 'Confirmed_delivery' ? 'white' : 'black' }};
                                                                    background-color: {{ $detail->order_status == 'Confirmed_delivery' ? 'teal' : 'transparent' }};
                                                                    padding: 2px 5px;
                                                                    border-radius: 4px;
                                                                ">
                                                    {{ $detail->order_status }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Transport Mode</td>
                                            <td class="text-wrap">{{ $detail->transport_mode }}</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Type</td>
                                            <td class="text-wrap">{{ $detail->delivery_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Type</td>
                                            <td class="text-wrap">{{ $detail->shipping_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Journey Type</td>
                                            <td class="text-wrap">{{ $detail->journey_type }}</td>
                                        </tr>
                                    </table>
                                </div>

                                <!-- Second Table Column -->
                                <div class="col-md-6">
                                    <h2>Consignee Information</h2>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Consignee Name</td>
                                            <td class="text-wrap">{{ $detail->consignee_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td class="text-wrap">{{ $detail->consignee_address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Consignee Email</td>
                                            <td class="text-wrap">{{ $detail->consignee_email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Consignee Mobile</td>
                                            <td class="text-wrap">{{ $detail->consignee_mobile }}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td class="text-wrap">{{ $detail->consignee_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Province</td>
                                            <td class="text-wrap">{{ $detail->consignee_province }}</td>
                                        </tr>
                                        <tr>
                                            <td>Barangay</td>
                                            <td class="text-wrap">{{ $detail->consignee_barangay }}</td>
                                        </tr>
                                        <tr>
                                            <td>Building Type</td>
                                            <td class="text-wrap">{{ $detail->consignee_building_type }}
                                            </td>
                                        </tr>
                                    </table>

                                    <h2>Merchant Information</h2>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Merchant Name</td>
                                            <td class="text-wrap">{{ $detail->merchant_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td class="text-wrap">{{ $detail->merchant_address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Merchant Email</td>
                                            <td class="text-wrap">{{ $detail->merchant_email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Merchant Mobile</td>
                                            <td class="text-wrap">{{ $detail->merchant_mobile }}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td class="text-wrap">{{ $detail->merchant_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Province</td>
                                            <td class="text-wrap">{{ $detail->merchant_province }}</td>
                                        </tr>
                                        <tr class="travel-time">
                                            <td>Travel Time</td>
                                            <td class="text-wrap">
                                                <span class="countdown-timer" id="timer{{ $detail->id }}">
                                                    <span id="hours{{ $detail->id }}">00</span>:<span
                                                        id="minutes{{ $detail->id }}">00</span>:<span
                                                        id="seconds{{ $detail->id }}">00</span>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Travel Timeline</td>
                                            <td class="text-wrap">
                                                <div style="max-height: 150px; overflow-y: auto;">
                                                    <ul id="timelineHistory{{ $detail->id }}"
                                                        class="timeline-list">
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Google Maps Embed -->
                            <div class="row mt-4 route-map">
                                <div class="col-md-12">
                                    <h2>Route Map</h2>
                                    <div id="map{{ $detail->id }}" style="width: 100%; height: 500px;">
                                        <!-- Map will be displayed here -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"
                            onclick="printModal('modal{{ $detail->id }}')">Print</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <style>
        @media print {
            .modal-footer button {
                display: none;
                /* Hide the Close and Print buttons when printing */
            }
        }
    </style>

    @foreach ($rubixdetails as $detail)
        <div class="modal fade" id="waybillModal{{ $detail->id }}" tabindex="-1"
            aria-labelledby="waybillModalLabel{{ $detail->id }}" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 50%;">
                <div class="modal-content">

                    <div class="modal-body">
                        <!-- Waybill Structure Start -->
                        <div class="waybill-container">
                            <div class="header">
                                <div class="logo">
                                    <img src="{{ asset('Home/GDR Logo.png') }}" alt="Shopee Xpress Logo">
                                </div>
                                <div class="waybill-details">
                                    <div class="waybill-number"> {{ $detail->order_number }}</div>
                                    <div class="non-dg">Order Number</div>
                                </div>
                            </div>

                            <div class="order-details">
                                <div class="order-id">Product Name: {{ $detail->product_name }}</div>
                                <div class="order-type">Tracking Number:{{ $detail->tracking_number }}
                                </div>
                                <div class="order-home"></div>
                            </div>

                            <div class="qr-section">
                                <img src="{{ asset($detail->qr_code_path) }}" alt="QR Code" class="img-fluid">
                            </div>

                            <div class="address-section">
                                <div class="buyer-seller">
                                    <div class="seller">SELLER</div>
                                    <div class="buyer">BUYER</div>
                                </div>
                                <div class="address">
                                    <div class="from-address">
                                        <div class="name">{{ $detail->merchant_name }}</div>
                                        <div class="address-line">{{ $detail->merchant_address }}</div>
                                        <div class="postal-code">{{ $detail->merchant_mobile }}</div>
                                    </div>
                                    <div class="to-address">
                                        <div class="name">{{ $detail->consignee_name }}</div>
                                        <div class="address-line">{{ $detail->consignee_address }}</div>
                                        <div class="postal-code">{{ $detail->consignee_mobile }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="additional-info">
                                <div class="pickup">Pickup Date:
                                    {{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('Y-m-d') }}
                                </div>
                                <div class="order-date">Order Date:
                                    {{ \Carbon\Carbon::parse($detail->order_date)->format('Ymd') }}</div>
                                <div class="weight">Weight: 1,000 g</div>
                            </div>

                            {{-- <div class="barcode">
                                    <img src="{{ asset('Home/barcode.png') }}" alt="Barcode">
                                    <div class="tracking-number">SPEPH023893239343</div>
                                </div> --}}

                            <div class="product-info">
                                <div class="product-quantity">Product Quantity:
                                    {{ $detail->product_quantity }}</div>
                            </div>

                            <div class="attempts">
                                <div class="attempt">
                                    <div>Delivery Attempt</div>
                                    <div class="attempt-number">1</div>
                                </div>
                                <div class="attempt">
                                    <div>Delivery Attempt</div>
                                    <div class="attempt-number">2</div>
                                </div>
                                <div class="attempt">
                                    <div>Return Attempt</div>
                                    <div class="attempt-number">2</div>
                                </div>
                            </div>
                        </div>
                        <!-- Waybill Structure End -->
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"
                            onclick="printModal('waybillModal{{ $detail->id }}')">Print Booking Details</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media print {
                #map{{ $detail->id }} {
                    display: none;
                    /* Hide the map when printing */
                }

                .modal-footer {
                    display: none;
                    /* Hide the footer with buttons */
                }
            }
        </style>
    @endforeach

    @foreach ($rubixdetails as $detail)
        <!-- Update Status Modal -->
        <div class="modal fade" id="updateStatusModal{{ $detail->id }}" tabindex="-1"
            aria-labelledby="updateStatusModalLabel{{ $detail->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateStatusModalLabel{{ $detail->id }}">Update
                            Order Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Update Status Form -->
                        <form action="{{ route('update.admin.status', $detail->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="order_status{{ $detail->id }}" class="form-label">Order
                                    Status</label>
                                <select name="order_status" id="order_status{{ $detail->id }}" class="form-select"
                                    required>
                                    <option value="Confirmed_delivery"
                                        {{ $detail->order_status === 'Confirmed_delivery' ? 'selected' : '' }}>
                                        Confirm Delivery</option>

                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resetBtn = document.getElementById('resetBtn');
            const plateNumberInput = document.getElementById('plate_number');
            const startDateInput = document.getElementById('start_date');
            const dataTable = document.getElementById('data-table');

            function filterTable() {
                const plateNumberFilter = plateNumberInput.value.toLowerCase();
                const startDateFilter = startDateInput.value;

                const rows = dataTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

                Array.from(rows).forEach(row => {
                    const plateNumberCell = row.cells[2].textContent
                        .toLowerCase(); // Truck Plate Number column
                    const dateCell = new Date(row.cells[0].textContent).toISOString().split('T')[
                        0]; // Date column

                    const dateMatch = startDateFilter ? dateCell === startDateFilter :
                        true; // Exact date match
                    const plateMatch = plateNumberFilter ? plateNumberCell.includes(plateNumberFilter) :
                        true;

                    if (dateMatch && plateMatch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            // Attach event listeners for filtering
            plateNumberInput.addEventListener('input', filterTable);
            startDateInput.addEventListener('change', filterTable);

            // Reset button functionality
            resetBtn.addEventListener('click', function() {
                plateNumberInput.value = '';
                startDateInput.value = '';
                Array.from(dataTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr')).forEach(
                    row => {
                        row.style.display = '';
                    });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Trigger modal on row click
            $('tr').on('click', function() {
                var modalId = $(this).data('bs-target');
                $(modalId).modal('show');
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.clickable-row').forEach(row => {
                row.addEventListener('click', function(event) {
                    // Check if the click is inside the Update Status or Actions column
                    if (!event.target.closest('.update-status') && !event.target.closest(
                            '.actions-dropdown')) {
                        const target = this.getAttribute('data-bs-target');
                        const modal = document.querySelector(target);

                        if (modal) {
                            const modalInstance = new bootstrap.Modal(modal);
                            modalInstance.show();
                        }
                    }
                });
            });
        });
    </script>

    <script>
        function printModal(modalId) {
            var modalContent = document.getElementById(modalId).innerHTML; // Get the modal content

            // Create a temporary div to manipulate the content
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = modalContent;

            // Remove elements that you don't want to print
            const travelTime = tempDiv.querySelector('.travel-time');
            const travelTimeline = tempDiv.querySelector('.travel-timeline');
            const routeMap = tempDiv.querySelector('.route-map');
            const closeButton = tempDiv.querySelector('.btn-close'); // Close button
            const printButton = tempDiv.querySelector('.btn-primary'); // Print button
            const modalFooterCloseButton = tempDiv.querySelector('.modal-footer .btn-secondary'); // Close button in footer
            const modalBody = tempDiv.querySelector('.modal-body'); // Modal body container
            const modalHeader = tempDiv.querySelector('.modal-header'); // Capture the modal header
            const modalDialog = tempDiv.querySelector('.modal-dialog'); // Capture the modal dialog

            // Remove unwanted elements
            if (travelTime) travelTime.remove();
            if (travelTimeline) travelTimeline.remove();
            if (routeMap) routeMap.remove();
            if (closeButton) closeButton.remove(); // Remove close button (top)
            if (printButton) printButton.remove(); // Remove print button (top)
            if (modalFooterCloseButton) modalFooterCloseButton.remove(); // Remove close button (bottom)
            if (modalDialog) modalDialog.remove(); // Remove the modal dialog

            if (modalBody) {
                // Move the contents out of the modal body
                while (modalBody.firstChild) {
                    tempDiv.appendChild(modalBody.firstChild);
                }
                modalBody.remove(); // Remove the modal body container
            }

            // Append the modal header after the QR code
            if (modalHeader) {
                const qrContainer = tempDiv.querySelector('.qr-container'); // Find the QR code container
                if (qrContainer) {
                    qrContainer.insertAdjacentElement('afterend', modalHeader); // Move the header below the QR code
                }
            }

            // Open a new window for printing
            var printWindow = window.open('', '', 'width=1000,height=1000');

            // Start writing to the print window
            printWindow.document.write('<html><head><title>Booking Details</title>');

            // Add your styles here
            printWindow.document.write('<style>');
            printWindow.document.write(`
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .modal-content {
                border: 1px solid #ddd;
                padding: 20px;
                border-radius: 5px;
                background-color: #fff;
            }
            .qr-container {
                text-align: center; /* Center the QR code */
                margin-bottom: 20px;
            }
            .table {
                width: 100%; /* Adjusted for proper width */
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            .table-bordered td {
                border: 1px solid #ddd;
                padding: 10px;
            }
            .text-wrap {
                word-wrap: break-word;
            }
            .waybill-container {
                display: block;
            }
            .logo-container {
                text-align: center; /* Center the logo */
                margin-bottom: 20px; /* Space below the logo */
            }
        `);
            printWindow.document.write('</style>');

            // Add the centered logo to the print window
            printWindow.document.write(`
            <div class="logo-container">
                <img src="{{ asset('Home/GDR Logo.png') }}" alt="Shopee Xpress Logo" style="width: 10%; height: auto;">
            </div>
        `);

            printWindow.document.write('</head><body>');
            printWindow.document.write(tempDiv.innerHTML); // Use modified content
            printWindow.document.write('</body></html>');

            printWindow.document.close();
            printWindow.focus();
            printWindow.print(); // Trigger print
        }
    </script>

    <script>
        var timerIntervals = {}; // Store interval references

        function startTimer(detailId, duration) {
            var hoursElement = document.getElementById('hours' + detailId);
            var minutesElement = document.getElementById('minutes' + detailId);
            var secondsElement = document.getElementById('seconds' + detailId);

            var startTime = Date.now();
            var endTime = startTime + duration * 1000;

            // Timer interval
            timerIntervals[detailId] = setInterval(function() {
                var now = Date.now();
                var elapsedTime = Math.max(now - startTime, 0);

                var hours = Math.floor(elapsedTime / (1000 * 60 * 60));
                var minutes = Math.floor((elapsedTime % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((elapsedTime % (1000 * 60)) / 1000);

                hoursElement.textContent = String(hours).padStart(2, '0');
                minutesElement.textContent = String(minutes).padStart(2, '0');
                secondsElement.textContent = String(seconds).padStart(2, '0');

            }, 1000); // Update every second
        }

        function stopTimer(detailId) {
            // Clear the interval to stop the timer
            clearInterval(timerIntervals[detailId]);
            console.log('Timer stopped for detail ID:', detailId);
        }

        function initMap(detailId, startAddress, endAddress) {
            var map = new google.maps.Map(document.getElementById('map' + detailId), {
                zoom: 10,
                center: {
                    lat: -34.397,
                    lng: 150.644
                } // Default center; will update later
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

                    // Define the truck icon URL
                    var truckIcon = 'https://maps.google.com/mapfiles/kml/shapes/truck.png';

                    // Create the truck marker
                    var truckMarker = new google.maps.Marker({
                        position: result.routes[0].legs[0].start_location,
                        map: map,
                        icon: truckIcon,
                        title: 'Moving Truck'
                    });

                    // Set timer
                    var durationInSeconds = result.routes[0].legs[0].duration.value;
                    startTimer(detailId, durationInSeconds);

                    // Move the truck marker as the truck moves
                    var route = result.routes[0].legs[0];
                    var step = 0;

                    // Get the timeline element where we will record each place the truck encounters
                    var timelineListElement = document.getElementById('timelineHistory' + detailId);

                    // Define a custom icon for each place
                    var placeIcon = {
                        url: 'Home/trucklocator-removebg-preview.png', // Path to your icon
                        scaledSize: new google.maps.Size(30, 30) // Adjust the size (width, height)
                    };

                    function moveTruck() {
                        if (step < route.steps.length) {
                            truckMarker.setPosition(route.steps[step].end_location); // Move the truck marker

                            // Create a marker for the current step
                            var placeMarker = new google.maps.Marker({
                                position: route.steps[step].end_location,
                                map: map,
                                icon: placeIcon, // Use the custom icon here
                                title: route.steps[step]
                                    .instructions // Set the title to the step's instructions
                            });

                            // Add a listener for the hover effect
                            var infoWindow = new google.maps.InfoWindow();
                            placeMarker.addListener('mouseover', function() {
                                infoWindow.setContent(route.steps[step].instructions);
                                infoWindow.open(map, placeMarker);
                            });

                            // Add a listener to close the info window on mouseout
                            placeMarker.addListener('mouseout', function() {
                                infoWindow.close();
                            });

                            // Get the address details for the current step's location
                            var geocoder = new google.maps.Geocoder();
                            geocoder.geocode({
                                'location': route.steps[step].end_location
                            }, function(results, status) {
                                if (status === 'OK' && results[0]) {
                                    // Create a full address string
                                    var fullAddress = results[0].address_components.map(function(
                                        component) {
                                        return component.long_name;
                                    }).join(', ');

                                    // Create an entry in the timeline for the current location
                                    var placeElement = document.createElement('li');
                                    placeElement.innerHTML = "The truck is now in: " +
                                        fullAddress; // Show full address
                                    timelineListElement.appendChild(placeElement);
                                }
                            });

                            step++;
                            setTimeout(moveTruck, 2000); // Simulate truck movement every 2 seconds
                        } else {
                            // Truck has reached the destination
                            console.log("Truck has arrived at the destination. Stopping timer.");
                            stopTimer(detailId); // Stop the timer when truck reaches the destination

                            // Record final timeline entry
                            var arrivalElement = document.createElement('li');
                            arrivalElement.innerHTML = "<strong>Truck has arrived at the destination.</strong>";
                            timelineListElement.appendChild(arrivalElement);
                        }
                    }

                    moveTruck(); // Start moving the truck

                } else {
                    console.error('Directions request failed due to ' + status);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            @foreach ($rubixdetails as $detail)
                document.getElementById('modal{{ $detail->id }}').addEventListener('shown.bs.modal',
                    function() {
                        initMap(
                            '{{ $detail->id }}',
                            '{{ $detail->origin }}',
                            '{{ $detail->destination }}'
                        );
                    });
            @endforeach
        });
    </script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <!-- jsPDF with autoTable for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

    <!-- FileSaver.js for CSV export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>
   
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#data-table').DataTable({
                responsive: true, // Enable responsiveness
                paging: true, // Enables pagination
                searching: true, // Enables search
                ordering: true, // Enables sorting
            });

            // Initialize Google Maps
            function initializeGoogleMaps() {
                // Your Google Maps initialization code here
            }

            // Load Google Maps script
            $.getScript(
                'https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&libraries=places',
                function() {
                    initializeGoogleMaps();
                }
            );
        });

        // Function to extract all table data
        function getTableData() {
            var table = $('#data-table').DataTable();
            var data = table.rows({
                search: 'applied'
            }).data().toArray();
            var headers = table.columns().header().toArray().map(th => $(th).text());

            return {
                data,
                headers
            };
        }

        // Copy function
        document.getElementById('copyBtn').addEventListener('click', function() {
            var {
                data
            } = getTableData();
            var textToCopy = data.map(row => row.map(cell => $('<div>').html(cell).text()).join("\t")).join("\n");

            var tempTextArea = document.createElement("textarea");
            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);
            alert("Table data copied to clipboard!");
        });

        // Print function
        document.getElementById('printBtn').addEventListener('click', function() {
            var {
                data,
                headers
            } = getTableData();

            // Find the index of the "Action" column
            var actionColumnIndex = headers.indexOf('Action');

            // Filter out the "Action" column from headers
            var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);

            // Filter out the "Action" column from data
            var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

            var printContents = `
            <table border="1">
                <thead>
                    <tr>${filteredHeaders.map(header => `<th>${header}</th>`).join('')}</tr>
                </thead>
                <tbody>
                    ${filteredData.map(row => `<tr>${row.map(cell => `<td>${$('<div>').html(cell).text()}</td>`).join('')}</tr>`).join('')}
                </tbody>
            </table>`;

            var originalContents = document.body.innerHTML;

            document.body.innerHTML = `<html><head><title>Print</title></head><body>${printContents}</body></html>`;
            window.print();
            document.body.innerHTML = originalContents;
        });

        // PDF export function
        document.getElementById('pdfBtn').addEventListener('click', function() {
            const {
                jsPDF
            } = window.jspdf;
            var doc = new jsPDF('landscape'); // Set the orientation to landscape

            var {
                data,
                headers
            } = getTableData();

            // Find the index of the "Action" column
            var actionColumnIndex = headers.indexOf('Action');

            // Filter out the "Action" column from headers
            var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);

            // Filter out the "Action" column from data
            var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

            // Convert HTML content to text
            var cleanData = filteredData.map(row => row.map(cell => $('<div>').html(cell).text()));

            doc.autoTable({
                head: [filteredHeaders],
                body: cleanData,
                startY: 10,
                theme: 'grid',
                margin: {
                    top: 10
                },
                styles: {
                    fontSize: 8,
                },
                headStyles: {
                    fillColor: [22, 160, 133],
                    textColor: 255
                },
                pageBreak: 'auto',
            });

            doc.save('table_data.pdf');
        });

        // Excel export function
        document.getElementById('excelBtn').addEventListener('click', function() {
            var {
                data,
                headers
            } = getTableData();

            // Find the index of the "Action" column
            var actionColumnIndex = headers.indexOf('Action');

            // Filter out the "Action" column from headers
            var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);

            // Filter out the "Action" column from data
            var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

            var wb = XLSX.utils.book_new();
            var cleanData = filteredData.map(row => row.map(cell => $('<div>').html(cell).text()));
            var ws = XLSX.utils.aoa_to_sheet([filteredHeaders, ...cleanData]);
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            XLSX.writeFile(wb, "table_data.xlsx");
        });
    </script>

</body>

</html>
