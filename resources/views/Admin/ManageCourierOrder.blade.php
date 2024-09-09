<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">

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
        <div class="page-wrapper default-version">

            <div class="sidebar bg--dark">
                <button class="res-sidebar-close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="sidebar__inner">

                    <div class="logo-container">
                        <div class="sidebar__logo"
                            style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                            <img src="Home/GDR logo.png" alt="Logo" class="logo">
                            <h3 style="color: #223d54;"><b>Courier</b></h3>

                        </div>
                    </div>



                    <div class="sidebar__menu-wrapper">
                        <ul class="sidebar__menu">
                            <li class="sidebar-menu-item ">
                                <a href="courierdash" class="nav-link ">
                                    <i class="menu-icon fas fa-clipboard-list"></i>
                                    <span class="menu-title">Courier Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a href="order-for-courier" class="nav-link">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    <span class="menu-title" style="padding-left: 17px">Manage Order</span>
                                </a>
                            </li>

                        <li class="sidebar-menu-item ">
                            <a href="return-items" class="nav-link ">
                                <i class="menu-icon fas fa-clipboard-list"></i>

                                <span class="menu-title">Return Items</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="delay" class="nav-link">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <span class="menu-title" style="padding-left: 17px">Delay Report</span>
                            </a>
                        </li>
                        </ul>

                    </div>

                </div>
            </div>

            <!-- sidebar end -->

            <!-- navbar-wrapper start -->
            <nav class="navbar-wrapper d-flex flex-wrap">
                <div class="navbar__left">
                    <button type="button" class="res-sidebar-open-btn me-3">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

                <div class="navbar__right">
                    <ul class="navbar__action-list">
                        <li class="dropdown d-flex profile-dropdown">
                            <a href="logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>
            <!-- navbar-wrapper end -->


            <div class="container-fluid px-3 px-sm-0">
                <div class="body-wrapper">
                    <div class="bodywrapper__inner">
                        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="page-title p-2">Courier Information</h6>
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
                                                            <a href="{{ asset($detail->proof_of_delivery) }}"
                                                                target="_blank">View Proof</a>
                                                        @else
                                                            No proof uploaded
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <!-- Dropdown Button for Actions -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#updateStatusModal{{ $detail->id }}">
                                                            Update Status
                                                        </button>

                                                        <!-- Status Update Modal -->
                                                        <div class="modal fade"
                                                            id="updateStatusModal{{ $detail->id }}" tabindex="-1"
                                                            aria-labelledby="updateStatusModalLabel{{ $detail->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="updateStatusModalLabel{{ $detail->id }}">
                                                                            Update Order Status</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Update Status Form -->
                                                                        <form class="status-form"
                                                                            action="{{ route('update.order.status', $detail->id) }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PATCH')

                                                                            <!-- Hidden field for update type -->
                                                                            <input type="hidden" name="update_type"
                                                                                value="status">

                                                                            <div class="mb-3">
                                                                                <label for="order_status"
                                                                                    class="form-label">Order
                                                                                    Status</label>
                                                                                <select name="status"
                                                                                    class="order_status form-select"
                                                                                    required>
                                                                                    <option value="Pod_returned">Pod
                                                                                        returned</option>
                                                                                    <option value="Delivery_successful">
                                                                                        Delivery successful</option>
                                                                                    <option value="For_Pick-up">For
                                                                                        Pick-up</option>
                                                                                    <option
                                                                                        value="First_delivery_attempt">
                                                                                        First Delivery Attempt</option>
                                                                                    <option value="In_Transit">In
                                                                                        Transit</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="mb-3 date_of_pick_up_container"
                                                                                style="display: none;">
                                                                                <label for="date_of_pick_up"
                                                                                    class="form-label">Date of
                                                                                    Pick-up</label>
                                                                                <input type="datetime-local"
                                                                                    name="date_of_pick_up"
                                                                                    class="form-control">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="remarks"
                                                                                    class="form-label">Add
                                                                                    Remarks</label>
                                                                                <input type="text" name="remarks"
                                                                                    class="form-control"
                                                                                    placeholder="Add remarks here">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="proof_of_delivery"
                                                                                    class="form-label">Upload Proof of
                                                                                    Delivery</label>
                                                                                <input type="file"
                                                                                    name="proof_of_delivery"
                                                                                    class="form-control">
                                                                            </div>

                                                                            <button type="submit"
                                                                                class="btn btn-primary">Submit</button>
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
                        </div>
                    </div>
                </div>

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
    @include('Components.Admin.Footer')

</body>

</html>
