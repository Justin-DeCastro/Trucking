
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Admin.Header')


<body>

        <div class="page-wrapper default-version">

        @include('Components.Admin.Sidebar')

        <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
    <div class="navbar__left">
        <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>

    </div>
    <div class="navbar__right">
        <ul class="navbar__action-list">

            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img
                                src="Home/user-avatar-male-5.png"
                                alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">Admin</span>
                        </span>
                        <span class="icon"><i class="fas fa-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">


                    <a href="logout"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
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


        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">


                    <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Courier Send</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>


                <section style="padding: 60px 0; background: #f9f9f9;">
    <div style="max-width: 900px; margin: 0 auto; padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center; margin-bottom: 40px;">
            <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">RUBIX Form</h3>
            <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the transportation of your goods.</p>
        </div>
        <form action="{{ route('booking.submit') }}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Sender Information -->
    <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 30px;">
        <!-- Top Section: Driver Name and Plate Number -->
        <div style="display: flex; gap: 20px;">
            <div style="flex: 1; min-width: 220px;">
                <label for="driver_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Driver Name</label>
                <select id="driver_name" name="driver_name" style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="flex: 1; min-width: 220px;">
                <label for="plate_number" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Plate Number</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="plate_number" name="plate_number" type="text" placeholder="Enter Plate Number" required>
            </div>
            <div style="flex: 1; min-width: 220px;">
                <label for="plate_number" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="date" name="date" type="datetime-local" placeholder="Enter Date" required>
            </div>
        </div>

        <!-- Bottom Section: Client Name, Transport Mode, Shipping Type -->
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div style="flex: 1; min-width: 220px;">
                <label for="sender_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Client Name</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="sender_name" name="sender_name" type="text" placeholder="Enter Sender's Name" required>
            </div>
            <!-- <div style="flex: 1; min-width: 220px;">
                <label for="transport_mode" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Transport Mode</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="transport_mode" name="transport_mode" type="text" placeholder="Enter transport mode" required>
            </div> -->
            <div style="flex: 1; min-width: 220px;">
            <label for="shipping-mode" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Transport Mode</label>
            <select id="shipping-mode" name="transport_mode" style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                <option value="Air Transport">Air Transport </option>
                <option value="Water Transport">Water Transport</option>
                <option value="Land Transport">Land Transport</option>
            </select>
        </div>
            <div style="flex: 1; min-width: 220px;">
            <label for="shipping-mode" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Shipping Type</label>
            <select id="shipping-mode" name="shipping_type" style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                <option value="air">Air Freight</option>
                <option value="sea">Sea Freight</option>
                <option value="road">Road Transport</option>
            </select>
        </div>

        </div>
    </div>


    <!-- Item List and Weight -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
    <div style="flex: 1; min-width: 220px;">
            <label for="pickup-address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Delivery Type</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="delivery_type" name="delivery_type" type="text" placeholder="Enter delivery type" required>
        </div>

        <div style="flex: 1; min-width: 220px;">
            <label for="quantity" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Journey Type</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="journey_type" name="journey_type" type="text" placeholder="Enter journey type" required>
        </div>
    </div>

    <div style="margin-bottom: 40px;">
                <h4 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Consignee Information</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee Name</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_name" name="consignee_name" type="text" placeholder="Enter Consignee's Name" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_address" name="consignee_address" type="text" placeholder="Enter Consignee Address" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee Email</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_email" name="consignee_email" type="email" placeholder="Enter Consignee Email" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_mobile" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee Mobile</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_mobile" name="consignee_mobile" type="tel" placeholder="Enter Consignee Mobile Number" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_city" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">City</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_city" name="consignee_city" type="text" placeholder="Enter City" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_province" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Province</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_province" name="consignee_province" type="text" placeholder="Enter Province" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_barangay" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Barangay</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_barangay" name="consignee_barangay" type="text" placeholder="Enter Barangay" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_building_type" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Building Type</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_building_type" name="consignee_building_type" type="text" placeholder="Enter Building Type" required>
                    </div>
                </div>
            </div>

            <!-- Merchant Information -->
            <div style="margin-bottom: 40px;">
                <h4 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Merchant Information</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant Name</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_name" name="merchant_name" type="text" placeholder="Enter Merchant's Name" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_address" name="merchant_address" type="text" placeholder="Enter Merchant Address" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant Email</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_email" name="merchant_email" type="email" placeholder="Enter Merchant Email" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_mobile" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant Mobile</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_mobile" name="merchant_mobile" type="tel" placeholder="Enter Merchant Mobile Number" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_city" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">City</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_city" name="merchant_city" type="text" placeholder="Enter City" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_province" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Province</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_province" name="merchant_province" type="text" placeholder="Enter Province" required>
                    </div>
                </div>
            </div>
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding: 20px;">
    @foreach($vehicles as $vehicle)
        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: calc(33.333% - 20px); box-sizing: border-box; text-align: center; position: relative;">
            <!-- Radio Input -->
            <input type="radio" id="truck-{{ $vehicle->id }}" name="truck_type" value="{{ $vehicle->id }}" style="position: absolute; top: 10px; right: 10px; width: 20px; height: 20px; cursor: pointer;" required>

            <!-- Card Content -->
            <label for="truck-{{ $vehicle->id }}" style="display: block; cursor: pointer; padding-right: 30px;">
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
                <img src="{{ asset($imagePath) }}" alt="Truck Moving" style="width: 150px; height: auto; margin-bottom: 10px;">

                <!-- Truck Details -->
                <h3 style="font-size: 1.2em; margin-bottom: 10px; color: #333;">{{ $vehicle->truck_name }}</h3>
                <p style="font-size: 1em; color: #666;">{{ $vehicle->truck_capacity }}</p>
                <p style="font-size: 1em; color: #666; margin-top: 10px;">Available: {{ $vehicle->quantity }}</p>
            </label>
        </div>
    @endforeach
