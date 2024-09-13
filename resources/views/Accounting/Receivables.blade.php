<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <style>
        .big-calendar {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            z-index: 1000;
            background-color: #fff;
        }
    </style>
@include('Components.Admin.Header')

<body>


    @include('Components.Accounting.Sidebar')
    <!-- sidebar end -->

    <!-- navbar-wrapper start -->

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

            </ul>
        </div>
    </nav>
    <!-- navbar-wrapper end -->


    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Loan Table</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageSubcontractor">
    <i class="las la-plus"></i> Loan
</button>
{{-- <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal" data-bs-target="#manageWithdraw">
    <i class="las la-plus"></i> OUT
</button> --}}

                    </div>
                </div>

<div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
										{{-- <div class="dropdown">
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
										</div> --}}
										<div class="dropdown">

</div>
									 </div>
                                     <table class="jobOffersTable">
                                        <thead>
                                            <tr>
                                                <th>Date Borrowed</th>
                                                <th>Issuer</th>
                                                <th>Borrower</th>
                                                <th>Principal Amount</th>
                                                <th>Subject to </th>
                                                <th>Pay Now</th>
                                                <th>Pay Later</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($receivables as $singil)
                                            <tr>
                                                <td>{{ \Carbon\Carbon::parse($singil->date)->format('d-M-y h-i A') }}</td>
                                                <td>{{ $singil->issuer }}</td>
                                                <td>{{$loans }}</td>
                                                <td>{{ $singil->principal }}</td>
                                                <td>{{ $singil->mode_of_payment }}</td>
                                                <td>{{ \Carbon\Carbon::parse( $singil->pay_now_date) ->format('d-M-y h-i A')}}</td>
                                                <td class="text-start">{{ $singil->pay_later_date }}</td>
                                                <!-- Assuming each receivable has a related loan, you'll need to fetch it properly -->

                                            </tr>
                                            @endforeach
                                        </tbody>







    <!-- Create Vehicle Modal -->
    <div class="modal fade" id="manageSubcontractor" tabindex="-1" aria-labelledby="manageSubcontractorLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manageSubcontractorLabel">Receivable Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('receivables.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <!-- Issuer (Current Logged-in User) -->
                            <div class="col-md-6">
                                <label for="issuer" class="form-label">Issuer</label>
                                <input type="text" id="issuer" name="issuer" class="form-control" value="{{ $currentIssuer }}" readonly>
                            </div>

                            <!-- Borrower Dropdown -->
                            <div class="col-md-6">
                                <label for="borrower" class="form-label">Borrower</label>
                                <select id="borrower" name="borrower" class="form-control" required>
                                    <option value="" disabled selected>--Select Borrower--</option>
                                    @foreach($borrowers as $borrower)
                                        <option value="{{ $borrower->id }}" data-date="{{ $borrower->date }}" {{ old('borrower') == $borrower->id ? 'selected' : '' }}>
                                            {{ $borrower->borrower }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Principal -->
                            <div class="col-md-6">
                                <label for="principal" class="form-label">Principal</label>
                                <input type="number" id="principal" name="principal" class="form-control" placeholder="Enter Amount" required>
                            </div>

                            <!-- Mode of Payment -->
                            <div class="col-md-6">
                                <label for="mode_of_payment" class="form-label">Subject To</label>
                                <select id="mode_of_payment" name="mode_of_payment" class="form-control">
                                    <option value="" disabled selected>--Select--</option>
                                    <option value="principal">Principal</option>
                                    <option value="interest">Interest</option>
                                </select>
                            </div>

                            <!-- Date Borrowed -->
                            <div class="col-md-6">
                                <label for="date_borrowed" class="form-label">Date Borrowed</label>
                                <input type="date" id="date_borrowed" name="date_borrowed" class="form-control" value="{{ old('date_borrowed', $dateBorrowed) }}" required readonly>
                            </div>
                        </div>

                        <!-- Pay Now and Pay Later buttons side by side in a new row -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <button type="button" id="payNowBtn" class="btn btn-secondary w-100">Pay Now</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" id="payLaterBtn" class="btn btn-secondary w-100">Pay Later</button>
                            </div>
                        </div>

                        <!-- Hidden fields for Pay Now and Pay Later actions -->
                        <div id="payNowField" class="mt-3" style="display: none;">
                            <label for="pay_now_date" class="form-label">Date of Payment (Today)</label>
                            <input type="text" id="pay_now_date" name="pay_now_date" class="form-control" readonly>
                        </div>

                        <div id="payLaterField" class="mt-3" style="display: none;">
                            <label for="pay_later_date" class="form-label">Select Payment Date</label>
                            <input type="date" id="pay_later_date" name="pay_later_date" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>







                <!-- Event Calendar - Positioned outside and to the right of the form -->
                <div id="eventCalendar" class="big-calendar" style="display: none; position: absolute; top: 10px; right: 20px;">
                    <!-- Calendar will be rendered here -->
                </div>



        </div>
    </div>
</div>


<!-- withdrawal -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const borrowerSelect = document.getElementById('borrower');
        const dateBorrowedInput = document.getElementById('date_borrowed');

        borrowerSelect.addEventListener('change', function() {
            const selectedId = this.value;
            const selectedOption = this.querySelector(`option[value="${selectedId}"]`);
            const selectedDate = selectedOption ? selectedOption.dataset.date : '';

            if (selectedDate) {
                dateBorrowedInput.value = selectedDate;
            } else {
                dateBorrowedInput.value = ''; // Clear the field if no date is found
            }
        });

        // Pre-fill date borrowed if a borrower is already selected
        const preSelectedId = borrowerSelect.value;
        const preSelectedOption = borrowerSelect.querySelector(`option[value="${preSelectedId}"]`);
        const preSelectedDate = preSelectedOption ? preSelectedOption.dataset.date : '';

        if (preSelectedDate) {
            dateBorrowedInput.value = preSelectedDate;
        }
    });
    </script>


