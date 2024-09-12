<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include jQuery -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
@include('Components.Admin.Header')

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.CoordinatorSidebar')
    <!-- sidebar end -->

    <!-- navbar-wrapper start -->
    {{-- <nav class="navbar-wrapper bg--dark d-flex flex-wrap"> --}}
        {{-- <div class="navbar__left">
            <button type="button" class="res-sidebar-open-btn me-3"><i class="fas fa-bars"></i></button>

        </div> --}}
        <div class="navbar__right">
            <ul class="navbar__action-list">



                <li class="dropdown d-flex profile-dropdown">
                    <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="navbar-user">
                            <span class="navbar-user__thumb"><img
                                    src="Home/user-avatar-male-5.png"
                                    alt="image"></span>
                            <span class="navbar-user__info">
                                <span class="navbar-user__name">Admin</span>
                            </span>
                            <span class="icon"><i class="fas fa-chevron-circle-down"></i></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">


                        <a href="logout"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                            <span class="dropdown-menu__caption">Logout</span>
                        </a>
                    </div>
                    <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                        <i class="las la-sliders-h"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar-wrapper end -->


    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">All Admin</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageAdmin">
    <i class="las la-plus"></i> Add New
</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>Plate Number</th>
                                                <th>Arrival Proof</th>
                                                <th>Proof of Delivery</th>
                                                <th>Completion of Trip</th>
                                                <th> STATUS</th>
                                                <th class="text-end">Actions</th> <!-- New column for the button -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trips as $trip)
                                                <tr>
                                                    <td>{{ $trip->plate_number }}</td>
                                                    <td>
                                                        @if ($trip->arrival_proof)
                                                            @foreach (json_decode($trip->arrival_proof, true) as $file)
                                                                <img src="{{ asset('storage/arrival_proofs/' . $file) }}"
                                                                     alt="Arrival Proof"
                                                                     style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;"
                                                                     data-toggle="modal"
                                                                     data-target="#imageModal"
                                                                     data-image="{{ asset('storage/arrival_proofs/' . $file) }}">
                                                            @endforeach
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($trip->proof_of_delivery)
                                                            @foreach (json_decode($trip->proof_of_delivery, true) as $file)
                                                                <img src="{{ asset('storage/proofs_of_delivery/' . $file) }}"
                                                                     alt="Proof of Delivery"
                                                                     style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;"
                                                                     data-toggle="modal"
                                                                     data-target="#imageModal"
                                                                     data-image="{{ asset('storage/proofs_of_delivery/' . $file) }}">
                                                            @endforeach
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>

                                                    <td class="text-start">{{ $trip->trip_completion }}</td>
                                                    <td id="status-{{ $trip->id }}">
                                                        @if ($trip->status === 'Pending')
                                                            <span style="background-color: yellow; box-shadow: 0 4px 8px rgba(255, 255, 0, 0.5); padding: 2px 4px;">
                                                                {{ $trip->status }}
                                                            </span>
                                                        @elseif ($trip->status === 'Closed')
                                                            <span style="background-color: red; color: white; box-shadow: 0 4px 8px rgba(128, 128, 128, 0.5); padding: 2px 4px;">
                                                                {{ $trip->status }}
                                                            </span>
                                                        @else
                                                            {{ $trip->status }}
                                                        @endif
                                                    </td>



                                                    <td>
                                                        <form action="{{ route('trips.close', $trip->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn {{ $trip->status == 'Closed' ? 'btn-secondary' : 'btn-primary' }} text-start" {{ $trip->status == 'Closed' ? 'disabled' : '' }}>
                                                                Close Trip
                                                            </button>
                                                        </form>
                                                    </td>


                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>






            </div>
        </div>
    </div>

    <!-- Create Vehicle Modal -->
    <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manageAdminLabel">Create POD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('trip.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Driver’s Picture: Destination info (arrival proof) -->
                        <div class="mb-3">
                            <label for="arrival_proof" class="form-label">Driver’s Picture: Destination Info (Arrival Proof)</label>
                            <input type="file" id="arrival_proof" name="arrival_proof[]" class="form-control" accept="image/*" multiple>
                        </div>

                        <div class="mb-3">
                            <label for="proof_of_delivery" class="form-label">Proof of Delivery</label>
                            <input type="file" id="proof_of_delivery" name="proof_of_delivery[]" class="form-control" accept="image/*" multiple>
                        </div>

                        <!-- Completion of Trip -->
                        <div class="mb-3">
                            <label for="trip_completion" class="form-label">Completion of Trip</label>
                            <select id="trip_completion" name="trip_completion" class="form-control" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="Returned Successfully">Returned Successfully</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>

                        <!-- Tag: POD return (handled by coordinator) / POD waybill -->
                        {{-- <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <select id="tag" name="tag" class="form-control" required>
                                <option value="" disabled selected>Select Tag</option>
                                <option value="POD Return">POD Return</option>

                            </select>
                        </div> --}}

                        <!-- Close Trip -->
                        <div class="mb-3">
                            <label for="close_trip" class="form-label">Close Trip</label>
                            <select id="close_trip" name="close_trip" class="form-control" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="Closed Trip">Mark Trip as Successful</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>

                        <!-- Plate Number -->
                        <div class="mb-3">
                            <label for="plate_number" class="form-label">Plate Number</label>
                            <select id="plate_number" name="plate_number" class="form-control" required>
                                <option value="" disabled selected>Select Plate Number</option>
                                @foreach($plateNumbers as $plateNumber)
                                    <option value="{{ $plateNumber }}">{{ $plateNumber }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>




            </div>
        </div>
    </div>
{{-- update modal --}}
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Trip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="{{ route('trip.update', 0) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="editId" name="id">

                    <!-- Arrival Proof -->
                    <div class="mb-3">
                        <label for="editArrivalProof" class="form-label">Arrival Proof</label>
                        <input type="file" id="editArrivalProof" name="arrival_proof" class="form-control">
                        <img id="editArrivalProofPreview" src="" alt="Arrival Proof" style="width: 100%; object-fit: cover; margin-top: 10px;">
                    </div>

                    <!-- Completion of Trip -->
                    <div class="mb-3">
                        <label for="editTripCompletion" class="form-label">Completion of Trip</label>
                        <select id="editTripCompletion" name="trip_completion" class="form-control" required>
                            <option value="Returned Successfully">Returned Successfully</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>

                    <!-- Tag -->
                    <div class="mb-3">
                        <label for="editTag" class="form-label">Tag</label>
                        <select id="editTag" name="tag" class="form-control" required>
                            <option value="POD Return">POD Return</option>
                            <!-- Add more options if needed -->
                        </select>
                    </div>

                    <!-- Close Trip -->
                    <div class="mb-3">
                        <label for="editCloseTrip" class="form-label">Close Trip</label>
                        <select id="editCloseTrip" name="close_trip" class="form-control" required>
                            <option value="Mark Trip as Successful">Mark Trip as Successful</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="plate_number" class="form-label">Plate Number</label>
                        <select id="plate_number" name="plate_number" class="form-control" required>
                            <option value="" disabled selected>Select Plate Number</option>
                            @foreach($plateNumbers as $plateNumber)
                                <option value="{{ $plateNumber }}">{{ $plateNumber }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <!-- Confirmation Modal -->
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this employee?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
<script>
    document.getElementById('editArrivalProof').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('editArrivalProofPreview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Fill the form with existing data when the modal is shown
    document.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const id = button.getAttribute('data-id');
        const arrivalProof = button.getAttribute('data-arrival_proof');
        const tripCompletion = button.getAttribute('data-trip_completion');
        const tag = button.getAttribute('data-tag');
        const closeTrip = button.getAttribute('data-close_trip');

        document.getElementById('editId').value = id;
        document.getElementById('editArrivalProofPreview').src = arrivalProof || '';
        document.getElementById('editTripCompletion').value = tripCompletion;
        document.getElementById('editTag').value = tag;
        document.getElementById('editCloseTrip').value = closeTrip;
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
    $('form[id^="editJobForm"]').on('submit', function(e) {
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
        success: function(response) {
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
        error: function(xhr, status, error) {
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
        "use strict";
        const colors = {
            success: '#28c76f',
            error: '#eb2222',
            warning: '#ff9f43',
            info: '#1e9ff2',
        }

        const icons = {
            success: 'fas fa-check-circle',
            error: 'fas fa-times-circle',
            warning: 'fas fa-exclamation-triangle',
            info: 'fas fa-exclamation-circle',
        }

        const notifications = [];
        const errors = [];


        const triggerToaster = (status, message) => {
            iziToast[status]({
                title: status.charAt(0).toUpperCase() + status.slice(1),
                message: message,
                position: "topRight",
                backgroundColor: '#fff',
                icon: icons[status],
                iconColor: colors[status],
                progressBarColor: colors[status],
                titleSize: '1rem',
                messageSize: '1rem',
                titleColor: '#474747',
                messageColor: '#a2a2a2',
                transitionIn: 'obunceInLeft'
            });
        }

        if (notifications.length) {
            notifications.forEach(element => {
                triggerToaster(element[0], element[1]);
            });
        }

        if (errors.length) {
            errors.forEach(error => {
                triggerToaster('error', error);
            });
        }

        function notify(status, message) {
            if (typeof message == 'string') {
                triggerToaster(status, message);
            } else {
                $.each(message, (i, val) => triggerToaster(status, val));
            }
        }
    </script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>


    <script>
        "use strict";
        bkLib.onDomLoaded(function () {
            $(".nicEdit").each(function (index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function ($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function () {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function () {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function () {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function (e) {
                const {
                    top,
                    left
                } = $(this).next(".dropdown-menu")[0].getBoundingClientRect();
                $(this).next(".dropdown-menu").css({
                    position: "fixed",
                    inset: "unset",
                    transform: "unset",
                    top: top + "px",
                    left: left + "px",
                });
            });
        })(jQuery);
    </script>


    <script>
        (function ($) {
            "use strict";
            $(document).on('click', '.confirmationBtn', function () {
                var modal = $('#confirmationModal');
                let data = $(this).data();
                modal.find('.question').text(`${data.question}`);
                modal.find('form').attr('action', `${data.action}`);
                modal.modal('show');
            });
        })(jQuery);
    </script>

    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
 <script>
    document.addEventListener('DOMContentLoaded', function () {
        var editModal = document.getElementById('editModal');
        var deleteModal = document.getElementById('deleteModal');

        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var id_number = button.getAttribute('data-id_number');
            var position = button.getAttribute('data-position');
            var profile_image = button.getAttribute('data-profile_image');

            var form = document.getElementById('editForm');
            form.action = form.action.replace(/\/\d+$/, '/' + id); // Update form action with employee id

            document.getElementById('editId').value = id;
            document.getElementById('editName').value = name;
            document.getElementById('editIdNumber').value = id_number;
            document.getElementById('editPosition').value = position;
            document.getElementById('editProfileImagePreview').src = profile_image;
        });

        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var id = button.getAttribute('data-id');

            var form = document.getElementById('deleteForm');
            form.action = form.action.replace(/\/\d+$/, '/' + id); // Update form action with employee id
        });
    });
</script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>
    <script>
        "use strict";
        function getEmptyMessage() {
            return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
                    <p class="text-muted">No search result found</p>
                </div>
            </li>`
        }
    </script>
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Image Preview" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to update modal image source -->
    <script>

        $('#imageModal').on('show.bs.modal', function (e) {
            var image = $(e.relatedTarget).data('image');
            $('#modalImage').attr('src', image);
        });
    </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <!-- DataTables Buttons JS -->
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

<!-- Include SweetAlert2 JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            paging: true,
            searching: true,
            ordering: true,
            info: true,
            responsive: true
        });
    });
    </script>

</body>

</html>
