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