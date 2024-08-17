<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="Home/js/jquery-3.7.1.min.js"></script>
    <script src="Home/js/bootstrap.bundle.min.js"></script>

    <script src="Home/js/slick.min.js"></script>
    <script src="Home/js/odometer.min.js"></script>
    <script
        src="Homejs/viewport.jquery.js"></script>
    <script src="Home/js/main.js"></script>



    <link href="Home/css/iziToast.min.css" rel="stylesheet">
    <link href="Home/css/iziToast_custom.css" rel="stylesheet">
    <script src="Home/js/iziToast.min.js"></script>

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

    <script>
        /*==================== custom dropdown select js ====================*/
        (function ($) {
            ("use strict");
            $('.custom--dropdown > .custom--dropdown__selected').on('click', function () {
                $(this).parent().toggleClass('open');
            });

            $('.custom--dropdown > .dropdown-list > .dropdown-list__item').on('click', function () {
                $('.custom--dropdown > .dropdown-list > .dropdown-list__item').removeClass('selected');
                $(this).addClass('selected').parent().parent().removeClass('open').children(
                    '.custom--dropdown__selected').html($(this).html());
            });

            $(document).on('keyup', function (evt) {
                if ((evt.keyCode || evt.which) === 27) {
                    $('.custom--dropdown').removeClass('open');
                }
            });
            $(document).on('click', function (evt) {
                if ($(evt.target).closest(".custom--dropdown > .custom--dropdown__selected").length === 0) {
                    $('.custom--dropdown').removeClass('open');
                }
            });
        })(jQuery);

        /*==================== custom dropdown select js end  ====================*/
    </script>

   


    

    <script>
        if (window.top != window.self) {
            document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' + window.self.location + '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
        }
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
        adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
        adroll_version = "2.0";
        (function (w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
                    return function () {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1ME4K0RD7K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-1ME4K0RD7K');
    </script>