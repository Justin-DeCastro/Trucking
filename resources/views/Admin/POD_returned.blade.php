<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Include jQuery -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
@include('Components.Admin.Header')

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.CoordinatorSidebar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                    <h6 class="page-title">POD Returned Information</h6>
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
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-end align-items-center pb-3">
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAdmin">
                            <i class="las la-plus"></i> Add New POD Returned
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="data-table" class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>Plate Number</th>
                                                <th>Arrival Proof</th>
                                                <th>Proof of Delivery</th>
                                                <th>Completion of Trip</th>
                                                <th>STATUS</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trips as $trip)
                                                <tr class="clickable-row" data-id="{{ $trip->id }}"
                                                    data-toggle="modal" data-target="#dataModal">
                                                    <td>{{ $trip->plate_number }}</td>
                                                    <td>
                                                        @if ($trip->arrival_proof)
                                                            @foreach (json_decode($trip->arrival_proof, true) as $file)
                                                                <img src="{{ asset('arrival_proofs/' . $file) }}"
                                                                    alt="Arrival Proof"
                                                                    style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;"
                                                                    data-toggle="modal" data-target="#imageModal"
                                                                    data-image="{{ asset('arrival_proofs/' . $file) }}">
                                                            @endforeach
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($trip->proof_of_delivery)
                                                            @foreach (json_decode($trip->proof_of_delivery, true) as $file)
                                                                <img src="{{ asset('proofs_of_delivery/' . $file) }}"
                                                                    alt="Proof of Delivery"
                                                                    style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;"
                                                                    data-toggle="modal" data-target="#imageModal"
                                                                    data-image="{{ asset('proofs_of_delivery/' . $file) }}">
                                                            @endforeach
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>

                                                    <td class="text-start">{{ $trip->trip_completion }}</td>
                                                    <td id="status-{{ $trip->id }}">
                                                        @if ($trip->status === 'Pending')
                                                            <span
                                                                style="background-color: yellow; box-shadow: 0 4px 8px rgba(255, 255, 0, 0.5); padding: 2px 4px;">
                                                                {{ $trip->status }}
                                                            </span>
                                                        @elseif ($trip->status === 'Closed')
                                                            <span
                                                                style="background-color: red; color: white; box-shadow: 0 4px 8px rgba(128, 128, 128, 0.5); padding: 2px 4px;">
                                                                {{ $trip->status }}
                                                            </span>
                                                        @else
                                                            {{ $trip->status }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('trips.close', $trip->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit"
                                                                class="btn {{ $trip->status == 'Closed' ? 'btn-secondary' : 'btn-primary' }} text-start"
                                                                {{ $trip->status == 'Closed' ? 'disabled' : '' }}>
                                                                Close Trip
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
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="container d-flex justify-content-center">
        <div id="dataModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 600px; width: 100%;" role="document">
                <div class="modal-content border-0 mx-3">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title font-weight-bold">Trip Details</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <h1><strong>
                                                    <center>Plate Number:
                                                </strong> <span id="modal-plate-number"
                                                    class="font-weight-bold"></span></h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <p><strong>Completion of Trip:</strong> <span id="modal-trip-completion"
                                                    class="font-weight-bold"></span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <p><strong>Status:</strong> <span id="modal-status"
                                                    class="font-weight-bold"></span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 d-flex">
                                            <div class="col-md-6 pr-2">
                                                <strong>Arrival Proof:</strong>
                                                <div id="modal-arrival-proof" class="d-flex flex-wrap">
                                                    <!-- Images will be dynamically added here -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-2">
                                                <strong>Proof of Delivery:</strong>
                                                <div id="modal-proof-of-delivery" class="d-flex flex-wrap">
                                                    <!-- Images will be dynamically added here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-6 d-flex">
                                        <button type="button"
                                            class="btn btn-outline-primary btn-block font-weight-bold text-dark"
                                            onclick="printModalContent()">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Create Vehicle Modal -->
    <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manageAdminLabel">Create POD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('trip.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Driver’s Picture: Destination info (arrival proof) -->
                        <div class="mb-3">
                            <label for="arrival_proof" class="form-label">Driver’s Picture:
                                Destination Info (Arrival Proof)</label>
                            <input type="file" id="arrival_proof" name="arrival_proof[]" class="form-control"
                                accept="image/*" multiple>
                        </div>

                        <div class="mb-3">
                            <label for="proof_of_delivery" class="form-label">Proof of
                                Delivery</label>
                            <input type="file" id="proof_of_delivery" name="proof_of_delivery[]"
                                class="form-control" accept="image/*" multiple>
                        </div>

                        <!-- Completion of Trip -->
                        <div class="mb-3">
                            <label for="trip_completion" class="form-label">Completion of
                                Trip</label>
                            <select id="trip_completion" name="trip_completion" class="form-control" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="Returned Successfully">Returned Successfully
                                </option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>

                        <!-- Tag: POD return (handled by coordinator) / POD waybill -->
                        {{-- <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <select id="tag" name="tag" class="form-control" required>
                                <option value="" disabled selected>Select Tag</option>
                                <option value="POD Return">POD Return</option>

                            </select>
                        </div> --}}

                        <!-- Close Trip -->
                        <!--  <div class="mb-3">
                                            <label for="close_trip" class="form-label">Close Trip</label>
                                            <select id="close_trip" name="close_trip" class="form-control" required>
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="Closed Trip">Mark Trip as Successful</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div> -->

                        <!-- Plate Number -->
                        <div class="mb-3">
                            <label for="plate_number" class="form-label">Plate Number</label>
                            <select id="plate_number" name="plate_number" class="form-control" required>
                                <option value="" disabled selected>Select Plate Number
                                </option>
                                @foreach ($plateNumbers as $plateNumber)
                                    <option value="{{ $plateNumber }}">{{ $plateNumber }}
                                    </option>
                                @endforeach
                            </select>
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Trip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm" action="{{ route('trip.update', 0) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" id="editId" name="id">

                        <!-- Arrival Proof -->
                        <div class="mb-3">
                            <label for="editArrivalProof" class="form-label">Arrival Proof</label>
                            <input type="file" id="editArrivalProof" name="arrival_proof" class="form-control">
                            <img id="editArrivalProofPreview" src="" alt="Arrival Proof"
                                style="width: 100%; object-fit: cover; margin-top: 10px;">
                        </div>

                        <!-- Completion of Trip -->
                        <div class="mb-3">
                            <label for="editTripCompletion" class="form-label">Completion of
                                Trip</label>
                            <select id="editTripCompletion" name="trip_completion" class="form-control" required>
                                <option value="Returned Successfully">Returned Successfully
                                </option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>

                        <!-- Tag -->
                        <div class="mb-3">
                            <label for="editTag" class="form-label">Tag</label>
                            <select id="editTag" name="tag" class="form-control" required>
                                <option value="POD Return">POD Return</option>
                                <!-- Add more options if needed -->
                            </select>
                        </div>

                        <!-- Close Trip -->
                        <div class="mb-3">
                            <label for="editCloseTrip" class="form-label">Close Trip</label>
                            <select id="editCloseTrip" name="close_trip" class="form-control" required>
                                <option value="Mark Trip as Successful">Mark Trip as Successful
                                </option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="plate_number" class="form-label">Plate Number</label>
                            <select id="plate_number" name="plate_number" class="form-control" required>
                                <option value="" disabled selected>Select Plate Number
                                </option>
                                @foreach ($plateNumbers as $plateNumber)
                                    <option value="{{ $plateNumber }}">{{ $plateNumber }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Confirmation Modal -->
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this employee?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Image Preview" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <script>
        function printModalContent() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            // Add CSS for portrait orientation
            printWindow.document.write('<style>@page { size: portrait; } body { margin: 0; }</style>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(document.querySelector('#dataModal .modal-body').innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.clickable-row').forEach(function(row) {
                row.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const plateNumber = this.querySelector('td').textContent.trim();
                    const arrivalProofImages = this.querySelector('td:nth-child(2)').innerHTML;
                    const proofOfDeliveryImages = this.querySelector('td:nth-child(3)').innerHTML;
                    const tripCompletion = this.querySelector('td:nth-child(4)').textContent.trim();
                    const status = this.querySelector('td:nth-child(5)').textContent.trim();

                    document.getElementById('modal-plate-number').textContent = plateNumber;
                    document.getElementById('modal-arrival-proof').innerHTML = arrivalProofImages;
                    document.getElementById('modal-proof-of-delivery').innerHTML =
                        proofOfDeliveryImages;
                    document.getElementById('modal-trip-completion').textContent = tripCompletion;
                    document.getElementById('modal-status').textContent = status;
                });
            });
        });
    </script>

    <script>
        document.getElementById('editArrivalProof').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('editArrivalProofPreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Fill the form with existing data when the modal is shown
        document.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const id = button.getAttribute('data-id');
            const arrivalProof = button.getAttribute('data-arrival_proof');
            const tripCompletion = button.getAttribute('data-trip_completion');
            const tag = button.getAttribute('data-tag');
            const closeTrip = button.getAttribute('data-close_trip');

            document.getElementById('editId').value = id;
            document.getElementById('editArrivalProofPreview').src = arrivalProof || '';
            document.getElementById('editTripCompletion').value = tripCompletion;
            document.getElementById('editTag').value = tag;
            document.getElementById('editCloseTrip').value = closeTrip;
        });
    </script>

    <!-- Include jQuery and Bootstrap JS (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to update modal image source -->
    <script>
        $('#imageModal').on('show.bs.modal', function(e) {
            var image = $(e.relatedTarget).data('image');
            $('#modalImage').attr('src', image);
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
