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
        margin: 0;
        /* Remove margin to touch sidebar */
        margin-left: 250px;
        /* Adjust based on sidebar width */
        margin-top: 20px;
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



    .waybill-container {
    width: 100%;
    height: 100%;
    border: 2px solid #000;
    padding: 20px; /* Ensure enough padding */
    background-color: #fff;
    box-sizing: border-box; /* Include padding and border in the width/height */
    overflow: auto; /* Ensure content is scrollable if it overflows */
}

/* Other CSS remains unchanged */


    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #000;
        padding-bottom: 5px;

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

.seller, .buyer {
    flex: 1;
    text-align: center;
}

.address {
    display: flex;
    justify-content: space-between;
}

.from-address, .to-address {
    flex: 1;
    padding: 0 1rem;
}

.name, .address-line, .postal-code {
    margin-bottom: 0.5rem;
    font-weight: normal; /* Ensure text is not bold */
}

.name {
    font-weight: normal; /* Ensure name is not bold */
}

.address-line, .postal-code {
    font-weight: normal; /* Ensure other address fields are not bold */
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
        margin-top: 10px;
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
</style>
@include('Components.Admin.Header')

<body>
    @include('Components.Admin.Navbar')

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
                        {{-- <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-export'></i> Export
                        </button> --}}
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
<!-- Section for Activity Logs -->
<div class="container mt-4">
    <!-- Button to Open Modal -->
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#infoModal">
        View Activity Logs and User Details
    </button>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Activity Logs and User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- User Details -->
                    <div class="user-info mb-4">
                        @if(auth()->check())
                            <p><strong class="text-dark">Name:</strong> <span class="text-dark">{{ auth()->user()->name }}</span></p>
                            <p><strong class="text-dark">Email:</strong> <span class="text-dark">{{ auth()->user()->email }}</span></p>
                        @else
                            <p class="text-danger">User not logged in.</p>
                        @endif
                        <!-- Add other user details here if needed -->
                    </div>

                    <!-- Activity Logs -->
                    <div class="activity-logs">
                        <h4 class="text-primary mb-3">Activity Logs</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activityLogs as $logs)
                                    <tr>
                                        <td>{{ $logs->activity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Existing Table -->


                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Tracking Number</th>
                                                <th>Truck Plate Number</th>
                                                <th>Destination</th>
                                                <th>Proof of Delivery</th>
                                                <th>Remarks</th>
                                                <th>Status</th>
                                                <th>Reference</th>
                                                <th>Update Status</th>
                                                <th>Updated By</th> <!-- New column for Updated By -->

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
                                                    <td>
                                                        @if ($detail->proof_of_delivery)
                                                            <a href="{{ asset($detail->proof_of_delivery) }}" target="_blank">View Proof</a>
                                                        @else
                                                            No proof uploaded yet
                                                        @endif
                                                    </td>
                                                    <td>{{ $detail->remarks }}</td>
                                                    <td>{{ $detail->status }}</td>
                                                    <td>{{ $detail->order_status }}</td>
                                                    <td>
                                                        <!-- Approve Button -->
                                                        <form id="statusForm" action="{{ route('update.admin.status', ['id' => $detail->id]) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="order_status" value="Confirmed_delivery">
                                                            @php
                                                                $buttonClass = $detail->order_status === 'Confirmed_delivery' ? 'btn-warning' : 'btn-success';
                                                                $buttonText = $detail->order_status === 'Confirmed_delivery' ? 'Approved' : 'Approve';
                                                                $isDisabled = $detail->order_status === 'Confirmed_delivery' ? 'disabled' : '';
                                                            @endphp
                                                            <button type="submit" id="approveButton" class="btn {{ $buttonClass }}" {{ $isDisabled }}>{{ $buttonText }}</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        @if ($detail->updater)
                                                            Approved by: {{ $detail->updater->name }} <!-- Display the name of the user who updated -->
                                                            <br>
                                                            Updated on: {{ $detail->updated_at->format('F d, Y g:i A') }} <!-- Display the date of the last update -->
                                                        @else
                                                            Not updated
                                                        @endif
                                                    </td>


                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#waybillModal{{ $detail->id }}">
                                                            <i class="fas fa-print"></i> Print Waybill
                                                        </button>
                                                        <!-- Actions Button to trigger modal -->
                                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal{{ $detail->id }}">
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
                <div class="modal fade" id="modal{{ $detail->id }}" tabindex="-1"
                    aria-labelledby="modalLabel{{ $detail->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="width: 70%; max-width: 1000px; height: 70%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel{{ $detail->id }}">Details for Plate Number
                                    {{ $detail->plate_number }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- QR Code Section -->
                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <h2>QR Code</h2>
                                    <img src="{{ asset($detail->qr_code_path) }}" alt="QR Code" class="img-fluid">
                                </div>
                            </div>

                            <div class="modal-body">
                                <div class="container">
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
                                                    <td>{{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('F d, Y g:i A') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Created At</td>
                                                    <td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    @php
    $statusColor = match($detail->status) {
        'Pod_returned' => 'white',
        'Delivery_successful' => 'white',
        'For_Pick-up' => 'white',
        'First_delivery_attempt' => 'white',
        'In_Transit' => 'white',
        'Confirmed_delivery' => 'white',
        default => 'black',
    };

    $bgColor = match($detail->status) {
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
    <span style="
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
                                                    <td>Reference 2</td>
                                                    <td class="text-wrap">{{ $detail->reference_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Reference 3</td>
                                                    <td class="text-wrap">{{ $detail->reference_three }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Reference 4</td>
                                                    <td class="text-wrap">{{ $detail->reference_four }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Reference 5</td>
                                                    <td class="text-wrap">{{ $detail->reference_five }}</td>
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
                                                    <td class="text-wrap">{{ $detail->consignee_building_type }}</td>
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
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Google Maps Embed -->
                                    <div class="row mt-4">
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
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
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
    <div class="modal fade" id="waybillModal{{ $detail->id }}" tabindex="-1" aria-labelledby="waybillModalLabel{{ $detail->id }}" aria-hidden="true">
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
                                 <div class="order-type">Tracking Number:{{ $detail->tracking_number}}</div>
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
                                 <div class="pickup">Pickup Date: {{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('Y-m-d') }}</div>
                                 <div class="order-date">Order Date: {{ \Carbon\Carbon::parse($detail->order_date)->format('Ymd') }}</div>
                                 <div class="weight">Weight: 1,000 g</div>
                             </div>

                             {{-- <div class="barcode">
                                 <img src="{{ asset('Home/barcode.png') }}" alt="Barcode">
                                 <div class="tracking-number">SPEPH023893239343</div>
                             </div> --}}

                             <div class="product-info">
                                 <div class="product-quantity">Product Quantity: {{ $detail->product_quantity }}</div>
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
                         <button type="button" class="btn btn-primary" onclick="printModal('waybillModal{{ $detail->id }}')">Print Waybill</button>
                     </div>
                 </div>
             </div>
         </div>
     @endforeach



                @foreach ($rubixdetails as $detail)
                <!-- Update Status Modal -->
                <div class="modal fade" id="updateStatusModal{{ $detail->id }}" tabindex="-1" aria-labelledby="updateStatusModalLabel{{ $detail->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateStatusModalLabel{{ $detail->id }}">Update Order Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Update Status Form -->
                                <form action="{{ route('update.admin.status', $detail->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                        <label for="order_status{{ $detail->id }}" class="form-label">Order Status</label>
                                        <select name="order_status" id="order_status{{ $detail->id }}" class="form-select" required>
                                            <option value="Confirmed_delivery" {{ $detail->order_status === 'Confirmed_delivery' ? 'selected' : '' }}>Confirm Delivery</option>

                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Status</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                <script>
                    function printModal(modalId) {
                        var printContent = document.getElementById(modalId).innerHTML;
                        var originalContent = document.body.innerHTML;
                        var printWindow = window.open('', '', 'height=600,width=800');

                        // Write content to the new window
                        printWindow.document.open();
                        printWindow.document.write('<html><head><title>Print</title>');
                        printWindow.document.write(
                            '<style>body { margin: 20px; } table { width: 100%; border-collapse: collapse; } table, th, td { border: 1px solid black; } th, td { padding: 8px; text-align: left; } @media print { .modal-footer { display: none; } }</style>'
                            ); // Add any necessary styles here
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
<script>
    function printModal(modalId) {
        var printContents = document.getElementById(modalId).innerHTML;

        // Create a new window for printing
        var printWindow = window.open('', '', 'width=800,height=800'); // Adjusted width and added height

        // Write the HTML to the print window
        printWindow.document.write('<html><head><title>Print Waybill</title>');

        // Include the styles for printing
        printWindow.document.write('<style>');
        printWindow.document.write('body, html { margin: 0; padding: 0; font-family: Arial, sans-serif; }'); // Remove default margins and padding
        printWindow.document.write('.waybill-container { width: 100%; max-width: 800px; margin: 0; border: 2px solid #000; padding: 20px; background-color: #fff; box-sizing: border-box; overflow: hidden; }'); // Adjusted width for container and box-sizing
        printWindow.document.write('.header { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #000; padding-bottom: 5px; }');
        printWindow.document.write('.logo img { width: 100px; }');
        printWindow.document.write('.waybill-details { text-align: right; }');
        printWindow.document.write('.waybill-number { font-weight: bold; font-size: 14px; }');
        printWindow.document.write('.non-dg { font-size: 12px; color: #666; }');
        printWindow.document.write('.order-details { display: flex; justify-content: space-between; margin-top: 10px; font-size: 12px; }');
        printWindow.document.write('.barcode { text-align: center; margin: 10px 0; }');
        printWindow.document.write('.barcode img { width: 50%; }');
        printWindow.document.write('.tracking-number { font-weight: bold; font-size: 14px; margin-top: 5px; }');
        printWindow.document.write('.address-section { border-top: 2px solid #000; padding-top: 10px; margin-top: 10px; font-size: 12px; }');
        printWindow.document.write('.buyer-seller { display: flex; justify-content: space-between; font-weight: bold; }');
        printWindow.document.write('.address { display: flex; justify-content: space-between; margin-top: 5px; }');
        printWindow.document.write('.from-address, .to-address { width: 48%; }');
        printWindow.document.write('.name { font-weight: bold; }');
        printWindow.document.write('.additional-info { display: flex; justify-content: space-between; margin-top: 10px; font-size: 12px; }');
        printWindow.document.write('.qr-section { text-align: center; margin-top: 10px; }');
        printWindow.document.write('.qr-section img { width: 50px; height: 50px; }');
        printWindow.document.write('.product-info { margin-top: 10px; font-size: 12px; }');
        printWindow.document.write('.attempts { display: flex; justify-content: space-between; margin-top: 10px; }');
        printWindow.document.write('.attempt { text-align: center; width: 30%; font-size: 12px; border: 1px solid #000; padding: 5px; }');
        printWindow.document.write('.attempt-number { font-weight: bold; font-size: 14px; }');

        // Media query for print
        printWindow.document.write('@media print {');
        printWindow.document.write('.waybill-container { width: 100%; max-width: 100%; margin: 0; padding: 20px; box-sizing: border-box; }'); // Adjust width for print
        printWindow.document.write('.modal-footer, .modal-footer * { display: none !important; }');
        printWindow.document.write('.modal-header, .modal-header * { display: none !important; }'); // Hide footer and header in print preview
        printWindow.document.write('body { margin: 0; }');
        printWindow.document.write('html { width: 100%; }');
        printWindow.document.write('</style>');

        printWindow.document.write('</head><body>');
        printWindow.document.write('<div class="waybill-container">' + printContents + '</div>');
        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function logActivity(activity) {
            fetch('{{ route('log.activity') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ activity: activity })
            });
        }

        // Capture click events
        document.body.addEventListener('click', function(event) {
            let element = event.target;
            let activity = `Clicked on ${element.tagName} (${element.className}) at ${new Date().toLocaleString()}`;
            logActivity(activity);
        });

        // Capture page load or refresh
        logActivity('Page loaded or refreshed');
    });
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
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&libraries=places">
                </script>
               <script>
                function initMap(detailId, startAddress, endAddress) {
                    var map = new google.maps.Map(document.getElementById('map' + detailId), {
                        zoom: 10,
                        center: { lat: -34.397, lng: 150.644 } // Default center; will update later
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

                            // Define the moving truck marker
                            var truckIcon = 'https://maps.google.com/mapfiles/kml/shapes/truck.png'; // URL to truck icon
                            var truckMarker = new google.maps.Marker({
                                position: result.routes[0].legs[0].start_location,
                                map: map,
                                icon: truckIcon,
                                title: 'Moving Truck'
                            });

                            // Animate the truck along the route
                            var steps = result.routes[0].legs[0].steps;
                            var stepIndex = 0;
                            var stepCount = steps.length;

                            function moveTruck() {
                                if (stepIndex < stepCount) {
                                    var step = steps[stepIndex];
                                    var path = step.path;
                                    var pathLength = path.length;
                                    var i = 0;

                                    function animate() {
                                        if (i < pathLength) {
                                            truckMarker.setPosition(path[i]);
                                            i++;
                                            setTimeout(animate, 100); // Adjust the speed here
                                        } else {
                                            stepIndex++;
                                            if (stepIndex < stepCount) {
                                                moveTruck(); // Move to the next step
                                            }
                                        }
                                    }

                                    animate();
                                }
                            }

                            moveTruck(); // Start the animation

                            // Fetch and display estimated arrival time
                            fetchEstimatedArrivalTime(startAddress, endAddress, detailId);

                        } else {
                            console.error('Directions request failed due to ' + status);
                        }
                    });
                }

                function fetchEstimatedArrivalTime(startAddress, endAddress, detailId) {
                    var apiKey = '{{ env('GOOGLE_MAPS_API_KEY') }}';
                    var url = `https://maps.googleapis.com/maps/api/distancematrix/json?origins=${encodeURIComponent(startAddress)}&destinations=${encodeURIComponent(endAddress)}&key=${apiKey}`;

                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'OK') {
                                var duration = data.rows[0].elements[0].duration.text;
                                document.getElementById('arrival-time' + detailId).innerText = `Estimated Arrival Time: ${duration}`;
                            } else {
                                console.error('Distance Matrix request failed due to ' + data.status);
                            }
                        })
                        .catch(error => console.error('Error fetching arrival time:', error));
                }

                // Initialize map when modals are shown
                document.addEventListener('DOMContentLoaded', function() {
                    @foreach ($rubixdetails as $detail)
                        document.getElementById('modal{{ $detail->id }}').addEventListener('shown.bs.modal', function() {
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
