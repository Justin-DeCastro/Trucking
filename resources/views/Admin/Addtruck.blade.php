<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Include jQuery -->

@include('Components.Admin.Header')

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')


    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title">Add Truck</h6>
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
                    <i class="fas fa-plus"></i> Add New
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
                                            <th>Plate Number</th>
                                            <th>Vehicle Name</th>
                                            <th>Truck Model</th>
                                            <th>Vehicle Capacity</th>
                                            <th>Vehicle Status</th>
                                            <th>Vehicle Quantity</th>
                                            <th>OR/CR</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vehicles as $vehicle)
                                            <tr>
                                                <td>{{ $vehicle->plate_number }}</td>
                                                <td>{{ $vehicle->truck_name }}</td>
                                                <td>{{ $vehicle->truck_model }}</td>
                                                <td>{{ $vehicle->truck_capacity }}</td>
                                                <td>
                                                    {{ $vehicle->truck_status }}
                                                    <!-- Three-dots icon -->
                                                    <button type="button" class="btn btn-light btn-sm ms-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editStatusModal{{ $vehicle->id }}"
                                                        data-id="{{ $vehicle->id }}"
                                                        data-truck-status="{{ $vehicle->truck_status }}">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                </td>
                                                <td>{{ $vehicle->quantity }}</td>
                                                <td>
                                                    @if (!empty($vehicle->or) || !empty($vehicle->cr))
                                                        <ul class="list-unstyled">
                                                            @if (!empty($vehicle->or))
                                                                <li>
                                                                    <a href="{{ asset($vehicle->or) }}"
                                                                        data-lightbox="vehicle-docs"
                                                                        data-title="Official Receipt (OR)">
                                                                        <img src="{{ asset($vehicle->or) }}"
                                                                            alt="Official Receipt (OR)"
                                                                            class="img-fluid"
                                                                            style="max-width: 100px; height: auto;">
                                                                    </a>
                                                                    <!-- Three-dots icon for OR -->
                                                                    <button type="button"
                                                                        class="btn btn-light btn-sm ms-2"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#updateOrModal"
                                                                        data-vehicle-id="{{ $vehicle->id }}">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                </li>
                                                            @else
                                                                <li>No Official Receipt (OR) available</li>
                                                            @endif

                                                            @if (!empty($vehicle->cr))
                                                                <li>
                                                                    <a href="{{ asset($vehicle->cr) }}"
                                                                        data-lightbox="vehicle-docs"
                                                                        data-title="Certificate of Registration (CR)">
                                                                        <img src="{{ asset($vehicle->cr) }}"
                                                                            alt="Certificate of Registration (CR)"
                                                                            class="img-fluid"
                                                                            style="max-width: 100px; height: auto;">
                                                                    </a>
                                                                    <!-- Three-dots icon for CR -->
                                                                    <button type="button"
                                                                        class="btn btn-light btn-sm ms-2"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#updateDocumentModal"
                                                                        data-doc-id="{{ $vehicle->id }}">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                </li>
                                                            @else
                                                                <li>No Certificate of Registration (CR) available
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    @else
                                                        No documents available
                                                    @endif
                                                </td>



                                                <td>
                                                    <!-- Edit Button -->
                                                    {{-- <button type="button" class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editJobModal{{ $vehicle->id }}"
                                        data-id="{{ $vehicle->id }}"
                                        data-plate-number="{{ $vehicle->plate_number }}"
                                        data-truck-name="{{ $vehicle->truck_name }}"
                                        data-truck-model="{{ $vehicle->truck_model }}"
                                        data-truck-capacity="{{ $vehicle->truck_capacity }}"
                                        data-truck-status="{{ $vehicle->truck_status }}"
                                        data-quantity="{{ $vehicle->quantity }}"
                                        data-documents="{{ json_encode($vehicle->documents) }}">Edit
                                    </button> --}}

                                                    <!-- Delete Button -->
                                                    <button type="button" class="btn btn-danger btn-delete"
                                                        data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                                        data-url="{{ route('vehicles.destroy', $vehicle->id) }}">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <!-- Modal for updating OR document -->





                                    <!-- Status Edit Modal -->

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Update CR Modal -->
                    <div class="modal fade" id="updateDocumentModal" tabindex="-1"
                        aria-labelledby="updateDocumentModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateDocumentModalLabel">Update Certificate of
                                        Registration (CR)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('vehicles.updateCr') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="vehicle_id" id="crVehicleId">
                                        <div class="mb-3">
                                            <label for="cr" class="form-label">Certificate of Registration
                                                (CR)</label>
                                            <input type="file" class="form-control" name="cr" id="cr"
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update CR</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($vehicles as $vehicle)
                        <div class="modal fade" id="editStatusModal{{ $vehicle->id }}" tabindex="-1"
                            aria-labelledby="editStatusModalLabel{{ $vehicle->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editStatusModalLabel{{ $vehicle->id }}">
                                            Update Status for Vehicle #{{ $vehicle->id }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('vehicles.updateStatus', $vehicle->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="truck-status-{{ $vehicle->id }}"
                                                    class="form-label">Status</label>
                                                <select class="form-select" id="truck-status-{{ $vehicle->id }}"
                                                    name="truck_status" required>
                                                    <option value="Available"
                                                        {{ $vehicle->truck_status === 'Available' ? 'selected' : '' }}>
                                                        Available</option>
                                                    <option value="In Use"
                                                        {{ $vehicle->truck_status === 'In Use' ? 'selected' : '' }}>
                                                        In Use</option>
                                                    <option value="Maintenance"
                                                        {{ $vehicle->truck_status === 'Maintenance' ? 'selected' : '' }}>
                                                        Maintenance</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Status</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    {{-- @foreach ($vehicles as $vehicle)
    <div class="modal fade" id="viewVehicleModal{{ $vehicle->id }}" tabindex="-1" aria-labelledby="viewVehicleModalLabel{{ $vehicle->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewVehicleModalLabel{{ $vehicle->id }}">
                        <strong>Plate Number:</strong> {{ $vehicle->plate_number }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <strong>Documents and Certificates:</strong>
                                @if (!empty($vehicle->documents) && is_array($vehicle->documents))
                                    <div class="row">
                                        @foreach ($vehicle->documents as $document)
                                            <div class="col-md-4 mb-3">
                                                <div class="d-flex align-items-center">
                                                    @if (str_ends_with($document, '.pdf'))
                                                        <a href="{{ asset($document) }}" target="_blank" class="btn btn-secondary btn-sm me-2" download>
                                                            <i class="fa fa-download"></i> Download PDF
                                                        </a>
                                                    @endif
                                                    <a href="{{ asset($document) }}" target="_blank" class="me-2">
                                                        @if (str_ends_with($document, '.pdf'))
                                                            <i class="fa fa-file-pdf-o"></i>
                                                        @else
                                                            <img src="{{ asset($document) }}" alt="{{ basename($document) }}" class="img-fluid rounded shadow-sm">
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-muted">No documents available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}

                    <!-- Create Vehicle Modal -->
                    <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="manageAdminLabel">Create Vehicle</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('vehicles.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">

                                        <!-- Operator Name -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="operator_name" class="form-label">Operator
                                                    Name</label>
                                                <input type="text" id="operator_name" name="operator_name"
                                                    class="form-control" placeholder="Enter operator name" required>
                                            </div>
                                        </div>

                                        <!-- Vehicle Details: Plate Number & Truck Name -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="plate_number" class="form-label">Plate Number</label>
                                                <input type="text" id="plate_number" name="plate_number"
                                                    class="form-control" placeholder="Enter plate number" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="truck_name" class="form-label">Truck Name</label>
                                                <input type="text" id="truck_name" name="truck_name"
                                                    class="form-control" placeholder="Enter truck name" required>
                                            </div>
                                        </div>

                                        <!-- Truck Details: Model & Capacity -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="truck_model" class="form-label">Truck Model</label>
                                                <input type="text" id="truck_model" name="truck_model"
                                                    class="form-control" placeholder="Enter truck model" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="truck_capacity" class="form-label">Truck
                                                    Capacity</label>
                                                <input type="text" id="truck_capacity" name="truck_capacity"
                                                    class="form-control" placeholder="Enter truck capacity" required>
                                            </div>
                                        </div>

                                        <!-- Truck Status & Quantity -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="truck_status" class="form-label">Truck Status</label>
                                                <select id="truck_status" name="truck_status" class="form-control"
                                                    required>
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="available">Available</option>
                                                    <option value="not_available">Not Available</option>
                                                    <option value="maintenance">Maintenance</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="number" id="quantity" name="quantity"
                                                    class="form-control" placeholder="Enter quantity" min="1"
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Document Uploads: Official Receipt & Certificate of Registration -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="or" class="form-label">Official Receipt
                                                    (OR)</label>
                                                <input type="file" id="or" name="or"
                                                    class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
                                                <small class="form-text text-muted">Accepted formats: PDF, JPG,
                                                    JPEG, PNG</small>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="cr" class="form-label">Certificate of
                                                    Registration (CR)</label>
                                                <input type="file" id="cr" name="cr"
                                                    class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
                                                <small class="form-text text-muted">Accepted formats: PDF, JPG,
                                                    JPEG, PNG</small>
                                            </div>
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
                                                        name="plate_number" value="{{ $vehicle->plate_number }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="truck_name" class="form-label">Truck Name</label>
                                                    <input type="text" class="form-control" id="truck_name"
                                                        name="truck_name" value="{{ $vehicle->truck_name }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="truck_model" class="form-label">Truck
                                                        Model</label>
                                                    <input type="text" class="form-control" id="truck_model"
                                                        name="truck_model" value="{{ $vehicle->truck_model }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="truck_capacity" class="form-label">Truck
                                                        Capacity</label>
                                                    <input type="text" class="form-control" id="truck_capacity"
                                                        name="truck_capacity" value="{{ $vehicle->truck_capacity }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="truck_status" class="form-label">Truck
                                                        Status</label>
                                                    <select id="truck_status" name="truck_status"
                                                        class="form-control" required>
                                                        <option value="">Select Status</option>
                                                        <option value="available">Available</option>
                                                        <option value="not_available">Not Available</option>
                                                        <option value="maintenance">Maintenance</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="quantity" class="form-label">Quantity</label>
                                                    <input type="number" class="form-control" id="quantity"
                                                        name="quantity" value="{{ $vehicle->quantity }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="documents" class="form-label">Documents</label>
                                                    <input type="file" class="form-control" id="documents"
                                                        name="documents[]" multiple>
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

                    <!-- Confirmation Modal -->
                    <div class="modal fade" id="confirmationModal" tabindex="-1"
                        aria-labelledby="confirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
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
                                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                    </form>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateOrModal" tabindex="-1" aria-labelledby="updateOrModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateOrModalLabel">Update Official Receipt (OR)
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('documents.updateOr') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="vehicle_id" id="orVehicleId">
                                        <div class="mb-3">
                                            <label for="orFile" class="form-label">Choose New OR
                                                Document</label>
                                            <input type="file" class="form-control" id="orFile" name="or"
                                                required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var updateOrModal = document.getElementById('updateOrModal');
                            updateOrModal.addEventListener('show.bs.modal', function(event) {
                                var button = event.relatedTarget;
                                var vehicleId = button.getAttribute('data-vehicle-id');
                                var modalInput = updateOrModal.querySelector('#orVehicleId');
                                modalInput.value = vehicleId;
                            });

                            var updateDocumentModal = document.getElementById('updateDocumentModal');
                            updateDocumentModal.addEventListener('show.bs.modal', function(event) {
                                var button = event.relatedTarget;
                                var vehicleId = button.getAttribute('data-doc-id');
                                var modalInput = updateDocumentModal.querySelector('#crVehicleId');
                                modalInput.value = vehicleId;
                            });
                        });
                    </script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var updateOrModal = document.getElementById('updateOrModal');
                            updateOrModal.addEventListener('show.bs.modal', function(event) {
                                var button = event.relatedTarget; // Button that triggered the modal
                                var vehicleId = button.getAttribute('data-vehicle-id');

                                var vehicleIdInput = updateOrModal.querySelector('#orVehicleId');

                                vehicleIdInput.value = vehicleId;
                            });
                        });
                    </script>

                    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>

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




                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <!-- Include Bootstrap JS -->
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
                    <!-- Include SweetAlert2 JS (optional) -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
                    <!-- DataTables CSS -->
                    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
                    <!-- DataTables JS -->
                    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                    <!-- DataTables Buttons Extension CSS -->
                    <link rel="stylesheet"
                        href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">
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
                    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>
