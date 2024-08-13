
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W">

    <title>CourierLab - Dispatch Courier</title>

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
                                                                                                        <li class="sidebar-menu-item active">
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
    <h6 class="page-title">Dispatch Courier</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <form class="d-flex flex-wrap gap-2">
            <div class="input-group w-auto flex-fill">
    <input type="search" name="search" class="form-control bg--white" placeholder="Search here..." value="">
    <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
</div>
        
</form>
    <div class="input-group w-auto flex-fill">
    <input name="date" type="search" class="datepicker-here form-control bg--white pe-2 date-range" placeholder="Start Date - End Date" autocomplete="off" value="">
    <button class="btn btn--primary input-group-text"><i class="la la-search"></i></button>
</div>



    </div>
</div>

                        <div class="row">
        <div class="col-lg-12">
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
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold">35</span>
                                            <br>
                                            <span>C6P6CFUIFOUY</span>
                                        </td>
                                        <td>
                                            28 Jun 2024
                                        </td>
                                        <td>
                                            28 Jun 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjRaNm4zSmR6cXNIcWtSSDdkK2JJUHc9PSIsInZhbHVlIjoiUkExQ1R5a0lYN1BudE5FUjdBQUQ1UT09IiwibWFjIjoiNjU4MTdhYTVhNjVhNjk1NjhiYjAwNjJmZmRmNmQxZTdjNTdmYmNiZjUxMjU5MDcyM2NkZTFjMDAwMzRlMmRjYyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlA5ZVp2ZDA5aVUwL1Q3dmg1cXNIaEE9PSIsInZhbHVlIjoiQXlRbFM5cnd6YWloVGtkZWpNRUprZz09IiwibWFjIjoiMzE0YzA3N2Q0YzhlMjlhZjYyNmJhNDM3YzU3ZGIzYWVhOWY2MDYyYzU1NjdiZmU3NDVkODU0YTA2Mjg3YjNlZSIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">580</span>
                                            <br>
                                            <span>RU1QNW18SFUE</span>
                                        </td>
                                        <td>
                                            12 Jun 2024
                                        </td>
                                        <td>
                                            12 Jun 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IldlaXNHdGxERTVLYnpWb01Gck1VR2c9PSIsInZhbHVlIjoiR08vc2ZvQ3BIOFQ0YWlYWlE0VkRIdz09IiwibWFjIjoiODUxODUyMGM2MzhmMGJjZDhkYzM5NmY2NzVhMmI2NmViNmQwOTc2NDg3Y2RmZTI5NGQyYzhkYTllYjU4ZTkwNSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImpNY2NvRmFNd2QwZmsvb2gzNFpGekE9PSIsInZhbHVlIjoiT21jT1lBMDZIM0ErL0htcXBmNFIvUT09IiwibWFjIjoiZjA0NGJmOTQ2YzdkYzMwZmY4ZDg1MzliZGFjMzU5Y2E5ZGY5NzdhNDMzZGJmMjhmY2YyY2MxYmExZWQ3ZWE3NyIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">15</span>
                                            <br>
                                            <span>BU75FKM7B1KW</span>
                                        </td>
                                        <td>
                                            08 Jun 2024
                                        </td>
                                        <td>
                                            08 Jun 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkhQMHd6aWpXUUtFNlg4M1ptek1oN2c9PSIsInZhbHVlIjoiNGpoNDlVSE9uRE1TTTlybDVZUUloQT09IiwibWFjIjoiNTA2OGFkZDQ3ODdhYjgxZGJkNjkzZDFiM2RkNzMyNmQ5NGU2YWNiMTU4ZWVjZWU5ODM1OGJmZGVlNWYzMzA4YSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Ikh0d3NZMEhJUmlJbDI0bVlCVklWMlE9PSIsInZhbHVlIjoiS1Q0dW9tUTJIMGxLSDZoZE83VHRvQT09IiwibWFjIjoiOWIyYzFlM2VjMTY0NWUzNzAyZDhlZTVmZWExZjEwMTIzNjIzYjdhMDljNjMwNmY1NzRkODMzNDg3MzRkYzEzZSIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">23560</span>
                                            <br>
                                            <span>HXM5NG9G4JXP</span>
                                        </td>
                                        <td>
                                            06 Jun 2024
                                        </td>
                                        <td>
                                            11 Jun 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkIvaHg0OTcrY0M1akNGeHBJczNOZ1E9PSIsInZhbHVlIjoibTJtYU9VZ1pFY3NmaXRPVDJ4QkUydz09IiwibWFjIjoiYjRhYTZhMGZmOWUwMDAzZTQ2OTczYTRkYmU2MjU3OWQwMmZhZjYxNGM5YjZlODdiODY4MWEyZTg5Y2M5NzZhYyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlJCSTJST0J6QlVFcElPVHN6Vmh2U2c9PSIsInZhbHVlIjoiSXAyYjhod29HL3FmQ0VHc0dqK1crUT09IiwibWFjIjoiZjY0MDNmNTczMmFlYjNkYTBjNzZjNTE2MzkxYjVmZTc2MjA3NTZmNGMzZjE2NjFkMWQ2NGNhMmM5M2FiMmY0YSIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">2808.6</span>
                                            <br>
                                            <span>R3VNSG1WAYRU</span>
                                        </td>
                                        <td>
                                            26 May 2024
                                        </td>
                                        <td>
                                            31 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlRzUm85aFpNZElnc3VXRWFraVp4Q0E9PSIsInZhbHVlIjoiMHhPZ2ZZUVlackJOOWxKSG5tejh3Zz09IiwibWFjIjoiMGM2MDk5OGM2MWE5YTRiNDJjNzJmMGQzMzZjOTAwYTZjYjk5YTFmMzZmMjc2OTkzZDA0NzQ0MWRhMTJlZjJkOCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Im1samdsM0dxUXlxM2FjTTVyc2grYXc9PSIsInZhbHVlIjoibnlTQ04vc1I2bEEzTE9sMmVvTWkvZz09IiwibWFjIjoiMGEzOTBlMTZiMzcyZmY2NmRmZTQwOGY5MDE3M2U5MTQxYWVjZDQxZTZiYmM4NDNjODYzNDYxOTVhMGE0ZDdiZCIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">9.3</span>
                                            <br>
                                            <span>YHFDRAPWFQF8</span>
                                        </td>
                                        <td>
                                            25 May 2024
                                        </td>
                                        <td>
                                            25 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Imc4c2gxaUJ5S1ZLZ255WUhjRitMOGc9PSIsInZhbHVlIjoiMUdoc2doV051aVhwS05BYkJmcVBUdz09IiwibWFjIjoiMmFlY2ZhYWNkNjI4YWM1ODJkZmVmMmIwMzFjNDZhYzE4MWJkOTg2ODIzZjViMmUzMDkzZjA4NGM2ZTlhOWYzYyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkxvYVRodERJdGZIWFpWdXNKVUdaU3c9PSIsInZhbHVlIjoiTE1HMVNDWVNaQ3N3QVRqSXl2T0VQUT09IiwibWFjIjoiYTA4OTYyZTA2YTBlYmUyMTY2NTQ2ZmJhODMwODUyZDdjYzI3M2I0ZTIyNDYxYmY3MTQ2MjEwNTdlNmEyZTU4YSIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">9.3</span>
                                            <br>
                                            <span>AX9XB6FAHEAM</span>
                                        </td>
                                        <td>
                                            12 May 2024
                                        </td>
                                        <td>
                                            25 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkQ3amR6N1VwdE9RTmg3SmlBTW0xRVE9PSIsInZhbHVlIjoiR2l4NkwrcU5pdDRjV0RFMVEzcGpSQT09IiwibWFjIjoiYzA5ZTcyOTVkOTgzOTFiYzAyM2ZjMWRmYWYxNmZiZmY1N2NmYjRjNTA1OTVjMTNlY2I1MjFmYzkxZTIyZGM1YiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InlhZlZscWw3L3Y3dWpFWnVPdFRTQVE9PSIsInZhbHVlIjoicjgrVVZyYjVCUk1rQVJ2ME5RaGladz09IiwibWFjIjoiMjI3MmI5MGQ3NTk2YjM2YWU5MmNkNmFkMTBkYTAzNWExYWI1MTdkZjJmNTk2ODExOGFiZmE2ODhhNzcyYTc4MyIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">9.3</span>
                                            <br>
                                            <span>D97T8SGOGYHC</span>
                                        </td>
                                        <td>
                                            11 May 2024
                                        </td>
                                        <td>
                                            16 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6ImZrMEpUOFA0NmF4S3gwUnd1disyQUE9PSIsInZhbHVlIjoiSlBRK3hSQldLT05jNmxpbGgxekVUZz09IiwibWFjIjoiODJhMGZlY2JkNTMzNDJjNzE0M2IyMzM4NDhmY2Q4YzJhMWYwN2QxNDIwZmI4ZjM0NDM1MTQzNTIxMmNhYjdkZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlI5Y0YyOTNZNVNxcjVsTnlMdXJsTlE9PSIsInZhbHVlIjoiZWdZYUNQQW8rbU5Vck1HNDBOeDBDZz09IiwibWFjIjoiMzYyZDg4YmQxNTA1Zjc2NzA5NjJkYTA2ZjIxMWExZmUxZDI2OGVkZGYyOGFmMDBhOTVmMGM0MTZjOTkzMTkzMiIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">9.5</span>
                                            <br>
                                            <span>JQB69A13VQS3</span>
                                        </td>
                                        <td>
                                            11 May 2024
                                        </td>
                                        <td>
                                            18 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjJGVTVpYWFoL0JPNUZRT2MyQzM3WlE9PSIsInZhbHVlIjoicXNXdDMvUURwUktNY1Nzc1kxdHZtUT09IiwibWFjIjoiMjNlN2M3NjA2ODlkZjBkZThlZTdmYTM5NDBjZDZjYWE0OWEwZGRlYjYyYTQ1YjI1ZjVhZDUyYzIwYzNkNzkxNiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImdRMFRmYW9Rbm1yV21LeFhOOVMrOHc9PSIsInZhbHVlIjoiTXB2VUk4UU9Gbkx1bStHTmhWTFdZdz09IiwibWFjIjoiOWZmNzJmN2UzOTZjZjk5M2E1NmJmMDZjMjRhZDFhNjczMDk4NGE4MDgzMDYzODFjOGVmNjBhNWE1MGVlNWUxYiIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">11.2</span>
                                            <br>
                                            <span>9D5K6Q1ODWCH</span>
                                        </td>
                                        <td>
                                            11 May 2024
                                        </td>
                                        <td>
                                            16 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InYzZ1R1NVlEZUxwRWlFbGFqRFkxOHc9PSIsInZhbHVlIjoiYkFPWURSeG04WlRjblNETHNUYjlrUT09IiwibWFjIjoiM2IzNmM5ZmI3MTRhZmQ5Y2M3YWUxNjIxYjAwNTQ2ZGM3NWYxMzYzM2UzYTg3NWIyY2UyNjNhNmEyOTdmNTBlOSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjRaTElabTlLeGhseTFTcVN5NStRQ1E9PSIsInZhbHVlIjoiOVA4N1BCT3MyQzBsRGpsK2xqODllQT09IiwibWFjIjoiZGI0MDE0MTNjMzUzODEzYTUyZmMwNjYzYmNhMDcwZjc5ZDFiOWU3OGM4ODA5ZTg3YjQzNjlhMTM3NGM4NGQ1YyIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">3.4</span>
                                            <br>
                                            <span>YH18E8W6O1FY</span>
                                        </td>
                                        <td>
                                            08 May 2024
                                        </td>
                                        <td>
                                            17 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Iko5Vnh4N0p1QzU1RnRkWlJwYTFyZ3c9PSIsInZhbHVlIjoiRGptV0QrMnpweG5kTXJNN0N6SlZKQT09IiwibWFjIjoiN2U1OWVmYWY1ODk3Yjg2N2EwZWIzNmM5NDA1ZDAwYjM2MTAzZWE5NWUyZWEzNGIzMTM4ZmM0Yjc4MDEzZTdhYiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InJwN2NqUE8yc2tOSm5aMFVUaDAxZkE9PSIsInZhbHVlIjoic1l4L1FMWTE0c1RlUGpRNUJ3bWpUdz09IiwibWFjIjoiNzNiYzg3YThmMWNjMjJiNzRmZDRlNjY0YTA4YTBhMmE1MGNlZDI0YWI4NzZhMzI0MjQ2YzU2N2MxZmY5YTE0YiIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">14.8</span>
                                            <br>
                                            <span>RN1MY5EKY5JU</span>
                                        </td>
                                        <td>
                                            08 May 2024
                                        </td>
                                        <td>
                                            10 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkF4eUJ5NDZUSzJtZzk2dy9CUDRsVEE9PSIsInZhbHVlIjoiYktwak9wL1dkUm4wUUdqR3pIdkFZQT09IiwibWFjIjoiNWIzN2FkMWNhY2ExMGI0MTZiY2E2YTZlNjVjZjRhMjVlZjJkMzJkZjc3YWUyMjFmYjQ3NTNmOTc5N2RlNjZkYiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImRNNnIxUWpPYkFUSW9tbWhRVUZXUGc9PSIsInZhbHVlIjoiSVkvckZWcnhnZ0V0VGROVFdhQXBzQT09IiwibWFjIjoiYzBiMzcwZTYyNjA5YWJmNjhiOTU5Mjg2NjdmZTAwMGFkNzFjNTY5OWQzNzY5ZGRmZmY5MDRiOTg3MTQ0MTk4NyIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">43</span>
                                            <br>
                                            <span>Z48MGEYCZJA4</span>
                                        </td>
                                        <td>
                                            05 May 2024
                                        </td>
                                        <td>
                                            31 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjVhRVNORmo1dCtaemx2ZEgrVWtBcGc9PSIsInZhbHVlIjoiUDVOVk5WT1BMS21TSmtZb2ZrTEpJZz09IiwibWFjIjoiYTM4NmY0N2UwNzQyMjM5YmZlMjZiMjNkYmYyOWNjNWUxNzRlOGZhODYwNDQ5NTUyZmZlY2I3YjY1YjMwZmE3ZSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjJJTFVwQ3pSdFBVRlgvUHV3V25mV2c9PSIsInZhbHVlIjoiR2pKRjBhYlRwNHBCdFdZbjc2aUNudz09IiwibWFjIjoiY2YxN2E0MDRlOWY2MWIzN2U3ODc1NTExOWFkMzg3YjYwMjE0Y2EyNWU0MjQ0MGQ1MzBjOTk5MTg5NmQ0OGU5ZiIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">3.9</span>
                                            <br>
                                            <span>PJ2AYNQJ8324</span>
                                        </td>
                                        <td>
                                            05 May 2024
                                        </td>
                                        <td>
                                            23 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InVaeFAwU2d4ZmMvUWp3TmRnMzhpQkE9PSIsInZhbHVlIjoiMXhTOCtMd3lPT0hJdEF2dXdRTjFNdz09IiwibWFjIjoiOWUzZTAyNTI2ZDBjMzQzYzFiZjNkMjQxYWNhMTZiZmYxMTIxY2QzYjM4ODlkZmY3NDY5MWYyYWI1NDBjNjc4NCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Imx3Wlp2QXU1ZEVPTktUakZRdkpzQ2c9PSIsInZhbHVlIjoiZkJMZTB1ZXJrS2wreXFTV0tHcXJpUT09IiwibWFjIjoiNmRlNDliMjU0MTMwYTJkMTg0NzJmOGM3ODBkZTU1YmM2Nzg1OTE5Y2Q4MjUzNTdkZjQ2MDJiMzVhOWRhNTdmZiIsInRhZyI6IiJ9"
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
                                            <span class="fw-bold">250</span>
                                            <br>
                                            <span>HX1VE4SEADGT</span>
                                        </td>
                                        <td>
                                            29 Apr 2024
                                        </td>
                                        <td>
                                            03 May 2024
                                        </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkFqNDBlbFFWcnZ1bWY0ZS80dTRjcHc9PSIsInZhbHVlIjoiR0pZR0xnZzBrRHdqWkZsVkJ2a0NOdz09IiwibWFjIjoiYzQyMGI4ZTg3YWM5ZjNjMDBlZTgxZmUxMDE4NDQ4OGYwYTNkOTlkZDFlM2ZlM2Q2MmZlZWY2NzQ0NjQzODM1YiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Ild1SDN2dEtJaCtxNUhlMzgvMjRhZHc9PSIsInZhbHVlIjoiUnI1OVFtYUh1ZGVsbkowVDkvZEJLdz09IiwibWFjIjoiNmQzY2Y4NzI5ZWU4NzVkZDNhOTk5MDFjZDcwZjQ2OTA1ZDgxZDU2NzMyYTQzYTU2OWUyMjAwNzFmY2RiNTc5NCIsInRhZyI6IiJ9"
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
                        <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=2" rel="next">›</a>
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
                    <span class="fw-semibold">313</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="‹">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=2">2</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=3">3</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=4">4</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=5">5</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=6">6</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=7">7</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=8">8</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=9">9</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=10">10</a></li>
                                                                                                                                
                                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        
                        
                                                                    
                        
                        
                                                                                                                        <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=20">20</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=21">21</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch?page=2" rel="next" aria-label="›">&rsaquo;</a>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>

                    </div>
                            </div>
        </div>
    </div>

    <div id="confirmationModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation Alert!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form method="POST">
                <input type="hidden" name="_token" value="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W" autocomplete="off">                <div class="modal-body">
                    <p class="question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn--primary">Yes</button>
                </div>
            </form>
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
    (function ($) {
        "use strict";
        $(document).on('click','.confirmationBtn', function () {
            var modal   = $('#confirmationModal');
            let data    = $(this).data();
            modal.find('.question').text(`${data.question}`);
            modal.find('form').attr('action', `${data.action}`);
            modal.modal('show');
        });
    })(jQuery);
</script>
    <script>
        (function($){
            "use strict"

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
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Last 6 Months': [moment().subtract(6, 'months').startOf('month'), moment().endOf('month')],
                    'This Year': [moment().startOf('year'), moment().endOf('year')],
                },
                maxDate: moment()
            });

            const changeDatePickerText = (event, startDate, endDate) => {
                $(event.target).val(startDate.format('MMMM DD, YYYY') + ' - ' + endDate.format('MMMM DD, YYYY'));
            }

            $('.date-range').on('apply.daterangepicker', (event, picker) => changeDatePickerText(event, picker.startDate, picker.endDate));

            if ($('.date-range').val()) {
                let dateRange = $('.date-range').val().split(' - ');
                $('.date-range').data('daterangepicker').setStartDate(new Date(dateRange[0]));
                $('.date-range').data('daterangepicker').setEndDate(new Date(dateRange[1]));
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
