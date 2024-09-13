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
                                                <th>Date</th>
                                                <th>Borrower</th>
                                                <th>Initial Amount</th>
                                                <th>Interest Rate (%)</th>
                                                <th>Installment Payment (Per Month)</th>
                                                <th>Payment Terms</th>
                                                <th>Total Payment</th>
                                                <th>Mode of Payment</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($loans as $loan)
                                            <tr>
                                                <td>{{ \Carbon\Carbon::parse($loan->date)->format('d-M-y h-i A') }}</td>
                                                <td>{{ $loan->borrower }}</td>
                                                <td>{{ number_format($loan->initial_amount, 2) }}</td>
                                                <td>{{ number_format((float) $loan->interest_percentage, 2) }}</td>
                                                <td>{{ number_format((float) $loan->payment_per_month, 2) }}</td>
                                                <td>{{ $loan->payment_terms }} Month/s</td>
                                                <td>{{ number_format((float) $loan->total_payment, 2) }}</td>
                                                <td>{{ $loan->mode_of_payment }}</td>
                                                <td>
                                                    @if($loan->status === 'Paid')
                                                        <button type="button" class="btn btn-secondary" disabled>Paid</button>
                                                    @elseif($loan->status === 'Unpaid')
                                                        <form action="{{ route('loans.markAsPaid', $loan->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Mark as Paid</button>
                                                        </form>
                                                    @endif
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
                    <h5 class="modal-title" id="manageSubcontractorLabel">Loan Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('loan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="borrower" class="form-label">Borrower</label>
                                <input type="text" id="borrower" name="borrower" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="initial_amount" class="form-label">Initial Amount</label>
                                <input type="number" id="initial_amount" name="initial_amount" class="form-control" placeholder="Enter Amount" required>
                            </div>
                            <!-- Input for Interest Percentage -->
                            <div class="col-md-6">
                                <label for="interest_percentage" class="form-label">Interest Percentage (%)</label>
                                <input type="number" id="interest_percentage" name="interest_percentage" class="form-control" placeholder="Enter Interest %" required>
                            </div>

                            <!-- Payment Per Month -->
                            <div class="col-md-6">
                                <label for="payment_per_month" class="form-label">Payment Per Month</label>
                                <input type="number" id="payment_per_month" name="payment_per_month" class="form-control" readonly>
                            </div>

                            <!-- Payment Terms -->
                            <div class="col-md-6">
                                <label for="payment_terms" class="form-label">Payment Terms (Months)</label>
                                <input type="number" id="payment_terms" name="payment_terms" class="form-control" placeholder="Enter Terms in Months" required>
                            </div>

                            <!-- Total Payment -->
                            <div class="col-md-6">
                                <label for="total_payment" class="form-label">Total Payment</label>
                                <input type="number" id="total_payment" name="total_payment" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="mode_of_payment" class="form-label">Mode of Payment</label>
                                <select id="mode_of_payment" name="mode_of_payment" class="form-control">
                                    <option value="" disabled selected>Select Mode of Payment</option>
                                    <option value="cash">Cash</option>
                                    <option value="cheque">Cheque</option>
                                </select>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const initialAmount = document.getElementById('initial_amount');
        const interestPercentage = document.getElementById('interest_percentage');
        const paymentPerMonth = document.getElementById('payment_per_month');
        const paymentTerms = document.getElementById('payment_terms');
        const totalPayment = document.getElementById('total_payment');

        function calculatePayments() {
            const initialAmountValue = parseFloat(initialAmount.value) || 0;
            const interestRate = parseFloat(interestPercentage.value) / 100 || 0;
            const terms = parseInt(paymentTerms.value) || 0;

            // Calculate monthly interest payment and total payment
            const monthlyInterestPayment = initialAmountValue * interestRate;
            const monthlyPayment = initialAmountValue * interestRate;
            const totalPaymentAmount = monthlyPayment * terms + initialAmountValue ;

            // Set calculated values
            paymentPerMonth.value = monthlyPayment.toFixed(2);
            totalPayment.value = totalPaymentAmount.toFixed(2);
        }

        // Add event listeners
        interestPercentage.addEventListener('input', calculatePayments);
        initialAmount.addEventListener('input', calculatePayments);
        paymentTerms.addEventListener('input', calculatePayments);
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
