<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourierLab - Courier Information</title>

    <link rel="shortcut icon" type="image/png"
        href="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/bootstrap.min.css?v=3">

    <link rel="stylesheet"
        href="https://script.viserlab.com/courierlab/demo/assets/viseradmin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/all.min.css?v=3">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/line-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://script.viserlab.com/courierlab/demo/assets/viseradmin/css/daterangepicker.css">

    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/global/css/select2.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/courierlab/demo/assets/viseradmin/css/app.css?v=3">

</head>

<body>


    <div class="page-wrapper default-version">

        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="https://script.viserlab.com/courierlab/demo/admin/dashboard" class="sidebar__main-logo">
                        <img src="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/logo.png"
                            alt="image"></a>
                </div>
                <div class="sidebar__menu-wrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/dashboard" class="nav-link ">
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/all" class="nav-link ">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Admin</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-code-branch"></i>
                                <span class="menu-title">Branch Control</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/branch"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Manage Branch</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/branch-manager/list"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Branch Manager</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/branch/income"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Branch Income</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list" class="nav-link ">
                                <i class="menu-icon las la-fax"></i>
                                <span class="menu-title">Manage Courier</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/staff" class="nav-link ">
                                <i class="menu-icon las la-users-cog"></i>
                                <span class="menu-title">Staff List</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/customer" class="nav-link ">
                                <i class="menu-icon las la-user-friends"></i>
                                <span class="menu-title">Customer List</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-tasks"></i>
                                <span class="menu-title">Unit &amp; Type Settings</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/manage/unit"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Manage Unit</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/courier/manage/type"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Manage Type</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-ticket"></i>
                                <span class="menu-title">Support Ticket</span>
                                <span class="menu-badge menu-badge-level-one bg--warning ms-auto">
                                    <i class="fas fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/pending"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Ticket</span>
                                            <span class="menu-badge bg--info ms-auto">32</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/closed"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Closed Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/answered"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Answered Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/ticket"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Ticket</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Report</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/report/login/history"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Login History</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/report/notification/history"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Notification History</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/system-setting"
                                class="nav-link ">
                                <i class="menu-icon las la-life-ring"></i>
                                <span class="menu-title">System Setting</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-server"></i>
                                <span class="menu-title">Extra</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/system/info"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Application</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/system/server-info"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Server</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/system/optimize"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Cache</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/admin/system/system-update"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Update</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/request-report"
                                class="nav-link ">
                                <i class="menu-icon las la-bug"></i>
                                <span class="menu-title">Report &amp; Request</span>
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
                        <h6 class="page-title">Courier Information</h6>
                        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="show-filter mb-3 text-end">
                                <button type="button" class="btn btn-outline--primary showFilterBtn btn-sm">
                                    <i class="las la-filter"></i>
                                    Filter </button>
                            </div>
                            <div class="card responsive-filter-card mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="d-flex flex-wrap gap-4">
                                            <div class="flex-grow-1">
                                                <label>Search</label>
                                                <input type="text" name="search" value="" class="form-control">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label>Status</label>
                                                <select class="form-control select2"
                                                    data-minimum-results-for-search="-1" name="status">
                                                    <option value="">All</option>
                                                    <option value="0">Queue</option>
                                                    <option value="1">Dispatch</option>
                                                    <option value="1">Upcoming</option>
                                                    <option value="2">Received</option>
                                                    <option value="3">Delivered</option>
                                                </select>
                                            </div>
                                            <div class="flex-grow-1">
                                                <label>Payment Status</label>
                                                <select class="form-control select2"
                                                    data-minimum-results-for-search="-1" name="payment_status">
                                                    <option value="" selected>All</option>
                                                    <option value="1">Paid</option>
                                                    <option value="0">Unpaid</option>
                                                </select>
                                            </div>
                                            <div class="flex-grow-1">
                                                <label>Date</label>
                                                <input name="date" type="search"
                                                    class="datepicker-here form-control bg--white pe-2 date-range"
                                                    placeholder="Start Date - End Date" autocomplete="off" value="">
                                            </div>
                                            <div class="flex-grow-1 align-self-end">
                                                <button class="btn btn--primary w-100 h-45">
                                                    <i class="fas fa-filter"></i>
                                                    Filter </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive--sm table-responsive">
                                        <table class="table table--light style--two">
                                            <thead>
                                                <tr>
                                                    <th>Sender Branch - Staff</th>
                                                    <th>Receiver Branch - Staff</th>
                                                    <th>Amount - Order Number</th>
                                                    <th>Creations Date</th>
                                                    <th>Payment Status</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $100.00
                                                        </span>
                                                        <br>
                                                        <span>JGQMZSFNUZNS</span>
                                                    </td>
                                                    <td>
                                                        28 Jun 2024
                                                        <br>
                                                        1 month ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Delivered</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/498"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/498"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Curran
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $35.00
                                                        </span>
                                                        <br>
                                                        <span>C6P6CFUIFOUY</span>
                                                    </td>
                                                    <td>
                                                        28 Jun 2024
                                                        <br>
                                                        1 month ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/497"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/497"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $90.00
                                                        </span>
                                                        <br>
                                                        <span>PPK4LNPOZ38A</span>
                                                    </td>
                                                    <td>
                                                        27 Jun 2024
                                                        <br>
                                                        1 month ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Delivered</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/496"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/496"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        India staff
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Curran
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $300.00
                                                        </span>
                                                        <br>
                                                        <span>56Q1GRFJ8PSN</span>
                                                    </td>
                                                    <td>
                                                        14 Jun 2024
                                                        <br>
                                                        1 month ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/495"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/495"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $580.00
                                                        </span>
                                                        <br>
                                                        <span>RU1QNW18SFUE</span>
                                                    </td>
                                                    <td>
                                                        12 Jun 2024
                                                        <br>
                                                        1 month ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/494"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/494"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Curran
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $15.00
                                                        </span>
                                                        <br>
                                                        <span>BU75FKM7B1KW</span>
                                                    </td>
                                                    <td>
                                                        08 Jun 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/493"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/493"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Curran
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $23,560.00
                                                        </span>
                                                        <br>
                                                        <span>HXM5NG9G4JXP</span>
                                                    </td>
                                                    <td>
                                                        06 Jun 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/492"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/492"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        Abis Abis
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Srilanka
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $4.90
                                                        </span>
                                                        <br>
                                                        <span>C3TSMS14V1BC</span>
                                                    </td>
                                                    <td>
                                                        05 Jun 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/491"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/491"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        RAJ KUMAR
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $2,808.60
                                                        </span>
                                                        <br>
                                                        <span>R3VNSG1WAYRU</span>
                                                    </td>
                                                    <td>
                                                        26 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/490"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/490"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Curran
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $9.30
                                                        </span>
                                                        <br>
                                                        <span>YHFDRAPWFQF8</span>
                                                    </td>
                                                    <td>
                                                        25 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/489"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/489"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $20.00
                                                        </span>
                                                        <br>
                                                        <span>6F5BO9YER4YV</span>
                                                    </td>
                                                    <td>
                                                        25 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--dark">Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/488"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/488"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Curran
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $9.30
                                                        </span>
                                                        <br>
                                                        <span>AX9XB6FAHEAM</span>
                                                    </td>
                                                    <td>
                                                        12 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/487"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/487"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $90.00
                                                        </span>
                                                        <br>
                                                        <span>51PWRRT3N5XE</span>
                                                    </td>
                                                    <td>
                                                        12 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--dark">Received</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/486"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/486"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Srilanka
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $9.30
                                                        </span>
                                                        <br>
                                                        <span>D97T8SGOGYHC</span>
                                                    </td>
                                                    <td>
                                                        11 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/485"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/485"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">
                                                            Singapore
                                                        </span>
                                                        <br>
                                                        FedEx Company
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            India
                                                        </span>
                                                        <br>
                                                        <span>N/A</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">
                                                            $9.50
                                                        </span>
                                                        <br>
                                                        <span>JQB69A13VQS3</span>
                                                    </td>
                                                    <td>
                                                        11 May 2024
                                                        <br>
                                                        2 months ago
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">Unpaid</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--warning">Sent</span>
                                                    </td>
                                                    <td>
                                                        <div class="button--group">
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/invoice/484"
                                                                class="btn btn-sm btn-outline--info">
                                                                <i class="las la-file-invoice"></i>
                                                                Invoice </a>
                                                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/details/484"
                                                                class="btn btn-sm btn-outline--primary">
                                                                <i class="las la-info-circle"></i>
                                                                Details </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer py-4">
                                    <nav class="d-flex justify-items-center justify-content-between">
                                        <div class="d-flex justify-content-between flex-fill d-sm-none">
                                            <ul class="pagination">

                                                <li class="page-item disabled" aria-disabled="true">
                                                    <span class="page-link">‹</span>
                                                </li>


                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=2"
                                                        rel="next">›</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div
                                            class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                                            <div>
                                                <p class="small text-muted">
                                                    Showing
                                                    <span class="fw-semibold">1</span>
                                                    to
                                                    <span class="fw-semibold">15</span>
                                                    of
                                                    <span class="fw-semibold">465</span>
                                                    results
                                                </p>
                                            </div>

                                            <div>
                                                <ul class="pagination">

                                                    <li class="page-item disabled" aria-disabled="true" aria-label="‹">
                                                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                                    </li>





                                                    <li class="page-item active" aria-current="page"><span
                                                            class="page-link">1</span></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=2">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=3">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=4">4</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=5">5</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=6">6</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=7">7</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=8">8</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=9">9</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=10">10</a>
                                                    </li>

                                                    <li class="page-item disabled" aria-disabled="true"><span
                                                            class="page-link">...</span></li>





                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=30">30</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=31">31</a>
                                                    </li>


                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            href="https://script.viserlab.com/courierlab/demo/admin/courier/list?page=2"
                                                            rel="next" aria-label="›">&rsaquo;</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

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
        bkLib.onDomLoaded(function () {
            $(".nicEdit").each(function (index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function ($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function () {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function () {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function () {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function (e) {
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
        (function ($) {
            "use strict";

            const datePicker = $('.date-range').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                },
                showDropdowns: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 15 Days': [moment().subtract(14, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(30, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                        .endOf('month')
                    ],
                    'Last 6 Months': [moment().subtract(6, 'months').startOf('month'), moment().endOf('month')],
                    'This Year': [moment().startOf('year'), moment().endOf('year')],
                },
                maxDate: moment()
            });
            const changeDatePickerText = (event, startDate, endDate) => {
                $(event.target).val(startDate.format('MMMM DD, YYYY') + ' - ' + endDate.format('MMMM DD, YYYY'));
            }


            $('.date-range').on('apply.daterangepicker', (event, picker) => changeDatePickerText(event, picker
                .startDate, picker.endDate));


            if ($('.date-range').val()) {
                let dateRange = $('.date-range').val().split(' - ');
                $('.date-range').data('daterangepicker').setStartDate(new Date(dateRange[0]));
                $('.date-range').data('daterangepicker').setEndDate(new Date(dateRange[1]));
            }

            let url = new URL(window.location).searchParams;
            if (url.get('status') != undefined && url.get('status') != '') {
                $('select[name=status]').find(`option[value=${url.get('status')}]`).attr('selected', true).change();
            }
            if (url.get('payment_status') != undefined && url.get('payment_status') != '') {
                $('select[name=payment_status]').find(`option[value=${url.get('payment_status')}]`).attr('selected',
                    true).change();
            }
        })(jQuery)
    </script>
    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
    <script>
        "use strict";
        var routes = [{ "admin.login": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin" }, { "admin.login": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin" }, { "admin.logout": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/logout" }, { "admin.password.reset": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset" }, { "admin.password.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset" }, { "admin.password.code.verify": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/code-verify" }, { "admin.password.verify.code": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/verify-code" }, { "admin.password.reset.form": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset\/{token}" }, { "admin.password.change": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset\/change" }, { "admin.dashboard": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/dashboard" }, { "admin.profile": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/profile" }, { "admin.profile.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/profile" }, { "admin.password": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password" }, { "admin.password.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password" }, { "admin.all": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/all" }, { "admin.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/store" }, { "admin.remove": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/remove\/{id}" }, { "admin.notifications": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications" }, { "admin.notification.read": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/read\/{id}" }, { "admin.notifications.read.all": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications\/read-all" }, { "admin.notifications.delete.all": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications\/delete-all" }, { "admin.notifications.delete.single": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications\/delete-single\/{id}" }, { "admin.request.report": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/request-report" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/request-report" }, { "admin.download.attachment": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/download-attachments\/{file_hash}" }, { "admin.branch.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch" }, { "admin.branch.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch\/store" }, { "admin.branch.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch\/status\/{id}" }, { "admin.branch.manager.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/list" }, { "admin.branch.manager.create": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/create" }, { "admin.branch.manager.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/store\/{id?}" }, { "admin.branch.manager.edit": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/edit\/{id}" }, { "admin.branch.manager.staff.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/{id}" }, { "admin.branch.manager.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/status\/{id}" }, { "admin.branch.manager.dashboard": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/dashboard\/{id}" }, { "admin.branch.manager.staff": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/dashboard\/{id}" }, { "admin.branch.manager.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/manager\/{id}" }, { "admin.courier.unit.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/unit" }, { "admin.courier.unit.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/unit\/store" }, { "admin.courier.unit.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/status\/{id}" }, { "admin.courier.unit.type.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/type" }, { "admin.courier.unit.type.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/type\/store" }, { "admin.courier.unit.type.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/type\/status\/{id}" }, { "admin.courier.branch.income": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/branch\/income" }, { "admin.courier.info.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/list" }, { "admin.courier.info.details": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/details\/{id}" }, { "admin.courier.invoice": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/invoice\/{id}" }, { "admin.staff.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/staff" }, { "admin.customer.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/customer" }, { "admin.customer.import": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/customer\/import\/customers" }, { "admin.customer.export": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/customer\/export\/customers" }, { "admin.report.login.history": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/login\/history" }, { "admin.report.login.ipHistory": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/login\/ipHistory\/{ip}" }, { "admin.report.notification.history": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/notification\/history" }, { "admin.report.email.details": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/email\/detail\/{id}" }, { "admin.ticket.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket" }, { "admin.ticket.pending": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/pending" }, { "admin.ticket.closed": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/closed" }, { "admin.ticket.answered": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/answered" }, { "admin.ticket.view": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/view\/{id}" }, { "admin.ticket.reply": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/reply\/{id}" }, { "admin.ticket.close": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/close\/{id}" }, { "admin.ticket.download": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/download\/{attachment_id}" }, { "admin.ticket.delete": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/delete\/{id}" }, { "admin.language.manage": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language" }, { "admin.language.manage.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language" }, { "admin.language.manage.delete": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/delete\/{id}" }, { "admin.language.manage.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/update\/{id}" }, { "admin.language.key": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/edit\/{id}" }, { "admin.language.import.lang": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/import" }, { "admin.language.store.key": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/store\/key\/{id}" }, { "admin.language.delete.key": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/delete\/key\/{id}" }, { "admin.language.update.key": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/update\/key\/{id}" }, { "admin.language.get.key": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/get-keys" }, { "admin.setting.system": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system-setting" }, { "admin.setting.general": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/general-setting" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/general-setting" }, { "admin.setting.system.configuration": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/system-configuration" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/system-configuration" }, { "admin.setting.logo.icon": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/logo-icon" }, { "admin.setting.logo.icon": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/logo-icon" }, { "admin.setting.custom.css": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/custom-css" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/custom-css" }, { "admin.setting.sitemap": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/sitemap" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/sitemap" }, { "admin.setting.robot": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/robot" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/robot" }, { "admin.setting.cookie": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/cookie" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/cookie" }, { "admin.maintenance.mode": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/maintenance-mode" }, { "admin.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/maintenance-mode" }, { "admin.setting.notification.global.email": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/email" }, { "admin.setting.notification.global.email.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/email\/update" }, { "admin.setting.notification.global.sms": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/sms" }, { "admin.setting.notification.global.sms.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/sms\/update" }, { "admin.setting.notification.templates": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/templates" }, { "admin.setting.notification.template.edit": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/template\/edit\/{type}\/{id}" }, { "admin.setting.notification.template.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/template\/update\/{type}\/{id}" }, { "admin.setting.notification.email": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/email\/setting" }, { "admin.setting.notification.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/email\/setting" }, { "admin.setting.notification.email.test": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/email\/test" }, { "admin.setting.notification.sms": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/sms\/setting" }, { "admin.setting.notification.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/sms\/setting" }, { "admin.setting.notification.sms.test": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/sms\/test" }, { "admin.extensions.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/extensions" }, { "admin.extensions.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/extensions\/update\/{id}" }, { "admin.extensions.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/extensions\/status\/{id}" }, { "admin.system.info": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/info" }, { "admin.system.server.info": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/server-info" }, { "admin.system.optimize": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/optimize" }, { "admin.system.optimize.clear": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/optimize-clear" }, { "admin.system.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/system-update" }, { "admin.system.update.process": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/system-update" }, { "admin.system.update.log": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/system-update\/log" }, { "admin.seo": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/seo" }, { "admin.frontend.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/index" }, { "admin.frontend.templates": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/templates" }, { "admin.frontend.templates.active": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/templates" }, { "admin.frontend.sections": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-sections\/{key?}" }, { "admin.frontend.sections.content": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-content\/{key}" }, { "admin.frontend.sections.element": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-element\/{key}\/{id?}" }, { "admin.frontend.sections.element.slug.check": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-slug-check\/{key}\/{id?}" }, { "admin.frontend.sections.element.seo": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-element-seo\/{key}\/{id}" }, { "admin.frontend.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-element-seo\/{key}\/{id}" }, { "admin.frontend.remove": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/remove\/{id}" }, { "admin.frontend.import": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/import-content\/{key}" }, { "admin.frontend.manage.pages": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages" }, { "admin.frontend.manage.pages.check.slug": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages\/check-slug\/{id?}" }, { "admin.frontend.manage.pages.save": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages" }, { "admin.frontend.manage.pages.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages\/update" }, { "admin.frontend.manage.pages.delete": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages\/delete\/{id}" }, { "admin.frontend.manage.section": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-section\/{id}" }, { "admin.frontend.manage.section.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-section\/{id}" }, { "admin.frontend.manage.pages.seo": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-seo\/{id}" }, { "admin.frontend.": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-seo\/{id}" }];
        var settingsData = Object.assign({}, { "general_setting": { "keyword": ["general", "fundamental", "site information", "site", "website settings", "basic settings", "global settings", "site color", "timezone", "site currency", "pagination", "currency format", "site title", "base color", "paginate"], "title": "General Setting", "subtitle": "Configure the fundamental information of the site.", "icon": "las la-cog", "route_name": "admin.setting.general" }, "logo_favicon": { "keyword": ["branding", "identity", "logo upload", "site branding", "brand identity", "favicon", "website icon", "website favicon", "website logo"], "title": "Logo and Favicon", "subtitle": "Upload your logo and favicon here.", "icon": "las la-images", "route_name": "admin.setting.logo.icon" }, "system_configuration": { "keyword": ["basic modules", "control", "modules", "system", "configuration settings", "system control", "email control", "sms control", "language control", "email notification", "sms notification"], "title": "System Configuration", "subtitle": "Control all of the basic modules of the system.", "icon": "las la-cogs", "route_name": "admin.setting.system.configuration" }, "notification_setting": { "keyword": ["email configuration", "sms configure", "email setting", "sms setting", "email template", "sms template", "notification template", "smtp", "sendgrid", "send grid", "mailjet", "mail jet", "php", "nexmo", "clickatell", "click a tell", "infobip", "info bip", "message bird", "sms broadcast", "twilio", "text magic", "custom api", "template setting", "global template", "global notification"], "title": "Notification Setting", "subtitle": "Control and configure overall notification elements of the system.", "icon": "las la-bell", "route_name": "admin.setting.notification.global.email" }, "seo_configuration": { "keyword": ["SEO", "meta title", "meta description", "meta keywords", "optimization", "meta tags", "SEO configuration"], "title": "SEO Configuration", "subtitle": "Configure proper meta title, meta description, meta keywords, etc to make the system SEO-friendly.", "icon": "las la-globe", "route_name": "admin.seo" }, "manage_frontend": { "keyword": ["about section", "banner section", "blog section", "branch section", "breadcrumb", "client section", "contact info", "contact us", "counter section", "faq section", "feature section", "footer section", "order tracking section", "partner section", "service section", "social icons section", "team section", "frontend", "template", "manage frontend", "frontend contents", "frontend settings", "about us", "banner", "contact", "faq", "social icons", "section settings", "subscribe"], "title": "Manage Frontend", "subtitle": "Control all of the frontend contents of the system.", "icon": "la la-html5", "route_name": "admin.frontend.index" }, "manage_pages": { "keyword": ["pages", "manage pages", "home page", "contact page", "blog page"], "title": "Manage Pages", "subtitle": "Control dynamic and static pages of the system.", "icon": "las la-list", "route_name": "admin.frontend.manage.pages" }, "manage_templates": { "keyword": ["Templates", "Manage Templates"], "title": "Manage Templates", "subtitle": "Control frontend template of the system.", "icon": "la la-puzzle-piece", "route_name": "admin.frontend.templates" }, "language": { "keyword": ["language", "localize", "translation", "translate", "internationalization", "language settings", "localization settings", "translation settings", "configure languages", "configure localization"], "title": "Language", "subtitle": "Configure your required languages and keywords to localize the system.", "icon": "las la-language", "route_name": "admin.language.manage" }, "extensions": { "keyword": ["extensions", "plugins", "addons", "extension settings", "plugin settings", "addon settings", "captcha", "custom captcha", "google captcha", "recaptcha", "re-captcha", "re captcha", "tawk", "tawk.to", "tawk to", "analytics", "google analytics", "facebook comment"], "title": "Extensions", "subtitle": "Manage extensions of the system here to extend some extra features of the system.", "icon": "las la-puzzle-piece", "route_name": "admin.extensions.index" }, "policy_pages": { "keyword": ["privacy and policy", "terms and condition", "terms of service"], "title": "Policy Pages", "subtitle": "Configure your policy and terms of the system here.", "icon": "las la-shield-alt", "route_name": "admin.frontend.sections", "params": { "key": "policy_pages" } }, "maintenance_mode": { "keyword": ["maintenance mode", "system maintenance", "system health", "maintenance settings", "system health settings", "enable maintenance", "disable maintenance", "maintenance configuration"], "title": "Maintenance Mode", "subtitle": "Enable or disable the maintenance mode of the system when required.", "icon": "las la-robot", "route_name": "admin.maintenance.mode" }, "gdpr_cookie": { "keyword": ["GDPR cookie", "cookie policy", "data privacy", "GDPR settings", "cookie policy settings", "data privacy settings"], "title": "GDPR Cookie", "subtitle": "Set GDPR Cookie policy if required. It will ask visitor of the system to accept if enabled.", "icon": "las la-cookie-bite", "route_name": "admin.setting.cookie" }, "custom_css": { "keyword": ["custom CSS", "modify styles", "frontend", "styling", "design customization", "CSS settings", "style settings", "frontend customization", "design settings", "customize CSS"], "title": "Custom CSS", "subtitle": "Write custom css here to modify some styles of frontend of the system if you need to.", "icon": "lab la-css3-alt", "route_name": "admin.setting.custom.css" }, "sitemap": { "keyword": ["Site map", "sitemap", "xml", "sitemap.xml"], "title": "Sitemap XML", "subtitle": "Insert the sitemap XML here to enhance SEO performance.", "icon": "las la-sitemap", "route_name": "admin.setting.sitemap" }, "robots": { "keyword": ["Robots", "txt", "robots.txt", "robot.txt"], "title": "Robots txt", "subtitle": "Insert the robots.txt content here to enhance bot web crawlers and instruct them on how to interact with certain areas of the website.", "icon": "las la-robot", "route_name": "admin.setting.robot" } }, { "dashboard": { "keyword": ["Dashboard", "Home", "Panel", "Admin", "Control center", "Overview", "Main hub", "Management hub", "Administrative hub", "Central hub", "Command center", "Administrator portal", "Centralized interface", "Admin console", "Management dashboard", "Main screen", "Administrative dashboard", "Command dashboard", "Main control panel"], "title": "Dashboard", "icon": "las la-home", "route_name": "admin.dashboard", "menu_active": "admin.dashboard" }, "admin": { "keyword": ["admin"], "title": "Admin", "icon": "las la-users", "route_name": "admin.all", "menu_active": "admin.all" }, "branch_control": { "title": "Branch Control", "icon": "las la-code-branch", "menu_active": ["admin.branch*", "admin.courier.branch.income"], "submenu": [{ "keyword": ["manage branch"], "title": "Manage Branch", "route_name": "admin.branch.index", "menu_active": "admin.branch.index" }, { "keyword": ["branch manager", "manager", "create manager"], "title": "Branch Manager", "route_name": "admin.branch.manager.index", "menu_active": "admin.branch.manager*" }, { "keyword": ["branch income", "income", "branch profit"], "title": "Branch Income", "route_name": "admin.courier.branch.income", "menu_active": "admin.courier.branch.income" }] }, "manage_courier": { "keyword": ["manage courier", "courier"], "title": "Manage Courier", "icon": "las la-fax", "route_name": "admin.courier.info.index", "menu_active": ["admin.courier.info*", "admin.courier.invoice"] }, "staff_list": { "keyword": ["staff info", "staff", "staff list"], "title": "Staff List", "icon": "las la-users-cog", "route_name": "admin.staff.index", "menu_active": ["admin.staff.index"] }, "customer_list": { "keyword": ["customer info", "customer", "customer list"], "title": "Customer List", "icon": "las la-user-friends", "route_name": "admin.customer.index", "menu_active": ["admin.customer.index"] }, "courier_settings": { "title": "Unit \u0026 Type Settings", "icon": "la la-tasks", "menu_active": "admin.courier.unit*", "submenu": [{ "keyword": ["manage unit", "unit", "create unit"], "title": "Manage Unit", "route_name": "admin.courier.unit.index", "menu_active": "admin.courier.unit.index" }, { "keyword": ["manage type", "type", "create type"], "title": "Manage Type", "route_name": "admin.courier.unit.type.index", "menu_active": "admin.courier.unit.type.index" }] }, "support_ticket": { "title": "Support Ticket", "icon": "la la-ticket", "counters": ["pendingTicketCount"], "menu_active": "admin.ticket*", "submenu": [{ "keyword": ["Pending Ticket", "Support Ticket", "Ticket management", "Ticket control", "Ticket status", "Ticket activity"], "title": "Pending Ticket", "route_name": "admin.ticket.pending", "menu_active": "admin.ticket.pending", "counter": "pendingTicketCount" }, { "keyword": ["Closed Ticket", "Support Ticket", "Ticket management", "Ticket activity"], "title": "Closed Ticket", "route_name": "admin.ticket.closed", "menu_active": "admin.ticket.closed" }, { "keyword": ["Answered Ticket", "Support Ticket", "Ticket management", "Ticket activity"], "title": "Answered Ticket", "route_name": "admin.ticket.answered", "menu_active": "admin.ticket.answered" }, { "keyword": ["All Ticket", "Support Ticket", "Ticket management", "Ticket control", "Ticket activity"], "title": "All Ticket", "route_name": "admin.ticket.index", "menu_active": "admin.ticket.index" }] }, "reports": { "title": "Report", "icon": "la la-list", "menu_active": "admin.report*", "submenu": [{ "keyword": ["Login History", "Report", "Login report", "Login history", "Login activity"], "title": "Login History", "route_name": "admin.report.login.history", "menu_active": ["admin.report.login.history", "admin.report.login.ipHistory"] }, { "keyword": ["Notification History", "Report", "Notification report", "Notification history", "Notification activity", "email log", "email history", "sms log", "sms history"], "title": "Notification History", "route_name": "admin.report.notification.history", "menu_active": "admin.report.notification.history" }] }, "system_setting": { "keyword": ["System Setting", "setting", "System configuration", "System preferences", "Configuration management", "System setup"], "title": "System Setting", "icon": "las la-life-ring", "route_name": "admin.setting.system", "menu_active": ["admin.setting.system", "admin.setting.general", "admin.setting.system.configuration", "admin.setting.logo.icon", "admin.extensions.index", "admin.language.manage", "admin.language.key", "admin.seo", "admin.frontend.templates", "admin.frontend.manage.*", "admin.maintenance.mode", "admin.setting.cookie", "admin.setting.custom.css", "admin.setting.sitemap", "admin.setting.robot", "admin.setting.notification.global.email", "admin.setting.notification.global.sms", "admin.setting.notification.email", "admin.setting.notification.sms", "admin.setting.notification.templates", "admin.setting.notification.template.edit", "admin.frontend.index", "admin.frontend.sections*"] }, "extra": { "title": "Extra", "icon": "la la-server", "menu_active": "admin.system*", "counters": ["updateAvailable"], "submenu": [{ "keyword": ["Application", "System", "Application management", "Application settings", "System information", "version", "laravel", "timezone"], "title": "Application", "route_name": "admin.system.info", "menu_active": "admin.system.info" }, { "keyword": ["Server", "System", "Server management", "Server settings", "System information", "version", "php version", "software", "ip address", "server ip address", "server port", "http host"], "title": "Server", "route_name": "admin.system.server.info", "menu_active": "admin.system.server.info" }, { "keyword": ["Cache", "System", "Cache management", "Cache optimization", "System performance", "clear cache"], "title": "Cache", "route_name": "admin.system.optimize", "menu_active": "admin.system.optimize" }, { "keyword": ["Update", "System", "Update management", "System update", "Software updates", "version update", "upgrade", "latest version"], "title": "Update", "route_name": "admin.system.update", "menu_active": "admin.system.update*", "counter": "updateAvailable" }] }, "report_and_request": { "keyword": ["Report \u0026 Request", "Report and Request", "Reports and Requests", "Reporting and Requests", "Report management", "Request management", "feature request", "bug report"], "title": "Report \u0026 Request", "icon": "las la-bug", "route_name": "admin.request.report", "menu_active": "admin.request.report" } });

        $('.navbar__action-list .dropdown-menu').on('click', function (event) {
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