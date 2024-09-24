<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<!-- Include jQuery -->
<style>

</style>
@include('Components.Admin.Header')

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->

    <div class="container-fluid px-3 px-sm-0">
    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title">All Vehicles</h6>
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
        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-end align-items-center pb-3">
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <a href="{{ route('vehicles-archived') }}"> <button class="btn btn-sm btn-outline--primary addAdmin"
                        type="button">
                        <i class="fas fa-archive"></i> Archived Trucks
                    </button> </a>
                <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                    data-bs-target="#manageAdmin">
                    <i class="fas fa-plus"></i> Add New Vehicle
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
                                        <th>Plate Number</th>
                                        <th>Truck Operator</th>
                                        <th>Truck Name</th>
                                        <th>Truck Model</th>
                                        <th>Truck Capacity</th>
                                        <th>Truck Status</th>
                                        <th>Truck Quantity</th>
                                        <th>OR Document</th>
                                        <th>CR Document</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $vehicle)
                                        <tr class="clickable-row" data-bs-target="#truckModal{{ $vehicle->id }}">
                                            <td>{{ $vehicle->plate_number }}</td>
                                            <td>{{ $vehicle->operator_name }}</td>
                                            <td>{{ $vehicle->truck_name }}</td>
                                            <td>{{ $vehicle->truck_model }}</td>
                                            <td>{{ $vehicle->truck_capacity }}</td>
                                            <td>{{ $vehicle->truck_status }}</td>
                                            <td>{{ $vehicle->quantity }}</td>
                                            <td>
                                                @if (!empty($vehicle->or))
                                                    <img src="{{ asset($vehicle->or) }}" alt="OR Document"
                                                        style="max-width: 200px; max-height: 150px;" />
                                                @else
                                                    No OR document available
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($vehicle->cr))
                                                    <img src="{{ asset($vehicle->cr) }}" alt="CR Document"
                                                        style="max-width: 200px; max-height: 150px;" />
                                                @else
                                                    No CR document available
                                                @endif
                                            </td>
                                            <td class="action-btn">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle btn-sm"
                                                        type="button" id="actionsDropdown{{ $vehicle->id }}"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="actionsDropdown{{ $vehicle->id }}">
                                                        <li>
                                                            <button class="dropdown-item btn-info text-blue"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#viewVehicleModal{{ $vehicle->id }}"
                                                                data-id="{{ $vehicle->id }}"
                                                                data-or="{{ asset($vehicle->or) }}"
                                                                data-cr="{{ asset($vehicle->cr) }}">
                                                                <i class="fa fa-eye"></i> View
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item btn-warning text-darkblue"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#editJobModal{{ $vehicle->id }}"
                                                                data-id="{{ $vehicle->id }}"
                                                                data-plate-number="{{ $vehicle->plate_number }}"
                                                                data-truck-name="{{ $vehicle->truck_name }}"
                                                                data-truck-model="{{ $vehicle->truck_model }}"
                                                                data-truck-capacity="{{ $vehicle->truck_capacity }}"
                                                                data-truck-status="{{ $vehicle->truck_status }}"
                                                                data-quantity="{{ $vehicle->quantity }}"
                                                                data-or="{{ asset($vehicle->or) }}"
                                                                data-cr="{{ asset($vehicle->cr) }}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item btn-danger text-red" type="button"
                                                                data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                                                data-url="{{ route('vehicles-archivedtbl', $vehicle->id) }}">
                                                                <i class="fa fa-archive"></i> Archive
                                                            </button>
                                                        </li>

                                                    </ul>
                                                </div>
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

        <!-- view Vehicle Modal -->
        @foreach ($vehicles as $vehicle)
            <div class="modal fade" id="viewVehicleModal{{ $vehicle->id }}" tabindex="-1"
                aria-labelledby="viewVehicleModalLabel{{ $vehicle->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewVehicleModalLabel{{ $vehicle->id }}">
                                <strong>Plate Number:</strong> {{ $vehicle->plate_number }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <strong>Official Receipt:</strong>
                                    @if (!empty($vehicle->or))
                                        <div class="d-flex flex-column align-items-center">
                                            <a href="{{ asset($vehicle->or) }}" target="_blank" class="mb-2">
                                                <img src="{{ asset($vehicle->or) }}" alt="OR Document"
                                                    class="img-fluid rounded shadow-sm"
                                                    style="max-width: 100%; height: auto;">
                                            </a>
                                            <a href="{{ asset($vehicle->or) }}" target="_blank"
                                                class="btn btn-secondary btn-sm" download>
                                                <i class="fa fa-download"></i> Download OR
                                            </a>

                                        </div>
                                    @else
                                        <p class="text-muted">No OR document available.</p>
                                    @endif
                                </div>
                                <div class="col-md-12 mb-3">
                                    <strong>Certificate of Registration</strong>
                                    @if (!empty($vehicle->cr))
                                        <div class="d-flex flex-column align-items-center">
                                            <a href="{{ asset($vehicle->cr) }}" target="_blank" class="mb-2">
                                                <img src="{{ asset($vehicle->cr) }}" alt="CR Document"
                                                    class="img-fluid rounded shadow-sm"
                                                    style="max-width: 100%; height: auto;">
                                            </a>
                                            <a href="{{ asset($vehicle->cr) }}" target="_blank"
                                                class="btn btn-secondary btn-sm">
                                                <i class="fa fa-download"></i> Download CR
                                            </a>
                                        </div>
                                    @else
                                        <p class="text-muted">No CR document available.</p>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <strong>Other Documents:</strong>
                                    @if (!empty($vehicle->documents) && is_array($vehicle->documents))
                                        <div class="row">
                                            @foreach ($vehicle->documents as $document)
                                                @if ($document !== $vehicle->or && $document !== $vehicle->cr)
                                                    <div class="col-md-4 mb-3">
                                                        <div class="d-flex flex-column align-items-center">
                                                            @if (str_ends_with($document, '.pdf'))
                                                                <a href="{{ asset($document) }}" target="_blank"
                                                                    class="btn btn-secondary btn-sm mb-2" download>
                                                                    <i class="fa fa-download"></i> Download PDF
                                                                </a>
                                                                <a href="{{ asset($document) }}" target="_blank"
                                                                    class="text-secondary">
                                                                    <i class="fa fa-file-pdf-o fa-3x"></i>
                                                                </a>
                                                            @else
                                                                <img src="{{ asset($document) }}"
                                                                    alt="{{ basename($document) }}"
                                                                    class="img-fluid rounded shadow-sm mb-2"
                                                                    style="max-width: 100%; height: auto;">
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-muted">No other documents available.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Create Vehicle Modal -->
        <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manageAdminLabel">Create Vehicle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('vehicles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Plate Number -->
                        <div class="mb-3">
                            <label for="plate_number" class="form-label">Plate Number</label>
                            <input type="text" id="plate_number" name="plate_number" class="form-control"
                                required>
                        </div>

                        <!-- Truck Operator -->
                        <div class="mb-3">
                            <label for="operator_name" class="form-label">Truck Operator</label>
                            <input type="text" id="operator_name" name="operator_name" class="form-control"
                                required>
                        </div>

                        <!-- Truck Name -->
                        <div class="mb-3">
                            <label for="truck_name" class="form-label">Truck Name</label>
                            <input type="text" id="truck_name" name="truck_name" class="form-control" required>
                        </div>

                        <!-- Truck Model -->
                        <div class="mb-3">
                            <label for="truck_model" class="form-label">Truck Model</label>
                            <input type="text" id="truck_model" name="truck_model" class="form-control" required>
                        </div>

                        <!-- Truck Capacity -->
                        <div class="mb-3">
                            <label for="truck_capacity" class="form-label">Truck Capacity</label>
                            <input type="text" id="truck_capacity" name="truck_capacity" class="form-control"
                                required>
                        </div>

                        <!-- Truck Status -->
                        <div class="mb-3">
                            <label for="truck_status" class="form-label">Truck Status</label>
                            <input type="text" id="truck_status" name="truck_status" class="form-control"
                                required>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" required>
                        </div>

                        <!-- OR File -->
                        <div class="mb-3">
                            <label for="or" class="form-label">Upload OR</label>
                            <input type="file" id="or" name="or" class="form-control" required>
                        </div>

                        <!-- CR File -->
                        <div class="mb-3">
                            <label for="cr" class="form-label">Upload CR</label>
                            <input type="file" id="cr" name="cr" class="form-control" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

        <!-- Update Vehicle Modal -->
        @foreach ($vehicles as $vehicle)
            <!-- Modal -->
            <div class="modal fade" id="editJobModal{{ $vehicle->id }}" tabindex="-1"
                aria-labelledby="editJobModalLabel{{ $vehicle->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editJobModalLabel{{ $vehicle->id }}">Edit
                                Vehicle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="plate_number" class="form-label">Plate
                                            Number</label>
                                        <input type="text" class="form-control" id="plate_number"
                                            name="plate_number" value="{{ $vehicle->plate_number }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="truck_operator" class="form-label">Truck
                                            Operator</label>
                                        <input type="text" class="form-control" id="truck_operator"
                                            name="truck_operator" value="{{ $vehicle->truck_operator }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="truck_name" class="form-label">Truck Name</label>
                                        <input type="text" class="form-control" id="truck_name" name="truck_name"
                                            value="{{ $vehicle->truck_name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="truck_model" class="form-label">Truck
                                            Model</label>
                                        <input type="text" class="form-control" id="truck_model"
                                            name="truck_model" value="{{ $vehicle->truck_model }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="truck_capacity" class="form-label">Truck
                                            Capacity</label>
                                        <input type="text" class="form-control" id="truck_capacity"
                                            name="truck_capacity" value="{{ $vehicle->truck_capacity }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="truck_status" class="form-label">Truck
                                            Status</label>
                                        <input type="text" class="form-control" id="truck_status"
                                            name="truck_status" value="{{ $vehicle->truck_status }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="{{ $vehicle->quantity }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="documents" class="form-label">Documents</label>
                                        <input type="file" class="form-control" id="documents" name="documents[]"
                                            multiple>
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
            </div>
        @endforeach



        <!-- Modal -->
      <!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Archive Vehicle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to archive this vehicle?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmArchive">Archive</button>
            </div>
        </div>
    </div>
</div>


        @foreach ($vehicles as $vehicle)
            <!-- Modal for viewing each vehicle -->
            <div class="modal fade" id="truckModal{{ $vehicle->id }}" tabindex="-1"
                aria-labelledby="truckModalLabel{{ $vehicle->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" id="printableArea{{ $vehicle->id }}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="truckModalLabel{{ $vehicle->id }}">Vehicle Details -
                                {{ $vehicle->plate_number }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Truck Operator:</strong> {{ $vehicle->operator_name }}</p>
                                    <p><strong>Truck Name:</strong> {{ $vehicle->truck_name }}</p>
                                    <p><strong>Truck Model:</strong> {{ $vehicle->truck_model }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Truck Capacity:</strong> {{ $vehicle->truck_capacity }}</p>
                                    <p><strong>Status:</strong> {{ $vehicle->truck_status }}</p>
                                    <p><strong>Quantity:</strong> {{ $vehicle->quantity }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Official Receipt:</strong><br>
                                    @if (!empty($vehicle->or))
                                        <img src="{{ asset($vehicle->or) }}" alt="OR Document"
                                            class="img-fluid mb-2">
                                    @else
                                        No OR document available
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <strong>Certificate of Registration:</strong><br>
                                    @if (!empty($vehicle->cr))
                                        <img src="{{ asset($vehicle->cr) }}" alt="CR Document"
                                            class="img-fluid mb-2">
                                    @else
                                        No CR document available
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"
                                onclick="printModal('printableArea{{ $vehicle->id }}')">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

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
            function printModal(printableAreaId) {
                // Get the modal content by ID
                var modalContent = document.getElementById(printableAreaId).innerHTML;

                // Open a new window for printing
                var printWindow = window.open('', '', 'height=600,width=800');

                // Write the modal content to the new window for printing
                printWindow.document.open();
                printWindow.document.write(`
            <html>
            <head>
                <title>Print Vehicle Details</title>
                <style>
                    /* Styles for printing */
                    @media print {
                        body { font-family: Arial, sans-serif; padding: 20px; }
                        .modal-body { width: 100%; }
                        img { max-width: 100%; height: auto; }
                        .text-center { text-align: center; }
                        .rounded-circle { border-radius: 50%; }
                        .border { border: 1px solid #ddd; }
                        .shadow { box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
                        .bg-light { background-color: #f8f9fa; }
                    }
                </style>
            </head>
            <body>
                <h3>Vehicle Details</h3>
                <div class="modal-body">
                    ${modalContent}
                </div>
            </body>
            </html>
        `);
                printWindow.document.close();
                printWindow.focus();
                printWindow.print();
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
            // Function to extract all table data excluding "Action" fields
            function getTableData() {
                var table = $('#data-table').DataTable();
                var data = table.rows({
                    search: 'applied'
                }).data().toArray();

                // Get the header texts
                var headers = table.columns().header().toArray().map(th => th.innerText);

                // Identify the index of the 'Action' column (assuming it's named 'Action')
                var actionIndex = headers.indexOf('Action');

                // Filter out the 'Action' column from headers and data
                if (actionIndex > -1) {
                    headers.splice(actionIndex, 1); // Remove the 'Action' column from headers
                    data = data.map(row => {
                        row.splice(actionIndex, 1); // Remove the 'Action' column from each row
                        return row;
                    });
                }

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

            // Print function - prints only the table excluding 'Action' fields
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

            // PDF export with landscape formatting and smaller font size excluding 'Action' fields
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

            // Excel export function excluding 'Action' fields
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
            function printModal(employeeId) {
                var modal = document.getElementById('employeeModal' + employeeId);
                var modalContent = modal.innerHTML;

                // Remove the modal header and print button from the modal content
                modalContent = modalContent.replace(
                    /<div class="modal-header">[\s\S]*?<button[^>]*onclick="printModal\(\d+\)[^>]*>[^<]*<\/button><\/div>/,
                    '');
                modalContent = modalContent.replace(/<button[^>]*onclick="printModal\(\d+\)[^>]*>[^<]*<\/button>/, '');

                var originalContent = document.body.innerHTML;

                var printWindow = window.open('', '', 'height=600,width=800');
                printWindow.document.write('<html><head><title>Print</title>');

                // Include Bootstrap CSS and any additional CSS
                printWindow.document.write(
                    '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">'
                );

                // Include any additional styles used in your modal
                printWindow.document.write('<style>');
                printWindow.document.write('.modal-dialog { max-width: 800px; margin: 1.75rem auto; }');
                printWindow.document.write(
                    '.modal-content { border: 0; border-radius: .375rem; box-shadow: 0 0 1rem rgba(0,0,0,.175); }');
                printWindow.document.write('.modal-body { padding: 1rem; }');
                printWindow.document.write(
                    '.modal-footer { border-top: 1px solid #e9ecef; padding: 0.75rem; text-align: right; display: none; }'
                ); // Hide footer in print view
                printWindow.document.write(
                    '.card { border: 0; border-radius: .375rem; box-shadow: 0 0 0.125rem rgba(0,0,0,.125); }');
                printWindow.document.write('.card-body { padding: 1.25rem; }');
                printWindow.document.write('.row { display: flex; }');
                printWindow.document.write('.col-md-4 { flex: 0 0 33.333333%; max-width: 33.333333%; }');
                printWindow.document.write('.col-md-8 { flex: 0 0 66.666667%; max-width: 66.666667%; }');
                printWindow.document.write('</style>');

                printWindow.document.write('</head><body >');
                printWindow.document.write(modalContent);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.focus();
                printWindow.print();
            }
        </script>

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

        <script>
            if ($('li').hasClass('active')) {
                $('.sidebar__menu-wrapper').animate({
                    scrollTop: eval($(".active").offset().top - 320)
                }, 500);
            }
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var editModal = document.getElementById('editModal');
                var deleteModal = document.getElementById('deleteModal');

                editModal.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget; // Button that triggered the modal
                    var id = button.getAttribute('data-id');
                    var name = button.getAttribute('data-name');
                    var id_number = button.getAttribute('data-id_number');
                    var position = button.getAttribute('data-position');
                    var profile_image = button.getAttribute('data-profile_image');

                    var form = document.getElementById('editForm');
                    form.action = form.action.replace(/\/\d+$/, '/' +
                        id); // Update form action with employee id

                    document.getElementById('editId').value = id;
                    document.getElementById('editName').value = name;
                    document.getElementById('editIdNumber').value = id_number;
                    document.getElementById('editPosition').value = position;
                    document.getElementById('editProfileImagePreview').src = profile_image;
                });

                deleteModal.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget; // Button that triggered the modal
                    var id = button.getAttribute('data-id');

                    var form = document.getElementById('deleteForm');
                    form.action = form.action.replace(/\/\d+$/, '/' +
                        id); // Update form action with employee id
                });
            });
        </script>

<script>
    // Event listener to capture the button click and update the form action dynamically
    document.addEventListener('DOMContentLoaded', function () {
        const confirmationModal = document.getElementById('confirmationModal');
        const confirmArchiveButton = document.getElementById('confirmArchive');
        let formActionUrl = '';

        // Triggered when the modal is opened
        confirmationModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Button that triggered the modal
            formActionUrl = button.getAttribute('data-url'); // Extract the URL
        });

        // When the confirm button is clicked inside the modal
        confirmArchiveButton.addEventListener('click', function () {
            // Create a hidden form dynamically and submit it
            const form = document.createElement('form');
            form.action = formActionUrl;
            form.method = 'POST';

            // Add CSRF token input
            const csrfTokenInput = document.createElement('input');
            csrfTokenInput.type = 'hidden';
            csrfTokenInput.name = '_token';
            csrfTokenInput.value = '{{ csrf_token() }}'; // Laravel CSRF token
            form.appendChild(csrfTokenInput);

            // Append form to body and submit
            document.body.appendChild(form);
            form.submit();
        });
    });
</script>

</body>

</html>
