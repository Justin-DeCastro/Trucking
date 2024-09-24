<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Include jQuery -->

    @include('Components.Admin.Header')
</head>

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Accounting.Sidebar')
    <!-- sidebar end -->

    <div class="container-fluid px-3 px-sm-0">
    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <h4> Preventive Maintenance Service Table</h4>
            <div class="d-flex flex-wrap gap-3 justify-content-between  align-items-center pb-3 pt-3">
                <form method="GET" action="{{ route('preventive-maintenance') }}" class="d-flex align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ request('plate_number') ? request('plate_number') : 'Select Plate Number' }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('preventive-maintenance') }}">Select
                                    Plate Number</a></li>
                            @foreach ($plateNumbers as $plateNumber)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('preventive-maintenance', ['plate_number' => $plateNumber]) }}">
                                        {{ $plateNumber }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </form>
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
            <div class="d-flex flex-wrap gap-3 justify-content-end align-items-center pb-3">

                <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                    data-bs-target="#manageAdmin">
                    <i class="las la-plus"></i> Add New
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
                                            <th>Particulars</th>
                                            <th>Quantity</th>
                                            <th>Price per pc</th>
                                            <th>Total Cost</th>
                                            <th>Plate Number</th>
                                            <th>Truck Model</th>
                                            <th>Proof of Need to Fixed</th>
                                            <th>Proof of Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($preventive as $maintenance)
                                            <tr class="clickable-row" data-bs-target="#pmsModal{{ $maintenance->id }}">
                                                <td>{{ \Carbon\Carbon::parse($maintenance->created_at)->format('d-M-y h-i A') }}
                                                <td>{{ $maintenance->parts_replaced }}</td>
                                                <td>{{ $maintenance->quantity }}</td>
                                                <td>₱{{ number_format($maintenance->price_parts_replaced, 2) }}
                                                <td>₱{{ number_format($maintenance->quantity * $maintenance->price_parts_replaced, 2) }}
                                                </td>
                                                <td>{{ $maintenance->plate_number }}</td>


                                                <td>{{ $maintenance->truck_model }}</td>


                                                </td>


                                                <td class="action-btn">
                                                    @if (is_array($maintenance->proof_of_need_to_fixed))
                                                        @foreach ($maintenance->proof_of_need_to_fixed as $path)
                                                            @if (is_string($path))
                                                                <img class="action-btn" src="{{ asset($path) }}"
                                                                    alt="{{ basename($path) }}"
                                                                    style="max-width: 100px; max-height: 100px; cursor: pointer;"
                                                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                                                    onclick="showImageModal('{{ asset($path) }}')">
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (is_array($maintenance->proof_of_payment))
                                                        @foreach ($maintenance->proof_of_payment as $path)
                                                            @if (is_string($path))
                                                                <img class="action-btn" src="{{ asset($path) }}"
                                                                    alt="{{ basename($path) }}"
                                                                    style="max-width: 100px; max-height: 100px; cursor: pointer;"
                                                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                                                    onclick="showImageModal('{{ asset($path) }}')">
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    <!-- Delete Button -->
                                                    <form action="{{ route('maintenance.destroy', $maintenance->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm action-btn"
                                                            onclick="return confirm('Are you sure you want to delete this item?');">
                                                            Delete
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

            <!-- Modal for Proof of Payment -->
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel">
                                Proof Image
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img id="modalImage" src="" alt="Proof" style="width: 100%; height: auto;">
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
                            <h5 class="modal-title" id="imageModalLabel">
                                Proof Image
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img id="modalImage" src="" alt="Proof" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Create Vehicle Modal -->
            <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="manageAdminLabel">Create
                                Vehicle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('preventives.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="plate_number" class="form-label">Plate
                                        Number</label>
                                    <select id="plate_number" name="plate_number" class="form-control" required>
                                        <option value="">Select Plate Number
                                        </option>
                                        @foreach ($plateNumbers as $plateNumber)
                                            <option value="{{ $plateNumber }}">
                                                {{ $plateNumber }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="truck_model" class="form-label">Truck
                                        Model</label>
                                    <input type="text" id="truck_model" name="truck_model" class="form-control"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="parts_replaced" class="form-label">Parts
                                        Replaced</label>
                                    <input type="text" id="parts_replaced" name="parts_replaced"
                                        class="form-control" required
                                        oninput="this.value = this.value.toUpperCase();">
                                </div>
                                <div class="mb-3">
                                    <label for="parts_replaced" class="form-label">Quantity</label>
                                    <input type="text" id="parts_replaced" name="quantity" class="form-control"
                                        required oninput="this.value = this.value.toUpperCase();">
                                </div>
                                <div class="mb-3">
                                    <label for="price_parts_replaced" class="form-label">Price
                                        of Parts
                                        Replaced</label>
                                    <input type="number" id="price_parts_replaced" name="price_parts_replaced"
                                        class="form-control" placeholder="Don't use comma" required>
                                </div>

                                <div class="mb-3">
                                    <label for="proof_of_need_to_fixed" class="form-label">Proof of Need to
                                        Fixed</label>
                                    <input type="file" id="proof_of_need_to_fixed" name="proof_of_need_to_fixed[]"
                                        class="form-control" multiple required>
                                </div>

                                <div class="mb-3">
                                    <label for="proof_of_payment" class="form-label">Proof of
                                        Payment</label>
                                    <input type="file" id="proof_of_payment" name="proof_of_payment[]"
                                        class="form-control" multiple required>
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
                            <h5 class="modal-title" id="confirmationModalLabel">
                                Confirm Deletion</h5>
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
                                <button type="submit" class="btn btn-danger">Yes,
                                    Delete</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Update -->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Update
                                Maintenance Record</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form id="updateForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <!-- Plate Number -->
                                <div class="mb-3">
                                    <label for="plate_number" class="form-label">Plate
                                        Number</label>
                                    <input type="text" class="form-control" id="plate_number" name="plate_number"
                                        required>
                                </div>

                                <!-- Truck Model -->
                                <div class="mb-3">
                                    <label for="truck_model" class="form-label">Truck
                                        Model</label>
                                    <input type="text" class="form-control" id="truck_model" name="truck_model"
                                        required>
                                </div>

                                <!-- Parts Replaced -->
                                <div class="mb-3">
                                    <label for="parts_replaced" class="form-label">Parts
                                        Replaced</label>
                                    <input type="text" class="form-control" id="parts_replaced"
                                        name="parts_replaced" required>
                                </div>

                                <!-- Quantity -->
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity"
                                        required>
                                </div>

                                <!-- Price of Parts Replaced -->
                                <div class="mb-3">
                                    <label for="price_parts_replaced" class="form-label">Price
                                        of Part</label>
                                    <input type="number" class="form-control" id="price_parts_replaced"
                                        name="price_parts_replaced" step="0.01" required>
                                </div>

                                <!-- Proof of Need to Fix -->
                                <div class="mb-3">
                                    <label for="proof_of_need_to_fixed" class="form-label">Proof of Need to
                                        Fix
                                        (Images)</label>
                                    <input type="file" class="form-control" id="proof_of_need_to_fixed"
                                        name="proof_of_need_to_fixed[]" multiple accept="image/*" required>
                                </div>

                                <!-- Proof of Payment -->
                                <div class="mb-3">
                                    <label for="proof_of_payment" class="form-label">Proof of
                                        Payment
                                        (Images)</label>
                                    <input type="file" class="form-control" id="proof_of_payment"
                                        name="proof_of_payment[]" multiple accept="image/*" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @foreach ($preventive as $maintenance)
                <div class="modal fade" id="pmsModal{{ $maintenance->id }}" tabindex="-1"
                    aria-labelledby="pmsModalLabel{{ $maintenance->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pmsModalLabel{{ $maintenance->id }}">Maintenance
                                    Details for {{ $maintenance->plate_number }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="modal-content-{{ $maintenance->id }}">
                                <!-- Modal content displaying the maintenance details -->
                                <p><strong>Date:</strong>
                                    {{ \Carbon\Carbon::parse($maintenance->created_at)->format('d-M-y h:i A') }}</p>
                                <p><strong>Particulars:</strong> {{ $maintenance->parts_replaced }}</p>
                                <p><strong>Quantity:</strong> {{ $maintenance->quantity }}</p>
                                <p><strong>Price per pc:</strong>
                                    ₱{{ number_format($maintenance->price_parts_replaced, 2) }}</p>
                                <p><strong>Total Cost:</strong>
                                    ₱{{ number_format($maintenance->quantity * $maintenance->price_parts_replaced, 2) }}
                                </p>
                                <p><strong>Plate Number:</strong> {{ $maintenance->plate_number }}</p>
                                <p><strong>Truck Model:</strong> {{ $maintenance->truck_model }}</p>

                                <div>
                                    <strong>Proof of Need to Fixed:</strong><br>
                                    @if (is_array($maintenance->proof_of_need_to_fixed))
                                        @foreach ($maintenance->proof_of_need_to_fixed as $path)
                                            @if (is_string($path))
                                                <img src="{{ asset($path) }}" alt="{{ basename($path) }}"
                                                    style="max-width: 100px; max-height: 100px;">
                                            @endif
                                        @endforeach
                                    @else
                                        <p>No documents available</p>
                                    @endif
                                </div>

                                <div>
                                    <strong>Proof of Payment:</strong><br>
                                    @if (is_array($maintenance->proof_of_payment))
                                        @foreach ($maintenance->proof_of_payment as $path)
                                            @if (is_string($path))
                                                <img src="{{ asset($path) }}" alt="{{ basename($path) }}"
                                                    style="max-width: 100px; max-height: 100px;">
                                            @endif
                                        @endforeach
                                    @else
                                        <p>No documents available</p>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="printModalContent({{ $maintenance->id }})">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
        function printModalContent(maintenanceId) {
            // Get the modal content by the maintenance ID
            var modalContent = document.getElementById('modal-content-' + maintenanceId).innerHTML;

            // Open a new window for the print job
            var printWindow = window.open('', '', 'height=600,width=800');

            // Write the modal content into the new window for printing
            printWindow.document.write(`
            <html>
            <head>
                <title>Print Maintenance Details</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        padding: 20px;
                        line-height: 1.6; /* Increased line height for better readability */
                    }
                    p {
                        margin: 10px 0; /* Add vertical spacing between paragraphs */
                        padding: 5px 0;
                    }
                    h5 {
                        text-align: center;
                        margin-bottom: 30px; /* Increased bottom margin for better separation */
                    }
                    img {
                        max-width: 100px;
                        max-height: 100px;
                        margin-top: 10px; /* Add space between images and other content */
                    }
                    .section {
                        margin-bottom: 20px; /* Add space between sections like Proof of Need and Proof of Payment */
                    }
                    .strong {
                        font-weight: bold;
                    }
                    .logo-container {
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .logo-container img {
                        width: 10%;
                        height: auto;
                    }
                </style>
            </head>
            <body>
                <div class="logo-container">
                    <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                </div>
                <h5>Maintenance Details</h5>
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
        function showImageModal(imageUrl) {
            // Set the src of the image in the modal to the clicked image's URL
            document.getElementById('modalImage').src = imageUrl;
        }
    </script>

</body>

</html>
