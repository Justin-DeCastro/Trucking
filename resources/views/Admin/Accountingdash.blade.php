<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Admin.header')

<body>

    <div class="page-wrapper default-version">

        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="https://script.viserlab.com/courierlab/demo/staff/dashboard" class="sidebar__main-logo">
                        <img src="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/logo.png"
                            alt="image">
                    </a>
                </div>
                <div class="sidebar__menu-wrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item active">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/dashboard" class="nav-link ">
                                <i class="menu-icon fas fa-home"></i>
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
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/sent/queue"
                                class="nav-link ">
                                <i class="menu-icon las la-hourglass-start"></i>
                                <span class="menu-title">Sent In Queue</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch"
                                class="nav-link ">
                                <i class="menu-icon las la-sync"></i>
                                <span class="menu-title">Shipping Courier</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/upcoming"
                                class="nav-link ">
                                <i class="menu-icon las la-history"></i>
                                <span class="menu-title">Upcoming Courier</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/queue"
                                class="nav-link ">
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
                                        <a href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Total Sent</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/list/total"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Total Delivered</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/courierlab/demo/staff/courier/list"
                                            class="nav-link">
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
                            <a href="https://script.viserlab.com/courierlab/demo/staff/cash/collection"
                                class="nav-link ">
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
                            <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i
                                    class="las la-globe"></i></a>
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
                                    <span class="navbar-user__name">Accounting</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">


                            <a href="logout"
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
                        <h6 class="page-title">Dashboard</h6>
                        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                            <div class="d-flex flex-wrap justify-content-end">
                                <h3>Philippines</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/sent/queue">
                                <div class="widget-seven bg--purple ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="fas fa-hourglass-start"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Send in Queue</p>
                                            <h3 class="widget-seven__content-amount">0</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/upcoming">
                                <div class="widget-seven bg--cyan ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-history"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Upcoming Courier</p>
                                            <h3 class="widget-seven__content-amount">0</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/dispatch">
                                <div class="widget-seven bg--primary ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-dolly"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Total Shipping Courier</p>
                                            <h3 class="widget-seven__content-amount">313</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/queue">
                                <div class="widget-seven bg--pink ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="lab la-accessible-icon"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Delivery in Queue</p>
                                            <h3 class="widget-seven__content-amount">0</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list">
                                <div class="widget-seven bg--green ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-check-double"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Total Sent</p>
                                            <h3 class="widget-seven__content-amount">384</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/list/total">
                                <div class="widget-seven bg--deep-purple ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-list-alt"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Total Delivered</p>
                                            <h3 class="widget-seven__content-amount">28</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/branch/list">
                                <div class="widget-seven bg--lime ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-university"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Total Branch</p>
                                            <h3 class="widget-seven__content-amount">4</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/cash/collection">
                                <div class="widget-seven bg--orange ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-money-bill-wave"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Total Cash Collection</p>
                                            <h3 class="widget-seven__content-amount">$1,129,810.15</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/staff/courier/list">
                                <div class="widget-seven bg--teal ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="las la-shipping-fast"></i>
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">All Courier</p>
                                            <h3 class="widget-seven__content-amount">4334</h3>
                                        </div>
                                    </div>

                                    <span class="widget-seven__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row mt-30 ">
                        <div class="col-lg-12">
                            <div class="card  ">
                                <div class="card-header mb-1">
                                    <h6>Upcoming Courier</h6>
                                </div>
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
                                                    <td class="text-muted text-center" colspan="100%">Data not found
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="paymentBy">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="" lass="modal-title" id="exampleModalLabel">Payment Confirmation</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="las la-times"></i>
                                    </button>
                                </div>
                                <form action="https://script.viserlab.com/courierlab/demo/staff/courier/payment"
                                    method="POST">
                                    <input type="hidden" name="_token" value="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W"
                                        autocomplete="off"> <input type="hidden" name="_method" value="POST"> <input
                                        type="hidden" name="code">
                                    <div class="modal-body">
                                        <p>Are you sure to collect this amount?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn--dark" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn--primary">Yes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="deliveryBy">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="" lass="modal-title" id="exampleModalLabel">Delivery Confirmation</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                                <form action="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/store"
                                    method="POST">
                                    <input type="hidden" name="_token" value="iQdGnQclGHVc4Uhh3RU4s02p3rw6e9bJ14kpKP1W"
                                        autocomplete="off"> <input type="hidden" name="_method" value="POST"> <input
                                        type="hidden" name="code">
                                    <div class="modal-body">
                                        <p>Are you sure to delivery this courier?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn--dark"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn--primary">Confirm</button>
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
        (function () {
            'use strict';
            $('.payment').on('click', function () {
                var modal = $('#paymentBy');
                modal.find('input[name=code]').val($(this).data('code'))
                modal.modal('show');
            });

            $('.delivery').on('click', function () {
                var modal = $('#deliveryBy');
                modal.find('input[name=code]').val($(this).data('code'))
                modal.modal('show');
            });
        })(jQuery())
    </script>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
    {{-- <script>
        "use strict";
        var routes = [{ "admin.branch.manager.staff.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/{id}" }, { "admin.branch.manager.staff": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/dashboard\/{id}" }, { "admin.staff.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/staff" }, { "manager.staff.create": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/create" }, { "manager.staff.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/list" }, { "manager.staff.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/store" }, { "manager.staff.edit": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/edit\/{id}" }, { "manager.staff.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/status\/{id}" }, { "staff.login": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff" }, { "staff.": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff" }, { "staff.logout": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/logout" }, { "staff.password.request": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/reset" }, { "staff.password.email": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/email" }, { "staff.password.code.verify": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/code-verify" }, { "staff.password.verify.code": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/verify-code" }, { "staff.password.reset.form": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/{token}" }, { "staff.password.change": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/change" }, { "staff.dashboard": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/dashboard" }, { "staff.password": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password" }, { "staff.profile": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile" }, { "staff.profile.update.data": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile\/update" }, { "staff.password.update.data": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/update" }, { "staff.ticket.delete": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/delete\/{id}" }, { "staff.branch.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/list" }, { "staff.branch.income": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/income" }, { "staff.courier.create": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send" }, { "staff.courier.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/store" }, { "staff.courier.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/update\/{id}" }, { "staff.courier.edit": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/edit\/{id}" }, { "staff.courier.invoice": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/invoice\/{id}" }, { "staff.courier.delivery.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list" }, { "staff.courier.details": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/details\/{id}" }, { "staff.courier.payment": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/payment" }, { "staff.courier.delivery": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/store" }, { "staff.courier.manage.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/list" }, { "staff.courier.date.search": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/date\/search" }, { "staff.courier.search": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/search" }, { "staff.courier.manage.sent.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send\/list" }, { "staff.courier.received.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/received\/list" }, { "staff.courier.sent.queue": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/sent\/queue" }, { "staff.courier.dispatch.all": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch-all" }, { "staff.courier.dispatch": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch" }, { "staff.courier.dispatched": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/status\/{id}" }, { "staff.courier.upcoming": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/upcoming" }, { "staff.courier.receive": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/receive\/{id}" }, { "staff.courier.delivery.queue": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/queue" }, { "staff.courier.manage.delivered": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list\/total" }, { "staff.cash.courier.income": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/cash\/collection" }, { "staff.search.customer": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/customer\/search" }, { "staff.ticket.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket" }, { "staff.ticket.open": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/new" }, { "staff.ticket.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/create" }, { "staff.ticket.view": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/view\/{ticket}" }, { "staff.ticket.reply": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/reply\/{ticket}" }, { "staff.ticket.close": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/close\/{ticket}" }, { "staff.ticket.download": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/download\/{ticket}" }];
        var settingsData = Object.assign({}, { "dashboard": { "keyword": ["Dashboard", "Home", "Panel", "staff", "Control center", "Overview", "Main hub", "Management hub", "Central hub", "Command center", "Centralized interface", "staff console", "Management dashboard", "Main screen", "Command dashboard", "staff control panel"], "title": "Dashboard", "icon": "las la-home", "route_name": "staff.dashboard", "menu_active": "staff.dashboard" }, "send_courier": { "keyword": ["send courier"], "title": "Send Courier", "icon": "las la-shipping-fast", "route_name": "staff.courier.create", "menu_active": "staff.courier.create" }, "sent_in_queue": { "keyword": ["sent in queue"], "title": "Sent In Queue", "icon": "las la-hourglass-start", "route_name": "staff.courier.sent.queue", "menu_active": "staff.courier.sent.queue" }, "shipping_courier": { "keyword": ["shipping", "shipping courier"], "title": "Shipping Courier", "icon": "las la-sync", "route_name": "staff.courier.dispatch", "menu_active": "staff.courier.dispatch" }, "upcoming_courier": { "keyword": ["upcoming", "upcoming courier"], "title": "Upcoming Courier", "icon": "las la-history", "route_name": "staff.courier.upcoming", "menu_active": "staff.courier.upcoming", "counter": "upcomingCount" }, "delivery_in_queue": { "keyword": ["delivery", "delivery in queue", "delivery courier"], "title": "Delivery In Queue", "icon": "lab la-accessible-icon", "route_name": "staff.courier.delivery.queue", "menu_active": "staff.courier.delivery.queue" }, "manage_courier": { "title": "Manage Courier", "icon": "las la-sliders-h", "menu_active": ["staff.courier.manage*"], "submenu": [{ "keyword": ["total sent", "total sent querier"], "title": "Total Sent", "route_name": "staff.courier.manage.sent.list", "menu_active": "staff.courier.manage.sent.list" }, { "keyword": ["total delivered"], "title": "Total Delivered", "route_name": "staff.courier.manage.delivered", "menu_active": "staff.courier.manage.delivered" }, { "keyword": ["all courier"], "title": "All Courier", "route_name": "staff.courier.manage.list", "menu_active": "staff.courier.manage.list" }] }, "branch_list": { "keyword": ["branch", "branch list"], "title": "Branch List", "icon": "las la-university", "route_name": "staff.branch.index", "menu_active": "staff.branch.index" }, "cash_collection": { "keyword": ["cash", "cash collection"], "title": "Cash Collection", "icon": "las la-wallet", "route_name": "staff.cash.courier.income", "menu_active": "staff.cash.courier.income" }, "support_ticket": { "keyword": ["ticket", "support ticket"], "title": "Support Ticket", "icon": "las la-ticket-alt", "route_name": "staff.ticket.index", "menu_active": "ticket*" } });
        $('.navbar__action-list .dropdown-menu').on('click', function (event) {
            event.stopPropagation();
        });
    </script> --}}

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
