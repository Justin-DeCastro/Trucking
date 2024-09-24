<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@include('Components.Admin.Header')

<style>
    @media print {

        .modal-header,
        .modal-footer,
        .btn-close,
        button {
            display: none !important;
        }
    }
</style>
<style>
    .logo-container {
        position: relative;
        display: inline-block;
    }

    .logo-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 90%;
        background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        filter: blur(15px);
        z-index: -1;

    }

    .logo {
        border-radius: 0;
        width: 70%;
        height: 60px;
        position: relative;
        z-index: 1;
    }

    .res-sidebar-close-btn {
        background-color: transparent;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        padding: 10px;
        position: absolute;
        top: 15px;
        right: 15px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .res-sidebar-close-btn:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #ff6b6b;
    }

    .res-sidebar-close-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 107, 107, 0.4);
    }

    .logout-btn {
        background-color: transparent;
        border: none;
        color: #333;
        font-size: 24px;
        cursor: pointer;
        padding: 10px;
        border-radius: 50%;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .logout-btn:hover {
        background-color: #ff6b6b;
        color: #fff;
    }

    .logout-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 107, 107, 0.4);
    }

    .res-sidebar-open-btn {
        background-color: #1258a0;
        border: none;
        color: #fff;
        font-size: 20px;
        padding: 10px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .res-sidebar-open-btn:hover {
        background-color: #0e4b8a;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .res-sidebar-open-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(18, 88, 160, 0.4);
    }

    .res-sidebar-open-btn i {
        margin-right: 5px;
    }

    .navbar-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;

        padding: 10px;
    }

    .navbar__left,
    .navbar__right {
        display: flex;
        align-items: center;
    }

    @media (max-width: 768px) {

        .navbar__left,
        .navbar__right {
            flex: 1;
        }

        .res-sidebar-open-btn,
        .logout-btn {
            font-size: 20px;
            padding: 10px;
        }

        .navbar__right {
            justify-content: flex-end;
        }

        .profile-dropdown {
            margin-left: auto;
        }
    }
