
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
                            <a class="contact-list__link" href="mailto:example@gmail.com">
    <span>example@gmail.com</span>
</a>
                    </li>
                    <li class="contact-list__item flex-align">
                        <span class="contact-list__item-icon flex-center">
                            <i class="las la-phone"></i>                        </span>
                        <a class="contact-list__link" href="tel:+44 123 1217">
                            +639123456789
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
                        <span class="text">Hindi</span>
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
                    <h2 class="breadcrumb__title">FAQ</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    
                            <section class="faq py-120 section-bg">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="section-heading style-left">
                    <h3 class="section-heading__title">
                        Explore Our Services and Solutions
                    </h3>
                    <p class="section-heading__desc">
                        Voluptatem, fugit, facilis iure eligendi doloremque nisi minima ipsam corrupti vero eaque quo aut voluptatibus! Necessitatibus minima
                    </p>
                </div>
                <a class="btn btn--base" href="contact">
                    <span class="btn--icon"><i class="icon-View-More"></i></span>
                    Contact Us
                </a>
            </div>
            <div class="col-md-6">
                <div class="accordion custom--accordion" id="faqList">
                                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq0"
                                    type="button" aria-expanded="true" aria-controls="faq0">
                                    Explore Our Services and Solutions
                                </button>
                            </h2>
                            <div class="accordion-collapse show collapse" id="faq0"
                                data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Voluptatem, fugit, facilis iure eligendi doloremque nisi minima ipsam corrupti vero eaque quo aut voluptatibus! Necessitatibus minima
                                    </p>
                                </div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1"
                                    type="button" aria-expanded="false" aria-controls="faq1">
                                    Cum molestias sequi dignissimos nemo?
                                </button>
                            </h2>
                            <div class="accordion-collapse  collapse" id="faq1"
                                data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Quibusdam reprehenderit blanditiis adipisci facilis fugit, harum ab iste temporibus eveniet dolore porro ex excepturi consequatur.
                                    </p>
                                </div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2"
                                    type="button" aria-expanded="false" aria-controls="faq2">
                                    Cum molestias sequi dignissimos nemo?
                                </button>
                            </h2>
                            <div class="accordion-collapse  collapse" id="faq2"
                                data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Alias ducimus autem, laudantium rerum quas libero dolorem? Inventore, corrupti, nihil iste distinctio asperiores
                                    </p>
                                </div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3"
                                    type="button" aria-expanded="false" aria-controls="faq3">
                                    harum ab iste temporibus eveniet dolore porro
                                </button>
                            </h2>
                            <div class="accordion-collapse  collapse" id="faq3"
                                data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Alias ducimus autem, laudantium rerum quas libero dolorem? Inventore, corrupti, nihil iste distinctio asperiores
                                    </p>
                                </div>
                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
