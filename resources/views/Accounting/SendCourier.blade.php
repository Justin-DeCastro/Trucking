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
                                    <td>123456789</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>2024-08-15</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Shipped</td>
                                </tr>
                                <tr>
                                    <td>Client</td>
                                    <td>John Doe</td>
                                </tr>
                                <tr>
                                    <td>Branch Code</td>
                                    <td>ABC123</td>
                                </tr>
                                <tr>
                                    <td>Package ID</td>
                                    <td>PCKG987654</td>
                                </tr>
                                <tr>
                                    <td>Group ID</td>
                                    <td>GRP5678</td>
                                </tr>
                                <tr>
                                    <td>Order Number</td>
                                    <td>ORD123456</td>
                                </tr>
                                <tr>
                                    <td>Reference 1</td>
                                    <td>REF001</td>
                                </tr>
                                <tr>
                                    <td>Reference 2</td>
                                    <td>REF002</td>
                                </tr>
                                <tr>
                                    <td>Reference 3</td>
                                    <td>REF003</td>
                                </tr>
                                <tr>
                                    <td>Reference 4</td>
                                    <td>REF004</td>
                                </tr>
                                <tr>
                                    <td>Reference 5</td>
                                    <td>REF005</td>
                                </tr>
                                <tr>
                                    <td>Transport Mode</td>
                                    <td>Air</td>
                                </tr>
                                <tr>
                                    <td>Delivery Type</td>
                                    <td>Express</td>
                                </tr>
                                <tr>
                                    <td>Shipping Type</td>
                                    <td>Standard</td>
                                </tr>
                                <tr>
                                    <td>Journey Type</td>
                                    <td>One-Way</td>
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
                                    <td>Jane Smith</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>123 Main St</td>
                                </tr>
                                <tr>
                                    <td>Consignee Email</td>
                                    <td>jane.smith@example.com</td>
                                </tr>
                                <tr>
                                    <td>Consignee Mobile</td>
                                    <td>(555) 987-6543</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>XYZ789</td>
                                </tr>
                                <tr>
                                    <td>Province</td>
                                    <td>PCKG123456</td>
                                </tr>
                                <tr>
                                    <td>Barangay</td>
                                    <td>GRP9876</td>
                                </tr>
                                <tr>
                                    <td>Building Type</td>
                                    <td>ORD654321</td>
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
                                    <td>ABC Corp</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>123 Market Street</td>
                                </tr>
                                <tr>
                                    <td>Merchant Email</td>
                                    <td>contact@abccorp.com</td>
                                </tr>
                                <tr>
                                    <td>Merchant Mobile</td>
                                    <td>(555) 123-4567</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>M123456</td>
                                </tr>
                                <tr>
                                    <td>Province</td>
                                    <td>M123456</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('Components.Admin.Footer')
</div>

</body>
</html>
