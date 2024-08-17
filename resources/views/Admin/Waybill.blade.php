<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Include jQuery -->

@include('Components.Admin.Header')

<body>


    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->

    <!-- navbar-wrapper start -->
    <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
        <div class="navbar__left">
            <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
            <form class="navbar-search">
                <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                    placeholder="Search here...">
                <i class="las la-search"></i>
                <ul class="search-list"></ul>
            </form>
        </div>
        <div class="navbar__right">
            <ul class="navbar__action-list">
                <li>
                    <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Visit Website">
                        <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i
                                class="las la-globe"></i></a>
                    </button>
                </li>
                <li class="dropdown">
                    <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown"
                        data-display="static" aria-haspopup="true" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unread Notifications">
                            <i class="las la-bell "></i>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                        <div class="dropdown-menu__header">
                            <span class="caption">Notification</span>
                        </div>
                        <div class="dropdown-menu__body  d-flex justify-content-center align-items-center ">
                            <div class="empty-notification text-center">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png"
                                    alt="empty">
                                <p class="mt-3">No unread notification found</p>
                            </div>
                        </div>
                        <div class="dropdown-menu__footer">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/notifications"
                                class="view-all-message">View all notifications</a>
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="System Setting">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/system-setting"><i
                                class="las la-wrench"></i></a>
                    </button>
                </li>
                <li class="dropdown d-flex profile-dropdown">
                    <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="navbar-user">
                            <span class="navbar-user__thumb"><img
                                    src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/images/profile/667c14b5145fd1719407797.png"
                                    alt="image"></span>
                            <span class="navbar-user__info">
                                <span class="navbar-user__name">admin</span>
                            </span>
                            <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/profile"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-user-circle"></i>
                            <span class="dropdown-menu__caption">Profile</span>
                        </a>

                        <a href="https://script.viserlab.com/courierlab/demo/admin/password"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-key"></i>
                            <span class="dropdown-menu__caption">Password</span>
                        </a>

                        <a href="https://script.viserlab.com/courierlab/demo/admin/logout"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-sign-out-alt"></i>
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
                    <h6 class="page-title">All Admin</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn btn-primary" type="button" data-toggle="modal"
                            data-target="#manageWaybillModal">
                            Add or Edit Waybill
                        </button>

                    </div>
                </div>
             
                <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 15px; max-width: 400px; width: 100%; box-sizing: border-box;">
    <h2 style="font-size: 1.5em; margin-bottom: 15px; color: #333; text-align: center;">Waybill</h2>
    
    <!-- Tracking Number -->
    <div style="margin-bottom: 15px; text-align: center;">
        <h3 style="font-size: 1.25em; margin: 0; color: #007bff;">Tracking Number: TRACK123456</h3>
    </div>

    <!-- Sender and Receiver Information -->
    

    <!-- Sections Side by Side (2 per row) -->
    <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 15px;">
        <!-- Sender Information -->
        <div style="flex: 1 1 calc(50% - 15px); box-sizing: border-box;">
            <h3 style="font-size: 1.1em; margin-bottom: 5px; color: #555;">Sender</h3>
            <p style="margin: 2px 0;"><strong>Company:</strong> Company Name</p>
            <p style="margin: 2px 0;"><strong>Contact:</strong> Contact Person</p>
            <p style="margin: 2px 0;"><strong>Phone:</strong> Phone Number</p>
            <p style="margin: 2px 0;"><strong>Email:</strong> Email</p>
            <p style="margin: 2px 0;"><strong>Address:</strong> Address</p>
        </div>

        <!-- Receiver Information -->
        <div style="flex: 1 1 calc(50% - 15px); box-sizing: border-box;">
            <h3 style="font-size: 1.1em; margin-bottom: 5px; color: #555;">Receiver</h3>
            <p style="margin: 2px 0;"><strong>Company:</strong> Company Name</p>
            <p style="margin: 2px 0;"><strong>Contact:</strong> Contact Person</p>
            <p style="margin: 2px 0;"><strong>Phone:</strong> Phone Number</p>
            <p style="margin: 2px 0;"><strong>Email:</strong> Email</p>
            <p style="margin: 2px 0;"><strong>Address:</strong> Address</p>
        </div>

        <!-- Delivery Information -->
        <div style="flex: 1 1 calc(50% - 15px); box-sizing: border-box;">
            <h3 style="font-size: 1.1em; margin-bottom: 5px; color: #555;">Delivery Details</h3>
            <p style="margin: 2px 0;"><strong>Address:</strong> Delivery Address</p>
            <p style="margin: 2px 0;"><strong>Date:</strong> Delivery Date</p>
            <p style="margin: 2px 0;"><strong>Time:</strong> Delivery Time</p>
        </div>

        <!-- Carrier Information -->
        <div style="flex: 1 1 calc(50% - 15px); box-sizing: border-box;">
            <h3 style="font-size: 1.1em; margin-bottom: 5px; color: #555;">Carrier</h3>
            <p style="margin: 2px 0;"><strong>Driver:</strong> Driver Name</p>
            <p style="margin: 2px 0;"><strong>Vehicle Reg:</strong> Plate Number</p>
            <p style="margin: 2px 0;"><strong>Phone:</strong> Phone Number</p>
        </div>

        <!-- Shipment Details -->
        <div style="flex: 1 1 calc(50% - 15px); box-sizing: border-box;">
            <h3 style="font-size: 1.1em; margin-bottom: 5px; color: #555;">Shipment Details</h3>
            <p style="margin: 2px 0;"><strong>Date of Issue:</strong> Date of Issue</p>
            <p style="margin: 2px 0;"><strong>Description:</strong> Description</p>
            <p style="margin: 2px 0;"><strong>Instructions:</strong> Special Instructions</p>
        </div>
    </div>

    <!-- Vehicle Image -->
    
   

    <!-- Action Button -->
  
