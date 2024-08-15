
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Home.Header')

<body>
    
    <div class="preloader">
        <div class="loader-p"></div>
    </div>

    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

        <div class="header-top d-lg-block d-none">
    <div class="container">
        <div class="top-header-wrapper d-flex justify-content-between align-items-center flex-wrap">
            <div class="top-contact">
                <ul class="contact-list">
                    <li class="contact-list__item flex-align">
                        <span class="contact-list__item-icon flex-center">
                            <i class="las la-envelope-open"></i>                        </span>
                        <a class="contact-list__link" href="/cdn-cgi/l/email-protection#e1929491918e9395a1828e94938884938d8083cf828e8c">
                            <span class="__cf_email__" data-cfemail="8bf8fefbfbe4f9ffcbe8e4fef9e2eef9e7eae9a5e8e4e6">[email&#160;protected]</span>
                        </a>
                    </li>
                    <li class="contact-list__item flex-align">
                        <span class="contact-list__item-icon flex-center">
                            <i class="las la-phone"></i>                        </span>
                        <a class="contact-list__link" href="tel:+44 123 1217">
                            +44 123 1217
                        </a>
                    </li>
                </ul>
            </div>
                            <div class="top-button d-flex justify-content-between align-items-center flex-wrap">
                    <div class="top-button d-flex justify-content-between align-items-center flex-wrap">
                        <div class="language-box">
    <div class="custom--dropdown">
        <div class="custom--dropdown__selected dropdown-list__item">
                                                <div class="thumb">
                        <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                    </div>
                    <span class="text">English</span>
                                                                                                                        </div>
        <ul class="dropdown-list">
                                                                            <li class="dropdown-list__item langSel" data-value="hn">
                        <div class="thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                        </div>
  in                  <span class="text">Hindi</span>
                    </li>
                                                                <li class="dropdown-list__item langSel" data-value="bn">
                        <div class="thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                        </div>
                        <span class="text">Bangla</span>
                    </li>
                                                                <li class="dropdown-list__item langSel" data-value="sp">
                        <div class="thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                        </div>
                        <span class="text">Spanish</span>
                    </li>
                                    </ul>
    </div>
</div>
                    </div>
                </div>
                    </div>
    </div>
</div>
@include('Components.Home.Navbar')


            <section class="breadcrumb bg-img mb-0"
    data-background-image="https://script.viserlab.com/courierlab/demo/assets/images/frontend/breadcrumb/6652bfd4ad66b1716699092.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title">Order Tracking</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section style="padding: 60px 0; background: #f9f9f9;">
    <div style="max-width: 900px; margin: 0 auto; padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center; margin-bottom: 40px;">
            <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">Trucking Booking Form</h3>
            <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the transportation of your goods.</p>
        </div>
        <form action="{{ route('booking.submit') }}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Sender Information -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="sender-name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Sender Name</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="sender-name" name="sender_name" type="text" placeholder="Enter Sender's Name" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="pickup-address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Pickup Address</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="pickup-address" name="pickup_address" type="text" placeholder="Enter Pickup Address" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
    <label for="sender-phone" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Sender Phone Number</label>
    <input
        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
        id="sender-phone"
        name="sender_phone"
        type="number"
        placeholder="Enter Sender's Phone Number"
        required
        maxlength="11"
        pattern="\d{11}"
        title="Please enter exactly 11 digits."
    >
</div>

    </div>

    <!-- Item List and Weight -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="item-list" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Item List (Picture)</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="item-list" name="item_list" type="file" accept="image/*" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="weight" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Est. Weight</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="weight" name="weight" type="number" step="0.01" placeholder="Enter Weight (kg)" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="weight" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Quantity</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="quantity" name="quantity" type="number" step="0.01" placeholder="Enter Quantity" required>
        </div>
    </div>

    <!-- List of Products -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="list-of-products" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">List of Products</label>
            <textarea style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="list-of-products" name="list_of_products" placeholder="Enter List of Products" rows="4" required></textarea>
        </div>
    </div>

    <!-- Receiver Information -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="receiver-name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Receiver Name</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="receiver-name" name="receiver_name" type="text" placeholder="Enter Receiver's Name" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="receiver-email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Receiver Email</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="receiver-email" name="receiver_email" type="email" placeholder="Enter Receiver's Email" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="receiver-phone" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Receiver Phone Number</label>
            <input
        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
        id="receiver-phone"
        name="receiver_phone"
        type="number"
        placeholder="Enter Receiver's Phone Number"
        required
        maxlength="11"
        pattern="\d{11}"
        title="Please enter exactly 11 digits."
    >


        </div>
    </div>

    <!-- Drop-off Address -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="dropoff-address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Drop-off Address</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="dropoff-address" name="dropoff_address" type="text" placeholder="Enter Drop-off Address" required>
        </div>
    </div>

    <!-- Truck Type -->
    <div style="margin-bottom: 30px;">
        <label for="truck-type" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Truck Type</label>
        <select style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="truck-type" name="truck_type" required>
            <option value="" disabled selected>Select Truck Type</option>
            @foreach($vehicles as $vehicle)
                <option value="{{ $vehicle->truck_name }}">{{ $vehicle->truck_name }} {{ $vehicle->truck_capacity }}</option>
            @endforeach
        </select>
    </div>

    <!-- Submit Button -->
    <div style="text-align: center;">
        <button style="padding: 12px 24px; background-color: #007bff; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s ease;" type="submit">
            Submit Booking
        </button>
    </div>
</form>

    </div>
</section>




    

    <footer class="footer-area">
    <div class="main-footer pt-120 bg-img pb-60"
        data-background-image="https://script.viserlab.com/courierlab/demo/assets/images/frontend/footer/6652c13f31df61716699455.png">
        <div class="container">
            <div class="row justify-content-center gy-5">
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <div class="footer-item__logo">
                            <a href="https://script.viserlab.com/courierlab/demo">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/logo.png" alt="Logo">
                            </a>
                        </div>
                        <p class="footer-item__desc fs-18">
                            We are world biggest courier company. We provides fast &amp; secure delivery services. Any where in the world.
                        </p>
                        <ul class="social-list">
                                                            <li class="social-list__item">
                                    <a class="social-list__link flex-center" href="https://www.facebook.com/" target="__blank">
                                        <i class="fab fa-facebook-f"></i>                                    </a>
                                </li>
                                                            <li class="social-list__item">
                                    <a class="social-list__link flex-center" href="https://www.twitter.com/" target="__blank">
                                        <i class="fa-brands fa-x-twitter"></i>                                    </a>
                                </li>
                                                            <li class="social-list__item">
                                    <a class="social-list__link flex-center" href="https://www.linkedin.com/" target="__blank">
                                        <i class="fab fa-linkedin-in"></i>                                    </a>
                                </li>
                                                            <li class="social-list__item">
                                    <a class="social-list__link flex-center" href="https://www.instagram.com/" target="__blank">
                                        <i class="fab fa-instagram"></i>                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <h5 class="footer-item__title">Site Link</h5>
                        <ul class="footer-menu">
                            <li class="footer-menu__item">
                                <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo">
                                    Home                                </a>
                            </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/about-us">
                                        About
                                    </a>
                                </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/faq">
                                        FAQ
                                    </a>
                                </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/service">
                                        Service
  in                            </a>
                                </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/team">
                                        Team
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <h5 class="footer-item__title">Useful Link</h5>
                        <ul class="footer-menu">
                            <li class="footer-menu__item">
                                <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/order-tracking">
                                    Order Tracking                                </a>
                            </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/policy/privacy-policy">
                                        Privacy Policy
                                    </a>
                                </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/policy/terms-of-service">
                                        Terms of Service
                                    </a>
                                </li>
                                                            <li class="footer-menu__item">
                                    <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/policy/refund-policy">
                                        Refund Policy
                                    </a>
                                </li>
                                                        <li class="footer-menu__item">
                                <a class="footer-menu__link" href="https://script.viserlab.com/courierlab/demo/contact">
                                    Contact                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <h5 class="footer-item__title"> Contact With Us </h5>
                        <ul class="footer-contact-menu">
                            <li class="footer-contact-menu__item">
                                <div class="footer-contact-menu__item-icon">
                                    <i class="las la-map-marker"></i>                                </div>
                                <div class="footer-contact-menu__item-content">
                                    <p class="title">Address </p>
                                    <span class="desc fs-14 d-block">London, UK</span>
                                </div>
                            </li>
                            <li class="footer-contact-menu__item">
                                <div class="footer-contact-menu__item-icon">
                                    <i class="las la-phone"></i>                                </div>
                                <div class="footer-contact-menu__item-content">
                                    <p class="title">Mobile</p>
                                    <a class="desc fs-14 d-block" href="tel:+44 123 1217">
                                        +44 123 1217
                                    </a>
                                </div>
                            </li>
                            <li class="footer-contact-menu__item">
                                <div class="footer-contact-menu__item-icon">
                                    <i class="las la-envelope-open"></i>                                </div>
                                <div class="footer-contact-menu__item-content">
                                    <p class="title">Email</p>
                                    <a class="desc fs-14 d-block" href="/cdn-cgi/l/email-protection#6b181e1b1b04191f2b08041e19020e19070a0945080406">
                                        <span class="__cf_email__" data-cfemail="51222421213e232511323e24233834233d30337f323e3c">[email&#160;protected]</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer py-3">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-12 text-center">
                    <div class="bottom-footer-text text-white">
                        Copyright &copy; 2024.
                        All Rights Reserved                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    
    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/templates/sleek_craft/js/slick.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/templates/sleek_craft/js/odometer.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/templates/sleek_craft/js/viewport.jquery.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/templates/sleek_craft/js/main.js"></script>

    
    
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

        <script>
        /*==================== custom dropdown select js ====================*/
        (function($) {
            ("use strict");
            $('.custom--dropdown > .custom--dropdown__selected').on('click', function() {
                $(this).parent().toggleClass('open');
            });

            $('.custom--dropdown > .dropdown-list > .dropdown-list__item').on('click', function() {
                $('.custom--dropdown > .dropdown-list > .dropdown-list__item').removeClass('selected');
                $(this).addClass('selected').parent().parent().removeClass('open').children(
                    '.custom--dropdown__selected').html($(this).html());
            });

            $(document).on('keyup', function(evt) {
                if ((evt.keyCode || evt.which) === 27) {
                    $('.custom--dropdown').removeClass('open');
                }
            });
            $(document).on('click', function(evt) {
                if ($(evt.target).closest(".custom--dropdown > .custom--dropdown__selected").length === 0) {
                    $('.custom--dropdown').removeClass('open');
                }
            });
        })(jQuery);

        /*==================== custom dropdown select js end  ====================*/
    </script>

    <script>
        (function($) {
            "use strict";

                            $(".langSel").on("click", function() {
                    window.location.href = "https://script.viserlab.com/courierlab/demo/change/" + $(this).data('value');
                });
            
            $('.policy').on('click', function() {
                $.get(`https://script.viserlab.com/courierlab/demo/cookie/accept`, function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function(i, element) {
                var elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }
            });

            let disableSubmission = false;
            $('.disableSubmission').on('submit', function(e) {
                if (disableSubmission) {
                    e.preventDefault()
                } else {
                    disableSubmission = true;
                }
            });
        })(jQuery);
    </script>


<script>
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>

<script>
if (window.top != window.self) {
    document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
}
</script>


<script>
    adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll  = w.adroll  || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async  = 1;
        e.src  = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1ME4K0RD7K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1ME4K0RD7K');
</script>
</body>

</html>