</style>

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Accounting.Sidebar')
    
    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                    <h6 class="page-title p-2">Return Information</h6>
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


                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-end p-2">
                            <!-- Button to trigger modal -->
                            <button class="btn btn-sm btn-outline--primary addAdmin" type="button"
                                data-bs-toggle="modal" data-bs-target="#manageSubcontractor">
                                <i class="fas fa-plus"></i> Add Receivable
                            </button>
                        </div>
                        <div class="table-responsive--sm table-responsive">
                            <div class="table-responsive--sm table-responsive">
                                <table id="data-table" class="table table--light style--two display nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date Borrowed</th>
                                            <th>Issuer</th>
                                            <th>Borrower</th>
                                            <th>Principal Amount</th>
                                            <th>Subject to</th>
                                            <th>Pay Now</th>
                                            <th>Pay Later</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($receivables as $singil)
                                            <tr class="clickable-row" data-id="{{ $singil->id }}"
                                                data-issuer="{{ $singil->issuer }}"
                                                data-borrower="{{ $singil->borrower }}"
                                                data-principal="{{ $singil->principal }}"
                                                data-mode="{{ $singil->mode_of_payment }}"
                                                data-pay-now="{{ $singil->pay_now_date }}"
                                                data-pay-later="{{ $singil->pay_later_date }}">
                                                <td>{{ \Carbon\Carbon::parse($singil->date_borrowed)->format('d-M-y') }}
                                                </td>
                                                <td>{{ $singil->issuer }}</td>
                                                <td>{{ $singil->borrower }}</td>
                                                <td>{{ $singil->principal }}</td>
                                                <td>{{ $singil->mode_of_payment }}</td>
                                                <td>{{ $singil->pay_now_date ? \Carbon\Carbon::parse($singil->pay_now_date)->format('d-M-y') : '-' }}
                                                </td>
                                                <td class="text-start">
                                                    {{ $singil->pay_later_date ? \Carbon\Carbon::parse($singil->pay_later_date)->format('d-M-y') : '-' }}
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
        </div>

    </div>
    </div>
    </div>

    <!-- Modal for Adding Return Items -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Receivable Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Issuer:</strong> <span id="modalIssuer"></span></p>
                    <p><strong>Borrower:</strong> <span id="modalBorrower"></span></p>
                    <p><strong>Principal Amount:</strong> <span id="modalPrincipal"></span></p>
                    <p><strong>Subject to:</strong> <span id="modalMode"></span></p>
                    <p><strong>Pay Now:</strong> <span id="modalPayNow"></span></p>
                    <p><strong>Pay Later:</strong> <span id="modalPayLater"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="printDetails()">Print</button>
                </div>
            </div>
        </div>
    </div>





    <!-- Create Vehicle Modal -->
    <div class="modal fade" id="manageSubcontractor" tabindex="-1" aria-labelledby="manageSubcontractorLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manageSubcontractorLabel">Receivable Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Include jQuery and jQuery UI -->
                <form action="{{ route('receivables.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <!-- Issuer -->
                            <div class="col-md-6">
                                <label for="issuer" class="form-label">Issuer</label>
                                <input type="text" id="issuer" name="issuer" class="form-control"
                                    value="{{ $currentIssuer }}" readonly>
                            </div>

                            <!-- Borrower Dropdown -->
                            <div class="col-md-6">
                                <label for="borrower" class="form-label">Borrower</label>
                                <select id="borrower" name="borrower" class="form-control" required>
                                    <option value="" disabled selected>--Select Borrower--</option>
                                    @foreach ($borrowers as $borrower)
                                        <option value="{{ $borrower->id }}" data-date="{{ $borrower->date }}"
                                            {{ old('borrower') == $borrower->id ? 'selected' : '' }}>
                                            {{ $borrower->borrower }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Principal -->
                            <div class="col-md-6">
                                <label for="principal" class="form-label">Principal</label>
                                <input type="number" id="principal" name="principal" class="form-control"
                                    placeholder="Enter Amount" required>
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
                                <input type="date" id="date_borrowed" name="date_borrowed" class="form-control"
                                    value="{{ old('date_borrowed', $dateBorrowed) }}" required readonly>
                            </div>
                        </div>

                        <!-- Pay Now and Pay Later Buttons -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <button type="button" id="payNowBtn" class="btn btn-primary w-100"
                                    onclick="selectPayNow()">Pay Now</button>
                                <input type="date" id="pay_now_date" name="pay_now_date"
                                    class="form-control mt-2" disabled required>
                            </div>

                            <div class="col-md-6">
                                <button type="button" id="payLaterBtn" class="btn btn-secondary w-100"
                                    onclick="selectPayLater()">Pay Later</button>
                                <input type="date" id="pay_later_date" name="pay_later_date"
                                    class="form-control mt-2" disabled required readonly>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>

                <!-- Event Calendar for Pay Later (Draggable Popup) -->
                <div id="payLaterCalendar"
                    style="display: none; position: fixed; right: 190px; top: 100px; z-index: 1000; background: white; border: 1px solid #ccc; padding: 10px; width: 300px;">
                    <div id="calendar" style="width: 100%; height: 400px;"></div>
                    <button type="button" onclick="closeCalendar()" class="btn btn-secondary mt-2">Close</button>
                </div>

            </div>
        </div>
    </div>

    @include('Components.Admin.Footer')
    <!-- Styles and Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>

    <!-- Custom Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Calculation for loan payments
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

            // Event listeners for calculations
            document.querySelectorAll('.interest-input, .payment-terms-dropdown').forEach(function(element) {
                element.addEventListener('input', updateCalculations);
            });

            // Initialize calculations on page load
            updateCalculations();
        });
    </script>

    <script>
        (function($) {
            "use strict";
            // Confirmation modal
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
        // Hide buttons in modal
        function removeButtons(id) {
            document.querySelector(`#returnModal${id} .btn-secondary`).style.display = 'none';
            document.querySelector(`#returnModal${id} .btn-primary`).style.display = 'none';
        }
    </script>

    <script>
        // Clickable row event for modal display
        document.querySelectorAll('.clickable-row').forEach(row => {
            row.addEventListener('click', function() {
                const issuer = this.getAttribute('data-issuer');
                const borrower = this.getAttribute('data-borrower');
                const principal = this.getAttribute('data-principal');
                const mode = this.getAttribute('data-mode');
                const payNow = this.getAttribute('data-pay-now') ? new Date(this.getAttribute(
                    'data-pay-now')).toLocaleDateString() : '-';
                const payLater = this.getAttribute('data-pay-later') ? new Date(this.getAttribute(
                    'data-pay-later')).toLocaleDateString() : '-';

                document.getElementById('modalIssuer').textContent = issuer;
                document.getElementById('modalBorrower').textContent = borrower;
                document.getElementById('modalPrincipal').textContent = principal;
                document.getElementById('modalMode').textContent = mode;
                document.getElementById('modalPayNow').textContent = payNow;
                document.getElementById('modalPayLater').textContent = payLater;

                const modal = new bootstrap.Modal(document.getElementById('detailsModal'));
                modal.show();
            });
        });
    </script>
    <script>
        function printDetails() {
            // Get the modal content
            var modalContent = document.querySelector('#detailsModal .modal-content').cloneNode(true);

            // Hide the footer
            var footer = modalContent.querySelector('.modal-footer');
            footer.style.display = 'none';

            // Open a new window for printing
            var printWindow = window.open('', '', 'height=400,width=600');

            // Write the content to the new window
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write(
            '<style>body { font-family: Arial, sans-serif; }</style>'); // Add any styles you want here
            printWindow.document.write('</head><body>');
            printWindow.document.write(modalContent.innerHTML);
            printWindow.document.write('</body></html>');

            // Close the document and trigger print
            printWindow.document.close();
            printWindow.print();
        }
    </script>
    <script>
        // Print modal details
        function printModal(modalId) {
            var printContents = document.getElementById('printContent' + modalId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

    {{-- <script>
    // Manage Pay Now and Pay Later selections
    function selectPayNow() {
        document.getElementById('pay_now_date').disabled = false;
        document.getElementById('pay_later_date').disabled = true;
        document.getElementById('pay_later_date').value = '';
        document.getElementById('payLaterCalendar').style.display = 'none';
    }

    function selectPayLater() {
        document.getElementById('pay_later_date').disabled = false;
        document.getElementById('pay_now_date').disabled = true;
        document.getElementById('pay_now_date').value = '';
        document.getElementById('payLaterCalendar').style.display = 'block';
        initCalendar();
    }

    function initCalendar() {
        const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
            initialView: 'dayGridMonth',
            dateClick: function(info) {
                document.getElementById('pay_later_date').value = info.dateStr;
            },
        });
        calendar.render();
    }
</script> --}}
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    {{-- <script>
    let calendar;

    function selectPayNow() {
        document.getElementById('pay_now_date').disabled = false;
        document.getElementById('pay_later_date').disabled = true;
        document.getElementById('pay_later_date').value = ''; // Clear the Pay Later date
        document.getElementById('payLaterCalendar').style.display = 'none'; // Hide calendar
        if (calendar) calendar.destroy(); // Destroy calendar instance if it exists
    }

    function selectPayLater() {
        document.getElementById('pay_later_date').disabled = false;
        document.getElementById('pay_now_date').disabled = true;
        document.getElementById('pay_now_date').value = ''; // Clear the Pay Now date
        document.getElementById('payLaterCalendar').style.display = 'block'; // Show calendar
        initCalendar(); // Initialize the calendar
    }

    function closeCalendar() {
        document.getElementById('payLaterCalendar').style.display = 'none'; // Hide calendar
    }

    function initCalendar() {
        calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
            initialView: 'dayGridMonth',
            dateClick: function(info) {
                document.getElementById('pay_later_date').value = info.dateStr; // Set selected date
            },
            events: [
                // You can add event data here if needed
            ]
        });
        calendar.render();
    }

    // Make the calendar draggable
    $(function() {
        $("#payLaterCalendar").draggable({
            handle: "div", // Allows dragging by grabbing the calendar container
            containment: "window" // Keeps the draggable within the window
        });
    });
</script> --}}
    <script>
        let calendar;

        function selectPayNow() {
            // Enable Pay Now date input and set it to today
            const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
            document.getElementById('pay_now_date').value = today; // Set today's date
            document.getElementById('pay_now_date').disabled = false; // Enable the field
            document.getElementById('pay_now_date').readOnly = true; // Make it read-only

            // Disable and clear Pay Later date input
            document.getElementById('pay_later_date').disabled = true;
            document.getElementById('pay_later_date').value = ''; // Clear Pay Later date

            // Hide the calendar
            document.getElementById('payLaterCalendar').style.display = 'none';

            // Destroy calendar instance if it exists
            if (calendar) calendar.destroy();
        }

        function selectPayLater() {
            // Enable Pay Later date input
            document.getElementById('pay_later_date').disabled = false;

            // Disable and clear Pay Now date input
            document.getElementById('pay_now_date').disabled = true;
            document.getElementById('pay_now_date').value = ''; // Clear Pay Now date

            // Show the calendar
            document.getElementById('payLaterCalendar').style.display = 'block';

            // Initialize the calendar
            initCalendar();
        }

        function closeCalendar() {
            // Hide the calendar
            document.getElementById('payLaterCalendar').style.display = 'none';
        }

        function initCalendar() {
            // Set tomorrow's date as the minimum selectable date
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            const minDate = tomorrow.toISOString().split('T')[0]; // Format as YYYY-MM-DD

            // Initialize the FullCalendar
            calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
                initialView: 'dayGridMonth',
                dateClick: function(info) {
                    // Set selected date in Pay Later date input
                    document.getElementById('pay_later_date').value = info.dateStr; // Set selected date
                },
                // Disable past dates
                validRange: {
                    start: minDate // Set the start date to tomorrow
                },
                events: [] // You can add event data here if needed
            });
            calendar.render();
        }

        // Make the calendar draggable
        $(function() {
            $("#payLaterCalendar").draggable({
                handle: "#calendar", // Allows dragging by grabbing the calendar container
                containment: "window" // Keeps the draggable within the window
            });
        });
    </script>

    <script>
        // Handle borrower selection and date borrowed input
        document.addEventListener('DOMContentLoaded', function() {
            const borrowerSelect = document.getElementById('borrower');
            const dateBorrowedInput = document.getElementById('date_borrowed');

            borrowerSelect.addEventListener('change', function() {
                const selectedId = this.value;
                const selectedOption = this.querySelector(`option[value="${selectedId}"]`);
                const selectedDate = selectedOption ? selectedOption.dataset.date : '';

                dateBorrowedInput.value = selectedDate || '';
            });

            // Pre-fill date borrowed if a borrower is already selected
            const preSelectedId = borrowerSelect.value;
            const preSelectedOption = borrowerSelect.querySelector(`option[value="${preSelectedId}"]`);
            const preSelectedDate = preSelectedOption ? preSelectedOption.dataset.date : '';
            dateBorrowedInput.value = preSelectedDate || '';
        });
    </script>

    <script>
        // DataTables initialization
        $(document).ready(function() {
            $('#data-table').DataTable();

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
                var textToCopy = data.map(row => row.map(cell => $('<div>').html(cell).text()).join("\t"))
                    .join("\n");

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
                var printableHtml =
                    `<table><thead><tr>${headers.map(header => `<th>${header}</th>`).join('')}</tr></thead><tbody>${data.map(row => `<tr>${row.map(cell => `<td>${cell}</td>`).join('')}</tr>`).join('')}</tbody></table>`;

                var printWindow = window.open('', '_blank');
                printWindow.document.write(printableHtml);
                printWindow.document.close();
                printWindow.print();
            });

            // Export function (Excel)
            document.getElementById('exportBtn').addEventListener('click', function() {
                var {
                    data,
                    headers
                } = getTableData();
                var ws = XLSX.utils.aoa_to_sheet([headers].concat(data));
                var wb = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(wb, ws, 'Data');
                XLSX.writeFile(wb, 'data.xlsx');
            });
        });
    </script>

</body>

</html>
