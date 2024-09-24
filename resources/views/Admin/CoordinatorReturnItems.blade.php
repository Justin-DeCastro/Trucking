<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">
@include('Components.Admin.Header')


<style>
    .modal-content {
        border-radius: 8px;
    }

    .modal-body {
        display: flex;
        align-items: center;
    }

    #modal-proof-of-return {
        width: 150px;
        /* Adjust as needed */
        height: auto;
        object-fit: cover;
        border: 2px solid #ddd;
        border-radius: 8px;
    }

    .modal-body p {
        margin-bottom: 8px;
    }

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

    @include('Components.Admin.CoordinatorSidebar')
    @include('Components.Admin.Navbar')

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title p-2">Return Information</h6>
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
                        <div class="d-flex justify-content-end p-2">
                            <!-- Button to trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addReturnModal">
                                Add Return Item
                            </button>
                        </div>
                        <div class="table-responsive--sm table-responsive">
                            <table id="data-table" class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>Return Date</th>
                                        <th>Product Name</th>
                                        <th>Return Reason</th>
                                        <th>Return Quantity</th>
                                        <th>Condition</th>
                                        <th>Driver Name</th>
                                        <th>Return Status</th>
                                        <th>Proof of Return</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($returnItems as $return)
                                        <tr class="clickable-row" data-bs-target="#returnModal{{ $return->id }}">
                                            <td>{{ $return->return_date }}</td>
                                            <td>{{ $return->product_name }}</td>
                                            <td>{{ $return->return_reason }}</td>
                                            <td>{{ $return->return_quantity }}</td>
                                            <td>{{ $return->condition }}</td>
                                            <td>{{ $currentDriverName }}</td>
                                            <td>{{ $return->status }}</td>
                                            <td class="action-btn">
                                                @if ($return->proof_of_return)
                                                    <img src="{{ asset('proofs/' . $return->proof_of_return) }}"
                                                        alt="Proof of Return"
                                                        style="max-width: 100px; max-height: 100px; object-fit: cover; margin-right: 5px;"
                                                        data-toggle="modal" data-target="#imageModal"
                                                        data-image="{{ asset('proofs/' . $return->proof_of_return) }}">
                                                @else
                                                    <p>No proof available</p>
                                                @endif
                                            </td>
                                            <td class="action-btn">
                                                <form action="{{ route('return.approve', $return->id) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fa-solid fa-check"></i> Approve
                                                    </button>
                                                </form>
                                                <form action="{{ route('return.reject', $return->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa-solid fa-times"></i> Reject
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

    <!-- Modal for Adding Return Items -->
    <div class="modal fade" id="addReturnModal" tabindex="-1" aria-labelledby="addReturnModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReturnModalLabel">Add Return Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form to Add Return Item -->
                    <form action="{{ route('returns.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="return_date" class="form-label">Return Date</label>
                            <input type="date" class="form-control" id="return_date" name="return_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="return_reason" class="form-label">Return Reason</label>
                            <textarea class="form-control" id="return_reason" name="return_reason" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="return_quantity" class="form-label">Return Quantity</label>
                            <input type="number" class="form-control" id="return_quantity" name="return_quantity"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="condition" class="form-label">Condition</label>
                            <input type="text" class="form-control" id="condition" name="condition" required>
                        </div>

                        <div class="mb-3">
                            <label for="driver_name" class="form-label">Driver Name</label>
                            <input type="text" class="form-control" id="driver_name" name="driver_name"
                                value="{{ $currentDriverName }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="proof_of_return" class="form-label">Proof of Return (Image/PDF)</label>
                            <input type="file" class="form-control" id="proof_of_return" name="proof_of_return"
                                accept=".jpg,.png,.pdf" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image Viewing -->
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

    <!-- Modal for clickable-->
    @foreach ($returnItems as $return)
        <div class="modal fade" id="returnModal{{ $return->id }}" tabindex="-1"
            aria-labelledby="returnModalLabel{{ $return->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="returnModalLabel">Return Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center">
                            <!-- Image Section -->
                            <div class="me-4">
                                @if ($return->proof_of_return)
                                    <img src="{{ asset('proofs/' . $return->proof_of_return) }}"
                                        alt="Proof of Return"
                                        style="max-width: 130px; max-height: 100px; object-fit: cover; margin-right: 5px;"
                                        data-toggle="modal" data-target="#imageModal"
                                        data-image="{{ asset('proofs/' . $return->proof_of_return) }}">
                                @else
                                    <p>No proof available</p>
                                @endif
                            </div>
                            <!-- Details Section -->
                            <div>
                                <p><strong>Return Date:</strong> {{ $return->return_date }}</p>
                                <p><strong>Product Name:</strong> {{ $return->product_name }}</p>
                                <p><strong>Return Reason:</strong> {{ $return->return_reason }}</p>
                                <p><strong>Return Quantity:</strong> {{ $return->return_quantity }}</p>
                                <p><strong>Condition:</strong> {{ $return->condition }}</p>
                                <p><strong>Driver Name:</strong> {{ $return->driver_name }}</p>
                                <p><strong>Status:</strong> {{ $return->status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"
                            onclick="printReturnModalContent({{ $return->id }})">Print</button>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

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

    <!-- Include jQuery and Bootstrap JS (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS (Place this before your closing </body> tag) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function printReturnModalContent(returnId) {
            // Get the modal content by the return ID
            var modalContent = document.getElementById('returnModal' + returnId).querySelector('.modal-body').innerHTML;

            // Open a new window for the print job
            var printWindow = window.open('', '', 'height=600,width=800');

            // Write the modal content into the new window for printing
            printWindow.document.write(`
            <html>
            <head>
                <title>Print Return Details</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        padding: 20px;
                        line-height: 1.6;
                    }
                    p {
                        margin: 10px 0;
                    }
                    h5 {
                        text-align: center;
                    }
                    .logo-container {
                        text-align: center; /* Center the logo */
                        margin-bottom: 20px; /* Space below the logo */
                    }
                    .logo-container img {
                        width: 10%; /* Adjust logo size */
                        height: auto;
                    }
                </style>
            </head>
            <body>
                <div class="logo-container">
                    <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                </div>
                <h5>Return Details</h5>
                ${modalContent}
            </body>
            </html>
        `);

            // Close the document stream and focus on the window for printing
            printWindow.document.close();
            printWindow.focus();

            // Trigger the print dialog
            printWindow.print();

            // Close the print window after printing
            printWindow.onafterprint = function() {
                printWindow.close();
            };
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

    <!-- Script to update modal image source -->
    <script>
        $('#imageModal').on('show.bs.modal', function(e) {
            var image = $(e.relatedTarget).data('image');
            $('#modalImage').attr('src', image);
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
