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


    <div class="container-fluid px-3 px-sm-0">
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                <h6 class="page-title">All Drivers</h6>
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

            <div class="table-responsive--sm table-responsive">
                <table id="data-table" class="table table--light style--two display nowrap">
                    <thead>
                        <tr>
                            <th>Driver ID</th>
                            <th>Driver's Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Driver License</th>
                            <th>License Number</th>
                            <th>Driver Image</th>
                            <th>Driver Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($couriers as $driver)
                            <tr class="clickable-row" data-bs-target="#driverModal{{ $driver->id }}">
                                <td>{{ $driver->id }}</td>
                                <td>{{ $driver->name }}</td>
                                <td>{{ $driver->address }}</td>
                                <td>{{ $driver->contact_number }}</td>
                                <td>{{ $driver->email }}</td>
                                <td>
                                    @if ($driver->driver_license)
                                        <a href="{{ asset('driver_licenses/' . basename($driver->driver_license)) }}"
                                            target="_blank">View License</a>
                                    @else
                                        No License
                                    @endif
                                </td>

                                <td>{{ $driver->license_number }}</td>
                                <!-- <td>{{ $driver->plate_number }}</td> -->
                                <td>
                                    @if ($driver->driver_license)
                                        <a href="{{ asset('driver_images/' . basename($driver->driver_image)) }}"
                                            target="_blank">View License</a>
                                    @else
                                        No License
                                    @endif
                                </td>
                                <td>
                                    @if ($driver->status === 'terminated')
                                        <span
                                            style="background-color: red; color: white; padding: 2px;">{{ $driver->status }}</span>
                                    @elseif($driver->status === 'renewed')
                                        <span
                                            style="background-color: green; color: white; padding: 2px;">{{ $driver->status }}</span>
                                    @else
                                        {{ $driver->status }}
                                    @endif
                                </td>

                                <!-- Delete Action -->
                                <td class="action-btn">
                                    @if ($driver->status === 'terminated')
                                        <!-- Show Renew button only if status is 'terminated' -->
                                        <form action="{{ route('couriers.updateStatus', $driver->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="renewed">
                                            <button type="submit" class="btn btn-success action-btn"
                                                onclick="return confirm('Are you sure you want to renew this courier?');">Renew</button>
                                        </form>
                                    @elseif ($driver->status === 'renewed')
                                        <!-- Show Terminate button only if status is 'renewed' -->
                                        <form action="{{ route('couriers.updateStatus', $driver->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="terminated">
                                            <button type="submit" class="btn btn-danger action-btn"
                                                onclick="return confirm('Are you sure you want to terminate this courier?');">Terminate</button>
                                        </form>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal Structure -->
            @foreach ($couriers as $driver)
                <div class="modal fade" id="driverModal{{ $driver->id }}" tabindex="-1"
                    aria-labelledby="driverModalLabel{{ $driver->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="driverModalLabel{{ $driver->id }}">Driver Information
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="modalContent{{ $driver->id }}">
                                <p><strong>Driver ID:</strong> {{ $driver->id }}</p>
                                <p><strong>Driver's Name:</strong> {{ $driver->name }}</p>
                                <p><strong>Address:</strong> {{ $driver->address }}</p>
                                <p><strong>Contact Number:</strong> {{ $driver->contact_number }}</p>
                                <p><strong>Email:</strong> {{ $driver->email }}</p>
                                <p><strong>Driver License:</strong>
                                    @if ($driver->driver_license)
                                        <img src="{{ asset('driver_licenses/' . basename($driver->driver_license)) }}"
                                            alt="Driver's License" class="img-fluid">
                                    @else
                                        No License
                                    @endif
                                </p>
                                <p><strong>License Number:</strong> {{ $driver->license_number }}</p>
                                <p><strong>Driver Image:</strong>
                                    @if ($driver->driver_image)
                                        <img src="{{ asset('driver_images/' . basename($driver->driver_image)) }}"
                                            alt="Driver Image" class="img-fluid">
                                    @else
                                        No Image
                                    @endif
                                </p>
                                <p><strong>Driver Status:</strong>
                                    @if ($driver->status === 'terminated')
                                        <span style="background-color: red; color: white; padding: 2px;">
                                            {{ $driver->status }}
                                        </span>
                                    @elseif ($driver->status === 'renewed')
                                        <span style="background-color: green; color: white; padding: 2px;">
                                            {{ $driver->status }}
                                        </span>
                                    @else
                                        {{ $driver->status }}
                                    @endif
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="printModalContent({{ $driver->id }})">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function printModalContent(driverId) {
            var content = document.getElementById('modalContent' + driverId).innerHTML;
            var originalContent = document.body.innerHTML;

            document.body.innerHTML = content;
            window.print();
            document.body.innerHTML = originalContent;
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
