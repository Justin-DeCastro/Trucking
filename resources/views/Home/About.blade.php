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

<br>
<br>
<br>
<br>
    <section class="breadcrumb bg-img mb-0" data-background-image="Home/Truckgdr-removebg-preview.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title">About</h2>
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
                        GDR LOGISTICS INC. was founded through the collaborative efforts, experiences, and expertise of its owners: Mr. Gilbert Cporcuera of GPC Express, Mr. Dennis Jamir of DNJ Trucking, and Mr. Roberto Jamir Jr. of TR3 Logistics.
                        </p>
                        <p class="section-heading__desc">
                        Our company is dedicated to providing timely, secure, and dependable distribution services to any location in the Philippines. We are committed to building strong relationships with our clients to ensure they receive reliable service.
                        </p>
                    </div>
                    <ul class="about-services">
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
                                   GDR Logistics Inc. vision itself as top option in the logistics industry setting standards of low cost logistic solution while prodiving excellent service.
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
                                   GDR Logistics Inc. aims to provide worry-free, personalized and professional services to our clients. We aim to provide our client with efficient, reliable and innovative solutions that will contribute to the success of their busienss.
                                </p>
                            </div>
                        </li>

                    </ul>
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
                            <i class="fas fa-users"></i> <!-- Changed to Font Awesome users icon -->
                        </span>
                    </div>
                    <div class="our-service-card__content">
                        <p class="our-service-card__subtitle">Satisfied Client</p>
                        <h4 class="our-service-card__title flex-align">
                            <span class="odometer" data-odometer-final="323">323</span>
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
                            <i class="fas fa-store"></i> <!-- Changed to Font Awesome store icon -->
                        </span>
                    </div>
                    <div class="our-service-card__content">
                        <p class="our-service-card__subtitle">Total Branches</p>
                        <h4 class="our-service-card__title flex-align">
                            <span class="odometer" data-odometer-final="100">100</span>
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
                            <i class="fas fa-users-cog"></i> <!-- Changed to Font Awesome users cog icon -->
                        </span>
                    </div>
                    <div class="our-service-card__content">
                        <p class="our-service-card__subtitle">Total Staffs</p>
                        <h4 class="our-service-card__title flex-align">
                            <span class="odometer" data-odometer-final="865">865</span>
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
                            <i class="fas fa-users"></i> <!-- Changed to Font Awesome users icon for members -->
                        </span>
                    </div>
                    <div class="our-service-card__content">
                        <p class="our-service-card__subtitle">Total Member</p>
                        <h4 class="our-service-card__title flex-align">
                            <span class="odometer" data-odometer-final="387534">387534</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- <section class="branches-section py-120 section-bg">
        <div class="branches-animation">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="container">
            <div class="section-heading">
                <h3 class="section-heading__title">Our Top Branches</h3>
                <p class="section-heading__desc">Here is more information about our courier company branches, Where we
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
                                        <a class="contact-list__link" href="mailto:example@gmail.com">
                                            <span>example@gmail.com</span>
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
                                            href="/cdn-cgi/l/email-protection#0e6b766f637e626b4e206d6163">
                                            <span class="__cf_email__"
                                                data-cfemail="93f6ebf2fee3fff6d3bdf0fcfe">[email&#160;protected]</span>
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
                                            href="/cdn-cgi/l/email-protection#caafb2aba7baa6af8ae4a9a5a7">
                                            <span class="__cf_email__"
                                                data-cfemail="26435e474b564a43660845494b">[email&#160;protected]</span>
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
                                            href="/cdn-cgi/l/email-protection#bbdec3dad6cbd7defb95d8d4d6">
                                            <span class="__cf_email__"
                                                data-cfemail="402538212d302c25006e232f2d">[email&#160;protected]</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="team-section py-120">
        <div class="container">
            <div class="section-heading">
                <h3 class="section-heading__title"> Our Expert Team </h3>
                <p class="section-heading__desc">
                    Our expert team efficient and reliable delivery of packages, documents, and goods as part of a
                    courier service.
                </p>
            </div>
            <div class="row gy-5">
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6c0d62a01716700864.png"
                                alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> Liana Harris </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i> </span>
                                    2549
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6ca6935b1716700874.png"
                                alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> Dew Brisk </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i> </span>
                                    44856
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6d2180d11716700882.png"
                                alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> Harry Hardson </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i> </span>
                                    5454
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6d94d3711716700889.png"
                                alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> John Dew </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i> </span>
                                    3563
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                                <img class="fit-image" src="Home/user-avatar-male-5.png" alt="client">
                                            </div>
                                            <div class="testimonial-item__details">
                                                <h6 class="testimonial-item__name">{{ $testimonial->name }}</h6>
                                                <span class="testimonial-item__designation">{{ $testimonial->position }}</span>
                                                <div class="testimonial-item__rating">
                                                    <ul class="rating-list">
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
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
                        <h1 class="text-center mb-4" style="
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
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" id="position" name="position" class="form-control" placeholder="Enter your position" required>
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
    {{-- <section class="testimonials py-120 section-bg">
        <div class="container-fluid">
            <div class="section-overlay">
                <div class="row g-0 h-100">
                    <div class="col-xl-7 col-lg-8">
                        <div class="left-thumb">
                            <img src="Home/Truckgdr-removebg-preview.png"
                                alt="client">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-lg-block d-none">
                        <div class="right-thumb">
                            <img src="Home/truckbox.jpg"
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
                                                    src="Home/trucker.jpgg"
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
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore
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
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore
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
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore
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
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore
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
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="fas fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i></li>
                                                        <li class="rating-list__item"><i class="far fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="testimonial-item__desc">
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque
                                        dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore
                                        totam nam? Impedit, doloribus odit. Quo?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="faq py-120 section-bg">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="section-heading style-left">
                        <h3 class="section-heading__title">
                            Explore Our Services and Solutions
                        </h3>
                        <p class="section-heading__desc">
                            To provide our clients with security GDR Logistics Inc. fleets have 10M coverage inland
                            marine insurance and GPS tracking device. The trucks are also individually insured.
                            We also have an ongoing application to PEZA and PHILGEPS.
                        </p>
                    </div>
                    <a class="btn btn--base" href="contact">
                        <span class="btn--icon"><i class="icon-View-More"></i></span>
                        Contact Us
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="faqList">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq0" aria-expanded="true" aria-controls="faq0">
                                    Explore Our Services and Solutions
                                    {{-- <i class="fas fa-chevron-down float-end"></i> --}}
                                </button>
                            </h2>
                            <div id="faq0" class="accordion-collapse collapse show" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        We offer a fleet of 40 units of 10-wheeler aluminum wing vans, designed
                                        for maximum durability and load capacity, perfect for transporting large
                                        and heavy goods securely.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                    9 Units of 6-Wheeler Closed Vans
                                    {{-- <i class="fas fa-chevron-down float-end"></i> --}}
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        Our 6-wheeler closed vans are available in 9 units, ideal for secure and
                                        weatherproof transportation of goods. These vans are equipped with
                                        advanced locking mechanisms and padded interiors to protect your cargo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    3 Units of 6-Wheeler Tractor Heads
                                    {{-- <i class="fas fa-chevron-down float-end"></i> --}}
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqList">
                                <div class="accordion-body">
                                    <p class="text">
                                        We also provide 3 units of 6-wheeler tractor heads, which are versatile
                                        and reliable for towing various types of trailers. These tractor heads
                                        are equipped with powerful engines and advanced driving systems to
                                        ensure efficient and safe transport.
                                    </p>
                                </div>
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
                <img src="Home/apcargo.png"
                    alt="clients">
                <img src="Home/flash.png"
                    alt="clients">
                <img src="Home/growsari.png"
                    alt="clients">
                <img src="Home/suysing.png"
                    alt="clients">
                <img src="Home/vcargo.png"
                    alt="clients">
                <img src="Home/xde.png"
                    alt="clients">
                <img src="Home/jandt.png"
                    alt="clients">

            </div>
        </div>
    </div>

@include('Components.Home.Footer')



    @include('Components.Home.Script')
</body>

</html>
