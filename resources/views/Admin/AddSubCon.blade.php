<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

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
                <h6 class="page-title">All Admin</h6>
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
                    data-bs-target="#manageSubcontractor">
                    <i class="fas fa-plus"></i> Add New
                </button>
            </div>

            <div class="table-responsive">
                <table id="data-table" class="table table--light style--two">
                    <thead>
                        <tr>
                            <th>Subcontractor ID</th>
                            <th>Company Name</th>
                            <th>Owner Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Truck Capacity</th>
                            <th>Plate Number</th>
                            <th>Email</th>
                            <th>Driver License</th>
                            <th>Action</th> <!-- Add an action column -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcon as $subcontractor)
                            <tr>
                                <td>{{ $subcontractor->subcontractor_id }}</td>
                                <td>{{ $subcontractor->company_name }}</td>
                                <td>{{ $subcontractor->full_name }}</td>
                                <td>{{ $subcontractor->address }}</td>
                                <td>{{ $subcontractor->phone_number }}</td>
                                <td>{{ $subcontractor->truck_capacity }}</td>
                                <td>{{ $subcontractor->plate_number }}</td>
                                <td>{{ $subcontractor->email_address }}</td>
                                <td>
                                    @if ($subcontractor->file_upload)
                                        <a href="{{ asset($subcontractor->file_upload) }}" target="_blank">View
                                            File</a>
                                    @else
                                        No File
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#subcontractorModal{{ $subcontractor->id }}">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @foreach ($subcon as $subcontractor)
                <!-- Modal -->
                <div class="modal fade" id="subcontractorModal{{ $subcontractor->id }}" tabindex="-1"
                    aria-labelledby="subcontractorModalLabel{{ $subcontractor->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content border-0 shadow-lg rounded-3">
                            <div class="modal-header">
                                <h5 class="modal-title" id="subcontractorModalLabel{{ $subcontractor->id }}">
                                    Subcontractor Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card border-0 shadow-sm rounded-3">
                                    <div class="row g-0">
                                        <div class="col-md-4 text-center">
                                            <!-- Display the driver's license as the image -->
                                            @if ($subcontractor->file_upload)
                                                <img src="{{ asset($subcontractor->file_upload) }}"
                                                    alt="Driver License"
                                                    class="img-fluid rounded-circle border border-light mb-3"
                                                    style="width: 150px; height: 200px; object-fit: cover;">
                                            @else
                                                <img src="{{ asset('path/to/default/image.png') }}" alt="No Image"
                                                    class="img-fluid rounded-circle border border-light mb-3"
                                                    style="width: 150px; height: 200px; object-fit: cover;">
                                            @endif
                                            <h5 class="card-title">{{ $subcontractor->full_name }}</h5>
                                            <p><strong>Subcontractor ID:</strong>
                                                {{ $subcontractor->subcontractor_id }}</p>
                                            <p><strong>Company Name:</strong>
                                                {{ $subcontractor->company_name }}</p>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">

                                                <p><strong>Address:</strong> {{ $subcontractor->address }}</p>
                                                <p><strong>Phone Number:</strong>
                                                    {{ $subcontractor->phone_number }}</p>
                                                <p><strong>Truck Capacity:</strong>
                                                    {{ $subcontractor->truck_capacity }}</p>
                                                <p><strong>Plate Number:</strong>
                                                    {{ $subcontractor->plate_number }}</p>
                                                <p><strong>Email:</strong> {{ $subcontractor->email_address }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




            <!-- Create Vehicle Modal -->
            <div class="modal fade" id="manageSubcontractor" tabindex="-1" aria-labelledby="manageSubcontractorLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="manageSubcontractorLabel">Create Subcontractor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('subcontractors.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="company-name" class="form-label">Company Name</label>
                                        <input type="text" id="company-name" name="company_name"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subcontractor-id" class="form-label">Subcontractor
                                            ID</label>
                                        <input type="text" id="subcontractor-id" name="subcontractor_id"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="contact-first-name" class="form-label">Full Name</label>
                                        <input type="text" id="contact-first-name" name="full_name"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contact-last-name" class="form-label">Address</label>
                                        <input type="text" id="contact-last-name" name="address"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email-address" class="form-label">Email Address</label>
                                        <input type="email" id="email-address" name="email_address"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone-number" class="form-label">Phone Number</label>
                                        <input type="tel" id="phone-number" name="phone_number"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="truck_capacity" class="form-label">Truck Capacity</label>
                                        <input type="truck_capacity" id="truck_capacity" name="truck_capacity"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="plate_number" class="form-label">Plate Number</label>
                                        <input type="plate_number" id="plate_number" name="plate_number"
                                            class="form-control" required>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="file-upload" class="form-label">Upload Driver
                                            License</label>
                                        <input type="file" id="file-upload" name="file_upload"
                                            class="form-control" required>
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

            <!-- Confirmation Modal -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                aria-hidden="true">
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

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
   
   
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>
    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>


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
</body>

</html>
