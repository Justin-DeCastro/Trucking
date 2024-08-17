
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
            
@include('Components.Home.Footer')



@include('Components.Home.Script')
</body>

</html>
