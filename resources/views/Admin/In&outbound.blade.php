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
            <form class="navbar-search">
                <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                    placeholder="Search here...">
                <i class="las la-search"></i>
                <ul class="search-list"></ul>
            </form>
        </div>
        <div class="navbar__right">
            <ul class="navbar__action-list">
                <li>
                    <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Visit Website">
                        <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i
                                class="las la-globe"></i></a>
                    </button>
                </li>
                <li class="dropdown">
                    <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown"
                        data-display="static" aria-haspopup="true" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unread Notifications">
                            <i class="las la-bell "></i>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                        <div class="dropdown-menu__header">
                            <span class="caption">Notification</span>
                        </div>
                        <div class="dropdown-menu__body  d-flex justify-content-center align-items-center ">
                            <div class="empty-notification text-center">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png"
                                    alt="empty">
                                <p class="mt-3">No unread notification found</p>
                            </div>
                        </div>
                        <div class="dropdown-menu__footer">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/notifications"
                                class="view-all-message">View all notifications</a>
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="System Setting">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/system-setting"><i
                                class="las la-wrench"></i></a>
                    </button>
                </li>
                <li class="dropdown d-flex profile-dropdown">
                    <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="navbar-user">
                            <span class="navbar-user__thumb"><img
                                    src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/images/profile/667c14b5145fd1719407797.png"
                                    alt="image"></span>
                            <span class="navbar-user__info">
                                <span class="navbar-user__name">admin</span>
                            </span>
                            <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/profile"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-user-circle"></i>
                            <span class="dropdown-menu__caption">Profile</span>
                        </a>

                        <a href="https://script.viserlab.com/courierlab/demo/admin/password"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-key"></i>
                            <span class="dropdown-menu__caption">Password</span>
                        </a>

                        <a href="https://script.viserlab.com/courierlab/demo/admin/logout"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-sign-out-alt"></i>
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
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#manageWaybillModal">
    Add or Edit Waybill
</button>

                    </div>
                </div>
             
            








                <div class="modal fade" id="manageWaybillModal" tabindex="-1" role="dialog" aria-labelledby="manageWaybillModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageWaybillModalLabel">Trucker Management Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/submit-form" method="post">
                    <!-- Truck Information -->
                    <div class="form-group">
                        <label for="truckerName">Trucker Name:</label>
                        <input type="text" class="form-control" id="truckerName" name="truckerName" required>
                    </div>

                    <div class="form-group">
                        <label for="truckNumber">Truck Number:</label>
                        <input type="text" class="form-control" id="truckNumber" name="truckNumber" required>
                    </div>

                    <!-- Inbound Information -->
                    <fieldset>
                        <legend>Inbound Information</legend>
                        <div class="form-group">
                            <label for="inboundDate">Date:</label>
                            <input type="date" class="form-control" id="inboundDate" name="inboundDate" required>
                        </div>

                        <div class="form-group">
                            <label for="inboundTime">Time:</label>
                            <input type="time" class="form-control" id="inboundTime" name="inboundTime" required>
                        </div>

                        <div class="form-group">
                            <label for="inboundLocation">Location:</label>
                            <input type="text" class="form-control" id="inboundLocation" name="inboundLocation" required>
                        </div>
                    </fieldset>

                    <!-- Outbound Information -->
                    <fieldset>
                        <legend>Outbound Information</legend>
                        <div class="form-group">
                            <label for="outboundDate">Date:</label>
                            <input type="date" class="form-control" id="outboundDate" name="outboundDate">
                        </div>

                        <div class="form-group">
                            <label for="outboundTime">Time:</label>
                            <input type="time" class="form-control" id="outboundTime" name="outboundTime">
                        </div>

                        <div class="form-group">
                            <label for="outboundLocation">Location:</label>
                            <input type="text" class="form-control" id="outboundLocation" name="outboundLocation">
                        </div>
                    </fieldset>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






                <!-- Confirmation Modal -->
                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                    aria-hidden="true">
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script data-cfasync="false"
                    src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
                <script
                    src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
                <script
                    src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

                <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css"
                    rel="stylesheet">
                <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css"
                    rel="stylesheet">
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


                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>



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

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!-- Include Bootstrap JS -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

                <!-- Include SweetAlert2 JS (optional) -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>