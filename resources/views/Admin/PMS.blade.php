<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Include jQuery -->

@include('Components.Admin.Header')

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->

    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <div class="d-flex flex-wrap gap-3 justify-content-between  align-items-center pb-3">
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
            </div>
            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title"></h6>
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
                                            <tr>
                                                <td>{{ \Carbon\Carbon::parse($maintenance->created_at)->format('d M, y') }}
                                                    <td>{{ $maintenance->parts_replaced }}</td>
                                                    <td>{{ $maintenance->quantity }}</td>
                                                    <td>₱{{ number_format($maintenance->price_parts_replaced, 2) }}
                                                        <td>₱{{ number_format($maintenance->quantity * $maintenance->price_parts_replaced, 2) }}
                                                        </td>
                                                <td>{{ $maintenance->plate_number }}</td>


                                                <td>{{ $maintenance->truck_model }}</td>


                                                </td>


                                                <td>
                                                    @if (is_array($maintenance->proof_of_need_to_fixed))
                                                        @foreach ($maintenance->proof_of_need_to_fixed as $path)
                                                            @if (is_string($path))
                                                                <img src="{{ asset($path) }}"
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
                                                                <img src="{{ asset($path) }}"
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
                                                        <button type="submit" class="btn btn-danger btn-sm"
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
            document.addEventListener('DOMContentLoaded', function() {
                var updateModal = document.getElementById('updateModal');
                updateModal.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget;
                    var id = button.getAttribute('data-id');
                    var plateNumber = button.getAttribute('data-plate-number');
                    var truckModel = button.getAttribute('data-truck-model');
                    var parts = button.getAttribute('data-parts');
                    var quantity = button.getAttribute('data-quantity');
                    var price = button.getAttribute('data-price');
                    var proofNeedToFix = button.getAttribute(
                        'data-proof-need-to-fix'); // Assuming a URL or file path
                    var proofPayment = button.getAttribute('data-proof-payment'); // Assuming a URL or file path

                    var form = document.getElementById('updateForm');
                    form.action = '/maintenance/' + id; // Update form action URL

                    document.getElementById('plate_number').value = plateNumber;
                    document.getElementById('truck_model').value = truckModel;
                    document.getElementById('parts_replaced').value = parts;
                    document.getElementById('quantity').value = quantity;
                    document.getElementById('price_parts_replaced').value = price;

                    // Handle file inputs for proof_of_need_to_fix and proof_of_payment
                    // Note: File inputs cannot be pre-populated with files via JavaScript for security reasons.
                    // Consider displaying current files or providing a way to remove or add new files.

                    // Example of handling proof display:
                    if (proofNeedToFix) {
                        // Assuming proofNeedToFix contains URLs or file paths
                        // You could create image previews or similar elements to display the current proofs
                        console.log('Proof of Need to Fix:', proofNeedToFix);
                    }

                    if (proofPayment) {
                        // Assuming proofPayment contains URLs or file paths
                        // You could create image previews or similar elements to display the current proofs
                        console.log('Proof of Payment:', proofPayment);
                    }
                });
            });
        </script>

        <script>
            function showImageModal(imageUrl) {
                // Set the src of the image in the modal to the clicked image's URL
                document.getElementById('modalImage').src = imageUrl;
            }
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
