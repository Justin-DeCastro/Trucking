<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<!-- Fancybox CSS -->


<!-- Include jQuery -->

@include('Components.Admin.Header')

<body>


    @include('Components.Accounting.Sidebar')
    @include('Components.Admin.Navbar')

    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h4>Financial Table for Account</h4>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#manageDeposit">
                        <i class="fas fa-plus"></i> Add Deposit
                    </button>
                    <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                        data-bs-target="#manageAdmin">
                        <i class="fas fa-plus"></i> Add PMS
                    </button>
                    <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                        data-bs-target="#manageSubcontractor">
                        <i class="fas fa-plus"></i>Add Loan
                    </button>
                </div>
            </div>

            <!-- Display the overall Outstanding Balance and Remaining Balance -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive--md table-responsive">
                                <table id="data-table" class="table table--light style--two display nowrap"">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Particulars</th>
                                            <th>Service Fee</th>
                                            <th>Expenses</th>
                                            <th>Net Income</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($monthlyTransactions as $month => $dailyTransactions)
                                            <!-- Display month header -->
                                            <tr>
                                                <td colspan="5">
                                                    <strong>{{ \Carbon\Carbon::createFromFormat('Y-m', $month)->format('F Y') }}</strong>
                                                </td>
                                            </tr>
                                            @foreach ($dailyTransactions as $day => $data)
                                                <tr>
                                                    <!-- Change date format to day-month-year -->
                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $day)->format('d-M-Y') }}
                                                    </td>

                                                    <td>
                                                        @foreach ($data['transactions'] as $transaction)
                                                            {{ $transaction->particulars }}<br>
                                                        @endforeach
                                                    </td>
                                                    <td>₱ {{ number_format($data['depositBalance'], 2) }}</td>
                                                    <td>₱ {{ number_format($data['withdrawBalance'], 2) }}</td>
                                                    <td class="text-start">₱ {{ number_format($data['netIncome'], 2) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                    <!-- Grand Total Row -->
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"><strong>Grand Total:</strong></td>
                                            <td><strong> ₱{{ number_format($grandTotalDeposit, 2) }}</strong></td>
                                            <td><strong>₱ {{ number_format($grandTotalWithdraw, 2) }}</strong></td>
                                            <td><strong>₱ {{ number_format($grandNetIncome, 2) }}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
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
