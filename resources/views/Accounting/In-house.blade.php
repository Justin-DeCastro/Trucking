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
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Rate per km * km = Gross Income<br>Gross Income - Operational costs = Earnings
                        per trip</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <!-- Add Account Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAccount">
                            <i class="las la-user-plus"></i> Earnings
                        </button>
                    </div>
                </div>

                <!-- Plate Number Filter -->
                <div class="mb-3 pt-4 pb-3">
                    <label for="filter_plate_number" class="form-label">Filter by Plate Number</label>
                    <select id="filter_plate_number" class="form-control" onchange="filterTable()">
                        <option value="">Select Plate Number</option>
                        @foreach ($plateNumbers as $plateNumber)
                            <option value="{{ $plateNumber }}"
                                {{ $plateNumber == $selectedPlateNumber ? 'selected' : '' }}>
                                {{ $plateNumber }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins pb-3">
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

                <!-- Table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="data-table" class="table table--light style--two display nowrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Plate Number</th>
                                                <th>Rate Per km</th>
                                                <th>Kilometers</th>
                                                <th>Gross Income</th>
                                                <th>Operational Costs</th>
                                                <th>Proof of Payment</th>
                                                <th>Earnings Per Trip</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rates as $plateNumber => $items)
                                                @foreach ($items as $inhouse)
                                                    <tr class="clickable-row" data-bs-toggle="modal"
                                                        data-bs-target="#dynamicModal"
                                                        data-date="{{ \Carbon\Carbon::parse($inhouse->date)->format('F d, Y g:i A') }}"
                                                        data-plate="{{ $inhouse->plate_number }}"
                                                        data-rate-per-mile="₱{{ number_format($inhouse->rate_per_mile, 2) }}"
                                                        data-km="{{ $inhouse->km }}"
                                                        data-gross-income="₱{{ number_format($inhouse->rate_per_mile * $inhouse->km, 2) }}"
                                                        data-operational-costs="₱{{ number_format($inhouse->operational_costs, 2) }}"
                                                        data-earnings="₱{{ number_format($inhouse->rate_per_mile * $inhouse->km - $inhouse->operational_costs, 2) }}"
                                                        data-proof="{{ isset($inhouse->proof_of_payment) ? asset($inhouse->proof_of_payment) : '' }}">

                                                        <td>{{ \Carbon\Carbon::parse($inhouse->date)->format('F d, Y g:i A') }}
                                                        </td>
                                                        <td>{{ $inhouse->plate_number }}</td>
                                                        <td>₱{{ number_format($inhouse->rate_per_mile, 2) }}</td>
                                                        <td>{{ $inhouse->km }} km</td>
                                                        <td>₱{{ number_format($inhouse->rate_per_mile * $inhouse->km, 2) }}
                                                        </td>
                                                        <td>₱{{ number_format($inhouse->operational_costs, 2) }}</td>
                                                        <td>
                                                            @if (isset($inhouse->proof_of_payment) && $inhouse->proof_of_payment)
                                                                <img src="{{ asset($inhouse->proof_of_payment) }}"
                                                                    alt="Proof of Payment"
                                                                    style="width: 50px; height: 50px; object-fit: cover; cursor: pointer;">
                                                            @else
                                                                No proof of payment available
                                                            @endif
                                                        </td>
                                                        <td>₱{{ number_format($inhouse->rate_per_mile * $inhouse->km - $inhouse->operational_costs, 2) }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Modal -->
                <div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="dynamicModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dynamicModalLabel">Trip Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong> <span id="modal-date"></span></p>
                                <p><strong>Plate Number:</strong> <span id="modal-plate"></span></p>
                                <p><strong>Rate Per km:</strong> <span id="modal-rate-per-mile"></span></p>
                                <p><strong>Kilometers:</strong> <span id="modal-km"></span></p>
                                <p><strong>Gross Income:</strong> <span id="modal-gross-income"></span></p>
                                <p><strong>Operational Costs:</strong> <span id="modal-operational-costs"></span></p>
                                <p><strong>Earnings Per Trip:</strong> <span id="modal-earnings"></span></p>
                                <p><strong>Proof of Payment:</strong></p>
                                <img id="modal-proof" src="" alt="Proof of Payment"
                                    style="width: 100%; height: auto;">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="printDynamicModal()">Print</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Proof of Payment -->
                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel">Proof of Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img id="modalImage" src="" alt="Proof of Payment"
                                    style="width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="proofOfPaymentModal" tabindex="-1"
                    aria-labelledby="proofOfPaymentLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-end">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="proofOfPaymentLabel">Upload Proof of
                                    Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="proofOfPaymentForm" action="{{ route('upload.proofOfPayment') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="paymentDate" class="form-label">Payment
                                            Date</label>
                                        <input type="date" class="form-control" id="paymentDate"
                                            name="payment_date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="plateNumber" class="form-label">Plate
                                            Number</label>
                                        <input type="text" class="form-control" id="plateNumber"
                                            name="plate_number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="proofOfPayment" class="form-label">Proof of
                                            Payment</label>
                                        <input type="file" class="form-control" id="proofOfPayment"
                                            name="proof_of_payment" accept="image/*,application/pdf" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" form="proofOfPaymentForm"
                                    class="btn btn-primary">Upload</button>
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
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('earning.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <!-- Plate Number Dropdown -->
                                    <div class="mb-3">
                                        <label for="plate_number" class="form-label">Plate
                                            Number</label>
                                        <select id="plate_number" name="plate_number" class="form-control" required>
                                            @foreach ($plateNumbers as $plateNumber)
                                                <option value="{{ $plateNumber }}">
                                                    {{ $plateNumber }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Input Date -->
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Input
                                            Date</label>
                                        <input type="datetime-local" id="date" name="date"
                                            class="form-control" required>
                                    </div>

                                    <!-- Rate Per Mile/KM -->
                                    <div class="mb-3">
                                        <label for="rate_per_mile" class="form-label">Rate Per
                                            Mile/KM</label>
                                        <input type="text" id="rate_per_mile" name="rate_per_mile"
                                            class="form-control">
                                    </div>

                                    <!-- Input KM -->
                                    <div class="mb-3">
                                        <label for="km" class="form-label">Input KM</label>
                                        <input type="text" id="km" name="km" class="form-control"
                                            required>
                                    </div>

                                    <!-- Gross Income -->
                                    <div class="mb-3">
                                        <label for="gross_income" class="form-label">Gross
                                            Income</label>
                                        <input type="text" id="gross_income" name="gross_income"
                                            class="form-control" readonly>
                                    </div>

                                    <!-- Operational Costs -->
                                    <div class="mb-3">
                                        <label for="operational_costs" class="form-label">Operational Costs</label>
                                        <input type="text" id="operational_costs" name="operational_costs"
                                            class="form-control" required>
                                    </div>

                                    <!-- Proof of Payment -->
                                    <div class="mb-3">
                                        <label for="proof_of_payment" class="form-label">Proof of
                                            Payment</label>
                                        <input type="file" class="form-control" id="proof_of_payment"
                                            name="proof_of_payment" accept="image/*,application/pdf">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var plateNumberSelect = document.getElementById('plate_number');
            var ratePerMileInput = document.getElementById('rate_per_mile');
            var kmInput = document.getElementById('km');
            var grossIncomeInput = document.getElementById('gross_income');
            var operationalCostsInput = document.getElementById('operational_costs');

            // Update fields when plate number changes
            plateNumberSelect.addEventListener('change', function() {
                var selectedOption = plateNumberSelect.options[plateNumberSelect.selectedIndex];
                var ratePerMile = selectedOption.getAttribute('data-rate');
                ratePerMileInput.value = ratePerMile;

                // Clear previous values
                grossIncomeInput.value = '';

                // Recalculate gross income if KM is already filled
                calculateGrossIncome();
            });

            // Calculate gross income based on rate per mile and km
            kmInput.addEventListener('input', function() {
                calculateGrossIncome();
            });

            function calculateGrossIncome() {
                var ratePerMile = parseFloat(ratePerMileInput.value) || 0;
                var km = parseFloat(kmInput.value) || 0;
                var grossIncome = ratePerMile * km;
                grossIncomeInput.value = isNaN(grossIncome) ? '' : grossIncome.toFixed(2);
            }
        });
    </script>

    <!-- Deposit Modal -->
    <script>
        function filterTable() {
            var plateNumber = document.getElementById('filter_plate_number').value;
            window.location.href = '{{ route('ratepermile') }}' + '?plate_number=' + plateNumber;
        }
    </script>

    <script>
        function showImageModal(imageUrl) {
            // Set the src of the image in the modal to the clicked image's URL
            document.getElementById('modalImage').src = imageUrl;
        }
    </script>

    <script>
        document.getElementById('filter_plate_number').addEventListener('change', function() {
            var plateNumber = this.value;
            var rows = document.querySelectorAll('#adminTable .plate-number-row');

            rows.forEach(function(row) {
                if (plateNumber === '' || row.dataset.plateNumber === plateNumber) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
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
    function printDynamicModal() {
        // Get the modal's body content
        var modalContent = document.querySelector('#dynamicModal .modal-body').innerHTML;

        // Create a new window for printing
        var printWindow = window.open('', '_blank');

        // Write the modal content to the new window
        printWindow.document.write(`
            <html>
                <head>
                    <title>Print Trip Details</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        img { max-width: 100%; height: auto; }
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
            const tableRows = document.querySelectorAll('.clickable-row');

            tableRows.forEach(row => {
                row.addEventListener('click', function() {
                    const date = this.getAttribute('data-date');
                    const plate = this.getAttribute('data-plate');
                    const ratePerMile = this.getAttribute('data-rate-per-mile');
                    const km = this.getAttribute('data-km');
                    const grossIncome = this.getAttribute('data-gross-income');
                    const operationalCosts = this.getAttribute('data-operational-costs');
                    const earnings = this.getAttribute('data-earnings');
                    const proof = this.getAttribute('data-proof');

                    // Populate the modal with data
                    document.getElementById('modal-date').innerText = date;
                    document.getElementById('modal-plate').innerText = plate;
                    document.getElementById('modal-rate-per-mile').innerText = ratePerMile;
                    document.getElementById('modal-km').innerText = km;
                    document.getElementById('modal-gross-income').innerText = grossIncome;
                    document.getElementById('modal-operational-costs').innerText = operationalCosts;
                    document.getElementById('modal-earnings').innerText = earnings;

                    // Handle proof of payment image
                    const proofElement = document.getElementById('modal-proof');
                    if (proof) {
                        proofElement.src = proof;
                        proofElement.style.display = 'block';
                    } else {
                        proofElement.style.display = 'none';
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
