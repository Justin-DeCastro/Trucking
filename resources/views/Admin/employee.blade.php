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

    <div class="body-wrapper">
        <div class="bodywrapper__inner">
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title">All Employee</h6>
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
        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins pb-3">
            <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                data-bs-target="#manageAdmin">
                <i class="fa fa-plus"></i> Add New
            </button>
            <a href="{{ route('employee-archived') }}"> <button
                class="btn btn-sm btn-outline--primary addAdmin" type="button">
                <i class="fas fa-archive"></i> Archived Employee
            </button> </a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive--md table-responsive">
                            <table id="data-table" class="table table--light style--two display nowrap">
                                <thead>
                                    <tr>
                                        <th>ID Number</th>
                                        <th>Position</th>
                                        <th>Employee Name</th>
                                        <th>Date Hired</th>
                                        <th>Birthday</th>
                                        <th>Birth Place</th>
                                        <th>Civil Status</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Profile Image</th>
                                        <th>201 Files</th>
                                        <th>Status</th>
                                        <th>Actions</th> <!-- New column for action buttons -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr class="clickable-row" data-bs-target="#employeeModal{{ $employee->id }}">
                                            <td>{{ $employee->id_number }}</td>
                                            <td>{{ $employee->position }}</td>
                                            <td>{{ $employee->employee_name }}</td>

                                            <td>{{ \Carbon\Carbon::parse($employee->date_hired)->format('d-M-y') }}</td>

                                            <td>{{ \Carbon\Carbon::parse( $employee->birthday)->format('d-M-y') }}</td>
                                            <td>{{ $employee->birth_place }}</td>
                                            <td>{{ $employee->civil_status }}</td>
                                            <td>{{ $employee->gender }}</td>
                                            <td>{{ $employee->mobile }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>
                                                <a href="{{ asset($employee->profile_image) }}" data-lightbox="profile"
                                                    data-title="Profile Image">
                                                    <img src="{{ asset($employee->profile_image) }}"
                                                        alt="Profile Image"
                                                        style="width: 50px; height: 50px; object-fit: cover;">
                                                </a>
                                            </td>
                                            <td>
                                                @if ($employee->files)
                                                    @php
                                                        $filePaths = json_decode($employee->files, true);
                                                    @endphp
                                                    @foreach ($filePaths as $filePath)
                                                        <a href="{{ asset($filePath) }}" data-lightbox="files"
                                                            data-title="File Image">
                                                            <img src="{{ asset($filePath) }}" alt="File Image"
                                                                style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;">
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <p>No images available</p>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($employee->status === 'Active')
                                                    <span style="background-color: #d4edda; color: #155724; padding: 2px 5px; border-radius: 3px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                                                        {{ $employee->status }}
                                                    </span>
                                                @elseif ($employee->status === 'ARCHIVED')
                                                    <span style="background-color: #f8d7da; color: #721c24; padding: 2px 5px; border-radius: 3px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                                                        {{ $employee->status }}
                                                    </span>
                                                @else
                                                    {{ $employee->status }}
                                                @endif
                                            </td>





                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton{{ $employee->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $employee->id }}">
                                                        <li>
                                                            <a class="dropdown-item text-info" href="#" data-bs-toggle="modal" data-bs-target="#employeeModal{{ $employee->id }}">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#editModal"
                                                                data-id="{{ $employee->id }}"
                                                                data-name="{{ $employee->employee_name }}"
                                                                data-id_number="{{ $employee->id_number }}"
                                                                data-position="{{ $employee->position }}"
                                                                data-date_hired="{{ $employee->date_hired }}"
                                                                data-birthday="{{ $employee->birthday }}"
                                                                data-birth_place="{{ $employee->birth_place }}"
                                                                data-civil_status="{{ $employee->civil_status }}"
                                                                data-gender="{{ $employee->gender }}"
                                                                data-mobile="{{ $employee->mobile }}"
                                                                data-address="{{ $employee->address }}"
                                                                data-profile_image="{{ asset($employee->profile_image) }}"
                                                                data-files="{{ json_encode($employee->files) }}">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item text-warning" href="#" data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                                                data-url="{{ route('employee-archivedtbl', $employee->id) }}">
                                                                <i class="fa fa-archive"></i> Archive
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this data?');">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </button>
                                                            </form>
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

        <!-- Create Vehicle Modal -->
        <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manageAdminLabel">Create Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <!-- Employee Name -->
                            <div class="mb-3">
                                <label for="employee_name" class="form-label">Employee Name</label>
                                <input type="text" id="employee_name" name="employee_name" class="form-control"
                                    required>
                            </div>

                            <!-- ID Number -->
                            <div class="mb-3">
                                <label for="id_number" class="form-label">ID Number</label>
                                <input type="text" id="id_number" name="id_number" class="form-control" required>
                            </div>

                            <!-- Position -->
                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" id="position" name="position" class="form-control" required>
                            </div>

                            <!-- Date Hired -->
                            <div class="mb-3">
                                <label for="date_hired" class="form-label">Date Hired</label>
                                <input type="date" id="date_hired" name="date_hired" class="form-control"
                                    required>
                            </div>

                            <!-- Birthday -->
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Birthday</label>
                                <input type="date" id="birthday" name="birthday" class="form-control" required>
                            </div>

                            <!-- Birth Place -->
                            <div class="mb-3">
                                <label for="birth_place" class="form-label">Birth Place</label>
                                <input type="text" id="birth_place" name="birth_place" class="form-control"
                                    required>
                            </div>

                            <!-- Civil Status -->
                            <div class="mb-3">
                                <label for="civil_status" class="form-label">Civil Status</label>
                                <select id="civil_status" name="civil_status" class="form-control" required>
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" name="gender" class="form-control" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- Mobile -->
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" id="mobile" name="mobile" class="form-control" required>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>

                            <!-- Profile Image -->
                            <div class="mb-3">
                                <label for="profile_image" class="form-label">Profile Image</label>
                                <input type="file" id="profile_image" name="profile_image" class="form-control"
                                    accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="files" class="form-label">Files</label>
                                <input type="file" id="files" name="files[]" class="form-control"
                                    accept="image/*" multiple>
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
                        <h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="editForm" action="{{ route('employee.update', 0) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <input type="hidden" id="editId" name="id">

                            <!-- Employee Name -->
                            <div class="mb-3">
                                <label for="editName" class="form-label">Employee Name</label>
                                <input type="text" id="editName" name="employee_name" class="form-control"
                                    required>
                            </div>

                            <!-- ID Number -->
                            <div class="mb-3">
                                <label for="editIdNumber" class="form-label">ID Number</label>
                                <input type="text" id="editIdNumber" name="id_number" class="form-control"
                                    required>
                            </div>

                            <!-- Position -->
                            <div class="mb-3">
                                <label for="editPosition" class="form-label">Position</label>
                                <input type="text" id="editPosition" name="position" class="form-control"
                                    required>
                            </div>

                            <!-- Date Hired -->
                            <div class="mb-3">
                                <label for="editDateHired" class="form-label">Date Hired</label>
                                <input type="date" id="editDateHired" name="date_hired" class="form-control"
                                    required>
                            </div>

                            <!-- Birthday -->
                            <div class="mb-3">
                                <label for="editBirthday" class="form-label">Birthday</label>
                                <input type="date" id="editBirthday" name="birthday" class="form-control"
                                    required>
                            </div>

                            <!-- Birth Place -->
                            <div class="mb-3">
                                <label for="editBirthPlace" class="form-label">Birth Place</label>
                                <input type="text" id="editBirthPlace" name="birth_place" class="form-control"
                                    required>
                            </div>

                            <!-- Civil Status -->
                            <div class="mb-3">
                                <label for="editCivilStatus" class="form-label">Civil Status</label>
                                <select id="editCivilStatus" name="civil_status" class="form-control" required>
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="editGender" class="form-label">Gender</label>
                                <select id="editGender" name="gender" class="form-control" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- Mobile -->
                            <div class="mb-3">
                                <label for="editMobile" class="form-label">Mobile</label>
                                <input type="text" id="editMobile" name="mobile" class="form-control" required>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label for="editAddress" class="form-label">Address</label>
                                <input type="text" id="editAddress" name="address" class="form-control" required>
                            </div>

                            <!-- Profile Image -->
                            <div class="mb-3">
                                <label for="editProfileImage" class="form-label">Profile Image</label>
                                <input type="file" id="editProfileImage" name="profile_image"
                                    class="form-control" accept="image/*">
                            </div>

                            <!-- Files -->
                            <div class="mb-3">
                                <label for="editFiles" class="form-label">Files</label>
                                <input type="file" id="editFiles" name="files[]" class="form-control"
                                    accept="image/*" multiple>
                            </div>

                            <img id="editProfileImagePreview" src="" alt="Profile Image"
                                style="width: 100%; object-fit: cover;">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


         @foreach ($employees as $employee)
    <div class="modal fade" id="employeeModal{{ $employee->id }}" tabindex="-1"
        aria-labelledby="employeeModalLabel{{ $employee->id }}" aria-hidden="true">
        <div class="modal-dialog custom-width"> <!-- Applied custom-width class -->
            <div class="modal-content border-0 shadow-lg rounded-3">
                <!-- Modal Header with Background Color -->
                <div class="modal-header" style="background-color: #4634FF;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body p-4">
                    <!-- Profile Section -->
                    <div class="text-center mb-3">
                        <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo"
                            class="gdr-logo" style="width: 20%; height: auto;"> <!-- Adjusted logo size -->
                    </div>
                    <div class="text-center mb-3">
                        <img src="{{ asset($employee->profile_image) }}" alt="Profile Image"
                            class="img-fluid rounded-circle border border-light shadow mb-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <h5 class="modal-title" id="employeeModalLabel{{ $employee->id }}">
                            {{ $employee->employee_name }}
                        </h5>
                        <h6 class="mb-0">{{ $employee->position }}</h6>
                        <p class="text-muted mb-0"><strong>ID No.</strong> {{ $employee->id_number }}</p>
                    </div>

                    <!-- Employee Information Section -->
                    <div class="bg-light p-3 rounded text-muted mb-1">
                        <small>Personal Details</small>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Birthday:</strong> {{ $employee->birthday }}</p>
                                <p class="mb-1"><strong>Date Hired:</strong> {{ $employee->date_hired }}</p>
                                <p class="mb-1"><strong>Birth Place:</strong> {{ $employee->birth_place }}</p>
                                <p class="mb-1"><strong>Mobile:</strong> {{ $employee->mobile }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Civil Status:</strong> {{ $employee->civil_status }}</p>
                                <p class="mb-1"><strong>Gender:</strong> {{ $employee->gender }}</p>
                                <p class="mb-1"><strong>Address:</strong> {{ $employee->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer with Print Button -->
                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-primary"
                        onclick="printModal({{ $employee->id }})">
                        <i class="fa fa-print"></i> Print
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
        <div class="modal fade" id="confirmationModal" tabindex="-1"
        aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Archive</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to archive this employee? This action will change the
                    employee's status to archived.
                </div>
                <div class="modal-footer">
                    <form id="archiveForm" method="POST" action="{{ route('employee-archivedtbl', $employee->id) }}">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Archive</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var archiveForm = document.getElementById('archiveForm');
            var archiveButtons = document.querySelectorAll('.btn-delete');

            archiveButtons.forEach(button => {
                button.addEventListener('click', function() {
                    var url = this.getAttribute('data-url'); // Get the data-url attribute value
                    archiveForm.action = url; // Set the form action to the URL
                });
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
        // Get the modal content (excluding the header)
        var modalContent = document.querySelector('#employeeModal' + employeeId + ' .modal-body').innerHTML;

        // Open a new window
        var printWindow = window.open('', '', 'height=600,width=800');

        // Write the modal content to the new window
        printWindow.document.open();
        printWindow.document.write(`
            <html>
            <head>
                <title>Print</title>
                <style>
                    /* Get the same styles from the current page */
                    @media print {
                        body { font-family: Arial, sans-serif; padding: 20px; }
                        .modal-body { width: 100%; }
                        img { max-width: 100%; height: auto; }
                        .text-center { text-align: center; }
                        .rounded-circle { border-radius: 50%; }
                        .border { border: 1px solid #ddd; }
                        .shadow { box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
                        .bg-light { background-color: #f8f9fa; }

                        /* Adjust the logo size and spacing */
                        .gdr-logo { width: 50%; margin-bottom: 20px; } /* Adjust width as needed */
                    }
                </style>
            </head>
            <body>
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


</body>

</html>
