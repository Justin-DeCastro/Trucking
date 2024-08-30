<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">

@include('Components.Admin.Header')

<body>


    <div class="page-wrapper default-version">
        <div class="page-wrapper default-version">

            <div class="sidebar bg--dark">
                <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
                <div class="sidebar__inner">
                    <div class="sidebar__logo"
                        style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                        <img src="proofs/GDR.png" alt="Logo"
                            style="border-radius: 0; width: 100px; height: 100px;
                       filter: drop-shadow(0 0 30px rgba(0, 127, 255, 1));">
                        <h3 style="margin-top: 10px; color: #1F8FFF;"><b>ADMIN</b></h3>
                    </div>


                    <div class="sidebar__menu-wrapper">
                        <ul class="sidebar__menu">
                            <li class="sidebar-menu-item active">
                                <a href="courierdash" class="nav-link">
                                    <i class="menu-icon fas fa-tachometer-alt"></i> <!-- Updated icon -->
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a href="order-for-courier" class="nav-link">
                                    <i class="menu-icon fas fa-truck"></i> <!-- Trucking order icon -->
                                    <span class="menu-title">Manage Order</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="version-info text-center text-uppercase">
                        <span class="text--primary">courierlab</span>
                        <span class="text--success">V3.0 </span>
                    </div>
                </div>
            </div>

            <!-- sidebar end -->

            <!-- navbar-wrapper start -->
            <nav class="navbar-wrapper bg--dark d-flex flex-wrap">

                <div class="navbar__right">
                    <ul class="navbar__action-list">



                        <li class="dropdown d-flex profile-dropdown">
                            <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="navbar-user">
                                    <span class="navbar-user__thumb"><img src="Home/user-avatar-male-5.png"
                                            alt="image"></span>
                                    <span class="navbar-user__info">
                                        <span class="navbar-user__name">admin</span>
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
                            <h6 class="page-title">Courier Information</h6>
                            <div
                                class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
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
                                                    <td>{{ \Carbon\Carbon::parse($detail->date)->format('F d, Y g:i A') }}
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('F d, Y g:i A') }}
                                                    </td>
                                                    <td>{{ $detail->tracking_number }}</td>
                                                    <td>{{ $detail->plate_number }}</td>
                                                    <td>{{ $detail->consignee_address }}</td>
                                                    <td>{{ $detail->status }}</td>
                                                    <td>{{ $detail->remarks }}</td>
                                                    <td>
                                                        <!-- Display proof of delivery if available -->
                                                        @if ($detail->proof_of_delivery)
                                                            <a href="{{ asset($detail->proof_of_delivery) }}" target="_blank">View Proof</a>
                                                        @else
                                                            No proof uploaded
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <!-- Dropdown Button for Actions -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateStatusModal{{ $detail->id }}">
                                                            Update Status
                                                        </button>

                                                        <!-- Status Update Modal -->
                                                        <div class="modal fade" id="updateStatusModal{{ $detail->id }}" tabindex="-1" aria-labelledby="updateStatusModalLabel{{ $detail->id }}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="updateStatusModalLabel{{ $detail->id }}">Update Order Status</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Update Status Form -->
                                                                        <form class="status-form" action="{{ route('update.order.status', $detail->id) }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PATCH')

                                                                            <!-- Hidden field for update type -->
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
                                                                                <input type="text" name="remarks" class="form-control" placeholder="Add remarks here">
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
                                                    <td colspan="8">No bookings found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>




                                </div>
                            </div>
                            <div class="card-footer py-4">


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
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
  @include('Components.Admin.Footer')
     {{-- <script>
        function setUpdateType(detailId, type) {
            document.getElementById('update_type' + detailId).value = type;
        }
        </script> --}}
</body>

</html>
