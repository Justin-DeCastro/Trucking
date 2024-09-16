<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Include jQuery -->

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
                    <h6 class="page-title">All Admin</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAdmin">
                            <i class="fas fa-plus"></i> Add New
                        </button>
                    </div>
                </div>
                <div class ="pt-3">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#infoModal">
                        View Activity Logs and User Details
                    </button>
                </div>
                <div class="container mt-4 pb-3">
                    <!-- Modal -->
                    <div class="modal fade" id="infoModal" tabindex="-1"
                        aria-labelledby="infoModalLabel" aria-hidden="true">
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
                                                    <td colspan="2">{{ \Carbon\Carbon::today()->toFormattedDateString() }}</td>
                                                </tr>
                                                <!-- Loop through today's activity logs -->
                                                @foreach ($activityLogs as $logs)
                                                    <tr>
                                                        <td>{{ $logs->activity }}</td>
                                                        <td>{{ $logs->created_at->format('h:i A') }}</td> <!-- Show time only -->
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
                                    <h4>Updated Driver Salary = Driver Salary - 2% Withholding tax</h4>
                                    <table id="adminTable" class="table--light style--two table">
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
                                                    $updatedSalary = $driverSalaryWithholdingTax + $helperSalaryWithholdingTax; // Apply 2% withholding tax to helper salary
                                                @endphp
                                                <tr>
                                                    <td>{{ $salaries['delivery_routes'] }}</td>
                                                    <td>₱{{ number_format($salaries['driver_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($salaries['helper_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($salaries['total_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($driverSalaryWithholdingTax, 2) }}</td> <!-- Driver salary after 2% withholding tax -->
                                                    <td class="text-start">₱{{ number_format($helperSalaryWithholdingTax, 2) }}</td>
                                                    <td >₱{{ number_format($updatedSalary, 2) }}</td> <!-- Helper salary after 2% withholding tax -->
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>

                        <!-- Create Vehicle Modal -->
                        <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="manageAdminLabel">Create Vehicle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('salary.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="delivery_routes" class="form-label">Delivery Routes</label>
                                                <input type="text" id="delivery_routes" name="delivery_routes"
                                                    class="form-control" required
                                                    oninput="this.value = this.value.toUpperCase();">
                                            </div>

                                            <div class="mb-3">
                                                <label for="driver_name" class="form-label">Driver Salary</label>
                                                <input type="number" id="driver_name" name="driver_salary"
                                                    class="form-control" placeholder="dont use comma" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="helper_name" class="form-label">Helper Salary</label>
                                                <input type="number" id="helper_name" name="helper_salary"
                                                    class="form-control" placeholder="dont use comma" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Confirmation Modal -->
                        <div class="modal fade" id="confirmationModal" tabindex="-1"
                            aria-labelledby="confirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this vehicle?
                                    </div>
                                    <div class="modal-footer">
                                        <form id="deleteForm" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script
        src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteButtons = document.querySelectorAll('.btn-delete');
            var deleteForm = document.getElementById('deleteForm');

            deleteButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var url = button.getAttribute('data-url');
                    deleteForm.setAttribute('action', url);
                });
            });
        });
    </script>

    <script>
        $('form[id^="editJobForm"]').on('submit', function (e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(form[0]);
            var jobId = form.attr('id').replace('editJobForm', '');

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    }).then(() => {
                        $('#editJobModal' + jobId).modal('hide');
                        location.reload(); // Reload page or update table row
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to update vehicle. Please try again.',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: true
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#adminTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });

            var deleteButtons = document.querySelectorAll('.btn-delete');
            var deleteForm = document.getElementById('deleteForm');

            deleteButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var url = button.getAttribute('data-url');
                    deleteForm.setAttribute('action', url);
                });
            });
        });
    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteButtons = document.querySelectorAll('.btn-delete');
            var deleteForm = document.getElementById('deleteForm');

            deleteButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var url = button.getAttribute('data-url');
                    deleteForm.setAttribute('action', url);
                });
            });
        });
    </script>

    <script>
        $('form[id^="editJobForm"]').on('submit', function (e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(form[0]);
            var jobId = form.attr('id').replace('editJobForm', '');

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    }).then(() => {
                        $('#editJobModal' + jobId).modal('hide');
                        location.reload(); // Reload page or update table row
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to update vehicle. Please try again.',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: true
                    });
                }
            });
        });

    </script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>
