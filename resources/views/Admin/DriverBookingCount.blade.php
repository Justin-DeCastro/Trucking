<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">


<style>
    .clickable-row {
        cursor: pointer;
    }
</style>

@include('Components.Admin.Header')

<body>
    <div class="page-wrapper default-version">
        @include('Components.Admin.Navbar')
        @include('Components.Admin.Sidebar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                    <h6 class="page-title">Manage Driver</h6>
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
                        <!-- <button class="btn  btn-outline--primary h-45 addNewBranch"><i class="fas fa-plus"></i>Add
                                New</button> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table id="data-table" class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>Driver ID</th>
                                                <th>Driver Name</th>
                                                <th>Date</th>
                                                <th>Product Name</th>
                                                <th>Origin</th>
                                                <th>Destination</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($bookings as $booking)
                                                <tr data-id="{{ $booking->id }}" class="clickable-row">
                                                    <td>{{ $booking->driver_id }}</td> <!-- Display Driver ID -->
                                                    <td>{{ $booking->driver_name }}</td> <!-- Display Driver Name -->
                                                    <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d-M-y h:i A') }}
                                                    </td> <!-- Display Date -->
                                                    <td>{{ $booking->product_name }}</td> <!-- Display Product Name -->
                                                    <td class="text-start">{{ $booking->origin }}</td>
                                                    <!-- Display Consignee Address -->
                                                    <td class="text-start">{{ $booking->destination }}</td>
                                                    <!-- Display Consignee Address -->
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6">No data available</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="data-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dataModalLabel">Booking Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Data will be injected here -->
                    <p><strong>Driver ID:</strong> <span id="modal-driver-id"></span></p>
                    <p><strong>Driver Name:</strong> <span id="modal-driver-name"></span></p>
                    <p><strong>Date:</strong> <span id="modal-date"></span></p>
                    <p><strong>Product Name:</strong> <span id="modal-product-name"></span></p>
                    <p><strong>Origin:</strong> <span id="modal-origin"></span></p>
                    <p><strong>Destination:</strong> <span id="modal-destination"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click event listener to all table rows with class 'clickable-row'
            document.querySelectorAll('.clickable-row').forEach(function(row) {
                row.addEventListener('click', function() {
                    // Extract data from the clicked row
                    const driverId = this.cells[0].innerText;
                    const driverName = this.cells[1].innerText;
                    const date = this.cells[2].innerText;
                    const productName = this.cells[3].innerText;
                    const origin = this.cells[4].innerText;
                    const destination = this.cells[5].innerText;

                    // Populate modal with extracted data
                    document.getElementById('modal-driver-id').innerText = driverId;
                    document.getElementById('modal-driver-name').innerText = driverName;
                    document.getElementById('modal-date').innerText = date;
                    document.getElementById('modal-product-name').innerText = productName;
                    document.getElementById('modal-origin').innerText = origin;
                    document.getElementById('modal-destination').innerText = destination;

                    // Show the modal
                    $('#data-modal').modal('show');
                });
            });
        });
    </script>

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
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>


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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
