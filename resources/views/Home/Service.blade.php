<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<style>

</style>
@include('Components.Home.Header')

<style>
    .contact-list__item {
        display: flex;
        align-items: center;
    }

    .contact-list__item-icon {
        margin-right: 8px;
    }

    .contact-numbers a {
        margin-left: 15px;
        white-space: nowrap;
    }

    .bullet {
        margin: 0 10px;
        color: #2789FF;
    }

    .top-contact {
        justify-content: flex-end;
    }
</style>

<body>

    <div class="preloader">
        @include('Components.Home.Preloader')
    </div>



    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

    {{-- <div class="header-top d-lg-block d-none">
        <div class="container">
            <div class="top-header-wrapper d-flex justify-content-between align-items-center flex-wrap">
                <div class="top-contact d-flex align-items-center">
                    <ul class="contact-list d-flex">
                        <li class="contact-list__item d-flex align-items-center mr-4">
                            <span class="contact-list__item-icon flex-center">
                                <i class="fas fa-envelope-open"></i>
                            </span>
                            <a class="contact-list__link" href="mailto:gdrlogisticinc@outlook.com">
                                gdrlogisticinc@outlook.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-contact d-flex align-items-center">
                    <ul class="contact-list d-flex">
                        <li class="contact-list__item d-flex align-items-center text-right">
                            <span class="contact-list__item-icon flex-center">
                                <i class="fas fa-phone"></i>
                            </span>
                            <div class="contact-numbers d-flex align-items-center">
                                <a class="contact-list__link" href="tel:0917-7166-132">0917-7166-132</a>
                                <span class="bullet">&bull;</span>
                                <a class="contact-list__link" href="tel:0919-345-5535">0919-345-5535</a>
                                <span class="bullet">&bull;</span>
                                <a class="contact-list__link" href="tel:0917-819-1571">0917-819-1571</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}



    @include('Components.Home.Navbar')

    <section class="breadcrumb bg-img mb-0"
        data-background-image="https://script.viserlab.com/courierlab/demo/assets/images/frontend/breadcrumb/6652bfd4ad66b1716699092.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title">Service</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section py-60 section-bg">
    <div class="container">
        <div class="row">
            <div class="section-heading">
                <h3 class="section-heading__title"> Our Trucking Services </h3>
                <p class="section-heading__desc">
                    Offering reliable trucking services across the Philippines for the efficient transport of goods, packages, and more.
                </p>
            </div>
            <div class="col-12">
                <div class="service-card-list">
                    <div class="service-card">
                        <div class="service-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c2151b4551716699669.png"
                                alt="Standard Trucking Service">
                        </div>
                        <div class="service-card__content">
                            <h6 class="service-card__title">
                                Standard Trucking
                            </h6>
                            <p class="service-card__desc">
                                Our Standard Trucking service ensures reliable delivery of your goods across the Philippines, with a focus on safety and efficiency.
                            </p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c220521ad1716699680.png"
                                alt="Express Trucking Service">
                        </div>
                        <div class="service-card__content">
                            <h6 class="service-card__title">
                                Express Trucking
                            </h6>
                            <p class="service-card__desc">
                                Need it fast? Our Express Trucking service offers expedited delivery throughout the Philippines, ensuring timely arrival for urgent shipments.
                            </p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c22c767151716699692.png"
                                alt="Heavy Load Trucking">
                        </div>
                        <div class="service-card__content">
                            <h6 class="service-card__title">
                                Heavy Load Trucking
                            </h6>
                            <p class="service-card__desc">
                                Specializing in transporting heavy and oversized loads, our Heavy Load Trucking service ensures safe and efficient handling across the Philippines.
                            </p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c657a7f9d1716700759.png"
                                alt="Overnight Trucking">
                        </div>
                        <div class="service-card__content">
                            <h6 class="service-card__title">
                                Overnight Trucking
                            </h6>
                            <p class="service-card__desc">
                                For those last-minute deliveries, our Overnight Trucking service ensures that your shipments reach their destination by morning.
                            </p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c6670f4a61716700775.png"
                                alt="Regional Trucking">
                        </div>
                        <div class="service-card__content">
                            <h6 class="service-card__title">
                                Regional Trucking
                            </h6>
                            <p class="service-card__desc">
                                Covering key regions across the Philippines, our Regional Trucking service offers dependable delivery to major cities and towns.
                            </p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c66f3fb341716700783.png"
                                alt="Logistics and Warehousing">
                        </div>
                        <div class="service-card__content">
                            <h6 class="service-card__title">
                                Logistics and Warehousing
                            </h6>
                            <p class="service-card__desc">
                                Beyond trucking, we offer comprehensive logistics and warehousing solutions to manage and store your goods securely.
                            </p>
                        </div>
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
