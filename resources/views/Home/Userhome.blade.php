<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<style>
    .wave-card {
        position: relative;
        overflow: hidden;
        background: #fff;
        /* Background color of the card */
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
        height: 100px;
        /* Adjust height to control wave size */
        background: linear-gradient(to right, black, red, blue);
        border-radius: 0 0 50% 50%;
        transform: rotate(0deg);
        z-index: 0;
    }

    .team-card__thumb,
    .team-card__content {
        position: relative;
        z-index: 1;
        /* Ensure the content is above the wave background */
    }

    .team-card__thumb img {
        width: 100%;
        height: auto;
        border-radius: 15px 15px 0 0;
        /* Ensure image fits nicely into the card */
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

@include('Components.Home.Header')

{{-- <button class="navbar-toggler header-button" data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent" type="button" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-bars"></i> <!-- Font Awesome hamburger icon -->
</button> --}}

<body>

    <div class="preloader">
        @include('Components.Home.Preloader')
    </div>



    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>
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
                        {{-- <div class="banner-social-list">
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
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="truck-container">
                        <span class="img">
                            <img src="Home/Truckgdr.png" alt="truck" class="truck-img"
                                style="width:800px; height: auto;">
                        </span>
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
    <section class="testimonials py-120 section-bg">
        <div class="container-fluid">
            <div class="section-overlay">
                <div class="row g-0 h-100">
                    <div class="col-xl-7 col-lg-8">
                        <div class="left-thumb">
                            <!-- Use Bootstrap Icons or any other icon library -->
                            <i class="bi bi-chat-dots" style="font-size: 100px;"></i>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-lg-block d-none">
                        <div class="right-thumb">
                            <i class="bi bi-chat-dots" style="font-size: 100px;"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-slider">
                            @foreach ($testimonials as $testimonial)
                                @if ($testimonial->status === 'Accepted')
                                    <div class="testimonails-card">
                                        <div class="testimonial-item">
                                            <div class="testimonial-item__content">
                                                <div class="testimonial-item__info">
                                                    <div class="testimonial-item__thumb">
                                                        <img class="fit-image" src="Home/user-avatar-male-5.png"
                                                            alt="client">
                                                    </div>
                                                    <div class="testimonial-item__details">
                                                        <h6 class="testimonial-item__name">{{ $testimonial->name }}
                                                        </h6>
                                                        <span
                                                            class="testimonial-item__designation">{{ $testimonial->position }}</span>
                                                        <div class="testimonial-item__rating">
                                                            <ul class="rating-list">
                                                                <li class="rating-list__item"><i
                                                                        class="fas fa-star"></i></li>
                                                                <li class="rating-list__item"><i
                                                                        class="fas fa-star"></i></li>
                                                                <li class="rating-list__item"><i
                                                                        class="fas fa-star"></i></li>
                                                                <li class="rating-list__item"><i
                                                                        class="fas fa-star"></i></li>
                                                                <li class="rating-list__item"><i
                                                                        class="fas fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-item__desc">
                                                {{ $testimonial->message }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Add the form here -->
                    <div class="col-lg-6">
                        <h1 class="text-center mb-4"
                            style="
        background: linear-gradient(45deg, black, blue, red);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
    ">
                            Feedback Form
                        </h1>
                        <div class="form-container p-4 border rounded shadow-lg bg-light">
                            <form class="form" action="{{ route('feedback.store') }}" method="post">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter your name" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" id="position" name="position" class="form-control"
                                        placeholder="Enter your position" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="textarea" class="form-label">How Can We Help You?</label>
                                    <textarea name="message" id="textarea" class="form-control" rows="5" placeholder="Your feedback" required></textarea>
                                </div>

                                <button class="btn btn-primary btn-lg w-100" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="about-section py-60">
        <div class="container">
            <div class="row gx-4 gy-4">
                <div class="col-lg-8">
                    <div class="row gy-3">
                        <div class="col-sm-7 col-xsm-6">
                            <div class="about-img-overlay position-relative h-100">
                                <div class="about-card-content flex-align position-absolute">
                                    <div class="overlay-card">
                                        <h3 class="overlay-card__title">
                                            100
                                        </h3>
                                        <p class="overlay-card__desc">
                                            Satisfied Clients
                                        </p>
                                    </div>
                                    <div class="overlay-card">
                                        <h3 class="overlay-card__title">
                                            50
                                        </h3>
                                        <p class="overlay-card__desc">
                                            Delivery Man
                                        </p>
                                    </div>
                                </div>
                                <div class="section-thumb h-100">
                                    <img src="Home/gdr_img.jpg" alt="about image">
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
                                    <img src="Home/GDRbox.png" alt="about image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="section-heading style-left" style="text-align:justify">
                        <h3 class="section-heading__title">30+ Years Experiences in Courier Service</h3>
                        <p class="section-heading__desc">
                            GDR LOGISTICS INC. was founded through the collaborative efforts, experiences, and expertise
                            of its owners: Mr. Gilbert Cporcuera of GPC Express, Mr. Dennis Jamir of DNJ Trucking, and
                            Mr. Roberto Jamir Jr. of TR3 Logistics.
                        </p>
                        <p class="section-heading__desc">
                            Our company is dedicated to providing timely, secure, and dependable distribution services
                            to any location in the Philippines. We are committed to building strong relationships with
                            our clients to ensure they receive reliable service.
                        </p>
                    </div>
                    <ul class="about-services" style="text-align:justify">
                        <li class="about-services__item">
                            <div class="about-services__thumb">
                                <span class="icon">
                                    <i class="fas fa-eye"></i> </span>
                            </div>
                            <div class="about-services__content">
                                <h6 class="about-services__title">
                                    Our Vision
                                </h6>
                                <p class="about-services__desc">
                                    GDR Logistics Inc. vision itself as top option in the logistics industry setting
                                    standards of low cost logistic solution while prodiving excellent service.
                                </p>
                            </div>
                        </li>
                        <li class="about-services__item">
                            <div class="about-services__thumb">
                                <span class="icon">
                                    <i class="fas fa-bullseye"></i> </span>
                            </div>
                            <div class="about-services__content">
                                <h6 class="about-services__title">
                                    Our Mission
                                </h6>
                                <p class="about-services__desc">
                                    GDR Logistics Inc. aims to provide worry-free, personalized and professional
                                    services to our clients. We aim to provide our client with efficient, reliable and
                                    innovative solutions that will contribute to the success of their busienss.
                                </p>
                            </div>
                        </li>

                    </ul>
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
                                Easily apply for our services online from anywhere in the philippines. Enjoy a
                                streamlined process that saves you time and effort.
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
                                Upload your documents securely with just a few clicks. Our platform ensures your data is
                                protected at all times.

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
                                Receive your goods swiftly and securely. Our reliable delivery network ensures your
                                order arrives on time, every time.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="team-section py-4 pt-4">
        <div class="container">
            <div class="row gy-5">
                <!-- Team Member 1 -->
                @foreach ($employees as $employee)
                    @if ($employee->status === 'Active')
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
                                            <span class="icon"><i class="fas fa-id-card"></i></span>
                                            {{ $employee->id_number }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


                <!-- Team Member 2 -->


                <!-- Repeat similar structure for other team members -->
            </div>
        </div>
    </section>
   
    
    <section class="service-section py-60 section-bg">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h3 class="section-heading__title">What We Serve</h3>
                    <p class="section-heading__desc">
                        We provide specialized delivery services for packages, documents, and other items to meet your
                        every need.
                    </p>
                </div>
                <div class="col-12">
                    <div class="service-card-list">
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <span class="icon"><i class="fas fa-truck"></i></span>
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Standard Courier
                                </h6>
                                <p class="service-card__desc">
                                    Our Standard Courier service ensures reliable and timely delivery for all your
                                    regular parcels. We focus on efficiency and affordability, making it the perfect
                                    choice for your everyday shipping needs.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <span class="icon"><i class="fas fa-bolt"></i></span>
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Express Courier
                                </h6>
                                <p class="service-card__desc">
                                    Need it fast? Our Express Courier service is designed for urgent deliveries,
                                    ensuring your packages arrive at their destination as quickly as possible, with the
                                    highest priority and care.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <span class="icon"><i class="fas fa-pallet"></i></span>
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Pallet Courier
                                </h6>
                                <p class="service-card__desc">
                                    Our Pallet Courier service is ideal for businesses that need to transport large
                                    quantities of goods. We provide secure and efficient pallet delivery to ensure your
                                    products reach their destination safely.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <span class="icon"><i class="fas fa-moon"></i></span>
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Overnight Courier
                                </h6>
                                <p class="service-card__desc">
                                    Get your packages delivered overnight with our Overnight Courier service. Perfect
                                    for when you need something delivered first thing in the morning, no matter where it
                                    needs to go.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <span class="icon"><i class="fas fa-globe"></i></span>
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Nationwide Courier
                                </h6>
                                <p class="service-card__desc">
                                    Our Nationwide Courier service ensures fast and reliable delivery across the
                                    country. We cater to all regions, providing comprehensive coverage and efficient
                                    service to get your packages where they need to be, safely and on time.
                                </p>
                            </div>
                        </div>
                        <div class="service-card">
                            <div class="service-card__thumb">
                                <span class="icon"><i class="fas fa-warehouse"></i></span>
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Warehousing
                                </h6>
                                <p class="service-card__desc">
                                    We offer comprehensive warehousing services to store your goods safely. Our secure
                                    storage facilities and inventory management solutions are perfect for businesses
                                    looking to optimize their logistics operations.
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
