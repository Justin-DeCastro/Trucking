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
                                                    <tr>

                                                        <td>{{ \Carbon\Carbon::parse($inhouse->date)->format('d-M-y') }}
                                                        </td>
                                                        <td>{{ $inhouse->plate_number }}</td>
                                                        <td>₱{{ number_format($inhouse->rate_per_mile, 2) }}</td>
                                                        <td>{{ $inhouse->km }} km</td>
                                                        <td>₱{{ number_format($inhouse->rate_per_mile * $inhouse->km, 2) }}
                                                        </td>
                                                        <td>₱{{ number_format($inhouse->operational_costs, 2) }}</td>


                                                        <td>
                                                            @if (isset($inhouse->proof_of_payment) && $inhouse->proof_of_payment)
                                                                @php
                                                                    $imageUrl = asset($inhouse->proof_of_payment); // Directly access the public path
                                                                @endphp
                                                                <img src="{{ $imageUrl }}" alt="Proof of Payment"
                                                                    style="width: 50px; height: 50px; object-fit: cover; cursor: pointer;"
                                                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                                                    onclick="showImageModal('{{ $imageUrl }}')">
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
                <div class="modal fade" id="proofOfPaymentModal" tabindex="-1" aria-labelledby="proofOfPaymentLabel"
                    aria-hidden="true">
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
                                        <input type="date" class="form-control" id="paymentDate" name="payment_date"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="plateNumber" class="form-label">Plate
                                            Number</label>
                                        <input type="text" class="form-control" id="plateNumber" name="plate_number"
                                            required>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
