<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  
    <!-- Include jQuery -->

@include('Components.Admin.Header')

<body>


    @include('Components.Accounting.Sidebar')
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
                    <h6 class="page-title">In and Out</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageSubcontractor">
    <i class="las la-plus"></i> IN
</button>
<button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageWithdraw">
    <i class="las la-plus"></i> OUT
</button>
<button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#manageExpense">
                            <i class="las la-minus"></i> Expense
                        </button>

                    </div>
                </div>
<!-- Display the overall Outstanding Balance -->
<div class="overall-balance" >
    <h4 style="color: #0000ff;">Outstanding Balance: {{ '₱' . number_format($outstandingBalance, 2) }}</h4> 
</div>
<div class="overall-balance" >
    <h4 style="color: #0000ff;">Total Expense: {{ '₱' . number_format($totalExpenses, 2) }}</h4>
    
    
</div>
<div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
										<div class="dropdown">
											<button type="button" class="btn btn-primary dropdown-toggle"
												data-bs-toggle="dropdown" aria-expanded="false">
												<i class='bx bx-export'></i> Export
											</button>
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
<table class="jobOffersTable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Particulars</th>
                            <th>Deposit Amount</th>
                            <th>Withdrawal Amount</th>
                            
                            <th>Notes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($deposits as $deposit)
                            <tr>
                            <td>{{ (new \DateTime($deposit->date))->format('F d, Y') }}</td>


                                <td>{{ $deposit->particulars }}</td>
                                <td>{{ '₱' . number_format($deposit->deposit_amount, 2) }}</td>
                                <td>{{ $deposit->withdraw_amount }}</td>
                                <td>{{ $deposit->notes }}</td>
                                <td>
                                    <!-- Actions for deposits -->
                                </td>
                            </tr>
                        @endforeach

                        @foreach($withdraws as $withdraw)
                            <tr>
                            <td>{{ (new \DateTime($withdraw->date))->format('F d, Y') }}</td>
                                <td>{{ $withdraw->particulars }}</td>
                                <td></td>
                                <td>{{ '₱' . number_format($withdraw->withdraw_amount, 2) }}</td>
                                <td>{{ $withdraw->notes }}</td>
                                <td>
                                    <!-- Actions for withdrawals -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>





    <!-- Create Vehicle Modal -->
    <div class="modal fade" id="manageSubcontractor" tabindex="-1" aria-labelledby="manageSubcontractorLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageSubcontractorLabel">Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('deposit.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="amount" class="form-label">Date</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="particulars" class="form-label">Particulars</label>
                <input type="text" id="particulars" name="particulars" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="deposit_amount" class="form-label">Deposit Amount</label>
                <input type="number" id="deposit_amount" name="deposit_amount" class="form-control" placeholder="Enter Amount"required>
            </div>
            <div class="col-md-6">
                <label for="withdraw_amount" class="form-label">Withdraw Amount</label>
                <input type="text" id="withdraw_amount"  class="form-control" required readonly>
            </div>
            <div class="col-md-6">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" id="notes" name="notes" class="form-control" required>
            </div>
            
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

<div class="modal fade" id="manageExpense" tabindex="-1" aria-labelledby="manageExpenseLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageExpenseLabel">Expense</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('totalexpense.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="expense_amount" class="form-label">Expense Amount</label>
                                        <input type="number" id="expense_amount" name="expense_amount" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
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
<!-- withdrawal -->
<div class="modal fade" id="manageWithdraw" tabindex="-1" aria-labelledby="manageSubcontractorLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageSubcontractorLabel">Withdraw</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('withdraw.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="amount" class="form-label">Date</label >
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="particulars" class="form-label">Particulars</label>
                <input type="text" id="particulars" name="particulars" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="deposit_amount" class="form-label">Deposit Amount</label>
                <input type="text" id="deposit_amount" class="form-control" required readonly>
            </div>
            <div class="col-md-6">
                <label for="withdraw_amount" class="form-label">Withdraw Amount</label>
                <input type="text" id="withdraw_amount" name="withdraw_amount" class="form-control" placeholder="Enter Amount"required>
            </div>
            <div class="col-md-6">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" id="notes" name="notes" class="form-control" required>
            </div>
            
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
    <!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
$(document).ready(function() {
    $('.jobOffersTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
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
</body>

</html>