</div>
    <!-- Submit Button -->
    <div style="text-align: center;">
        <button style="padding: 12px 24px; background-color: #007bff; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s ease;" type="submit">
            Submit Booking
        </button>
    </div>
</form>


    </div>
</section>

        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
<link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
<script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    const colors = {
        success: '#28c76f',
        error: '#eb2222',
        warning: '#ff9f43',
        info: '#1e9ff2',
    }

    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-times-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-exclamation-circle',
    }

    const notifications = [];
    const errors = [];


    const triggerToaster = (status, message) => {
        iziToast[status]({
            title: status.charAt(0).toUpperCase() + status.slice(1),
            message: message,
            position: "topRight",
            backgroundColor: '#fff',
            icon: icons[status],
            iconColor: colors[status],
            progressBarColor: colors[status],
            titleSize: '1rem',
            messageSize: '1rem',
            titleColor: '#474747',
            messageColor: '#a2a2a2',
            transitionIn: 'obunceInLeft'
        });
    }

    if (notifications.length) {
        notifications.forEach(element => {
            triggerToaster(element[0], element[1]);
        });
    }

    if (errors.length) {
        errors.forEach(error => {
            triggerToaster('error', error);
        });
    }

    function notify(status, message) {
        if (typeof message == 'string') {
            triggerToaster(status, message);
        } else {
            $.each(message, (i, val) => triggerToaster(status, val));
        }
    }
