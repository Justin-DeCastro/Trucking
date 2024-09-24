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

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                    <h6 class="page-title">Monthly Inhouse Earning</h6>
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

                <!-- Display the overall Outstanding Balance and Remaining Balance -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="data-table" class="table table--light style--two display nowrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Rate per Mile</th>
                                                <th>Kilometers</th>
                                                <th>Operational Costs</th>
                                                <th>Gross Income</th>
                                                <th>Net</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($rates as $rate)
                                                @php
                                                    $grossIncome = $rate->rate_per_mile * $rate->km;
                                                    $netAmount = $grossIncome - $rate->operational_costs;
                                                @endphp
                                                <tr class="clickable-row" data-bs-toggle="modal"
                                                    data-bs-target="#detailsModal"
                                                    data-date="{{ \Carbon\Carbon::parse($rate->date)->format('d-M-y h:i') }}"
                                                    data-rate-per-mile="₱{{ number_format($rate->rate_per_mile, 2) }}"
                                                    data-kilometers="{{ number_format($rate->km, 2) }}"
                                                    data-operational-costs="₱{{ number_format($rate->operational_costs, 2) }}"
                                                    data-gross-income="₱{{ number_format($grossIncome, 2) }}"
                                                    data-net-amount="₱{{ number_format($netAmount, 2) }}">


                                                    <td>{{ \Carbon\Carbon::parse($rate->date)->format('d-M-y h:i') }}
                                                    </td>
                                                    <td>₱{{ number_format($rate->rate_per_mile, 2) }}</td>
                                                    <td>{{ number_format($rate->km, 2) }}</td>
                                                    <td>₱{{ number_format($rate->operational_costs, 2) }}</td>
                                                    <td>₱{{ number_format($grossIncome, 2) }}</td>
                                                    <td>₱{{ number_format($netAmount, 2) }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No data available.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal to display details -->
                <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Trip Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong> <span id="modal-date"></span></p>
                                <p><strong>Rate per Mile:</strong> <span id="modal-rate-per-mile"></span></p>
                                <p><strong>Kilometers:</strong> <span id="modal-kilometers"></span></p>
                                <p><strong>Operational Costs:</strong> <span id="modal-operational-costs"></span></p>
                                <p><strong>Gross Income:</strong> <span id="modal-gross-income"></span></p>
                                <p><strong>Net:</strong> <span id="modal-net-amount"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="printDetailsModal()">Print</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Add Account Modal -->
                <div class="modal fade" id="manageAccount" tabindex="-1" aria-labelledby="manageAccountLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageAccountLabel">In-house Earning
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="{{ route('earning.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="rate_per_mile" class="form-label">Rate Per
                                            Mile/KM</label>
                                        <input type="text" id="rate_per_mile" name="rate_per_mile"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="km" class="form-label">Input KM</label>
                                        <input type="text" id="km" name="km" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="operational_costs" class="form-label">Operational Costs</label>
                                        <input type="text" id="operational_costs" name="operational_costs"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
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
        function printDetailsModal() {
            var modalContent = document.querySelector('#detailsModal .modal-body').innerHTML;

            var printWindow = window.open('', '_blank');
            printWindow.document.write(`
            <html>
                <head>
                    <title>Print Trip Details</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        h5 { color: #333; text-align: center; } /* Center the title */
                        .logo-container { text-align: center; margin-bottom: 20px; } /* Center the logo */
                        .logo-container img { width: 10%; height: auto; } /* Adjust logo size */
                        p { margin: 5px 0; }
                    </style>
                </head>
                <body>
                    <div class="logo-container">
                        <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                    </div>
                    <h5>Trip Details</h5>
                    ${modalContent}
                </body>
            </html>
        `);
            printWindow.document.close();
            printWindow.onload = function() {
                printWindow.print();
                printWindow.close();
            };
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.clickable-row');

            rows.forEach(row => {
                row.addEventListener('click', function() {
                    // Get data from the clicked row
                    const date = this.getAttribute('data-date');
                    const ratePerMile = this.getAttribute('data-rate-per-mile');
                    const kilometers = this.getAttribute('data-kilometers');
                    const operationalCosts = this.getAttribute('data-operational-costs');
                    const grossIncome = this.getAttribute('data-gross-income');
                    const netAmount = this.getAttribute('data-net-amount');

                    // Populate the modal with the data
                    document.getElementById('modal-date').innerText = date;
                    document.getElementById('modal-rate-per-mile').innerText = ratePerMile;
                    document.getElementById('modal-kilometers').innerText = kilometers;
                    document.getElementById('modal-operational-costs').innerText = operationalCosts;
                    document.getElementById('modal-gross-income').innerText = grossIncome;
                    document.getElementById('modal-net-amount').innerText = netAmount;
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
