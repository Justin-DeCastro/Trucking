<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<style>
.wave-card {
    position: relative;
    overflow: hidden;
    background: #fff; /* Background color of the card */
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    text-align: center;
}

.wave-card .wave-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px; /* Adjust height to control wave size */
    background: linear-gradient(to right, black, red, blue);
    border-radius: 0 0 50% 50%;
    transform: rotate(0deg);
    z-index: 0;
}

.team-card__thumb, .team-card__content {
    position: relative;
    z-index: 1; /* Ensure the content is above the wave background */
}

.team-card__thumb img {
    width: 100%;
    height: auto;
    border-radius: 15px 15px 0 0; /* Ensure image fits nicely into the card */
}

.team-card__content {
    padding: 1rem 0;
}

/* Optional: Add wave animation */
@keyframes wave-animation {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
    }
}

.wave-card .wave-overlay {
    animation: wave-animation 5s linear infinite;
}

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
        <div class="loader-p"></div>
        <div class="loading-text">

            <span>G</span>
            <span>D</span>
            <span>R</span>
            <span>&nbsp;</span>
            <span>W</span>
            <span>E</span>
            <span>B</span>
            <span>S</span>
            <span>I</span>
            <span>T</span>
            <span>E</span>
            <span>&nbsp;</span>
            <span>I</span>
            <span>S</span>
            <span>&nbsp;</span>
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
        </div>
    </div>



    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

    <div class="header-top d-lg-block d-none">
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
    </div>



    @include('Components.Home.Navbar')

    <section class="banner-section bg-img mb-60" data-background-image="Home/remove.png">
        <div class="h-100 container">
            <div class="row h-100">
                <div class="col-xl-5 col-lg-6">
                    <div class="banner-content">
                        <h1 class="banner-content__title">We Provide Best Dispatch &amp; Parcel Service</h1>
                        <div class="banner-content__button d-flex align-items-center gap-3">
                            <a class="btn btn--base" href="ordertracking">
                                Track Your Order
                            </a>
                            <a class="btn btn-outline--base" href="contact">
                                Contact Us
                            </a>
                        </div>
                        <div class="banner-social-list">
                            <ul class="banner-social-list-item flex-align">
                                <li>
                                    <a class="banner-social-list-link" href="https://www.facebook.com/" target="_blank">
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="banner-social-list-link" href="https://www.twitter.com/" target="_blank">
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a class="banner-social-list-link" href="https://www.linkedin.com/" target="_blank">
                                        Linkdin
                                    </a>
                                </li>
                                <li>
                                    <a class="banner-social-list-link" href="https://www.instagram.com/"
                                        target="_blank">
                                        Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="truck-container" style="margin-top:1px">
                        <span class="img">
                            <img src="Home/Truckgdr-removebg-preview.png" alt="truck" class="truck-img"  style="width: 100  %; height: auto;">
                        </span>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="feature-section py-60">
        <div class="container">
            <div class="row gx-0 gy-5">
                <div class="col-sm-4">
                    <div class="feature-card">
                        <div class="feature-card__thumb flex-center">
                            <span class="icon">
                                <i class="fas fa-globe"></i>
                            </span>
                        </div>
                        <div class="feature-card__content">
                            <h5 class="feature-card__title"> Apply Online </h5>
                            <p class="feature-card__desc">
                                Easily apply for our services online from anywhere in the philippines. Enjoy a streamlined process that saves you time and effort.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-card center-card">
                        <div class="feature-card__thumb flex-center">
                            <span class="icon">
                                <i class="fas fa-check-circle"></i>
                            </span>
                        </div>
                        <div class="feature-card__content">
                            <h5 class="feature-card__title"> Submit Documents </h5>
                            <p class="feature-card__desc">
                                Upload your documents securely with just a few clicks. Our platform ensures your data is protected at all times.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-card">
                        <div class="feature-card__thumb flex-center">
                            <span class="icon">
                                <i class="fas fa-file-invoice"></i>
                            </span>
                        </div>
                        <div class="feature-card__content">
                            <h5 class="feature-card__title"> Receive Goods </h5>
                            <p class="feature-card__desc">
                                Receive your goods swiftly and securely. Our reliable delivery network ensures your order arrives on time, every time.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about-section py-60">
        <div class="container">
            <div class="row gx-4 gy-4">
                <div class="col-lg-7">
                    <div class="row gy-3">
                        <div class="col-sm-7 col-xsm-6">
                            <div class="about-img-overlay position-relative h-100">
                                <div class="about-card-content flex-align position-absolute">
                                    <div class="overlay-card">
                                        <h3 class="overlay-card__title">
                                            28K
                                        </h3>
                                        <p class="overlay-card__desc">
                                            Satisfied Clients
                                        </p>
                                    </div>
                                    <div class="overlay-card">
                                        <h3 class="overlay-card__title">
                                            500
                                        </h3>
                                        <p class="overlay-card__desc">
                                            Delivery Man
                                        </p>
                                    </div>
                                </div>
                                <div class="section-thumb h-100">
                                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/about/6652bdd4420ea1716698580.jpg"
                                        alt="about image">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-xsm-6">
                            <div class="about-img-overlay-alt h-100">
                                <div class="about-card-content">
                                    <div class="overlay-card w-100">
                                        <h3 class="overlay-card__title d-inline">
                                            30+
                                        </h3>
                                        <p class="overlay-card__desc d-inline">
                                            Years Experiences in Courier Service
                                        </p>
                                    </div>
                                </div>
                                <div class="section-thumb h-100">
                                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/about/6652bdd53f83f1716698581.png"
                                        alt="about image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading style-left">
                        <h3 class="section-heading__title">30+ Years Experiences in Courier Service</h3>
                        <p class="section-heading__desc">
                            Doloribus debitis dolores amet, minus qui eaque itaque, doloremque at ipsa ab reiciendis
                            assumenda et labore asperiores, cumque impedit! Corrupti, alias laboriosam!
                        </p>
                    </div>
                    <ul class="about-services">
                        <li class="about-services__item">
                            <div class="about-services__thumb">
                                <span class="icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </span>
                            </div>
                            <div class="about-services__content">
                                <h6 class="about-services__title">
                                    Fast Delivery
                                </h6>
                                <p class="about-services__desc">
                                    Experience swift and timely deliveries with our top-tier logistics solutions. We ensure your parcels reach their destination quickly and efficiently.
                                </p>
                            </div>
                        </li>
                        <li class="about-services__item">
                            <div class="about-services__thumb">
                                <span class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </span>
                            </div>
                            <div class="about-services__content">
                                <h6 class="about-services__title">
                                    Lowest Cost
                                </h6>
                                <p class="about-services__desc">
                                    Enjoy the most competitive prices in the market without compromising on service quality. We offer cost-effective solutions for all your courier needs.
                                </p>
                            </div>
                        </li>
                        <li class="about-services__item">
                            <div class="about-services__thumb">
                                <span class="icon">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <div class="about-services__content">
                                <h6 class="about-services__title">
                                    Secured Services
                                </h6>
                                <p class="about-services__desc">
                                    Your security is our priority. Our advanced security protocols ensure your parcels are protected throughout the delivery process, providing you peace of mind.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section py-60 section-bg">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h3 class="section-heading__title"> What We Serve </h3>
                    <p class="section-heading__desc">
                        Provides specialized delivery services for packages, documents, and other items from one
                        location to another.
                    </p>
                </div>
                <div class="col-12">
                    <div class="service-card-list">
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c2151b4551716699669.png"
                                    alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Standard Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos,
                                    deleniti,
                                    quia voluptas aliquam nobis sit atque asperiores, debitis accusantium
                                    voluptatibus
                                    illum esse.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c220521ad1716699680.png"
                                    alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Express Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos,
                                    deleniti,
                                    quia voluptas aliquam nobis sit atque asperiores, debitis accusantium
                                    voluptatibus
                                    illum esse.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c22c767151716699692.png"
                                    alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Pallet Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos,
                                    deleniti,
                                    quia voluptas aliquam nobis sit atque asperiores, debitis accusantium
                                    voluptatibus
                                    illum esse.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c657a7f9d1716700759.png"
                                    alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Over Night Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos,
                                    deleniti,
                                    quia voluptas aliquam nobis sit atque asperiores, debitis accusantium
                                    voluptatibus
                                    illum esse.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c6670f4a61716700775.png"
                                    alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    International Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos,
                                    deleniti,
                                    quia voluptas aliquam nobis sit atque asperiores, debitis accusantium
                                    voluptatibus
                                    illum esse.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c66f3fb341716700783.png"
                                    alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Warehousing
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos,
                                    deleniti,
                                    quia voluptas aliquam nobis sit atque asperiores, debitis accusantium
                                    voluptatibus
                                    illum esse.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section py-120">
        <div class="container">
            <div class="section-heading">
                <h3 class="section-heading__title">Our Expert Team</h3>
                <p class="section-heading__desc">
                    Our expert team is efficient and reliable in the delivery of packages, documents, and goods as part of a
                    courier service.
                </p>
            </div>
            <div class="row gy-5">
                <!-- Team Member 1 -->
                @foreach($employees as $employee)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="wave-card">
                        <div class="wave-overlay"></div>
                        <div class="team-card__thumb">
                            <img src="{{ asset($employee->profile_image) }}" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title">{{ $employee->name }}</h6>
                            <p class="team-card__designation">{{ $employee->position }}</p>
                            <div class="team-card__footer">
                                <p class="work-success">ID NUMBER :</p>
                                <span class="work-count">
                                    <span class="icon"><i class="fas fa-id-card"></i></span> {{ $employee->id_number }}

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                <!-- Team Member 2 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="wave-card">
                        <div class="wave-overlay"></div>
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6c0d62a01716700864.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title">John Doe</h6>
                            <p class="team-card__designation">Courier Specialist</p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon"><i class="fas fa-box"></i></span> 3210</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="wave-card">
                        <div class="wave-overlay"></div>
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6c0d62a01716700864.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title">Emily Smith</h6>
                            <p class="team-card__designation">Logistics Manager</p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon"><i class="fas fa-box"></i></span> 1765</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="wave-card">
                        <div class="wave-overlay"></div>
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6c0d62a01716700864.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title">Michael Brown</h6>
                            <p class="team-card__designation">Fleet Coordinator</p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon"><i class="fas fa-box"></i></span> 1423</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar structure for other team members -->
            </div>
        </div>
    </section>


    <section class="testimonials py-120 section-bg">
        <div class="container-fluid">
            <div class="section-overlay">
                <div class="row g-0 h-100">
                    <div class="col-xl-7 col-lg-8">
                        <div class="left-thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/666d5752d39bb1718441810.png"
                                alt="client">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-lg-block d-none">
                        <div class="right-thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c01ba36121716699163.png"
                                alt="client">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-slider">
                            <div class="testimonails-card">
                                <div class="testimonial-item">
                                    <div class="testimonial-item__content">
                                        <div class="testimonial-item__info">
                                            <div class="testimonial-item__thumb">
                                                <img class="fit-image"
                                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c06fba7c91716699247.png"
                                                    alt="client">
                                            </div>
                                            <div class="testimonial-item__details">
                                                <h6 class="testimonial-item__name">
                                                    Abu Desnan</h6>
                                                <span class="testimonial-item__designation">
                                                    Backend Developer
                                                </span>
                                                <div class="testimonial-item__rating">
                                                    <ul class="rating-list">
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa
                                        neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui
                                        labore
                                        totam nam? Impedit, doloribus odit. Quo?
                                    </p>
                                </div>
                            </div>
                            <div class="testimonails-card">
                                <div class="testimonial-item">
                                    <div class="testimonial-item__content">
                                        <div class="testimonial-item__info">
                                            <div class="testimonial-item__thumb">
                                                <img class="fit-image"
                                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c07b974651716699259.png"
                                                    alt="client">
                                            </div>
                                            <div class="testimonial-item__details">
                                                <h6 class="testimonial-item__name">
                                                    Md Jisan</h6>
                                                <span class="testimonial-item__designation">
                                                    Delivery Boy
                                                </span>
                                                <div class="testimonial-item__rating">
                                                    <ul class="rating-list">
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa
                                        neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui
                                        labore
                                        totam nam? Impedit, doloribus odit. Quo?
                                    </p>
                                </div>
                            </div>
                            <div class="testimonails-card">
                                <div class="testimonial-item">
                                    <div class="testimonial-item__content">
                                        <div class="testimonial-item__info">
                                            <div class="testimonial-item__thumb">
                                                <img class="fit-image"
                                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c08397e461716699267.png"
                                                    alt="client">
                                            </div>
                                            <div class="testimonial-item__details">
                                                <h6 class="testimonial-item__name">
                                                    Md Demo Sarker</h6>
                                                <span class="testimonial-item__designation">
                                                    Courier Customer
                                                </span>
                                                <div class="testimonial-item__rating">
                                                    <ul class="rating-list">
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa
                                        neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui
                                        labore
                                        totam nam? Impedit, doloribus odit. Quo?
                                    </p>
                                </div>
                            </div>
                            <div class="testimonails-card">
                                <div class="testimonial-item">
                                    <div class="testimonial-item__content">
                                        <div class="testimonial-item__info">
                                            <div class="testimonial-item__thumb">
                                                <img class="fit-image"
                                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c08dbe5ae1716699277.png"
                                                    alt="client">
                                            </div>
                                            <div class="testimonial-item__details">
                                                <h6 class="testimonial-item__name">
                                                    Alex Branda</h6>
                                                <span class="testimonial-item__designation">
                                                    Merchant
                                                </span>
                                                <div class="testimonial-item__rating">
                                                    <ul class="rating-list">
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa
                                        neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui
                                        labore
                                        totam nam? Impedit, doloribus odit. Quo?
                                    </p>
                                </div>
                            </div>
                            <div class="testimonails-card">
                                <div class="testimonial-item">
                                    <div class="testimonial-item__content">
                                        <div class="testimonial-item__info">
                                            <div class="testimonial-item__thumb">
                                                <img class="fit-image"
                                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c09543b5b1716699285.png"
                                                    alt="client">
                                            </div>
                                            <div class="testimonial-item__details">
                                                <h6 class="testimonial-item__name">
                                                    Carlos Rabanda</h6>
                                                <span class="testimonial-item__designation">
                                                    Business Owner
                                                </span>
                                                <div class="testimonial-item__rating">
                                                    <ul class="rating-list">
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i>
                                                        </li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa
                                        neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui
                                        labore
                                        totam nam? Impedit, doloribus odit. Quo?
                                    </p>
                                </div>
                            </div>
                        </div>
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
                            Voluptatem, fugit, facilis iure eligendi doloremque nisi minima ipsam corrupti vero
                            eaque
                            quo aut voluptatibus! Necessitatibus minima
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
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq0" type="button" aria-expanded="true" aria-controls="faq0">
                                    Explore Our Services and Solutions
                                </button>
                            </h2>
                            <div class="accordion-collapse show collapse" id="faq0" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Voluptatem, fugit, facilis iure eligendi doloremque nisi minima ipsam
                                        corrupti
                                        vero eaque quo aut voluptatibus! Necessitatibus minima
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" type="button" aria-expanded="false"
                                    aria-controls="faq1">
                                    Cum molestias sequi dignissimos nemo?
                                </button>
                            </h2>
                            <div class="accordion-collapse  collapse" id="faq1" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Quibusdam reprehenderit blanditiis adipisci facilis fugit, harum ab iste
                                        temporibus eveniet dolore porro ex excepturi consequatur.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq2" type="button" aria-expanded="false"
                                    aria-controls="faq2">
                                    Cum molestias sequi dignissimos nemo?
                                </button>
                            </h2>
                            <div class="accordion-collapse  collapse" id="faq2" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Alias ducimus autem, laudantium rerum quas libero dolorem? Inventore,
                                        corrupti,
                                        nihil iste distinctio asperiores
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq3" type="button" aria-expanded="false"
                                    aria-controls="faq3">
                                    harum ab iste temporibus eveniet dolore porro
                                </button>
                            </h2>
                            <div class="accordion-collapse  collapse" id="faq3" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Alias ducimus autem, laudantium rerum quas libero dolorem? Inventore,
                                        corrupti,
                                        nihil iste distinctio asperiores
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
                                <i class="las la-users"></i> </span>
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
                                <i class="las la-store-alt"></i> </span>
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
                                <i class="las la-user-friends"></i> </span>
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
                                <i class="las la-people-carry"></i> </span>
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
                <p class="section-heading__desc">Here is more information about our courier company branches, Where
                    we
                    are belong</p>
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
                                        <a class="desc d-block"
                                            href="/cdn-cgi/l/email-protection#e08598818d908c85a0ce838f8d">
                                            <span class="__cf_email__"
                                                data-cfemail="92f7eaf3ffe2fef7d2bcf1fdff">[email&#160;protected]</span>
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
                                        <a class="desc d-block"
                                            href="/cdn-cgi/l/email-protection#ea8f928b879a868faac4898587">
                                            <span class="__cf_email__"
                                                data-cfemail="583d20393528343d18763b3735">[email&#160;protected]</span>
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
                                        <a class="desc d-block"
                                            href="/cdn-cgi/l/email-protection#aecbd6cfc3dec2cbee80cdc1c3">
                                            <span class="__cf_email__"
                                                data-cfemail="600518010d100c05204e030f0d">[email&#160;protected]</span>
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
                                        <a class="desc d-block"
                                            href="/cdn-cgi/l/email-protection#0b6e736a667b676e4b25686466">
                                            <span class="__cf_email__"
                                                data-cfemail="680d10090518040d28460b0705">[email&#160;protected]</span>
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
    <section class="blog py-120">
        <div class="container">
            <div class="section-heading">
                <h2 class="section-heading__title">Our Blog Posts</h2>
                <p class="section-heading__desc">Get our latest news from in here, also get what`s our update about
                    our
                    services</p>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item section-bg">
                        <div class="blog-item__thumb">
                            <a class="blog-item__thumb-link"
                                href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident">
                                <img class="fit-image"
                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/blog/thumb_6652be942783b1716698772.png"
                                    alt="blog image">
                            </a>
                        </div>
                        <div class="blog-item__content">
                            <ul class="text-list flex-between gap-3">
                                <li class="text-list__item fs-14">
                                    <span class="text-list__item-icon text--base me-1">
                                        <i class="las la-clock"></i>
                                    </span>
                                    6 months ago
                                </li>
                            </ul>
                            <h6 class="blog-item__title">
                                <a class="blog-item__title-link border-effect"
                                    href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident">
                                    Praesentium at nobis unde quis aut quaerat autem libero in consequuntur
                                    recusand...
                                </a>
                            </h6>
                            <div class="blog-item__btn">
                                <a href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident"
                                    class="blog-item__btn-link">
                                    Read More <span class="blog-item__icon">
                                        <i class="las la-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item section-bg">
                        <div class="blog-item__thumb">
                            <a class="blog-item__thumb-link"
                                href="https://script.viserlab.com/courierlab/demo/blog/unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident-raesentium-at-nobis">
                                <img class="fit-image"
                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/blog/thumb_6652bea668b111716698790.png"
                                    alt="blog image">
                            </a>
                        </div>
                        <div class="blog-item__content">
                            <ul class="text-list flex-between gap-3">
                                <li class="text-list__item fs-14">
                                    <span class="text-list__item-icon text--base me-1">
                                        <i class="las la-clock"></i>
                                    </span>
                                    6 months ago
                                </li>
                            </ul>
                            <h6 class="blog-item__title">
                                <a class="blog-item__title-link border-effect"
                                    href="https://script.viserlab.com/courierlab/demo/blog/unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident-raesentium-at-nobis">
                                    Unde quis aut quaerat autem libero in consequuntur recusandae provident
                                    raesenti...
                                </a>
                            </h6>
                            <div class="blog-item__btn">
                                <a href="https://script.viserlab.com/courierlab/demo/blog/unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident-raesentium-at-nobis"
                                    class="blog-item__btn-link">
                                    Read More <span class="blog-item__icon">
                                        <i class="las la-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item section-bg">
                        <div class="blog-item__thumb">
                            <a class="blog-item__thumb-link"
                                href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae">
                                <img class="fit-image"
                                    src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/blog/thumb_6652befe8dfca1716698878.png"
                                    alt="blog image">
                            </a>
                        </div>
                        <div class="blog-item__content">
                            <ul class="text-list flex-between gap-3">
                                <li class="text-list__item fs-14">
                                    <span class="text-list__item-icon text--base me-1">
                                        <i class="las la-clock"></i>
                                    </span>
                                    6 months ago
                                </li>
                            </ul>
                            <h6 class="blog-item__title">
                                <a class="blog-item__title-link border-effect"
                                    href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae">
                                    Praesentium at nobis unde quis aut quaerat autem libero in consequuntur
                                    recusand...
                                </a>
                            </h6>
                            <div class="blog-item__btn">
                                <a href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae"
                                    class="blog-item__btn-link">
                                    Read More <span class="blog-item__icon">
                                        <i class="las la-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="client py-60 section-bg">
        <div class="container">
            <div class="client-logos client-slider">
                <img src="Home/apcargo.png" alt="clients">
                <img src="Home/flash.png" alt="clients">
                <img src="Home/growsari.png" alt="clients">
                <img src="Home/suysing.png" alt="clients">
                <img src="Home/vcargo.png" alt="clients">
                <img src="Home/xde.png" alt="clients">
                <img src="Home/jandt.png" alt="clients">

            </div>
        </div>
    </div>

    @include('Components.Home.Footer')
    @include('Components.Home.Script')
