
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

@include('Components.Admin.Header')

<body>

        
    <div class="page-wrapper default-version">


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
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit Website">
                    <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i class="las la-globe"></i></a>
                </button>
            </li>
            <li class="dropdown">
                <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown" data-display="static"
                    aria-haspopup="true" aria-expanded="false">
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
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
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
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="System Setting">
                    <a href="https://script.viserlab.com/courierlab/demo/admin/system-setting"><i class="las la-wrench"></i></a>
                </button>
            </li>
            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/images/profile/667c14b5145fd1719407797.png" alt="image"></span>
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

                    <a href="https://script.viserlab.com/courierlab/demo/admin/logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
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
    <h6 class="page-title">Support Tickets</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <form class="d-flex flex-wrap gap-2">
            <div class="input-group w-auto flex-fill">
    <input type="search" name="search" class="form-control bg--white" placeholder="Search here..." value="">
    <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
</div>
        
</form>
    </div>
</div>

                        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Submitted By</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Last Reply</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/36" class="fw-bold">
                                                [Ticket#24608318] Taxa de liberação da alfandega...
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Fabio dos Santos</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/36"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/35" class="fw-bold">
                                                [Ticket#18512453] Box
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Cleberson bentto</p></td>
                                        <td><span class="badge badge--warning">Customer Reply</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/35"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/34" class="fw-bold">
                                                [Ticket#71888988] qwfgjfh
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> 1235678</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/34"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/33" class="fw-bold">
                                                [Ticket#51397034] Encomenda Taxada pela Receita...
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> HELDER LUCIO DA SILVA SOARES</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/33"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/32" class="fw-bold">
                                                [Ticket#91815350] Corporis nisi iusto
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Wendy Tucker</p></td>
                                        <td><span class="badge badge--warning">Customer Reply</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/32"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/31" class="fw-bold">
                                                [Ticket#45811281] Exercitationem nihil
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Kevyn Mccarthy</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/31"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/30" class="fw-bold">
                                                [Ticket#19982825] order #2265
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Leoncio Pedrosa Lima</p></td>
                                        <td><span class="badge badge--warning">Customer Reply</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/30"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/29" class="fw-bold">
                                                [Ticket#05202253] Pedido #1708
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Alejandro Safa</p></td>
                                        <td><span class="badge badge--warning">Customer Reply</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/29"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/28" class="fw-bold">
                                                [Ticket#12970580] about this pending money
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Sunday Daniel</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>2 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/28"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/27" class="fw-bold">
                                                [Ticket#85650340] Adipisci voluptas ei
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Claire Mcdonald</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>3 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/27"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/26" class="fw-bold">
                                                [Ticket#87297828] I want to purchase this Softwa...
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Saddam Zardari</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>3 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/26"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/25" class="fw-bold">
                                                [Ticket#42271375] Hello
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Hi</p></td>
                                        <td><span class="badge badge--warning">Customer Reply</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>4 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/25"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/24" class="fw-bold">
                                                [Ticket#72876653] test
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> test</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>5 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/24"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/23" class="fw-bold">
                                                [Ticket#32546038] report
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Ngwu Maxwell</p></td>
                                        <td><span class="badge badge--warning">Customer Reply</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>5 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/23"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/22" class="fw-bold">
                                                [Ticket#74957244] Qui aliquam nihil qu
                                            </a>
                                        </td>
                                        <td><p class="fw-bold"> Remedios Johns</p></td>
                                        <td><span class="badge badge--success">Open</span></td>
                                        <td>
                                                                                            <span class="badge  badge--warning">Medium</span>
                                                                                    </td>
                                        <td>6 months ago</td>
                                        <td>
                                            <a href="https://script.viserlab.com/courierlab/demo/admin/ticket/view/22"
                                                class="btn btn-sm btn-outline--primary ms-1">
                                                <i class="las la-desktop"></i> Details                                            </a>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table><!-- table end -->
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
                        <a class="page-link" href="https://script.viserlab.com/courierlab/demo/admin/ticket?page=2" rel="next">›</a>
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
                    <span class="fw-semibold">36</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="‹">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/admin/ticket?page=2">2</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/admin/ticket?page=3">3</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://script.viserlab.com/courierlab/demo/admin/ticket?page=2" rel="next" aria-label="›">&rsaquo;</a>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>

                    </div>
                            </div><!-- card end -->
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="Admin/js/jquery-3.7.1.min.js"></script>
    <script src="Admin/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/js/bootstrap-toggle.min.js"></script>

    <link href="Admin/css/iziToast.min.css" rel="stylesheet">
<link href="Admin/css/iziToast_custom.css" rel="stylesheet">
<script src="Admin/js/iziToast.min.js"></script>



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
    
    <script src="Admin/js/nicEdit.js"></script>

    <script src="Admin/js/select2.min.js"></script>
    <script src="Admin/js/app.js"></script>

    
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
    if ($('li').hasClass('active')) {
        $('.sidebar__menu-wrapper').animate({
            scrollTop: eval($(".active").offset().top - 320)
        }, 500);
    }
</script>
@include('Components.Admin.Script')
<script src="Admin/js/search.js"></script>
<script>
    "use strict";
    function getEmptyMessage(){
        return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
  i            <p class="text-muted">No search result found</p>
                </div>
            </li>`
    }
</script>
</body>

</html>
