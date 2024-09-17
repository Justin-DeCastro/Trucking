<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- DataTables Buttons Extension CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">

    <style>
        .notification-card {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1050;
            /* Ensure it's above other content */
            width: 300px;
            /* Adjust width as needed */
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .notification-card.show {
            opacity: 1;
            transform: translateY(0);
        }

        .notification-card.d-none {
            opacity: 0;
            transform: translateY(-100px);
        }

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
    </style>
      @include('Components.Admin.Header')
</head>

<body>
  
    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Plate Number Bookings</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <!-- Breadcrumb plugins if any -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table id="data-table" class="table table--light style--two display nowrap">
                                        <thead>
                                            <tr>
                                                <th>Driver Name</th>
                                                <th>Total Bookings</th>
                                                <th>Date</th>
                                                <th>Product Name</th>
                                                <th>Consignee Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($driverDetails as $detail)
                                                @foreach ($detail->bookingDetails as $index => $booking)
                                                    <tr data-driver-name="{{ $detail->driver_name }}">
                                                        @if ($index === 0)
                                                            <td>{{ $detail->driver_name }}</td>
                                                            <td>{{ $detail->total_bookings }}</td>
                                                        @else
                                                            <td></td>
                                                            <td></td>
                                                        @endif
                                                        <td>{{ \Carbon\Carbon::parse($booking['date'])->format('d-M-y h:i A') }}
                                                        </td>
                                                        <td>{{ $booking['product_name'] }}</td>
                                                        <td class="text-start">{{ $booking['consignee_address'] }}</td>
                                                    </tr>
                                                @endforeach
                                            @empty
                                                <tr>
                                                    <td colspan="5">No data available</td>
                                                </tr>
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Include SweetAlert2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons Extension JS -->
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>
    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable({
                responsive: true, // Enable responsiveness
                paging: true, // Enables pagination
                searching: true, // Enables search
                ordering: true, // Enables sorting
            });
        });
    </script>

</body>

</html>
