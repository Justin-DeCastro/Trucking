<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Include jQuery -->

@include('Components.Admin.Header')

<body>


    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->

    <!-- navbar-wrapper start -->
    <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
        <div class="navbar__left">
            <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>

        </div>
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
                        <i class="fas fa-sliders-h"></i>
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
                    <h6 class="page-title"></h6>
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
                                    <div class="d-flex mb-3 align-items-center">
                                        {{-- <h6 class="page-title">Preventive Maintenance</h6> --}}
                                        <div class="ms-auto w-100 d-flex justify-content-start">
                                            <form method="GET" action="{{ route('preventive-maintenance') }}" class="d-flex align-items-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ request('plate_number') ? request('plate_number') : 'Select Plate Number' }}
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" href="{{ route('preventive-maintenance') }}">Select Plate Number</a></li>
                                                        @foreach($plateNumbers as $plateNumber)
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('preventive-maintenance', ['plate_number' => $plateNumber]) }}">
                                                                    {{ $plateNumber }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </form>
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
                                                                    <th>Plate Number</th>
                                                                    <th>Parts Replaced</th>
                                                                    <th>Price of Part</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($preventive as $maintenance)
                                                                    <tr>
                                                                        <td>{{ $maintenance->plate_number }}</td>
                                                                        <td>{{ $maintenance->parts_replaced }}</td>
                                                                        <td>₱{{ number_format($maintenance->price_parts_replaced, 2) }}</td>
                                                                        <td>
                                                                            <!-- Update Button -->
                                                                            <button type="button" class="btn btn-primary btn-sm"
                                                                                data-bs-toggle="modal" data-bs-target="#updateModal"
                                                                                data-id="{{ $maintenance->id }}"
                                                                                data-plate="{{ $maintenance->plate_number }}"
                                                                                data-parts="{{ $maintenance->parts_replaced }}"
                                                                                data-price="{{ $maintenance->price_parts_replaced }}">
                                                                                Update
                                                                            </button>

                                                                            <!-- Delete Button -->
                                                                            <form action="{{ route('maintenance.destroy', $maintenance->id) }}" method="POST" style="display:inline-block;">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                                                    Delete
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
                    <h5 class="modal-title" id="manageAdminLabel">Create Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('preventives.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="plate_number" class="form-label">Plate Number</label>
                            <select id="plate_number" name="plate_number" class="form-control" required>
                                <option value="">Select Plate Number</option>
                                @foreach($plateNumbers as $plateNumber)
                                    <option value="{{ $plateNumber }}">{{ $plateNumber }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="parts_replaced" class="form-label">Parts Replaced</label>
                            <input type="text" id="parts_replaced" name="parts_replaced" class="form-control" required oninput="this.value = this.value.toUpperCase();">
                        </div>

                        <div class="mb-3">
                            <label for="price_parts_replaced" class="form-label">Price of Parts Replaced</label>
                            <input type="number" id="price_parts_replaced" name="price_parts_replaced" class="form-control" placeholder="Don't use comma" required>
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
<!-- Modal for Update -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Maintenance Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form id="updateForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="parts_replaced" class="form-label">Parts Replaced</label>
                        <input type="text" class="form-control" id="parts_replaced"
                            name="parts_replaced" required>
                    </div>
                    <div class="mb-3">
                        <label for="price_parts_replaced" class="form-label">Price of
                            Part</label>
                        <input type="number" class="form-control" id="price_parts_replaced"
                            name="price_parts_replaced" step="0.01" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



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
    document.addEventListener('DOMContentLoaded', function() {
        var updateModal = document.getElementById('updateModal');
        updateModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var parts = button.getAttribute('data-parts');
            var price = button.getAttribute('data-price');

            var form = document.getElementById('updateForm');
            form.action = '/maintenance/' + id; // Update form action URL

            var partsInput = document.getElementById('parts_replaced');
            var priceInput = document.getElementById('price_parts_replaced');

            partsInput.value = parts;
            priceInput.value = price;
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
        (function ($) {
            "use strict";

            $('.editBtn').on('click', function () {
                let title = 'Update Admin'
                let name = $(this).data('name');
                let id = $(this).data('id');
                let username = $(this).data('username');
                let email = $(this).data('email');
                let modal = $('#manageAdmin');
                modal.find('.modal-title').text(title)
                modal.find('input[name=name]').val(name);
                modal.find('input[name=id]').val(id);
                modal.find('input[name=username]').val(username);
                modal.find('input[name=email]').val(email);
                modal.find('input[name="password"]').attr('required', false);
                modal.find('input[name="password_confirmation"]').attr('required', false);
                modal.find('.pass').addClass('d-none');
                modal.find('.confirmPassword').addClass('d-none');
                modal.modal('show');
            });

            $('.addAdmin').on('click', function () {
                let modal = $('#manageAdmin');
                $('.resetForm').trigger('reset');
                $(`input[name=id]`).val(0);
                modal.find('.pass').removeClass('d-none');
                modal.find('.confirmPassword').removeClass('d-none');
                modal.modal('show')
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Include SweetAlert2 JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>

</html>
