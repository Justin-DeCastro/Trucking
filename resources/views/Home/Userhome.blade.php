
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


    
    
    <section class="banner-section bg-img mb-60"
    data-background-image="Home/remove.png">
    <div class="h-100 container">
        <div class="row h-100">
            <div class="col-xl-5 col-lg-6">
                <div class="banner-content">
                    <h1 class="banner-content__title">We Provide Best Dispatch &amp; Parcel Service</h1>
                    <div class="banner-content__button d-flex align-items-center gap-3">
                        <a class="btn btn--base" href="ordertracking">
                            <span class="btn--icon"><i class="icon-View-More"></i></span>
                            Track Your Order
                        </a>
                        <a class="btn btn-outline--base" href="contact">
                            <span class="btn--icon"><i class="icon-View-More"></i></span>
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
                                    <a class="banner-social-list-link" href="https://www.instagram.com/" target="_blank">
                                        Instagram
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
            <div class="">
    <span class="img">
        <img src="Home/remove.png" alt="banner-thumb" style="height: 500px; width: 1500px;">
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
                        <div class="feature-card ">
                            <div class="feature-card__thumb flex-center">
                                <span class="icon">
                                    <i class="las la-globe-africa"></i>                                </span>
                            </div>
                            <div class="feature-card__content">
                                <h5 class="feature-card__title"> Apply Online </h5>
                                <p class="feature-card__desc">
                                    Assumenda fugiat neque molestias recusandae nesciunt, ipsam porro expedita impedit tenetur dolorum sint error est natus ex harum.
                                </p>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-4">
                        <div class="feature-card center-card">
                            <div class="feature-card__thumb flex-center">
                                <span class="icon">
                                    <i class="lar la-check-circle"></i>                                </span>
                            </div>
                            <div class="feature-card__content">
                                <h5 class="feature-card__title"> Submit Documents </h5>
                                <p class="feature-card__desc">
                                    Assumenda fugiat neque molestias recusandae nesciunt, ipsam porro expedita impedit tenetur dolorum sint error est natus ex harum.
                                </p>
                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-4">
                        <div class="feature-card ">
                            <div class="feature-card__thumb flex-center">
                                <span class="icon">
                                    <i class="las la-file-invoice"></i>                                </span>
                            </div>
                            <div class="feature-card__content">
                                <h5 class="feature-card__title"> Receive Goods </h5>
                                <p class="feature-card__desc">
                                    Assumenda fugiat neque molestias recusandae nesciunt, ipsam porro expedita impedit tenetur dolorum sint error est natus ex harum.
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
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/about/6652bdd4420ea1716698580.jpg" alt="about image">
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
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/about/6652bdd53f83f1716698581.png" alt="about image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-heading style-left">
                    <h3 class="section-heading__title">30+ Years Experiences in Courier Service</h3>
                    <p class="section-heading__desc">
                        Doloribus debitis dolores amet, minus qui eaque itaque, doloremque at ipsa ab reiciendis assumenda et labore asperiores, cumque impedit! Corrupti, alias laboriosam!
                    </p>
                </div>
                                    <ul class="about-services">
                                                    <li class="about-services__item">
                                <div class="about-services__thumb">
                                    <span class="icon">
                                        <i class="lab la-delicious"></i>                                    </span>
                                </div>
                                <div class="about-services__content">
                                    <h6 class="about-services__title">
                                        Fast Delivery
                                    </h6>
                                    <p class="about-services__desc">
                                        Ut recusandae non veniam obcaecati, sunt earum atque cumque, alias quae molestiae quo, ad debitis saepe.
                                    </p>
                                </div>
                            </li>
                                                    <li class="about-services__item">
                                <div class="about-services__thumb">
                                    <span class="icon">
                                        <i class="fas fa-money-check-alt"></i>                                    </span>
                                </div>
                                <div class="about-services__content">
                                    <h6 class="about-services__title">
                                        Lowest Cost
                                    </h6>
                                    <p class="about-services__desc">
                                        Ut recusandae non veniam obcaecati, sunt earum atque cumque, alias quae molestiae quo, ad debitis saepe.
                                    </p>
                                </div>
                            </li>
                                                    <li class="about-services__item">
                                <div class="about-services__thumb">
                                    <span class="icon">
                                        <i class="lab la-servicestack"></i>                                    </span>
                                </div>
                                <div class="about-services__content">
                                    <h6 class="about-services__title">
                                        Secured Services
                                    </h6>
                                    <p class="about-services__desc">
                                        Ut recusandae non veniam obcaecati, sunt earum atque cumque, alias quae molestiae quo, ad debitis saepe.
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
                    Provides specialized delivery services for packages, documents, and other items from one location to another.
                </p>
            </div>
            <div class="col-12">
                <div class="service-card-list">
                                            <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c2151b4551716699669.png" alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Standard Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos, deleniti, quia voluptas aliquam nobis sit atque asperiores, debitis accusantium voluptatibus illum esse.
                                </p>
                            </div>
                        </div>
                                            <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c220521ad1716699680.png" alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Express Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos, deleniti, quia voluptas aliquam nobis sit atque asperiores, debitis accusantium voluptatibus illum esse.
                                </p>
                            </div>
                        </div>
                                            <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c22c767151716699692.png" alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Pallet Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos, deleniti, quia voluptas aliquam nobis sit atque asperiores, debitis accusantium voluptatibus illum esse.
                                </p>
                            </div>
                        </div>
                                            <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c657a7f9d1716700759.png" alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Over Night Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos, deleniti, quia voluptas aliquam nobis sit atque asperiores, debitis accusantium voluptatibus illum esse.
                                </p>
                            </div>
                        </div>
                                            <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c6670f4a61716700775.png" alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    International Courier
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos, deleniti, quia voluptas aliquam nobis sit atque asperiores, debitis accusantium voluptatibus illum esse.
                                </p>
                            </div>
                        </div>
                                            <div class="service-card">
                            <div class="service-card__thumb">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/service/6652c66f3fb341716700783.png" alt="service">
                            </div>
                            <div class="service-card__content">
                                <h6 class="service-card__title">
                                    Warehousing
                                </h6>
                                <p class="service-card__desc">
                                    Beatae rem sapiente dolorum cumque consequuntur quae quasi dignissimos, deleniti, quia voluptas aliquam nobis sit atque asperiores, debitis accusantium voluptatibus illum esse.
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
            <h3 class="section-heading__title"> Our Expert Team </h3>
            <p class="section-heading__desc">
                Our expert team efficient and reliable delivery of packages, documents, and goods as part of a courier service.
            </p>
        </div>
        <div class="row gy-5">
                            <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6c0d62a01716700864.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> Liana Harris </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i>                                    </span>
                                    2549
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6ca6935b1716700874.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> Dew Brisk </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i>                                    </span>
                                    44856
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6d2180d11716700882.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> Harry Hardson </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i>                                    </span>
                                    5454
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/team/6652c6d94d3711716700889.png" alt="team member">
                        </div>
                        <div class="team-card__content">
                            <h6 class="team-card__title"> John Dew </h6>
                            <p class="team-card__designation">
                                Delivery Man
                            </p>
                            <div class="team-card__footer">
                                <p class="work-success">Complete Delivery :</p>
                                <span class="work-count"><span class="icon">
                                        <i class="fas fa-box"></i>                                    </span>
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
                        <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/666d5752d39bb1718441810.png" alt="client">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 d-lg-block d-none">
                    <div class="right-thumb">
                        <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/client/6652c01ba36121716699163.png" alt="client">
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
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore totam nam? Impedit, doloribus odit. Quo?
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
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore totam nam? Impedit, doloribus odit. Quo?
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
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore totam nam? Impedit, doloribus odit. Quo?
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
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore totam nam? Impedit, doloribus odit. Quo?
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
                                        Quas, illo. A commodi officia, eos, laborum expedita aliquid culpa ipsa neque dignissimos tempore id sed iste odit optio natus deleniti assumenda qui labore totam nam? Impedit, doloribus odit. Quo?
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
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#e08598818d908c85a0ce838f8d">
                                            <span class="__cf_email__" data-cfemail="92f7eaf3ffe2fef7d2bcf1fdff">[email&#160;protected]</span>
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
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#ea8f928b879a868faac4898587">
                                            <span class="__cf_email__" data-cfemail="583d20393528343d18763b3735">[email&#160;protected]</span>
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
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#aecbd6cfc3dec2cbee80cdc1c3">
                                            <span class="__cf_email__" data-cfemail="600518010d100c05204e030f0d">[email&#160;protected]</span>
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
                                        <a class="desc d-block" href="/cdn-cgi/l/email-protection#0b6e736a667b676e4b25686466">
                                            <span class="__cf_email__" data-cfemail="680d10090518040d28460b0705">[email&#160;protected]</span>
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
            <p class="section-heading__desc">Get our latest news from in here, also get what`s our update about our services</p>
        </div>
        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                    <div class="blog-item section-bg">
                        <div class="blog-item__thumb">
                            <a class="blog-item__thumb-link" href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident">
                                <img class="fit-image" src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/blog/thumb_6652be942783b1716698772.png"
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
                                <a class="blog-item__title-link border-effect" href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident">
                                    Praesentium at nobis unde quis aut quaerat autem libero in consequuntur recusand...
                                </a>
                            </h6>
                            <div class="blog-item__btn">
                                <a href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident" class="blog-item__btn-link">
                                    Read More                                    <span class="blog-item__icon">
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
                            <a class="blog-item__thumb-link" href="https://script.viserlab.com/courierlab/demo/blog/unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident-raesentium-at-nobis">
                                <img class="fit-image" src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/blog/thumb_6652bea668b111716698790.png"
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
                                <a class="blog-item__title-link border-effect" href="https://script.viserlab.com/courierlab/demo/blog/unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident-raesentium-at-nobis">
                                    Unde quis aut quaerat autem libero in consequuntur recusandae provident raesenti...
                                </a>
                            </h6>
                            <div class="blog-item__btn">
                                <a href="https://script.viserlab.com/courierlab/demo/blog/unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae-provident-raesentium-at-nobis" class="blog-item__btn-link">
                                    Read More                                    <span class="blog-item__icon">
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
                            <a class="blog-item__thumb-link" href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae">
                                <img class="fit-image" src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/blog/thumb_6652befe8dfca1716698878.png"
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
                                <a class="blog-item__title-link border-effect" href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae">
                                    Praesentium at nobis unde quis aut quaerat autem libero in consequuntur recusand...
                                </a>
                            </h6>
                            <div class="blog-item__btn">
                                <a href="https://script.viserlab.com/courierlab/demo/blog/praesentium-at-nobis-unde-quis-aut-quaerat-autem-libero-in-consequuntur-recusandae" class="blog-item__btn-link">
                                    Read More                                    <span class="blog-item__icon">
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
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1cc48d8f1716699596.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1c593a4a1716699589.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1bfadc831716699583.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1b96108d1716699577.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1b2ec8a01716699570.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1ac468801716699564.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c1a5ccbb01716699557.png" alt="partner">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/frontend/partner/6652c19fc34d11716699551.png" alt="partner">
                    </div>
    </div>
</div>
            

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
                                    <a class="desc fs-14 d-block" href="/cdn-cgi/l/email-protection#40333530302f323400232f35322925322c21226e232f2d">
                                        <span class="__cf_email__" data-cfemail="9be8eeebebf4e9efdbf8f4eee9f2fee9f7faf9b5f8f4f6">[email&#160;protected]</span>
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

    
            <!-- <div class="cookies-card hide text-center">
            <div class="cookies-card__icon bg--base">
                <i class="las la-cookie-bite"></i>
            </div>
            <p class="cookies-card__content mt-4">
                We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.
                <a href="https://script.viserlab.com/courierlab/demo/cookie-policy" target="_blank">learn more</a>
            </p>
            <div class="cookies-card__btn mt-4">
                <a class="btn btn--base w-100 policy" href="javascript:void(0)">Allow</a>
            </div>
        </div> -->
    
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
