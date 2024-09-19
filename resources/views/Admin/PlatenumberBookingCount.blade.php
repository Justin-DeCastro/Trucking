<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
    <style>
        .clickable-row {
    cursor: pointer;
}

        .notification-card {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1050;
            /* Ensure it's above other content */
            width: 300px;
            /* Adjust width as needed */
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .notification-card.show {
            opacity: 1;
            transform: translateY(0);
        }

        .notification-card.d-none {
            opacity: 0;
            transform: translateY(-100px);
        }
    </style>
@include('Components.Admin.Header')

<body>


    <div class="page-wrapper default-version">
        @include('Components.Admin.Navbar')
        @include('Components.Admin.Sidebar')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center pb-3">
                    <h6 class="page-title">Plate Number</h6>
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
                                                <th>Plate Number</th>
                                                <th>Origin</th>
                                                <th>Destination</th>
                                                <th>Trip Ticket</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($plateNumberCounts as $detail)
                                                <tr class="clickable-row"
                                                    data-plate_number="{{ $detail->plate_number }}"
                                                    data-origin="{{ $detail->origin }}"
                                                    data-destination="{{ $detail->destination }}"
                                                    data-trip_ticket="{{ $detail->trip_ticket }}"
                                                    data-date="{{ \Carbon\Carbon::parse($detail->created_at)->format('F d, Y') }}">

                                                    <td>{{ $detail->plate_number }}</td>
                                                    <td>{{ $detail->origin }}</td>
                                                    <td>{{ $detail->destination }}</td>
                                                    <td>{{ $detail->trip_ticket }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($detail->created_at)->format('F d, Y') }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5">No data available</td>
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
    <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Trip Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

            </div>
            <div class="modal-body">
                <p><strong>Plate Number:</strong> <span id="modal-plate-number"></span></p>
                <p><strong>Origin:</strong> <span id="modal-origin"></span></p>
                <p><strong>Destination:</strong> <span id="modal-destination"></span></p>
                <p><strong>Trip Ticket:</strong> <span id="modal-trip-ticket"></span></p>
                <p><strong>Date:</strong> <span id="modal-date"></span></p>
            </div>
        </div>
    </div>
</div>


    {{-- <div id="notificationCard" class="notification-card d-none">
        <div class="card p-3 bg-info text-white border-info">
            <div class="card-body">
                <h5 class="card-title">📊 Monthly Bookings Summary</h5>
                <ul class="list-unstyled">
                    @foreach (range(1, 12) as $month)
                        @php
                            $monthName = \Carbon\Carbon::create()->month($month)->format('F');
                            $formattedMonth = date('Y') . '-' . str_pad($month, 2, '0', STR_PAD_LEFT);
                        @endphp
                        <li class="mb-1"><strong>{{ $monthName }}:</strong>
                            {{ $monthlyBookings->get($formattedMonth, 0) }} bookings</li>
                    @endforeach
                </ul>
                <button type="button" class="btn btn-light mt-3" id="closeNotification">Close</button>
            </div>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    // Using jQuery for handling the row click event
$(document).ready(function() {
    // Attach a click event to table rows with the 'clickable-row' class
    $('#data-table').on('click', '.clickable-row', function() {
        // Get data from the clicked row
        var plateNumber = $(this).data('plate_number');
        var origin = $(this).data('origin');
        var destination = $(this).data('destination');
        var tripTicket = $(this).data('trip_ticket');
        var date = $(this).data('date');

        // Set the modal values
        $('#modal-plate-number').text(plateNumber);
        $('#modal-origin').text(origin);
        $('#modal-destination').text(destination);
        $('#modal-trip-ticket').text(tripTicket);
        $('#modal-date').text(date);

        // Show the modal
        $('#detailModal').modal('show');
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
