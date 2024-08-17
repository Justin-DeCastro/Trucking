<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Send</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
</head>

<body>

<div class="page-wrapper default-version">

    @include('Components.Admin.Header')

    @include('Components.Admin.Sidebar')

    <nav class="navbar-wrapper">
        <div class="navbar__left">
            <button type="button" class="res-sidebar-open-btn me-3"><i class="fas fa-bars"></i></button>
            <form class="navbar-search">
                <input type="search" name="search" id="searchInput" autocomplete="off" placeholder="Search here...">
                <i class="fas fa-search"></i>
                <ul class="search-list"></ul>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Status</h6>
                </div>
                @foreach($references as $code)
                <div class="container">
                    <div class="row">
                        <!-- First Table Column -->
                        <div class="col-md-6">
                            <h2>Package Reference </h2>
                            <table class="table">
                                <colgroup>
                                    <col class="table-colgroup">
                                    <col>
                                </colgroup>

                                <tr>
                                    <td>Tracking Number</td>
                                    <td>{{ $code->tracking_number }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $code->created_at->format('Y-m-d') }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $code->tracking_status }}</td>
                                </tr>
                                <tr>
                                    <td>Client</td>
                                    <td>{{ $code->sender_name }}</td>
                                </tr>
                                <tr>
                                    <td>Branch Code</td>
                                    <td>{{ $code->branch_code }}</td>
                                </tr>
                                <tr>
                                    <td>Package ID</td>
                                    <td>{{ $code->package_id }}</td>
                                </tr>
                                <tr>
                                    <td>Group ID</td>
                                    <td>{{ $code->group_id }}</td>
                                </tr>
                                <tr>
                                    <td>Order Number</td>
                                    <td>{{ $code->group_id }}</td>
                                </tr>
                                <tr>
                                    <td>Reference 1</td>
                                    <td>{{ $code->reference_one }}</td>
                                </tr>
                                <tr>
                                    <td>Reference 2</td>
                                    <td>{{ $code->reference_two }}</td>
                                </tr>
                                <tr>
                                    <td>Reference 3</td>
                                    <td>{{ $code->reference_three }}</td>
                                </tr>
                                <tr>
                                    <td>Reference 4</td>
                                    <td>{{ $code->reference_four }}</td>
                                </tr>
                                <tr>
                                    <td>Reference 5</td>
                                    <td>{{ $code->reference_five }}</td>
                                </tr>
                                <tr>
                                    <td>Transport Mode</td>
                                    <td>{{ $code->transport_mode }}</td>
                                </tr>
                                <tr>
                                    <td>Delivery Type</td>
                                    <td>{{ $code->delivery_type }}</td>
                                </tr>
                                <tr>
                                    <td>Shipping Type</td>
                                    <td>{{ $code->shipping_type }}</td>
                                </tr>
                                <tr>
                                    <td>Journey Type</td>
                                    <td>{{ $code->journey_type }}</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Second Table Column -->
                        <div class="col-md-6">
                            <h2>Consignee Information</h2>
                            <table class="table">
                                <colgroup>
                                    <col class="table-colgroup">
                                    <col>
                                </colgroup>

                                <tr>
                                    <td>Consignee Name</td>
                                    <td>{{ $code->consignee_name }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $code->consignee_address }}</td>
                                </tr>
                                <tr>
                                    <td>Consignee Email</td>
                                    <td>{{ $code->consignee_email}}</td>
                                </tr>
                                <tr>
                                    <td>Consignee Mobile</td>
                                    <td>{{ $code->consignee_mobile }}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{{ $code->consignee_city }}</td>
                                </tr>
                                <tr>
                                    <td>Province</td>
                                    <td>{{ $code->consignee_province }}</td>
                                </tr>
                                <tr>
                                    <td>Barangay</td>
                                    <td>{{ $code->consignee_barangay }}</td>
                                </tr>
                                <tr>
                                    <td>Building Type</td>
                                    <td>{{ $code->consignee_building_type }}</td>
                                </tr>
                            </table>

                            <h2>Merchant Information</h2>
                            <table class="table">
                                <colgroup>
                                    <col class="table-colgroup">
                                    <col>
                                </colgroup>

                                <tr>
                                    <td>Merchant Name</td>
                                    <td>{{ $code->merchant_name }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $code->merchant_address }}</td>
                                </tr>
                                <tr>
                                    <td>Merchant Email</td>
                                    <td>{{ $code->merchant_email }}</td>
                                </tr>
                                <tr>
                                    <td>Merchant Mobile</td>
                                    <td>{{ $code->merchant_mobile }}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{{ $code->merchant_city }}</td>
                                </tr>
                                <tr>
                                    <td>Province</td>
                                    <td>{{ $code->merchant_province }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>

    @include('Components.Admin.Footer')
</div>

</body>
</html>
