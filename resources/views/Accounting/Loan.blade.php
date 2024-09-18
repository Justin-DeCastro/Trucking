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
    @include('Components.Admin.Navbar')

    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title">Consign Table</h6>
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

            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins pb-3">
                <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                    data-bs-target="#manageSubcontractor">
                    <i class="fa fa-plus"></i> New Consign
                </button>
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
                                        @foreach ($loans as $loan)
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
                                                    @if ($loan->status === 'Paid')
                                                        <button type="button" class="btn btn-secondary"
                                                            disabled>Paid</button>
                                                    @elseif($loan->status === 'Unpaid')
                                                        <form action="{{ route('loans.markAsPaid', $loan->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Mark as
                                                                Paid</button>
                                                        </form>
                                                    @endif
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

            <!-- Create Loan Modal -->
            <div class="modal fade" id="manageSubcontractor" tabindex="-1" aria-labelledby="manageSubcontractorLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="manageSubcontractorLabel">Loan Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('loan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="borrower" class="form-label">Borrower</label>
                                        <input type="text" id="borrower" name="borrower" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="initial_amount" class="form-label">Initial
                                            Amount</label>
                                        <input type="number" id="initial_amount" name="initial_amount"
                                            class="form-control" placeholder="Enter Amount" required>
                                    </div>
                                    <!-- Input for Interest Percentage -->
                                    <div class="col-md-6">
                                        <label for="interest_percentage" class="form-label">Interest
                                            Percentage
                                            (%)</label>
                                        <input type="number" id="interest_percentage" name="interest_percentage"
                                            class="form-control" placeholder="Enter Interest %" required>
                                    </div>

                                    <!-- Payment Per Month -->
                                    <div class="col-md-6">
                                        <label for="payment_per_month" class="form-label">Payment
                                            Per Month</label>
                                        <input type="number" id="payment_per_month" name="payment_per_month"
                                            class="form-control" readonly>
                                    </div>

                                    <!-- Payment Terms -->
                                    <div class="col-md-6">
                                        <label for="payment_terms" class="form-label">Payment Terms
                                            (Months)</label>
                                        <input type="number" id="payment_terms" name="payment_terms"
                                            class="form-control" placeholder="Enter Terms in Months" required>
                                    </div>

                                    <!-- Total Payment -->
                                    <div class="col-md-6">
                                        <label for="total_payment" class="form-label">Total
                                            Payment</label>
                                        <input type="number" id="total_payment" name="total_payment"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mode_of_payment" class="form-label">Mode of
                                            Payment</label>
                                        <select id="mode_of_payment" name="mode_of_payment" class="form-control">
                                            <option value="" disabled selected>Select Mode of
                                                Payment
                                            </option>
                                            <option value="cash">Cash</option>
                                            <option value="cheque">Cheque</option>
                                        </select>
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

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
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
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
    <script>
        // Function to extract all table data
        function getTableData() {
            // If using DataTables, get all data
            var table = $('#data-table').DataTable();
            var data = table.rows({
                search: 'applied'
            }).data().toArray();
            var headers = table.columns().header().toArray().map(th => th.innerText);

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
            var textToCopy = data.map(row => row.join("\t")).join("\n");

            var tempTextArea = document.createElement("textarea");
            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);
            alert("Table data copied to clipboard!");
        });

        // Print function - prints only the table
        document.getElementById('printBtn').addEventListener('click', function() {
            var {
                data,
                headers
            } = getTableData();
            var printContents = `
            <table border="1">
                <thead>
                    <tr>${headers.map(header => `<th>${header}</th>`).join('')}</tr>
                </thead>
                <tbody>
                    ${data.map(row => `<tr>${row.map(cell => `<td>${cell}</td>`).join('')}</tr>`).join('')}
                </tbody>
            </table>
        `;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = `<html><head><title>Print</title></head><body>${printContents}</body></html>`;
            window.print();
            document.body.innerHTML = originalContents;
        });

        // PDF export with landscape formatting and smaller font size using jsPDF and autoTable
        document.getElementById('pdfBtn').addEventListener('click', function() {
            const {
                jsPDF
            } = window.jspdf;
            var doc = new jsPDF('landscape'); // Set the orientation to landscape

            var {
                data,
                headers
            } = getTableData();

            doc.autoTable({
                head: [headers],
                body: data,
                startY: 10, // Start 10 units from top
                theme: 'grid', // Grid layout
                margin: {
                    top: 10
                },
                styles: {
                    fontSize: 8,
                    cellPadding: 2
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
        document.getElementById('excelBtn').addEventListener('click', function() {
            var {
                data,
                headers
            } = getTableData();
            var wb = XLSX.utils.book_new();
            var ws = XLSX.utils.aoa_to_sheet([headers, ...data]);
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            XLSX.writeFile(wb, "table_data.xlsx");
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#data-table').DataTable({
                responsive: true, // Enable responsiveness
                paging: true, // Enables pagination
                searching: true, // Enables search
                ordering: true, // Enables sorting
            });
        });
    </script>

</body>

</html>
