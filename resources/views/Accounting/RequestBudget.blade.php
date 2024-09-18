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
                <h6 class="page-title">Budget Table</h6>
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
                    data-bs-target="#requestBudgetModal">
                    <i class="fa fa-plus"></i>Add Request Budget
                </button>
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
                                        <th>Requester</th>
                                        <th>Department</th>
                                        <th>Amount</th>
                                        <th>Expense Details</th>
                                        <th>Voucher</th>
                                        <th>Bank Name</th>
                                        <th>Account Name</th>
                                        <th>Account Number</th>
                                        <th>Status</th>
                                        <th>Approved by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($budgets as $budget)
                                        <tr id="row-{{ $budget->id }}">
                                            <td>
                                                {{ \Carbon\Carbon::parse($budget->date)->format('d-M-y h-i A') }}
                                            </td>
                                            <td>{{ $budget->requestee }}</td>
                                            <td>{{ $budget->department }}</td>
                                            <td>
                                                {{ number_format($budget->budget_amount, 2) }}</td>
                                            <td>{{ $budget->expense_details }}</td>
                                            <td>{{ $budget->voucher }}</td>
                                            <td>{{ $budget->bank_name }}</td>
                                            <td>{{ $budget->account_name }}</td>
                                            <td>{{ $budget->account_number }}</td>
                                            <td>
                                                {{ $budget->status }}</td>

                                            <td>
                                                {{ $budget->approved_by ? \App\Models\User::find($budget->approved_by)->name : 'N/A' }}
                                            </td> <!-- Display approved by -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Create Request Modal -->
        <div class="modal fade" id="requestBudgetModal" tabindex="-1" aria-labelledby="requestBudgetModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="requestBudgetModalLabel">Budget Request Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('budget.request') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-3">
                                <!-- Date -->
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" id="date" name="date" class="form-control" required>
                                </div>
                                <!-- Requestee -->
                                <div class="col-md-6">
                                    <label for="requestee" class="form-label">Requester</label>
                                    <input type="text" id="requestee" name="requestee" class="form-control" required>
                                </div>
                                <!-- Department -->
                                <div class="col-md-6">
                                    <label for="department" class="form-label">Department</label>
                                    <select id="department" name="department" class="form-control" required>
                                        <option value="" disabled selected>Select Department</option>
                                        <option value="logistics">Logistics</option>
                                        <option value="maintenance">Maintenance</option>
                                        <option value="miscellaneous">Miscellaneous</option>
                                        <option value="operations">Operations</option>
                                    </select>
                                </div>
                                <!-- Budget Amount -->
                                <div class="col-md-6">
                                    <label for="budget_amount" class="form-label">Budget Amount</label>
                                    <input type="number" id="budget_amount" name="budget_amount" class="form-control"
                                        placeholder="Enter Amount" required>
                                </div>
                                <!-- Expense Details -->
                                <div class="col-md-12">
                                    <label for="expense_details" class="form-label">Expense Details</label>
                                    <textarea id="expense_details" name="expense_details" class="form-control" placeholder="Describe the Expense"
                                        rows="3" required></textarea>
                                </div>
                                <!-- Voucher Attachment -->
                                <div class="col-md-12">
                                    <label for="voucher" class="form-label">Voucher Type</label>
                                    <select id="voucher" name="voucher" class="form-control" required>
                                        <option value="" disabled selected>Select a voucher type</option>
                                        <option value="cash">Cash</option>
                                        <option value="cheques">Cheques</option>
                                        <option value="bank_transfer">Bank Transfer</option>
                                    </select>
                                </div>
                                <!-- Additional Fields for Bank Transfer -->
                                <div id="bank-transfer-details" class="col-md-12 d-none">
                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Bank Name</label>
                                        <input type="text" id="bank_name" name="bank_name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="account_name" class="form-label">Account Name</label>
                                        <input type="text" id="account_name" name="account_name"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="account_number" class="form-label">Account Number</label>
                                        <input type="text" id="account_number" name="account_number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('withdraw.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="amount" class="form-label">Date</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="particulars" class="form-label">Particulars</label>
                                <input type="text" id="particulars" name="particulars" class="form-control"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="deposit_amount" class="form-label">Deposit Amount</label>
                                <input type="text" id="deposit_amount" class="form-control" required readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="withdraw_amount" class="form-label">Withdraw Amount</label>
                                <input type="text" id="withdraw_amount" name="withdraw_amount"
                                    class="form-control" placeholder="Enter Amount"required>
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
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
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
    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#updateModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var id = button.data('id'); // Extract the ID
                var date = button.data('date');
                var particulars = button.data('particulars');
                var deposit = button.data('deposit');
                var withdraw = button.data('withdraw');
                var expense = button.data('expense');
                var notes = button.data('notes');

                // Update the modal's content
                var modal = $(this);
                modal.find('#date').val(date);
                modal.find('#particulars').val(particulars);
                modal.find('#deposit_amount').val(deposit);
                modal.find('#withdraw_amount').val(withdraw);
                modal.find('#expense_amount').val(expense);
                modal.find('#notes').val(notes);

                // Make fields read-only or editable based on their values
                modal.find('#deposit_amount').prop('readonly', deposit == 0);
                modal.find('#withdraw_amount').prop('readonly', withdraw == 0);
                modal.find('#expense_amount').prop('readonly', expense == 0);

                // Set the form's action URL to include the transaction ID
                modal.find('#updateForm').attr('action', '/transactions/' + id);
            });
        });
    </script>

</body>

</html>