</div>










                <!-- Create Vehicle Modal -->
                <div class="modal fade" id="manageWaybillModal" tabindex="-1" aria-labelledby="manageWaybillModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageWaybillModalLabel">Waybill Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/submit" method="post" enctype="multipart/form-data"
                                    style="font-family: Arial, sans-serif; max-width: 1200px; margin: auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px;">

                                    <!-- Shipper Information -->
                                    <h2 style="font-size: 1.5em; margin-bottom: 20px;">Shipper Information</h2>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="shipper-company"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Company
                                                Name</label>
                                            <input id="shipper-company" name="shipper_company" type="text"
                                                placeholder="Enter Company Name"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="shipper-contact"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Contact
                                                Person</label>
                                            <input id="shipper-contact" name="shipper_contact" type="text"
                                                placeholder="Enter Contact Person"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="shipper-address"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                                            <input id="shipper-address" name="shipper_address" type="text"
                                                placeholder="Enter Address"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="shipper-phone"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Phone
                                                Number</label>
                                            <input id="shipper-phone" name="shipper_phone" type="tel"
                                                placeholder="Enter Phone Number"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                maxlength="11" pattern="\d{11}" title="Please enter exactly 11 digits.">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="shipper-email"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Email</label>
                                            <input id="shipper-email" name="shipper_email" type="email"
                                                placeholder="Enter Email"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>

                                    <!-- Consignee Information -->
                                    <h2 style="font-size: 1.5em; margin-bottom: 20px;">Consignee Information</h2>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee-company"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Company
                                                Name</label>
                                            <input id="consignee-company" name="consignee_company" type="text"
                                                placeholder="Enter Company Name"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee-contact"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Contact
                                                Person</label>
                                            <input id="consignee-contact" name="consignee_contact" type="text"
                                                placeholder="Enter Contact Person"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee-address"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                                            <input id="consignee-address" name="consignee_address" type="text"
                                                placeholder="Enter Address"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee-phone"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Phone
                                                Number</label>
                                            <input id="consignee-phone" name="consignee_phone" type="tel"
                                                placeholder="Enter Phone Number"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                maxlength="11" pattern="\d{11}" title="Please enter exactly 11 digits.">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee-email"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Email</label>
                                            <input id="consignee-email" name="consignee_email" type="email"
                                                placeholder="Enter Email"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>

                                    <!-- Delivery Information -->
                                    <h2 style="font-size: 1.5em; margin-bottom: 20px;">Delivery Information</h2>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="delivery-address"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Delivery
                                                Address</label>
                                            <input id="delivery-address" name="delivery_address" type="text"
                                                placeholder="Enter Delivery Address"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="delivery-date"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Delivery
                                                Date</label>
                                            <input id="delivery-date" name="delivery_date" type="date"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="delivery-time"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Delivery
                                                Time</label>
                                            <input id="delivery-time" name="delivery_time" type="text"
                                                placeholder="Enter Delivery Time"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>

                                    <!-- Carrier Information -->
                                    <h2 style="font-size: 1.5em; margin-bottom: 20px;">Carrier Information</h2>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">

                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="driver-name"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Driver
                                                Name</label>
                                            <input id="driver-name" name="driver_name" type="text"
                                                placeholder="Enter Driver Name"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="vehicle-registration"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Vehicle
                                                Registration Number</label>
                                            <input id="vehicle-registration" name="vehicle_registration" type="text"
                                                placeholder="Enter Vehicle Registration Number"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="carrier-phone"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Phone
                                                Number</label>
                                            <input id="carrier-phone" name="carrier_phone" type="tel"
                                                placeholder="Enter Phone Number"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                maxlength="11" pattern="\d{11}" title="Please enter exactly 11 digits.">
                                        </div>
                                    </div>

                                    <!-- Shipment Details -->
                                    <h2 style="font-size: 1.5em; margin-bottom: 20px;">Shipment Details</h2>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="waybill-number"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Tracking
                                                Number</label>
                                            <input id="waybill-number" name="tracking_number" type="text"
                                                placeholder="Enter Waybill Number"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="issue-date"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date
                                                of Issue</label>
                                            <input id="issue-date" name="issue_date" type="date"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="goods-description"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Description
                                                of Goods</label>
                                            <textarea id="goods-description" name="goods_description"
                                                placeholder="Enter Description of Goods" rows="4"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                                        </div>


                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="special-instructions"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Special
                                                Instructions</label>
                                            <textarea id="special-instructions" name="special_instructions"
                                                placeholder="Enter Special Instructions" rows="4"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                                        </div>
                                    </div>





                                    <!-- Vehicles Selection -->
                                    <h2 style="font-size: 1.5em; margin-bottom: 20px;">Select Vehicle</h2>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        @foreach($vehicles as $vehicle)
                                                <div
                                                                                    style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: calc(33.333% - 20px); box-sizing: border-box; text-align: center; position: relative;">
                                                                                    <!-- Radio Input -->
                                                                                    <input type="radio" id="truck-{{ $vehicle->id }}" name="truck_type"
                                                                                        value="{{ $vehicle->id }}"
                                                                                        style="position: absolute; top: 10px; right: 10px; width: 20px; height: 20px; cursor: pointer;"
                                                                                        required>

                                                                                    <!-- Card Content -->
                                                                                    <label for="truck-{{ $vehicle->id }}"
                                                                                        style="display: block; cursor: pointer; padding-right: 30px;">
                                                                                        <!-- Conditional Image -->
                                                                                        @php
                                                                                            $imagePath = 'Home/icons8-truck-48.png'; // Default image

                                                                                            if ($vehicle->truck_name === '6 Wheeler tractor heads') {
                                                                                                $imagePath = 'Home/tractorhead-removebg-preview.png';
                                                                                            } elseif ($vehicle->truck_name === '6 Wheeler closed vans') {
                                                                                                $imagePath = 'Home/closedvans-removebg-preview.png';
                                                                                            } elseif ($vehicle->truck_name === '10 Wheeler Aluminum wing van') {
                                                                                                $imagePath = 'Home/10wheeler-removebg-preview.png';
                                                                                            }
                                                                                        @endphp
                                                                                        <img src="{{ asset($imagePath) }}" alt="Truck Moving"
                                                                                            style="width: 150px; height: auto; margin-bottom: 10px;">

                                                                                        <!-- Truck Details -->
                                                                                        <h3 style="font-size: 1.2em; margin-bottom: 10px; color: #333;">
                                                                                            {{ $vehicle->truck_name }}</h3>
                                                                                        <p style="font-size: 1em; color: #666;">{{ $vehicle->truck_capacity }}
                                                                                        </p>
                                                                                        <p style="font-size: 1em; color: #666; margin-top: 10px;">Available:
                                                                                            {{ $vehicle->quantity }}</p>
                                                                                    </label>
                                                                                </div>
                                        @endforeach
