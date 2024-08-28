<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<!-- Include Font Awesome from a CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

@include('Components.Admin.Header')

<body>

    <div class="page-wrapper default-version">

        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo"
                style="text-align: center; display: flex; flex-direction: column; align-items: center;">
               <img src="proofs/GDR.png" alt="Logo"
                    style="border-radius: 0; width: 100px; height: 100px;
                           filter: drop-shadow(0 0 30px rgba(0, 127, 255, 1));">
               <h3 style="margin-top: 10px; color: #1F8FFF;"><b>ADMIN</b></h3>
           </div>


                <div class="sidebar__menu-wrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item active">
                            <a href="admindash" class="nav-link ">
                                <i class="menu-icon fas fa-home"></i>

                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>


                        <li class="sidebar-menu-item ">
                            <a href="order-for-courier" class="nav-link ">
                                <i class="menu-icon fas fa-clipboard-list"></i>

                                <span class="menu-title">Manage Order</span>
                            </a>
                        </li>







                    </ul>
                </div>
                <div class="version-info text-center text-uppercase">
                    <span class="text--primary">Infinitech Advertising</span>
                    <span class="text--success">V1.1 </span>
                </div>
            </div>
        </div>
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        @include('Components.Admin.Navbar')
<!-- navbar-wrapper end -->


        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">

                    <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                        <h6 class="page-title">Dashboard</h6>
                        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        </div>
                    </div>

                    <div class="row gy-4">


                        <div class="col-xxl-3 col-sm-6">
                            <a href="">
                                <div class="widget-seven bg--deep-purple  outline ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="fas fa-clock"></i> <!-- Changed to Font Awesome -->
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Waiting for Delivery</p>
                                            <h3 class="widget-seven__content-amount">5</h3>
                                        </div>
                                    </div>


                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/courier/list?status=3">
                                <div class="widget-seven bg--info  outline ">
                                    <div class="widget-seven__content">
                                        <span class="widget-seven__content-icon">
                                            <span class="icon">
                                                <i class="fas fa-list-alt"></i> <!-- Changed to Font Awesome -->
                                            </span>
                                        </span>
                                        <div class="widget-seven__description">
                                            <p class="widget-seven__content-title">Delivered</p>
                                            <h3 class="widget-seven__content-amount">116</h3>
                                        </div>
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>









                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/chart.js.2.8.0.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/charts.js"></script>

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
            "use strict"

            piChart(
                document.getElementById('userBrowserChart'),
                ["Chrome", "Firefox", "Handheld Browser", "Safari"],
                [153, 20, 35, 1]);

            piChart(
                document.getElementById('userOsChart'),
                ["Windows 10", "Mac OS X", "Android", "Linux", "iPhone", "Unknown OS Platform", "Ubuntu"],
                [146, 20, 26, 5, 9, 2, 1]);

            piChart(
                document.getElementById('userCountryChart'),
                ["Nigeria", "India", "Egypt", "Pakistan", "Indonesia"],
                [34, 28, 15, 14, 10]);
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
