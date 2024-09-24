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
    @include('Components.Admin.Navbar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h4>Total Balance - Approved Budget Request = Remaining Balance</h4>
                    <h6 class="page-title"></h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageDeposit">
                            <i class="fa fa-plus"></i> IN
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
                <div class="d-flex flex-wrap justify-content-between gap-2 align-items-center breadcrumb-plugins pb-3">
                    <div class="col-md-4">
                        <div class="alert alert-info p-2" style="background-color:rgb(93,164,84); color: white;">
                            <strong>Remaining Balance:</strong> &nbsp; ₱{{ number_format($startingBalance, 2) }}
                        </div>
                    </div>
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
                <div class="table-responsive--md table-responsive">
                    <table id="data-table" class="jobOffersTable table table--light style--two display nowrap"">
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
                                <tr class="clickable-row" data-bs-target="#gdrModal{{ $gdrAccounting->id }}"
                                    data-month="{{ $gdrAccounting->date->format('d-M-y h-i A') }}">
                                    <td>{{ $gdrAccounting->date->format('d-M-y h-i A') }}</td>
                                    <td>{{ $gdrAccounting->particulars }}</td>
                                    <td>{{ number_format($gdrAccounting->payment_amount, 2) }}</td>
                                    <td>{{ $gdrAccounting->payment_channel }}</td>
                                    <td>
                                        @if ($gdrAccounting->proof_of_payment)
                                            <a href="{{ asset($gdrAccounting->proof_of_payment) }}" target="_blank">View
                                                Proof</a>
                                        @else
                                            No proof uploaded
                                        @endif
                                    </td>
                                    <td class="text-start">{{ $gdrAccounting->notes }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <!-- GDR Details Modal -->
                @foreach ($GDR as $gdrAccounting)
                    <div class="modal fade" id="gdrModal{{ $gdrAccounting->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="gdrModalLabel{{ $gdrAccounting->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="gdrModalLabel{{ $gdrAccounting->id }}">GDR Details
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Date:</strong> {{ $gdrAccounting->date->format('d-M-y h-i A') }}</p>
                                    <p><strong>Particulars:</strong> {{ $gdrAccounting->particulars }}</p>
                                    <p><strong>Payment Amount:</strong>
                                        {{ number_format($gdrAccounting->payment_amount, 2) }}</p>
                                    <p><strong>Payment Channel:</strong> {{ $gdrAccounting->payment_channel }}</p>
                                    <p><strong>Proof of Payment:</strong></p>
                                    @if ($gdrAccounting->proof_of_payment)
                                        <img src="{{ asset($gdrAccounting->proof_of_payment) }}" alt="Proof of Payment"
                                            class="img-fluid mt-2" style="max-width: 100%; height: auto;">
                                    @else
                                        <p>No proof uploaded</p>
                                    @endif
                                    <br><br>
                                    <p><strong>Notes:</strong> {{ $gdrAccounting->notes }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary"
                                        onclick="printGDRDetails('{{ $gdrAccounting->id }}')">Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                                        <input type="datetime-local" id="date" name="date"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars"
                                            class="form-control" required>
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

            </div>
        </div>
    </div>


    <!-- Withdrawal Modal -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var yearFilter = document.getElementById('yearFilter');
            var monthFilter = document.getElementById('monthFilter');

            function filterRows() {
                var selectedYear = yearFilter.value;
                var selectedMonth = monthFilter.value;
                var rows = document.querySelectorAll('.jobOffersTable tbody tr');

                rows.forEach(function(row) {
                    var rowDateStr = row.getAttribute('data-month');

                    // Example: "18-Sep-24 02-30 PM"
                    var dateParts = rowDateStr.split(' '); // Split date and time
                    var dateComponent = dateParts[0]; // "18-Sep-24"
                    var dateElements = dateComponent.split('-'); // ["18", "Sep", "24"]

                    var day = dateElements[0]; // "18" (not needed here)
                    var month = dateElements[1]; // "Sep"
                    var year = "20" + dateElements[2]; // "24" -> "2024"

                    // Convert month to numeric format
                    var monthMap = {
                        "Jan": "01",
                        "Feb": "02",
                        "Mar": "03",
                        "Apr": "04",
                        "May": "05",
                        "Jun": "06",
                        "Jul": "07",
                        "Aug": "08",
                        "Sep": "09",
                        "Oct": "10",
                        "Nov": "11",
                        "Dec": "12"
                    };
                    var rowMonth = monthMap[month]; // Convert month abbreviation to number

                    if ((selectedYear === '' || year === selectedYear) &&
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
        function printGDRDetails(id) {
            // Get the modal's body content
            var modalBodyContent = document.querySelector(`#gdrModal${id} .modal-body`).innerHTML;

            // Create a new window for printing
            var printWindow = window.open('', '_blank');

            // Write the modal content to the new window
            printWindow.document.write(`
            <html>
                <head>
                    <title>Print GDR Details</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .logo-container { text-align: center; margin-bottom: 20px; }
                        .logo-container img { width: 10%; height: auto; }
                        h5 { color: #333; text-align: center; }
                    </style>
                </head>
                <body>
                    <div class="logo-container">
                        <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                    </div>
                    <h5>GDR Details</h5>
                    ${modalBodyContent}
                </body>
            </html>
        `);

            // Close the document to trigger rendering
            printWindow.document.close();

            // Wait for the content to load, then print
            printWindow.onload = function() {
                printWindow.print();
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