</script>

        <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/moment.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/daterangepicker.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>


    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function() {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function() {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function(e) {
                const {
                    top,
                    left
                } = $(this).next(".dropdown-menu")[0].getBoundingClientRect();
                $(this).next(".dropdown-menu").css({
                    position: "fixed",
                    inset: "unset",
                    transform: "unset",
                    top: top + "px",
                    left: left + "px",
                });
            });
        })(jQuery);
    </script>

        <script>
        "use strict";
        (function($) {
            function getCustomerInformation(value, searchBy = 'mobile', customerType = 'sender') {
                $.ajax({
                    url: `https://script.viserlab.com/courierlab/demo/staff/customer/search`,
                    method: 'get',
                    data: {
                        searchBy: searchBy,
                        search: value
                    },
                    success: function(response) {
                        if (!$.isEmptyObject(response)) {

                            $(`input[name='${customerType}_customer_email']`).val(response.email);
                            $(`input[name='${customerType}_customer_phone']`).val(response.mobile);

                            $(`input[name='${customerType}_customer_firstname']`).val(response.firstname)
                                .attr('readonly', true);
                            $(`input[name='${customerType}_customer_lastname']`).val(response.lastname)
                                .attr('readonly', true);
                            $(`input[name='${customerType}_customer_address']`).val(response.address).attr(
                                'readonly', true);
                            $(`input[name='${customerType}_customer_city']`).val(response.city).attr(
                                'readonly', true);
                            $(`input[name='${customerType}_customer_state']`).val(response.state).attr(
                                'readonly', true);
                        }
                    }
                });
            }

            $('#sender_phone').on('focusout', function() {
                let value = $(this).val();
                if (value.length > 0) {
                    getCustomerInformation(value);
                }
            });

            $('#sender_email').on('focusout', function() {
                let value = $(this).val();
                if (value.length > 0) {
                    getCustomerInformation(value, 'email');
                }
            });

            $('#receiver_phone').on('focusout', function() {
                let value = $(this).val();
                if (value.length > 0) {
                    getCustomerInformation(value, 'mobile', 'receiver');
                }
            });

            $('#receiver_email').on('focusout', function() {
                let value = $(this).val();
                if (value.length > 0) {
                    getCustomerInformation(value, 'email', 'receiver');
                }
            });

            $('.addUserData').on('click', function() {
                let length = $("#addedField").find('.single-item').length;
                let html = `
                <div class="row single-item mb-4">
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="select2 selected_type form-control" name="items[${length}][type]" data-minimum-results-for-search="-1" required>
                                <option disabled selected value="">Select Courier/Parcel Type</option>
                                                                    <option value="1" data-unit="KG" data-price=10 >Food</option>
                                                                    <option value="2" data-unit="LITER" data-price=5 >Oil</option>
                                                                    <option value="3" data-unit="MITER" data-price=10 >Wood</option>
                                                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Courier/Parcel Name"  name="items[${length}][name]">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" class="form-control quantity" placeholder="Quantity" disabled name="items[${length}][quantity]"  required>
                                <span class="input-group-text unit"><i class="las la-balance-scale"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text"  class="form-control single-item-amount" placeholder="Enter Price" name="items[${length}][amount]" required readonly>
                                <span class="input-group-text">USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn--danger w-100 removeBtn h-45" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>`;
                $('#addedField').append(html)
            });

            $('#addedField').on('change', '.selected_type', function(e) {
                let unit = $(this).find('option:selected').data('unit');
                let parent = $(this).closest('.single-item');
                $(parent).find('.quantity').attr('disabled', false);
                $(parent).find('.unit').html(`${unit || '<i class="las la-balance-scale"></i>'}`);
                calculation();
            });

            $('#addedField').on('click', '.removeBtn', function(e) {
                let length = $("#addedField").find('.single-item').length;
                if (length <= 1) {
                    notify('warning', "At least one item required");
                } else {
                    $(this).closest('.single-item').remove();
                }
                calculation();
            });

            let discount = 0;

            $('.discount').on('input', function(e) {
                this.value = this.value.replace(/^\.|[^\d\.]/g, '');

                discount = parseFloat($(this).val() || 0);
                if (discount >= 100) {
                    discount = 100;
                    notify('warning', "Discount can not bigger than 100 %");
                    $(this).val(discount);
                }
                calculation();
            });

            $('#addedField').on('input', '.quantity', function(e) {
                this.value = this.value.replace(/^\.|[^\d\.]/g, '');

                let quantity = $(this).val();
                if (quantity <= 0) {
                    quantity = 0;
                }
                quantity = parseFloat(quantity);

                let parent = $(this).closest('.single-item');
                let price = parseFloat($(parent).find('.selected_type option:selected').data('price') || 0);
                let subTotal = price * quantity;

                $(parent).find('.single-item-amount').val(subTotal.toFixed(2));

                calculation()
            });

            function calculation() {
                let items = $('#addedField').find('.single-item');
                let subTotal = 0;

                $.each(items, function(i, item) {
                    let price = parseFloat($(item).find('.selected_type option:selected').data('price') || 0);
                    let quantity = parseFloat($(item).find('.quantity').val() || 0);
                    subTotal += price * quantity;
                });

                subTotal = parseFloat(subTotal);

                let discountAmount = (subTotal / 100) * discount;
                let total = subTotal - discountAmount;

                $('.subtotal').text(subTotal.toFixed(2));
                $('.total').text(total.toFixed(2));
            };

            let latestDate = `2024-08-13 05:53:07`;
            $('input[name="estimate_date"]').daterangepicker({
                singleDatePicker: true,
                opens: "right",
                autoApply: true,
                startDate: latestDate,
                locale: {
                    format: "YYYY-MM-DD",
                }
            });


        })(jQuery);
    </script>
<script>
    if ($('li').hasClass('active')) {
        $('#sidebar__menuWrapper').animate({
            scrollTop: eval($(".active").offset().top - 320)
        }, 500);
    }