<script>
    // Show/Hide fields and handle calendar display based on button clicks
    document.getElementById('payNowBtn').addEventListener('click', function() {
        document.getElementById('payNowField').style.display = 'block';
        document.getElementById('payLaterField').style.display = 'none';
        document.getElementById('eventCalendar').style.display = 'none';
        // Set the current date for Pay Now
        document.getElementById('pay_now_date').value = new Date().toLocaleDateString('en-CA');
    });

    document.getElementById('payLaterBtn').addEventListener('click', function() {
        document.getElementById('payNowField').style.display = 'none';
        document.getElementById('payLaterField').style.display = 'block';
        document.getElementById('eventCalendar').style.display = 'block';
        // Render the calendar
        renderCalendar();
    });

    // Calendar render function using FullCalendar
    function renderCalendar() {
        var calendarEl = document.getElementById('eventCalendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            selectable: true,
            dateClick: function(info) {
                // Set selected date into the pay_later_date field
                document.getElementById('pay_later_date').value = info.dateStr;
                // Hide the calendar after selecting a date
                document.getElementById('eventCalendar').style.display = 'none';
            }
        });
        calendar.render();
    }
</script>

<!-- FullCalendar CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>



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
    document.addEventListener('DOMContentLoaded', function () {
        function updateCalculations() {
            document.querySelectorAll('.interest-input, .payment-terms-dropdown').forEach(function (element) {
                const loanId = element.getAttribute('data-loan-id');
                const initialAmount = parseFloat(element.getAttribute('data-initial-amount'));
                const paymentTermsDropdown = document.querySelector(`.payment-terms-dropdown[data-loan-id="${loanId}"]`);
                const paymentTerms = parseInt(paymentTermsDropdown.value, 10);
                const interestInput = document.querySelector(`.interest-input[data-loan-id="${loanId}"]`);
                const interestRate = parseFloat(interestInput.value) || 0; // Handle empty or invalid input

                if (paymentTerms > 0) {
                    const totalInterest = initialAmount * (interestRate) * paymentTerms;
                    const totalPayment = initialAmount + totalInterest;
                    const installmentPayment = initialAmount * interestRate;

                    document.getElementById('total-' + loanId).textContent = '₱' + totalPayment.toFixed(2);
                    document.getElementById('installment-' + loanId).textContent = '₱' + installmentPayment.toFixed(2);
                } else {
                    document.getElementById('total-' + loanId).textContent = '₱' + initialAmount.toFixed(2);
                    document.getElementById('installment-' + loanId).textContent = '₱0.00';
                }
            });
        }

        document.querySelectorAll('.interest-input, .payment-terms-dropdown').forEach(function (element) {
            element.addEventListener('input', function () {
                updateCalculations();
            });
        });

        // Initialize calculations for all rows on page load
        updateCalculations();
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
