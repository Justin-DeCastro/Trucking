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
                                                    <td>{{ \Carbon\Carbon::parse($detail->date)->format('d M, y') }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($detail->date_of_pick_up)->format('d M, y') }}</td>
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
                                                        <!-- Dropdown for Actions -->
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="actionsDropdown{{ $detail->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="actionsDropdown{{ $detail->id }}">
                                                                <!-- Show Travel Guide -->
                                                                <li>
                                                                    <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#routeModal"
                                                                        data-merchant-address="{{ $detail->merchant_address }}"
                                                                        data-consignee-address="{{ $detail->consignee_address }}"
                                                                        data-id="{{ $detail->id }}">
                                                                        Show Travel Guide for Booking #{{ $detail->id }}
                                                                    </button>
                                                                </li>
                                                                <!-- Update Status -->
                                                                <li>
                                                                    <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#updateStatusModal{{ $detail->id }}">
                                                                        Update Status
                                                                    </button>
                                                                </li>
                                                                <!-- Update Location -->
                                                                <li>
                                                                    <button class="dropdown-item" type="button" data-id="{{ $detail->id }}" data-bs-toggle="modal" data-bs-target="#updateLocationModal">
                                                                        Update Your Location
                                                                    </button>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <!-- Status Update Modal -->
                                                        <div class="modal fade" id="updateStatusModal{{ $detail->id }}" tabindex="-1"
                                                            aria-labelledby="updateStatusModalLabel{{ $detail->id }}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="updateStatusModalLabel{{ $detail->id }}">
                                                                            Update Order Status
                                                                        </h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Update Status Form -->
                                                                        <form class="status-form" action="{{ route('update.order.status', $detail->id) }}" method="POST" enctype="multipart/form-data">
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
                                                    <td colspan="9">No bookings found.</td>
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
    <!-- Modal Structure -->


    <!-- location update -->
    <div class="modal fade" id="updateLocationModal" tabindex="-1" aria-labelledby="updateLocationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateLocationModalLabel">Update Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateLocationForm" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="location" class="form-label">New Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update Location</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- Modal Structure -->
<div class="modal fade" id="routeModal" tabindex="-1" aria-labelledby="routeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="routeModalLabel">Travel Guide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="travel-guide">
                    <!-- Travel instructions will be inserted here -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4&libraries=places"></script>
<script>
    document.getElementById('routeModal').addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const merchantAddress = button.getAttribute('data-merchant-address');
        const consigneeAddress = button.getAttribute('data-consignee-address');
        // const bookingId = button.getAttribute('data-id'); // Use this if needed

        fetchTravelGuide(merchantAddress, consigneeAddress);
    });

    function fetchTravelGuide(startAddress, endAddress) {
        const directionsService = new google.maps.DirectionsService();

        // Define the route request
        const request = {
            origin: startAddress,
            destination: endAddress,
            travelMode: 'DRIVING'
        };

        // Perform the directions request
        directionsService.route(request, function(result, status) {
            if (status === 'OK') {
                const directions = result.routes[0].legs[0];
                let instructions = '<h5>Travel Instructions</h5>';
                instructions += `<p><strong>Start Address:</strong> ${startAddress}</p>`;
                instructions += `<p><strong>Destination Address:</strong> ${endAddress}</p>`;
                instructions += '<ol>';

                directions.steps.forEach(step => {
                    const distanceText = step.distance.text; // Distance in human-readable format
                    const instructionText = step.instructions; // Instruction text
                    instructions += `<li>${instructionText} (${distanceText})</li>`;
                });

                instructions += '</ol>';
                document.getElementById('travel-guide').innerHTML = instructions;
            } else {
                document.getElementById('travel-guide').innerHTML = 'Could not get route: ' + status;
            }
        });
    }
</script>
<script>
    // Wait for the DOM to load
    document.addEventListener('DOMContentLoaded', function() {
        // Add event listener to all buttons that trigger the modal
        var buttons = document.querySelectorAll('.dropdown-item[data-id]');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var locationId = this.getAttribute('data-id');
                var formAction = "{{ route('update.location', ['id' => ':id']) }}";
                formAction = formAction.replace(':id', locationId);

                // Update the form's action with the correct id
                document.querySelector('#updateLocationModal form').setAttribute('action', formAction);
            });
        });
    });
</script>


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
