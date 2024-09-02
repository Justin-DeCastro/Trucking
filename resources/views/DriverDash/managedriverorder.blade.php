<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Driver Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="DriverDashboard/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="DriverDashboard/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="DriverDashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="DriverDashboard/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="DriverDashboard/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Driver Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="courierdash" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <a href="order-for-courier" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Order</a>


                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->

            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->

            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->

            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">

                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">

                    </div>
                </div>
            </div>
            <!-- Widgets End -->

            <div class="table-responsive">
                <table class="table table--light style--two">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Pick Up Date</th>
                            <th>Tracking Number</th>
                            <th>Truck Plate Number</th>
                            <th>Destination</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Proof of Delivery</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $detail)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}</td>
                                <td>{{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('F d, Y g:i A') }}</td>
                                <td>{{ $detail->tracking_number }}</td>
                                <td>{{ $detail->plate_number }}</td>
                                <td>{{ $detail->consignee_address }}</td>
                                <td>{{ $detail->status }}</td>
                                <td>{{ $detail->remarks }}</td>
                                <td>
                                    @if ($detail->proof_of_delivery)
                                        <a href="{{ asset($detail->proof_of_delivery) }}" target="_blank">View Proof</a>
                                    @else
                                        No proof uploaded
                                    @endif
                                </td>

                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#updateStatusModal{{ $detail->id }}">
                                        Update Status
                                    </button>

                                    <div class="modal fade" id="updateStatusModal{{ $detail->id }}" tabindex="-1"
                                        aria-labelledby="updateStatusModalLabel{{ $detail->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="updateStatusModalLabel{{ $detail->id }}">Update Order Status</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="status-form"
                                                        action="{{ route('update.order.status', $detail->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PATCH')

                                                        <input type="hidden" name="update_type" value="status">

                                                        <div class="mb-3">
                                                            <label for="order_status" class="form-label">Order Status</label>
                                                            <select name="status" class="order_status form-select" required>
                                                                <option value="Pod_returned">Pod returned</option>
                                                                <option value="Delivery_successful">Delivery successful</option>
                                                                <option value="For_Pick-up">For Pick-up</option>
                                                                <option value="First_delivery_attempt">First Delivery Attempt</option>
                                                                <option value="In_Transit">In Transit</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3 date_of_pick_up_container" style="display: none;">
                                                            <label for="date_of_pick_up" class="form-label">Date of Pick-up</label>
                                                            <input type="datetime-local" name="date_of_pick_up" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="remarks" class="form-label">Add Remarks</label>
                                                            <input type="text" name="remarks" class="form-control"
                                                                placeholder="Add remarks here">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="proof_of_delivery" class="form-label">Upload Proof of Delivery</label>
                                                            <input type="file" name="proof_of_delivery" class="form-control">
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>





        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.status-form');

            forms.forEach(form => {
                const statusSelect = form.querySelector('.order_status');
                const dateOfPickUpContainer = form.querySelector('.date_of_pick_up_container');

                function toggleDateOfPickUpField() {
                    if (statusSelect.value === 'For_Pick-up') {
                        dateOfPickUpContainer.style.display = 'block';
                    } else {
                        dateOfPickUpContainer.style.display = 'none';
                    }
                }

                // Initial check on page load
                toggleDateOfPickUpField();

                // Add event listener to dropdown
                statusSelect.addEventListener('change', toggleDateOfPickUpField);
            });
        });
    </script>
    <!-- Footer Start -->

    <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="DriverDashboard/lib/chart/chart.min.js"></script>
    <script src="DriverDashboard/lib/easing/easing.min.js"></script>
    <script src="DriverDashboard/lib/waypoints/waypoints.min.js"></script>
    <script src="DriverDashboard/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="DriverDashboard/lib/tempusdominus/js/moment.min.js"></script>
    <script src="DriverDashboard/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="DriverDashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="DriverDashboard/js/main.js"></script>
</body>

</html>
