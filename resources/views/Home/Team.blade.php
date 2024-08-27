
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
        <div class="loader-p"></div>
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

            <section class="breadcrumb bg-img mb-0"
    data-background-image="https://script.viserlab.com/courierlab/demo/assets/images/frontend/breadcrumb/6652bfd4ad66b1716699092.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title">Team</h2>
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

@include('Components.Home.Footer')



@include('Components.Home.Script')
</body>

</html>