</div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>







                <!-- Confirmation Modal -->
                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this vehicle?
                            </div>
                            <div class="modal-footer">
                                <form id="deleteForm" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script data-cfasync="false"
                    src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
                <script
                    src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
                <script
                    src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

                <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css"
                    rel="stylesheet">
                <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css"
                    rel="stylesheet">
                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var deleteButtons = document.querySelectorAll('.btn-delete');
                        var deleteForm = document.getElementById('deleteForm');

                        deleteButtons.forEach(function (button) {
                            button.addEventListener('click', function () {
                                var url = button.getAttribute('data-url');
                                deleteForm.setAttribute('action', url);
                            });
                        });
                    });
                </script>

                <script>
                    $('form[id^="editJobForm"]').on('submit', function (e) {
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
                            success: function (response) {
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
                            error: function (xhr, status, error) {
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


                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

                <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
                <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>



                <script>
                    (function ($) {
                        "use strict";
                        $(document).on('click', '.confirmationBtn', function () {
                            var modal = $('#confirmationModal');
                            let data = $(this).data();
                            modal.find('.question').text(`${data.question}`);
                            modal.find('form').attr('action', `${data.action}`);
                            modal.modal('show');
                        });
                    })(jQuery);
                </script>

                <script>
                    if ($('li').hasClass('active')) {
                        $('.sidebar__menu-wrapper').animate({
                            scrollTop: eval($(".active").offset().top - 320)
                        }, 500);
                    }
                </script>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!-- Include Bootstrap JS -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

                <!-- Include SweetAlert2 JS (optional) -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>