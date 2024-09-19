<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

@include('Components.Admin.Header')

<body>


    <div class="page-wrapper default-version">
        @include('Components.Admin.Navbar')
        @include('Components.Admin.Sidebar')

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
                                                <tr>
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
                                                    <td>
                                                        @if ($driver->status === 'terminated')
                                                            <!-- Show Renew button only if status is 'terminated' -->
                                                            <form
                                                                action="{{ route('couriers.updateStatus', $driver->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('PATCH')
                                                                <input type="hidden" name="status" value="renewed">
                                                                <button type="submit" class="btn btn-success"
                                                                    onclick="return confirm('Are you sure you want to renew this courier?');">Renew</button>
                                                            </form>
                                                        @elseif ($driver->status === 'renewed')
                                                            <!-- Show Terminate button only if status is 'renewed' -->
                                                            <form
                                                                action="{{ route('couriers.updateStatus', $driver->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('PATCH')
                                                                <input type="hidden" name="status" value="terminated">
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure you want to terminate this courier?');">Terminate</button>
                                                            </form>
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
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
    </div>
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
