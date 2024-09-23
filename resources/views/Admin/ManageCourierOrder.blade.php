<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">

@include('Components.Admin.Header')

<style>
    @media print {
        .modal-header, .modal-footer, .btn-close, button {
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


    @include('Components.Admin.Driver_Sidebar')
    @include('Components.Admin.Navbar')


    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title p-2">Order Information</h6>
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
                    <div class="table-responsive--sm table-responsive">
                        <table id="data-table" class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Pick Up Date</th>
                                    <th>Tracking Number</th>
                                    <th>Truck Plate Number</th>
                                    <th>Destination</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                    <th>Proof of Delivery</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bookings as $detail)
                                    <tr class="clickable-row" data-bs-target="#orderModal{{ $detail->id }}">
                                        <td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('F d, Y g:i A') }}
                                        </td>
                                        <td>{{ $detail->tracking_number }}</td>
                                        <td>{{ $detail->plate_number }}</td>
                                        <td>{{ $detail->consignee_address }}</td>
                                        <td>{{ $detail->status }}</td>
                                        <td>{{ $detail->remarks }}</td>
                                        <td>
                                            @if ($detail->proof_of_delivery)
                                                <a href="{{ asset($detail->proof_of_delivery) }}" target="_blank">View
                                                    Proof</a>
                                            @else
                                                No proof uploaded
                                            @endif
                                        </td>
                                        <td class="action-btn">
                                            <!-- Dropdown for Actions -->
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    id="actionsDropdown{{ $detail->id }}" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu"
                                                    aria-labelledby="actionsDropdown{{ $detail->id }}">
                                                    <!-- Show Travel Guide -->
                                                    <li>
                                                        <button class="dropdown-item" type="button"
                                                            data-bs-toggle="modal" data-bs-target="#routeModal"
                                                            data-merchant-address="{{ $detail->merchant_address }}"
                                                            data-consignee-address="{{ $detail->consignee_address }}"
                                                            data-id="{{ $detail->id }}">
                                                            Show Travel Guide for Booking #{{ $detail->id }}
                                                        </button>
                                                    </li>
                                                    <!-- Update Status -->
                                                    <li>
                                                        <button class="dropdown-item" type="button"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#updateStatusModal{{ $detail->id }}">
                                                            Update Status
                                                        </button>
                                                    </li>
                                                    <!-- Update Location -->
                                                    <li>
                                                        <button class="dropdown-item" type="button"
                                                            data-id="{{ $detail->id }}" data-bs-toggle="modal"
                                                            data-bs-target="#updateLocationModal">
                                                            Update Your Location
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Status Update Modal -->
                                            <div class="modal fade" id="updateStatusModal{{ $detail->id }}"
                                                tabindex="-1"
                                                aria-labelledby="updateStatusModalLabel{{ $detail->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="updateStatusModalLabel{{ $detail->id }}">
                                                                Update Order Status
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Update Status Form -->
                                                            <form class="status-form"
                                                                action="{{ route('update.order.status', $detail->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <input type="hidden" name="update_type" value="status">
                                                                <div class="mb-3">
                                                                    <label for="order_status" class="form-label">Order
                                                                        Status</label>
                                                                    <select name="status"
                                                                        class="order_status form-select" required>
                                                                        <option value="Pod_returned">Pod returned
                                                                        </option>
                                                                        <option value="Delivery_successful">Delivery
                                                                            successful</option>
                                                                        <option value="For_Pick-up">For Pick-up</option>
                                                                        <option value="First_delivery_attempt">First
                                                                            Delivery Attempt</option>
                                                                        <option value="In_Transit">In Transit</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 date_of_pick_up_container"
                                                                    style="display: none;">
                                                                    <label for="date_of_pick_up"
                                                                        class="form-label">Date
                                                                        of Pick-up</label>
                                                                    <input type="datetime-local"
                                                                        name="date_of_pick_up" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="remarks" class="form-label">Add
                                                                        Remarks</label>
                                                                    <input type="text" name="remarks"
                                                                        class="form-control"
                                                                        placeholder="Add remarks here">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="proof_of_delivery"
                                                                        class="form-label">Upload Proof of
                                                                        Delivery</label>
                                                                    <input type="file" name="proof_of_delivery"
                                                                        class="form-control">
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9">No bookings found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="updateLocationModal" tabindex="-1"
                aria-labelledby="updateLocationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateLocationModalLabel">Update Location</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="updateLocationForm" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="location" class="form-label">New Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update Location</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($bookings as $detail)
            <!-- Modal for Booking Details -->
            <div class="modal fade" id="orderModal{{ $detail->id }}" tabindex="-1"
                aria-labelledby="orderModalLabel{{ $detail->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="printContent{{ $detail->id }}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderModalLabel{{ $detail->id }}">Booking Details for
                                Tracking #{{ $detail->tracking_number }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Date:</strong>
                                {{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}</p>
                            <p><strong>Pick Up Date:</strong>
                                {{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('F d, Y g:i A') }}</p>
                            <p><strong>Tracking Number:</strong> {{ $detail->tracking_number }}</p>
                            <p><strong>Truck Plate Number:</strong> {{ $detail->plate_number }}</p>
                            <p><strong>Destination:</strong> {{ $detail->consignee_address }}</p>
                            <p><strong>Status:</strong> {{ $detail->status }}</p>
                            <p><strong>Remarks:</strong> {{ $detail->remarks }}</p>
                            <p><strong>Proof of Delivery:</strong>
                                @if ($detail->proof_of_delivery)
                                    <a href="{{ asset($detail->proof_of_delivery) }}" target="_blank">View
                                        Proof</a>
                                @else
                                    No proof uploaded
                                @endif
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="printModal({{ $detail->id }})">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- CSS to hide elements during print -->





        </div>
    </div>
    <script>
        function printModal(modalId) {
            // Get the modal content by ID
            var printContents = document.getElementById('printContent' + modalId).innerHTML;
            var originalContents = document.body.innerHTML;

            // Replace the body content with modal content
            document.body.innerHTML = printContents;

            // Trigger the print dialog
            window.print();

            // Revert back to the original page content
            document.body.innerHTML = originalContents;

            // Reload the page to ensure the content is restored
            location.reload();
        }
    </script>
    <script>
        // Wait for the DOM to load
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener to all buttons that trigger the modal
            var buttons = document.querySelectorAll('.dropdown-item[data-id]');

            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var locationId = this.getAttribute('data-id');
                    var formAction = "{{ route('update.location', ['id' => ':id']) }}";
                    formAction = formAction.replace(':id', locationId);

                    // Update the form's action with the correct id
                    document.querySelector('#updateLocationModal form').setAttribute('action',
                        formAction);
                });
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.status-form');

            forms.forEach(form => {
                const statusSelect = form.querySelector('.order_status');
                const dateOfPickUpContainer = form.querySelector('.date_of_pick_up_container');

                function toggleDateOfPickUpField() {
                    if (statusSelect.value === 'For_Pick-up') {
                        dateOfPickUpContainer.style.display = 'block';
                    } else {
                        dateOfPickUpContainer.style.display = 'none';
                    }
                }

                // Initial check on page load
                toggleDateOfPickUpField();

                // Add event listener to dropdown
                statusSelect.addEventListener('change', toggleDateOfPickUpField);
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
