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

    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title">Budget Table</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-export'></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="copyBtn" class="btn dropdown-item">
                                    <i class='bx bx-copy'></i> Copy
                                </button>
                            </li>
                            <li>
                                <button type="button" id="printBtn" class="btn dropdown-item">
                                    <i class='bx bx-printer'></i> Print
                                </button>
                            </li>
                            <li>
                                <button type="button" id="pdfBtn" class="btn dropdown-item">
                                    <i class='bx bxs-file-pdf'></i> PDF
                                </button>
                            </li>
                            <li>
                                <button type="button" id="excelBtn" class="btn dropdown-item">
                                    <i class='bx bx-file'></i> Excel
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive--md table-responsive">
                                <table id="data-table" class="table table--light style--two display nowrap">

                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Requestee</th>
                                            <th>Department</th>
                                            <th>Amount</th>
                                            <th>Expense Details</th>
                                            <th>Voucher</th>
                                            <th>Status</th>
                                            <th>Approved By</th> <!-- Added column -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($budgets as $budget)
                                            <tr class="clickable-row" data-bs-target="#budgetModal{{ $budget->id }}"
                                                id="row-{{ $budget->id }}">
                                                <td>{{ \Carbon\Carbon::parse($budget->date)->format('d-M-y h-i A') }}
                                                </td>
                                                <td>{{ $budget->requestee }}</td>
                                                <td>{{ $budget->department }}</td>
                                                <td>{{ number_format($budget->budget_amount, 2) }}</td>
                                                <td>{{ $budget->expense_details }}</td>
                                                <td>{{ $budget->voucher }}</td>
                                                <td id="status-{{ $budget->id }}">
                                                    @if ($budget->status === 'Pending')
                                                        <span
                                                            style="background-color: yellow; box-shadow: 0 4px 8px rgba(255, 255, 0, 0.5); padding: 2px 4px;">
                                                            {{ $budget->status }}
                                                        </span>
                                                    @elseif ($budget->status === 'Approved')
                                                        <span
                                                            style="background-color: green; color: white; box-shadow: 0 4px 8px rgba(0, 255, 0, 0.5); padding: 2px 4px;">
                                                            {{ $budget->status }}
                                                        </span>
                                                    @elseif ($budget->status === 'Denied')
                                                        <span
                                                            style="background-color: red; color: white; box-shadow: 0 4px 8px rgba(255, 0, 0, 0.5); padding: 2px 4px;">
                                                            {{ $budget->status }}
                                                        </span>
                                                    @else
                                                        {{ $budget->status }}
                                                    @endif
                                                </td>



                                                <td>{{ $budget->approved_by ? \App\Models\User::find($budget->approved_by)->name : 'N/A' }}
                                                </td> <!-- Display approved by -->
                                                <td class="action-btn">
                                                    <form action="{{ route('budgets.approve', $budget->id) }}"
                                                        method="POST" style="display:inline;" class="approve-form">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-success approve-btn {{ $budget->status == 'Approved' ? 'disabled' : '' }}"
                                                            {{ $budget->status == 'Approved' ? 'disabled' : '' }}>
                                                            Approve
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('budgets.deny', $budget->id) }}"
                                                        method="POST" style="display:inline;" class="deny-form">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-danger deny-btn {{ $budget->status == 'Denied' ? 'disabled' : '' }}"
                                                            {{ $budget->status == 'Denied' ? 'disabled' : '' }}>
                                                            Deny
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
                </div>
            </div>

            <!-- Create Vehicle Modal -->
            <div class="modal fade" id="requestBudgetModal" tabindex="-1" aria-labelledby="requestBudgetModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="requestBudgetModalLabel">Budget Request Form
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('budget.request') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <!-- Date -->
                                    <div class="col-md-6">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                            required>
                                    </div>
                                    <!-- Requestee -->
                                    <div class="col-md-6">
                                        <label for="requestee" class="form-label">Requestee</label>
                                        <input type="text" id="requestee" name="requestee" class="form-control"
                                            required>
                                    </div>
                                    <!-- Department -->
                                    <div class="col-md-6">
                                        <label for="department" class="form-label">Department</label>
                                        <select id="department" name="department" class="form-control" required>
                                            <option value="" disabled selected>Select
                                                Department</option>
                                            <option value="logistics">Logistics</option>
                                            <option value="maintenance">Maintenance</option>
                                            <option value="operations">Operations</option>
                                        </select>
                                    </div>
                                    <!-- Budget Amount -->
                                    <div class="col-md-6">
                                        <label for="budget_amount" class="form-label">Budget
                                            Amount</label>
                                        <input type="number" id="budget_amount" name="budget_amount"
                                            class="form-control" placeholder="Enter Amount" required>
                                    </div>
                                    <!-- Expense Details -->
                                    <div class="col-md-12">
                                        <label for="expense_details" class="form-label">Expense
                                            Details</label>
                                        <textarea id="expense_details" name="expense_details" class="form-control" placeholder="Describe the Expense"
                                            rows="3" required></textarea>
                                    </div>
                                    <!-- Voucher Attachment -->
                                    <div class="col-md-12">
                                        <label for="voucher" class="form-label">Voucher
                                            Type</label>
                                        <select id="voucher" name="voucher" class="form-control" required>
                                            <option value="" disabled selected>Select a
                                                voucher type</option>
                                            <option value="cash">Cash</option>
                                            <option value="cheques">Cheques</option>
                                            <option value="bank_transfer">Bank Transfer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit
                                    Request</button>
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- withdrawal -->
            <div class="modal fade" id="manageWithdraw" tabindex="-1" aria-labelledby="manageSubcontractorLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="manageSubcontractorLabel">Withdraw</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('withdraw.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="amount" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="deposit_amount" class="form-label">Deposit Amount</label>
                                        <input type="text" id="deposit_amount" class="form-control" required
                                            readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="withdraw_amount" class="form-label">Withdraw
                                            Amount</label>
                                        <input type="text" id="withdraw_amount" name="withdraw_amount"
                                            class="form-control" placeholder="Enter Amount"required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control"
                                            required>
                                    </div>

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

            @foreach ($budgets as $budget)
                <div class="modal fade" id="budgetModal{{ $budget->id }}" tabindex="-1"
                    aria-labelledby="budgetModalLabel{{ $budget->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="budgetModalLabel{{ $budget->id }}">Budget Details for
                                    {{ $budget->requestee }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong>
                                    {{ \Carbon\Carbon::parse($budget->date)->format('d-M-y h:i A') }}</p>
                                <p><strong>Requestee:</strong> {{ $budget->requestee }}</p>
                                <p><strong>Department:</strong> {{ $budget->department }}</p>
                                <p><strong>Amount:</strong> ₱{{ number_format($budget->budget_amount, 2) }}</p>
                                <p><strong>Expense Details:</strong> {{ $budget->expense_details }}</p>
                                <p><strong>Voucher:</strong> {{ $budget->voucher }}</p>
                                <p><strong>Status:</strong>
                                    @if ($budget->status === 'Pending')
                                        <span
                                            style="background-color: yellow; box-shadow: 0 4px 8px rgba(255, 255, 0, 0.5); padding: 2px 4px;">
                                            {{ $budget->status }}
                                        </span>
                                    @elseif ($budget->status === 'Approved')
                                        <span
                                            style="background-color: green; color: white; box-shadow: 0 4px 8px rgba(0, 255, 0, 0.5); padding: 2px 4px;">
                                            {{ $budget->status }}
                                        </span>
                                    @elseif ($budget->status === 'Denied')
                                        <span
                                            style="background-color: red; color: white; box-shadow: 0 4px 8px rgba(255, 0, 0, 0.5); padding: 2px 4px;">
                                            {{ $budget->status }}
                                        </span>
                                    @else
                                        {{ $budget->status }}
                                    @endif
                                </p>
                                <p><strong>Approved By:</strong>
                                    {{ $budget->approved_by ? \App\Models\User::find($budget->approved_by)->name : 'N/A' }}
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="printModalContent({{ $budget->id }})">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
                const totalPaymentAmount = monthlyPayment * terms + initialAmountValue;

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
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>
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
        document.addEventListener('DOMContentLoaded', function() {
            function updateCalculations() {
                document.querySelectorAll('.interest-input, .payment-terms-dropdown').forEach(function(element) {
                    const loanId = element.getAttribute('data-loan-id');
                    const initialAmount = parseFloat(element.getAttribute('data-initial-amount'));
                    const paymentTermsDropdown = document.querySelector(
                        `.payment-terms-dropdown[data-loan-id="${loanId}"]`);
                    const paymentTerms = parseInt(paymentTermsDropdown.value, 10);
                    const interestInput = document.querySelector(
                        `.interest-input[data-loan-id="${loanId}"]`);
                    const interestRate = parseFloat(interestInput.value) ||
                        0; // Handle empty or invalid input

                    if (paymentTerms > 0) {
                        const totalInterest = initialAmount * (interestRate) * paymentTerms;
                        const totalPayment = initialAmount + totalInterest;
                        const installmentPayment = initialAmount * interestRate;

                        document.getElementById('total-' + loanId).textContent = '₱' + totalPayment.toFixed(
                            2);
                        document.getElementById('installment-' + loanId).textContent = '₱' +
                            installmentPayment.toFixed(2);
                    } else {
                        document.getElementById('total-' + loanId).textContent = '₱' + initialAmount
                            .toFixed(2);
                        document.getElementById('installment-' + loanId).textContent = '₱0.00';
                    }
                });
            }

            document.querySelectorAll('.interest-input, .payment-terms-dropdown').forEach(function(element) {
                element.addEventListener('input', function() {
                    updateCalculations();
                });
            });

            // Initialize calculations for all rows on page load
            updateCalculations();
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <!-- jsPDF with autoTable for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

    <!-- FileSaver.js for CSV export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>

    <script>
        function printModalContent(budgetId) {
            // Get the modal content by the budget ID
            var modalContent = document.getElementById('budgetModal' + budgetId).querySelector('.modal-body').innerHTML;

            // Open a new window for the print job
            var printWindow = window.open('', '', 'height=600,width=800');

            // Write the modal content into the new window for printing
            printWindow.document.write(`
        <html>
        <head>
            <title>Print Budget Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                    line-height: 1.6; /* Spacing between lines */
                }
                p {
                    margin: 10px 0; /* Add spacing between paragraphs */
                    padding: 5px 0;
                }
                h5 {
                    text-align: center;
                    margin-bottom: 30px; /* Add space below the title */
                }
                span {
                    display: inline-block;
                    padding: 2px 4px;
                    margin-top: 5px;
                }
                .strong {
                    font-weight: bold;
                }
                .logo-container {
                    text-align: center;
                    margin-bottom: 30px; /* Space below the logo */
                }
                .logo-container img {
                    width: 60px;
                    height: auto;
                }
            </style>
        </head>
        <body>
            <div class="logo-container">
                <img src="{{ asset('Home/GDR Logo.png') }}" alt="Logo">
            </div>
            <h5>Budget Details</h5>
            ${modalContent}
        </body>
        </html>
        `);

            // Close the document stream and focus on the window for printing
            printWindow.document.close();
            printWindow.focus();

            // Trigger the print dialog
            printWindow.print();

            // Close the print window after printing
            printWindow.onafterprint = function() {
                printWindow.close();
            };
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.clickable-row').forEach(row => {
                row.addEventListener('click', function(event) {
                    // Check if the click is inside the Actions column
                    if (!event.target.closest('.action-btn')) {
                        const target = this.getAttribute('data-bs-target');
                        const modal = document.querySelector(target);

                        if (modal) {
                            const modalInstance = new bootstrap.Modal(modal);
                            modalInstance.show();
                        }
                    }
                });
            });
        });
    </script>

    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();
        });

        // Function to extract all table data
        function getTableData() {
            var table = $('#data-table').DataTable();
            var data = table.rows({
                search: 'applied'
            }).data().toArray();
            var headers = table.columns().header().toArray().map(th => $(th).text());

            return {
                data,
                headers
            };
        }

        // Copy function
        document.getElementById('copyBtn').addEventListener('click', function() {
            var {
                data
            } = getTableData();
            var textToCopy = data.map(row => row.map(cell => $('<div>').html(cell).text()).join("\t")).join("\n");

            var tempTextArea = document.createElement("textarea");
            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);
            alert("Table data copied to clipboard!");
        });

        // Print function
        document.getElementById('printBtn').addEventListener('click', function() {
            var {
                data,
                headers
            } = getTableData();

            // Find the index of the "Action" column
            var actionColumnIndex = headers.indexOf('Action');

            // Filter out the "Action" column from headers
            var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);

            // Filter out the "Action" column from data
            var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

            var printContents = `
        <table border="1">
            <thead>
                <tr>${filteredHeaders.map(header => `<th>${header}</th>`).join('')}</tr>
            </thead>
            <tbody>
                ${filteredData.map(row => `<tr>${row.map(cell => `<td>${$('<div>').html(cell).text()}</td>`).join('')}</tr>`).join('')}
            </tbody>
        </table>`;

            var originalContents = document.body.innerHTML;

            document.body.innerHTML = `<html><head><title>Print</title></head><body>${printContents}</body></html>`;
            window.print();
            document.body.innerHTML = originalContents;
        });
        // PDF export function
        document.getElementById('pdfBtn').addEventListener('click', function() {
            const {
                jsPDF
            } = window.jspdf;
            var doc = new jsPDF('landscape'); // Set the orientation to landscape

            var {
                data,
                headers
            } = getTableData();

            // Find the index of the "Action" column
            var actionColumnIndex = headers.indexOf('Action');

            // Filter out the "Action" column from headers
            var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);

            // Filter out the "Action" column from data
            var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

            // Convert HTML content to text
            var cleanData = filteredData.map(row => row.map(cell => $('<div>').html(cell).text()));

            doc.autoTable({
                head: [filteredHeaders],
                body: cleanData,
                startY: 10,
                theme: 'grid',
                margin: {
                    top: 10
                },
                styles: {
                    fontSize: 8,
                },
                headStyles: {
                    fillColor: [22, 160, 133],
                    textColor: 255
                },
                pageBreak: 'auto',
            });

            doc.save('table_data.pdf');
        });


        // Excel export function
        // Excel export function
        document.getElementById('excelBtn').addEventListener('click', function() {
            var {
                data,
                headers
            } = getTableData();

            // Find the index of the "Action" column
            var actionColumnIndex = headers.indexOf('Action');

            // Filter out the "Action" column from headers
            var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);

            // Filter out the "Action" column from data
            var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

            var wb = XLSX.utils.book_new();
            var cleanData = filteredData.map(row => row.map(cell => $('<div>').html(cell).text()));
            var ws = XLSX.utils.aoa_to_sheet([filteredHeaders, ...cleanData]);
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            XLSX.writeFile(wb, "table_data.xlsx");
        });
    </script>

</body>

</html>
