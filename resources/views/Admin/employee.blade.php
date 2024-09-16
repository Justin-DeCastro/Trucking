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

    <!-- navbar-wrapper start -->
    {{-- <nav class="navbar-wrapper bg--dark d-flex flex-wrap"> --}}
    {{-- <div class="navbar__left">
            <button type="button" class="res-sidebar-open-btn me-3"><i class="fas fa-bars"></i></button>

        </div> --}}
    <div class="navbar__right">
        <ul class="navbar__action-list">



            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img src="Home/user-avatar-male-5.png" alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">Admin</span>
                        </span>
                        <span class="icon"><i class="fas fa-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">


                    <a href="logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
                <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                    <i class="las la-sliders-h"></i>
                </button>
            </li>
        </ul>
    </div>
    </nav>
    <!-- navbar-wrapper end -->


    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">All Admin</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAdmin">
                            <i class="las la-plus"></i> Add New
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table class="table--light style--two table">
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
                                                <th>Actions</th> <!-- New column for action buttons -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id_number }}</td>
                                                    <td>{{ $employee->position }}</td>
                                                    <td>{{ $employee->employee_name }}</td>
                                                    <td>{{ $employee->date_hired }}</td>
                                                    <td>{{ $employee->birthday }}</td>
                                                    <td>{{ $employee->birth_place }}</td>
                                                    <td>{{ $employee->civil_status }}</td>
                                                    <td>{{ $employee->gender }}</td>
                                                    <td>{{ $employee->mobile }}</td>
                                                    <td>{{ $employee->address }}</td>
                                                    <td>
                                                        <a href="{{ asset($employee->profile_image) }}"
                                                            data-lightbox="profile" data-title="Profile Image">
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
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#employeeModal{{ $employee->id }}">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <!-- Edit Button -->
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-bs-toggle="modal" data-bs-target="#editModal"
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
                                                            <!-- Adjust based on how you store files -->
                                                            Edit
                                                        </button>

                                                        <!-- Delete Button -->
                                                        <form action="{{ route('employee.destroy', $employee->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this data?');">
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

                        <!-- Create Vehicle Modal -->
                        <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="manageAdminLabel">Create Employee</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('employee.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <!-- Employee Name -->
                                            <div class="mb-3">
                                                <label for="employee_name" class="form-label">Employee Name</label>
                                                <input type="text" id="employee_name" name="employee_name"
                                                    class="form-control" required>
                                            </div>

                                            <!-- ID Number -->
                                            <div class="mb-3">
                                                <label for="id_number" class="form-label">ID Number</label>
                                                <input type="text" id="id_number" name="id_number"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Position -->
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Position</label>
                                                <input type="text" id="position" name="position"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Date Hired -->
                                            <div class="mb-3">
                                                <label for="date_hired" class="form-label">Date Hired</label>
                                                <input type="date" id="date_hired" name="date_hired"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Birthday -->
                                            <div class="mb-3">
                                                <label for="birthday" class="form-label">Birthday</label>
                                                <input type="date" id="birthday" name="birthday"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Birth Place -->
                                            <div class="mb-3">
                                                <label for="birth_place" class="form-label">Birth Place</label>
                                                <input type="text" id="birth_place" name="birth_place"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Civil Status -->
                                            <div class="mb-3">
                                                <label for="civil_status" class="form-label">Civil Status</label>
                                                <select id="civil_status" name="civil_status" class="form-control"
                                                    required>
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
                                                <input type="text" id="mobile" name="mobile"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" id="address" name="address"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Profile Image -->
                                            <div class="mb-3">
                                                <label for="profile_image" class="form-label">Profile Image</label>
                                                <input type="file" id="profile_image" name="profile_image"
                                                    class="form-control" accept="image/*">
                                            </div>
                                            <div class="mb-3">
                                                <label for="files" class="form-label">Files</label>
                                                <input type="file" id="files" name="files[]"
                                                    class="form-control" accept="image/*" multiple>
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
                        {{-- update modal --}}
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                            aria-hidden="true">
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
                                                <input type="text" id="editName" name="employee_name"
                                                    class="form-control" required>
                                            </div>

                                            <!-- ID Number -->
                                            <div class="mb-3">
                                                <label for="editIdNumber" class="form-label">ID Number</label>
                                                <input type="text" id="editIdNumber" name="id_number"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Position -->
                                            <div class="mb-3">
                                                <label for="editPosition" class="form-label">Position</label>
                                                <input type="text" id="editPosition" name="position"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Date Hired -->
                                            <div class="mb-3">
                                                <label for="editDateHired" class="form-label">Date Hired</label>
                                                <input type="date" id="editDateHired" name="date_hired"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Birthday -->
                                            <div class="mb-3">
                                                <label for="editBirthday" class="form-label">Birthday</label>
                                                <input type="date" id="editBirthday" name="birthday"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Birth Place -->
                                            <div class="mb-3">
                                                <label for="editBirthPlace" class="form-label">Birth Place</label>
                                                <input type="text" id="editBirthPlace" name="birth_place"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Civil Status -->
                                            <div class="mb-3">
                                                <label for="editCivilStatus" class="form-label">Civil Status</label>
                                                <select id="editCivilStatus" name="civil_status" class="form-control"
                                                    required>
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
                                                <input type="text" id="editMobile" name="mobile"
                                                    class="form-control" required>
                                            </div>

                                            <!-- Address -->
                                            <div class="mb-3">
                                                <label for="editAddress" class="form-label">Address</label>
                                                <input type="text" id="editAddress" name="address"
                                                    class="form-control" required>
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
                                                <input type="file" id="editFiles" name="files[]"
                                                    class="form-control" accept="image/*" multiple>
                                            </div>

                                            <img id="editProfileImagePreview" src="" alt="Profile Image"
                                                style="width: 100%; object-fit: cover;">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @foreach ($employees as $employee)
                        <div class="modal fade" id="employeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="employeeModalLabel{{ $employee->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content border-0 shadow-lg rounded-3">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="employeeModalLabel{{ $employee->id }}"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card border-0 shadow-sm rounded-3">
                                            <div class="row g-0">
                                                <div class="col-md-4 text-center">
                                                    <img src="{{ asset($employee->profile_image) }}" alt="Profile Image"
                                                         class="img-fluid rounded-circle border border-light mb-3"
                                                         style="width: 150px; height: 200px; object-fit: cover;">
                                                    <h5 class="card-title">{{ $employee->employee_name }}</h5>
                                                    <p><strong>Position:</strong> {{ $employee->position }}</p>
                                                    <p><strong>ID Number:</strong> {{ $employee->id_number }}</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p><strong>Birthday:</strong> {{ $employee->birthday }}</p>
                                                        <p><strong>Date Hired:</strong> {{ $employee->date_hired }}</p>
                                                        <p><strong>Birth Place:</strong> {{ $employee->birth_place }}</p>
                                                        <p><strong>Civil Status:</strong> {{ $employee->civil_status }}</p>
                                                        <p><strong>Gender:</strong> {{ $employee->gender }}</p>
                                                        <p><strong>Mobile:</strong> {{ $employee->mobile }}</p>
                                                        <p><strong>Address:</strong> {{ $employee->address }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="printModal({{ $employee->id }})">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                        <!-- Confirmation Modal -->
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
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                function printModal(employeeId) {
                    var modal = document.getElementById('employeeModal' + employeeId);
                    var modalContent = modal.innerHTML;

                    // Remove the modal header and print button from the modal content
                    modalContent = modalContent.replace(/<div class="modal-header">[\s\S]*?<button[^>]*onclick="printModal\(\d+\)[^>]*>[^<]*<\/button><\/div>/, '');
                    modalContent = modalContent.replace(/<button[^>]*onclick="printModal\(\d+\)[^>]*>[^<]*<\/button>/, '');

                    var originalContent = document.body.innerHTML;

                    var printWindow = window.open('', '', 'height=600,width=800');
                    printWindow.document.write('<html><head><title>Print</title>');

                    // Include Bootstrap CSS and any additional CSS
                    printWindow.document.write('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">');

                    // Include any additional styles used in your modal
                    printWindow.document.write('<style>');
                    printWindow.document.write('.modal-dialog { max-width: 800px; margin: 1.75rem auto; }');
                    printWindow.document.write('.modal-content { border: 0; border-radius: .375rem; box-shadow: 0 0 1rem rgba(0,0,0,.175); }');
                    printWindow.document.write('.modal-body { padding: 1rem; }');
                    printWindow.document.write('.modal-footer { border-top: 1px solid #e9ecef; padding: 0.75rem; text-align: right; display: none; }'); // Hide footer in print view
                    printWindow.document.write('.card { border: 0; border-radius: .375rem; box-shadow: 0 0 0.125rem rgba(0,0,0,.125); }');
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
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
            <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
            <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

            <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css"
                rel="stylesheet">
            <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css"
                rel="stylesheet">
            <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>
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
                "use strict";
                const colors = {
                    success: '#28c76f',
                    error: '#eb2222',
                    warning: '#ff9f43',
                    info: '#1e9ff2',
                }

                const icons = {
                    success: 'fas fa-check-circle',
                    error: 'fas fa-times-circle',
                    warning: 'fas fa-exclamation-triangle',
                    info: 'fas fa-exclamation-circle',
                }

                const notifications = [];
                const errors = [];


                const triggerToaster = (status, message) => {
                    iziToast[status]({
                        title: status.charAt(0).toUpperCase() + status.slice(1),
                        message: message,
                        position: "topRight",
                        backgroundColor: '#fff',
                        icon: icons[status],
                        iconColor: colors[status],
                        progressBarColor: colors[status],
                        titleSize: '1rem',
                        messageSize: '1rem',
                        titleColor: '#474747',
                        messageColor: '#a2a2a2',
                        transitionIn: 'obunceInLeft'
                    });
                }

                if (notifications.length) {
                    notifications.forEach(element => {
                        triggerToaster(element[0], element[1]);
                    });
                }

                if (errors.length) {
                    errors.forEach(error => {
                        triggerToaster('error', error);
                    });
                }

                function notify(status, message) {
                    if (typeof message == 'string') {
                        triggerToaster(status, message);
                    } else {
                        $.each(message, (i, val) => triggerToaster(status, val));
                    }
                }
            </script>

            <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

            <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
            <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>


            <script>
                "use strict";
                bkLib.onDomLoaded(function() {
                    $(".nicEdit").each(function(index) {
                        $(this).attr("id", "nicEditor" + index);
                        new nicEditor({
                            fullPanel: true
                        }).panelInstance('nicEditor' + index, {
                            hasPanel: true
                        });
                    });
                });

                (function($) {
                    $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                        $('.nicEdit-main').focus();
                    });

                    $('.breadcrumb-nav-open').on('click', function() {
                        $(this).toggleClass('active');
                        $('.breadcrumb-nav').toggleClass('active');
                    });

                    $('.breadcrumb-nav-close').on('click', function() {
                        $('.breadcrumb-nav').removeClass('active');
                    });

                    if ($('.topTap').length) {
                        $('.breadcrumb-nav-open').removeClass('d-none');
                    }

                    $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function(e) {
                        const {
                            top,
                            left
                        } = $(this).next(".dropdown-menu")[0].getBoundingClientRect();
                        $(this).next(".dropdown-menu").css({
                            position: "fixed",
                            inset: "unset",
                            transform: "unset",
                            top: top + "px",
                            left: left + "px",
                        });
                    });
                })(jQuery);
            </script>


            <script>
                (function($) {
                    "use strict";
                    $(document).on('click', '.confirmationBtn', function() {
                        var modal = $('#confirmationModal');
                        let data = $(this).data();
                        modal.find('.question').text(`${data.question}`);
                        modal.find('form').attr('action', `${data.action}`);
                        modal.modal('show');
                    });
                })(jQuery);
            </script>
            <script>
                (function($) {
                    "use strict";

                    $('.editBtn').on('click', function() {
                        let title = 'Update Admin'
                        let name = $(this).data('name');
                        let id = $(this).data('id');
                        let username = $(this).data('username');
                        let email = $(this).data('email');
                        let modal = $('#manageAdmin');
                        modal.find('.modal-title').text(title)
                        modal.find('input[name=name]').val(name);
                        modal.find('input[name=id]').val(id);
                        modal.find('input[name=username]').val(username);
                        modal.find('input[name=email]').val(email);
                        modal.find('input[name="password"]').attr('required', false);
                        modal.find('input[name="password_confirmation"]').attr('required', false);
                        modal.find('.pass').addClass('d-none');
                        modal.find('.confirmPassword').addClass('d-none');
                        modal.modal('show');
                    });

                    $('.addAdmin').on('click', function() {
                        let modal = $('#manageAdmin');
                        $('.resetForm').trigger('reset');
                        $(`input[name=id]`).val(0);
                        modal.find('.pass').removeClass('d-none');
                        modal.find('.confirmPassword').removeClass('d-none');
                        modal.modal('show')
                    });
                })(jQuery);
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

            <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>
            <script>
                "use strict";

                function getEmptyMessage() {
                    return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
                    <p class="text-muted">No search result found</p>
                </div>
            </li>`
                }
            </script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <!-- Include Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
            <!-- Include SweetAlert2 JS (optional) -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>

</html>
