<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>

    @include('Components.Admin.Header')
</head>

<body>

    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->

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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="adminTable" class="table--light style--two table">
                                        <thead>
                                            <tr>
                                                <th>Delivery Routes</th>
                                                <th>Driver Salary</th>
                                                <th>Helper Salary</th>
                                                <th>Rates</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($computedSalaries as $id => $salaries)
                                                <tr>
                                                    <td>{{ $salaries['delivery_routes'] }}</td>
                                                    <td>₱{{ number_format($salaries['driver_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($salaries['helper_salary'], 2) }}</td>
                                                    <td>₱{{ number_format($salaries['total_salary'], 2) }}</td>
                                                    <td>
                                                        <!-- Edit Button -->
                                                        <!-- Delete Button -->
                                                    </td>
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
