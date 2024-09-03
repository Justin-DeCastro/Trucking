<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap");
* {
    font-family: "Roboto", sans-serif;
    text-align: center;
}
body {
    background: #ebf5fc;
}
.clock {
    color: #000;
    font-size: 56px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
}
h2 {
    color: #85c1e9;
    padding: 30px;
}
#m {
    margin: 0 10px 0 10px;
}
.bg {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 4em;
    height: 4em;
    background: inherit;
    position: relative;
    border-radius: 50%;
    box-shadow: inset -2px -2px 5px rgba(255, 255, 255, 1),
        inset 3px 3px 5px rgba(0, 0, 0, 0.2);
}
.bg:last-child {
    display: flex;
    align-items: center;
    justify-content: center;
    background: inherit;
    position: relative;
    margin-left: 20px;
    width: 2em;
    height: 2em;
    font-size: 16px;
    padding: 15px;
    border-radius: 50%;
    box-shadow: inset -2px -2px 5px rgba(255, 255, 255, 1),
        inset 3px 3px 5px rgba(0, 0, 0, 0.2);
}

</style>
@include('Components.Admin.header')

<body>

    <div class="page-wrapper default-version">

       @include('Components.Accounting.Sidebar')

        {{-- <nav class="navbar-wrapper bg--dark d-flex flex-wrap"> --}}

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
                                    <span class="navbar-user__name">Accounting</span>
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


        <div class="clock">
            <div class="bg">
                <h2 id="h">12</h2>
            </div>
            <h2>:</h2>
            <div class="bg">
                <h2 id="m">20</h2>
            </div>
            <h2>:</h2>
            <div class="bg">
                <h2 id="s">00</h2>
            </div>
            <div class="bg">
                <h2 id="ap">AM</h2>
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
    <script>
        "use strict";
        var routes = [{ "admin.branch.manager.staff.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/{id}" }, { "admin.branch.manager.staff": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/dashboard\/{id}" }, { "admin.staff.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/staff" }, { "manager.staff.create": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/create" }, { "manager.staff.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/list" }, { "manager.staff.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/store" }, { "manager.staff.edit": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/edit\/{id}" }, { "manager.staff.status": "https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/status\/{id}" }, { "staff.login": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff" }, { "staff.": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff" }, { "staff.logout": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/logout" }, { "staff.password.request": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/reset" }, { "staff.password.email": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/email" }, { "staff.password.code.verify": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/code-verify" }, { "staff.password.verify.code": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/verify-code" }, { "staff.password.reset.form": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/{token}" }, { "staff.password.change": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/change" }, { "staff.dashboard": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/dashboard" }, { "staff.password": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password" }, { "staff.profile": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile" }, { "staff.profile.update.data": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile\/update" }, { "staff.password.update.data": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/update" }, { "staff.ticket.delete": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/delete\/{id}" }, { "staff.branch.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/list" }, { "staff.branch.income": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/income" }, { "staff.courier.create": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send" }, { "staff.courier.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/store" }, { "staff.courier.update": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/update\/{id}" }, { "staff.courier.edit": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/edit\/{id}" }, { "staff.courier.invoice": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/invoice\/{id}" }, { "staff.courier.delivery.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list" }, { "staff.courier.details": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/details\/{id}" }, { "staff.courier.payment": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/payment" }, { "staff.courier.delivery": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/store" }, { "staff.courier.manage.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/list" }, { "staff.courier.date.search": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/date\/search" }, { "staff.courier.search": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/search" }, { "staff.courier.manage.sent.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send\/list" }, { "staff.courier.received.list": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/received\/list" }, { "staff.courier.sent.queue": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/sent\/queue" }, { "staff.courier.dispatch.all": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch-all" }, { "staff.courier.dispatch": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch" }, { "staff.courier.dispatched": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/status\/{id}" }, { "staff.courier.upcoming": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/upcoming" }, { "staff.courier.receive": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/receive\/{id}" }, { "staff.courier.delivery.queue": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/queue" }, { "staff.courier.manage.delivered": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list\/total" }, { "staff.cash.courier.income": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/cash\/collection" }, { "staff.search.customer": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/customer\/search" }, { "staff.ticket.index": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket" }, { "staff.ticket.open": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/new" }, { "staff.ticket.store": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/create" }, { "staff.ticket.view": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/view\/{ticket}" }, { "staff.ticket.reply": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/reply\/{ticket}" }, { "staff.ticket.close": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/close\/{ticket}" }, { "staff.ticket.download": "https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/download\/{ticket}" }];
        var settingsData = Object.assign({}, { "dashboard": { "keyword": ["Dashboard", "Home", "Panel", "staff", "Control center", "Overview", "Main hub", "Management hub", "Central hub", "Command center", "Centralized interface", "staff console", "Management dashboard", "Main screen", "Command dashboard", "staff control panel"], "title": "Dashboard", "icon": "las la-home", "route_name": "staff.dashboard", "menu_active": "staff.dashboard" }, "send_courier": { "keyword": ["send courier"], "title": "Send Courier", "icon": "las la-shipping-fast", "route_name": "staff.courier.create", "menu_active": "staff.courier.create" }, "sent_in_queue": { "keyword": ["sent in queue"], "title": "Sent In Queue", "icon": "las la-hourglass-start", "route_name": "staff.courier.sent.queue", "menu_active": "staff.courier.sent.queue" }, "shipping_courier": { "keyword": ["shipping", "shipping courier"], "title": "Shipping Courier", "icon": "las la-sync", "route_name": "staff.courier.dispatch", "menu_active": "staff.courier.dispatch" }, "upcoming_courier": { "keyword": ["upcoming", "upcoming courier"], "title": "Upcoming Courier", "icon": "las la-history", "route_name": "staff.courier.upcoming", "menu_active": "staff.courier.upcoming", "counter": "upcomingCount" }, "delivery_in_queue": { "keyword": ["delivery", "delivery in queue", "delivery courier"], "title": "Delivery In Queue", "icon": "lab la-accessible-icon", "route_name": "staff.courier.delivery.queue", "menu_active": "staff.courier.delivery.queue" }, "manage_courier": { "title": "Manage Courier", "icon": "las la-sliders-h", "menu_active": ["staff.courier.manage*"], "submenu": [{ "keyword": ["total sent", "total sent querier"], "title": "Total Sent", "route_name": "staff.courier.manage.sent.list", "menu_active": "staff.courier.manage.sent.list" }, { "keyword": ["total delivered"], "title": "Total Delivered", "route_name": "staff.courier.manage.delivered", "menu_active": "staff.courier.manage.delivered" }, { "keyword": ["all courier"], "title": "All Courier", "route_name": "staff.courier.manage.list", "menu_active": "staff.courier.manage.list" }] }, "branch_list": { "keyword": ["branch", "branch list"], "title": "Branch List", "icon": "las la-university", "route_name": "staff.branch.index", "menu_active": "staff.branch.index" }, "cash_collection": { "keyword": ["cash", "cash collection"], "title": "Cash Collection", "icon": "las la-wallet", "route_name": "staff.cash.courier.income", "menu_active": "staff.cash.courier.income" }, "support_ticket": { "keyword": ["ticket", "support ticket"], "title": "Support Ticket", "icon": "las la-ticket-alt", "route_name": "staff.ticket.index", "menu_active": "ticket*" } });
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
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

    realTime();

    });


    function realTime() {

    var date = new Date();
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var halfday = "AM";
    halfday = (hour >= 12) ? "PM" : "AM";
    hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour);
    hour = update(hour);
    min = update(min);
    sec = update(sec);
    document.getElementById("h").innerText = hour;
    document.getElementById("m").innerText = min;
    document.getElementById("s").innerText = sec;
    document.getElementById("ap").innerText = halfday;

    setTimeout(realTime, 1000);
    }

    function update(k) {
    if (k < 10) { return "0" + k; } else { return k; } }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
