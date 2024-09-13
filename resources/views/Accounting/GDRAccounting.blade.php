<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<!-- Fancybox CSS -->

@include('Components.Admin.Header')
<body>
    @include('Components.Accounting.Sidebar')
    <nav class="navbar-wrapper bg--dark d-flex flex-wrap">

        <div class="navbar__right">
            <ul class="navbar__action-list">
                <li class="dropdown d-flex profile-dropdown">
                    <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="navbar-user">
                            <span class="navbar-user__thumb"><img src="Home/user-avatar-male-5.png"
                                    alt="image"></span>
                            <span class="navbar-user__info">
                                <span class="navbar-user__name">admin</span>
                            </span>
                            <span class="icon"><i class="fas fa-chevron-circle-down"></i></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">

                        <a href="logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
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
    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h4>Total Balance - Approved Budget Request = Remaining Balance</h4>

                    <h6 class="page-title"></h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#manageDeposit">
                            <i class="las la-plus"></i> IN
                        </button>
                    </div>
                </div>
<br>
                <h4>Select To Summarize</h4>
                <div class="d-flex mb-3 align-items-center">
                    <div class="form-group me-3">
                        <label for="yearFilter" class="form-label">Select Year</label>
                        <select id="yearFilter" class="form-control">
                            <option value="">-- Select Year --</option>
                            @for ($year = 2024; $year <= 2032; $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="monthFilter" class="form-label">Select Month</label>
                        <select id="monthFilter" class="form-control">
                            <option value="">-- Select Month --</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>

                <div >
                    <strong style="color: #007bff;">Remaining Balance:</strong> <span style="color: #28a745;">₱{{ number_format($startingBalance, 2) }}</span>
                </div>

                <table class="jobOffersTable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Particulars</th>
                            <th>Payment Amount</th>
                            <th>Payment Channel</th>
                            <th>Proof of Payment</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($GDR as $gdrAccounting)
                            <tr data-month="{{ $gdrAccounting->date->format('d-M-y h-i A') }}">
                                <td>{{ $gdrAccounting->date->format('d-M-y h-i A') }}</td>
                                <td>{{ $gdrAccounting->particulars }}</td>
                                <td>{{ number_format($gdrAccounting->payment_amount, 2) }}</td>
                                <td>{{ $gdrAccounting->payment_channel }}</td>
                                <td>
                                    @if ($gdrAccounting->proof_of_payment)
                                        <a href="{{ asset($gdrAccounting->proof_of_payment) }}" target="_blank">View Proof</a>
                                    @else
                                        No proof uploaded
                                    @endif
                                </td>
                                <td class="text-start">{{ $gdrAccounting->notes }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- Deposit Modal -->
                <div class="modal fade" id="manageDeposit" tabindex="-1" aria-labelledby="manageDepositLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDepositLabel">Deposit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('GDRAccounting.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="datetime-local" id="date" name="date" class="form-control"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars" class="form-control"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="payment_amount" class="form-label">Payment Amount</label>
                                        <input type="number" id="payment_amount" name="payment_amount"
                                            class="form-control" required min="0" step="0.01">
                                    </div>

                                    <div class="mb-3">
                                        <label for="payment_channel" class="form-label">Payment Channel</label>
                                        <input type="text" id="payment_channel" name="payment_channel"
                                            class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="proof_of_payment" class="form-label">Proof of Payment</label>
                                        <input type="file" id="proof_of_payment" name="proof_of_payment"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
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

                <!-- Withdrawal Modal -->


                @include('Components.Admin.Footer')
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
        $('.jobOffersTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            responsive: true // Optional: makes the table responsive
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



                <script>
                    "use strict";
                    bkLib.onDomLoaded(function() {
                        $(".nicEdit").each(function(index) {
                            $(this).attr("id", "nicEditor" + index);
                            new nicEditor({
                                fullPanel: true
                            }).panelInstance('nicEditor' + index, {
                                hasPanel: true
                            });
                        });
                    });

                    (function($) {
                        $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                            $('.nicEdit-main').focus();
                        });

                        $('.breadcrumb-nav-open').on('click', function() {
                            $(this).toggleClass('active');
                            $('.breadcrumb-nav').toggleClass('active');
                        });

                        $('.breadcrumb-nav-close').on('click', function() {
                            $('.breadcrumb-nav').removeClass('active');
                        });

                        if ($('.topTap').length) {
                            $('.breadcrumb-nav-open').removeClass('d-none');
                        }

                        $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function(e) {
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
                    (function($) {
                        "use strict";
                        $(document).on('click', '.confirmationBtn', function() {
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
                <!-- jQuery (required for Fancybox) -->

                <!-- Fancybox JS -->
                <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/fancybox.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var yearFilter = document.getElementById('yearFilter');
                        var monthFilter = document.getElementById('monthFilter');

                        function filterRows() {
                            var selectedYear = yearFilter.value;
                            var selectedMonth = monthFilter.value;
                            var rows = document.querySelectorAll('.jobOffersTable tbody tr');

                            rows.forEach(function(row) {
                                var rowDate = row.getAttribute('data-month');
                                var [rowYear, rowMonth] = rowDate.split('-');

                                if ((selectedYear === '' || rowYear === selectedYear) &&
                                    (selectedMonth === '' || rowMonth === selectedMonth)) {
                                    row.style.display = '';
                                } else {
                                    row.style.display = 'none';
                                }
                            });
                        }

                        yearFilter.addEventListener('change', filterRows);
                        monthFilter.addEventListener('change', filterRows);
                    });
                </script>

</body>

</html>
