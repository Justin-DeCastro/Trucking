
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W">

    <title>CourierLab - All Courier List</title>

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
                                                                                                        <li class="sidebar-menu-item ">
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
                            <a href="javascript:void(0)" class="side-menu--open">
                                <i class="menu-icon las la-sliders-h"></i>
                                <span class="menu-title">Manage Courier</span>
                                                            </a>
                            <div class="sidebar-submenu sidebar-submenu__open ">
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
                                                                                                                    <li class="sidebar-menu-item active ">
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
    <h6 class="page-title">All Courier List</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                        <div class="row">
        <div class="col-lg-12">
            <div class="show-filter mb-3 text-end">
                <button type="button" class="btn btn-outline--primary showFilterBtn btn-sm"><i class="las la-filter"></i>
                    Filter</button>
            </div>
            <div class="card responsive-filter-card  mb-3">
                <div class="card-body">
                    <form>
                        <div class="d-flex flex-wrap gap-4">
                            <div class="flex-grow-1">
                                <label>Search</label>
                                <input type="text" name="search" value="" class="form-control"
                                    placeholder="Order Number">
                            </div>
                                                            <div class="flex-grow-1">
                                    <label>Status</label>
                                    <select name="status" class="form-control select2"
                                        data-minimum-results-for-search="-1">
                                        <option value="">All</option>
                                        <option value="0">Queue</option>
                                        <option value="1">Dispatch</option>
                                        <option value="1">Upcoming</option>
                                        <option value="2">Received</option>
                                        <option value="3">Delevered</option>
                                    </select>
                                </div>
                                <div class="flex-grow-1">
                                    <label>Payment Status</label>
                                    <select name="payment_status" class="form-control select2"
                                        data-minimum-results-for-search="-1">
                                        <option value="">All</option>
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
                                <button class="btn btn--primary w-100 h-45"><i class="fas fa-filter"></i>
                                    Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card  ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th>Sender Branch - Staff</th>
                                    <th>Receiver Branch - Staff</th>
                                    <th>Amount - Order Number</th>
                                    <th>Creations Date</th>
                                    <th>Estimate Delivery Date</th>
                                    <th>Payment Status</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $100.00
                                            </span>
                                            <span>JGQMZSFNUZNS</span>
                                        </td>
                                        <td>28 Jun 2024</td>
                                        <td>28 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6ImQwQmVaSnhLdVBMR24wTjJxVHdnbXc9PSIsInZhbHVlIjoicjFMazdxS0xNdnBtY21iVXhXZzJWQT09IiwibWFjIjoiZTQzYTY0ZDNjNTIxMzdmM2E1MTA1NDdiMWEwZDY4NjRkMWU2MWVhZGE4YjBhZjg5NTU3M2RiNjU2ZDEzMjFiMCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImVxbkVMa2lOUi83OGU1M0lmQ1JhNFE9PSIsInZhbHVlIjoieFJYSTBhL3FGWFBlQ2E1Y3djYUJBQT09IiwibWFjIjoiYjU5NDIwMjlmYTRkYTY5YTZjMjQ4YmVhZGRhYmY2MTVhZjc1ZGZmZDhkMDVmZWE3ZGEzYmM3MTYwM2JjMGRjMSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $35.00
                                            </span>
                                            <span>C6P6CFUIFOUY</span>
                                        </td>
                                        <td>28 Jun 2024</td>
                                        <td>28 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InRvZklsd01reVRmdjFFd2JDM2lIUkE9PSIsInZhbHVlIjoicXl6a0YxL1N6WXZPMkM2SUxmWVRKQT09IiwibWFjIjoiNWY5MTNjMzgxZDY5MGMzMGQ5NGJkYTg1OTZkMGZjYWNjOGRhMjVmZjUyYmJkYTJlOWJlNWJmYzIzYjVlNzNlNSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Im5zdTZBeXQyR2R0NEx0OUVueUFWbGc9PSIsInZhbHVlIjoid1prbCtFeU1ibXVMazU2cnpNSVJ0UT09IiwibWFjIjoiNjNkYjM2ZTAxNTdjYmY3M2Y5N2RkNzk5MDI1OTRiOTYxYmQwZTc5MjE5M2Y5M2UxMDdkMWVlOTc5NTMzZWM2MSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $90.00
                                            </span>
                                            <span>PPK4LNPOZ38A</span>
                                        </td>
                                        <td>27 Jun 2024</td>
                                        <td>27 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkszR3Z3cHhpcWhzWWhPNCtjZ25EMlE9PSIsInZhbHVlIjoiQTFrdGhYK2ttWE1acUR1bWhJUVAyUT09IiwibWFjIjoiOTFmNzEyYTgwMjhjNTUwMzg2NjBkNmJhMDYyZmEwZDZjMDI1ZmVkY2YyNGI4ZmNhMjIyZGI3N2FiNzRlODM3MiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InBWTmRqOHdISzVFMkdXa1VDNTRiQmc9PSIsInZhbHVlIjoiQjZJeklYcGpRZVNBeWhmbTVxTEx3dz09IiwibWFjIjoiOTMwMzIyODg3Zjc4NmYzY2I4MGFmYzQwZGUzMTM0ODQyMTAyZGNiZGEzMTY3Mjg4M2VkZDY4NmFlZmYyNWNmZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $580.00
                                            </span>
                                            <span>RU1QNW18SFUE</span>
                                        </td>
                                        <td>12 Jun 2024</td>
                                        <td>12 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IklsNVQ4b2k5L2ZiM01BMklqVTJiWVE9PSIsInZhbHVlIjoiWVNlTW9sRUNWZ2hxQUM2blBJcHN5UT09IiwibWFjIjoiNDcyNWUwY2NhNTkwOWY4MGNlNmRmZDA1NGZlY2NhNGRlNmEwOTE4NjA4M2M4NDRjNGIyMGFmNmM0YTYyYzU4NiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Imlyd2dqVTMycFlOTklIdlZZODYyOVE9PSIsInZhbHVlIjoiREZUTGQvZEpPQjJOdTd5Z1VMdzlPdz09IiwibWFjIjoiYTcyZDVjMmE2ZGNmMjZhNTU2M2U5OTAwN2RhMmYzMjQwYThjZjgyMDkwNzY2MzJjNzQ5YWQyMzQwZTBmYjc4ZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $15.00
                                            </span>
                                            <span>BU75FKM7B1KW</span>
                                        </td>
                                        <td>08 Jun 2024</td>
                                        <td>08 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Iko1Y21Hb3ZZczYzK3ZHeDlyeHk4R1E9PSIsInZhbHVlIjoiWFVlcnJWek82Q0RBNUNTTjBieEkrdz09IiwibWFjIjoiOGY4MmRjNjBlMmI5OGU2NTdlNDcyZDg5ODIyMDJlNjRhYTlkMjAzZGFkNjNhN2NhYzljNzA0NDM4MmRhYjQ4NyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Ijk4eVJ0cWd2WStTM0F4bEw0czZuQlE9PSIsInZhbHVlIjoiWkRUUFg0Y21vK253dFNQNTN2UkNuUT09IiwibWFjIjoiZDA1OTQzMjUzOGJlNjAxMzMxNTM0MTg3OGJkZGM0ODAxN2IwNzFlNDFmNGJiZWFkZWYwMzRkMTNiZmQ0NmU0YiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $23,560.00
                                            </span>
                                            <span>HXM5NG9G4JXP</span>
                                        </td>
                                        <td>06 Jun 2024</td>
                                        <td>11 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlFUcFpuNW5iVFJHMVhSVlRKZS94RFE9PSIsInZhbHVlIjoicS9xeVlaenNPeE1SeGxITGJJZkp1UT09IiwibWFjIjoiYjhlZTgyOGQwMjk0YzU0N2FmNDgyNGZhNTZhOTdmOTJmY2EwMDhkMzg0ZWNiNWYxOTg4MWUwZGJmOGQyNTIwNSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlVueld5MUwvVXpiUVA3WW5GUkNNRVE9PSIsInZhbHVlIjoiWWdzMlptdjhLay9RWFdJQlhBYStnQT09IiwibWFjIjoiYWNmNTAxMjZlZjI2NTlkNDhiZDNkMjk4YjExOGJkNjdjYjI2YmNkMWIyZjFkNTgyMTE3YzFhZGRiMTk5YzgxYyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            RAJ KUMAR
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $2,808.60
                                            </span>
                                            <span>R3VNSG1WAYRU</span>
                                        </td>
                                        <td>26 May 2024</td>
                                        <td>31 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Im9nZmRiM3Bvbis3M2lkdU91NVFOd2c9PSIsInZhbHVlIjoiNmtFSk10c3JvRkVqcUVpdHMyWnRPZz09IiwibWFjIjoiMmFmMjViNzkzMjQ0NzMwMmMxNjM1MTk2NmE3NTc3ZWU2NTJjMGZkZmZlNTA4MzA1NmIyYTM0ZjBlMzM0NmZiNSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlpZaVBYQnM0NW9kSnh2SzQ1cm5SdEE9PSIsInZhbHVlIjoieDZUNDFNL09Eb05KMjdUeWNOTGxkUT09IiwibWFjIjoiZDE2Y2Y2ZDIzZmU4MzgwMmI1NDg5NGZlYjFiOTNlNDBkODIyYjAwZjI4NTBiODg3NjY0MGM4MDQ0N2YwZGQ4YSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.30
                                            </span>
                                            <span>YHFDRAPWFQF8</span>
                                        </td>
                                        <td>25 May 2024</td>
                                        <td>25 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InhIQXp6MC85WjhDMzg2SVM1Tm9HaVE9PSIsInZhbHVlIjoiUzducm5aTkZWaFVORjlQeDJrNTlvZz09IiwibWFjIjoiZDNkZGViMmY3ZWRmYzEyMWE5YzFiNDkyMTA2MWU5MzdmZTAyNDZmMWI3ODE5YjU1ZmMyMjZmYzg5OGE5NTVkOCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjJTdm81R3g4NzFhVzd2NloxbFQ1VHc9PSIsInZhbHVlIjoiaVdEbDhXZm9WTnRNRFdPNUZHUDhWZz09IiwibWFjIjoiN2Y1NWQ4NGZlMjkxZWE4MjNkZDU5NDBkYmEyNmY3NDgyYmM3OTliNjQyNjdlZGNjYmZkMjcxOGNiYWY1MTRkZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $20.00
                                            </span>
                                            <span>6F5BO9YER4YV</span>
                                        </td>
                                        <td>25 May 2024</td>
                                        <td>29 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjRPNkNaMmZFRUZGcGtyeURaUVdqU3c9PSIsInZhbHVlIjoiOW5wUFA2TGFLbXJQdHZ6bjJZSEw0dz09IiwibWFjIjoiZTVjNzZkZDE0YWJhNTM4MGY5MmI3Y2Q4OWM2ZTQwMzNhYzE3ZTczYjgyOTIzOWI0YTZlODk2NDQzYzFiMTE2MSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Im5LYXVTckoxang1UVZoOFFacEloQnc9PSIsInZhbHVlIjoiSTRPMGMwai9sWmJZSlp2MW42eXA3QT09IiwibWFjIjoiODJmNDA0YjE2OGNlMjMzOWEwYTI0OGI5YzBlN2NhYWQ0NDRlNzQ0NTRmZjAzYmY0NjBhZjU0MmUyNDI0NjJlZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.30
                                            </span>
                                            <span>AX9XB6FAHEAM</span>
                                        </td>
                                        <td>12 May 2024</td>
                                        <td>25 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlRvTzBjQjJudzZiazdLTkJUQnh1NVE9PSIsInZhbHVlIjoiek1VMlBMT1lyN1RLTVJNYjRDckZOUT09IiwibWFjIjoiOTA5ZmJjNWJjZDQyMDI3N2M5OWUxMWY5NDNmZDIyNGM0Mzc5Nzg4MTg1ZjhlMThlYWE2ZTNkYmIyMWU1MTdiYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImxtbnpFdmxBUURxdEpLQWoxdHB3OHc9PSIsInZhbHVlIjoiaDdGdndTWnlWQnp5SEc4T2Y2UjdaZz09IiwibWFjIjoiMjkxMWE1ODg5Y2IyYTZmNzFlYjc5MTJiNGFmZjhmOWY3ZTMyOTNlZWMyY2Q0YWU0YjU2YTBlYjkxMjFhNjBhYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $90.00
                                            </span>
                                            <span>51PWRRT3N5XE</span>
                                        </td>
                                        <td>12 May 2024</td>
                                        <td>12 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Ilg3UGZLdTZNN0xvR25tVE83TTFraFE9PSIsInZhbHVlIjoiUURnMkZUSlYxK05XT1RDQ3UrVVJWdz09IiwibWFjIjoiOTAzODVjNzEzNDE5NDNhNDUxNTJhYTJjOTU5YzYxNjhlNmZlYmQ0YTNkMWEwMmIxMmZkYzFlZjA4NjBlMGZkZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Im5JMXBLaENsclVhQjNqUVByejFoMmc9PSIsInZhbHVlIjoiSjBLck1jSGpodVJVcjA2MWZuT3pnQT09IiwibWFjIjoiNDk0NjZjYWJiMzJkNDJkMDVjZjJmODU1YmExZWE3OTRmMWYwMGE3NjRjY2JjYTFmYTIwZDMxZTNiZGNjZjY3ZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Srilanka
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.30
                                            </span>
                                            <span>D97T8SGOGYHC</span>
                                        </td>
                                        <td>11 May 2024</td>
                                        <td>16 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6ImFYb1V5NXEwdU9zSnFGQlJMSmxVWUE9PSIsInZhbHVlIjoiUE9NVXpsREJJdmVsMGs4b3V1Wm1ZZz09IiwibWFjIjoiYzc1OGExZjJmYmFlYTgyOTIxNTRhMGI4NWQ3ZDk4OWM5YzA2ODNkOWU5MWFkZGNjOTQ1ZWUzYjUwNTdjNGY0NyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InJJM0ljSWlndUVTYTFOK0cyRXZySlE9PSIsInZhbHVlIjoiZklndm42M0grMC9mWEkzSEdlZVVyZz09IiwibWFjIjoiM2E2ZWFjYmQzOWI4MDg5YmVmNTM0YzU0MTUzY2FmN2RlNWJhNGE0NmVmZDlkYzM0NDNhZTQzZGFjNTk4ZDNjMiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.50
                                            </span>
                                            <span>JQB69A13VQS3</span>
                                        </td>
                                        <td>11 May 2024</td>
                                        <td>18 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlhFK0d5dGY0RmdWOUZLdEx4K2hYd0E9PSIsInZhbHVlIjoiVEN1M2VST1NlbVl6Q0wxMVRFQ0VJZz09IiwibWFjIjoiZGYxODA2YWExZGI2NzIwN2NkMWNmNDY5MTQ1YmViMjFiNTBhZjNkOGI0MjlkMTY5MTc2MTllN2ZjNzI5NDU3NSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Inl2ZDRwaE5ETkZzbFdYSDMwNmRIcmc9PSIsInZhbHVlIjoiNStOVEdHNjdYYzQwWDV4T1ZqSzZ5Zz09IiwibWFjIjoiYmI3M2Q4NzcyNGJjM2UxZTg1MTIxN2MxMmZlYmI4Y2YxNjZjM2JhMTgwYmY4ZThkYWNiM2RmZWM0MmM2YWYyOCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            stafi stafi
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $11.20
                                            </span>
                                            <span>9D5K6Q1ODWCH</span>
                                        </td>
                                        <td>11 May 2024</td>
                                        <td>16 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InNVUlljVk5KVTJIZGw5UDRWNlZiZHc9PSIsInZhbHVlIjoiSnNDQkFXZ0p1MEFoQjRjczJudWxQZz09IiwibWFjIjoiOWU5N2M0YWRmOTJlMmEyMzU0Zjc5OTE1MTRiODEzMzM3YTE0YjFkZWJkMzVkMzA1NWI4N2RkN2RiOTRiMmMzYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImNqekx6eHAyWEF3ZmRsWTFRUHluc3c9PSIsInZhbHVlIjoiZWJJekRJc0JjUThHa0s3L2NoSmtydz09IiwibWFjIjoiYmI5Y2M0NDJhMmY1ZWZmNGNhZTBlZTk4NmI2YjQzOGFiY2UxNDliZGIyOWU0ODIyOTJhN2M4MGJlNmE5MjBhZSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $30.00
                                            </span>
                                            <span>QCENTTKPQPD2</span>
                                        </td>
                                        <td>09 May 2024</td>
                                        <td>18 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6ImJIekZCbzNsZjBkcmNxT0NNV0EwS0E9PSIsInZhbHVlIjoiYVNyanJpOURDSWVzb3RtUHpmMi9rZz09IiwibWFjIjoiMmU5NTgyYWE2NjUzZWRhMGYwY2ZkZmJiNTQ2MDNiZjkwYjY0MjM4ZDAxZDZiZDA0NzFkMzEzNjRjOGU1NDcxYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkpQanlyVGMwcVpnN0dOVWgzb3FmcFE9PSIsInZhbHVlIjoiS1d3MStwbnpzRStLYUk5bldoM0hrZz09IiwibWFjIjoiMDFkNzg5YTI4YzE1MjA0MjIzYjU2NWU5OTMwNmM5NWM5N2NhMDcxMjQ1ZDIzMzJhYTAyZmUwMGRhNjE4MmZjMCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
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
                        <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=2" rel="next">›</a>
                    </li>
                            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    Showing
                    <span class="fw-semibold">1</span>
                    to
                    <span class="fw-semibold">15</span>
                    of
                    <span class="fw-semibold">434</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="‹">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=2">2</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=3">3</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=4">4</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=5">5</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=6">6</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=7">7</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=8">8</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=9">9</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=10">10</a></li>
                                                                                                                                
                                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        
                        
                                                                    
                        
                        
                                                                                                                        <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=28">28</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=29">29</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/list?page=2" rel="next" aria-label="›">&rsaquo;</a>
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
        (function($) {
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