</script>
    <script>
        "use strict";
        var routes = [{"admin.branch.manager.staff.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/{id}"},{"admin.branch.manager.staff":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/dashboard\/{id}"},{"admin.staff.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/staff"},{"manager.staff.create":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/create"},{"manager.staff.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/list"},{"manager.staff.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/store"},{"manager.staff.edit":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/edit\/{id}"},{"manager.staff.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/status\/{id}"},{"staff.login":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff"},{"staff.":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff"},{"staff.logout":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/logout"},{"staff.password.request":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/reset"},{"staff.password.email":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/email"},{"staff.password.code.verify":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/code-verify"},{"staff.password.verify.code":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/verify-code"},{"staff.password.reset.form":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/{token}"},{"staff.password.change":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/change"},{"staff.dashboard":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/dashboard"},{"staff.password":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password"},{"staff.profile":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile"},{"staff.profile.update.data":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile\/update"},{"staff.password.update.data":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/update"},{"staff.ticket.delete":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/delete\/{id}"},{"staff.branch.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/list"},{"staff.branch.income":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/income"},{"staff.courier.create":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send"},{"staff.courier.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/store"},{"staff.courier.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/update\/{id}"},{"staff.courier.edit":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/edit\/{id}"},{"staff.courier.invoice":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/invoice\/{id}"},{"staff.courier.delivery.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list"},{"staff.courier.details":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/details\/{id}"},{"staff.courier.payment":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/payment"},{"staff.courier.delivery":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/store"},{"staff.courier.manage.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/list"},{"staff.courier.date.search":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/date\/search"},{"staff.courier.search":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/search"},{"staff.courier.manage.sent.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send\/list"},{"staff.courier.received.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/received\/list"},{"staff.courier.sent.queue":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/sent\/queue"},{"staff.courier.dispatch.all":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch-all"},{"staff.courier.dispatch":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch"},{"staff.courier.dispatched":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/status\/{id}"},{"staff.courier.upcoming":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/upcoming"},{"staff.courier.receive":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/receive\/{id}"},{"staff.courier.delivery.queue":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/queue"},{"staff.courier.manage.delivered":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list\/total"},{"staff.cash.courier.income":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/cash\/collection"},{"staff.search.customer":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/customer\/search"},{"staff.ticket.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket"},{"staff.ticket.open":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/new"},{"staff.ticket.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/create"},{"staff.ticket.view":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/view\/{ticket}"},{"staff.ticket.reply":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/reply\/{ticket}"},{"staff.ticket.close":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/close\/{ticket}"},{"staff.ticket.download":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/download\/{ticket}"}];
        var settingsData = Object.assign({}, {"dashboard":{"keyword":["Dashboard","Home","Panel","staff","Control center","Overview","Main hub","Management hub","Central hub","Command center","Centralized interface","staff console","Management dashboard","Main screen","Command dashboard","staff control panel"],"title":"Dashboard","icon":"las la-home","route_name":"staff.dashboard","menu_active":"staff.dashboard"},"send_courier":{"keyword":["send courier"],"title":"Send Courier","icon":"las la-shipping-fast","route_name":"staff.courier.create","menu_active":"staff.courier.create"},"sent_in_queue":{"keyword":["sent in queue"],"title":"Sent In Queue","icon":"las la-hourglass-start","route_name":"staff.courier.sent.queue","menu_active":"staff.courier.sent.queue"},"shipping_courier":{"keyword":["shipping","shipping courier"],"title":"Shipping Courier","icon":"las la-sync","route_name":"staff.courier.dispatch","menu_active":"staff.courier.dispatch"},"upcoming_courier":{"keyword":["upcoming","upcoming courier"],"title":"Upcoming Courier","icon":"las la-history","route_name":"staff.courier.upcoming","menu_active":"staff.courier.upcoming","counter":"upcomingCount"},"delivery_in_queue":{"keyword":["delivery","delivery in queue","delivery courier"],"title":"Delivery In Queue","icon":"lab la-accessible-icon","route_name":"staff.courier.delivery.queue","menu_active":"staff.courier.delivery.queue"},"manage_courier":{"title":"Manage Courier","icon":"las la-sliders-h","menu_active":["staff.courier.manage*"],"submenu":[{"keyword":["total sent","total sent querier"],"title":"Total Sent","route_name":"staff.courier.manage.sent.list","menu_active":"staff.courier.manage.sent.list"},{"keyword":["total delivered"],"title":"Total Delivered","route_name":"staff.courier.manage.delivered","menu_active":"staff.courier.manage.delivered"},{"keyword":["all courier"],"title":"All Courier","route_name":"staff.courier.manage.list","menu_active":"staff.courier.manage.list"}]},"branch_list":{"keyword":["branch","branch list"],"title":"Branch List","icon":"las la-university","route_name":"staff.branch.index","menu_active":"staff.branch.index"},"cash_collection":{"keyword":["cash","cash collection"],"title":"Cash Collection","icon":"las la-wallet","route_name":"staff.cash.courier.income","menu_active":"staff.cash.courier.income"},"support_ticket":{"keyword":["ticket","support ticket"],"title":"Support Ticket","icon":"las la-ticket-alt","route_name":"staff.ticket.index","menu_active":"ticket*"}});
        $('.navbar__action-list .dropdown-menu').on('click', function(event) {
            event.stopPropagation();
        });
    </script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>

    <script>
        "use strict";

        function getEmptyMessage() {
            return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
                    <p class="text-muted">No search result found</p>
                </div>
            </li>`
        }
    </script>
</body>

</html>
