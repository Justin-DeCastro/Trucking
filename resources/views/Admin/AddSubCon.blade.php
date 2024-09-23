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
                <h6 class="page-title">All Subcontractor</h6>
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
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-end align-items-center pb-3">
                <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                    data-bs-target="#manageSubcontractor">
                    <i class="fas fa-plus"></i> Add New
                </button>
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table--light style--two display nowrap">

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
                            <tr class="clickable-row" data-bs-target="#subcontractorModal{{ $subcontractor->id }}">
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
                                <td class="action-btn">
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
                <div class="modal fade" id="subcontractorModal{{ $subcontractor->id }}" tabindex="-1"
                    aria-labelledby="subcontractorModalLabel{{ $subcontractor->id }}" aria-hidden="true">
                    <div class="modal-dialog custom-width"> <!-- Applied custom-width class -->
                        <div class="modal-content border-0 shadow-lg rounded-3">
                            <!-- Modal Header with Background Color -->
                            <div class="modal-header" style="background-color: #4634FF;">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body p-4" id="modalContent{{ $subcontractor->id }}">
                                <!-- Profile Section -->
                                <div class="text-center mb-3">
                                    <img class="gdr-logo" src="{{ asset('Home/GDR Logo.png') }}" alt="Shopee Xpress Logo"
                                        style="width: 20%; height: auto;">
                                </div>
                                <br>
                                <div class="text-center mb-3">
                                    <img src="{{ asset($subcontractor->file_upload) }}" alt="Profile Image"
                                        class="img-fluid rounded-circle border border-light shadow mb-3"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                    <h5 class="modal-title"
                                        id="subcontractorLabel{{ $subcontractor->subcontractor_id }}">
                                        {{ $subcontractor->full_name }}
                                    </h5>
                                       <h5 class="mb-0">{{ $subcontractor->company_name}}</h5>
                                <p class="text-muted mb-0"><strong>ID No.</strong> {{ $subcontractor->subcontractor_id }}</p>
                                </div>

                                <!-- Employee Information Section -->
                                <div class="bg-light p-3 rounded text-muted mb-1">
                                    <small>Personal Details</small>
                                    <div class="row">
                                        <p class="mb-1"><strong>Address:</strong> {{ $subcontractor->address }}</p>
                                        <p class="mb-1"><strong>Phone Number:</strong>
                                            {{ $subcontractor->phone_number }}</p>
                                        <p class="mb-1"><strong>Truck Capacity:</strong>
                                            {{ $subcontractor->truck_capacity }}</p>
                                        <p class="mb-1"><strong>Plate Number:</strong>
                                            {{ $subcontractor->plate_number }}</p>
                                        <p class="mb-1"><strong>Email:</strong> {{ $subcontractor->email_address }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Footer with Print Button -->
                            <div class="modal-footer d-flex justify-content-end">
                                <button type="button" class="btn btn-primary"
                                    onclick="printModal({{ $subcontractor->id }})">
                                    <i class="fa fa-print"></i> Print
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


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
    function printModal(subcontractorId) {
        // Get the modal content (excluding the header)
        var modalContent = document.querySelector('#subcontractorModal' + subcontractorId + ' .modal-body').innerHTML;

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
                        .gdr-logo { width: 10%; margin-bottom: 20px; } /* Adjust width as needed */
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
