<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Include jQuery -->

<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 60%;
        height: 60%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);

    }

    .modal-body {
        overflow-y: auto;
        /* Allows vertical scrolling if content overflows */
        max-height: 800px;
        /* Sets a maximum height */
    }


    .close-btn {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close-btn:hover,
    .close-btn:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-content {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        /* Bootstrap primary color */
        color: white;
    }

    .modal-title {
        font-weight: bold;
    }

    .modal-body {
        font-size: 16px;
        line-height: 1.5;
    }

    .modal-footer {
        display: flex;
        justify-content: space-between;
    }

    .btn-secondary {
        background-color: #6c757d;
        /* Bootstrap secondary color */
        border: none;
    }

    .btn-primary {
        background-color: #28a745;
        /* Green button for printing */
        border: none;
    }

    .close {
        color: white;
        font-size: 1.5rem;
    }
</style>
@include('Components.Admin.Header')

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->
    {{-- <div class="navbar__left">
        <button type="button" class="res-sidebar-open-btn me-3">
            <i class="fas fa-bars" style="color: blue;"></i>
        </button>
    </div> --}}

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">All Driver's Salary</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAdmin">
                            <i class="fas fa-plus"></i> Add New
                        </button>
                    </div>
                </div>
                <div class ="pt-3">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#infoModal">
                        View Activity Logs and User Details
                    </button>
                </div>
                <div class="container mt-4 pb-3">
                    <!-- Modal -->
                    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="infoModalLabel">Activity Logs and
                                        User Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- User Details -->
                                    <div class="user-info mb-4">
                                        @if (auth()->check())
                                            <p><strong class="text-dark">Name:</strong> <span
                                                    class="text-dark">{{ auth()->user()->name }}</span>
                                            </p>
                                            <p><strong class="text-dark">Email:</strong> <span
                                                    class="text-dark">{{ auth()->user()->email }}</span>
                                            </p>
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
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Display the date once -->
                                                <tr>
                                                    <td colspan="2">
                                                        {{ \Carbon\Carbon::today()->toFormattedDateString() }}</td>
                                                </tr>
                                                <!-- Loop through today's activity logs -->
                                                @foreach ($activityLogs as $logs)
                                                    <tr>
                                                        <td>{{ $logs->activity }}</td>
                                                        <td>{{ $logs->created_at->format('h:i A') }}</td>
                                                        <!-- Show time only -->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <div
                                        class="dt-buttons btn-group d-flex align-items-center justify-content-between pb-3">
                                        <h4 class="mb-0">Updated Driver Salary = Driver Salary - 2% Withholding tax
                                        </h4>
                                        @include('Components.Admin.Export')
                                    </div>
                                    <table id="data-table" class="table table--light style--two display nowrap">
                                        <thead>
                                            <tr>
                                                <th>Delivery Routes</th>
                                                <th>Driver Salary</th>
                                                <th>Helper Salary</th>
                                                <th>Rates</th>
                                                <th>Updated Driver Salary(-2%)</th>
                                                <th>Updated Helper Salary(-2%)</th>
                                                <th>Updated Salary Rates</th>
                                                <!-- New column header -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($computedSalaries as $id => $salaries)
                                                @php
                                                    $driverSalaryWithholdingTax = $salaries['driver_salary'] * 0.98; // Apply 2% withholding tax to driver salary
                                                    $helperSalaryWithholdingTax = $salaries['helper_salary'] * 0.98;
                                                    $updatedSalary =
                                                        $driverSalaryWithholdingTax + $helperSalaryWithholdingTax; // Apply 2% withholding tax to helper salary
                                                @endphp
                                                <tr>
                                                    <td>{{ $salaries['delivery_routes'] }}</td>
                                                    <td>₱{{ number_format($salaries['driver_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($salaries['helper_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($salaries['total_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($driverSalaryWithholdingTax, 2) }}</td>
                                                    <!-- Driver salary after 2% withholding tax -->
                                                    <td class="text-start">
                                                        ₱{{ number_format($helperSalaryWithholdingTax, 2) }}</td>
                                                    <td>₱{{ number_format($updatedSalary, 2) }}</td>
                                                    <!-- Helper salary after 2% withholding tax -->
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="salaryDetailModal" tabindex="-1" role="dialog"
                            aria-labelledby="salaryDetailModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="salaryDetailModalLabel">Salary Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="salaryModalBody">
                                        <p><strong>Delivery Route:</strong> <span id="modalDeliveryRoute"></span></p>
                                        <p><strong>Driver Salary:</strong> <span id="modalDriverSalary"></span></p>
                                        <p><strong>Helper Salary:</strong> <span id="modalHelperSalary"></span></p>
                                        <p><strong>Total Salary:</strong> <span id="modalTotalSalary"></span></p>
                                        <p><strong>Updated Driver Salary (-2%):</strong> <span
                                                id="modalUpdatedDriverSalary"></span></p>
                                        <p><strong>Updated Helper Salary (-2%):</strong> <span
                                                id="modalUpdatedHelperSalary"></span></p>
                                        <p><strong>Updated Salary Rates:</strong> <span id="modalUpdatedSalary"></span>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="printButton">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

 <script>
    document.getElementById('printButton').addEventListener('click', function() {
        var printContent = document.getElementById('salaryModalBody').innerHTML;
        var printWindow = window.open('', '', 'height=600,width=800');

        printWindow.document.write('<html><head><title>Print Salary Details</title>');
        printWindow.document.write(
            '<style>' +
            'body { font-family: Arial, sans-serif; padding: 20px; }' + // Keep body font and padding
            '.center { text-align: center; margin-bottom: 20px; }' + // Center class for the image
            'img { width: 10%; height: auto; }' + // Image style
            'h5 { text-align: center; margin-bottom: 30px; }' + // Title style
            '</style>');
        printWindow.document.write('</head><body>');

        // Add the logo HTML with a centering class
        printWindow.document.write('<div class="center"><img src="{{ asset("Home/GDR Logo.png") }}" alt="GDR Logo"></div>');
        printWindow.document.write('<h5>Salary Details</h5>'); // Title added here
        printWindow.document.write(printContent);

        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.print();
    });
</script>




    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Include SweetAlert2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.btn-delete');
            var deleteForm = document.getElementById('deleteForm');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var url = button.getAttribute('data-url');
                    deleteForm.setAttribute('action', url);
                });
            });
        });
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('data-table');

            table.addEventListener('click', function(event) {
                const target = event.target.closest('tr');
                if (target) {
                    const deliveryRoute = target.cells[0].innerText;
                    const driverSalary = target.cells[1].innerText;
                    const helperSalary = target.cells[2].innerText;
                    const totalSalary = target.cells[3].innerText;
                    const updatedDriverSalary = target.cells[4].innerText;
                    const updatedHelperSalary = target.cells[5].innerText;
                    const updatedSalary = target.cells[6].innerText;

                    document.getElementById('modalDeliveryRoute').innerText = deliveryRoute;
                    document.getElementById('modalDriverSalary').innerText = driverSalary;
                    document.getElementById('modalHelperSalary').innerText = helperSalary;
                    document.getElementById('modalTotalSalary').innerText = totalSalary;
                    document.getElementById('modalUpdatedDriverSalary').innerText = updatedDriverSalary;
                    document.getElementById('modalUpdatedHelperSalary').innerText = updatedHelperSalary;
                    document.getElementById('modalUpdatedSalary').innerText = updatedSalary;

                    // Show the modal
                    $('#salaryDetailModal').modal('show');
                }
            });
        });
    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>
