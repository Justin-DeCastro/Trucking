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
                                <i class="las la-envelope-open"></i> </span>
                            <a class="contact-list__link"
                                href="/cdn-cgi/l/email-protection#e1929491918e9395a1828e94938884938d8083cf828e8c">
                                <span class="__cf_email__"
                                    data-cfemail="8bf8fefbfbe4f9ffcbe8e4fef9e2eef9e7eae9a5e8e4e6">[email&#160;protected]</span>
                            </a>
                        </li>
                        <li class="contact-list__item flex-align">
                            <span class="contact-list__item-icon flex-center">
                                <i class="las la-phone"></i> </span>
                            <a class="contact-list__link" href="tel:+44 123 1217">
                                +44 123 1217
                            </a>
                        </li>
                    </ul>
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

    <section class="tracking py-120">
        <div class="container">
            <div class="section-heading">
                <h3 class="section-heading__title">Order Tracking</h3>
                <p class="section-heading__desc">
                    Provides specialized delivery services for packages, documents, and other items from one location to
                    another.
                </p>
            </div>
            <div class="track-form">
            <form action="{{ route('track.booking') }}" method="get">
    <div class="input-group form-group flex-align mb-0">
        <input class="form-control form--control" name="trackingNumber" type="text" placeholder="Enter Your Tracking Number" required>
        <button class="input-group-text btn btn--base" type="submit">
            <span class="btn--icon"> <i class="icon-Product-Box"> </i> </span>
            Track Now
        </button>
    </div>
</form>

</div>

        </div>
    </section>


    @include('Components.Home.Footer')



@include('Components.Home.Script')
</body>

</html>