<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
@include('Components.Admin.Header')


<style>
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

    <div class="page-wrapper default-version">
            @include('Components.Admin.CoordinatorSidebar')
            @include('Components.Admin.Navbar')

            <!-- sidebar end -->

            <!-- navbar-wrapper start -->
            <nav class="navbar-wrapper d-flex flex-wrap">
                <div class="navbar__left">
                    <button type="button" class="res-sidebar-open-btn me-3">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

                <div class="navbar__right">
                    {{-- <ul class="navbar__action-list">
                        <li class="dropdown d-flex profile-dropdown">
                            <a href="logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>

                        </li>
                    </ul> --}}
                </div>
            </nav>
            <!-- navbar-wrapper end -->


            <div class="container-fluid px-3 px-sm-0">
                <div class="body-wrapper">
                    <div class="bodywrapper__inner">
                        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="page-title p-2">Return Information</h6>
                            <div
                                class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
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
                                    <div class="table-responsive--sm table-responsive">
                                        <table id="returnTable" class="table table--light style--two">
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
                                                    <tr>
                                                        <td>{{ $return->return_date }}</td>
                                                        <td>{{ $return->product_name }}</td>
                                                        <td>{{ $return->return_reason }}</td>
                                                        <td>{{ $return->return_quantity }}</td>
                                                        <td>{{ $return->condition }}</td>
                                                        <td>{{ $currentDriverName }}</td>
                                                        <td>{{ $return->status }}</td>
                                                        <td>
                                                            @if($return->proof_of_return)
                                                                <img src="{{ asset('proofs/' . $return->proof_of_return) }}" alt="Proof of Return" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                                                            @else
                                                                <p>No proof available</p>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <form action="{{ route('return.approve', $return->id) }}" method="POST" style="display: inline;">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success btn-sm">
                                                                    <i class="fa-solid fa-check"></i> Approve
                                                                </button>
                                                            </form>
                                                            <form action="{{ route('return.reject', $return->id) }}" method="POST" style="display: inline;">
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

    @include('Components.Admin.Footer')

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#returnTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>


</html>