</section>
                    <section class="our-services py-60">
        <div class="container">
            <div class="row gy-5">
                                    <div class="col-md-3 col-6 col-xsm-6">
                        <div class="our-service-card flex-align counterup-item">
                            <div class="our-service-card__thumb">
                                <div class="border-vertical"></div>
                                <div class="border-horizontal"></div>
                                <span class="icon">
                                    <i class="las la-users"></i>                                </span>
                            </div>
                            <div class="our-service-card__content">
                                <p class="our-service-card__subtitle">
                                    Satisfied Client
                                </p>
                                <h4 class="our-service-card__title flex-align">
                                    <span class="odometer" data-odometer-final="323"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                                    <div class="col-md-3 col-6 col-xsm-6">
                        <div class="our-service-card flex-align counterup-item">
                            <div class="our-service-card__thumb">
                                <div class="border-vertical"></div>
                                <div class="border-horizontal"></div>
                                <span class="icon">
                                    <i class="las la-store-alt"></i>                                </span>
                            </div>
                            <div class="our-service-card__content">
                                <p class="our-service-card__subtitle">
                                    Total Branches
                                </p>
                                <h4 class="our-service-card__title flex-align">
                                    <span class="odometer" data-odometer-final="100"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                                    <div class="col-md-3 col-6 col-xsm-6">
                        <div class="our-service-card flex-align counterup-item">
                            <div class="our-service-card__thumb">
                                <div class="border-vertical"></div>
                                <div class="border-horizontal"></div>
                                <span class="icon">
                                    <i class="las la-user-friends"></i>                                </span>
                            </div>
                            <div class="our-service-card__content">
                                <p class="our-service-card__subtitle">
                                    Total Staffs
                                </p>
                                <h4 class="our-service-card__title flex-align">
                                    <span class="odometer" data-odometer-final="865"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                                    <div class="col-md-3 col-6 col-xsm-6">
                        <div class="our-service-card flex-align counterup-item">
                            <div class="our-service-card__thumb">
                                <div class="border-vertical"></div>
                                <div class="border-horizontal"></div>
                                <span class="icon">
                                    <i class="las la-people-carry"></i>                                </span>
                            </div>
                            <div class="our-service-card__content">
                                <p class="our-service-card__subtitle">
                                    Total Member
                                </p>
                                <h4 class="our-service-card__title flex-align">
                                    <span class="odometer" data-odometer-final="387534"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                            </div>
        </div>
    </section>
                    <section class="branches-section py-120 section-bg">
    <div class="branches-animation">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>
    <div class="container">
        <div class="section-heading">
            <h3 class="section-heading__title">Our Top Branches</h3>
            <p class="section-heading__desc">Here is more information about our courier company branches, Where we are belong</p>
        </div>
        <div class="row gy-3 gx-5">
                            <div class="col-lg-3 col-sm-6 col-xsm-6">
                    <div class="branch-card">
                        <h6 class="branch-card__title">India</h6>
                        <div class="branch-card__content">
                            <ul class="branch-card__list">
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-Location-Icon"></i></span>
                                    <div class="content">
                                        <p class="title">Location</p>
                                        <span class="desc d-block">
                                            Kolkata, India
                                        </span>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-phone-call"></i></span>
                                    <div class="content">
                                        <p class="title">Mobile</p>
                                        <a class="desc d-block" href="tel:(406) 555-0120">
                                            (406) 555-0120
                                        </a>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-email"></i></span>
                                    <div class="content">
                                        <p class="title">Email</p>
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#c0a5b8a1adb0aca580eea3afad">
                                            <span class="__cf_email__" data-cfemail="aecbd6cfc3dec2cbee80cdc1c3">[email&#160;protected]</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-sm-6 col-xsm-6">
                    <div class="branch-card">
                        <h6 class="branch-card__title">United Kingdom</h6>
                        <div class="branch-card__content">
                            <ul class="branch-card__list">
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-Location-Icon"></i></span>
                                    <div class="content">
                                        <p class="title">Location</p>
                                        <span class="desc d-block">
                                            Old city, United Kingdom
                                        </span>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-phone-call"></i></span>
                                    <div class="content">
                                        <p class="title">Mobile</p>
                                        <a class="desc d-block" href="tel:(406) 555-0122">
                                            (406) 555-0122
                                        </a>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-email"></i></span>
                                    <div class="content">
                                        <p class="title">Email</p>
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#03667b626e736f66432d606c6e">
                                            <span class="__cf_email__" data-cfemail="bcd9c4ddd1ccd0d9fc92dfd3d1">[email&#160;protected]</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-sm-6 col-xsm-6">
                    <div class="branch-card">
                        <h6 class="branch-card__title">South Africa</h6>
                        <div class="branch-card__content">
                            <ul class="branch-card__list">
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-Location-Icon"></i></span>
                                    <div class="content">
                                        <p class="title">Location</p>
                                        <span class="desc d-block">
                                            Hanover, South Africa
                                        </span>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-phone-call"></i></span>
                                    <div class="content">
                                        <p class="title">Mobile</p>
                                        <a class="desc d-block" href="tel:(406) 555-1256">
                                            (406) 555-1256
                                        </a>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-email"></i></span>
                                    <div class="content">
                                        <p class="title">Email</p>
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#74110c1519041811345a171b19">
                                            <span class="__cf_email__" data-cfemail="45203d2428352920056b262a28">[email&#160;protected]</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-sm-6 col-xsm-6">
                    <div class="branch-card">
                        <h6 class="branch-card__title">Pakistan</h6>
                        <div class="branch-card__content">
                            <ul class="branch-card__list">
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-Location-Icon"></i></span>
                                    <div class="content">
                                        <p class="title">Location</p>
                                        <span class="desc d-block">
                                            Islamabad, Pakistan
                                        </span>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-phone-call"></i></span>
                                    <div class="content">
                                        <p class="title">Mobile</p>
                                        <a class="desc d-block" href="tel:(406) 555-0120">
                                            (406) 555-0120
                                        </a>
                                    </div>
                                </li>
                                <li class="branch-card__item">
                                    <span class="icon"><i class="icon-email"></i></span>
                                    <div class="content">
                                        <p class="title">Email</p>
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#ee8b968f839e828baec08d8183">
                                            <span class="__cf_email__" data-cfemail="ee8b968f839e828baec08d8183">[email&#160;protected]</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    </div>
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
                                    </a>
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
                                    <a class="desc fs-14 d-block" href="/cdn-cgi/l/email-protection#b2c1c7c2c2ddc0c6f2d1ddc7c0dbd7c0ded3d09cd1dddf">
                                        <span class="__cf_email__" data-cfemail="91e2e4e1e1fee3e5d1f2fee4e3f8f4e3fdf0f3bff2fefc">[email&#160;protected]</span>
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
