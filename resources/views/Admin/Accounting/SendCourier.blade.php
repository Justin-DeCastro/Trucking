
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W">

    <title>Reference</title>

    <link rel="shortcut icon" type="image/png" href="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/viseradmin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/all.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/line-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="https://script.viserlab.com/courierlab/demo/assets/viseradmin/css/daterangepicker.css">

    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/select2.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/viseradmin/css/app.css?v=3">

        <style>
        .border-line-area {
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .border-line-area::before {
            position: absolute;
            content: '';
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #e5e5e5;
            z-index: -1;
        }

        .border-line-title {
            display: inline-block;
            padding: 3px 10px;
            background-color: #fff;
        }

        .card {
            border-radius: 5px !important;
        }

        .card-header:first-child {
            border-radius: 5px 5px 0 0 !important;
        }
    </style>
</head>

<body>

        <div class="page-wrapper default-version">

        <div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="https://script.viserlab.com/courierlab/demo/staff/dashboard" class="sidebar__main-logo">
                <img src="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/logo.png" alt="image">
            </a>
        </div>
        <div class="sidebar__menu-wrapper">
            <ul class="sidebar__menu">
                                                                                    <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/dashboard" class="nav-link ">
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item active">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/send" class="nav-link ">
                                <i class="menu-icon las la-shipping-fast"></i>
                                <span class="menu-title">Send Courier</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/sent/queue" class="nav-link ">
                                <i class="menu-icon las la-hourglass-start"></i>
                                <span class="menu-title">Sent In Queue</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch" class="nav-link ">
                                <i class="menu-icon las la-sync"></i>
                                <span class="menu-title">Shipping Courier</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/upcoming" class="nav-link ">
                                <i class="menu-icon las la-history"></i>
                                <span class="menu-title">Upcoming Courier</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/queue" class="nav-link ">
                                <i class="menu-icon lab la-accessible-icon"></i>
                                <span class="menu-title">Delivery In Queue</span>
                                                                                            </a>
                        </li>
                                                                                <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-sliders-h"></i>
                                <span class="menu-title">Manage Courier</span>
                                                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                                                                                                    <li class="sidebar-menu-item  ">
                                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Total Sent</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                    <li class="sidebar-menu-item  ">
                                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/list/total" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">Total Delivered</span>
                                                                                                                                            </a>
                                        </li>
                                                                                                                    <li class="sidebar-menu-item  ">
                                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/list" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">All Courier</span>
                                                                                                                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/branch/list" class="nav-link ">
                                <i class="menu-icon las la-university"></i>
                                <span class="menu-title">Branch List</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/cash/collection" class="nav-link ">
                                <i class="menu-icon las la-wallet"></i>
                                <span class="menu-title">Cash Collection</span>
                                                                                            </a>
                        </li>
                                                                                                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/ticket" class="nav-link ">
                                <i class="menu-icon las la-ticket-alt"></i>
                                <span class="menu-title">Support Ticket</span>
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
                    <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i class="las la-globe"></i></a>
                </button>
            </li>
            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img
                                src="https://script.viserlab.com/courierlab/demo/assets/images/user/profile/667fa67c7d5771719641724.png"
                                alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">staff</span>
                        </span>
                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="https://script.viserlab.com/courierlab/demo/staff/profile"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption">Profile</span>
                    </a>

                    <a href="https://script.viserlab.com/courierlab/demo/staff/password"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption">Password</span>
                    </a>

                    <a href="https://script.viserlab.com/courierlab/demo/staff/logout"
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


        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">


                    <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Courier Send</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                        <div class="row mb-none-30">
        <div class="col-lg-12 col-md-12 mb-30">
            <form action="https://script.viserlab.com/courierlab/demo/staff/courier/store" method="POST">
                <input type="hidden" name="_token" value="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W" autocomplete="off">                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="">Estimate Date</label>
                                <div class="input-group">
                                    <input name="estimate_date" type="text"
                                        class="datepicker-here form-control bg--white pe-2 date-range"
                                        placeholder="Estimate Delivery Date" autocomplete="off"
                                        value="">
                                    <span class="input-group-text"><i class="las la-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <label for="">Payment Status</label>
                                <select class="select2 form-control" name="payment_status"
                                    data-minimum-results-for-search="-1">
                                    <option value="0" selected>UNPAID</option>
                                    <option value="1">PAID</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-xl-6">
                        <div class="card">
                            <h5 class="card-header bg--primary  text-white">Sender Information</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="sender_customer_email"
                                            value="" id="sender_email" required>
                                    </div>
                                    <div class=" form-group col-lg-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="sender_customer_phone"
                                            value="" id="sender_phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="sender_customer_firstname"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="sender_customer_lastname"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="sender_customer_city"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>State</label>
                                        <input type="text" class="form-control" name="sender_customer_state"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="sender_customer_address"
                                            value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mt-4 mt-xl-0">
                            <h5 class="card-header bg--primary  text-white">Receiver Information</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="receiver_customer_email"
                                            value="" id="receiver_email" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="receiver_customer_phone"
                                            value="" id="receiver_phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="receiver_customer_firstname"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="receiver_customer_lastname"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="receiver_customer_city"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>State</label>
                                        <input type="text" class="form-control" name="receiver_customer_state"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="receiver_customer_address"
                                            value="" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Select Branch</label>
                                        <select class="select2 form-control" name="branch"
                                            data-minimum-results-for-search="-1" required>
                                            <option value>Select One</option>
                                                                                            <option value="4" >
                                                    Curran</option>
                                                                                            <option value="2" >
                                                    India</option>
                                                                                            <option value="3" >
                                                    Srilanka</option>
                                                                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card border--primary">
                            <h5 class="card-header bg--primary text-white">Courier Information                                <button type="button" class="btn btn-sm btn-outline-light float-end addUserData"><i
                                        class="la la-fw la-plus"></i>Add New One                                </button>
                            </h5>
                            <div class="card-body">
                                <div id="addedField">
                                                                    </div>
                                <div class="border-line-area">
                                    <h6 class="border-line-title">Summary</h6>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-text">Discount</span>
                                            <input type="number" name="discount" value=""
                                                class="form-control bg-white text-dark discount" value="0">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-end mt-2">
                                    <div class="col-md-3  d-flex justify-content-between">
                                        <span class="fw-bold">Subtotal:</span>
                                        <div><span class="subtotal">0.00</span></div>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-end mt-2">
                                    <div class="col-md-3  d-flex justify-content-between">
                                        <span class="fw-bold">Total:</span>
                                        <div><span class="total">0.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn--primary h-45 w-100 Submitbtn"> Submit</button>
            </form>
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
